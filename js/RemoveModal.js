/**
 * Created by igor on 15.08.17.
 */
$(function() {
// Параметры формы
    $('#delete-category-confirmation [data-action="confirm"]').click(function() {
        var modal = $(this).parents('.modal');
        var data =  typeof(modal.attr('data-items')) == "string" && modal.attr('data-items').length > 0
            ? {'items': modal.attr('data-items').split(',')}
            : {} ;
        $.post( modal.attr('data-url'), data, function(val){ return true; });
        return true;
    });
});