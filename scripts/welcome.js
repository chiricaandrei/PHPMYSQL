$(document).ready(function () {

    $('#table_events').DataTable( {
        "ajax": 'data/events.php'
    });
    
});