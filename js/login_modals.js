const userLoginButton = document.querySelector('#userButton');
const userLoginModal = document.querySelector('.user_login');
const userRegisterButton = document.querySelector('#btnSignUp');
const userRegisterModal = document.querySelector('.user_register');
const arrow = document.querySelector('.arrow');

userLoginButton.addEventListener('click', e=>{
    userRegisterModal.classList.toggle('invisible');
    userLoginModal.classList.toggle('invisible');
});

userRegisterButton.addEventListener('click', e=>{
    userRegisterModal.classList.toggle('invisible');
});

arrow.addEventListener('click', e=>{
    userRegisterModal.classList.toggle('invisible');
});
