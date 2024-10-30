<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovAppHelper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
        
        body {
            background-image: url('background.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        
        .login-box {
            width: 400px;
            padding: 40px;
            border-radius: 100px;
            background-color: rgba(147, 125, 125, 0.9); 
            box-shadow: #fff; 
            backdrop-filter: blur(5px); 
            
        }

        
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
            
        }
        .form-control {
            border-radius: 8px;
            padding: 12px;
            border-color:#fff;
            
        }
        
        .btn-primary {
            border-radius:8px;
            padding: 10px;
            font-weight: bold;
            background-color:#1e1f20;
            border-color:#fff;
        }

        
        .btn-primary:hover {
            background-color:rgba(147, 125, 125, 0.9);
            transition: background-color 0.3s ease;
            border-color:#fff;
            border-radius: 300px;
        }
    </style>
<body>
    <div class="container">
        <h1>Welcome to GovAppHelper</h1>
        <a href="register.php" class="btn btn-primary">Register</a>
        <a href="login.php" class="btn btn-secondary">Login</a>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
