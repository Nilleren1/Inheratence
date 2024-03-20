<?php
require_once 'repository.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Index</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Users</h1>
                <br>
                <?php foreach ($users as $user) : ?>
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="<?php echo $user->getImageSrc(); ?>" class="card-img-top" alt="User Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $user->getUsername(); ?></h5>
                            <p class="card-text"><?php echo $user->getEmail(); ?></p>
                            <br>
                            <p class="card-text font-italic"><?php echo $user->__toString(); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col">
                <h1>Admins</h1>
                <br>
                <?php foreach ($admins as $admin) : ?>
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="<?php echo $admin->getImageSrc(); ?>" class="card-img-top" alt="User Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $admin->getUsername(); ?></h5>
                            <p class="card-text"><?php echo $admin->getEmail(); ?></p>
                            <br>
                            <p class="card-text font-italic"><?php echo $user->__toString(); ?></p>
                            <br>
                            <p class="card-text font-weight-bold"><?php echo $admin->__toString(); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col">
                <h1>Teachers</h1>
                <br>
                <?php foreach ($teachers as $teacher) : ?>
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <img src="<?php echo $teacher->getImageSrc(); ?>" class="card-img-top" alt="User Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $teacher->getUsername(); ?></h5>
                            <p class="card-text"><?php echo $teacher->getEmail(); ?></p>
                            <br>
                            <p class="card-text font-italic"><?php echo $user->__toString(); ?></p>
                            <br>
                            <p class="card-text font-weight-bold"><?php echo $teacher->__toString(); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>