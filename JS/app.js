window.addEventListener("load", (ev)=> {
    
    const affiche = document.querySelector("#client_particulier");
    affiche.addEventListener("click",funcredirec, false);

    const affiche2 = document.querySelector("#client_pro");
    affiche2.addEventListener("click",funcredirec, false);

    const affiche3 = document.querySelector("#mozer");
    affiche3.addEventListener("click",none, false);
    
}
,false);

function funcredirec (ev){
    
    
    let info = document.querySelector("#imformation_supplementaire");

            console.log(funcredirec);
            console.log(ev);
    if (ev) {
         info.style.display = "block";
    
    }else{
        
        info.style.display = "none";
       
    }
}
function none (ev){
    
    
    let info = document.querySelector("#imformation_supplementaire");

            console.log(funcredirec);
            console.log(ev);
    if (ev) {
         info.style.display = "none";
    
    }else{
        
        info.style.display = "none";
       
    }
}







// /bouton pour ouvrir le menu burger/ 
// const burger = document.querySelector(".burger-icon");
// burger.addEventListener("click",burger_nav);
// /bouton pour ouvrir/ 
// const link2 = document.querySelector("#button_profil");
// link2.addEventListener("click",profil2);
// /bouton/ 
// const cance = document.querySelector(".icon_cancel");
// cance.addEventListener("click",cancel); 
// /bouton/ 
// const link = document.querySelector("#button_modifier_profil");
// link.addEventListener("click",profilModified);
// /bouton/ 
// const btn = document.querySelector(".annuler_popup");
// btn.addEventListener("click",btnClicked); 

// var view = false;
// /function pour ouvrir le menu burger / 
// function burger_nav (event){ 
//     event.preventDefault()
//     let target = event.target.dataset.target;
//     let modal = document.querySelector(target);
//     modal.classList.toggle("hidden");

//     /changement de l'icons si le menu et fermer ou ouvert/ 
//     if(view == false)
//     {
//         burger.src = "IMG/Menu burger.png";
//         view = true;
//     }
//     else
//     {
//         view = false;
//         burger.src = "IMG/Cancel.png"; 
//     }
//     return false; 
// };

// // 
// function profilModified (event){ 
//     event.preventDefault()
//     let target = event.target.dataset.target;
//     let modal = document.querySelector(target);
//     modal.classList.remove("hidden");
//     return false; 
// };
// // 
// function btnClicked (event){ 
//     event.preventDefault()
//     let modal = document.querySelector("#modal_bg");
//     modal.classList.add("hidden");
//     return false; 
// };
// // 
// function profil2 (event){ 
//     event.preventDefault()
//     let modal = document.querySelector("#profill");
//     modal.classList.remove("hidden");
//     return false; 
// };
// // 
// function cancel (event){ 
//     event.preventDefault()
//     let modal = document.querySelector("#profill");
//     modal.classList.add("hidden");
//     return false; 
// };

// function rangeSlide(value) {
//     document.getElementById('rangeValue').innerHTML = value + "km";
// }


// const affiche2 = document.getElementById("client_pro");
// affiche2.addEventListener("checked",funcredirec );




// // var check1 = document.getElementById("client_particulier").checked

// // function funcredirec() {  

// //     if (check1){
// //         location.href='inscription';
// //     }
// // }




  
