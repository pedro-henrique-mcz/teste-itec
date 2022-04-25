window.load = slide(1);

var bgNumber =1;

function slide(n){
    var allBgs = 4;
    document.getElementById('imageBg').style.backgroundImage = "url('../assents/imgs/banner/"+n+".jpg')";
    var title = document.querySelector(".title-banner");
    switch (n) {
        case 1 :
            title.innerText ="Novas Salas";
            break;
        case 2:
            title.innerText ="Uma nova maneira de agir";
            break;
        case 3:
            title.innerText ="O futuro do setor público";
            break;
        case 4:
            title.innerText ="Venha para a SEPLAG";
            break;
        default: 
      }
}

function anterior(){
    if(bgNumber>1){
        bgNumber--;
        slide(bgNumber);
    }else{
        bgNumber =4;
        slide(bgNumber);
    }
}

function proximo(){
    if(bgNumber<4){
        bgNumber++;
        slide(bgNumber);
    }else{
        bgNumber =1;
        slide(bgNumber);
    }
   
}

var btnMobile = document.getElementById('btn-mobile');

function toggleMenu(){
    var nav = document.getElementById('nav');
    nav.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);