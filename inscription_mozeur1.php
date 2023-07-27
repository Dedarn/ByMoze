<?php
include "header_general.php";

// include_once "config.php";


// include_once "config.php";



// if (!empty($_POST)){
//     if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($$_POST["adresse1"]) && isset($_POST["adresse2"]) && isset($_POST["adresse3"]) && isset($_POST["code_postal"]) && isset($_POST["ville"]) ){


//         $nom = sanitize($_POST["nom"]);
//         $prenom = sanitize($_POST["prenom"]);
//         $email = sanitize($_POST["telephone"]);
//         $prenom = sanitize($_POST["adresse1"]);
//         $prenom = sanitize($_POST["adresse2"]);
//         $prenom = sanitize($_POST["adresse3"]);
//         $prenom = sanitize($_POST["code_postal"]);
//         $prenom = sanitize($_POST["ville"]);

//         $sql = "UPDATE INTO utilisateur (nom, prenom,telephone, adresse1 ,adresse2 , adresse3) VALUE (:nom  ,:prenom, :telephone, :adresse1,:adresse2,:adresse3)";

                 
//         $query = $conn -> prepare($sql); 

//         $query -> bindParam(":nom",$nom,PDO::PARAM_STR);
//         $query -> bindParam(":prenom",$prenom,PDO::PARAM_STR);
//         $query -> bindParam(":telephone",$telephone,PDO::PARAM_STR);
//         $query -> bindParam(":adresse1",$adresse1,PDO::PARAM_STR);
//         $query -> bindParam(":adresse2",$adresse2,PDO::PARAM_STR);
//         $query -> bindParam(":adresse2",$adresse2,PDO::PARAM_STR);

//         $query-> execute();

            
        
//     }
// }
?>

<main>

<ul class="ul_insc1">
        <li class="li_etape1"><p class="p3">Etape 1 : Etat civil</p></li>
        <li class="li_etape2"><p class="p2">Etape 2 </p></li>
        <li class="li_etape3"><p class="p1">Etape 3 </p></li>
</ul>

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

        <button class="valider" type="submit" ><a href="inscription_mozeur2.php">Suivant</a></button>

    </form>

</main>

<?php
    include "footer.php"
?>