<?php
  //Codice inserimento record (e redirect a index.php)
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
    require_once("db.php");
    $sql = "INSERT INTO `posts` (`id`, `post_title`, `description`, `post_at`) VALUES (NULL, ?, ?, ?);";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$post_title, $description, $post_at]);


    //3) Effettuare il redirect alla pagina index.php
    header("location:index.php");
    exit();   

  }
    
?><html>
<head>
<title>PHP PDO CRUD - Aggiungi Record</title>
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
<h1 class="demo-form-heading">Aggiungi nuovo Record</h1>
<form name="frmAdd" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

  <input type="hidden" name="form_add_check" value="1" />

  <div class="demo-form-row">
	  <label>Title: </label><br>
	  <input type="text" name="post_title" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Description: </label><br>
	  <textarea name="description" class="demo-form-field" rows="5" required ></textarea>
  </div>
  <div class="demo-form-row">
	  <label>Date: </label><br>
	  <input type="date" name="post_at" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <input name="add_record" type="submit" value="Aggiungi" class="demo-form-submit">
  </div>
  </form>
</div> 
</body>
</html>