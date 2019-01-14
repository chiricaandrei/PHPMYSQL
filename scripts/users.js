$(document).ready(function () {
    
        DataTable = $('#table_users').DataTable( {
            "ajax": 'data/users.php'
        });
        
    });

    $('#table_users').on('click', 'tbody tr td a.edit', function () {
        
     
        // Incarcare date din randul respectiv
        var nTr = $(this).closest("tr").get(0),
            iPos = DataTable.row(nTr).index(),
            aData = DataTable.row(iPos).data();
            console.log(aData);
            $('#form_id').val(aData[0]);
            $('#form_username').val(aData[1]);
            if(aData[2]=="Administrator")
                $('#form_rol').val(1);
            else
                $('#form_rol').val(2);
            
    
            $('#form_user').on('submit', function (e) {
                
                    e.preventDefault();
                
                    $.ajax({
                        type: 'post',
                        url: 'data/user-edit.php',
                        data: {
                            id: $('#form_id').val(),                        
                            username: $('#form_username').val(),
                            rol: $('#form_rol').val(),
                            
                        },
                        success: function () {
                            alert('Cererea pentru eveniment a fost trimisa!');
                        }
                    });
                });
    
    
    });