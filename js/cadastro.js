const form = document.getElementById('form');
const campos = document.querySelectorAll('.required')
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
// aidção da mensagem de erro
function setError(index) {
  campos[index].style.border = '2px solid #e63636';
  spans[index].style.display = 'block';
}
//remoção da menssagem de erro 
function removeError(index) {

  campos[index].style.border = '2px solid #fff';
  spans[index].style.display = 'none';
}



// falidação do email
function emailValidate() {
  if (!emailRegex.test(campos[0].value)) {
    setError(0);
  } else {
    removeError(0);
  }
}
// validação do nome 
function nomeValidate() {
  if (campos[1].value.length < 3) {

    setError(1);

  }
  else {
    removeError(1);
  }
}
// validação da senha 
function mainPasswordValidate() {
  if (campos[2].value.length < 8) {
    setError(2);
  }
  else {
    removeError(2);
  }
}
//  valodação da confimação da senha 
function mainPasswordValidate2() {
  if (campos[3].value.length < 8) {
    setError(3);
  }
  else {
    removeError(3);
  }
}

// erro tester

// function comparePassword() {
//   if (campos[2].value == campos[3].value && campos[3].value.length >= 8 ) {
//     removeError(3);
//   }
// }