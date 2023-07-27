<?php 
 include "header_general.php";

 

// include_once "config.php";



// if (!empty($_POST)){
//     if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($$_POST["adresse1"]) && isset($_POST["adresse2"]) && isset($_POST["adresse3"]) && isset($_POST["code_postal"]) && isset($_POST["ville"]) ){    a modifer !!!!!!




//         $civilite = sanitize($_POST["civilite"]);
//         $nom = sanitize($_POST["nom"]);
//         $nom_usage = sanitize($_POST["nom_usage"]);
//         $prenom = sanitize($_POST["prenom"]);
//         $email = sanitize($_POST["telephone"]);
//         $prenom = sanitize($_POST["adresse1"]);
//         $prenom = sanitize($_POST["adresse2"]);
//         $prenom = sanitize($_POST["adresse3"]);
//         $prenom = sanitize($_POST["code_postal"]);
//         $prenom = sanitize($_POST["ville"]);
 
//         $sql = "INSERT INTO  utilisateur (nom, prenom,telephone, adresse1 ,adresse2 , adresse3) VALUE (:nom  ,:prenom, :telephone, :adresse1,:adresse2,:adresse3)";

                 
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

<body>
    <main>
        

        <section>
            <article class="form1">
                <form action="" method="post">

                    <div class="form_insc_clt_part">

                        <label for="civilite">Civilité</label>
                        <input type="text" name="civilité" id="civilite" placeholder="votre civilité içi"> <br>


                        <label>
                            <input type="text" name="nom" placeholder="votre nom içi"> <br>
                            <span class="span_label">Nom</span>
                        </label> <br>

                        <label>
                            <input type="text" name="nom_usage" placeholder="votre nom d'usage içi"> <br>
                            <span class="span_label">Nom d'usage</span>
                        </label> <br>
                
                        <label>
                            <input type="text" name="prenom" placeholder="votre prénom içi"> <br>
                            <span class="span_label">Prénom</span>
                        </label> <br> 
                        
                        <label>
                            <input type="number" name="telephone" placeholder="votre tel içi"> <br>
                            <span class="span_label">N° de téléphone</span>
                         </label> <br>


                         <label>
                            <input type="text" name="adress1" placeholder="votre adresse içi"> <br>
                            <span class="span_label">Adresse 1</span>
                        </label> <br>


                        <label>
                            <input type="text" name="adress2" placeholder="votre adresse içi"> <br>
                            <span class="span_label">Adresse 2</span>
                        </label> <br>


                         <label>
                            <input type="text" name="adress3" placeholder="votre adresse içi"> <br>
                            <span class="span_label">Adresse 3</span>
                        </label> <br>


                        <label>
                            <input type="text" name="code_postal" placeholder="votre CP içi"> <br>
                            <span class="span_label">Code postal</span>
                        </label> <br>


                        <label>
                        <input type="text" name="ville" placeholder="votre ville içi"> <br>
                        <span class="span_label">Ville</span>
                        </label> <br>



                    </div> <br>

                    <div class="but_insc">
                        <button ><a href="index.php">Valider</a></button>
                    </div>
                </form>
            </article>
        </section>
    </main>

    <?php 
 include "footer.php";
?>



</body>
</html>