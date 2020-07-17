<? php 
    
 include_once 'dbh.ink.php';  

 $email = $_POST['email']

 $sql = "INSERT INTO users (email)
VALUES ('$email');";
mysqli_query($conn, $sql);

header("location: index.php?subcription = success")
?>