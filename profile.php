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
        <div class="profile-page">
            <div class="profile-page-inner">
                <menu class="profile-page-info">
                    <nav class="profile-page-nav">
                        <a href="#" class="profile-page-item">Profil Resmini Güncelle</a>
                        <a href="#" class="profile-page-item">E-Mail Adresini Güncelle</a>
                        <a href="#" class="profile-page-item">Şifreni Güncelle</a>
                    </nav>
                </menu>
                <div class="profile-page-intr">
                    <div class="profile-page-intr-img" id="profile-page-intr-img">
                        <img class="profile-intr-img" id="profile-image" src="assets/img/SerhanBakir.jpg" alt="">
                        <div class="file-input-content">
                            <input type="file" name="file-input" id="file-input" class="file-input" accept="image/jpeg, image/png, image/jpg, image/webp, image/gif">
                            <label class="file-label" for="file-input">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" class="svg-inline--fa fa-upload fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                                </svg>
                                <span>Upload Photo</span>
                            </label>
                        </div>
                    </div>
                    <div class="profile-page-intr-email" id="profile-page-intr-email">
                        <input class="email-input" type="email" placeholder="Enter Your Old E-Mail Address">
                        <input class="email-input" type="email" placeholder="Enter Your New E-Mail Address">
                    </div>
                    <div class="profile-page-intr-password" id="profile-page-intr-password">
                        <input class="password-input" type="password" placeholder="Enter Your Old Password Address">
                        <input class="password-input" type="password" placeholder="Enter Your New Password Address">
                    </div>
                </div>
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