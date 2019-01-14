$('#form_create').on('submit', function (e) {

    e.preventDefault();

    $.ajax({
        type: 'post',
        url: 'data/create.php',
        data: {
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