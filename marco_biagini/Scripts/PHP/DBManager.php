<?php

    require_once("Scripts/PHP/Services.php");
    //Si richiama con un require_once("DBManager.php")
    
    $db_data = new connection_data();
    $db_data->set_altervista();

    $conn = start_connection($db_data);

    function start_connection($conn_data){
        try {
            var_dump($conn_data);
            $sn = "localhost";
            $un = "marcobiagini";
            $psw = "";
            $dn = "my_marcobiagini";

            $_conn = new PDO("mysql:host=$sn;dbname=$dn", $un, $psw);
            // set the PDO error mode to exception
            $_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            alert("Connessione col Database riuscita", "Connessione riuscita");
            // echo "Connected successfully";
            return $_conn;

        }
        catch(PDOException $e) {
            alert($e->getMessage(), "Connessione fallita", "danger");
            // echo "Connection failed: " . $e->getMessage();
        }
    }

    function close_connection($connection){
        $connection = null;
    }

    class connection_data{
        public $servername = "localhost";
        public $username = "marcobiagini";
        public $password = "";
        public $dbname = "my_marcobiagini";
        
        function set_altervista(){
            $servername = "localhost";
            $username = "marcobiagini";
            $password = "";
            $dbname = "my_marcobiagini";
        }
    }

?>