<html>

<body>
  <h1>Received data from text field</h1>
  <?php
  echo "Name:<br>";
  echo $_POST["name"] . "<br>";
  echo "Aadhar:<br>";
  echo $_POST["aadhar"] . "<br>";
  echo "Gender:<br>";
  echo $_POST["gender"] . "<br>";
  echo "Complaint:<br>";
  echo $_POST["body"] . "<br>";
  ?>
</body>

</html>