<?php

echo "hello world 2";

if ( $_POST['payload'] ) {
    
    echo $_POST['payload'];
    
      shell_exec( 'cd /public_html/webhook_test/Newslim && git reset --hard HEAD && git pull' );

    
  //shell_exec( 'cd /srv/www/git-repo/ && git reset --hard HEAD && git pull' );
}

?>
