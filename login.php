<?php
    session_start();
    if(isset($_SESSION["users"]))
    {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.jpg" type="image/x-icon">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- External CSS -->
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Style Switcher -->
    <link rel="stylesheet" href="css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="css/style-switcher.css">


    <!-- INTERNAL CSS -->
    <style>
:root
{
    --bg-black-900: #f2f2fc;
    --bg-black-100: #fdf9ff;
    --bg-black-50: #e8dfec;
    --text-black-900: #302e4d;
    --text-black-700: #504e70;
}
/* DARK MODE */
body.dark{
    --bg-black-900: #151515;
    --bg-black-100: #222222;
    --bg-black-50: #393939;
    --text-black-900: #ffffff;
    --text-black-700: #e9e9e9;
}
body{
    color: var(--text-black-900);
    background-color: var(--bg-black-100);
}
input{
    background-color: var(--bg-black-100);
    color: var(--text-black-700);
    border-color:  var(--bg-black-900);
}
.form-control, .form-group, .form-select:disabled, .iti *{
    background-color: var(--bg-black-100);
    color: var(--text-black-700);
    transition: all 0.3s ease;
    border-color:  var(--text-black-700);
}
.form-control:focus, .form-group:focus, select:focus, option:focus, .iti *:focus{
    background-color: var(--bg-black-100);
    color: var(--text-black-700);
    transition: all 0.3s ease;
    border-color:  var(--text-black-700);
    box-shadow: 0 0 20px var(--skin-color);
}
.container {
    max-width: 450px;
    /* max-height: 60%; */
    margin: 0 auto;
    padding:50px;
    border-color: #504e70;
   
}
.container:hover{
    transition: all 0.5s ease;
    box-shadow: 0 0 33px var(--skin-color);
}
 .custom-header{
    text-align: center;
}
.form-control:focus + .form-floating label,
.form-control:not(:focus):valid + .form-floating label {
    background-color: #333333; /* Dark gray */
}


    </style>


</head>
<body>
    <div class="container d-flex justify-content-center mt-5">
        
            <div class="card-body" style="height:50%;">
                 <!-- HEADER -->
        <div class="row justify-content-center mb-1">
            <div class="">
            <header class="custom-header section-title" style="padding: 15px;">
                <h3 class="hello"><span style="letter-spacing: 1px;">Let's shape the digital future together!</span> <br><br> Log In</h3>
                </header>
            </div>
        </div>
           <!-- PHP CODE FOR LOGGING IN -->
           <?php
            if(isset($_POST["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "database.php";
                $sql = "SELECT * FROM clients_tbl WHERE Email = '$email' ";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if($user) {
                    if(password_verify($password, $user["Password"])) {
                        $_SESSION["users"] = "yes";
                        $_SESSION["client_id"] = $user["client_id"];
                        header("Location: index.php");
                        die();
                    }  else {
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                }
            }
        ?>
                <form class="mt-4" action="login.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email:" required>
                        <label for="floatingInputValue">Email:</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password:" required>
                        <label for="floatingInputValue">Password:</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Login" name="login" class="btn btn-outline-success" style=" width: 150px; height: 50px; border-radius: 25px;" >
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <a href="index.php" class="btn btn-outline-success btn-animated mb-3" style=" width: 150px; height: 50px; border-radius: 25px;">Go Back</a> <br>
                    Not Registered yet? <a href="registration.php" style="color: var(--skin-color);"> Register Here</a>
                </div>
          
    </div>



    <!-- ===== STILE SWITCHER START =====  -->
    <div class="style-switcher">
            <div class="style-switcher-toggler s-icon">
                <i class="fas fa-cog fa-spin"></i>
            </div>
            <div class="day-night s-icon">
                <i class="fas "></i>
            </div>
            <h4>Theme Colors</h4>
            <div class="colors">
                <span class="color-1" onclick="setActiveStyle('color-1')"></span>
                <span class="color-2" onclick="setActiveStyle('color-2')"></span>
                <span class="color-3" onclick="setActiveStyle('color-3')"></span>
                <span class="color-4" onclick="setActiveStyle('color-4')"></span>
                <span class="color-5" onclick="setActiveStyle('color-5')"></span>
            </div>
        </div>
     <!-- ===== STILE SWITCHER END =====  -->
    <!-- Javascript Files -->

    <!-- TYPER JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script src="js/style-switcher.js"></script>
</body>

</html>
