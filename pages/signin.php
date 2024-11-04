<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - TMMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="siginIn.css">
    
</head>
<body>
    <header class="header">
        <div class="container1">
            <h1 class="logo">TMMS</h1>
            <nav class="navigation">
                <a href="index.html" class="signup-btn">Home</a>
            </nav>
        </div>
    </header>
    <div class="container2 ">
        <div class="image-section">
            <img src="Signin_Lady.png" alt="Welcome Image">
        </div>
        <div class="form-section">
            <div class="logo">TMMS</div>
            <h2>Welcome back!</h2>
            <form action="register.php" method="post">
                <label for="role">Select Role</label>
                <select id="role" name="role" required>
                    <option value="">Select your role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="guest">Guest</option>
                </select>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Sign In</button>
                <p class="link-next">Don't have an account? <a href="signup.html">Sign up here</a></p>
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="logoo.png" alt="Logo Image">
            </div>
            <nav class="footer-nav">
                <ul>
                    <li>Contact</li>
                </ul>
            </nav>
            <div class="footer-contact">
                <p>Phone:(+94) 011 2881 000</p>
                <p>Email: info@ou.ac.lk</p>
                <p>Address: PO Box 21, The Open University of Sri Lanka, Nawala, Nugegoda.</p>
            </div>
        </div>
    </footer>
    
</body>
</html>