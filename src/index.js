import "../sass/main.scss";

import ManipulateEelements from "./modules/manipulate-elements";
import Modal from "./modules/modal";

const manipulateElements = new ManipulateEelements();
const servicesModal = new Modal();

document.addEventListener('DOMContentLoaded', () => {

    // Move WPForm element
    manipulateElements.appendChild('wpforms-container', 'contact .container', 'flex');


    // Services Card Modal Funtionality
    const servicesCardBtns = document.querySelectorAll('.card button').forEach(button => button.addEventListener('click', e => {
        const serviceIdentifier = e.target.dataset.service;
        const modalToShow = document.querySelector(`.modal-services .modal__content[data-service="${serviceIdentifier}"]`);
        
        servicesModal.init('.modal-services .modal__backdrop', modalToShow);
        servicesModal.show();

        const buttonHandler = (closeBtn) => {
            return function closeButton () {
                console.log('click');
                servicesModal.hide();
                closeBtn.removeEventListener('click', closeButton);
            }
        }

        const closeBtn = modalToShow.querySelector('.modal__close');
        const closeButton = buttonHandler(closeBtn);

        closeBtn.addEventListener('click', closeButton);
    }));
});

