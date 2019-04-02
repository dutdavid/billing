<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bills</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bills</h2>
  <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">houseNO:</label>
      <input type="email" class="form-control" placeholder="Enter house number" name="houseNO">
    </div>
    <div class="form-group">
      <label for="pwd">Consumption</label>
      <input type="number" class="form-control" placeholder="Enter Consumption" name="consumption">
    </div>
    <div class="form-group">
      <label for="pwd">Meter Reading:</label>
      <input type="text" class="form-control" placeholder="Enter Reading" name="meter_reading">
    <div class="form-group">
      <label for="pwd">Total Bills:</label>
      <input type="number" class="form-control" placeholder="Enter Total Bills" name="total_bills">
    </div>
    </div>  <div class="form-group">
      <label for="pwd">final Amount:</label>
      <input type="number" class="form-control" placeholder="Enter final Amount" name="final_amount">
    </div>
    <button type="submit" name = "Submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
