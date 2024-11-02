<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - TMMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kufam:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
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
    <div class="container2">
        <div class="image-section">
            <img src="Signup_Lady.png" >
        </div>
        <div class="form-section">
            <div class="logo">TMMS</div>
            <h2>Create an account</h2>
            <form action="#" method="post">
                <label for="email">Email (Username)</label>
                <input type="email" id="email" name="email" required>

                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="address">Address</label>
                <input type="text" id="Address" name="address" required>

                <label for="pNumber">Phone Number</label>
                <input type="text" id="pNumber" name="phoneNumber" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <label for="role">Select Role</label>
                <select id="role" name="role" required>
                    <option value="">Select your role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="guest">Guest</option>
                </select>

                <button type="submit">Sign Up</button>
                <p class="link-next">Already have an account? <a href="signin.html">Sign in here</a></p>
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
                <p>Phone: +1 123 456 7890</p>
                <p>Email: [info@yourcompany.com](mailto:info@yourcompany.com)</p>
                <p>Address: 123 Main St, Anytown, USA 12345</p>
            </div>
        </div>
    </footer>
</body>
</html>
