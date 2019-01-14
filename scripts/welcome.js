$(document).ready(function () {

    DataTable = $('#table_events').DataTable( {
        "ajax": 'data/events.php'
    });
    
});

$('#table_events').on('click', 'tbody tr td a.delete', function () {
                
                // Incarcare date din randul respectiv
                var nTr = $(this).closest("tr").get(0),
                    iPos = DataTable.row(nTr).index(),
                    aData = DataTable.row(iPos).data();

                    $.ajax({
                        type: 'post',
                        url: 'data/event-delete.php',
                        data: {
                            id: aData[0]
                        },
                        success: function () {
                            alert('Cererea pentru eveniment a fost trimisa!');
                        }
                    });
                // Setare id in form
    
});

$('#table_events').on('click', 'tbody tr td a.edit', function () {
    
 
    // Incarcare date din randul respectiv
    var nTr = $(this).closest("tr").get(0),
        iPos = DataTable.row(nTr).index(),
        aData = DataTable.row(iPos).data();

        $('#form_id').val(aData[0]);
        $('#form_denumire').val(aData[1]);
        $('#form_locatie').val(aData[2]);
        $('#form_data').val(aData[3]);
        $('#form_invitati').val(aData[4]);

        $('#form_edit').on('submit', function (e) {
            
                e.preventDefault();
            
                $.ajax({
                    type: 'post',
                    url: 'data/event-edit.php',
                    data: {
                        id: $('#form_id').val(),                        
                        denumire: $('#form_denumire').val(),
                        locatie: $('#form_locatie').val(),
                        data: $('#form_data').val(),
                        invitati: $('#form_invitati').val(),
                    },
                    success: function () {
                        alert('Cererea pentru eveniment a fost trimisa!');
                    }
                });
            });


});