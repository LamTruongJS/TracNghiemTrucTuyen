const $=document.querySelector.bind(document);

// animation username
const userName = $('.form__register__username--input');
const userNameTitle = $('.form__register__username--title');
userNameTitle.classList.add('form__register__username--title--acive');
if (userName.value != '') {
  userNameTitle.classList.remove('form__register__username--title--acive');
}
userName.addEventListener('focus', () => {
  userNameTitle.classList.remove('form__register__username--title--acive');
});
userName.addEventListener('blur', () => {
  if (userName.value.trim() === '') {
    userNameTitle.classList.add('form__register__username--title--acive');
  }
});
// animation username
const email = $('.form__register__email--input');
const emailTitle = $('.form__register__email--title');
emailTitle.classList.add('form__register__email--title--acive');
if (email.value != '') {
  emailTitle.classList.remove('form__register__email--title--acive');
}
email.addEventListener('focus', () => {
  emailTitle.classList.remove('form__register__email--title--acive');
});
email.addEventListener('blur', () => {
  if (email.value.trim() === '') {
    emailTitle.classList.add('form__register__email--title--acive');
  }
});
//anmition password
const password = $('.form__register__password--input');
const passwordTitle = $('.form__register__password--title');
passwordTitle.classList.add('form__register__password--title--acive');
if (password.value != '') {
  passwordTitle.classList.remove('form__register__password--title--acive');
}
password.addEventListener('focus', () => {
  passwordTitle.classList.remove('form__register__password--title--acive');
});
password.addEventListener('blur', () => {
  if (password.value.trim() === '') {
    passwordTitle.classList.add('form__register__password--title--acive');
  }
});

//animation confirm_password
const confirm_password = $('.form__register__confirm__password--input');
const confirm_passwordTitle = $('.form__register__confirm__password--title');
confirm_passwordTitle.classList.add('form__register__confirm__password--title--acive');
if (confirm_password.value != '') {
  confirm_passwordTitle.classList.remove('form__register__confirm__password--title--acive');
}
confirm_password.addEventListener('focus', () => {
  confirm_passwordTitle.classList.remove('form__register__confirm__password--title--acive');
});
confirm_password.addEventListener('blur', () => {
  if (confirm_password.value.trim() === '') {
    confirm_passwordTitle.classList.add('form__register__confirm__password--title--acive');
  }
});

// ???n hi???n password
const eyesContainer = $('.form__register__password__icon');
const eyes = $('.eyes_password');
const eyesHidden = $('.eyesHidden_password');
var flat = true;
eyesContainer.addEventListener('click', () => {
  flat = !flat;
  eyes.classList.toggle('disable');
  eyesHidden.classList.toggle('disable');
  if (flat == false) {
    password.type = 'text';
  } else {
    password.type = 'password';
  }
});

//???n hi???n confirm_password
const eyesContainer_confirm = $('.form__register__confirm__password__icon');
const eyes_confirm = $('.eyes_password_confirm');
const eyesHidden_confirm = $('.eyesHidden_password_confirm');
var flat_confirm = true;
eyesContainer_confirm.addEventListener('click', () => {
  flat_confirm = !flat_confirm;
  eyes_confirm.classList.toggle('disable');
  eyesHidden_confirm.classList.toggle('disable');
  if (flat_confirm == false) {
    confirm_password.type = 'text';
  } else {
    confirm_password.type = 'password';
  }
});
