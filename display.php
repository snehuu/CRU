
<?php


include("connection.php");
 ?>                                 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">User Data</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Gender</th>
                    
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>Operation</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php

$query = "SELECT * FROM FORM";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total != 0){

    
    
    
    while($result = mysqli_fetch_assoc($data)){
        
        echo "<tr>
                                 <td>" . $result['id'] . "</td>
                                <td>" . $result['fname'] . "</td>
                                <td>" . $result['lname'] . "</td>
                                <td>" . $result['email'] . "</td>
                                <td>" . $result['phone'] . "</td>
                                <td>" . $result['address'] . "</td>
                                <td>" . $result['gender'] . "</td>
                                <td>" . $result['password'] . "</td>
                                <td>" . $result['cpassword'] . "</td>
                                <td> <a href='update_design.php?id=$result[id]'>Update</a> || 
                                <a href='delete.php?id=$result[id]'>Delete</a>
                                
                                </td>
                              </tr>";

    }
}
else{
    "No records found";
}



                
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS (optional, for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
