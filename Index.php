<?php
include "Conn.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!---------------------------------------------------->
    <!--//todo-------------------------------INTRO-->
    <!---------------------------------------------------->
    <meta charset="utf-8">
    <meta name="author" content="Hazem-AbdElgawad">
    <meta name="description" content="TASK-05">
    <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Shortcut icon" href="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--//?------------------------------------------------------------( Bootstrap )--------->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!--?----------------------------------------------------------------------------------->
    <title>TASK-05</title>
    <link rel="stylesheet" href="./Style.css?v=<?php echo time(); ?>"><!--//*-----"CSS File"-->
</head>
<!-------------------------------------------->
<!--//todo------------------------------My Code-->
<!-------------------------------------------->

<body>
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>CRUD</h2>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-info add-new" onclick="window.location.href='insert.php'"><i class="fa fa-plus"></i> Add New</button>

                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="id">ID</th>
                            <th class="name">Name</th>
                            <th class="email">Email</th>
                            <th class="phone">Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `t-crud`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td class="id"><?php echo $row["id"] ?></td>
                                <td class="name"><?php echo $row["Name"] ?></td>
                                <td class="email"><?php echo $row["Email"] ?></td>
                                <td class="phone"><?php echo $row["Phone"] ?></td>
                                <td>
                                    <a href="Update.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="Delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>