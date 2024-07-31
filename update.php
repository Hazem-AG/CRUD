<?php
include "Conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
   $Name = $_POST['Name'];
   $Phone = $_POST['Phone'];
   $Email = $_POST['Email'];


   $sql = "UPDATE `t-crud` SET `Name`='$Name',`Email`='$Email',`Phone`='$Phone' WHERE  id = $id";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=Data updated successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>
<!doctype html>
<html lang="en">

<head>
   <!---------------------------------------------------->
   <!--todo-------------------------------INTRO-->
   <!---------------------------------------------------->
   <meta charset="utf-8">
   <meta name="author" content="Hazem-AbdElgawad">
   <meta name="description" content="TASK-05">
   <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="Shortcut icon" href="">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--?------------------------------------------------------------( Bootstrap )--------->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <!--?----------------------------------------------------------------------------------->
   <title>TASK-05</title>
   <link rel="stylesheet" href="./Style.css?v=<?php echo time(); ?>"><!--*--"CSS File"-->
</head>

<body>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Edit User Information</h3>
         <p class="text-muted">Click update after changing any information</p>
      </div>
      <?php
      $sql = "SELECT * FROM `t-crud` WHERE id = $id LIMIT 1";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      ?>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Name:</label>
                  <input type="text" class="form-control" name="Name" value="<?php echo $row['Name'] ?>">
               </div>

               <div class="col">
                  <label class="form-label">Phone:</label>
                  <input type="text" class="form-control" name="Phone" value="<?php echo $row['Phone'] ?>">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="Email" value="<?php echo $row['Email'] ?>">
            </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Update</button>
               <a href="Index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>