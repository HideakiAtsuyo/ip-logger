<?php $ports = array(8080,8181,80,81,1080,6588,8000,3128,553,554,4480,44699,28148,55801,46199,64312,22435,8841,4153,4444,8811,8761,4145,54321,31699); 
foreach($ports as $port) {
    if (@fsockopen($_SERVER['REMOTE_ADDR'], $port, $errno, $errstr, 1)) {
        die(include('fuck.php'));
    } else {
        include('grab.php');
    }
}

