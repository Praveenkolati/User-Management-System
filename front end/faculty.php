<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 50px;
            border: 4px solid black;
        }

        #cl {
            padding: 10px;
        }

        table,
        th,
        td {
            border: 1px dotted red;
            border-collapse: collapse;
            padding: 10px;
        }

        a {
            text-decoration: none;
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        header {
            background-color: #000;
            color: #fff;
            border-color: #080808;
            min-height: 50px;
            border: 1px solid transparent;
        }

        footer {
            min-height: 25px;
            border: 2px solid transparent;
        }

        /* .q {
            padding: 8px;
            border: 3px solid lightgreen;
            color: orange;
        } */

        .dc {
            padding: 5px 12px 5px 2px;
            width: 33%;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="text-align:center;">Faculty Registration </h1>
    </header>
    <div id="cl">
        <form action="" method="post" >
            <label>Name: </label>
            <input class="q" id="A" name="name" placeholder="Name"> <br> <br>
            <label> Father Name : </label>
            <input class="q" id="B" name="fathername" placeholder="Father Name"> <br> <br>
            <label>Mother Name : </label>
            <input clas="q" id="C" name="mothername" placeholder="Mother Name"><br> <br>
            <label>Address :</label>
            <input class="q"id="D" name="address" placeholder="address"><br> <br>
            <label>Gender:</label>
            <input id="t1" type="radio" name="gender" value="Male"> Male</input>
            <input id="t2" type="radio" name="gender" value="Female">
            Female</input>
            <input id="t3" type="radio" name="gender" value="Other">
            Other</input><br> <br>
            <label> Email Address: </label>
            <input id="em" name="email" type="email"> </input><br> <br>
            <label> Telephone number: </label><input id="tn" name="mobile" type="number" placeholder="Telephone no">
            <br> <br>
            <label> Nationality: </label> <input type="text" name="nationality" id="nnn" value="Indian">
            <br> <br>
            <label>Skills: </label> <input class="q" name="skills" placeholder="skills" id="E"><br><br>
            <label>Qualification: </label> <br>
            <br> <label>SSC: </label> <input placeholder="enter percentage" name="ssc" type="text" id="ssc" class="q"></input><br>
            <br><label>Inter:</label> <input class="q" name="inter" placeholder="enter percentage" type="text" id="inter"></input>
            <br><br>
            <label>Btech:</label>
            <input class="q" name="btech"placeholder="enter percentage" type="text" id="bte"></input>
            <br><br>
            <label>Mtech:</label>
            <input class="q" name="mtech" placeholder="enter percentage" type="text" id="mte"></input>
            <br>
            <!-- <table id="cl1">
                <tbody>
                    <tr>
                        <th>SSC</th>
                        <th>College</th>
                        <th>Btech</th>
                        <th>Mtech</th>
                    </tr>
                    <tr>
                        <td><input class="dc" id="a1" type="number"></input> </td>
                        <td><input class="dc" id="a2" type="number"></input></td>
                        <td><input class="dc" id="a3" type="number"></input></td>
                        <td><input class="dc" id="a4" type="number"></input></td>
                    </tr>
                </tbody>
            </table> -->
            <br><br>
            <label>Account no:</label>
            <input type="number" id="ac" name="accno" placeholder="Account no">
            <label>IFSC code:</label>
            <input type="text" id="ic" name="ifsc" placeholder="IFSC code"><br><br>
            <label>Languages known: </label>
            <input id="c1" type="text" name="language" placeholder="Language"><br><br>
            <footer>
                <br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="user name" required>
                <br><br>
                <label for="pass"> Create Your Password:</label>
                <input type="password" id="psw" name="password" placeholder="Password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>
                <br><br>
                <center>
                    <button class="btn btn-danger" name="web">Submit</button>
                </center>
            </footer>
        </form>
    </div>

</html>
<?php
//For database conn
$msg="";
$con=mysqli_connect("localhost","root","","user");
if(isset($_POST['web'])){
    
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $fathername=mysqli_real_escape_string($con,$_POST['fathername']);
    $mothername=mysqli_real_escape_string($con,$_POST['mothername']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $accno=mysqli_real_escape_string($con,$_POST['accno']);
    $ifsc=mysqli_real_escape_string($con,$_POST['ifsc']);
    $ssc=mysqli_real_escape_string($con,$_POST['ssc']);
    $inter=mysqli_real_escape_string($con,$_POST['inter']);
    $btech=mysqli_real_escape_string($con,$_POST['btech']);
    $mtech=mysqli_real_escape_string($con,$_POST['mtech']);
    $language=mysqli_real_escape_string($con,$_POST['language']);
    $skills=mysqli_real_escape_string($con,$_POST['skills']);
    $nationality=mysqli_real_escape_string($con,$_POST['nationality']);
    $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	//query to insert records intodatabase
	$insert=mysqli_query($con,"INSERT INTO `faculty`(name,username,password,fathername,mothername,address,gender,email,accno,ifsc,ssc,inter,btech,mtech,language,skills,nationality,mobile) VALUES 
	('$name','$username','$password','$fathername','$mothername','$address','$gender','$email','$accno','$ifsc','$ssc','$inter','$btech','$mtech','$language','$skills','$nationality','$mobile')");
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