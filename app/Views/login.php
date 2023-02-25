<?php

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&amp;family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/all.css">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Login</title>
</head>

<body>
    <style>
        body {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            background-color: #0093f6;
        }

        #wrapper {
            background: white;
            width: 400px;
            margin: 1px auto;
            border-radius: 4px;
            text-align: center;
            margin-top: 15%;
        }

        #wrapper form h2 {
            padding-top: 25px;
            padding-bottom: 10px;
            font-size: 19px;
        }

        #wrapper form .text_style input {
            width: 85%;
            min-height: 25px;
            padding: 10px 10px;
            margin-bottom: 20px;
        }

        #wrapper form .text_style input:focus {
            outline-color: #0093f6;
        }

        #wrapper form .button_style input {
            width: 85%;
            padding: 12px;
            margin-bottom: 15px;
            color: white;
            border: none;
            font-size: 15px;
            cursor: pointer;
            background: #0093f6;
            border-radius: 2px;
        }

        #wrapper form .lable_forgot_pass {
            padding-bottom: 20px;
        }

        #wrapper form .lable_forgot_pass label a {
            color: #0093f6;
        }

        .remeber_pass {
            padding: 5px;
            text-align: left;
            margin: 0px 20px 10px 20px;
        }

        p.error {
            margin: 0px;
            color: red;
            font-size: 12px;
            padding-left: 30px;
            text-align: left;
            margin-bottom: 20px;
            margin-top: -10px;
        }

        .errors ul {
            list-style: none;
            /* padding: 27px; */
            padding-left: 30px;
            margin-top: 0px;
            color: red;
            font-size: 14px;
        }

        .errors ul li {
            text-align: left;
            margin-bottom: 5px;
        }

        .error_verify {
            list-style: none;
            /* padding: 27px; */
            padding-left: 30px;
            margin-top: 0px;
            color: red;
            text-align: left;
            font-size: 14px;
            padding-bottom: 15px;
        }
        
    </style>
    <div id="wrapper">
        <?= form_open($action = 'http://localhost/CI4/public/user/login'); ?>
        <h2>ĐĂNG NHẬP HỆ THỐNG</h2>
        <div class="text_style txt_username">
            <input type=" text " name="username" placeholder="Số điện thoại đăng nhập" value="<?php echo set_value('username'); ?>">
        </div>
        <div class="text_style txt_passwords">
            <input type="password" name="password" placeholder="Mật khẩu" value="<?php echo set_value('password'); ?>">
        </div>
        <?php if (isset($validation_errors)) : ?>
            <?= $validation_errors ?>
        <?php endif; ?>
        <?php if (isset($verify_error)) : ?>
            <div class="error_verify">
                <?= $verify_error ?>
            </div>
        <?php endif; ?>
        <div class="button_style">
            <input type="submit" name="btn_login" value="Đăng nhập">
        </div>
        <div class="remeber_pass">
            <input type="checkbox" id="remeber_pass" name="remember_me" value=" ">
            <label for="remeber_pass"> Ghi nhớ tài khoản </label>
        </div>
        <div class="lable_forgot_pass">
            <label for=""><a href="">Bạn quên mật khẩu?</a></label>
        </div>
        <div class="lable_forgot_pass">
            <label for="">Bạn chưa có tài khoản:<a href=""> Đăng ký</a></label>
        </div>
        <?= form_close(); ?>
    </div>
</body>

</html>