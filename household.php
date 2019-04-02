<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Hold</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>House Hold</h2>
  <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data">
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">houseNO:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter houseNO" name="houseNO">
    </div>
    <div class="form-group">
      <label for="pwd">Occupantname:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Occupantname" name="Occupantname">
    </div>
  
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
