

//hamburger menu


document.querySelector("#hamburger").addEventListener("click", function(e){

   
    var checkbox = document.querySelector('#hamburger').checked;
    var afbeelding = document.querySelector(".img_hamburger");
    var position = document.querySelector('.menu_mob').style;

    
    
    if(checkbox == true){
        afbeelding.src = "images/kruis.svg";
        position.top = "50px";
        
        
       
    }else if(checkbox == false){
        afbeelding.src = "images/hamburger.svg"; 
        position.top = "-1000px";
        
        
        
    }

    $("a").click(function(e){
        
        
        afbeelding.src = "images/hamburger.svg"; 
        position.top = "-400px";
        
    })
});


document.querySelector(".logo").addEventListener("click", function(e){
    window.location.href = "index.html";
})