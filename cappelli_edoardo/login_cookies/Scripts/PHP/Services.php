<?php

$toasts = array();

function alert($message, $title = null, $type = null, $autoclose = true){
    echo "<script type=\"text/javascript\">$(document).ready(function(){popup('$message', '$title', '$type', $autoclose);});</script>";

    // global $toasts;
    // var_dump($type);
    // $temp = new toast($message, $title, $type);
    // array_push($toasts, $temp);
}

Class toast{
    public $type = "";
    public $title = "";
    public $message = "";

    function __construct($message, $title, $type){

        if($type != null && $type != ""){
            $this->$type = "-" . $type;
        }

        $this->$title = $title;
        $this->$message = $message;
    }
}

?>
