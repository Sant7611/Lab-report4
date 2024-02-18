<?php
if(isset($_POST['submit'])){
    if($_POST['uname'] == 'admin' && $_POST['pass'] == 'admin'){
        header('location:dashboard.php');
    }else{
        $err = 'invalid credentials';
    }
}
?>
<html>
    <body>
        <form action="">
            <input type="text" placeholder="Enter username" name="usernmae" id="uname"> <br>
            <input type="password" name="pass" id="pass" placeholder="Enter password"> <br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>