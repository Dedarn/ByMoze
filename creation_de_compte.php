<?php
include "header_general.php";
?>

<main>
    <h1 id="h1_creation_compte">Je suis :</h1>
    <form id="creation_de_compte" action="">

        <div id="je_suis">
            <div id="client_particulier">
                <input type="radio" name="client" class="input_creation">
                <label for="">Client particulier</label>
            </div>
            <div id="client_professionnel">
                <input type="radio" name="client" class="input_creation">
                <label for="">Client professionnel</label>
            </div>
            <div id="mozeur">
                <input type="radio" name="client" class="input_creation">
                <label for="">Mozeur</label>
            </div>

        </div>
        <br>
        <div id="form_creation">

            <div class="adress_mail">
                <label for="">Adresse mail</label>
                <input type="mail" name="email" class="input_form">
            </div>

            <div class="mot_de_passe">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="input_form">
            </div>

            <div id="cmot_de_passe">
                <label for="">Confirmer mot de passe</label>
                <input type="password" name="cpassword" class="input_form">
            </div>
        </div>
        <div id="complete_informations">
            <label for="">Je souhaite compléter l'ensemble <br> de mes informations :</label>
        </div>


        <div id="form_radio_ouinon">
            <div id="oui">
                <input type="radio" name="ouinon" class="input_creation">
                <label for="">Oui</label>
            </div>
            <div id="non">
                <input type="radio" name="ouinon" class="input_creation">
                <label for="">Non</label>
            </div>
        </div>

        <button class="valider" type="submit">Valider</button>

    </form>
    <main>



        <?php
        include "footer.php";
        ?>