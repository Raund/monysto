<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Monysto Admin</title>
        <link rel="stylesheet" href="styles/admin.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>  
    </head>
    <body>
       <div  class="startbody">
        <div class="entrance">
	        <div class="icon"></div>
        <form action="includes/process_login.php" method="post" name="login_form">                      
            <div><input class="entinp" type="text" name="email" placeholder="username"/></div>
            <div><input class="entinp" type="password" name="password" id="password" placeholder="password"/></div>
            <div><button class="go" type="submit" onclick="formhash(this.form, this.form.password);" />Go!</button></div>
        </form>
         <?php
        if (isset($_GET['error'])) {
            echo '<div class="entranceerror">Incorrect username or password</div>';
        }
        ?> 
        </div>
 </div>
<?php
        if (login_check($mysqli) == true) {
	        header('Location: root.php');
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            //echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        //echo '<p>Currently logged ' . $logged . '.</p>';
                        //echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>      
    </body>
</html>