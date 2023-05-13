import { Modal } from './res/Modal.js';
import { Login} from './res/Login.js';
import { PasswordToggle} from './res/PasswordToggle.js';

const modal_obj = new Modal('.close-button', '.modal-container');
modal_obj.start();

var login_obj = new Login('#userButton', '.user_login');
login_obj.showModal();

const passwordToggle_obj = new PasswordToggle('#eye', '#password');
passwordToggle_obj.init();