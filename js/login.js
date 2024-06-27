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
    
function emailValidate() {
  if(!emailRegex.test(campos[0])) {
    setError(0);
  }else {
    removaError(0);
  }
}
function mainPasswordValidate(){
    if(campos[1].value.length < 8)
{
    setError(1);
}
else {
    removeError(1);
}
}