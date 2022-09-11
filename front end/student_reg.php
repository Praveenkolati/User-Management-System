<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            font-family: "Alatsi";
            padding: 3px;
            width: 5px;
            background-color: blanchedalmond;
        }

        .split {
            height: 100%;
            width: 50%;
            position: fixed;
            z-index: 1;
            top: 0;
            overflow-x: hidden;
        }

        .left {
            left: 0;
        }

        .right {
            right: 0;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        input {
            width: 20%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: medium;
            margin-top: 6px;
        }

        button {
            width: 15%;
            border-radius: 5px;
            padding: 5px;
        }


        #message {
            display: none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        .valid {
            color: green;
        }

        .invalid {
            color: red;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div>
            <div class="split left">
                <h2>Candiate Name:</h2>
                <label>Full name:</label>
                <input class="q" id="a" type="text" name="name" placeholder="Full name">
                <label> Roll no:</label>
                <input class="q" id="b" type="text" name="rollno" placeholder="Roll no"><br><br>
                <label>Date of birth:</label>
                <input class="q" id="c" type="date" name="dob" id="dob" name="dob">

                <h2>Fathers name:</h2>
                <label>Full name:</label>
                <input class="q" id="d" type="text" name="fathername" placeholder="Full name">

                <h2>Mothers name:</h2>
                <label>Full name:</label>
                <input class="q" id="e" type="text" name="mothername" placeholder="Full name"><br><br>

                <label>Select Gender:</label>
                <input id="t1" type="checkbox" name="gender" value="Male">Male</input>
                <input id="t2" type="checkbox" name="gender" value="Female">
                Female</input>
                <input id="t3" type="checkbox" name="gender" value="Other">
                Other</input><br><br>
                <label> Email Address: </label>
                <input id="em" type="email" name="email" placeholder="Email"> </input><br> <br>
                <label> mobile no: </label>
                <input id="tn" type="number" name="mobile" placeholder="mobile number">
                <br> <br>
                <lable>Address:</lable>
                <input class="q" id="f" type="text" name="address"  placeholder="Address">
            </div>
            <div class="split right">
                <lable>Languages Known: </lable>
                <input id="c1" type="text" name="language" placeholder="Language">
                <br><br>
                <label>Fee:</label>
                <input id="y1" type="checkbox" name="fee" value="Management">Management</input>
                <input id="y2" type="checkbox" name="fee" value="fee Reimbursement">
                Reimbursement</input>
                <input id="y3" type="checkbox" name="fee" value="Other">
                Other</input><br><br>
                <label>Department: </label>
                <input type="text" name="department" placeholder="Department">
                <label>Year: </label>
                <input type="text" name="year" placeholder="Year"><br><br>
                <label>Account no:</label>
                <input type="number" name="accno" placeholder="Account no">
                <label>IFSC code:</label>
                <input type="text" name="ifsc_code" placeholder="IFSC code"><br><br>
                <label>Transportation:</label>
                <input id="z1" type="checkbox" name="transportation" value="BUS">BUS</input>
                <input id="z2" type="checkbox" name="transportation" value="HOSTEL">
                HOSTEL</input>
                <input id="z3" type="checkbox" name="transportation" value="Other">
                Other</input><br><br>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                <br><br>
                <div class="container">
                    <label for="pass"> Create Your Password:</label>
                    <input type="password" id="psw" name="psw" placeholder="Password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required </div><br>
                    <button onclick="my()" name="add" class="btn btn-danger">Submit</button>
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>

                    <script>
                        function my() {
                            var val = document.getElementById("a").value
                            localStorage.setItem("name", val);
                            var val = document.getElementById("b").value
                            localStorage.setItem("rn", val);
                            var val = document.getElementById("c").value
                            localStorage.setItem("dob", val);
                            var val = document.getElementById("d").value
                            localStorage.setItem("fn", val);
                            var val = document.getElementById("e").value
                            localStorage.setItem("mn", val);
                            var val = document.getElementById("f").value
                            localStorage.setItem("add", val);
                            var b1 = document.getElementById("t1");
                            var b2 = document.getElementById("t2");
                            var b3 = document.getElementById("t3");
                            var g;
                            if (b1.checked == true) {
                                g = b1.value;
                            }
                            else if (b2.checked == true) {

                                g = b2.value;
                            }
                            else {
                                g = b3.value;
                            }
                            localStorage.setItem("g", g);
                            localStorage.setItem("m",
                                document.getElementById("em").value);
                            localStorage.setItem("ten", document.getElementById("tn").value);
                            var places = [];
                            localStorage.setItem("lk", document.getElementById("c1").value)
                            localStorage.setItem("dep", document.getElementById("de").value)
                            localStorage.setItem("ye", document.getElementById("y").value)
                            localStorage.setItem("acc", document.getElementById("ac").value)
                            localStorage.setItem("code", document.getElementById("ic").value)
                            var x1 = document.getElementById("z1");
                            var x2 = document.getElementById("z2");
                            var x3 = document.getElementById("z3");
                            var t;
                            if (x1.checked == true) {
                                t = x1.value;
                            }
                            else if (x2.checked == true) {

                                t = x2.value;
                            }
                            else {
                                t = x3.value;
                            }
                            localStorage.setItem("t", t);
                            var a1 = document.getElementById("y1");
                            var a2 = document.getElementById("y2");
                            var a3 = document.getElementById("y3");
                            var f;
                            if (a1.checked == true) {
                                f = a1.value;
                            }
                            else if (a2.checked == true) {

                                f = a2.value;
                            }
                            else {
                                f = a3.value;
                            }
                            localStorage.setItem("f", f);
                            var g1 = document.getElementById("v1");
                            var g2 = document.getElementById("v2");
                            var fee;
                            if (g1.checked == true) {
                                fee = g1.value;
                            }
                            else {
                                fee = g2.value;
                            }
                            localStorage.setItem("fee", fee);
                        }



                        //password
                        var myInput = document.getElementById("psw");
                        var letter = document.getElementById("letter");
                        var capital = document.getElementById("capital");
                        var number = document.getElementById("number");
                        var length = document.getElementById("length");

                        // When the user clicks on the password field, show the message box
                        myInput.onfocus = function () {
                            document.getElementById("message").style.display = "block";
                        }

                        // When the user clicks outside of the password field, hide the message box
                        myInput.onblur = function () {
                            document.getElementById("message").style.display = "none";
                        }

                        // When the user starts to type something inside the password field
                        myInput.onkeyup = function () {

                            var lowerCaseLetters = /[a-z]/g;
                            if (myInput.value.match(lowerCaseLetters)) {
                                letter.classList.remove("invalid");
                                letter.classList.add("valid");
                            } else {
                                letter.classList.remove("valid");
                                letter.classList.add("invalid");
                            }

                            // Validate capital letters
                            var upperCaseLetters = /[A-Z]/g;
                            if (myInput.value.match(upperCaseLetters)) {
                                capital.classList.remove("invalid");
                                capital.classList.add("valid");
                            } else {
                                capital.classList.remove("valid");
                                capital.classList.add("invalid");
                            }

                            // Validate numbers
                            var numbers = /[0-9]/g;
                            if (myInput.value.match(numbers)) {
                                number.classList.remove("invalid");
                                number.classList.add("valid");
                            } else {
                                number.classList.remove("valid");
                                number.classList.add("invalid");
                            }

                            // Validate length
                            if (myInput.value.length >= 8) {
                                length.classList.remove("invalid");
                                length.classList.add("valid");
                            } else {
                                length.classList.remove("valid");
                                length.classList.add("invalid");
                            }
                        }
                    </script>
                </div>
            </div>
    </form>
</body>

</html>



<?php
//For database conn
$msg="";
$con=mysqli_connect("localhost","root","","user");
if(isset($_POST['add'])){
    
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $rollno=mysqli_real_escape_string($con,$_POST['rollno']);
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
    $fathername=mysqli_real_escape_string($con,$_POST['fathername']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['psw']);
    $mothername=mysqli_real_escape_string($con,$_POST['mothername']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $language=mysqli_real_escape_string($con,$_POST['language']);
    $fee=mysqli_real_escape_string($con,$_POST['fee']);
    $department=mysqli_real_escape_string($con,$_POST['department']);
    $year=mysqli_real_escape_string($con,$_POST['year']);
    $ifsc_code=mysqli_real_escape_string($con,$_POST['ifsc_code']);
    $transportation=mysqli_real_escape_string($con,$_POST['transportation']);
    $accno=mysqli_real_escape_string($con,$_POST['accno']);


	//query to insert records intodatabase
	$insert=mysqli_query($con,"INSERT INTO `student`(name,rollno,dob,fathername,username,password,mothername,gender,email,mobile,address,language,fee,department,year,accno,ifsc_code,transportation) VALUES 
	('$name','$rollno','$dob','$fathername','$username','$password','$mothername','$gender','$email','$mobile','$address','$language','$fee','$department','$year','$accno','$ifsc_code','$transportation')");
	if(mysqli_affected_rows($con)>0){
		//status message
		?><script>alert("record added sucessfully");
            window.open('home.php','_self');
    </script><?php
	}
	else{
		$msg="<div class='alert alert-danger'>record not added Successfully</div>";
	}
}

?>