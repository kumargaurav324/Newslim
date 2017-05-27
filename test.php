<?php
    
    
    $output = shell_exec( 'cd /home/getsport/public_html/webhook_test/Newslim ; git pull origin master ;'  );
    echo "<pre>$output</pre>";
    
    ?>
