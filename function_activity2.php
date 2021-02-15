<?php
function displayData($fullname,$age,$username,$password,$email){
    echo "USER DATA:";
        echo "<br>";
    echo "Your name is: ".$fullname;
    echo "<br>";
    echo "Your age is: ".$age;
    echo "<br>";
    echo "Your username is: ".$username;
    echo "<br>";
    echo "Your password is: ".$password;
    echo "<br>";
    echo "Your email is: ".$email;

}

function show_form(){
    echo "<form method = 'post'>";
        echo "additional details: ";
            echo "<br>";
            echo "<input type = 'text' name= 'more_details'>";
            echo "<br>";
            echo "<button type = 'submit' name ='display_additional_info'>Additional Info</submit>";

    echo "</form>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter fullname: <br>
            <input type="text" name="fullname" id="">
            <br>
        Enter Age: <br>
            <input type="text" name="age" id="">
            <br>
        Enter Username: <br>
            <input type="text" name="username" id="">
            <br>
        Enter Password: <br>
        <input type="password" name="password" id="">
            <br>
        Enter Email: <br>
        <input type="email" name="email" id="">
        <br>
        <button type="submit" name="submit">Submit</button>
        <br>
        <button type="submit" name="add_info">Add Info</button>
    
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $fname = $_POST['fullname'];
            $age = $_POST['age'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            displayData($fname,$age,$username,$password,$email);
        }
        if(isset($_POST['add_info'])){
            show_form();
        }
        if(isset($_POST['display_additional_info'])){
            $details = $_POST['more_details'];

            echo $details;
        }
    
    
    ?>
</body>
</html>