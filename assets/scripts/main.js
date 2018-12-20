if(sessionStorage.getItem("userTicketPrice")){
    alert("Vous avez déja acheté " 
            + sessionStorage.getItem("userTicketNumber") 
            + " tickets d'une valeur de " 
            + sessionStorage.getItem("userTicketPrice") + " €, clear du sessionStorage");

    sessionStorage.clear();
}

document.querySelector("#trajectButton").addEventListener("click", loadTrajectCase);

function loadTrajectCase(){
    var mainContent = document.querySelector("#main");
    var trajectContent = document.querySelector("#trajectCase");
    mainContent.innerHTML = trajectContent.innerHTML;
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
    document.getElementById(numberOfTicket).classList.toggle("walletTicketNumberSelected");
    
    if(numberOfTicket == 5){
        document.getElementById("10").classList.remove("walletTicketNumberSelected");
        document.getElementById("20").classList.remove("walletTicketNumberSelected");
    }else if(numberOfTicket == 10){
        document.getElementById("5").classList.remove("walletTicketNumberSelected");
        document.getElementById("20").classList.remove("walletTicketNumberSelected");
    }else if(numberOfTicket == 20){
        document.getElementById("5").classList.remove("walletTicketNumberSelected");
        document.getElementById("10").classList.remove("walletTicketNumberSelected");
    }

    var walletPriceCalculation = document.querySelector("#walletPriceCalculation");
    var tickets = document.querySelector("#walletNumberCalculation");

    tickets.innerHTML = numberOfTicket;

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