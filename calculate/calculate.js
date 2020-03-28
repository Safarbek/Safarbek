
function calculate(a){
   let input = document.getElementById('inp').value += a;
   return input;
}

function total(){
    document.getElementById('screen').innerHTML = "Чавоб: " + "<b style='color: red'>" + eval(document.getElementById('inp').value) + "</b>";
    let input = document.getElementById('inp').value ="";

}

function cleara(){
    document.getElementById('inp').value ="";
    document.getElementById('screen').innerHTML = "Чавоб: "
}


document.getElementById('colors').onchange = function(){
   let check = this.value;
   
   switch(check){
       case 'black': 
       document.body.style.background = 'black';
       document.getElementById('inp').style.background ='white';
       document.getElementById('inp').style.color = 'black'
       break;
       case 'white': 
       document.body.style.background ='white';
       document.getElementById('inp').style.background ='black';
       document.getElementById('inp').style.color = 'white'
       break;
       case 'img': 
       document.body.style.background="rgb(0,176,14)";
       document.body.style.background="linear-gradient(94deg, rgba(0,176,14,1) 22%, rgba(255,247,245,1) 23%, rgba(255,253,253,1) 57%, rgba(243,255,235,1) 72%, rgba(255,0,0,1) 72%)"
       document.body.style.backgroundSize = 'cover'
       document.body.style.backgroundRepeat= 'no-repeat'
       break;
   }
}
