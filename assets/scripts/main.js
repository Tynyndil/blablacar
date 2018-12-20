document.querySelector("#trajectButton").addEventListener("click", loadTrajectCase);
let startPointInput = document.querySelector('.startPoint');
let arrivalPointInput = document.querySelector('.arrivalPoint');

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
    }
);

arrivalPointInput.addEventListener(
    'keypress',
    ()=>{
        arrivalPointInput = document.querySelector('.startPoint'); 
        arrivalPointInput.value = "Orléans";
    }
);

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


