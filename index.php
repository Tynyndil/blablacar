<?php include_once("header.php");
?>

    <div class="clear50"></div>
    <div class="container">
        <div class="row center">
            <div class="col-12 green t2000 bold">BlaBlaCar+</div>
        </div>
        <div class="clear30"></div>

        <!-- Main Page with explanations -->
        <div class="row" id="main">
            <div class="col-2">&nbsp</div>

            <div class="col-8">
                <span class="blue_sky bold">BlaBlaCar+</span> est né de votre volonté à parfaire vos trajets, vos covoiturages, et votre expérience. 
                Car votre satisfaction est notre fer de lance.<br/><br/>

                Que vous fassiez un même trajet tous les jours, ou que vous vagabondiez à travers le territoire quand 
                bon vous semble, vous pouvez désormais <span class="blue_sky bold">réservez 
                en une fois 5, 10 ou 20 trajets.</span><br/><br/>

                Ne perdez plus de temps à chercher, en plus vous paierez moins cher !<br/><br/>

                <span class="blue_sky bold">Rapide, pratique, économique.</span>

                <div class="clear30"></div>

                <div class="row center">
                    <div class="col-12 green t2000 bold">Réservez vos trajets</div>
                </div>
                <div class="clear30"></div>
                <div class="row center">
                    <div class="col-12 blue_sky">Deux façons de profiter de BlaBlaCar+</div>
                </div>
                <div class="clear30"></div>

                <div class="row center">
                    <div class="col-6" style="border-right:2px solid #00AFF5;">
                        <span class="blue_sky bold t1500">1.</span> En choisissant un trajet<br/>
                        <img id="road_img" src="assets/img/route.png" alt="Trajet"><br/>
                        <button id="trajectButton" class="blue_button">Essayez</button>
                    </div>

                    <div class="col-6"><span class="blue_sky bold t1500">
                        2.</span> ...ou un tarif maximal<br/>
                        <img id="wallet_img" src="assets/img/wallet.png" alt="Trajet"><br/>
                        <button id="walletButton" class="blue_button">Essayez</button>
                    </div>
                </div>

                <div class="clear30"></div>

                En optant pour la première solution, soit un choisissant <span class="blue_sky bold">un trajet prédéfini</span>
                , vous pourrez <span class="blue_sky bold">achetez plusieurs tickets pour ce trajet ou un trajet du même prix
                en une fois !</span><br/><br/>

                Les avantages ? Vous n'aurez plus à payez les frais de réservation, vous pourrez planifiez vos trajets à 
                l'avance, et même vous faire démarcher par les conducteurs eux-mêmes pour effectuer vos trajets ! <br/><br/>

                Concernant la deuxième solution, c'est-à-dire en fixant <span class="blue_sky bold">un tarif maximal</span>
                , vous pourez acheter des tickets vous permettant de <span class="blue_sky bold">faire n'importe quel 
                trajet</span>, à condition que son prix ne dépasse pas le tarif que vous avez renseigné.<br/><br/>

                De la même manière, les frais de réservation disparaissent, les trajets sont planifiables et les conducteurs
                viennent vous démarcher !<br/><br/>

                <span class="blue_sky bold t1250">Alors, vous partez quand ?</span>
            </div>

            <div class="col-2">&nbsp</div>
        </div>

        <!-- Page where user want to buy tickets with a traject -->
        <div class="row" id="trajectCase" style="display:none;">
            <div class="col-3">&nbsp</div>

            <div class="col-6">
                <div class="center blue_sky t2000 bold">
                    Choisissez votre trajet<br/>
                    <img id="road_img" src="assets/img/route.png" alt="Trajet"><br/>
                </div>
                
                <input type="text" value="Paris" placeholder="Départ" class="startPoint">
                <input type="text" value="Orléans" placeholder="Destination" style="margin-top:10px;" class="arrivalPoint">

                <div class="grey_line"></div>

                <span id="price_sentence">Prix moyen d'un trajet Paris/Orléans<span><br/>
                <span id="price">13 €</span>

                <div class="grey_line"></div>

                Nombre de tickets désirés

                <div class="row">
                    <button class="trajectTicketNumber ticketNumber">5</button>
                    <button class="trajectTicketNumber ticketNumber">10</button>
                    <button class="trajectTicketNumber ticketNumber">20</button>
                </div>

                <div class="grey_line"></div>

                <div class="row">
                    <div class="col-3">
                        Récapitulatif<br/>
                        <span class="blue_sky" style="border-bottom: 1px solid #EDEDED;">13 x ?</span><br/>
                        <span class="blue_sky bold">?</span>
                    </div>
                    <div class="col-3">&nbsp</div>
                    <div class="col-6">Un seul de ces tickets permet d'effectuer n'importe quel trajet, à condition 
                        que son prix soit de 13 € maximum
                    </div>
                </div>

                <div class="grey_line"></div>

                <div class="center"><button class="blue_button">Acheter mes tickets</button></div>
            </div>

            <div class="col-3">&nbsp</div>
        </div>

        <!-- Page where user want to buy tickets with a price -->
        <div class="row" id="walletCase" style="display:none;">
            <div class="col-3">&nbsp</div>

            <div class="col-6">
                <div class="center blue_sky t2000 bold">
                    Choisissez votre budget<br/>
                    <img id="road_img" src="assets/img/wallet.png" alt="Trajet"><br/>
                </div>

                <div class="row">
                    <div class="col-4 t2000 blue_sky"><button id="lessPriceButton" class="right"></button></div>
                    <div class="col-4 center blue_sky t2000 bold"><span id="walletTicketPrice">00</span>,00€</div>
                    <div class="col-4 t2000 blue_sky"><button id="morePriceButton" class="left"></button></div>
                </div>

                <div class="grey_line"></div>

                Nombre de tickets désirés

                <div class="row">
                    <button id="5" class="walletTicketNumber ticketNumber" onClick="walletTicketNumberSelection(this.id)">5</button>
                    <button id="10" class="walletTicketNumber ticketNumber" onClick="walletTicketNumberSelection(this.id)">10</button>
                    <button id="20" class="walletTicketNumber ticketNumber" onClick="walletTicketNumberSelection(this.id)">20</button>
                </div>

                <div class="grey_line"></div>

                <div class="row">
                    <div class="col-3">
                        Récapitulatif<br/>
                        <span class="blue_sky" style="border-bottom: 1px solid #EDEDED;">
                            <span id="walletPriceCalculation">?</span> € x <span id="walletNumberCalculation">?</span></span><br/>
                        <span class="blue_sky bold"><span id="totalWalletPrice">?</span> €</span>
                    </div>
                    <div class="col-3">&nbsp</div>
                    <div class="col-6">Un seul de ces tickets permet d'effectuer n'importe quel trajet, à condition 
                        que son prix soit de <span id="maxWalletPrice">? </span>€ maximum
                    </div>
                </div>

                <div class="grey_line"></div>

                <div class="center"><button id="buyTicket" class="blue_button">Acheter mes tickets</button></div>
            </div>

            <div class="col-3">&nbsp</div>
        </div>

        <div class="clear50"></div>

    </div>

<?php include_once("footer.php");
?>