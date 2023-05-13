import { Modal } from './res/modal.js';
import { LoginModal} from './res/login_modal.js';

const modal_obj = new Modal('.close-button', '.modal-container');
modal_obj.start();

const login_obj = new LoginModal('#userButton', '.user_login');
login_obj.toggleModal();
