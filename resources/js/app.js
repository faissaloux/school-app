require('./bootstrap');

import '@fortawesome/fontawesome-free/css/fontawesome.css';
import '@fortawesome/fontawesome-free/css/solid.css';

$(() => {
    $(".delete").on("click", function() {
        const href = $(this).attr('data-attr');
        
        $(this).hide();
        $(this).siblings(".confirmDeletion").show();
    });
});