<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Vinayak@12210471";
$database = "upgrade";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CREATE operation
if(isset($_POST['add'])) {
    $client_name = $_POST['client_name'];
    // $client_email = $_POST['client_email'];
    
    $sql = "INSERT INTO Clients (client_name) VALUES ('$client_name')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// UPDATE operation
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $client_name = $_POST['client_name'];
    // $client_email = $_POST['client_email'];
    
    $sql = "UPDATE Clients SET client_name='$client_name' WHERE client_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// DELETE operation
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM Clients WHERE client_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve client details for update operation
if(isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $sql = "SELECT * FROM Clients WHERE client_id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $client_name = $row['client_name'];
        // $client_email = $row['client_email'];
    } else {
        echo "Client not found";
        exit();
    }
}
?>

<!-- HTML form for adding or updating client -->
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .client .email{
            text-align:center;
        }
    </style>
</head>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php if(isset($_GET['edit'])) { ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <?php } ?>
    <div class="client" style="text-align:center;">Client Name <input type="text" name="client_name" value="<?php echo isset($client_name) ? $client_name : ''; ?>"><br></div>
    <!--  <div class="email" style="text-align:center;">Client Email <input type="email" name="client_email" value=" ?>"><br></div>  -->
    <?php if(isset($_GET['edit'])) { ?>
    <input type="submit" name="update" value="Update Client">
    <?php } else { ?>
    <input type="submit" name="add" value="Add Client">
    <?php } ?>
</form>

<!-- List of clients with update and delete links -->
<?php
// READ operation
$sql = "SELECT * FROM Clients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Client List</h2>";
    echo "<table border='1'>";
    echo "<th>ID</th><th>Name</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["client_id"]."</td><td>". $row["client_name"]."</td><td>";
        echo "<td><a href='?edit=".$row["client_id"]."'>Update</a> | <a href='?delete=".$row["client_id"]."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
