const buttonEye = document.querySelector('#eye');
const passwordInput = document.querySelector('#password');

const buttonEye2 = document.querySelector('#eye_r_password');
const passwordInput2 = document.querySelector('#passwordR');

const buttonEye3 = document.querySelector('#eye_verify_password');
const passwordInput3 = document.querySelector('#passwordR2');

var state1 = false;
var state2 = false;
var state3 = false;

buttonEye.addEventListener('click', e=>{
    if (state1) {
        passwordInput.setAttribute("type", "password");
        buttonEye.classList.remove("fa-eye");
        buttonEye.classList.add("fa-eye-slash");
        state1 = false;
    }else{
        passwordInput.setAttribute("type", "text");
        buttonEye.classList.remove("fa-eye-slash");
        buttonEye.classList.add("fa-eye");
        state1 = true;
    }
});

buttonEye2.addEventListener('click', e=>{
    if (state2) {
        passwordInput2.setAttribute("type", "password");
        buttonEye2.classList.remove("fa-eye");
        buttonEye2.classList.add("fa-eye-slash");
        state2 = false;
    }else{
        passwordInput2.setAttribute("type", "text");
        buttonEye2.classList.remove("fa-eye-slash");
        buttonEye2.classList.add("fa-eye");
        state2 = true;
    }
});

buttonEye3.addEventListener('click', e=>{
    if (state3) {
        passwordInput3.setAttribute("type", "password");
        buttonEye3.classList.remove("fa-eye");
        buttonEye3.classList.add("fa-eye-slash");
        state3 = false;
    }else{
        passwordInput3.setAttribute("type", "text");
        buttonEye3.classList.remove("fa-eye-slash");
        buttonEye3.classList.add("fa-eye");
        state3 = true;
    }
});