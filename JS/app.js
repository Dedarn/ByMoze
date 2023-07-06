

const burger = document.querySelector(".burger-icon");
burger.addEventListener("click",burger_nav);

const link2 = document.querySelector("#button_profil");
link2.addEventListener("click",profil2);

const cance = document.querySelector(".icon_cancel");
cance.addEventListener("click",cancel); 

const link = document.querySelector("#button_modifier_profil");
link.addEventListener("click",profilModified);

const btn = document.querySelector(".annuler_popup");
btn.addEventListener("click",btnClicked); 


var view = false;
function burger_nav (event){ 
    event.preventDefault()
    let target = event.target.dataset.target;
    let modal = document.querySelector(target);
    modal.classList.toggle("hidden");


    if(view == false)
    {
        burger.src = "IMG/Menu burger.png";
        view = true;
    }
    else
    {
        view = false;
        burger.src = "IMG/Cancel.png"; 
    }
    return false; 
};


function profilModified (event){ 
    event.preventDefault()
    let target = event.target.dataset.target;
    let modal = document.querySelector(target);
    modal.classList.remove("hidden");
    return false; 
};
function btnClicked (event){ 
    event.preventDefault()
    let modal = document.querySelector("#modal_bg");
    modal.classList.add("hidden");
    return false; 
};

function profil2 (event){ 
    event.preventDefault()
    let modal = document.querySelector("#profill");
    modal.classList.remove("hidden");
    return false; 
};
function cancel (event){ 
    event.preventDefault()
    let modal = document.querySelector("#profill");
    modal.classList.add("hidden");
    return false; 
};





