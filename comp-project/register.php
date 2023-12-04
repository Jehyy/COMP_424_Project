<!-- register.php -->
<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px; /* Adjust the width as needed */
        }
        .header h2 {
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        p {
            margin-top: 16px;
            font-size: 14px;
        }
        a {
            text-decoration: none;
            color: #4caf50;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php echo isset($first_name) ? $first_name : ''; ?>">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php echo isset($last_name) ? $last_name : ''; ?>">
        </div>
        <div class="input-group">
            <label>Date of Birth</label>
            <input type="date" name="dob" value="<?php echo isset($dob) ? $dob : ''; ?>">
        </div>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo isset($username) ? $username : ''; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <!-- Drop-down menus for security questions -->
        <div class="input-group">
            <label>Security Question 1</label>
            <select name="security_question_1">
                <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                <option value="In which city were you born?">In which city were you born?</option>
                <option value="What is your favorite book?">What is your favorite book?</option>
                <option value="What is the name of your first pet?">What is the name of your first pet?</option>
                <option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
            </select>
            <input type="text" name="security_answer_1" placeholder="Your answer">
        </div>
        <div class="input-group">
            <label>Security Question 2</label>
            <select name="security_question_2">
                <option value="What is your favorite movie?">What is your favorite movie?</option>
                <option value="In which year did you graduate from high school?">In which year did you graduate from high school?</option>
                <option value="What is the name of your childhood best friend?">What is the name of your childhood best friend?</option>
                <option value="What is the first name of your favorite teacher?">What is the first name of your favorite teacher?</option>
                <option value="What is the color of your first car?">What is the color of your first car?</option>
            </select>
            <input type="text" name="security_answer_2" placeholder="Your answer">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>Already a member? <a href="index.php">Sign in</a></p>
    </form>
</div>

</body>
</html>

