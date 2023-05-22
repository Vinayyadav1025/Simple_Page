<!DOCTYPE html>
<html>
<head>
  <title>Form - Page 1</title>
</head>
<body>
  <h2>Page 1</h2>
  <form id="myForm" onsubmit="return validateForm()" action="page2.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <span id="nameError" class="error"></span><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>
    <span id="phoneError" class="error"></span><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <span id="emailError" class="error"></span><br><br>

    <input type="submit" value="Submit">
  </form>

  <script>
    function validateForm() {
      var name = document.getElementById("name").value;
      var phone = document.getElementById("phone").value;
      var email = document.getElementById("email").value;

      var nameError = document.getElementById("nameError");
      var phoneError = document.getElementById("phoneError");
      var emailError = document.getElementById("emailError");

      var valid = true;

      // Validate name
      if (name.trim() === "" || /\d/.test(name)) {
        nameError.textContent = "Please enter a valid name";
        valid = false;
      } else {
        nameError.textContent = "";
      }

      // Validate phone number
      var phoneRegex = /^\d{10}$/; // Assumes a 10-digit phone number
      if (!phoneRegex.test(phone)) {
        phoneError.textContent = "Invalid phone number";
        valid = false;
      } else {
        phoneError.textContent = "";
      }

      // Validate email
      var emailRegex = /^\S+@\S+\.\S+$/;
      if (!emailRegex.test(email)) {
        emailError.textContent = "Invalid email address";
        valid = false;
      } else {
        emailError.textContent = "";
      }

      return valid;
    }
  </script>
</body>
</html>
