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
    var currentPrice = parseInt(document.querySelector("#ticketPrice").innerHTML);
    currentPrice -= 1;
    document.querySelector("#ticketPrice").innerHTML = currentPrice;
    document.querySelector("#maxPrice").innerHTML = currentPrice;

    var priceCalculation = document.querySelector("#priceCalculation");
    var tickets = document.querySelector("#numberCalculation");

    priceCalculation.innerHTML = currentPrice;
    
    // Calculate final price
    if(priceCalculation.innerHTML != "?" && tickets != "?"){
        var finalPrice = parseInt(priceCalculation.innerHTML) + parseInt(tickets.innerHTML);
        document.querySelector("#totalPrice").innerHTML = finalPrice;
    }

}

// CLick on plus button for the price
function increaseTicketPrice(){
    var currentPrice = parseInt(document.querySelector("#ticketPrice").innerHTML);
    currentPrice += 1;
    document.querySelector("#ticketPrice").innerHTML = currentPrice;
    document.querySelector("#maxPrice").innerHTML = currentPrice;

    var priceCalculation = document.querySelector("#priceCalculation");
    var tickets = document.querySelector("#numberCalculation");

    priceCalculation.innerHTML = currentPrice;
    
    // Calculate final price
    if(priceCalculation.innerHTML != "?" && tickets.innerHTML != "?"){
        var finalPrice = parseInt(priceCalculation.innerHTML) * parseInt(tickets.innerHTML);
        document.querySelector("#totalPrice").innerHTML = finalPrice;
    }
}

function ticketNumberSelection(numberOfTicket){
    document.getElementById(numberOfTicket).classList.toggle("ticket_number_selected");
    
    if(numberOfTicket == 5){
        document.getElementById("10").classList.remove("ticket_number_selected");
        document.getElementById("20").classList.remove("ticket_number_selected");
    }else if(numberOfTicket == 10){
        document.getElementById("5").classList.remove("ticket_number_selected");
        document.getElementById("20").classList.remove("ticket_number_selected");
    }else if(numberOfTicket == 20){
        document.getElementById("5").classList.remove("ticket_number_selected");
        document.getElementById("10").classList.remove("ticket_number_selected");
    }

    var priceCalculation = document.querySelector("#priceCalculation");
    var tickets = document.querySelector("#numberCalculation");

    tickets.innerHTML = numberOfTicket;

    // Calculate final price
    if(priceCalculation.innerHTML != "?" && tickets.innerHTML != "?"){
        var finalPrice = parseInt(priceCalculation.innerHTML) * parseInt(tickets.innerHTML);
        document.querySelector("#totalPrice").innerHTML = finalPrice;
    }
}

function buyWalletTicket(){
    var tickets = document.querySelector("#numberCalculation");
    var ticketPrice = document.querySelector("#priceCalculation");

    if(document.querySelector("#totalPrice").innerHTML != "?"){
        sessionStorage.setItem("userTicketNumber", parseInt(tickets.innerHTML));
        sessionStorage.setItem("userTicketPrice", parseInt(ticketPrice.innerHTML));
    }else{
        alert("Erreur lors de l'achat des tickets")
    }
}