document.querySelector("#trajectButton").addEventListener("click", loadTrajectCase);

function loadTrajectCase(){
    var mainContent = document.querySelector("#main");
    var trajectContent = document.querySelector("#trajectCase");
    mainContent.innerHTML = trajectContent.innerHTML;
}

document.querySelector("#walletButton").addEventListener("click", loadWalletCase);

function loadWalletCase(){
    var mainContent = document.querySelector("#main");
    var trajectContent = document.querySelector("#walletCase");
    mainContent.innerHTML = trajectContent.innerHTML;

    document.querySelector("#lessPriceButton").addEventListener("click", reduceTicketPrice);
    document.querySelector("#morePriceButton").addEventListener("click", increaseTicketPrice);
}

function reduceTicketPrice(){
    var currentPrice = parseInt(document.querySelector("#ticketPrice").innerHTML);
    currentPrice -= 1;
    document.querySelector("#ticketPrice").innerHTML = currentPrice;
    document.querySelector("#maxPrice").innerHTML = currentPrice;

    var priceCalculation = document.querySelector("#priceCalculation");
    var tickets = document.querySelector("#numberCalculation");

    priceCalculation.innerHTML = currentPrice;
    
    if(priceCalculation.innerHTML != "?" && tickets != "?"){
        var finalPrice = parseInt(priceCalculation.innerHTML) + parseInt(tickets.innerHTML);
        document.querySelector("#totalPrice").innerHTML = finalPrice;
    }

}

function increaseTicketPrice(){
    var currentPrice = parseInt(document.querySelector("#ticketPrice").innerHTML);
    currentPrice += 1;
    document.querySelector("#ticketPrice").innerHTML = currentPrice;
    document.querySelector("#maxPrice").innerHTML = currentPrice;

    var priceCalculation = document.querySelector("#priceCalculation");
    var tickets = document.querySelector("#numberCalculation");

    priceCalculation.innerHTML = currentPrice;
    
    if(priceCalculation.innerHTML != "?" && tickets.innerHTML != "?"){
        console.log("On peut calculer le prix final");
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

    if(priceCalculation.innerHTML != "?" && tickets.innerHTML != "?"){
        console.log("On peut calculer le prix final");
        var finalPrice = parseInt(priceCalculation.innerHTML) * parseInt(tickets.innerHTML);
        document.querySelector("#totalPrice").innerHTML = finalPrice;
    }
}


