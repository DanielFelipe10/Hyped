class modal {
    constructor(closeButtonSelector, modalContainerSelector) {
      this.closeButton = document.querySelector(closeButtonSelector);
      this.modalContainer = document.querySelector(modalContainerSelector);
      this.openModal = this.openModal.bind(this);
      this.closeModal = this.closeModal.bind(this);
    }
  
    openModal() {
      this.modalContainer.classList.add('show');
    }
  
    closeModal() {
      this.modalContainer.classList.remove('show');
    }
  
    start() {
      setTimeout(this.openModal, 3000);
      this.closeButton.addEventListener('click', this.closeModal);
    }
  }

  