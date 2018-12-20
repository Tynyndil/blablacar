<?php include_once("header.php");
?>

<div class="container">

<div class="clear50"></div>

    <div class="row">
        <div class="col-3 backgroundGrey" style="margin:15px;">
            <span class="bold">Filtres de recherche</span>
            <div class="clear30"></div>
            <div style="padding-left:15px;border-left:2px solid rgb(190, 190, 190);">
                <input type="checkbox" id="allTrajects">
                <label for="allTrajects">Tous les trajets</label><br/>
                <input type="checkbox" id="smoking">
                <label for="smoking">Fumeur</label><br/>
                <input type="checkbox" id="animals">
                <label for="animals">Autoriser les animaux</label><br/>
                <input type="checkbox" id="documents">
                <label for="documents">Documents validés</label><br/>
                <input type="checkbox" id="now">
                <label for="now">Réservation immédiate</label><br/>

                <span class="bold">Type de voiture :</span>
                <div style="padding-left:15px">
                    <input type="radio" name="car" id="all" checked>
                    <label for="all">Tout type de voiture</label><br/>
                    <input type="radio" name="car" id="electric">
                    <label for="electric">Voiture électrique</label><br/>
                    <input type="radio" name="car" id="hybride">
                    <label for="hybride">Voiture hybride</label><br/>
                    <input type="radio" name="car" id="city">
                    <label for="city">Voiture citadine</label><br/>
                    <input type="radio" name="car" id="disabled">
                    <label for="disabled">Voiture pour PMR</label><br/>
                </div>
                
            </div> 
        </div>

        <div class="col-6" style="margin-top:20px;">
        <input type="text" value="Paris,centre -> Orléans,centre" class="bold blablaInput">
        <div class="clear30"></div>
            <div class="annonce">
                <img src="https://cdn.blablacar.com/comuto3/images/avatar/passenger-m.svg" class="userImage">
            </div>
        </div>

        <div class="col-3">&nbsp</div>

    </div>
    <div class="clear30"></div>
</div>

<?php include_once("footer.php");
?>
