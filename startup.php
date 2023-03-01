 <?php 
    session_start();
    //store session data
    $_SESSION["playername"] = $_POST["playername"];
    //location of the next page
    header("Location: mainpage.php");

 ?>