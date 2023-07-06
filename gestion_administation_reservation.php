<?php
include "header_general.php"
?>
<main>
    <h1 class="h1_gestion_admin_reservation">Sélectionnez ma période souhaitée :</h1>
    <form action="" method="post">

        <div class="datetime_administrateur">
            <p>Du :</p> 
            <input type="datetime" name="" class="input_date_admin" placeholder="jj/mm/aa">
            <p>Au :</p>
            <input type="datetime" name="" class="input_date_admin" placeholder="jj/mm/aa">
        </div> 

        <div class="radio_mts">

            <div class="input_label_admin_reservation">
                <input type="radio" name="mois_trimetre_semestre" class="taille_input">
                <label for="">Mois en cours</label>
            </div>

            <div class="input_label_admin_reservation">
                <input type="radio" name="mois_trimetre_semestre" class="taille_input">
                <label for="">Trimestre</label>
            </div>

            <div class="input_label_admin_reservation">
                <input type="radio" name="mois_trimetre_semestre" class="taille_input">
                <label for="">Semestre</label>
            </div>
        </div>

    </form>

    <h2 id="h2_gestion_admin_reservation">Type de partenaire :</h2>


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
    <div>
    <button id="modifier_une_prestation">Modifier une prestation</button>
    </div>
</main>