<?php

function alert($message, $title = null, $type = null, $autoclose = true){
    echo "<script type=\"text/javascript\">$(document).ready(function(){popup('$message', '$title', '$type', $autoclose);});</script>";
}

?>
