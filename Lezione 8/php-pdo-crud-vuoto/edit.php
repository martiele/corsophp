<?php
//Connessione al DB
require_once("db.php");

  //Codice aggiornamento record (e redirect a index.php)
  if( 
      isset($_POST) &&
      isset($_POST["form_add_check"]) && 
      ($_POST["form_add_check"]=="1") 
    ){


    //1) Recuperare le variabili dal form
    $post_title = $_POST["post_title"];
    $description = $_POST["description"];
    $post_at = $_POST["post_at"];

    //2) Effettuare una query di INSERT
    $sql = "UPDATE `posts` SET `post_title` = ?, `description` = ?, `post_at` = ? WHERE `posts`.`id` = ?;";    

    $stmt= $conn->prepare($sql);
    $stmt->execute([$post_title, $description, $post_at]);


    //3) Effettuare il redirect alla pagina index.php
    header("location:index.php");
    exit();   

  }



//Recupero l'id del record da modificare
if( isset($_GET) && isset($_GET["id"]) && ($_GET["id"]>0) ){
  $id_post = (int)$_GET["id"]; //(int) forza il cast a int

  $sql = "SELECT * FROM posts WHERE id=?";
  $result= $conn->prepare($sql);
  $result->execute([$id_post]);

  if ($result->rowCount() > 0) {
    //c'è almeno un record... o meglio c'è esattamente un record!
    $row = $result->fetch(PDO::FETCH_ASSOC);

  }else{

    //questo id non esiste nel db
    header("location:index.php");
    exit(); 
  }


}else{
  //Se non ho un parametro valido, rimando all'elenco dei post
  header("location:index.php");
  exit();  
}






    
?><html>
<head>
<title>PHP PDO CRUD - Modifica Record</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Torna alla lista</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Modifica Record</h1>
<form name="frmAdd" action="" method="POST">

  <input type="hidden" name="form_add_check" value="1" />

  <div class="demo-form-row">
	  <label>Title: </label><br>
	  <input type="text" name="post_title" class="demo-form-field" value="<?=$row["post_title"]?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>Description: </label><br>
	  <textarea name="description" class="demo-form-field" rows="5" required ><?=$row["description"]?></textarea>
  </div>
  <div class="demo-form-row">
	  <label>Date: </label><br>
	  <input type="date" name="post_at" class="demo-form-field" value="<?=$row["post_at"]?>" required />
  </div>
  <div class="demo-form-row">
	  <input name="save_record" type="submit" value="Salva" class="demo-form-submit">
  </div>
  </form>
</div>
</body>
</html>