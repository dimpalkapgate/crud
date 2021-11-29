<!DOCTYPE html>
<html>
<body>

<h2>PRODUCT FORMS</h2>

<form action="/create" method="post">
  @csrf
  <label for="productname">product Name:</label><br>
  <input type="text" id="productname" name="productname" value="">
  <br>
  <input type="submit" value="Submit"></br>
</form> 



</body>
</html>

