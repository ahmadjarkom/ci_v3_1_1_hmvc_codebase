
var my_data_table_filter = {};

my_data_table_filter.init = function (id,filter) {
    var url = $(id).data('source');
    var child = $(id).data('child');
    // alert(child);
    return $(id).DataTable({
        'processing': true,
        'serverSide': true,
        "pageLength": 15,
        'ajax': {
            'url': url,
            'type': 'POST',
            'data': filter,
        },
        'searching': false,
        'lengthChange': false,
        'responsive': true,
        "scrollX": true
    });
}


var my_data_table_client_side = {};

my_data_table_client_side.init = function (id, data) {
    // alert(child);
    return $(id).DataTable({
        'processing': true,
        'serverSide': false,
        'data': data,
        'pageLength': 15,
        'deferRender': true,
        'lengthChange': false,
        'responsive': true,
        'searching': true,
        'pagination': true
    });
}