<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "aduan");
$query = "SELECT * FROM aduan_tb ORDER BY Aduan_ID DESC";
$result = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    <title>Aduan Bernama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/app.css" rel="stylesheet">
    <script type="text/javascript">
        var onloadCallback = function() {
        };

        var response = grecaptcha.getResponse();
        if(response.length == 0) {
            //reCaptcha not verified
            alert("Please verify you are humann!");
            return false;
        }

    </script>
</head>
<body>
<div class="pr-content-wrapper">
        <div class="pr-overlay"></div>
        <div class="pr-content">

            <header class="pr-navigation container">
                <a href="" class="pr-logo">
                    <div></div>
                </a>
                <nav class="pr-menu">
                    <ul>
                        <li><a href='login.php'>Sign In</a></li>
                    </ul>
                </nav>
            </header>

            <section class="pr-main pr-home-content container">
                <h1 class="pr-fadein">Bernama Aduan</h1>
                <p>Sila tekan butang di bawah untuk mengisi aduan anda ....</p>
                <br>
                <div class="page-content page-container" id="page-content">
                    <div class="padding">
                        <div class="row container d-flex justify-content-center">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@fat">Isi Aduan</button>
                                <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">Butir Aduan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body"><grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;"><div data-grammarly-part="highlights" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 1px; left: 1px; width: 0px; height: 0px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; top: 0px; left: 0px;"><div style="height: 815px; width: 1440px;"></div><div style="position: absolute; top: 0px; left: 0px; height: 815px; width: 1440px;"></div></div></div></div><div data-grammarly-part="button" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 1px; left: 1px; width: 0px; height: 0px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; transform: translate(-100%, -100%); top: -14px; left: -22px; pointer-events: all;"><div style="display: flex; flex-direction: row;"><div class="_3-ITD"><div class="_5WizN aN9_b _1QzSN"><div class="_3YmQx"><div title="Protected by Grammarly" class="_3QdKe">&nbsp;</div></div></div></div></div></div></div></div></grammarly-extension>
                                            <form action='insert.php' method='post' enctype='multipart/form-data'>
                                                <div class="form-group">
                                                <label for="Nama_Pengadu" class="col-form-label">Nama Pengadu:</label>
                                                    <input type="text" class="form-control" name="Nama_Pengadu" placeholder='Isi nama anda' required>
                                                </div>
                                                <div class="form-group">
                                                <label for="Aduan_Info" class="col-form-label">Aduan:</label>
                                                    <textarea class="form-control" id="form-aduan" name="Aduan_Info" placeholder='Isi aduan anda' required></textarea>
                                                </div>
                                                <div class="form-group">
                                                <label for="No_Tel" class="col-form-label">Nombor Telefon:</label>
                                                    <input type="tel" class="form-control" name="No_Tel" pattern="\+?6?(?:01[0-46-9]\d{7,8}|0\d{8})" placeholder='Isi nombor anda seperti: 0123456789' required>
                                                </div>
                                                <div class="form-group">
                                                <label for="Email" class="col-form-label">Email:</label>
                                                    <input type="email" class="form-control" name="Email" placeholder='Isi email anda' required>
                                                </div>
                                                <div class="g-recaptcha" id="my_captcha_form" data-sitekey="6LcAw7wiAAAAABwHXS4weO5EuyQEl5kjuC5tFDVr" required></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" value='submit' class="btn btn-success" name="submit-btn">Send message</button>
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </section>
            <div class="pr-arrow-wrapper">
                <div class="pr-arrow"></div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"async defer></script>

</body>
</html>