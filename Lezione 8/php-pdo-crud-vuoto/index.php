<?php
	//Codice per creare una lista di record

	require_once("db.php");



?><html>
<head>
<title>PHP PDO CRUD - Esempio</title>
<style>
body{width:100%;font-family:arial;letter-spacing:1px;line-height:20px;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
</style>
</head>
<body>

<div class="content" style="margin:50px auto; width:800px; ">
<div style="text-align:right;margin:20px 0px;"><a href="add.php" class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> Crea nuovo</a></div>

<?php
$sql = "SELECT * FROM posts";
$select = $conn->query($sql);
$total_column = $select->columnCount();

for ($counter = 0; $counter < $total_column; $counter ++) {
    $meta = $select->getColumnMeta($counter);
    $column[] = $meta['name'];
}
//print_r($column);
?>

<table class="tbl-qa">
  <thead>
	<tr>
		<?php foreach ($column as $key => $value) {
			if($value!="id"){
			?>
			  <th class="table-header" width="20%"><?=$value?></th>
			<?php
			}
		}
		?>
		<th class="table-header" width="20%">Azioni</th>
	</tr>
  </thead>
  <tbody id="table-body">

<?php
$limit = 5;
$offset = 0;

//prima devo aver aperto la connessione al db
$sql = "SELECT * FROM posts ORDER BY post_at DESC, id DESC LIMIT :offset,:limit";
$result = $conn->prepare($sql);

$result->bindParam('limit', $limit, PDO::PARAM_INT);
$result->bindParam('offset', $offset, PDO::PARAM_INT);

$result->execute();


if ($result->rowCount() > 0) {
    // se voglio “ciclare” tutti i risultati posso farlo così:
    while($row = $result->fetch(PDO::FETCH_ASSOC) ) {
?>

	<tr class="table-row">
		<td><?=$row["post_title"]?></td>
		<td><?=nl2br($row["description"])?></td>
		<td><?=$row["post_at"]?></td>
		<td>
			<a class="ajax-action-links" href='edit.php?id=<?=$row["id"]?>' title="Modifica"><img src="crud-icon/edit.png" alt="Modifica" /></a>
			<a class="ajax-action-links" href='delete.php?id=<?=$row["id"]?>' title="Elimina"><img src="crud-icon/delete.png" alt="Elimina" /></a>
		</td>
	</tr>

<?php
        //echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["cognome"]. "<br>";
    }
} else {
//chiudo PHP
?>
		<tr>
	  		<td colspan="4"> nessun record </td>
  	  	</tr>
<?php
//riapro PHP
}
$conn = null; //chiudo la connessione
?>


  </tbody>
</table>

<div style="text-align:right;margin:20px 0px;"><a href="export.php" class="button_link"><img src="crud-icon/add.png" title="Esporta CSV" style="vertical-align:bottom;" /> Esporta CSV</a></div>


</div>
</body>
</html>