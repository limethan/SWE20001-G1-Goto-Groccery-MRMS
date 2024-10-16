<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="description" content="Goto Grocery MRMS">
	<meta name="keywords" content="Admin Login Page" >
    <title>Admin Login Page for Goto Grocery MRMS</title>
    <link href="styles/adminlogin_style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet" >
</head>

<body>

    <div class="design">
        <form action="">
            <h1>Admin Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me </label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>

</body>

</html>
