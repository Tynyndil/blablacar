<?php include_once("header.php");
?>

    <div class="clear50"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 green t2000 bold center">Déposer une demande de trajet</div>

            <div class="clear100"></div>

            <div class="col-2">&nbsp</div>

            <div class="col-8">
                Grâce à <span class="blue_sky">BlaBlaCar+</span> vous pouvez déposer des <span class="blue_sky">demandes
                de trajet.</span> Les conducteurs effectuant le même trajet viendront eux-mêmes vous débaucher !<br/><br/>

                <span class="blue_sky">Tout le monde est gagnant !</span> Les conducteurs remplissent leurs voitures, et les passagers
                passent moins de temps à trouver le trajet qui leur correspond.

                <div class="clear30"></div>

                <input type="text" placeholder="Départ">
                <input type="text" placeholder="Destination" style="margin-top:10px;">

                <div class="grey_line"></div>

                <div class="row">
                    <div class="col-4">
                        Date et heure de départ<br/>
                        <span class="blue_sky bold">mar. 15 janv 08:00</span>
                    </div>
                    <div class="col-4">
                        Date et heure d'arrivé<br/>
                        <span class="bold">mar. 15 janv 10:00</span>
                    </div>
                    <div class="col-4">
                        Durée du trajet<br/>
                        <span class="bold">2 heures</span>
                    </div>
                </div>

                <div class="grey_line"></div>

                Tarif approximatif recherché<br/>
                <div class="row" id="price_needed" style="margin-top:15px;">
                    <div class="col-1 t2000 blue_sky"><button id="lessPriceButton" class="right"></button></div>
                    <div class="col-2 center blue_sky bold"><span id="ticketPrice">13</span>,00€</div>
                    <div class="col-1 t2000 blue_sky"><button id="morePriceButton" class="left"></button></div>
                    <div class="col-6 center">Valeur actuelle de vos billets : </div>
                </div>

                <div class="grey_line"></div>

                Nombre de places souhaité<br/>
                <div class="row" id="price_needed" style="margin-top:15px;">
                    <div class="col-1 t2000 blue_sky"><button id="lessPriceButton" class="right"></button></div>
                    <div class="col-2 center blue_sky bold"><span id="ticketPrice">1</span></div>
                    <div class="col-1 t2000 blue_sky"><button id="morePriceButton" class="left"></button></div>
                </div>

                <div class="grey_line"></div>

                <div class="center"><button class="blue_button">Demander un trajet</button></div>

            </div>

            <div class="col-2">&nbsp</div>

        </div>
        <div class="clear30"></div>
</div>


<?php include_once("footer.php");
?>
