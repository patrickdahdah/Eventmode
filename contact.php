<?php

$pagename = 'contact';
// if(isset($_POST["submit"])) {
//     // $to = "eventmode@gmail.com";
//     //
//     // $name = $_POST['name'];
//     // $email = $_POST['email'];
//     // $subject = $_POST['subject'];
//     // $message = $_POST['message'];
//     //
//     // $content = '
//     // <html>
//     //     <head>
//     //           <title>Contact Form Eventmode</title>
//     //     </head>
//     //     <body style="color: #000">
//     //           <p><b>Name: </b>'.$name.'</p>
//     //           <p><b>Email: </b>'.$email.'</p>
//     //           <p><b>Subject: </b>'.$subject.'</p>
//     //           <p><b>Message: </b>'.$message.'</p>
//     //     </body>
//     // </html>';
//     //
//     // $headers = "MIME-Version: 1.0" . "\r\n";
//     // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//     // $headers .= 'From: <'.$email.'>' . "\r\n";
//     // $success = mail($to,$subject,$content,$headers);
//     // if(!$success) {
//     //     $errorMessage = error_get_last()['message'];
//     // }
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EVENTMODE</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/hamburgers.css">
    </head>
    <body>
        <?php include ('ssi/header.php') ?>
        <div class="container-fluid d-none d-xl-block">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="top-banner">
                        <div class="banner-contact-slide text-center bg_img" style="background-image: url('img/contact_banner.png')">
                            <div class="container-fluid h-100">
                                <div class="row justify-content-center h-100">
                                    <div class="col-12 font_white">
                                        <div class="position-absolute center-absolute">
                                            <div class="weight_700 d-block d-sm-none">
                                                <h5>WE ARE READY</h5>
                                                <h2>LET'S TALK</h2>
                                            </div>
                                            <div class="weight_700 d-none d-sm-block d-md-none">
                                                <h5>WE ARE READY</h5>
                                                <h2>LET'S TALK</h2>
                                            </div>
                                            <div class="weight_700 d-none d-md-block">
                                                <h3>WE ARE READY</h3>
                                                <h1>LET'S TALK</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-block d-xl-none">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="top-banner">
                        <div class="banner-contact-slide text-center bg_img" style="background-image: url('img/contact_banner-devices.png')">
                            <div class="container-fluid h-100">
                                <div class="row justify-content-center h-100">
                                    <div class="col-12 font_white">
                                        <div class="position-absolute center-absolute">
                                            <div class="weight_700 d-block d-sm-none">
                                                <h5>WE ARE READY</h5>
                                                <h2>LET'S TALK</h2>
                                            </div>
                                            <div class="weight_700 d-none d-sm-block d-md-none">
                                                <h5>WE ARE READY</h5>
                                                <h2>LET'S TALK</h2>
                                            </div>
                                            <div class="weight_700 d-none d-md-block">
                                                <h3>WE ARE READY</h3>
                                                <h1>LET'S TALK</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid body-bg">
            <div class="row">
                <div class="container-fluid pricing_contact_padding_top pricing_contact_padding_bottom d-none d-lg-block">
                    <div class="row h-100">
                        <div class="container h-100">
                            <div class="row justify-content-center h-100">
                                <div class="col-11">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="w-75 contact-form">
                                                <form action="contact.php" method="POST" id="contact-form">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h2 class="weight_700 mb-3 font_black">CONTACT US</h2>
                                                            <p class="font_black">Your name</p>
                                                            <input name="name" type="text" class="input pl-2 py-2 mb-3 w-100 alpha form-input" data-name="name">
                                                            <p class="font_black">Your email</p>
                                                            <input name="email" type="text" class="input pl-2 py-2 mb-3 w-100 mail form-input" data-name="email">
                                                            <p class="font_black">Subject</p>
                                                            <input name="subject" type="text" class="input pl-2 py-2 mb-3 w-100 alpha form-input" data-name="subject">
                                                            <p class="font_black">Your Message</p>
                                                            <textarea name="message" class="textarea pl-2 py-2 w-100 alpha form-input" data-name="message"></textarea>
                                                            <div class="g-recaptcha float-right mb-2" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ" ></div>
                                                            <a href="#" class="button submit primary font_white float-right">SEND</a>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <p class="error-msg text-center"></p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h2 class="weight_700 mb-3 font_black">CONTACT INFO</h2>
                                            <div class="row mb-4">
                                                <div class="col-auto align-self-center">
                                                    <img src="img/email.png" class="contact-icons h-auto">
                                                </div>
                                                <div class="col">
                                                    <p class="mb_n5">Email us</p>
                                                    <a href="mailto: eventmode@gmail.com" class="weight_700">eventmode@gmail.com</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto align-self-center">
                                                    <img src="img/phone.png" class="contact-icons h-auto">
                                                </div>
                                                <div class="col">
                                                    <p class="mb_n5">Call us</p>
                                                    <a href="tel:+1 (786) 651 63 51" class="weight_700">+1 (786) 651 63 51</a>
                                                </div>
                                            </div>
                                            <div class="b_0 position-absolute">
                                                <div class="row">
                                                    <div class="col-auto align-self-center">
                                                        <div class="rounded-circle d-inline-block position-relative contact-support">
                                                            <img src="img/support_large.png" class="position-absolute center-absolute h-auto w-75">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="weight_700 mb-2">Support</h6>
                                                        <p>Facebook Pixel integration allows you to build and promote your event using social platform in the world. Build a look-alike audience for your event with just a few clicks!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pricing_contact_padding_top padding_sections d-block d-lg-none">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <h2 class="weight_700 mb-3 font_black text-center">CONTACT INFO</h2>
                            <div class="row mb-4">
                                <div class="col-auto align-self-center">
                                    <img src="img/email.png" class="h-auto contact-icons">
                                </div>
                                <div class="col-auto">
                                    <p class="mb_n5">Email us</p>
                                    <a href="mailto: eventmode@gmail.com" class="weight_700">eventmode@gmail.com</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <img src="img/phone.png" class="h-auto contact-icons">
                                </div>
                                <div class="col-auto">
                                    <p class="mb_n5">Call us</p>
                                    <a href="tel:+1 (786) 651 63 51" class="weight_700">+1 (786) 651 63 51</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid padding_sections d-block d-lg-none">
                    <div class="row justify-content-center">
                        <div class="col-10 contact-form">
                            <form action="contact.php" method="POST" id="contact-form">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="weight_700 mb-3 font_black text-center">CONTACT US</h2>
                                        <p class="font_black">Your name</p>
                                        <input name="name" type="text" class="input pl-2 py-2 mb-3 w-100 alpha form-input" data-name="name">
                                        <p class="font_black">Your email</p>
                                        <input name="email" type="text" class="input pl-2 py-2 mb-3 w-100 mail form-input" data-name="email">
                                        <p class="font_black">Subject</p>
                                        <input name="subject" type="text" class="input pl-2 py-2 mb-3 w-100 alpha form-input" data-name="subject">
                                        <p class="font_black">Your Message</p>
                                        <textarea name="message" class="textarea pl-2 py-2 w-100 alpha form-input" data-name="message"></textarea>
                                        <div class="g-recaptcha mb-2" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>
                                        <a href="#" class="button submit primary font_white float-right">SEND</a>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <p class="error-msg text-center"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pricing_contact_padding_bottom d-block d-lg-none">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <div class="rounded-circle d-inline-block position-relative contact-support">
                                        <img src="img/support_large.png" class="position-absolute center-absolute h-auto w-75">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto text-center">
                                    <h6 class="weight_700 mb-2">Support</h6>
                                    <p>Facebook Pixel integration allows you to build and promote your event using social platform in the world. Build a look-alike audience for your event with just a few clicks!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include ('ssi/footer.php') ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            var errors_box = [];
            var errors;
            function empty() {
                errors_box.length = 0;
            }

            function checkAlpha (str) {
                var spaceCount = (str.split(" ").length - 1);
                if((/^[a-zA-Z() ]+$/.test(str)) == true) {
                    return true;
                }
            }
            function checkMail (email) {
                const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
            function validateForm() {
                empty();
                 var inputsAll = $('.contact-form').find('.form-input');
                 inputsAll.each(function(){
                     if($(this).hasClass('alpha')) {
                         if(checkAlpha($(this).val()) != true) {
                             errors_box.push($(this).attr('data-name'));
                         }
                     }
                     if($(this).hasClass('mail')) {
                         if(checkMail($(this).val()) != true) {
                             errors_box.push($(this).attr('data-name'));
                         }
                     }
                 })
                 var to_print = '';
                 if(errors_box.length > 0) {
                     if(errors_box.length == 1) {
                         to_print += 'Please enter a valid ' + errors_box[0];
                     }
                     if(errors_box.length == 2) {
                         to_print += 'Please enter a valid ' + errors_box[0] + ' and '+ errors_box[1];
                     }
                     if(errors_box.length == 3) {
                         to_print += 'Please enter a valid ' + errors_box[0] + ', '+ errors_box[1] + ',and ' + errors_box[2];
                     }
                     if(errors_box.length == 4) {
                         to_print += 'Please enter a valid ' + errors_box[0] + ', '+ errors_box[1] + ', ' + errors_box[2] + ', and ' + errors_box[3];
                     }
                 }
                 else {
                     return true;
                 }
                 $(".error-msg").html(to_print);
            }
            $('.alpha').keyup(function(){
                if(checkAlpha($(this).val()) != true){
                    $(this).addClass('warning');
                }
                else {
                    $(this).removeClass('warning');
                }
            });
            $('.mail').keyup(function(){
                if(checkMail($(this).val()) != true){
                    $(this).addClass('warning');
                }
                else {
                    $(this).removeClass('warning');
                }
            });
            $('.submit').click(function(e){
                e.preventDefault();
                if(validateForm()) {
                    $("#contact-form").submit();

                }
                else {
                    if(errors_box.length == 1) {
                        to_print += 'Please enter a valid ' + errors_box[0];
                    }
                    if(errors_box.length == 2) {
                        to_print += 'Please enter a valid ' + errors_box[0] + ' and '+ errors_box[1];
                    }
                    if(errors_box.length == 3) {
                        to_print += 'Please enter a valid ' + errors_box[0] + ', '+ errors_box[1] + ',and ' + errors_box[2];
                    }
                    if(errors_box.length == 4) {
                        to_print += 'Please enter a valid ' + errors_box[0] + ', '+ errors_box[1] + ', ' + errors_box[2] + ', and ' + errors_box[3];
                    }
                }
            });
            $('#contact-form').submit(function(e){
                e.preventDefault();
                var form = $(this);
                var serializedData = form.serialize();
                $.ajax({
                    type: "post",
                    url: "contact-form.php",
                    data: serializedData,
                    success: function(response) {
                        $(".error-msg").html("Message sent succesfully!");
                    }
                });
            });

        </script>
    </body>
</html>
