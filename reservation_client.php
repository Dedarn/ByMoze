<?php
include_once "header_general.php"
?>
<main>

<h1 id="h1_reserv_client">Prestations</h1>

<form action="" class="form_page_reserv">

<div class="form_prestation">
            <label for="">Ménage</label>
        <select name="" id="" class="select_sous_categorie">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>

            <label for="">Vitrerie</label >
            <select name="" id="" class="select_sous_categorie">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>    
</div>
<div class="form_prestation">
       
            <label for="">Jardinnage</label >
            <select name="" id="" class="select_sous_categorie">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>    
 
        <label for="">Assistence informatique</label>

</div>
<div class="form_prestation">
       
            <label for="">Bricolage</label >
            <select name="" id="" class="select_sous_categorie">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>    
                <label for="">Home Mangement</label>
</div>



    </form>
    <hr>
<h2 id="h2_reserv_client">Date & heure</h2>
<form action="" class="form_page_reserv" >
    <div class="form_date_heure">
        <label for="">Date de debut</label>
        <input type="date" name="date-debut" id="">
    </div>
    <div class="form_date_heure">
        <label for="">date de fin :</label>
        <input type="date" name="date_fin" id="">
    </div>
    <div class="form_date_heure">
        <label for="">Heure de debut :</label>
        <input type="text" name="heure" id="">
    </div>
    <div class="form_date_heure">
        <label for="">Fréquence :</label>
        <input type="radio" name="select" id="">
        <label for="">Une seul fois</label>
        <input type="radio" name="select" id="">
        <label for="">Quotidienne</label>
    </div>  
    <div class="form_date_heure_2">
        <input type="radio" name="select" id="">
        <label for="">Hebdomadaire</label>
        <input type="radio" name="select" id="">
        <label for="">Mensuelle</label>
    </div>

    <div class="form_date_heure">
<label for="">Durée :</label>
<select value="">
    <option name="" id="">1H</option>
    <option name="" id="">2H</option>
    <option name="" id="">3H</option>
    <option name="" id="">4H</option>
    <option name="" id="">5H</option>
    <option name="" id="">6H</option>
</select>
</div>
</form>

<hr>

<div class="button">
<button class="valider_reservation">Valider</button>
<button class="valider_reservation">Autre Prestation</button>
</div>


<button class="annuler_reservation">annuler</button>


</main>

<?php
include_once "footer.php";
?>