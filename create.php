
<!DOCTYPE html>
<html>
<head>

    <title> Organizare Evenimente login</title>
</head>

<body>
    <?php require_once 'menu.php'; ?>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-2 sidenav">

            </div>

            <div class="col-sm-8 text-left">

                    <div class="row">
                        <h3>Cerere eveniment</h3>
                    </div>

                  <form id="form_create">
                    <div class="form-group">
                        <label for="form_denumire">Denumire</label>
                        <input type="text" class="form-control" id="form_denumire" placeholder="Introduceti Denumirea">
                    </div>
                    <div class="form-group">
                        <label for="form_locatie">Locatie</label>
                        <input type="text" class="form-control" id="form_locatie" placeholder="Introduceti locatia">
                    </div>

                    <div class="form-group">
                        <label for="form_data">Data</label>
                        <input type="date" class="form-control" id="form_data" placeholder="Introduceti data">
                    </div>

                    <div class="form-group">
                        <label for="form_invitati">Numar invitati</label>
                        <input type="number" class="form-control" id="form_invitati" placeholder="Introduceti numarul de invitati">
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-7 pull-right">
                            <button type="submit" class="btn btn-primary">Trimiteti Cererea Evenimentului</button>
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
    <script src="scripts/create.js"></script>

</body>

</html>