<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script>
    function Password() {
      var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+~`|}{[]:;?><,./-=";
    
      var length = 7;
      var password = "abc@123";
      var hasCharacter = /[A-Za-z]/.test(password);
      var hasNumber = /\d/.test(password);
      
      if (!hasCharacter || !hasNumber) {
        alert("toas");
        return;
      }
      document.getElementById("password").innerHTML = password;
    }
    function Email() {
      var email = document.getElementById("email").value;
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      
      if (!emailRegex.test(email)) {
        alert("toas");
        return false;
      }
     
    }
  </script>
    <title>Landing Page</title>
</head>
<body>
    <!--Columns-->
    <div class="wrapper">
        <div class=" main container">
            <div class="row">
                <div class="col-md-6 side-image">
                    <div class="content">
                        <p> Login and Get discount on your favourite items</p>
                    </div>
                </div>
    <!--Log In Form-->
                <div class="col-md-6 right">
                    <div class="form"> 
                    <form action="login.php" method="post">
                <?php
                 $emailErr = $passwordErr = "";
                 $email = $password = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["email"])) {
                $emailErr = "Email is required";
                } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $emailErr = "Invalid email format";
                        }
                    }

                    if (empty($_POST["password"])) {
                        $password = "";
                    } else {
                        $password = test_input($_POST["password"]);
                        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                        $passwordErr = "required";
                        }
                    ?>
                        <h1>Login</h1>
                        <div class="input-data">
                            <input type="text" class="input" id="email" required>
                            <label for="email">EMAIL</label>
                            <Span class="error">*<?php echo $emailErr;?></span>
                        </div>
                        <div class="input-data">
                            <input type="password" class="input" id="password" required>
                            <label for="password">PASSWORD</label>
                            <Span class="error">*<?php echo $passwordErr;?></span>
                        </div>
                        <div class="input-data">
                            <input type="submit" class="submit" value="Sign In">
                            <button onchange="Password()"> Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>