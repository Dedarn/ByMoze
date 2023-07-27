<?php 
 include "header_general.php";
 session_name("moze");
 session_start();


// require_once "config.php";


// if (!empty($_POST)){
//     if (isset($_POST["nom_utile"]) && isset($_POST["prenom_utile"]) && isset($_POST["poste_utile"]) && isset($_POST["tel_utile"]) && isset($$_POST["email_utile"]) ){   


//         // nettoyer les entrées utilisateur
//         $nom_utile = sanitize($_POST["nom_utile"]);
//         $prenom_utile = sanitize($_POST["prenom_utile"]);
//         $poste_utile = sanitize($_POST["poste_utile"]);
//         $tel_utile = sanitize($_POST["tel_utile"]);
//         $email_utile = sanitize($_POST["email_utile"]);

//         $sql = "INSERT INTO  entreprise (nom_utile,prenom_utile,poste_utile,tel_utile ,email_utile,) VALUE (:nom_utile :prenom_utile,:poste_utile,:)";
            
//         $query = $conn -> prepare($sql); 
            
//         $query -> Bindparam(":nom_utile", $nom_utile , PDO::PARAM_STR);
//         $query -> Bindparam(":prenom_utile",$prenom_utile , PDO::PARAM_STR);
//         $query -> Bindparam(":poste_utile",$poste_utile , PDO::PARAM_STR);
//         $query -> Bindparam(":tel_utile",$tel_utile , PDO::PARAM_STR);
//         $query -> Bindparam(":email_utile",$email_utile , PDO::PARAM_STR);
                

//         $query-> execute();

//     }
// }
?>
    <main>
    <ul class="ul_insc1">
        <li class="li_etape1"><p class="p1">Etape 1 </p></li>
        <li class="li_etape2"><p class="p2">Etape 2</p></li>
        <li class="li_etape3"><p class="p3">Etape 3 : Contact utile </p></li>
    </ul>

        <section>
            <article>
                <form action="">
                    <label for="">Nom</label>
                    <input type="text" name="nom" >

                    <label for="">Prénom</label>
                    <input type="text" name="prenom">

                    <label for="">Poste occupé</label>
                    <input type="text" name="poste_utile">

                    <label for="">Numéro de téléphone</label>
                    <input type="text" name="tel_utile">

                    <label for="">Adresse mail</label>
                    <input type="text" name="email_utile">

                
                    <div>
                    <button type="submit" class="valider" ><a href="index.php">Valider</a></button>
                        
                    </div>
                </form>
            </article>
        </section>
    </main>

    <?php 
 include "footer.php";
?>
