
function carroselDeDescontos(){
    let desconto = document.getElementById("desconto");
    let randomNumber =parseInt(Math.random()*10);
console.log(randomNumber);

    arrayDedescontos =[5,10,20,30,40,50,70,90,15,60,95];
    desconto.innerHTML = arrayDedescontos[randomNumber]+"%"; 
    
}
setInterval(carroselDeDescontos,5800);