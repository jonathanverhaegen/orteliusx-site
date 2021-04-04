

//hamburger menu


document.querySelector("#hamburger").addEventListener("click", function(e){

   
    var checkbox = document.querySelector('#hamburger').checked;
    var afbeelding = document.querySelector(".img_hamburger");
    var position = document.querySelector('.menu_mob').style;
    let header =  document.querySelector("header");

    
    
    if(checkbox == true){
        afbeelding.src = "images/kruis.svg";
        position.top = "50px";
        header.style.border = "none";
        
        
       
    }else if(checkbox == false){
        afbeelding.src = "images/hamburger.svg"; 
        position.top = "-1000px";
        header.style.borderBottom = "3px solid #0939DE";
        
        
        
    }

    $("a").click(function(e){
        
        
        afbeelding.src = "images/hamburger.svg"; 
        position.top = "-1000px";
        
    })
});


document.querySelector(".logo").addEventListener("click", function(e){
    window.location.href = "index.php";
});

//menu verspingt

let diensten = document.querySelector("#link_diensten");
let prijzen = document.querySelector("#link_prijzen");
let offerte = document.querySelector("#link_offerte");
let contact = document.querySelector("#link_contact");
let menu_diensten = document.querySelector(".menu_diensten");

let count = 0;

diensten.addEventListener("click", function(e){
    e.preventDefault();

    if(count == 0){
        prijzen.style.display = "none";
        offerte.style.display = "none";
        contact.style.display = "none";
        // diensten.style.position ="relative";
        // diensten.style.left = "-150px";

        menu_diensten.style.display = "flex";
        menu_diensten.style.gap = "30px";
        menu_diensten.style.marginRight = "30px";
        diensten.innerHTML = "&times";
        diensten.style.fontSize = "30px";
        count = 1;
    }else{
        diensten.innerHTML = "DIENSTEN";
        
       
        menu_diensten.style.display = "none";
        prijzen.style.display = "block";
        offerte.style.display = "block";
        contact.style.display = "block";
        diensten.style.fontSize = "1em";
        count = 0;
    }
    
    

})


//modal

let btns = document.querySelectorAll("#btn_mobile");
let modal = document.querySelector(".modal");
let kruisje = document.querySelector(".close");

let prijzenContainer = document.querySelector("#container_prijzen")



btns.forEach((btn)=>{
    btn.addEventListener("click", function(e){
        e.preventDefault();
        let klasse = e.target.getAttribute("class");
        window.location.href = `prijzen.php?prijs=${klasse}`;
    })
})


// btn.addEventListener("click", function(e){
//     e.preventDefault();
//     modal.style.display = "block";
// })

kruisje.addEventListener("click", function(){
    modal.style.display = "none";
})

window.addEventListener("click", function(event){
    if(event.target == modal){
        modal.style.display = "none";
    }
})

