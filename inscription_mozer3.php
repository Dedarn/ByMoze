<?php
session_name("bymoze");
session_start();
include_once "header_general.php";

// require "config.php";


// $secteur_geo = trim($_POST["secteur"]);
// $distance_km = trim($_POST["distance_km"]);
// $activité1 = trim($_POST["activité1"]);
// $activité2 = trim($_POST["activité2"]);
// $activité3 = trim($_POST["activité3"]);
// $name_activite = trim($_POST["name_activite"]);
// $description_activite = trim($_POST["description_activite"]);
// $lun = trim($_POST["lun"]);
// $mar = trim($_POST["mar"]);
// $mer = trim($_POST["mer"]);
// $jeu = trim($_POST["jeu"]);
// $ven = trim($_POST["ven"]);
// $sam = trim($_POST["sam"]);
// $dim = trim($_POST["dim"]);
// $heure_debut = trim($_POST["heure_debut"]);
// $heure_fin = trim($_POST["heure_fin"]);
// $ferieroui = trim($_POST["ferieroui"]);
// $feriernon = trim($_POST["feriernon"]);
// $date_debut = trim($_POST["date_debut"]);
// $date_fin = trim($_POST["date_fin"]);
// $matin = trim($_POST["matin"]);
// $apres_midi= trim($_POST["apres_midi"]);
// $j_complete = trim($_POST["j_complete"]);
// $date_fin = trim($_POST["date_fin"]);



// $sql =  "INSERT INTO  () VALUE ()";

// // $query = $conn-> prepare($sql);

// $query->bindParam(":secteur",$secteur,PDO::PARAM_STR);
// $query->bindParam(":distance_km",$distance_km,PARAM_STR);
// $query->bindParam(":activité1",$activité1,PARAM_STR);
// $query->bindParam(":activité2",$activité2,PARAM_STR);
// $query->bindParam(":activité3",$activité3,PARAM_STR);
// $query->bindParam(":name_activite",$name_activite,PARAM_STR);
// $query->bindParam(":description_activite",$description_activite,PARAM_STR);
// $query->bindParam(":lun",$lun,PARAM_STR);
// $query->bindParam(":mar",$mar,PARAM_STR);
// $query->bindParam(":mer",$mer,PARAM_STR);
// $query->bindParam(":jeu",$jeu,PARAM_STR);
// $query->bindParam(":ven",$ven,PARAM_STR);
// $query->bindParam(":sam",$sam,PARAM_STR);
// $query->bindParam(":dim",$dim,PARAM_STR);
// $query->bindParam(":heure_debut",$heure_debut,PARAM_STR);
// $query->bindParam(":heure_fin",$heure_fin,PARAM_STR);
// $query->bindParam(":ferieroui",$ferieroui,PARAM_STR);
// $query->bindParam(":feriernon",$feriernon,PARAM_STR);
// $query->bindParam(":date_debut",$date_debut,PARAM_STR);
// $query->bindParam(":date_fin",$date_fin,PARAM_STR);
// $query->bindParam(":matin",$matin,PARAM_STR);
// $query->bindParam(":apres_midi",$apres_midi,PARAM_STR);
// $query->bindParam(":j_complete",$j_complete,PARAM_STR);

// $query-> execute()

?>

<main>

    <ul class="ul_insc1">
        <li class="li_etape1"><p class="p1">Etape 1 </p></li>
        <li class="li_etape2"><p class="p2">Etape 2</p></li>
        <li class="li_etape3"><p class="p3">Etape 3 : Préferences </p></li>
    </ul>
            

    <form action="" method="post" class="form_mozer3">

        <label for="">Dans quel secteur géographique voulez-vous travailler ?</label>
        <input type="text" name="secteur" id="">


        <span id="rangeValue">0km</span>
        <Input class="range" type="range" name="range" value="0" min="0" max="500" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>

        <label for="">Dans quelle(s) prestation(s) souhaitez vous exercer ?</label>
       
       
        <div>
            <label for="">Activité 1</label>
            <select name="activité1" id="">
                <option value="">bonjours</option>
            </select>
        </div>

        <div>
            <label for="">Activité 2</label>
            <select name="activité2" id="">
                <option value="">bonjours</option>
            </select>
        </div>

        <div>
            <label for="">Activité 3</label>
            <select name="activité3" id="">
                <option value="">bonjours</option>
            </select>
        </div>

        <img src="" alt="">
      
        <div>
            <label for="">Mon activité n'est pas dans la liste</label>
            <input type="checkbox" name="" id="">
        </div>

        <div>
            <label for="">Nom de l'activité :</label>
            <input type="text" name="name_activite">
        </div>

        <textarea id="" cols="40" rows="5" placeholder="décrivez votre activité" name="description_activite"></textarea>
        
        <label for="">Choisissez les jours pendant lesquels <br>
        vous souhaitez travailler (tous les jours cochés <br>
        peuvent faire l’objet d’une prestation) :</label>

        <div>
            <input type="checkbox" name="lun" id="">
            <label for="">Lun</label>
            <input type="checkbox" name="mar" id="">
            <label for="">Mar</label>
            <input type="checkbox" name="mer" id="">
            <label for="">Mer</label>
            <input type="checkbox" name="jeu" id="">
            <label for="">Jeu</label>
            <input type="checkbox" name="ven" id="">
            <label for="">Ven</label>
            <input type="checkbox" name="sam" id="">
            <label for="">Sam</label>
            <input type="checkbox" name="dim" id="">
            <label for="">Dim</label>
        </div>

        <label for="">Quelles sont les plages horaires durant lesquelles
        vous souhaitez travailler dans la journée ?</label>

        <div class="datetime_administrateur">
            <p>De :</p> 
            <input type="time" name="heure_debut" class="input_date_admin" placeholder="jj/mm/aa">
            <p>A</p>
            <input type="time" name="heure_fin" class="input_date_admin" placeholder="jj/mm/aa">
        </div> 

        <div class="datetime_administrateur">
            <p>De :</p> 
            <input type="time" name="heure_debut2" class="input_date_admin" placeholder="jj/mm/aa">
            <p>A</p>
            <input type="time" name="heure_fin2" class="input_date_admin" placeholder="jj/mm/aa">
        </div> 

        <div>
            <label for="">Acceptez vous de travailler les jours fériés ?</label>
            <input type="radio" name="ferier" value="oui" id="">        
            <label for="">oui</label>
            <input type="radio" name="ferier" value="non" id="">   
            <label for="">Non</label>     
        </div>

        <label for="">Avez vous déjà des dates d’indisponibilité connues ?</label>
       
      
            <div>
                <label for="">Date de debut :</label>
                <input type="date" name="date_debut" id="">
            </div>

            <div class="indispo">
                <label for="">Date de fin :</label>
                <input type="date" name="date_fin" id="">
            </div>
    
    <!-- pour une v1 -->
            <!-- 
        <div class="radio_MAJ">
            <input type="radio" name="radio_maj" value="Matin">
            <label for="">Matin</label>
            <input type="radio" name="radio_maj" value="Après-midi">
            <label for="">Après-midi</label>
            <input type="radio" name="radio_maj" value="Journeé complète">
            <label for="">Journée complète</label>
        </div> -->

    </form>

    <button class="valider" type="submit" ><a href="index.php">Valider</a></button>

</main>
<script src="js/app.js"></script>


<?php 
include_once "footer.php"
?>