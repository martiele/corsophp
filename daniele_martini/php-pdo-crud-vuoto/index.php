<?php
	//Codice per creare una lista di record

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

	  <tr class="table-row">
		<td>aaa</td>
		<td>bbb</td>
		<td>ccc</td>
		<td><a class="ajax-action-links" href='edit.php?id=' title="Modifica"><img src="crud-icon/edit.png" alt="Modifica" /></a> <a class="ajax-action-links" href='delete.php?id=' title="Elimina"><img src="crud-icon/delete.png" alt="Elimina" /></a></td>
	  </tr>

  </tbody>
</table>
</div>
</body>
</html>