
<!DOCTYPE html>
<html>
   
   <body>
      <h2>Bills</h2>
      <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data">

         houseNO:  <input type = "number" name = "houseNO" >
         <br> <br>
         Appliances: <input type = "text" name = "consumption" >
         <br><br>
         Quantity: <input type = "number" name = "meter_reading">
         <br><br>
         Rating(1 kilowatt=1000 watts): <input type = "number" name = "total_bills" >
         <br><br>
          Electricity Cost Per Hour: <input type="number" name="final_amount">
         <br><br>
         <button type="submit" name = "Submit" class="btn btn-default">Submit</button>
        </form>
   </body>
	
</html>