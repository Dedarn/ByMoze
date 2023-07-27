<?php 
 include "header_general.php";
 session_name("moze");
 session_start();

// include_once "config.php";



// if (!empty($_POST)){
//     if (isset($_POST["forme_juridique"]) && isset($_POST["nom_entreprise"]) && isset($_POST["civilite_dirigeant"]) && isset($_POST["nom_dirigeant"]) && isset($$_POST["status_dirigeant"]) && isset($_POST["n_siret"]) && isset($_POST["code_ape"]) && isset($_POST["n_tva"]) ){


//         $nom = sanitize($_POST["forme_juridique"]);
//         $prenom = sanitize($_POST["nom_entreprise"]);
//         $email = sanitize($_POST["civilite_dirigeant"]);
//         $prenom = sanitize($_POST["nom_dirigeant"]);
//         $prenom = sanitize($_POST["status_dirigeant"]);
//         $prenom = sanitize($_POST["n_siret"]);
//         $prenom = sanitize($_POST["code_ape"]);
//         $prenom = sanitize($_POST["n_tva"]);

//         $sql = "UPDATE INTO  utilisateurs (nom, prenom,telephone, adresse1 ,adresse2 , adresse3) VALUE (:forme_juridique,:nom_entreprise,:civilite_dirigeant,:nom_dirigeant,:status_dirigeant,:n_siret, :code_ape,:n_tva)";

                 
//         $query = $conn -> prepare($sql); 

//         $query -> bindParam(":forme_juridique",$forme_juridique,PDO::PARAM_STR);
//         $query -> bindParam(":nom_entreprise",$nom_entreprise,PDO::PARAM_STR);
//         $query -> bindParam(":civilite_dirigeant",$civilite_dirigeant,PDO::PARAM_STR);
//         $query -> bindParam(":nom_dirigeant",$nom_dirigeant,PDO::PARAM_STR);
//         $query -> bindParam(":status_dirigeant",$status_dirigeant,PDO::PARAM_STR);
//         $query -> bindParam(":n_siret",$n_siret,PDO::PARAM_STR);
//         $query -> bindParam(":code_ape",$code_ape,PDO::PARAM_STR);
//         $query -> bindParam(":n_tva",$n_tva,PDO::PARAM_STR);

//         $query-> execute();

//     }
// }
?>

    <main>
    <ul class="ul_insc1">
        <li class="li_etape1"><p class="p1">Etape 1 </p></li>
        <li class="li_etape2"><p class="p3">Etape 2 Précisions</p></li>
        <li class="li_etape3"><p class="p2">Etape 3 </p></li>
    </ul>

        <section>
            <article>
                <form action="" method="post">
                    <label for="">Forme juridique</label>
                    <input type="text" name="forme_juridique">

                    <label for="">Nom de l'entreprise</label>
                    <input type="text" name="nom_entreprise">

                    <label for="">Civilité dirigeant</label>
                    <input type="text" name="civilite_dirigeant">

                    <label for="">Nom dirigeant</label>
                    <input type="text" name="nom_dirigeant">

                    <label for="">Statut dirigeant</label>
                    <input type="text" name="status_dirigeant">

                    <label for="">N° SIRET</label>
                    <input type="text" name="n_siret">

                    <label for="">Code APE</label>
                    <input type="text" name="code_ape">

                    <label for="">N° de TVA intercommunautaire</label>
                    <input type="text" name="n_tva">
                            
                    <div>
                    <button type="submit" class="valider" ><a href="inscription_client_pro3.php">Suivant</a></button>
                    
                    </div>
                </form>
            </article>
        </section>
    </main>

    <?php 
 include "footer.php";
?>

