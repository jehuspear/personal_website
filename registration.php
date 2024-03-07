<?php
// CHECK IF ALREADY LOGGED IN
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
    <title>Sign Up</title>

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

    <!-- International Telephone Input FRAMEWORK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.5/build/css/intlTelInput.css">
  

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
.form-control, .form-group, .form-select:disabled, option, .iti *{
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
label{
    font-size: 15px;
}
.container {
    max-width: 600px;
    /* max-height: 60%; */
    margin: 0 auto;
    padding: 30px;
   
}
.container:hover{
    transition: all 0.5s ease;
    box-shadow: 0 0 33px var(--skin-color);
}
.form-group{
    margin-bottom:25px;
}

/* FOR PASSWORD METER */
        #pwd {
  display: block;
  width: 200px;
  border: 1px solid #ccc;
  background: #fff;
  padding: 0.6em 0;
}

#pwd:focus {
  outline: none;
}

#password-meter {
  width: 202px;
  height: 8px;
  background: #c00;
  margin-top: 1em;
}

#password-meter-progress {
  height: 100%;
  width: 0%;
  transition: width 400ms linear;
}

#password-meter-progress.low {
  background: #c00;
}

#password-meter-progress.medium {
  background: #f50;
}

#password-meter-progress.high {
  background: #080;
}
 
.password-field {
  display: inline-block;

  &:after {
    content: '';
    display: block;
    height: 3px;
    width: 0;
    margin-top: 3px;
  }

  &.level0:after {
    width: 25%;
    background: #ec1839;
  }

  &.level1:after {
    width: 50%;
    background: #fa5b0f;
  }

  &.level2:after {
    width: 75%;
    background: #fffdd0;
  }

  &.level3:after {
    width: 100%;
    background: #37b182;
  }
}

  .level0 {
    width: 25%;
    background: #ec1839;
  }

  .level1 {
    width: 50%;
    background: #fa5b0f;
  }

  .level2 {
    width: 75%;
    background: #fffdd0;
  }

  .level3{
    width: 100%;
    background: #37b182;
 }
 .form-floating{
    z-index: 0;
 }
.custom-header{
    text-align: center;
}
 /* Custom CSS for button animation effects */
 .btn-animated {
            transition: all 0.3s ease-in-out;
        }
        .btn-animated:hover {
            transform: scale(1.1);
        }
        .btn-pulse {
            animation: pulse 1s infinite alternate;
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }
 
    </style>
</head>
<body>
 

<div class="container">
       <!-- HEADER -->
        <div class="row justify-content-center mb-1">
            <div class="">
                <header class="custom-header section-title">
                <h3 class="hello"><span style="letter-spacing: 1px;">Let's shape the digital future together!</span> <br>Sign Up Now!</h3>
                </header>
            </div>
        </div>
<?php

    if(isset($_POST["submit"])){
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $Contact_Number = $_POST["ContactNo"];
        $Country = $_POST["country"];
        $Address = $_POST["Address"];
        $Province = $_POST["Province"];
        $City = $_POST["City"];
        $Zip = $_POST["Zip"];
        $Email = $_POST["Email"];
        $password = $_POST["password"];
        $RepeatPassword = $_POST["repeat_password"];
        $errors = array();

        // echo "$FirstName <br> $LastName <br> $Contact_Number <br> $Country <br> $Address <br> $Province <br> $City <br> $Zip <br> $Email <br> $password";
        

            
	    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
 
        // // validate if all fields are empty
        // if (empty($FirstName) OR empty($LastName) OR empty($Contact_Number) OR empty($Country) OR empty($Province) OR empty($City) OR empty($Zip)  OR empty($Email) OR empty($password) OR empty($RepeatPassword)) {
        //     array_push($errors,"All fields are required");
        // }

        // validate if the email is not validated
        if (!filter_var($Email,FILTER_VALIDATE_EMAIL)){
            array_push($errors,"Email is not valid");
        }

        // password should not be less than 8
        if (strlen($password)<8) {
            array_push($errors,"Password must be atleast 8 characters long");
        }
         // check if password is the same
         if($password!= $RepeatPassword){
            array_push($errors,"Password does not match");          
         }
        // CHECK IF EMAIL IS ALREADY REGISTERED
        require_once "database.php";
        $sql = "SELECT * FROM clients_tbl WHERE Email = '$Email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0){
            array_push($errors, "Email is already Registered!");
        }

        if (count($errors)> 0){
                foreach($errors as $error) {
                    echo"<div class='alert alert-danger' id='fail'>$error</div>";
                }
             } else {
                require_once "database.php";
                $sql ="INSERT INTO clients_tbl (last_name, first_name, Address, Province, City_Municipality, Zip, Country, Contact_no, Email, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);
            if ($preparestmt) {
                mysqli_stmt_bind_param($stmt, "ssssssssss", $LastName, $FirstName, $Address, $Province, $City, $Zip, $Country, $Contact_Number, $Email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class = 'alert alert-success' id='registered'> You are Registered Successfully! </div>";
            } else {
                die("Something went wrong!");
            }
             }
    
}
?>

