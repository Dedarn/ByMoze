<?php
include "header_general.php"; 
// session_name("moze");
// session_start();

// require_once "config.php";

// const MINIMUM_PASS_LENGTH = 7;

// if (!empty($_POST)){
//     if (isset($_POST["client"]) && isset($_POST["email"]) && isset($_POST["hash_pass"]) && isset($_POST["confirm_hash_pass"]) && isset($$_POST["oui_non"]) ){
//         if (strlen($_POST["hash_pass"]) > MINIMUM_PASS_LENGTH) {
//             if (isset($_POST["confirm_hash_pass"]) && $_POST["hash_pass"] == $_POST["confirm_hash_pass"]) {
                


//                 $options = [
//                     "cost" => 12
//                 ];

                   
//                 // Hasher le mot de passe 
//                 $hash = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT, $options);


//                 // nettoyer les entrées utilisateur
//                 $client = sanitize($_POST["client"]);
//                 $email = sanitize($_POST["email"]);

//                 $sql = "INSERT INTO  utilisateurs (role, email,) VALUE (:client :email)";
            
//                 $query = $conn -> prepare($sql); 
            
//                 $query -> Bindparam(":client", $client , PDO::PARAM_STR);
//                 $query -> Bindparam(":email",$email , PDO::PARAM_STR);
                

//                 if($query-> execute()){
//                     $message = "Bienvenue chez nous.";
//                 }
//             } else {
//                 // Les deux mots de passe saisis ne se correpondent pas.
//                 $message = "Les deux mots de passe saisis ne se correpondent pas.";
//             }
//         } else {
//             // Mot de passe trop court.
//             $message = "Le mot de passe doit contenir au moins " . (MINIMUM_PASS_LENGTH + 1) . " caractères.";
//         }
//     } else {
//         // Des champs obligatoires n'ont pas été completés.
//         $message = "Des champs obligatoires n'ont pas été completés.";
//     }

// }
?>

<main>
    <h1 id="h1_creation_compte">Je suis :</h1>
    <form id="creation_de_compte" action="" method="post">

        <div id="je_suis">
            <div id="client_particulier">
                <input type="radio" name="client" value="client particulier" class="input_creation" id="client_particulier">
                <label for="client">Client particulier</label>
            </div>
            <div id="client_professionnel">
                <input type="radio" name="client" value="client professionnel" class="input_creation" id="client_pro" >
                <label for="client">Client professionnel</label>
            </div>
            <div id="mozeur">
                <input type="radio" name="client" value="Mozeur" class="input_creation" id="mozer" >
                <label for="client">Mozeur</label>
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
                <input type="password" name="hash_pass" class="input_form">
            </div>

            <div id="cmot_de_passe">
                <label for="">Confirmer mot de passe</label>
                <input type="password" name="confirm_hash_pass" class="input_form">
            </div>
        </div>
        <div id="imformation_supplementaire">
            <div id="complete_informations">
                <label for="">Je souhaite compléter l'ensemble <br> de mes informations :</label>
            </div>


            <div id="form_radio_ouinon">
                <div id="oui">
                    <input type="radio" name="oui_non" id="yes" class="input_creation">
                    <label for="">Oui</label>
                </div>
                <div id="non">
                    <input type="radio" name="oui_non" class="input_creation">
                    <label for="">Non</label>
                </div>
            </div>
        </div>
        <button class="valider" id="redirection" type="submit"><a href=""></a>Valider</button>

    </form>
        <script src="JS/app.js"></script>
</main>
        <?php
        include "footer.php";
        ?>