<?php

session_start();

if(isset($_POST) && !empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo '$username=' . $username . '<br/>';
    echo '$password=' . $password . '<br/>';

    //Query the DB, and check if we have
    //we will create a demo
    if($username == 'simon' && $password == '0077'){

        $_SESSION['logged_in']=true;
        $_SESSION['name']='Simon Kim';
    } else {


        $_SESSION['logged_in']=false;
//        echo 'Invalid username or password';
    }


}


?>

<?php
if (isset ($_SESSION) && isset($_SESSION['logged_in']) && $_SESSION['logged_in']== true) {
    echo "Welcome Back ".$_SESSION['name'];
    echo '<input type="button" value=logout" />';
}

?>




<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
    Username: <input type="text" name="username" />
    <br/>
    Password: <input type="text" name="password" />
    <br/>
    <input type="submit" value="Login"/>
</form>




