
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
       document.body.style.background="rgb(9,9,9)";
       document.body.style.background="radial-gradient(circle, rgba(9,9,9,1) 0%, rgba(31,148,206,1) 44%, rgba(86,178,222,1) 53%, rgba(241,13,53,1) 85%, rgba(237,255,0,1) 100%)"
       document.body.style.backgroundSize = '100% 100%'
       document.body.style.backgroundPosition= 'center'
       break;
   }
}
