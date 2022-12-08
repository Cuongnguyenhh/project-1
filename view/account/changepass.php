<?php
require './admin_remake/config/database.php';
$conn = condb();
$id = $_SESSION['id'];
echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mainDiv {
            display: flex;
            min-height: 100%;
            align-items: center;
            justify-content: center;
            background-color: #f9f9f9;
            font-family: 'Open Sans', sans-serif;
        }

        .cardStyle {
            width: 500px;
            border-color: white;
            background: #fff;
            padding: 36px 0;
            border-radius: 4px;
            margin: 30px 0;
            box-shadow: 0px 0 2px 0 rgba(0, 0, 0, 0.25);
        }

        #signupLogo {
            max-height: 100px;
            margin: auto;
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        .formTitle {
            font-weight: 600;
            margin-top: 20px;
            color: #2F2D3B;
            text-align: center;
        }

        .inputLabel {
            font-size: 12px;
            color: #555;
            margin-bottom: 6px;
            margin-top: 24px;
        }

        .inputDiv {
            width: 70%;
            display: flex;
            flex-direction: column;
            margin: auto;
        }

        input {
            height: 40px;
            font-size: 16px;
            border-radius: 4px;
            border: none;
            border: solid 1px #ccc;
            padding: 0 11px;
        }

        input:disabled {
            cursor: not-allowed;
            border: solid 1px #eee;
        }

        .buttonWrapper {
            margin-top: 40px;
        }

        .submitButton {
            width: 70%;
            height: 40px;
            margin: auto;
            display: block;
            color: #fff;
            background-color: #065492;
            border-color: #065492;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 0 rgba(0, 0, 0, 0.035);
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        .submitButton:disabled,
        button[disabled] {
            border: 1px solid #cccccc;
            background-color: #cccccc;
            color: #666666;
        }

        #loader {
            position: absolute;
            z-index: 1;
            margin: -2px 0 0 10px;
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #666666;
            width: 14px;
            height: 14px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="mainDiv">
        <div class="cardStyle">
            <form action="" method="post" name="signupForm" id="signupForm">

                <img src="" id="signupLogo" />

                <h2 class="formTitle">
                    Change your password
                </h2>
                <div class="inputDiv">
                    <label class="inputLabel" for="password">Email</label>
                    <input type="text" readonly id="password" name="password" value=<?=$_SESSION['email']?> required>
                </div>
                <div class="inputDiv">
                    <label class="inputLabel" for="password">New Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="inputDiv">
                    <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword">
                </div>

                <div class="buttonWrapper">
                    <button type="submit" name="changpass" id="submitButton" class="submitButton pure-button pure-button-primary">
                        <span>Xác nhận</span>

                    </button>
                </div>

            </form>
        </div>
    </div>
</body>
<script>
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirmPassword");

    document.getElementById('signupLogo').src = "https://cdn.shopify.com/s/files/1/1573/5553/files/logo_dark.svg?v=1601695205";
    enableSubmitButton();

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
            return false;
        } else {
            confirm_password.setCustomValidity('');
            return true;
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

    function enableSubmitButton() {
        document.getElementById('submitButton').disabled = false;
        document.getElementById('loader').style.display = 'none';
    }

    function disableSubmitButton() {
        document.getElementById('submitButton').disabled = true;
        document.getElementById('loader').style.display = 'unset';
    }

    function validateSignupForm() {
        var form = document.getElementById('signupForm');

        for (var i = 0; i < form.elements.length; i++) {
            if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {
                console.log('There are some required fields!');
                return false;
            }
        }

        if (!validatePassword()) {
            return false;
        }

        onSignup();
    }

    function onSignup() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {

            disableSubmitButton();

            if (this.readyState == 4 && this.status == 200) {
                enableSubmitButton();
            } else {
                console.log('AJAX call failed!');
                setTimeout(function() {
                    enableSubmitButton();
                }, 1000);
            }

        };

        xhttp.open("GET", "ajax_info.txt", true);
        xhttp.send();
    }
</script>
<?php
    if (isset($_POST['changpass']) && $_POST['confirmPassword'] == $_POST['password']) {
        $changepass = md5($_POST['password']);
        try {
    
            // $sql = "UPDATE cms_users SET password = $changepass WHERE email = $email";
            $sql = "UPDATE cms_users SET password='$changepass' WHERE id= $id ";
          
            // Prepare statement
            $stmt = $conn->prepare($sql);
          
            // execute the query
            $stmt->execute();
          
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully";
            
            // header('location: index.php?action=login');
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        
          }
    }
?>
</html>