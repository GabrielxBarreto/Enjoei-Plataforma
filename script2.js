
function carroselDeDescontos(){
    let desconto = document.getElementById("desconto");
    let txt = document.getElementsByClassName("textopromocional")[0];
    let randomNumber =parseInt(Math.random()*10);
    let randomText =parseInt(Math.random()*4);
console.log(randomNumber);

    arrayDedescontos =[5,10,20,30,40,50,70,90,15,60,95];
    arraytext =["Temos descontos de até 95% <br>na black-Friday!<br> aproveite nossos produtos <br>com o selo de qualidade breshop.","Oferta relâmpago<br> passando pela Breshop! Todas as Calças<br> jeans com 20% de desconto!"," Preços imbatíveis<br> é só na Breshop!","Lembre-se:<br> fiado, só quando thiago raspar a barba!","Navegue e descubra mais sobre nossos produtos","<b>Nada de dar meia ou cueca para o seu pai esse ano!</b><br> A  Breshop tem tudo o que você procura<br> para agradar o seu pai.Breshop, o nosso objetivo é ver seu pai feliz!"];
    if(randomNumber == 10){
        txt.innerHTML = arraytext[0];
    }else if(randomNumber == 2){
        txt.innerHTML = arraytext[1];
    }else{
        txt.innerHTML = arraytext[randomText];
    }
    desconto.innerHTML = arrayDedescontos[randomNumber]+"%"; 
    
    
}
setInterval(carroselDeDescontos,70000);