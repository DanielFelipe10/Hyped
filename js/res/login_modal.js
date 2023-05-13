export class LoginModal {
    constructor(buttonSelector, modalSelector) {
      this.userButton = document.querySelector(buttonSelector);
      this.userModal = document.querySelector(modalSelector);
      thid.toggleModal = this.toggleModal.bind(this);
    }
    toggleModal() {
      this.userButton.addEventListener('click', e=>{
        this.userModal.classList.toggle('invisible');
      });
    }
  }
  
  