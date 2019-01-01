<?php

    $folder = 'uploads';
    $files = glob($folder . '/*');
    foreach($files as $file)
    {
        if(is_file($file))
        {
            unlink($file);
        }
    }
    
?>