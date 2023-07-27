<?php 
 include "header_general.php";
 session_name("moze");
 session_start();

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
 
//         $sql = "UPDATE INTO  utilisateur (nom, prenom,telephone, adresse1 ,adresse2 , adresse3) VALUE (:nom  ,:prenom, :telephone, :adresse1,:adresse2,:adresse3)";

                 
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

        <section>
            <article>
                <form action="">
                    <label for="">Nom</label>
                    <input type="text" name="nom">

                    <label for="">Prénom</label>
                    <input type="text" name="prenom">

                    <label for="">N° de téléphone</label>
                    <input type="tel" name="telephone">

                    <label for="">Adresse 1</label>
                    <input type="text" name="adresse1">

                    <label for="">Adresse 2</label>
                    <input type="text" name="adresse2">

                    <label for="">Adresse 3</label>
                    <input type="text" name="adresse3">

                    <label for="">Code postal</label>
                    <input type="text" name="code_postal">

                    <label for="">Ville</label>
                    <input type="text" name="ville">

                    <div>
                        <button type="submit" class="valider" ><a href="inscription_client_pro2.php">Suivant</a></button>
                    </div>
                </form>
            </article>
        </section>
    </main>

    <?php 
 include "footer.php";
?>

