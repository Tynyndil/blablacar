document.querySelector("#trajectButton").addEventListener("click", loadTrajectCase);

let startPointInput = document.querySelector('.startPoint');
let arrivalPointInput = document.querySelector('.arrivalPoint');
let prixMoyen = document.querySelector('#price');
let trajetLieux = document.querySelector('#price_sentence');

let noPause = document.querySelector('.sauce13');
let maybePause = document.querySelector('.sauce12');
let yesPause = document.querySelector('.sauce11');
let fuckYeahPause = document.querySelector('.sauce10');
let jemLaiSocisse = document.querySelector(".cockButton");
let myTraject = document.querySelector("#trajectMap");


document.addEventListener(
    'keypress',
    ()=>{
        const tempStartInput = document.querySelector('.startPoint');
        if(tempStartInput.value.length > 0){
            startPointInput = document.querySelector('.startPoint'); 
            startPointInput.value = "Paris";
            startPointInput.value.substring(1, startPointInput.value.length);
        }

        const tempArrivalInput = document.querySelector('.arrivalPoint');
        if(tempArrivalInput.value.length > 0){
            arrivalPointInput = document.querySelector('.arrivalPoint'); 
            arrivalPointInput.value = "Orléans";
            arrivalPointInput.value.substring(1, arrivalPointInput.value.length);
        }

        if(startPointInput.value.lastIndexOf("Paris") != -1 && arrivalPointInput.value.lastIndexOf("Orléans") != -1){
            trajetLieux = document.querySelector('#price_sentence');
            trajetLieux.innerHTML = "Prix moyen d'un trajet Paris/Orléans";
            prixMoyen = document.querySelector('#price');
            prixMoyen.innerHTML = "13";
            fuckYeahPause = document.querySelector('.sauce10');
            fuckYeahPause.innerHTML = "13";
            noPause = document.querySelector('.sauce13');
            noPause.innerHTML = prixMoyen.innerHTML;
        }else{
            prixMoyen = document.querySelector('#price');
            prixMoyen.innerHTML = "?";
            noPause = document.querySelector('.sauce13');
            noPause.innerHTML = prixMoyen.innerHTML;
            fuckYeahPause = document.querySelector('.sauce10');
            fuckYeahPause.innerHTML = "?";
        }
    }
);



if(sessionStorage.getItem("userTicketPrice")){
    alert("Vous avez déja acheté " 
            + sessionStorage.getItem("userTicketNumber") 
            + " tickets d'une valeur de " 
            + sessionStorage.getItem("userTicketPrice") + " €, clear du sessionStorage");
}

document.querySelector("#trajectButton").addEventListener("click", loadTrajectCase);

function loadTrajectCase(){
    var mainContent = document.querySelector("#main");
    var trajectContent = document.querySelector("#trajectCase");
    mainContent.innerHTML = trajectContent.innerHTML;
    // jemLaiSocisse.addEventListener("click", buyWalletTicketWorkingBetch);
}

function proposeTraject(){
    var mainContent = document.querySelector("#main");
    myTraject = document.querySelector("#trajectMap");
    mainContent.innerHTML = myTraject.innerHTML;
    if(parseInt(sessionStorage.getItem("userTicketNumber")) > 0){
        console.log("meem");
        mapOnScreen = document.querySelector('.mapContainer');
        mapOnScreen.classList.toggle("mapContainer");
        mapOnScreen.classList.toggle("jeanAymare");
        // mapOnScreen.style.background = 'url("../img/mapBuy.png") no-repeat;';
    }
    // jemLaiSocisse.addEventListener("click", buyWalletTicketWorkingBetch);
}

document.querySelector("#walletButton").addEventListener("click", loadWalletCase);

// Loading wallet case
function loadWalletCase(){
    var mainContent = document.querySelector("#main");
    var trajectContent = document.querySelector("#walletCase");
    mainContent.innerHTML = trajectContent.innerHTML;

    document.querySelector("#lessPriceButton").addEventListener("click", reduceTicketPrice);
    document.querySelector("#morePriceButton").addEventListener("click", increaseTicketPrice);
    document.querySelector("#buyTicket").addEventListener("click", buyWalletTicket);
}



