<?php
    $testFile = "test2.txt";
    
    if (is_readable($testfile)) {
        $fp = fopen($testfile, "r");
        while ($line = fgets($fp)) {
            echo $line.'<br>';
        }
        fclose($fp);
    
    } else {
        echo "not readble!";
        exit;
    }
    ?>