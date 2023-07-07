<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="css/main.css">
    
</head>

<header>

    <div id="header">

        <img class="logo-by-moze" src="IMG/ByMoze logo.png" alt="Logo By Moze">

        <button id="bouton_recrute">On recrute</button>

        <div id="home_burger">

            <img src="ICONS/user-solid.png" class="connect_button"></img>

            <a href="#" id="menubtn">
               

                        <img data-target="#modal_bg" class="burger-icon" src="IMG/Menu burger.png" alt="">
                 
            </a>
        </div> 
    </div>

    
    <hr class="lower_line">
    <div id="modal_bg" class="hidden">
    <div class="cadre_popup">
        <div class="button_1">
            <div class="div_btn">
                <p>Jardinage</p>
            </div>
            <div class="div_btn">
                <p>Bricolage</p>
                </div>
            <div class="div_btn">
                <p>Vitrerie</p>
            </div>
            <div class="div_btn">
                <p>Ménage</p>
            </div>
            <div class="div_btn">
                <p>Assistance informatique</p>
            </div>
        </div>       
    </div>
</div> 


<script src="JS/app.js"></script>
</header>

</html>