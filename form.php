<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
        <a class="navbar-brand" href="form.php">Form Page</a>
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
                <li class="nav-item"><a class="nav-link" href="login.php"><?php if (!isset($_SESSION["email"])){
                        echo "Login";
                    }else{
                        echo "Dashboard";
                    }
                    ?></a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Registration Form</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="id">NID</label>
                <input type="text" class="form-control" id="id" placeholder="Enter your NID Number">
            </div>
            <div class="form-group">
                <label for="vehicleNo">Vehicle No</label>
                <input type="text" class="form-control" id="vehicleNo" placeholder="Enter vehicle number">
            </div>
            <div class="form-group">
                <label for="chassisNo">Chassis No</label>
                <input type="text" class="form-control" id="chessNo" placeholder="Enter Chassis number">
            </div>
            <div class="form-group">
                <label for="presentAddress">Present Address</label>
                <textarea class="form-control" id="presentAddress" rows="3"
                    placeholder="Enter your present address"></textarea>
            </div>
            <div class="form-group">
                <label for="permanentAddress">Permanent Address</label>
                <textarea class="form-control" id="permanentAddress" rows="3"
                    placeholder="Enter your permanent address"></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Passport Size Photo</label>
                <input type="file" class="form-control-file" id="photo">
            </div>
            <div class="form-group">
                <label for="nidCopy">NID Soft Copy</label>
                <input type="file" class="form-control-file" id="nidCopy">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br>
        </form>
    </div>

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
</body>

</html>