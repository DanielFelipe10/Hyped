export class Login {
    constructor(buttonSelector, modalSelector) {
      this.userButton = document.querySelector(buttonSelector);
      this.userModal = document.querySelector(modalSelector);
      this.show = this.show.bind(this);
    }

    show(){
      this.userModal.classList.toggle('invisible');
    }

    showModal(){
      this.userButton.addEventListener('click', this.show);
    }
  }
  
  