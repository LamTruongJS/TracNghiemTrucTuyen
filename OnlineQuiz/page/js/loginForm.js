const $=document.querySelector.bind(document);

const userName = $('.form__login__username--input');
const userNameTitle = $('.form__login__username--title');
userNameTitle.classList.add('form__login__username--title--acive');
console.log(userName.value);
if (userName.value != '') {
  userNameTitle.classList.remove('form__login__username--title--acive');
}
userName.addEventListener('focus', () => {
  userNameTitle.classList.remove('form__login__username--title--acive');
});
userName.addEventListener('blur', () => {
  if (userName.value.trim() === '') {
    userNameTitle.classList.add('form__login__username--title--acive');
  }
});

const password = $('.form__login__password--input');
const passwordTitle = $('.form__login__password--title');
passwordTitle.classList.add('form__login__password--title--acive');
if (password.value != '') {
  passwordTitle.classList.remove('form__login__password--title--acive');
}
password.addEventListener('focus', () => {
  passwordTitle.classList.remove('form__login__password--title--acive');
});
password.addEventListener('blur', () => {
  if (password.value.trim() === '') {
    passwordTitle.classList.add('form__login__password--title--acive');
  }
});

const eyesContainer = $('.form__login__password__icon');
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
