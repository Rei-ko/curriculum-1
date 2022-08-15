<?php
    $testFile = "test.txt";
    $contents = "Hello!!";
    
    if (is_writable($testFile)) {
        $fp = fopen($testFile, "a");
        fwrite($fp, $contents);
        fclose($fp);
        echo "finish writing!!";
    } else {
        echo "not writable!";
        exit;
    }
    ?>