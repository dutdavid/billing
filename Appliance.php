<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Appliances</h2>
  <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter house number" name="houseNO">
    </div>
    <div class="form-group">
      <label for="pwd">Appliance ID</label>
      <input type="number" class="form-control" placeholder="Enter appliance ID" name="applianceID">
    </div>
    <div class="form-group">
      <label for="pwd">Appliance Name:</label>
      <input type="text" class="form-control" placeholder="Enter appliance name" name="appliancename">
    <div class="form-group">
      <label for="pwd">Quantity:</label>
      <input type="number" class="form-control" placeholder="Enter Quantity" name="Quantity">
    </div>
    </div>  <div class="form-group">
      <label for="pwd">Rating Watts:</label>
      <input type="number" class="form-control" placeholder="Enter appliance Rating" name="Rating_watts">
    </div>
    <div class="form-group">
      <label for="pwd">Hours Per Day:</label>
      <input type="number" class="form-control" placeholder="Enter hours_used_per_days" name="hours_used_per_days">
    </div>
    <div class="form-group">
      <label for="pwd">kilowattperhour_KWH:</label>
      <input type="number" class="form-control" placeholder="Enter kilowattperhour_KWH" name="kilowattperhour_KWH">
    </div>
    <div class="form-group">
      <label for="pwd">Number of days:</label>
      <input type="number" class="form-control" placeholder="Enter number" name="Numberofdays">
    </div>
    <div class="form-group">
      <label for="pwd">Consumption:</label>
      <input type="text" class="form-control" placeholder="Enter consumption" name="consumption">
    </div>
    <button type="submit" class="btn btn-default" name="send">Submit</button>
  </form>
</div>

</body>
</html>