<form id="myForm" action="registration.php" method="post">

    <div class="row mb-3">
        <div class="col">
            <!-- FIRST NAME -->
            <div class="form-floating">
                <input type="text" class="form-control" name="FirstName" placeholder="First Name: " required>
                <label for="floatingInputValue">First Name:</label>
            </div>
        </div>

        <div class="col">
            <!-- LAST NAME -->
            <div class="form-floating">
                <input type="text" class="form-control" name="LastName" placeholder="Last Name: " required>
                <label for="floatingInputValue">Last Name:</label>
            </div>
        </div>
    </div>
          
    <div class="row mb-1">
        <div class="col">
            <label for="">Contact Number:</label>
            <div class="form-group">
                    <!-- CONTACT NUMBER -->
                    <input type="tel" id="phone" class="form-control-lg" name="ContactNo" required="" >
            </div>
        </div>   

        <div class="col">
                  <!-- COUNTRY -->
                <div class="form-floating">
                <!-- <label for="">Country:</label> -->
                    <select id="address-country"  class="form-select" id="floatingSelect" style="margin-top:20px;" name="selectedOption" disabled></select>
                    <input type="hidden" id="selectedOptionText" name="country">
                    <label for="floatingInputValue">Country:</label>
                </div>
        </div>
    </div>      
         
        <!-- ADDRESS -->
        <div class="row">
            <div class="col">
                <div class="form-floating mt-2" style="width: 100%; margin-bottom: 10px;">
                    <input type="text" class="form-control" placeholder="House name/number" name="Address" style="width: 100%;">
                    <label for="floatingInputValue">Address (House Number/Bldg. Name, Street):</label>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-sm-5">
                <div class="form-floating" style="width: 100%;">
                    <input type="text" class="form-control" name="Province" placeholder="State/Region:">
                    <label for="floatingInputValue">State/Province:</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-floating" style="width: 100%;">
                    <input type="text" class="form-control" name="City" placeholder="City:">
                    <label for="floatingInputValue">City:</label>
                </div>
            </div>  
            <div class="col-sm-3">
                <div class="form-floating" style="width: 100%;">
                    <input type="text" class="form-control" name="Zip" placeholder="Zip code">
                    <label for="floatingInputValue">Zip:</label>
                </div>    
            </div>
        </div>

 <!-- INPUT EMAIL -->
 <div class="row">
    <div class="col">
        <div class="form-floating">
            <input type="text" class="form-control" name="Email" placeholder="Email: " required>
            <label for="floatingInputValue">Email:</label>
        </div>
    </div>
 </div>

     <!-- INPUT PASSWORD -->
