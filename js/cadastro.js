const form = document.getElementById('form');
const campos = document.querySelectorAll('.required')
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

function setError(index) {
  campos[index].style.border = '2px solid #e63636';
  spans[index].style.display = 'block';
}

function removeError(index) {

  campos[index].style.border = '2px solid #fff';
  spans[index].style.display = 'none';
}


function nomeValidate() {
  if (campos[0].valeu.length < 3) {

    setError(0);

  }
  else {
    console.log('VALIDO NOME');
  }

}


function emailValidate() {
  if (!emailRegex.test(campos[1])) {
    setError(1);
  } else {
    removaError(1);
  }
}
function mainPasswordValidate() {
  if (campos[2].value.length < 8) {
    setError(2);
  }
  else {
    removeError(2);
  }
}