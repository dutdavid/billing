<!DOCTYPE html>
<html>
	
   <body>
      <h2>Contact Us</h2>
      <form action="processes/form_processes.php" method = "POST" enctype="multipart/form-data" >
      <form >
         Name:  <input type = "text" name = "name" >
         <br> <br>
         Company:   <input type = "text" name = "company" >
         <br><br>
         Email:   <input type = "email" name = "email" >
         <br><br>
         Phone:   <input type = "number" name = "phone" />
         <br>
         <br>
         Message :  <br>
         <textarea rows = "5" cols = "50" name = "message">
         </textarea>
         <br><br>
         <input type = "submit" name = "post" value = "Submit"> 
      </form>
   </body>
	
</html>