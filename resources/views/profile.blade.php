<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EazyMakan - Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #0a192f;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .logo {
            color: #64ffda;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .profile-container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .profile-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-text h2 {
            margin: 0;
            color: #333;
        }

        .profile-text p {
            margin: 0.5rem 0 0;
            color: #666;
        }

        .edit-button {
            padding: 0.5rem 2rem;
            background: #4285f4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
        }

        .profile-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #666;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-group input:focus {
            outline: none;
            border-color: #4285f4;
        }

        .logout-button {
            background: #dc3545;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="logo">EazyMakan</a>
        <div class="nav-links">
            <a href="/menu">Menu</a>
            <a href="/cart">Cart</a>
            <a href="/order-updates">Order Updates</a>
            <a href="/profile" style="text-decoration: underline;">Profile</a>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
    </nav>

    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-info">
                <img src="{{ asset('assets/img/profile-default.png') }}" alt="Profile" class="profile-image">
                <div class="profile-text">
                    <h2>{{ Auth::user()->name }}</h2>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
            <button class="edit-button">Edit</button>
        </div>

        <div class="profile-form">
            <div class="form-group">
                <label>User ID</label>
                <input type="text" placeholder="Type Your Username" value="{{ Auth::user()->id }}" readonly>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Type Your Email" value="{{ Auth::user()->email }}">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" placeholder="Type Your Username" value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
                <label>Phone No</label>
                <input type="tel" placeholder="Type Your Phone No">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Type Your Password">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" placeholder="Type Your Address">
            </div>
        </div>
    </div>
</body>
</html>
