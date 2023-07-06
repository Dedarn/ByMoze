<?php 
include "header_general.php";
?>


<main class="connection"> 
        <div id="form_creation">

            <div class="adress_mail">
                <label for="">Adresse mail</label>
                <input type="mail" name="email" class="input_form">
            </div>

            <div class="mot_de_passe">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="input_form">
            </div>
       
        <div id="cree_oublier">
            <a href="">Créez votre compte ?</a>
            <a href="">Mot de passe oublié ?</a>
        </div>
   <button type="submit" id="valider_connection" href="#">Valider</button>
   </div>
</main>
<?php 
include "footer.php"
?>