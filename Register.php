
<!DOCTYPE html>
<html>
<body>
<div class="header">
  <h2>Register</h2>
  
  <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data" >
</div>
<form method="" action="">
  <div class="input-group">
    <label>First Name</label>
    <input type="text" name="first_name" value="">
  </div>
  <div class="input-group">
    <label>Last Name</label>
    <input type="text" name="last_name" value="">
  </div>
  <div class="input-group">
    <label>Email</label>
    <input type="email" name="email" value="">
  </div>
  <div class="input-group">
    <label>Username</label>
    <input type="name" name="user_name" value="">
  </div>
  <div class="input-group">
    <label>User Type</label>
    <input type="text" name="user_type" value="">
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password">
  </div>
  <div class="input-group">
    <label>Location</label>
    <input type="text" name="location">
  </div>
  <div class="input-group">
    <button type="submit" class="btn" name="register_btn">Register</button>
  </div>
  <p>
    Already a member? <a href="login.php">Sign in</a>
  </p>
</form>
</body>
</html>