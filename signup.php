<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $name = $_POST['name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
            $query = "INSERT INTO users (user_id, name, user_name, password, address, city, state, phone, age, gender) VALUES ('$user_id', '$name','$user_name', '$password', '$address', '$city', '$state', '$phone', '$age', '$gender')";
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Berkshire+Swash&family=Comic+Neue:wght@700&family=Gentium+Book+Plus:wght@400;700&family=Lato:ital,wght@0,400;0,700;0,900;1,700&family=Lexend+Deca:wght@500&family=Lexend:wght@500&family=Montserrat:wght@500&family=Open+Sans:wght@500;800&family=Roboto:wght@100;400&family=Sue+Ellen+Francisco&family=Work+Sans:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        #header {
            background-color: #e3e6f3;
            padding: 20px 80px;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06)
        }

        .container {
            width: 400px;
            margin: 150px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .error-message {
        color: red;
        display: none;
        }

        input:invalid + .error-message {
        display: block;
        }

        input:valid + .error-message {
        display: none;
        }
    </style>
</head>
<section id="header">
    <a href="#"><img src="https://i.postimg.cc/x8ncvFjr/logo.png"></a>
    <div>
        <ul id="navbar">
            <li><a href="store.php">Home</a></li>
            <li><a href="signup.php" class="active">SignUp</a></li>
        </ul>
</section>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form method="post">
            <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="user_name" class="form-control" required>
                    <small class="error-message">Please enter a valid email address.</small>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name = "city" class="form-control" required>
                    </select>
                </div>
                <div class="form-group">
                    <label>State</label>
                    <input type="text" name = "state" class="form-control" required>
                    </select>
                </div> 
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="phone" pattern="[0-9]{10}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input type="number" name="age" class="form-control" required min="18">
                </div>
                <div class="form-group">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="male" required> Male
                    <input type="radio" name="gender" value="female" required> Female
                </div>           
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Sign Up">
                </div>

                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>
    </div>
</div>
</body>
</html>