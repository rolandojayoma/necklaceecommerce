<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
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
    .form-group input[type="email"],
    .form-group input[type="password"],
    .form-group input[type="number"] {
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
    .form-group.login-link {
      text-align: center;
      color: #666;
    }
    .form-group.login-link a {
      color: #007bff;
      text-decoration: none;
    }
    .form-group.login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="post">
        @csrf
      <div class="form-group">
        <label for="reg_username">Username:</label>
        <input type="text" id="reg_username" name="name" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="reg_email">Email:</label>
        <input type="email" id="reg_email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="reg_phone">Phone:</label>
        <input type="number" id="reg_phone" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="reg_address">Address:</label>
        <input type="text" id="reg_address" name="address" placeholder="Enter your address" required>
      </div>
      <div class="form-group">
        <label for="reg_password">Password:</label>
        <input type="password" id="reg_password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Register">
      </div>
    </form>
    <div class="form-group login-link">
      Already have an account? <a href="{{url('login')}}">Login</a>
    </div>
  </div>
</body>
</html>
