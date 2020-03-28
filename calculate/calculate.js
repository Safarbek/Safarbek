
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
       document.body.style.background="rgb(0,74,67)";
       document.body.style.background="linear-gradient(94deg, rgba(0,74,67,1) 21%, rgba(226,220,218,1) 22%, rgba(201,201,201,1) 57%, rgba(243,255,235,1) 78%, rgba(219,95,8,1) 79%)"
       document.body.style.backgroundSize = '100% 100%'
       document.body.style.backgroundPosition= 'center'
       break;
   }
}
