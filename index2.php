
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovApp Helper</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="india.jpg" alt="GovApp Logo" width="50">
            <h1>GovApp Helper</h1>
        </div>
        <nav class="navbar">
            <a href="index2.php">Home</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">


<section class="hero">
    <h2>Welcome to GovApp Helper</h2>
    <p>Access essential government services at your fingertips. Fast, reliable, and easy to use.</p>
    <a href="#" class="cta-button">Explore Services</a>
</section>

<section class="features">
    <h3>Our Features</h3>
    <div class="feature-box">
        <h4>Quick Service Access</h4>
        <p>Get instant access to your most used government services.</p>
    </div>
    <div class="feature-box">
        <h4>Secure Login</h4>
        <p>Ensure your personal data is protected with our secure authentication.</p>
    </div>
    <div class="feature-box">
        <h4>Real-Time Notifications</h4>
        <p>Stay updated with real-time alerts and notifications from the government.</p>
    </div>
</section>
<style>/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f0f0f0;
    color: #333;
    line-height: 1.6;
}

/* Header Styles */
.main-header {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.main-header .logo h1 {
    margin-left: 10px;
    display: inline-block;
}

.navbar a {
    color: white;
    margin-left: 15px;
    text-decoration: none;
}

.navbar a:hover {
    text-decoration: underline;
}

/* Hero Section */
.hero {
    text-align: center;
    padding: 50px;
    background-color: #5bc0de;
    color: white;
}

.hero h2 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.hero .cta-button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
}

.hero .cta-button:hover {
    background-color: #45a049;
}

/* Features Section */
.features {
    padding: 30px;
    background-color: white;
    margin: 20px auto;
    max-width: 1100px;
}

.features h3 {
    text-align: center;
    margin-bottom: 20px;
}

.feature-box {
    margin: 10px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    background-color: #f9f9f9;
}

/* Footer Styles */
.main-footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

.social-links a {
    color: white;
    margin: 0 5px;
    text-decoration: none;
}

.social-links a:hover {
    text-decoration: underline;
}
</style>
</body>
</html>
