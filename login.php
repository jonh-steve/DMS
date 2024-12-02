<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <style>
    
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    
        .login-form h1 {
            text-align: center;
            color: #333;
        }
    
        .form-group {
            margin-bottom: 15px;
        }
    
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
    
        .form-group input {
            width: 94%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
    
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
    
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    
        .student-signup {
            text-align: center;
            margin-top: 20px;
        }
    
        .student-signup h2 {
            color: #333;
            font-size: 18px;
        }
    
        .student-signup .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #008CBA;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }
    
        .student-signup .btn:hover {
            background-color: #007B9A;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="login-form">
            <h1>ADMIN LOGIN</h1>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <input type="text" id="user" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" id="pass" name="password" placeholder="Password" required>
                </div>
                <button type="submit" id="btn" name="login">Login</button>
            </form>
        </div>

        <div class="student-signup">
            <h2>Are you a student?</h2>
            <a href="Student/signup.html" class="btn">Student Sign-up</a>
        </div>
    </div>

</body>

</html>