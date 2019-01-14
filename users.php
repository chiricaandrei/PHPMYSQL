<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <title> Organizare Evenimente login</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>

<body>
    <?php require_once 'menu.php'; ?>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-2 sidenav">

            </div>

            <div class="col-sm-8 text-left">
                <table id="table_users" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Rol</th>
                            <th>Modificare</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2 sidenav">

            </div>
            <div class ="col-sm-8">
                <form id="form_user">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="form_id" >
                    </div>
                    <div class="form-group">
                        <label for="form_username">Username</label>
                        <input type="text" class="form-control" id="form_username" placeholder="Introduceti username">
                    </div>
                    <div class="form-group">
                        <label for="form_rol">Rol</label>
                        <select id="form_rol">
                            <option value="1">Administrator</option>
                            <option value="2">Vizitator</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-7 pull-right">
                            <button type="submit" class="btn btn-primary">Editati userul</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        
    </div>




    <!-- Jquery and Bootstrap-->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


    <!-- Explicit Page scripts -->
    <script src="scripts/users.js"></script>

</body>

</html>