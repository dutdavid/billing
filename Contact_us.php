
</html>
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
      <input type="email" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Consumption</label>
      <input type="number" class="form-control" placeholder="Enter company" name="company">
    </div>
    <div class="form-group">
      <label for="pwd">Meter Reading:</label>
      <input type="text" class="form-control" placeholder="Enter appliance email" name="email">
    <div class="form-group">
      <label for="pwd">Total Bills:</label>
      <input type="number" class="form-control" placeholder="Enter phone" name="phone">
    </div>
    </div>  <div class="form-group">
      <label for="pwd">final Amount:</label>
      <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name="message"></textarea>
    </div>
    <button type="submit" name = "post" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
