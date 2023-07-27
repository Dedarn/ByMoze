<?php
include "header_general.php";
?> 
<main>
    <h1 class="h1_gestion_admin_reservation">Gérer les comptes</h1>
    <h2 id="h2_admin_compte">sélectionnez la période souhaitée :</h2>

    <div class="datetime_administrateur">
            <p>Du :</p> 
            <input type="datetime" name="" class="input_date_admin" placeholder="jj/mm/aa">
            <p>Au :</p>
            <input type="datetime" name="" class="input_date_admin" placeholder="jj/mm/aa">
        </div> 
    
    <form action="" method="post"  class="radio_client_mozeur_admin">
        <div class="input_label_admin_reservation">
            <input type="radio" name="radio_client_mozeur" class="taille_input">
            <label for="">Mois en cours</label >
        </div>    
        <div class="input_label_admin_reservation">
            <input type="radio" name="radio_client_mozeur" class="taille_input">
            <label for="">Trimestre</label >
        </div>

        <div class="input_label_admin_reservation">
            <input type="radio" name="radio_client_mozeur" class="taille_input">
            <label for="">Semestre</label >
        </div>
    </form>
    
    <table>
        <thead>
            <tr class="head_tableau_reservation">
                <th>
                    Date
                </th>
                <th>
                    Prestation
                </th>
                <th>
                    Mozeur
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Lun 10/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
            <tr>
                <td>
                    Mer 13/10/22
                </td>
                <td>
                    Vitrage
                </td>
                <td>
                    Mr Mozeur
                </td>
            </tr>
        </tbody>
    </table>
 
    <button id="button_modifier_profil" data-target="#modal_bg">Voir plus d'infos</button>
 
<!-- 
    <div id="modal_bg" class="hidden">
        <div class="cadre_popup">
            <h3>Etes vous certain de vouloir annuler cette prestation ?</h3>
            <div class="button">
                <button class="annuler_popup">Annuler</button> <button class="valider_popup">Valider</button>
            </div>       
        </div>
    </div> -->
</main>



<script src="js/app.js"></script>
<?php
include "footer.php";
?>