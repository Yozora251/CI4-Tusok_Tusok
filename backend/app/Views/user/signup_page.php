<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Tusok-Tusok POS</title>
    <link rel="shortcut icon" type="image/png" href="/assets/tusokicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d1117;
            color: #e6edf3;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .signup-card {
            background-color: #161b22;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            width: 420px;
            padding: 40px 30px;
            text-align: center;
        }

        .signup-card h2 {
            color: #4cc9f0;
            font-weight: 700;
            margin-bottom: 25px;
        }

        p {
            color: #ffffff;
        }

        .form-control {
            background-color: #0d1117;
            border: 1px solid #4cc9f0;
            color: #f1f5f9;
            border-radius: 10px;
        }

        .form-control::placeholder {
            color: #a8cfff;
            opacity: 0.9;
        }

        .form-control:focus {
            border-color: #3a86ff;
            box-shadow: 0 0 6px #3a86ff;
        }

        .btn-signup {
            background-color: #4cc9f0;
            color: #0d1117;
            font-weight: 600;
            border-radius: 25px;
            padding: 10px 20px;
            border: none;
            width: 100%;
            margin-top: 15px;
            transition: 0.3s;
        }

        .btn-signup:hover {
            background-color: #3a86ff;
            color: #fff;
        }

        .login-link {
            color: #4cc9f0;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link:hover {
            text-decoration: underline;
            color: #3a86ff;
        }

        .logo {
            width: 70px;
            margin-bottom: 15px;
            filter: drop-shadow(0 0 6px #4cc9f0);
        }

        /* ✅ Back Home Button Styling */
        .btn-back {
            background-color: transparent;
            border: 1px solid #4cc9f0;
            color: #4cc9f0;
            border-radius: 25px;
            padding: 8px 20px;
            font-weight: 600;
            margin-top: 15px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-back:hover {
            background-color: #4cc9f0;
            color: #0d1117;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="signup-card">
        <img src="/assets/circle.png" alt="Tusok-Tusok Logo" class="logo">
        <h2>Create an Account</h2>
        <p class="mb-4">Join the Tusok-Tusok family today</p>

        <form action="login.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn-signup">Sign Up</button>
        </form>

        <p class="mt-4">Already have an account? <a href="/login_page" class="login-link">Login here</a></p>

        <!-- ✅ Back Home Button -->
        <a href="/" class="btn-back">← Back Home</a>
    </div>

</body>

</html>