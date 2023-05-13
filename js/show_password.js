const buttonEye = document.querySelectorAll('#eye');
const passwordInput = document.querySelector('#password');
var state = false;

buttonEye.addEventListener('click', e=>{
    if (state) {
        passwordInput.setAttribute("type", "password");
        buttonEye.classList.remove("fa-eye");
        buttonEye.classList.add("fa-eye-slash");
        state = false;
    }else{
        passwordInput.setAttribute("type", "text");
        buttonEye.classList.remove("fa-eye-slash");
        buttonEye.classList.add("fa-eye");
        state = true;
    }
});