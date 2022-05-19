require('./bootstrap');

$(() => {
    $(".deleteTeacher").on("click", function() {
        const href = $(this).attr('data-attr');
        
        $(this).hide();
        $(this).siblings(".confirmDeletion").show();
    });
});