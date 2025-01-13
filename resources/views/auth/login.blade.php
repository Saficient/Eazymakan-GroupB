<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EazyMakan - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            min-height: 100vh;
        }

        .split-screen {
            display: flex;
            width: 100%;
        }

        .left {
            flex: 1;
            background-image: url('{{ asset("assets/img/food-login.jpg") }}');
            background-size: cover;
            background-position: center;
            padding: 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .left h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .left p {
            font-size: 1.1rem;
            margin: 0;
        }

        .right {
            flex: 1;
            background-color: #0a192f;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .language-selector {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
        }

        .logo {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #64ffda;
        }

        .social-buttons {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .social-button {
            flex: 1;
            padding: 12px;
            border: 1px solid #2a3f5f;
            border-radius: 8px;
            background: transparent;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .social-button:hover {
            background-color: #2a3f5f;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #8892b0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #2a3f5f;
        }

        .divider span {
            padding: 0 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            background: transparent;
            border: 1px solid #2a3f5f;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #64ffda;
        }

        .submit-button {
            width: 100%;
            padding: 12px;
            background: #64ffda;
            color: #0a192f;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .submit-button:hover {
            opacity: 0.9;
        }

        .login-link {
            margin-top: 20px;
            color: #8892b0;
            text-align: center;
        }

        .login-link a {
            color: #64ffda;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="split-screen">
        <div class="left">
            <h1>EazyMakan</h1>
            <p>Where Hunger Meets Simplicity.</p>
        </div>
        <div class="right">
            <div class="language-selector">
                English (UK) ▼
            </div>
            <div class="login-container">
                <h1 class="logo">EazyMakan</h1>
                <h2>Login</h2>

                <div class="social-buttons">
                    <button class="social-button">
                        <img src="{{ asset('assets/img/google.png') }}" alt="Google" width="20">
                        Sign in with Google
                    </button>
                    <button class="social-button">
                        <img src="{{ asset('assets/img/facebook.png') }}" alt="Facebook" width="20">
                        Sign in with Facebook
                    </button>
                </div>

                <div class="divider">
                    <span>OR</span>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="submit-button">Login</button>
                </form>

                <div class="login-link">
                    Don't have an account? <a href="{{ route('register') }}">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
