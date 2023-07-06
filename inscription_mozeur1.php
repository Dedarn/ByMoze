<?php
include "header_general.php"
?>

<main>

    <div id="etape_1_mozeur">
        <ul id="">
            <li>Etape 1 : Etat civil</li>
            <li>Etape 2</li>
            <li>Etape 3</li>
        </ul>
    </div>

    <form method="post" id="form_creation_mozeur1">

        <div class="nom_mozeur">
            <label for="">Nom</label>
            <input type="text" name="nom_mozeur" class="input_form">
        </div>

        <div class="prenom_mozeur">
            <label for="">Prénom</label>
            <input type="text" name="prenom_mozeur" class="input_form">
        </div>

        <div class="email_mozeur">
            <label for="">Adresse mail</label>
            <input type="email" name="email_mozeur" class="input_form">
        </div>

        <div class="tel_mozeur">
            <label for="">N° de téléphone</label>
            <input type="tel" name="tel_mozeur" class="input_form">
        </div>

        <div class="adresse1_mozeur">
            <label for="">Adresse 1</label>
            <input type="text" name="adresse1_mozeur" class="input_form">
        </div>

        <div class="adresse2_mozeur">
            <label for="">Adresse 1</label>
            <input type="text" name="adresse2_mozeur" class="input_form">
        </div>

        <div class="adresse3_mozeur">
            <label for="">Adresse 1</label>
            <input type="text" name="adresse3_mozeur" class="input_form">
        </div>

        <div class="code_postal_mozeur">
            <label for="">Code Postal</label>
            <input type="text" name="code_postal_mozeur" class="input_form">
        </div>

        <div class="ville_mozeur">
            <label for="">Ville</label>
            <input type="text" name="ville_mozeur" class="input_form">
        </div>

        <button class="valider" type="submit">Suivant</button>

    </form>

</main>

<?php
    include "footer.php"
?>