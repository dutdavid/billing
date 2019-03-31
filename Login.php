 <!DOCTYPE html>
<html>
<body>
  <div class="header">
    <h2>Login</h2>
    <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data" >
  </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_btn">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>