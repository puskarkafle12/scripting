<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-light">




    <!-- Display Form -->
    <form action="crud.php" method="post">
        <h5 class="m-2 p-1">Create New record</h5>
        <div class="container m-2 p-1">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <!-- Use a hidden field to determine the operation (create/update) -->
            <input type="hidden" name="operation" id="operation" value="create">

            <button type="submit">Create</button>
        </div>
    </form>
    <div id="edit-div" class="m-3" style="display: none;">
     <h5>Update</h5>
        <form method="post" action="crud.php">
            <label for="edit-username">Username:</label>
            <input type="text" name="username" id="edit-username" placeholder="Username">

            <label for="edit-password">Password:</label>
            <input type="password" name="password" id="edit-password" placeholder="Password">

            <label for="edit-address">Address:</label>
            <input type="text" name="address" id="edit-address" placeholder="Address">

            <input type="hidden" name="id" id="edit-id" placeholder="Id">
            <input type="hidden" name="operation" id="edit-operation" value="edit">
            <input type="submit" value="Update">
        </form>
    </div>



    <!-- Display User Data -->
    <h3 class="m-2 p-1">User Data</h3>
    <table class="table m-2 p-1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Address</th>
            <th>Action</th>
        </tr>

        <?php
        // Fetch and display user data from the database
        include 'crud.php'; // Include CRUD logic
        $users = fetchUsers();

        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['username']}</td>";
            echo "<td>{$user['password']}</td>";
            echo "<td>{$user['address']}</td>";
            echo "<td>
            <button class='btn-primary' id='edit-btn' onclick=\"showEditDiv({$user['id']}, '{$user['username']}', '{$user['password']}', '{$user['address']}')\">Edit</button> |
            <button class='btn-primary'>
                <a style='color: white; text-decoration: none;' href='crud.php?operation=delete&id={$user['id']}'>Delete</a>
            </button>
          </td>";

            echo "</tr>";
        }
        ?>
    </table>
    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function showEditDiv(userId, username, password, address) {
            // Get the edit div element
            var editDiv = document.getElementById('edit-div');

            // Get the input fields inside the edit div
            var idInput = document.getElementById('edit-id');
            var usernameInput = document.getElementById('edit-username');
            var passwordInput = document.getElementById('edit-password');
            var addressInput = document.getElementById('edit-address');

            // Set the input field values based on the user data (you'll need to retrieve the data from your backend)
            idInput.value = userId; // Replace with actual username
            usernameInput.value = username; // Replace with actual username
            passwordInput.value = password; // Replace with actual password
            addressInput.value = address; // Replace with actual address

            // Show the edit div
            editDiv.style.display = 'block';

        }
    </script>
</body>

</html>