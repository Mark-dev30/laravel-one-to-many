import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const delete_buttons = document.querySelectorAll('.confirm-delete-button[type="submit"]');

delete_buttons.forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault();

        const modal = document.getElementById('delete-project-modal');

        const bootstrapModal = new bootstrap.Modal(modal);

        bootstrapModal.show();

        const delete_button = modal.querySelector('#confirm-delete');

        delete_button.addEventListener('click', () => {
            button.parentElement.submit();
        });
    });
});
