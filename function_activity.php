<?php 
// i will write functions here

function displayInfo($user_fname,$user_age,$user_uname,$user_pword,$user_email){
    echo "Your name is: ".$user_fname;
    echo "<br>";
    echo "Your Age is: ".$user_age;
    echo "<br>";
    echo "Your Username is: ".$user_uname;
    echo "<br>";
    echo "Your password is: ".$user_pword;
    echo "<br>";
    echo "Your Email is: ".$user_email;

}
function basicInformation($client_fname,$client_age,$client_email){
    echo "Your name is: ".$client_fname;
    echo "<br>";
    echo "Your age is: ".$client_age;
    echo "<br>";
    echo "Your email is: ".$client_email;


}

function generate_username_password($username,$password){
    echo "Your Username is: ".$username;
    echo "<br>";
    echo "Your Password is: ".$password;

    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter FIrstname: <br>
            <input type="text" name="fname" id="">
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
        <button type="submit" name="basic_information">Basic Information</button>
        <br>
        <button type="submit" name="generate_username_password">Generate username and password</button>

        <?php 
            if(isset($_POST['submit'])){
                $fname = $_POST['fname'];
                $age = $_POST['age'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                displayInfo($fname,$age,$username,$password,$email);

            }
            if(isset($_POST['basic_information'])){
                $fname = $_POST['fname'];
                $age = $_POST['age'];
                $email = $_POST['email'];

                 basicInformation($fname,$age,$email);


            }
            if(isset($_POST['generate_username_password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];  

                generate_username_password($username,$password);
            }
        
        
        ?>
    
    
    </form>
</body>
</html>