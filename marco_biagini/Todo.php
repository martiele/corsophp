
<?php
include("Scripts/PHP/SessionManager.php"); 
require_once("Scripts/PHP/DBManager.php");

if(!$_SESSION["login"]->logged){
    header('location:Login.php');
    exit();
}

$sql = "SELECT * FROM Tasks";
$select = $conn->query($sql);
$total_column = $select->columnCount();

for ($counter = 0; $counter < $total_column; $counter ++) {
    $meta = $select->getColumnMeta($counter);
    $column[] = $meta['name'];
}

$sql .= " ORDER BY created DESC, id DESC";
$data = $conn->prepare($sql);
$data->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sito Web Meraviglioso</title>

    <?php include("Styles/MyStyle.php"); ?>
    <?php include("Styles/Bootstrap4.php"); ?>

</head>

<body>
    <?php include("Menu.php"); ?>

    <div class="main-content">
        <div>
            <div class="container">
                <h1 class="display-3">Cose da fare nella vita</h1>
                <p class="lead">Obiettivi per essere una persona migliore</p>
                <hr class="my-2">
                <p>o almeno provarci...</p>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php 
                    foreach ($column as $key => $value) {
			            if($value != "id" && $value != "created"){
			        ?>
                    <th scope="col"><?=$value?></th>
                    <?php
                        }
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($data->rowCount() > 0){
                    while($row = $data->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <th scope="row"><?=$row["id"]?></th>
                    <td><?=$row["name"]?></td>
                    <td><?=$row["note"]?></td>
                    <td><?=setlocale(date_format($row["deadline"], 'g:ia \o\n l jS F Y'))?></td>
                    <td><?=$row["status"]?></td>
                </tr>
                <?php }}?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal"> + Nuovo
            Obiettivo</button>

        <div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newModalLabel">Nuovo Obiettivo Importantissimo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">

                            <input type="hidden" name="form_add_check" value="1" />

                            <div class="demo-form-row">
                                <label>Titolo: </label><br>
                                <input type="text" name="post_title" class="demo-form-field" required />
                            </div>
                            <div class="demo-form-row">
                                <label>Descrizione: </label><br>
                                <textarea name="description" class="demo-form-field" rows="5" required></textarea>
                            </div>
                            <div class="demo-form-row">
                                <label>Data di scadenza: </label><br>
                                <input type="date" name="post_at" class="demo-form-field" required />
                            </div>
                            <div class="demo-form-row">
                                <label>Stato: </label><br>
                                <select name="state" id="dest" onchange="setSelectedValue(this.id, 'dest_hidden')">
                                    <option selected="selected" value="0">Generale</option>
                                    <option value="1">Commerciale</option>
                                    <option value="2">Tecnico</option>
                                </select>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                        <button type="button" class="btn btn-primary">Salva</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include("Scripts/PHP/Notification.php"); ?>

    <script type="text/javascript">
    $(document).ready(function() {
        setActive("#menu", 2);
    });
    </script>
</body>

</html>