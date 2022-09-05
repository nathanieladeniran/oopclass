<?php 
    include 'includes/dbase.inc.php';
    include 'includes/getUser.inc.php';
    include 'includes/viewUser.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>  
        <title></title>
    </head>
    <body>
    <?php 
        $user = new viewUser();
        $user->viewAllUser();
    ?>
    </body>
</html>