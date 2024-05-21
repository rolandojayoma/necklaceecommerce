<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #7db9e8, #4691f3);
    }
    .container {
      width: 320px;
      padding: 40px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .container h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #666;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s;
    }
    .form-group input[type="text"],
    .form-group input[type="password"] {
      background-color: #f9f9f9;
    }
    .form-group input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s;
      border: none;
    }
    .form-group input[type="submit"]:hover {
      background-color: #0056b3;
    }
    .form-group input:focus {
      outline: none;
      border-color: #007bff;
    }
    .form-group input::placeholder {
      color: #999;
    }
    .footer {
      margin-top: 20px;
      text-align: center;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="{{ Route('login') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" id="username" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login"><a href="{{url('welcome_user')}}"></a>
      </div>
    </form>
    <div class="footer">
      Don't have an account? <a href="{{url('register')}}">Sign Up</a>
    </div>
  </div>
</body>
</html>
