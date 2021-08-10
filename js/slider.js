// const dienstob = [
//     ["images/ortho.png", "Orthografische foto's", "Observatie & onderzoek", "observatie&onderzoek"],
//     ["images/carto.png", "Gis cartografie", "Observatie & onderzoek", "observatie&onderzoek"],
//     ["images/Schadeclaim.png",  "Schadeclaim opmetingen",  "Observatie & onderzoek", "observatie&onderzoek"],
//     ["images/LBmonitoring.png",  "Landbouw monitoring",  "Observatie & onderzoek", "observatie&onderzoek"],
//     ["images/volume.png",  "Volume berekening",  "Observatie & onderzoek", "observatie&onderzoek"]
// ];



// btns promotie

let btnActie = document.querySelector("#btn--actie");
let btnLucht = document.querySelector("#btn--luchtopnames");
let btnOnroerend = document.querySelector("#btn--onroerend");

let imagePromotie = document.querySelector("#image--promotie");



btnActie.addEventListener("click", (e) => {
    
    imagePromotie.src = "images/2.png";
})

btnLucht.addEventListener("click", (e) => {
    
    imagePromotie.src = "images/luchtopname.png";
})

btnOnroerend.addEventListener("click", (e) => {
    
    imagePromotie.src = "images/onroerend.png";
})



//btns inspectie

let btnInstallatie = document.querySelector("#btn--installatie");
let btnGebouw = document.querySelector("#btn--gebouw");
let btnDaken = document.querySelector("#btn--daken");

let imageInspectie = document.querySelector("#image--inspectie");



btnInstallatie.addEventListener("click", (e) => {
    
    imageInspectie.src = "images/installaties.png";
})

btnGebouw.addEventListener("click", (e) => {
    
    imageInspectie.src = "images/gebouwen.png";
})

btnDaken.addEventListener("click", (e) => {
    
    imageInspectie.src = "images/inspectiedaken.png";
})

//observatie

let btnOrtho = document.querySelector("#btn--ortho");
let btnGis = document.querySelector("#btn--gis");
let btnSchade = document.querySelector("#btn--schade");
let btnLandbouw = document.querySelector("#btn--landbouw");
let btnVolume = document.querySelector("#btn--volume");

let imageObservatie = document.querySelector("#image--observatie");



btnOrtho.addEventListener("click", (e) => {
    
    imageObservatie.src = "images/ortho.png";
})

btnGis.addEventListener("click", (e) => {
    
    imageObservatie.src = "images/carto.png";
    
})

btnSchade.addEventListener("click", (e) => {
    
    imageObservatie.src = "images/Schadeclaim.png";
})

btnLandbouw.addEventListener("click", (e) => {
    
    imageObservatie.src = "images/LBmonitoring.png";
})

btnVolume.addEventListener("click", (e) => {
    
    imageObservatie.src = "images/volume.png";
})





