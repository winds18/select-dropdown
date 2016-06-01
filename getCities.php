<?php
    $state = $_POST['state'];
    $path = './city/'.$state;
    echo file_get_contents($path);
?>
