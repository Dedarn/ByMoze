<?php
include "header_general.php"
?>


<main>
    <div>
        <h1 id="h1_gestion-admin">Créer une prestation</h1>
    </div>
    <div>
        <h2 id="h2_gestion_admin">Demandes à traiter :</h2>
    </div>
    <table>
        <thead>
            <tr class="head_tableau">
                <th>
                    Mozeur
                </th>
                <th>
                    Prestation
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    Vitrage
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    Vitrage
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    vitrage
                </td>
            </tr>
            <tr>
                <td>
                    Mr Mozeur
                </td>
                <td>
                    Vitrage
                </td>
            </tr>
        </tbody>
    </table>

    <hr class="">

    <form action="" id="form_gestion_admin" >
        <div class="input_label_admin">
            <label for="">Categorie :</label>
        <select name="" id="" class="select_sous_categorie">
            <option value=""></option>
            <option value="">vitrage</option>
            <option value="">Jardinnage</option>
            <option value=""></option>
            <option value=""></option>

        </select>
        </div>
        <div class="input_label_admin">
            <label for="">Sous-catégorie :</label >
            <select name="" id="" class="select_sous_categorie">
                <option value=""></option>
                <option value="">Vitrage</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>    
        </div>
    </form>
    <hr class="lower_line">
    <p  id=cree-categorie>Créer une catégorie</p>
    <form action="" id="form_gestion_admin" >
        <div class="input_label_admin">
            <label for="">Categorie :</label>
            <input type="text" name="" id="" class="select_sous_categorie" >
        </div>
        <div class="input_label_admin">
            <label for="">Sous-catégorie :</label >
            <input type="text" name="" id="" class="select_sous_categorie">
        </div>
    </form>
    <div class="button">
        <button class="annuler">Annuler</button>
        <button id="valider_gestion_admin">Valider</button> 
    </div>
</main>
<?php
include "footer.php";
?>
