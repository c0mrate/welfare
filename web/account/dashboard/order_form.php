<?php

// Function to check userID and update data
function updateUserData($userID, $formData)
{
    // Implement your logic to update the user data for the given userID
    // For example, you can update the data in a database table

    // Extract the form data
    $name = $formData['name'];
    $email = $formData['email'];
    $phone = $formData['phone'];
    $line = $formData['line'];
    $address = $formData['address'];
    $province = $formData['province'];
    $zipcode = $formData['zipcode'];
    $ProductID = $formData['ProductID'];
    $ProductName = $formData['ProductName'];
    $ProductQuality = $formData['ProductQuality'];
    $ProductSize = $formData['ProductSize'];
    $ProductColor = $formData['ProductColor'];
    $ProductLength = $formData['ProductLength'];
    $ProductPrice = $formData['ProductPrice'];

    // Update the user data in the database using the provided userID
    // Example code using MySQLi prepared statements:

    // Assuming you have a database connection
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phone=?, line=?, address=?, province=?, zipcode=?, ProductID=?, ProductName=?, ProductQuality=?, ProductSize=?, ProductColor=?, ProductLength=?, ProductPrice=? WHERE userID=?");

    // Bind the parameters
    $stmt->bind_param("ssssssssssssssi", $name, $email, $phone, $line, $address, $province, $zipcode, $ProductID, $ProductName, $ProductQuality, $ProductSize, $ProductColor, $ProductLength, $ProductPrice, $userID);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User data updated successfully";
    } else {
        echo "Error updating user data: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

// Check if the form is submitted and process the update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Get the userID from the form data
    $userID = $_POST['orderID'];

    // Call the updateUserData function passing the userID and the form data
    updateUserData($userID, $_POST);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
</head>

<body>
    <div class="card-content">
        <form method="POST" action="">
            <input class="input" type="text" name="orderID" value="<?php echo $_GET['orderID']; ?>" readonly><br>
            <hr>
            <span>name</span>
            <input class="input" type="text" name="name" value="" readonly>
            <span>email</span>
            <input class="input" type="text" name="email" value=""><br>
            <span>phone</span>
            <input class="input" type="text" name="phone" value="">
            <span>line</span>
            <input class="input" type="text" name="line" value=""><br>
            <span>address</span>
            <input class="input" type="text" name="address" value="">
            <span>province</span>
            <input class="input" type="text" name="province" value=""><br>
            <span>zipcode</span>
            <input class="input" type="text" name="zipcode" value="">
            <span>ProductID</span>
            <input class="input" type="text" name="ProductID" value=""><br>
            <span>ProductName</span>
            <input class="input" type="text" name="ProductName" value="">
            <span>ProductQuality</span>
            <input class="input" type="text" name="ProductQuality" value=""><br>
            <span>ProductSize</span>
            <input class="input" type="text" name="ProductSize" value="">
            <span>ProductColor</span>
            <input class="input" type="text" name="ProductColor" value=""><br>
            <span>ProductLength</span>
            <input class="input" type="text" name="ProductLength" value="">
            <span>ProductPrice</span>
            <input class="input" type="text" name="ProductPrice" value="">
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>

</html>