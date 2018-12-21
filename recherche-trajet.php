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
        <input type="text" value="Maçon,centre -> Lyon,centre" class="blablaInput">
        <div class="right" style="margin-top:10px;"><a href="demande-trajet.php"><button class="blue_button">Transformer ma demande en annonce</button></a></div>
        <div class="clear30"></div>

            <div class="annonce">
                <div class="contenuAnnonce bold">
                    <ul>
                        <li>
                            <div class="infosDepart">
                                <div class="heureDepart">10:00</div>
                                <div class="lieuDepart">
                                    <span class="villeDepart">Maçon</span>
                                    <div class="proximiteDepart">
                                        <div class="iconeDepart">
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px">
                                                <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        <li>
                        <div class="infosArrive">
                            <div class="heureArrive">12:00</div>
                            <div class="lieuArrive">
                                <span class="villeArrive">Lyon</span>
                                <div class="proximiteArrive">
                                    <div class="iconeArrive">
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px">
                                            <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                    </ul>
                    <div>
                        <span class="green prixAnnonce"> BlaBlaCar+ : 0.00€</span><br/><br/><br/>
                        <img class="carImage" src="assets/img/voiturePetite.svg" title="Petite voiture" alt="Petite voiture">
                    </div>
                </div>

                <div>
                    <img src="https://cdn.blablacar.com/comuto3/images/avatar/passenger-m.svg" class="userImage">
                    <span>Thierry</span>
                    <img class="imageBadge" title="As du volant" src="assets/img/asDuVolant.png" alt="">
                    <img class="imageBadge" title="M. Propre" src="assets/img/mPropre.png" alt="">
                    <img class="imageBadge" title="Confort" src="assets/img/confort.png" alt="">
                </div>
            </div>

            <div class="annonce">
                <div class="contenuAnnonce bold">
                    <ul>
                        <li>
                            <div class="infosDepart">
                                <div class="heureDepart">10:30</div>
                                <div class="lieuDepart">
                                    <span class="villeDepart">Maçon</span>
                                    <div class="proximiteDepart">
                                        <div class="iconeDepart">
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px">
                                                <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        <li>
                        <div class="infosArrive">
                            <div class="heureArrive">13:00</div>
                            <div class="lieuArrive">
                                <span class="villeArrive">Lyon</span>
                                <div class="proximiteArrive">
                                    <div class="iconeArrive">
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px">
                                            <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                    </ul>

                    <div>
                        <span class="prixAnnonce">14.00€</span><br/><br/><br/>
                        <img class="carImage" src="assets/img/voitureHandicape.svg" title="Voiture accesible aux PMR" alt="Voiture accesible aux PMR">
                    </div>
                </div>
                <div>
                    <img src="https://cdn.blablacar.com/comuto3/images/avatar/passenger-m.svg" class="userImage">
                    <span>Marine</span>
                        <img class="imageBadge" title="As du volant" src="assets/img/asDuVolant.png" alt="">
                </div>
            </div>
            <div class="annonce">
                <div class="contenuAnnonce bold">
                    <ul>
                        <li>
                            <div class="infosDepart">
                                <div class="heureDepart">11:00</div>
                                <div class="lieuDepart">
                                    <span class="villeDepart">Maçon</span>
                                    <div class="proximiteDepart">
                                        <div class="iconeDepart">
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px">
                                                <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        <li>
                        <div class="infosArrive">
                            <div class="heureArrive">13:00</div>
                            <div class="lieuArrive">
                                <span class="villeArrive">Lyon</span>
                                <div class="proximiteArrive">
                                    <div class="iconeArrive">
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px">
                                            <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                    </ul>

                    <div>
                        <span class="green prixAnnonce"> BlaBlaCar+ : 0.00€</span><br/><br/><br/>
                        <img class="carImage" src="assets/img/voitureConfort.svg" title="Voiture confort" alt="Voiture confort">
                    </div>
                </div>

                <div>
                    <img src="https://cdn.blablacar.com/comuto3/images/avatar/passenger-m.svg" class="userImage">
                    <span>François</span>
                    <img class="imageBadge" title="As du volant" src="assets/img/asDuVolant.png" alt="">
                    <img class="imageBadge" title="Ponctuel" src="assets/img/ponctuel.png" alt="">
                    <img class="imageBadge" title="Confort" src="assets/img/confort.png" alt="">
                </div>
            </div>
            <div class="annonce">
                <div class="contenuAnnonce bold">
                    <ul>
                        <li>
                            <div class="infosDepart">
                                <div class="heureDepart">14:00</div>
                                <div class="lieuDepart">
                                    <span class="villeDepart">Maçon</span>
                                    <div class="proximiteDepart">
                                        <div class="iconeDepart">
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px">
                                                <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                                class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                                <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        <li>
                        <div class="infosArrive">
                            <div class="heureArrive">15:30</div>
                            <div class="lieuArrive">
                                <span class="villeArrive">Lyon</span>
                                <div class="proximiteArrive">
                                    <div class="iconeArrive">
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px">
                                            <path fill="#5DD167" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" 
                                            class="iconeProximite" width="20px" height="20px" style="margin-left:4px;">
                                            <path fill="#EDEDED" d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm1.202-14.863a1.568 1.568 0 1 0 0-3.136 1.568 1.568 0 0 0 0 3.136zm.94 1.868h-.005a1.568 1.568 0 0 0-1.563-1.554h-.007c-2.252 0-3.896 1.32-4.288 2.692L5.5 11.051H6.926l.723-2.72 1.166-.825-.874 3.264L6.003 18h1.569l1.83-5.661 1.526 1.269.314 4.392h1.528v-5.02l-1.757-1.756.473-1.767a3.753 3.753 0 0 0 2.853 1.313h.314V9.515a2.51 2.51 0 0 1-2.51-2.51z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </li>
                    </ul>

                    <div>
                        <span class="green prixAnnonce"> BlaBlaCar+ : 0.00€</span><br/><br/><br/>
                        <img class="carImage" src="assets/img/voitureEcolo.svg" title="Voiture électrique" alt="Voiture électrique">
                    </div>
                </div>

                <div>
                    <img src="https://cdn.blablacar.com/comuto3/images/avatar/passenger-m.svg" class="userImage">
                    <span>Pierre</span>
                    <img class="imageBadge" title="Ponctuel" src="assets/img/ponctuel.png" alt="">
                </div>
            </div>                                    
        </div>

        <div class="col-3">&nbsp</div>

    </div>
    <div class="clear30"></div>
</div>

<?php include_once("footer.php");
?>
