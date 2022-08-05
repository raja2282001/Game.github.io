<?php
//variable seting
$name=$_REQUEST['game name'];
$id=$_REQUEST['game id'];
$email=$_REQUEST['game email'];

//check input fields
if(empty($name) || empty($id) || empty($email)){
    echo "please fill all the fields";
}
else{
    mail("patelparth4656@gmail.com","lucifer wd message", &message ,"from : $name <
    $email>");
    each "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>"
}
?>