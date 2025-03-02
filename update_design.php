

<?php 

include("connection.php");


$id = $_GET['id'];
$query = "SELECT * FROM FORM where id = '$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centered Form Example</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet"
  > 
  <style>
    body{
        background-color : "red";
    }
    
  </style>

</head>
<body>
  <div class="container vh-60 d-flex justify-content-center align-items-start">
    <div class="card shadow p-4 mt-4" style="width: 100%; max-width: 400px;">
      <h3 class="text-center mb-4">Update Form</h3>
      <form  action = "#" method = "POST">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" value="<?php  echo $result['fname']; ?>" class="form-control" id="firstNam" name="fname" required>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" value="<?php  echo $result['lname']; ?>" class="form-control" id="lastNa" name="lname" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" value="<?php  echo $result['email']; ?>" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" value="<?php  echo $result['phone']; ?>" class="form-control" id="phoneNumber" name="phone" required>
          </div>
          <!-- Address -->
          <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control"   id="address"  name="address" row required>
            <?php 
            echo $result['address'];
            ?>
            </textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                <label class="form-check-label" for="male">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                <label class="form-check-label" for="female">Female</label>
              </div>
            </div>
          </div>



          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" value="<?php  echo $result['password']; ?>" class="form-control" id="password"  name="password" required>
          </div>
          <!-- Confirm Password -->
          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" value="<?php  echo $result['cpassword']; ?>" class="form-control" id="confirmPassword"  name="cpassword" required>
          </div>
          <!-- Submit Button -->
          <div class="input_field">
            <input type="submit"  value = "Update" class="btn btn-secondary w-100" name="update">
          </div>

          
          
        
         
        
        





      </form>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 

include("connection.php");

?>

<?php 

if($_POST['update'])
{

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];

 


  $query = "UPDATE form set fname = '$fname',lname = '$lname',email = '$email',phone = '$phone',address = '$address',gender = '$gender',password = '$password',cpassword='$cpassword'   WHERE id = '$id' ";
  $data = mysqli_query($conn,$query);
  if($data){
    echo "<script> alert('Record Updated')</script>";
    ?>

    <meta http-equiv = "refresh" content = "0; url = http://localhost/Practice/display.php" />
    <?php
  }

  else{
    echo "Failed";
  }
}
?>