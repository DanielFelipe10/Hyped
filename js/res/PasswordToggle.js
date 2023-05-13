/*const buttonEye = document.querySelectorAll('#eye');
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
});*/

export class PasswordToggle {
    constructor(buttonSelector, passwordSelector) {
      this.buttonEye = document.querySelector(buttonSelector);
      this.passwordInput = document.querySelector(passwordSelector);
      this.state = false;
      this.togglePasswordVisibility = this.togglePasswordVisibility.bind(this);
      this.buttonEye.addEventListener('click', this.togglePasswordVisibility);
    }
  
    togglePasswordVisibility() {
      if (this.state) {
        this.passwordInput.setAttribute('type', 'password');
        this.buttonEye.classList.remove('fa-eye');
        this.buttonEye.classList.add('fa-eye-slash');
        this.state = false;
      } else {
        this.passwordInput.setAttribute('type', 'text');
        this.buttonEye.classList.remove('fa-eye-slash');
        this.buttonEye.classList.add('fa-eye');
        this.state = true;
      }
    }
  }