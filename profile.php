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
                        <button type="button" class="profile-page-item disabled">Personal Information</button>
                        <button onclick="UsernameUdate()" type="button" class="profile-page-item">Update Username</button>
                        <button onclick="PictureUpdate()" type="button" class="profile-page-item">Update Profile Picture</button>
                        <button type="button" class="profile-page-item disabled">Security Settings</button>
                        <button onclick="EmailUdate()" type="button" class="profile-page-item">Update E-Mail Address</button>
                        <button onclick="PasswordUdate()" type="button" class="profile-page-item">Update Password</button>
                        <button type="button" class="profile-page-item disabled">Social Media</button>
                        <button onclick="SocialUdate()" type="button" class="profile-page-item">Link Social Media Accounts</button>
                    </nav>
                </menu>
                <div class="profile-page-intr" id="updateUsername" style="display: block;">
                    <h2>Update Username</h2>
                    <form class="profile-page-intr-input-content" id="profile-page-intr-img">
                        <div class="profile-page-intr-input">
                            <p>Harlex</p>
                            <input type="text" placeholder="New Username">
                        </div>
                        <div class="profile-page-btn">
                            <button type="button" class="profile-page-save">Save</button>
                        </div>
                    </form>
                </div>
                <div class="profile-page-intr" id="updateProfilePicture">
                    <h2>Update Profile Picture</h2>
                    <div class="profile-page-intr-img" id="profile-page-intr-img">
                        <img class="profile-intr-img" id="profile-image" src="assets/img/SerhanBakir.jpg" alt="">
                        <form class="file-input-content">
                            <input type="file" name="file-input" id="file-input" class="file-input" accept="image/jpeg, image/png, image/jpg, image/webp, image/gif">
                            <label class="file-label" for="file-input">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" class="svg-inline--fa fa-upload fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                                </svg>
                                <span>Upload Photo</span>
                            </label>
                        </form>
                    </div>
                    <div class="profile-page-btn">
                        <button type="button" class="profile-page-save">Save</button>
                    </div>
                </div>
                <div class="profile-page-intr" id="updateEmail">
                    <h2>Update E-Mail Address</h2>
                    <form class="profile-page-intr-input-content" id="profile-page-intr-img">
                        <div class="profile-page-intr-input flex-direction">
                            <input type="email" placeholder="Old E-Mail Address">
                            <input type="email" placeholder="New E-Mail Address">
                        </div>
                        <div class="profile-page-btn">
                            <button type="button" class="profile-page-save">Save</button>
                        </div>
                    </form>
                </div>
                <div class="profile-page-intr" id="updatePassword">
                    <h2>Update Password</h2>
                    <form class="profile-page-intr-input-content" id="profile-page-intr-img">
                        <div class="profile-page-intr-input flex-direction">
                            <input type="password" placeholder="New Password">
                            <input type="password" placeholder="New Password">
                        </div>
                        <div class="profile-page-btn">
                            <button type="button" class="profile-page-save">Save</button>
                        </div>
                    </form>
                </div>
                <div class="profile-page-intr" id="updateSocial">
                    <h2>Link Social Media Accounts</h2>
                    <form class="profile-page-intr-input-content" id="profile-page-intr-img">
                        <div class="profile-page-intr-input flex-direction">
                            <div class="profile-page-intr-social">
                                <p>Google</p>
                                <input type="text" placeholder="Google Profile Link">
                            </div>
                            <div class="profile-page-intr-social">
                                <p>Facebook</p>
                                <input type="text" placeholder="Facebook Profile Link">
                            </div>
                            <div class="profile-page-intr-social">
                                <p>Twitter</p>
                                <input type="text" placeholder="Twitter Profile Link">
                            </div>
                            <div class="profile-page-intr-social">
                                <p>Linkedin</p>
                                <input type="text" placeholder="Linkedin Profile Link">
                            </div>
                            <div class="profile-page-intr-social">
                                <p>Github</p>
                                <input type="text" placeholder="Github Profile Link">
                            </div>
                            <div class="profile-page-intr-social">
                                <p>Reddit</p>
                                <input type="text" placeholder="Facebook Profile Link">
                            </div>
                        </div>
                        <div class="profile-page-btn">
                            <button type="button" class="profile-page-save">Save</button>
                        </div>
                    </form>
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