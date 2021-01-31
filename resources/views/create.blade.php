<html>
<body>
  <h2>HTML Forms</h2>

<form action="{{ route('persons.store') }}" method="POST">
  @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="name" value="Sophie"><br>
  <label for="lname">País:</label><br>
  <input type="text" id="lname" name="country" value="dinamarca"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
 
</body>
</html>
