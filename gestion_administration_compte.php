 <?php
include "header_general.php";
?> 
<main>
    <h1 class="h1_gestion_admin_reservation">Gérer les comptes</h1>
    <h2 id="h2_admin_compte">Type de partenaire :</h2>

    
    <form action="" method="post"  class="radio_client_mozeur_admin">
        <div class="input_label_admin_reservation">
            <input type="radio" name="radio_client_mozeur" class="taille_input">
            <label for="">Client</label >
        </div>

        <div class="input_label_admin_reservation">
            <input type="radio" name="radio_client_mozeur" class="taille_input">
            <label for="">Mozeur</label >
        </div>
    </form>
    <table>
        <thead>
            <tr class="head_tableau_compte">
                <th>
                    Mozeur
                </th>
                <th>
                    Identifiant
                </th>
            </tr>
        </thead>       

        <tbody class="tbody_compte">
             <!-- debut du forech -->
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #1
                </td>
            <!-- fin forech -->
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #2
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #3
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #4
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #5
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #6
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #7
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    #8
                </td>
            </tr>
        </tbody>
    </table>

 
    <button id="button_modifier_profil" data-target="#modal_bg">Modifier un profil</button>
    <div class="button">
    <button class="annuler">Annuler</button>
    <button id="valider_admin_compte">Valider</button>
    </div>
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