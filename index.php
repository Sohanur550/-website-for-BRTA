<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        footer {
            background-color: #f8f9fa;
            padding: 30px 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="form.php">Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- navbar end -->

    <div class="container mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/BRTA.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="Images/BRTA_Office.jpg" class="d-block w-100" alt="Image 2">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<br> <br>
    <section class="portfolio-block website gradient" style="background: var(--bs-body-bg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 offset-lg-1 text">
                    <p style="color: rgb(0,0,0);text-align: justify;"><span style="color: rgb(32, 33, 34);">Driving license is one 
                    of the most essential documents considered while identifying a person during various national and international activities. 
                    It is the key identification document for allowing permits to an adult citizen for driving different types of motor vehicles. 
                    According to Section 3 of the Bangladesh Motor Vehicles Ordinance 1983, no one can drive on a public road without a driving license. 
                    So there is no substitute for a valid driving license for driving anywhere in the country.<br><br> <b>Fee of Learner Driving License</b></span><br><br> 
BDT.345 for any one of the motorcycles and light motor vehicles.

<br>BDT.518 for licensing a motorcycle and any light motor vehicle together.

<br><br><b>Fee of Smart Card Driving License</b>
<br>→ Professional driving license fee BDT.1680 with the 5-year renewal fee.
<br>→ Amateur driving license fee BDT.2542 with the 10-year renewal fee.
<br><br><b>Fee of International Driving License</b>
International Driving License fee BDT. 2500</p>
                </div>
                <div class="col-md-12 col-lg-5"><img width="358" height="442" src="Images/brtalogo.png" style="width: 450px;"></div>
            </div>
        </div>
    </section>

    <br> <br>
    <!-- Start: footer -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>Address: Mirpur, Section-13, Dhaka-1216 </p>
                    <p>Email: brtaoffice@gmail.com</p>
                    <p>Phone: 01797562554</p>
                </div>
                <div class="col-md-4">
                    <h5>Important Links</h5>
                    <ul>
                        <li><a href="http://www.brta.gov.bd/">BRTA Website</a></li>
                        <li><a href="https://www.facebook.com/brta.bd">BRTA Facebook Page</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Subscribe</h5>
                    <form action="subscribe.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        var email;
        $("#subscription_submit_btn").click(function() {
            email = $('#subscription_email').val();
            if (email.length < 1) {
                $('#err').empty();
                $('#err').html('<br>This field is required');
            } else {
                var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                // var validEmail = regEx.test(email);
                if (regEx.test(email)) {
                    $('#err').empty();
                    console.log(111);
                    $.ajax({
                        url: './external/footer_email.php',
                        type: 'POST',
                        data: {
                            email: email
                        },
                        success: function(data) {
                            $('#err').empty();
                            $('#err').html('<br>' + data);
                        }
                        // complete: function () {
                        //     // Schedule the next data fetch after a delay (e.g., every 5 seconds)
                        // setTimeout(fetchUserListData, 5000);
                        // }
                    });
                } else {
                    $('#err').empty();
                    $('#err').html('<br>Enter a valid email');
                }

            }

        });
    </script>
</body>

</html>