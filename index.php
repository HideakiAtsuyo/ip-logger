<?php $ports = array(8080,80,81,1080,6588,8000,3128,553,554,4480); 
foreach($ports as $port) {
    if (@fsockopen($_SERVER['REMOTE_ADDR'], $port, $errno, $errstr, 1)) {
        die(include('fuck.php'));
    } else {
        include('grab.php');
    }
}

