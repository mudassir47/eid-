<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram Login</title>
    <!-- Load the Firebase JavaScript SDK -->
    <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.5/firebase-auth.js"></script>
    <style>
      /* Add some styling to make the page look beautiful */
      body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f3f3f3;
      }

      .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        text-align: center;
      }

      h1 {
        margin-top: 0;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      input[type="submit"] {
        background-color: #3897f0;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #2f80ed;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <img src="https://cdn.icon-icons.com/icons2/1584/PNG/512/3721679-instagram_109256.png" alt="Instagram Logo">
      <h1>Login</h1>
      <form id="login-form">
        <input type="text" placeholder="Username" id="username">
        <input type="password" placeholder="Password" id="password">
        <input type="submit" value="Log In">
      </form>
    </div>

    <!-- Add some JavaScript to handle the form submission and authentication -->
    <script>
      // Initialize Firebase
      const firebaseConfig = {
        apiKey: "your-api-key",
        authDomain: "your-auth-domain",
        databaseURL: "your-database-url",
        projectId: "your-project-id",
       
