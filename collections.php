<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dramatic</title>
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <?php
    include('pages/common/header.php');
    include('pages/common/rectangle.php');
    ?>

    <div class="container">
        <div class="collection">
            <div class="collection-content">
                <a href="#" class="collection-item">
                    <div class="collection-box"></div>
                    <div class="collection-title">
                        <p>Sevilenler</p>
                    </div>
                </a>
                <a href="#" class="collection-item">
                    <div class="collection-box"></div>
                    <div class="collection-title">
                        <p>Özlenenler</p>
                    </div>
                </a>
                <a href="#" class="collection-item">
                    <div class="collection-box"></div>
                    <div class="collection-title">
                        <p>Yaşananlar</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include('pages/common/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>