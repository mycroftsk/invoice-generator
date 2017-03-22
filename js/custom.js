$(document).ready(function () {

    $('#add_row').click(function () {
        var $div = $('div[id^="item-"]:last');
        var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

        $div.clone().prop('id', 'item-'+num ).insertAfter($div);
    });

    $('#delete_row').click(function() {
        if($('div[id^="item-"]').length > 1) {
            $('div[id^="item-"]:last').remove();
        }
    });

});