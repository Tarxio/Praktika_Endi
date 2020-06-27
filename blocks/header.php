<?php require 'auth.php'; $login = getUserLogin(); ?>
<!DOCTYPE html>
<head>
</head>
<body>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="#"></a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">ENDI</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
        <?php if ($login === null): ?>
            <a class="btn btn-sm btn-outline-secondary" href="login.php">Sign up</a>
        <?php else: ?>
            Доброй пожаловать, <?= $login ?>
            <br>
            <a class="btn btn-sm btn-outline-secondary" href="logout.php">Exit</a>
         <?php endif; ?>
        </div>
    </div>
</header>
</body>
</html>