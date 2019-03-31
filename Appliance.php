
<!DOCTYPE html>
<html>
	   <body>
      <h2>Appliance</h2>
      <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data" >

         houseNO:  <input type = "text" name = "houseNO" >
         <br> <br>
         ApplianceID: <input type = "text" name = "applianceID" >
         <br><br>
         Appliance Name: <input type = "text" name = "appliancename" >
         <br><br>
         Quantity: <input type = "number" name = "Quantity">
         <br><br>
         Rating(1 kilowatt=1000 watts): <input type = "number" name = "Rating_watts" >
         <br><br>
         Hours used per day: <input type="text" name="hours_used_per_days">
         <br><br>
         Kilowatt per day: <input type="text" name="kilowattperhour_KWH">
         <br><br>
         Number of days: <input type="text" name="Numberofdays">
         <br><br>
        consumption:<input type="text" name="consumption">
        <br><br>
        <button type="submit" name = "send" class="btn btn-default">Submit</button>
      </form>
   </body>
	
</html>
