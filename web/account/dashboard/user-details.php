<!-- user-details.php -->



<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
</head>

<body>
    <h1>User Details</h1>
    <?php
    function findUserByID($userID)
    {
        $data = file_get_contents('users_db.json');
        $users = json_decode($data, true);

        foreach ($users as $user) {
            if ($user['userID'] === $userID) {
                return $user;
            }
        }
        return null;
    }
    $userID = $_GET['userID'];
    $user = findUserByID($userID);
    if ($user) {
    ?>
        <form>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>" readonly>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" readonly>
            <br>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" value="<?php echo $user['user_information'][0]['phone']; ?>" readonly>
            <br>
            <!-- Add more fields as needed -->
        </form>
    <?php
    } else {
        echo "User not found.";
    }
    ?>

    <a href="test_search.html"> <button>reset</button>
    </a>
</body>

</html>