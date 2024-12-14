<?php
session_start();
include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="assets/img/icon/carfusion.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <style>
        body {
            color: #3A3A3C;
            background: #1E3B29;
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-control,
        .form-control:focus,
        .input-group-addon {
            border-color: #FCEBD1;
        }

        .form-control,
        .btn {
            border-radius: 5px;
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:visited {
            background-color: #B09A51 !important;
        }

        .signup-form {
            width: 390px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .signup-form form {
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            background-color: #FCEBD1;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 1px;
        }

        .signup-form h2 {
            color: #1E3B29;
            font-weight: bold;
            margin-top: 0;
            text-align: center;
        }

        .signup-form p {
            text-align: center;
            color: #1E3B29;
        }

        .signup-form hr {
            border: 1px solid #B09A51;
        }

        .signup-form .form-group {
            margin-bottom: 20px;
        }

        .signup-form label {
            font-weight: normal;
            font-size: 13px;
        }

        .signup-form .form-control {
            min-height: 38px;
            box-shadow: none !important;
            background-color: #E1CC95;
            color: white;
            border: none;
        }

        .signup-form .input-group-addon {
            max-width: 42px;
            text-align: center;
            color: white;
            background-color: #3498db;
            border: none;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            border: none;
            width: 100%;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #0e6caa;
            outline: none;
        }

        .signup-form a {
            color: #fff;
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: #3498db;
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;
        }

        .signup-form .fa {
            font-size: 21px;
        }

        .signup-form .fa-paper-plane {
            font-size: 18px;
        }

        .signup-form .fa-check {
            color: #fff;
            left: 17px;
            top: 18px;
            font-size: 7px;
            position: absolute;
        }

        .text-center a {
            color: #3498db;
        }

        .sosmed {
            height: auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .sosmed-items {
            color: #fff;
            width: 40px;
            height: 40px;
            font-size: 15px;
            margin-top: 3px;
            margin: 5px 5px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sosmed-items:hover {
            background-color: white;
        }

        .bg1 {
            background-color: #3b5998
        }

        .bg1:hover {
            color: #3b5998
        }

        .bg2 {
            background-color: #1da1f2
        }

        .bg2:hover {
            color: #1da1f2
        }

        .bg3 {
            background-color: #ea4335
        }

        .bg3:hover {
            color: #ea4335
        }

        .down {
            margin-top: 30px;
        }

        .input-group-addon {
            background-color: #B09A51 !important;
        }

        .social-login-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 50px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .google {
            background-color: white;
            color: #000;
            border: 1px solid #ddd;
        }

        .google:hover {
            background-color: #f7f7f7;
        }
    </style>
    <title>Log In</title>
</head>

<body>
    <div class="signup-form">
        <form action="" method="post">
            <h2>Log In</h2>
            <p>Please enter your account correctly!</p>
            <hr>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="u" placeholder="Username" id="username"
                        required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" id="password" name="p" placeholder="Password"
                        required="required">
                </div>
            </div>
            <div class="form-group text-left">

            </div>
            <div class="form-group text-right">
                <label class="forget"><a href="#">Forget Password?</a></label>
            </div>
            <button class="btn btn-primary btn-lg" name="login" id="submit">Login</button>
            <br><br>
            <!-- <p class="c text-center">Or</p>
            <div class="sosmed">
                <div class="sosmed-items bg3"><i class="fa fa-google"></i></div>
                <div class="sosmed-items bg1"><i class="fa fa-facebook"></i></div>
                <div class="sosmed-items bg2"><i class="fa fa-twitter"></i></div>
            </div> -->
            <div align="center" style="color: #BA9F38;"><strong>Or</strong></div>
            <div align="center" style="margin-top: 14px;" classs="sosmed">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 25 25" fill="none" style="margin-right: 10px;" >
                    <path d="M23.7666 9.6498H22.8V9.6H12V14.4H18.7818C17.7924 17.1942 15.1338 19.2 12 19.2C8.0238 19.2 4.8 15.9762 4.8 12C4.8 8.0238 8.0238 4.8 12 4.8C13.8354 4.8 15.5052 5.4924 16.7766 6.6234L20.1708 3.2292C18.0276 1.2318 15.1608 0 12 0C5.373 0 0 5.373 0 12C0 18.627 5.373 24 12 24C18.627 24 24 18.627 24 12C24 11.1954 23.9172 10.41 23.7666 9.6498Z" fill="#FFC107" />
                    <path d="M1.38361 6.4146L5.32621 9.306C6.39301 6.6648 8.97661 4.8 12 4.8C13.8354 4.8 15.5052 5.4924 16.7766 6.6234L20.1708 3.2292C18.0276 1.2318 15.1608 0 12 0C7.39081 0 3.39361 2.6022 1.38361 6.4146Z" fill="#FF3D00" />
                    <path d="M12 24C15.0996 24 17.916 22.8138 20.0454 20.8848L16.3314 17.742C15.0861 18.689 13.5645 19.2012 12 19.2C8.87882 19.2 6.22862 17.2098 5.23022 14.4324L1.31702 17.4474C3.30302 21.3336 7.33622 24 12 24Z" fill="#4CAF50" />
                    <path d="M23.7666 9.64978H22.8V9.59998H12V14.4H18.7818C18.3085 15.7298 17.456 16.8919 16.3296 17.7426L16.3314 17.7414L20.0454 20.8842C19.7826 21.123 24 18 24 12C24 11.1954 23.9172 10.41 23.7666 9.64978Z" fill="#1976D2" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 25 25" fill="none">
                    <path d="M23 11.5C23 5.14877 17.8512 0 11.5 0C5.14877 0 0 5.14877 0 11.5C0 17.2399 4.20541 21.9976 9.70312 22.8603V14.8242H6.7832V11.5H9.70312V8.96641C9.70312 6.08422 11.42 4.49219 14.0469 4.49219C15.3051 4.49219 16.6211 4.7168 16.6211 4.7168V7.54687H15.171C13.7424 7.54687 13.2969 8.43336 13.2969 9.34285V11.5H16.4863L15.9765 14.8242H13.2969V22.8603C18.7946 21.9976 23 17.24 23 11.5Z" fill="#1877F2" />
                    <path d="M15.9765 14.8242L16.4863 11.5H13.2969V9.34285C13.2969 8.43327 13.7424 7.54688 15.171 7.54688H16.6211V4.7168C16.6211 4.7168 15.3051 4.49219 14.0468 4.49219C11.42 4.49219 9.70312 6.08422 9.70312 8.96641V11.5H6.7832V14.8242H9.70312V22.8603C10.2975 22.9534 10.8983 23.0002 11.5 23C12.1017 23.0002 12.7025 22.9535 13.2969 22.8603V14.8242H15.9765Z" fill="white" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 25 25" fill="none" style="margin-left: 6px;">
                    <mask id="mask0_1_301" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <path d="M0 0H24V24H0V0Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_1_301)">
                        <path d="M18.9 1.12463H22.5806L14.5406 10.3372L24 22.8755H16.5943L10.7897 15.2726L4.15543 22.8755H0.471429L9.07029 13.0183L0 1.12635H7.59429L12.8331 8.07435L18.9 1.12463ZM17.6057 20.6675H19.6457L6.48 3.21778H4.29257L17.6057 20.6675Z" fill="#1E3B29" />
                    </g>
                </svg>

                <!-- <button class="social-login-button google">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" style="margin-right: 10px;">
                        <path d="M23.7666 9.6498H22.8V9.6H12V14.4H18.7818C17.7924 17.1942 15.1338 19.2 12 19.2C8.0238 19.2 4.8 15.9762 4.8 12C4.8 8.0238 8.0238 4.8 12 4.8C13.8354 4.8 15.5052 5.4924 16.7766 6.6234L20.1708 3.2292C18.0276 1.2318 15.1608 0 12 0C5.373 0 0 5.373 0 12C0 18.627 5.373 24 12 24C18.627 24 24 18.627 24 12C24 11.1954 23.9172 10.41 23.7666 9.6498Z" fill="#FFC107" />
                        <path d="M1.38361 6.4146L5.32621 9.306C6.39301 6.6648 8.97661 4.8 12 4.8C13.8354 4.8 15.5052 5.4924 16.7766 6.6234L20.1708 3.2292C18.0276 1.2318 15.1608 0 12 0C7.39081 0 3.39361 2.6022 1.38361 6.4146Z" fill="#FF3D00" />
                        <path d="M12 24C15.0996 24 17.916 22.8138 20.0454 20.8848L16.3314 17.742C15.0861 18.689 13.5645 19.2012 12 19.2C8.87882 19.2 6.22862 17.2098 5.23022 14.4324L1.31702 17.4474C3.30302 21.3336 7.33622 24 12 24Z" fill="#4CAF50" />
                        <path d="M23.7666 9.64978H22.8V9.59998H12V14.4H18.7818C18.3085 15.7298 17.456 16.8919 16.3296 17.7426L16.3314 17.7414L20.0454 20.8842C19.7826 21.123 24 18 24 12C24 11.1954 23.9172 10.41 23.7666 9.64978Z" fill="#1976D2" />
                    </svg>
                    Log In with Google
                </button> -->
            </div>
            <div class="form-group text-right down">
                <label class="forget"> Don't have an account? <a href="signup.php">Sign Up</a></label>
            </div>

        </form>
        <?php
        if (isset($_POST['login'])) {
            $ambil = $db->query("SELECT * FROM tbl_pelanggan WHERE username = '" . $_POST['u'] . "' AND password = '" . $_POST['p'] . "'");
            $yangcocok = $ambil->num_rows;
            if ($yangcocok == 1) {
                $akun = $ambil->fetch_assoc();
                $_SESSION['pelanggan'] = $akun;

                echo "<script type='text/javascript'>swal('Selamat', 'Anda Berhasil Login', 'success');</script>";
                echo "<meta http-equiv='refresh' content='1;url=checkout.php'>";
            } else {
                echo "<script type='text/javascript'>swal('Login Gagal!', 'Username Dan Password Anda Salah', 'info');</script>";
            }
        }
        ?>
        <a href="index.php"><button class="btn btn-danger" style="background-color: transparent; border: 2px solid #BA9F38; color: #BA9F38; font-weight: bold; border-radius: 5px; padding: 10px 20px; margin-top: 29px;">Home</button></a>
        <a href="admin/login-admin.php"><button type="button" class="btn btn-primary" style="padding: 10px 20px; margin-top: 39px;">Admin</button></a>
    </div>
</body>

</html>