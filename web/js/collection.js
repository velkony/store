if (window.jQuery) {
    var button_add = '.collection-add-row';
    var button_delete = '.delete_row';

    if ($(button_add).length > 0) {

        var limit = null;

        if ($('[data-row-limit]').length > 0) {
            var $element = $('[data-row-limit]');
            limit = parseInt($element.attr('data-row-limit'));
        }

        $(document).on('click', button_add, function(event) {
            event.preventDefault();

            var table = $(this).closest('table');
            var count = (table.find('tbody tr').length + 1);
            var prototypeDiv = $(table).closest('div');

            if (typeof limit !== null) {
                if (limit === count) {
                    return;
                }
            }

            if ($(prototypeDiv).attr('data-row-limit')) {
                var limit = null;
                limit = parseInt($(prototypeDiv).attr('data-row-limit'));

                if (limit === count) {
                    $(this).fadeOut();
                }
            }

            var prototype = $(table.parent()).attr('data-prototype');
            if (typeof prototype !== 'undefined') {
                prototype = prototype.replace(/__name__/g, count++);

                var row = $(prototype);

                row.appendTo(table.find('tbody'));
            }

        });
    }

    //Delete row from collection
    function delete_row() {
        $(document).on('click', button_delete, function(event) {
            event.preventDefault();
            var limit = null;

            if ($('[data-row-limit]').length > 0) {
                var $element = $('[data-row-limit]');
                limit = parseInt($element.attr('data-row-limit'));
            }

            $(this).closest('tr').remove();

            var table = $(this).closest('table');
            var count = table.find('tbody tr').length;

            if (typeof limit !== null && $(button_add).not(':visible')) {
                if (limit > count) {
                    $(button_add).fadeIn();
                }
            }
        });
    }

    delete_row();
}