// Wallet JS
// Click on less button for the prixe
function reduceTicketPrice(){
    var currentPrice = parseInt(document.querySelector("#walletTicketPrice").innerHTML);
    currentPrice -= 1;
    document.querySelector("#walletTicketPrice").innerHTML = currentPrice;
    document.querySelector("#maxWalletPrice").innerHTML = currentPrice;

    var walletPriceCalculation = document.querySelector("#walletPriceCalculation");
    var tickets = document.querySelector("#walletNumberCalculation");

    walletPriceCalculation.innerHTML = currentPrice;
    
    // Calculate final price
    if(walletPriceCalculation.innerHTML != "?" && tickets != "?"){
        var finalPrice = parseInt(walletPriceCalculation.innerHTML) + parseInt(tickets.innerHTML);
        document.querySelector("#totalWalletPrice").innerHTML = finalPrice;
    }

}

// CLick on plus button for the price
function increaseTicketPrice(){
    var currentPrice = parseInt(document.querySelector("#walletTicketPrice").innerHTML);
    currentPrice += 1;
    document.querySelector("#walletTicketPrice").innerHTML = currentPrice;
    document.querySelector("#maxWalletPrice").innerHTML = currentPrice;

    var walletPriceCalculation = document.querySelector("#walletPriceCalculation");
    var tickets = document.querySelector("#walletNumberCalculation");

    walletPriceCalculation.innerHTML = currentPrice;
    
    // Calculate final price
    if(walletPriceCalculation.innerHTML != "?" && tickets.innerHTML != "?"){
        var finalPrice = parseInt(walletPriceCalculation.innerHTML) * parseInt(tickets.innerHTML);
        document.querySelector("#totalWalletPrice").innerHTML = finalPrice;
    }
}

function walletTicketNumberSelection(numberOfTicket){
    document.getElementById(numberOfTicket).classList.toggle("ticketNumberSelected");
    
    if(numberOfTicket == 5){
        document.getElementById("10").classList.remove("ticketNumberSelected");
        document.getElementById("20").classList.remove("ticketNumberSelected");
    }else if(numberOfTicket == 10){
        document.getElementById("5").classList.remove("ticketNumberSelected");
        document.getElementById("20").classList.remove("ticketNumberSelected");
    }else if(numberOfTicket == 20){
        document.getElementById("5").classList.remove("ticketNumberSelected");
        document.getElementById("10").classList.remove("ticketNumberSelected");
    }

    var walletPriceCalculation = document.querySelector("#walletPriceCalculation");
    var tickets = document.querySelector("#walletNumberCalculation");
    yesPause = document.querySelector('.sauce11');
    maybePause = document.querySelector('.sauce12');

    tickets.innerHTML = numberOfTicket;
    yesPause.innerHTML = numberOfTicket;
    if(startPointInput.value.lastIndexOf("Paris") != -1 && arrivalPointInput.value.lastIndexOf("Orléans") != -1){
        maybePause.innerHTML = numberOfTicket*13;
    }else{
        maybePause.innerHTML = "?";
    }
    

    // Calculate final price
    if(walletPriceCalculation.innerHTML != "?" && tickets.innerHTML != "?"){
        var finalPrice = parseInt(walletPriceCalculation.innerHTML) * parseInt(tickets.innerHTML);
        document.querySelector("#totalWalletPrice").innerHTML = finalPrice;
    }
}

function buyWalletTicket(){
    var tickets = document.querySelector("#walletNumberCalculation");
    var ticketPrice = document.querySelector("#walletPriceCalculation");

    if(document.querySelector("#totalWalletPrice").innerHTML != "?"){
        sessionStorage.setItem("userTicketNumber", parseInt(tickets.innerHTML));
        sessionStorage.setItem("userTicketPrice", parseInt(ticketPrice.innerHTML));
    }else{
        alert("Erreur lors de l'achat des tickets")
    }
}

function buyWalletTicketWorkingBetch(){
    let maybePause = document.querySelector('.sauce12');
    let yesPause = document.querySelector('.sauce11');

    if(maybePause.innerHTML != "?"){
        sessionStorage.setItem("userTicketNumber", parseInt(yesPause.innerHTML));
        sessionStorage.setItem("userTicketPrice", 13);
    }else{
        alert("Erreur lors de l'achat des tickets")
    }
}