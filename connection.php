<?php 
session_name("bymoze");
session_start();
include_once "header_general.php";

// include_once "config.php";


// $email = "";
// $hash_pass = "";

// if (isset($_POST["username"]) && isset($_POST["hash_pass"])) {


//     $email = $_POST["email"];
//     $hash_pass = $_POST["hash_pass"];

//     // Préparer ma requête SQL
//     $sql = "SELECT * FROM utilisateur WHERE email = :email ORDER BY id DESC;";

//     // prépare la requête
//     $query = $db->prepare($sql);


//     $query-> setFetchMode(PDO::FETCH_ASSOC);

//     // Lier les paramètres de la requête préparée
//     // Data poisonning : empoisonner volontairement les gros volumes de données
//     // Les requêtes préparées sont le meilleur moyen de combattre les failles de type
//     // "injection SQL"
//     $query-> bindParam(":email", $email, PDO::PARAM_STR);
//       // username mettre : ' OR 1=1; --
//       if ($query-> execute()) { // Si la requête a été correctement exécutée
//         // Récupérer les résultats de la requête
//         // fetchAll la réponse de la base de données
//         // $resultats = $query-> fetch();
//         $resultats = $query-> fetchAll();

//         var_dump($resultats);
//         if (count($resultats) == 1) {
//             // tester le mot de passe
//             if (password_verify($_POST["password"], $resultats[0]["hash_pass"])) {
//                 // utilisateur authentifié : il a réussi à prouver qu'il était qui il prétendait être

//                 $_SESSION["test"] = ["test", "tet"];
//                 $_SESSION["auth"]  = true;
//                 $_SESSION["userid"] = $resultats[0]["id"];
//                 $_SESSION["username"] = $resultats[0]["username"];
//                 $_SESSION["user"] = serialize($resultats[0]);
//             }
//         } else {
//             echo "pas le bon mot de passe";
//             // ce n'est pas normal
//         }
//     }
// }

?>


<main class="connection"> 
        <div id="form_creation">

            <div class="adress_mail">
                <label for="">Adresse mail</label>
                <input type="mail" name="email" class="input_form">
            </div>

            <div class="mot_de_passe">
                <label for="">Mot de passe</label>
                <input type="password" name="hash_pass" class="input_form">
            </div>
       
        <div id="cree_oublier">
            <a href="">Créez votre compte ?</a>
            <a href="">Mot de passe oublié ?</a>
        </div>
   <button type="submit" id="valider_connection" ><a href="index.php">Valider</a></button>
   </div>
</main>
<?php 
include "footer.php"
?>