<?php
if (isset($_POST['username'])){
    $name = $_POST['username'];
    setcookie("username", $name, time() + (86400 * 30), "/");
    echo "hello, $name! Your name has been saved. ";

}else{
    if (isset($_COOKIE['username'])) {
        echo "Welcome back, " .   
    $_COOKIE['username'] . "!";
 }else{
    ?>

 <form method ="post">
    Enter your name: <input type="text " name="username">
    <input type ="submit" value="Submit"></form>
 </form>
 <?php
 }
}
?>