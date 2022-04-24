// HAMBURGER MENU
const hamburger = document.querySelector(".hamburger"),
      navMenu = document.querySelector(".nav-menu"),
      parent = document.querySelector(".subcontainer");


hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    parent.classList.toggle("show");
})

// JSON ELEMENT CONSTRUCT
let mobile = document.querySelector(".main_structure_mobiles");


class MobileElem{
    constructor(text){
        this.text = text;
    }

    render(){
        let b = document.createElement("div");
        b.classList.add("main_structure_mobile")
        b.innerHTML = `
        <p class ="main_mobile_descr">${this.text}</p>
        <p class ="main_mobile_num">8 (4862) 41-46-32</p>`

        mobile.append(b);
    }
}

async function postDataOnPage(url){
    const res = await fetch(url);
    if(!res.ok){
        throw new Error("something went wrong");
    }
    return await res.json();
}

postDataOnPage("http://localhost:3000/menu")
.then(data => data.forEach(({text}) =>{
     new MobileElem(text).render();
}))

//MODAL WINDOW

let elements = document.querySelectorAll(".main_structure_item"),
    modal = document.querySelector(".modal"),
    close = document.querySelector(".close");


function closeModal(){
    modal.classList.remove("show");
    modal.classList.add("hide");
    document.body.style.overflow = "";
}

function showModal(){
    modal.classList.add("show");
    modal.classList.remove("hide")
    document.body.style.overflow = "hidden";
}

elements.forEach(item => {
    item.addEventListener("click",() => {
        showModal();
    })
})

close.addEventListener("click", () => {
    closeModal();
})

document.body.addEventListener("keydown",(e) => {
    if(e.code == "Escape" && modal.classList.contains("show")){
        closeModal();
    }
})

modal.addEventListener("click",(e) => {
    if(e.target == modal){
        closeModal();
    }
})

//CHANGE CONTENT ON WEBPAGE
let buttons = document.querySelectorAll(".main_menu_item"),
    contentFirst = document.querySelector(".main_menu_wrapper")
    contentSec = document.querySelector(".main_structure_wrapper");


    function removeActive(){
        buttons.forEach(item => {
            item.classList.remove("main_menu_item_active");
        })
     }
     
     function addActive(i = 0){
         buttons[i].classList.add("main_menu_item_active");
     }
     addActive(0);
     
     buttons.forEach(item => {
         item.addEventListener("click", (e) => {
         const target = e.target.closest(".main_menu_item");
         if(target && target.matches(".main_menu_item")){
             buttons.forEach((item,i) =>{
                 if(target == item){
                     removeActive();
                     addActive(i);
                 }
             })
         }
        })
        })