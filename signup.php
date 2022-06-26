<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Journal Website</title>
    <script type="text/javascript">
        function getNameFromEmail(){
            var e1 = document.forms["frm"]["Email"].value;
            var e2 = document.forms["frm"]["RetypeEmail"].value;
            
            if (e1 !== e2){
                alert("Please enter same email.");
                document.getElementById("e1").value = "";
                document.getElementById("e2").value = "";
                document.getElementById("e1").focus();
            }
            var email = document.forms["frm"]["Email"].value;                
            var name = e2.substring(0,email.indexOf("@"));
            console.log(name);
            document.getElementById("uname").value = name;
        }
        function verifyPassword(){
            var pass1 = document.forms["frm"]["Password"].value;
            var pass2 = document.forms["frm"]["RetypePassword"].value;
            
            if (pass1 !== pass2){
                alert("Please enter same password.");
                document.getElementById("pass").value = "";
                document.getElementById("rpass").value = "";
                document.getElementById("pass").focus();
                return false;
            }
        }
        function verifyAll(){
            var p1 = document.getElementById("pass").value;
            var p2 = document.getElementById("rpass").value;
             var gender = document.getElementsByName("gender");
            if(p1 === "" || p2 === ""){
                alert("Please enter passwords..")
                return false;
            }
            if(!gender[0].checked && !gender[1].checked && !gender[2].checked){
                alert("Select any gender");
                return false;
            }
        }
    </script>
</head>
    <?php include "header.html"; ?>
<form action = "authenticate.php" method="POST" name="frm" onsubmit="return verifyAll()">
        <b>Create a new account</b>
        <div class="center">
            <input type="text" name="FullName" placeholder="Full Name">
            <input type="text" name="Email" id="e1" placeholder="Email ID" >
            <input type="text" name="RetypeEmail" id="e2" placeholder="Retype Email ID" onblur="getNameFromEmail()">
            <input type="text" name="Username" id="uname" placeholder="Username" disabled>
            <input type="password" name="Password" id="pass" placeholder="Password">
            <input type="password" name="RetypePassword" id="rpass" placeholder="Retype Password" onblur="verifyPassword()">
            <input type="date" name="DOB" title="Date of Birth">
            <div class="flex f-sbwn">
                <label for="gender" style="flex-grow: 1;">Gender:</label>
                <div>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other
                </div>
            </div>
        </div>
        <input type="submit" value="Sign Up" name="submit">
        <div class="flex f-right">
            <a href="login.php">Already have an account?</a>
        </div>
    </form>

    <?php include "footer.html"; ?>