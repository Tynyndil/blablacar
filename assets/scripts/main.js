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

}

function increaseTicketPrice(){
    var currentPrice = parseInt(document.querySelector("#ticketPrice").innerHTML);
    currentPrice += 1;
    document.querySelector("#ticketPrice").innerHTML = currentPrice;
}


