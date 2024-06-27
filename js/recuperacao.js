const form = document.getElementById('form');
const campos =document.querySelectorAll('.required')
const spans = document.querySelectorAll('.span-required');
const emailRegex =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

function setError(index){
    campos [index].style.border ='2px solid #e63636';
    spans [index].style.display= 'block';
    
}
function removeError(index) {

  campos[index].style.border = '2px solid #fff';
  spans[index].style.display = 'none';

}

