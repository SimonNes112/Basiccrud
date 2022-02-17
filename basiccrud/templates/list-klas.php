<?php

include "./scripts/connectdb.php";

$sql = "SELECT * FROM klas";

$sth = $db->prepare($sql);

$sth->execute();

?>

<script>

    function confirmDelete(klasId) {

        $("#modal-confirm").modal('show');


        $('#btn-delete-confirmed').on('click', function(){deleteKlas(klasId);});

    }

    function deleteKlas(klasId) {

        $('#modal-confirm').modal('hide');

        $.get('templates/delete-klas.php',

            {id: klasId}).then(

            function() {

                window.location.href = 'klas.php';

                window.location.reload(true);});

    }





</script>

<table class="table">


    <thead>

    <tr>

        <th>Id</th>

        <th>Code</th>

        <th>Vestiging</th>

        <th>Sectie</th>

        <th>Acties</th>

        <th>Acties</th>


    </tr>

    </thead>

    <tbody>

    <?php while($row = $sth->fetch()) { ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["code"]; ?></td>

            <td><?php echo $row["vestiging"]; ?></td>

            <td><?php echo $row["sectie"]. " " . $row["cohort"]; ?></td>

            <td><a href="templates/update-klas-form.php?id=<?php echo $row["id"]?>" class="btn btn-danger">Wijzig</a> </td>
            <td><button onclick="confirmDelete(<?php echo $row["id"]?>)" class="btn btn-danger">Verwijder</button></td>

        </tr>


    <?php } ?>

    </tbody>

</table>

<div id="modal-confirm" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verwijderen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Weet u zeker dat u wilt verwijder</p>
            </div>
            <div class="modal-footer">
                <button id="btn-delete-confirmed" onclick="confirmDelete()" class="btn btn-danger">Verwijder</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Anulleer</button>
            </div>
        </div>
    </div>
</div>

