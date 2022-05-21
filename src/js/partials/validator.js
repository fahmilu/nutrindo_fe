import $ from "jquery";
import {Modal} from "bootstrap";

if($('#validator-sections').length || $('.product-validator').length ) {
    
    const $formValidator = $('form.form-validator'), 
            $emailModal = new Modal(document.getElementById('submitEmail')),
            $successModal = new Modal(document.getElementById('successModal')),
            $failedModal = new Modal(document.getElementById('failedModal'));
    
    document.addEventListener("DOMContentLoaded", function() {
        
        $formValidator.submit(function (e) { 
            e.preventDefault();
            $emailModal.show(); 
        
        });
    
        $('body').on('submit', '#submitEmail form.submit-email', function (e) { 
            e.preventDefault();
            $emailModal.hide(); 
            const email = $('#submitEmail form.submit-email input').val();
    
            if(email !== '') {
                $successModal.show(); 
            } else {
                $failedModal.show(); 
            }   
        });
    
        $('body').on('click', '.modal-validator .retry', function () {
            $('form.form-validator input,  form.submit-email input').val('');
        });
    
    });
}