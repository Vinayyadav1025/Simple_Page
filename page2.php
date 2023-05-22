<!DOCTYPE html>
<html>
<head>
  <title>Form - Page 2</title>
</head>
<body>
  <h2>Page 2</h2>
  <form id="myForm" onsubmit="return validateForm()" action="success.php" method="POST">
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required>
    <span id="locationError" class="error"></span><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="0" required>
    <span id="ageError" class="error"></span><br><br>

    <label for="university">University:</label>
    <input type="text" id="university" name="university" required>
    <span id="universityError" class="error"></span><br><br>
    <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
    <input type="submit" value="Submit">
  </form>

  <script>
    function validateForm() {
      var location = document.getElementById("location").value;
      var age = document.getElementById("age").value;
      var university = document.getElementById("university").value;

      var locationError = document.getElementById("locationError");
      var ageError = document.getElementById("ageError");
      var universityError = document.getElementById("universityError");

      var valid = true;

      // Validate location
      if (location.trim() === "") {
        locationError.textContent = "Location is required";
        valid = false;
      } else {
        locationError.textContent = "";
      }

      // Validate age
      if (isNaN(age) || age < 0) {
        ageError.textContent = "Invalid age";
        valid = false;
      } else {
        ageError.textContent = "";
      }

      // Validate university
      if (university.trim() === "") {
        universityError.textContent = "University is required";
        valid = false;
      } else {
        universityError.textContent = "";
      }

      return valid;
    }
  </script>
</body>
</html>
