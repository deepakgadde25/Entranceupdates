<?php
$link = mysqli_connect("localhost", "root", "", "acc");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
// Attempt insert query execution'$
$sql = "INSERT INTO `user`( `firstname`, `lastname`, `email` ) VALUES ('$firstname','$lastname','$email')";
if(mysqli_query($link, $sql)){
    
    echo "<script>alert('Subscribed Sucessfully')</script>";
    echo "<script>window.location='index-2.html'</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
 
// Close connection
mysqli_close($link);
?>