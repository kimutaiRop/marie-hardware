<?php ini_set('display_errors', 1); ?>
<?php
   define('DB_SERVER', 'localhost'); //if production change hostname
   define('DB_USERNAME', 'root'); // root or any other super user database username that exist
   define('DB_PASSWORD', 'toor');  //place database password here
   define('DB_DATABASE', 'marie');  //place database name 
   $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>
