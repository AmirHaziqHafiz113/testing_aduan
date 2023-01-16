<?php
if (!isset($_SESSION)) {
    session_start();
}
$connect = mysqli_connect("localhost", "root", "", "aduan");
$query = "SELECT * FROM aduan_tb ORDER BY Aduan_ID DESC";
$result = mysqli_query($connect, $query);

$query_service = "SELECT * FROM service";
$result_service = mysqli_query($connect, $query_service);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    <title>Aduan Bernama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/app.css" rel="stylesheet">
    <script type="text/javascript">
        var onloadCallback = function () {
        };

        var response = grecaptcha.getResponse();
        if (response.length == 0) {
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
                <img src="assets/images/logo.png" alt="homepage" class="dark-logo" />
                <h1 class="pr-fadein">Aduan</h1>
                <br>
                <div class="page-content page-container" id="page-content">
                    <form action='insert.php' method='post' enctype='multipart/form-data'>
                        <div class="form-group">
                            <label for="Nama_Pengadu" class="col-form-label">Nama
                                Pengadu:</label>
                            <input type="text" class="form-control" name="Nama_Pengadu"
                                placeholder='Isi nama anda' required>
                        </div>
                        <div class="form-group">
                            <label for="Aduan_Info" class="col-form-label">Aduan:</label>
                            <textarea class="form-control" id="form-aduan" name="Aduan_Info"
                                placeholder='Isi aduan anda' required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="No_Tel" class="col-form-label">Nombor Telefon:</label>
                            <input type="tel" class="form-control" name="No_Tel"
                                pattern="[+60]?[0-9-]+"
                                placeholder='Isi nombor anda seperti: 60123456789' required>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name="Email"
                                placeholder='Isi email anda' required>
                        </div>
                        <div class="form-group">
                            <label for="Service" class="col-form-label">Service:</label>
                            <select name="service_id" class="form-control" id="service_id">
                            <?php
                                if ($result_service) {
                                    while ($row = mysqli_fetch_assoc($result_service)) { ?>
                                        <option value="<?= $row['Service_ID'] ?>"><?= $row['Description'] ?></option>
                                    <?php }
                                }
                            ?>
                        </select>
                        </div>
                        
                        <div class="g-recaptcha" id="my_captcha_form"
                            data-sitekey="6Lc7ImcjAAAAAKtZ__d2mnC2SR8k9WeFmeQTQ-IU" required>
                        </div>
                        <button type="submit" value='submit' class="btn btn-success"
                            name="submit-btn">Send message</button>
                        <button type="button" class="btn btn-light"
                            data-dismiss="modal">Close</button>
                    </form>
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
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

</body>

</html>