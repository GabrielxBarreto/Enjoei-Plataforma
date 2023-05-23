/*cria uma constante pra representar as imagens: */
const MARCA = document.getElementById('marca-id'); 
let i = 0;
function carrosel(){
    let listaDeMarcas = ["NIKE","ADIDAS","PUMA","LOUIVITON","LACOST","RENNER"];
    if(i == listaDeMarcas.length){
        i = 0;
    }
    MARCA.innerHTML = `${listaDeMarcas[i]}`;
    i++;
}
setInterval(carrosel,1800);