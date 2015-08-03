$(document).ready(function(){
    
    $('.btAlterar').click(function(){
        var id = $(this).attr('id');
        $('.'+id).fadeToggle('slow');
    });
    
});