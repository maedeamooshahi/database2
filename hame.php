<?php
    include "db.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>تمرین دوم</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="bootstrap.css">
        <script type="text/javascript" src="bootstrap.js"></script>
        
    </head>
    <body>
        <style media="screen">
            <?php include "styles.css"; ?>
        </style>
        <div class="container">
            <div class="row justify-content-center menu">
                <div class="col-md-1 col-2">
                    <a href="vorodi.php">vorodi</a>
                </div>
                <div class="col-md-1 col-2 active">
                    <a href="hame.php">hameh</a>
                </div>
                <div class="col-md-1 col-2">
                    <a href="#">one</a>
                </div>
                <div class="col-md-1 col-2">
                    <a href="#">virayesh</a>
                </div>
            </div>
            <h3>All :</h3>
            <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Name</th>
                        <th>BirthDate</th>
                        <th>phone</th>
                        <th>Address</th>
                        <th>men or women</th>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `users` ";
                            $sql = $GLOBALS['databaseconnect']->query($sql);
                            foreach ($sql as $row) {
                        ?>
                        <tr>
                            <td>
                                <div class="row">
                                    <a class="col-8" href="yeki.php?id=<?php echo $row['user id']; ?>"><?php echo $row['name']." ".$row['family']; ?></a>
                                    <a class="col-4" href="virayesh.php?id=<?php echo $row['user id']; ?>">(edit)</a>
                                </div>
                            </td>
                            <td><?php echo $row['birthdate']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['men or women']; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
