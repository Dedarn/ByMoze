<?php
include_once "header_general.php"
?>
<main>

                <ul class="ul_insc1">
                    <li class="li_etape1"><p class="p1">Etape 1 : Etat civil</p></li>
                    <li class="li_etape2"><p class="p2">Etape 2</p></li>
                    <li class="li_etape3"><p class="p3">Etape 3</p></li>
                </ul>
            

<form action="">

<label for="">Dans quel secteur géographique voulez-vous travailler ?</label>
<input type="text" name="" id="">


<label for="">Dans quelle(s) prestation(s) souhaitez vous exercer ?</label>

<label for="">Activité 1</label>
<select name="" id="">
    <option value="">bonjours</option>
</select>
<label for="">Activité 2</label>
<select name="" id="">
    <option value="">bonjours</option>
</select>
<label for="">Activité 3</label>
<select name="" id="">
    <option value="">bonjours</option>
</select>
<img src="" alt="plus pour ajouter plus d'activité">

<label for="">Mon activité n'est pas dans la liste</label>
<input type="checkbox" name="" id="">

<label for="">Nom de l'activité</label>
<input type="text">

<textarea name="" id="" cols="30" rows="10">décrivez votre activité</textarea>

<label for="">Choisissez les jours pendant lesquels
vous souhaitez travailler (tous les jours cochés
peuvent faire l’objet d’une prestation) :</label>

<input type="checkbox" name="" id="">
<label for="">Lun</label>
<input type="checkbox" name="" id="">
<label for="">Mar</label>
<input type="checkbox" name="" id="">
<label for="">Mer</label>
<input type="checkbox" name="" id="">
<label for="">Jeu</label>
<input type="checkbox" name="" id="">
<label for="">Ven</label>
<input type="checkbox" name="" id="">
<label for=""></label>
<input type="checkbox" name="" id="">

<label for="">Quelles sont les plages horaires durant lesquelles
vous souhaitez travailler dans la journée ?</label>

<div class="datetime_administrateur">
            <p>De</p> 
            <input type="time" name="" class="input_date_admin" placeholder="jj/mm/aa">
            <p>A</p>
            <input type="time" name="" class="input_date_admin" placeholder="jj/mm/aa">
        </div> 
        <div class="datetime_administrateur">
            <p>De :</p> 
            <input type="time" name="" class="input_date_admin" placeholder="jj/mm/aa">
            <p>A :</p>
            <input type="time" name="" class="input_date_admin" placeholder="jj/mm/aa">
        </div> 


    <input type="radio" name="" id="">
    <label for="">Matin</label>
    <input type="radio" name="" id="">
    <label for="">Après-midi</label>
    <input type="radio" name="" id="">
    <label for="">Journée complète</label>


</form>

<button class="valider">Valider</button>

</main>
<?php 
include_once "footer.php"
?>