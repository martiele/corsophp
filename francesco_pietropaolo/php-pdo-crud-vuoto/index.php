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
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Titolo</th>
	  <th class="table-header" width="40%">Descrizione</th>
	  <th class="table-header" width="20%">Data</th>
	  <th class="table-header" width="5%">Azioni</th>
	</tr>
  </thead>
  <tbody id="table-body">

<?php /*
  //prima devo aver aperto la connessione al db                                        TABELLA POSTS
  $sql = "SELECT * FROM posts ORDER BY post_at DESC, id DESC";
  $result = $conn->prepare($sql);
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
  $conn = null; //chiudo la connessione */
  ?>
  <?php
  //                                                                             TEST UTENTI -------------TABELLA UTENTI
  $sql = "SELECT * FROM utenti ORDER BY id DESC";
  $result = $conn->prepare($sql);
  $result->execute();

  if ($result->rowCount() > 0) {
      // se voglio “ciclare” tutti i risultati posso farlo così:
      while($row = $result->fetch(PDO::FETCH_ASSOC) ) {
  ?>

  	<tr class="table-row">
  		<td><?=$row["username"]?></td>    //PROBABILE ERRORE
  		<td><?=nl2br($row["pswd"])?></td> //NON MOSTRA DATI
  		<td><?=$row["created"]?></td>     //NELLA TABELLA
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
</div>
</body>
</html>
