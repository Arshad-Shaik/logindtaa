

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<!-- <script>
    // Simple encryption function
    function encryptPassword(password) {
        return btoa(password); // Base64 encoding for simplicity (not secure)
    }

    // Simple decryption function
    function decryptPassword(encryptedPassword) {
        return atob(encryptedPassword); // Base64 decoding
    }

    function handleSubmit() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Encrypt the password before sending it to the server
        var encryptedPassword = encryptPassword(password);

        // Here you would typically send the encrypted credentials to the server for authentication
        console.log("Encrypted Password: " + encryptedPassword);

        // For demonstration, decrypt the password
        var decryptedPassword = decryptPassword(encryptedPassword);
        console.log("Decrypted Password: " + decryptedPassword);
    }
</script> -->
</head>
<body>
    
    <form  method="POST" >
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit" name="submit" onclick="handleSubmit()">Submit</button>
    </form>
    <?php
require 'connection.php';
if(isset($_POST['submit'])) {
    $name = $_POST['username']; // Corrected variable name
    $password = $_POST['password']; // Corrected variable name

    $query = "INSERT INTO logindata (Name, Password) VALUES ('$name', '$password')"; // Corrected SQL query
    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Data Added Successfully')</script>"; // Corrected syntax
    } else {
        echo "<script>alert('Error')</script>"; // Corrected syntax
    }
}
?>
</body>
</html>