<div class="row mb-5">
        <div class="col mt-1">
            <div class="form-floating">
                    <div style="background-color: var(--bg-black-100); position: relative;">
                        <div class="pmeter" style="width: 100%; height: 20px; font-size: 12px; font-weight: bold; color: #302e4d; padding: 0 0 10px 10px; text-align:center;" ></div>   
                    </div>

                    <div class="password-field form-floating" style="width: 100%;">
                        <input type="password" class="form-control" name="password"  required=""  placeholder="Password"/>
                        <label for="floatingInputValue">Password:</label>
                    </div>
            </div>
        </div>

        <div class="col mt-4">
            <div class="form-floating">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password: ">
                <label for="floatingInputValue">Re-enter Password:</label>
            </div>
        </div>
    </div>

            


        <div class="col text-center">
            <div class="mb-4">
                <input type="submit" id="register" class="btn btn-outline-success btn-animated" style=" width: 270px; height: 50px; border-radius: 25px;" name="submit" value="Submit">
            </div>

            <div>
            <a href="index.php" class="btn btn-outline-success btn-animated mb-3" style=" width: 270px; height: 50px; border-radius: 25px;">Go Back</a>
                <p> Already Have an Account? <a href="login.php" style="color: var(--skin-color);">Login Here</a></p>
            </div>
        </div>


    </form>
</div> 
<!-- END OF CONTAINER -->

<!-- Getting The selected option Country text to PHP using a hidden input field within your HTML form.  -->
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
    var selectElement = document.getElementById('address-country');
    var selectedOptionText = selectElement.options[selectElement.selectedIndex].text;

    document.getElementById('selectedOptionText').value = selectedOptionText;
});

</script>

 <!-- PHONE NUMBER/CONTACT NUMBER AND COUNTRY SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.5/build/js/intlTelInput.min.js"></script>
   
<script>
        // get the country data from the plugin
    const countryData = window.intlTelInputGlobals.getCountryData();
    const input = document.querySelector("#phone");
    const addressDropdown = document.querySelector("#address-country");

    // here, the index maps to the error code returned from getValidationError - see readme
    const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // init plugin
    const iti = window.intlTelInput(input, {
    initialCountry: "us",
    showSelectedDialCode: true,
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.5/build/js/utils.js" // just for formatting/placeholders etc
    });

// COUNTRY
    // populate the country dropdown
    for (let i = 0; i < countryData.length; i++) {
    const country = countryData[i];
    const optionNode = document.createElement("option");
    optionNode.value = country.iso2;
    const textNode = document.createTextNode(country.name);
    optionNode.appendChild(textNode);
    addressDropdown.appendChild(optionNode);
    }
    // set it's initial value
    addressDropdown.value = iti.getSelectedCountryData().iso2;

    // listen to the telephone input for changes
    input.addEventListener('countrychange', () => {
    addressDropdown.value = iti.getSelectedCountryData().iso2;
    });

    // listen to the address dropdown for changes
    addressDropdown.addEventListener('change', () => {
    iti.setCountry(this.value);
    });


</script>

<!-- Password Meter Script -->
<script>
    $(document).ready(function() {
    $('.password-field input').keyup( function() {
        var strength = checkPasswordStrength($(this).val());
        var $outputTarget = $('.pmeter');
        
        $outputTarget.removeClass(function (index, css) {
            return (css.match (/\level\S+/g) || []).join(' ');
        });
        
        $outputTarget.addClass('level' + strength);

    var pmessage ;
    if (strength === 0) { pmessage="Weak";}
        else if(strength === 1){pmessage="Medium";}
        else if(strength === 2){pmessage="Strong";}
        else if(strength === 3){pmessage="Best";}
    $outputTarget.text(pmessage);

    });
    });

    function checkPasswordStrength(password) {
    var strength = 0;
    
    // If password is 6 characters or longer
    if (password.length >= 6) {
        strength += 1;
    }

    // If password contains both lower and uppercase characters, increase strength value.
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
        strength += 1;
    }

    // If it has numbers and characters, increase strength value.
    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
        strength += 1;
    }

    

    return strength;
    }
</script>

<!-- SWEET ALERT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">

$(function(){
    if ($('#registered').length > 0) {
        Swal.fire({
            title: "Success!",
            text: "You are Registered Successfully!",
            html: `
                <h6>You are Registered Successfully!</h6><br>
                <a class="" href="login.php" style='width: 200px; color: var(--skin-color);'>Log In Now</a>
            `,
            icon: "success"
        });
    }

    if ($('#fail').length > 0) {
        Swal.fire({
            title: "Registration Failed!",
            text: "Please Try Again!",
            icon: "error"
        });
    }
});
    
</script>

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