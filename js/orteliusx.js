//scroll event blurry images
let page = document.querySelector('body');

window.onscroll = function() {myFunction()};

function myFunction() {
  if(document.documentElement.scrollTop > 0){
   document.querySelector('.index__header').style.filter = "blur(4px)";
   document.querySelector('h1').style.color = "black";
  }else{
    document.querySelector('.index__header').style.filter = "blur(0px)";
    document.querySelector('h1').style.color = "white";
  }
}










//hamburger menu


document.querySelector("#hamburger").addEventListener("click", function(e){
    console.log("test");
   
    var checkbox = document.querySelector('#hamburger').checked;
    var afbeelding = document.querySelector(".img_hamburger");
    var position = document.querySelector('.menu_mob').style;
    let header =  document.querySelector("header");
    let logo = document.querySelector(".logo");

    
    
    if(checkbox == true){
        afbeelding.src = "images/kruis.svg";
        position.top = "0px";
        position.height = "100%";
        // header.style.border = "none";
        // logo.style.display = "none";
        
        
       
    }else if(checkbox == false){
        afbeelding.src = "images/hamburger.svg"; 
        position.top = "-1000px";
        header.style.borderBottom = "3px solid #0939DE";
        logo.style.display = "grid";
        
        
        
    }

    document.querySelector(".dienstClick").addEventListener('click', (e) =>{
        e.preventDefault();

        let dienst = document.querySelector(".dienstClick");
        let prijs = document.querySelector(".dienstClick2");
        let offerte = document.querySelector(".dienstClick3");
        let contact = document.querySelector(".dienstClick4");

        dienst.innerHTML = "Promoties & rapportage";
        dienst.style.fontSize = "20px";
        dienst.addEventListener("click", (f) =>{f.preventDefault(); window.location.href = "promoties&rapportage.php";})
        prijs.innerHTML = "Inspectie";
        prijs.style.fontSize = "20px";
        prijs.addEventListener("click", (g) =>{ g.preventDefault(); window.location.href = "inspectie.php";})
        offerte.innerHTML = "Observatie & onderzoek";
        offerte.style.fontSize = "20px";
        offerte.addEventListener("click", (t) =>{t.preventDefault(); window.location.href = "observatie&onderzoek.php";})
        contact.style.display = "none";
        
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

if(kruisje != null){
    kruisje.addEventListener("click", function(){
        modal.style.display = "none";
    })
}



window.addEventListener("click", function(event){
    if(event.target == modal){
        modal.style.display = "none";
    }
})

//slider bij diensten





if(document.querySelector("#container_titels") !== null){

    let container = document.querySelector("#container_titels").childNodes[3].innerHTML;




if(container == "PROMOTIE EN RAPPORTAGE"){
            //luchtopnames
        let counter_lucht = 0;

        let sources_lucht = ["videos/luchtopnames.mp4", "videos/luchtopnames2.mp4", "videos/luchtopnames3.mp4"]

        let mediaLucht = document.querySelector("#media_luchtopnames");
        


        let next_lucht = document.querySelector("#next_luchtopnames");
        let prev_lucht = document.querySelector("#prev_luchtopnames");

        next_lucht.addEventListener("click", function(e){
            
        if(counter_lucht < 2){
            counter_lucht+=1;
            
            mediaLucht.src = sources_lucht[counter_lucht];
        }else{
            counter_lucht = 0;
            mediaLucht.src = sources_lucht[counter_lucht];
        }
        })

        prev_lucht.addEventListener("click", function(e){
            
            if(counter_lucht > 0){
            counter_lucht-=1;
            console.log(counter_lucht);
            mediaLucht.src = sources_lucht[counter_lucht];
            }else{
                counter_lucht = 2;
                mediaLucht.src = sources_lucht[counter_lucht];
                console.log(counter_lucht);
            }
        })

        //onroerend

        let counter_onroe = 0;

        let sources_onroe = ["videos/onroerend.mp4","videos/onroerend1.mp4", "videos/onroerend2.mp4"]

        let mediaOnroe = document.querySelector("#media_onroerend");
        


        let next_onroe = document.querySelector("#next_onroerend");
        let prev_onroe = document.querySelector("#prev_onroerend");

        next_onroe.addEventListener("click", function(e){
            
        if(counter_onroe < 2){
            
            counter_onroe+=1;
            mediaOnroe.src = sources_onroe[counter_onroe];
            
            
        }else{

            counter_onroe = 0;
            mediaOnroe.src = sources_onroe[counter_onroe];
            
        }
        })

        prev_onroe.addEventListener("click", function(e){
            
            if(counter_onroe > 0){
            counter_onroe-=1;
            
            mediaOnroe.src = sources_onroe[counter_onroe];
            }else{
                counter_onroe = 2;
                mediaOnroe.src = sources_onroe[counter_onroe];
                
            }
        })
    
}

if(container == "Observatie &amp; onderzoek"){
    
     //landbouw

        let counter_land = 0;

        let sources_land = ["videos/LBmonitoring.mp4","videos/LBmonitoring2.mp4"]
        
        let mediaLand = document.querySelector("#media_landbouwmonitoring");
        
        
        
        let next_land = document.querySelector("#next_landbouwmonitoring");
        let prev_land = document.querySelector("#prev_landbouwmonitoring");
        
        next_land.addEventListener("click", function(e){
            console.log("test");
            if(counter_land < 1){
            
            counter_land+=1;
            mediaLand.src = sources_land[counter_land];
            
            
            }else{
        
                counter_land = 0;
                mediaLand.src = sources_land[counter_land];
                
            }
        })
        
        prev_land.addEventListener("click", function(e){
            
            if(counter_land > 0){
            counter_land-=1;
            
            mediaLand.src = sources_land[counter_land];
            }else{
                counter_land = 1;
                mediaLand.src = sources_land[counter_land];
                
            }
        })




    
}

if(container == "Inspectie"){
    
    
}
}










    
    

   







