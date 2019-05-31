<!DOCTYPE html>
<html lang="en">

<head>
    <title>PostAcc</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            margin-bottom: 0px;
            opacity: 0.9;
        }
        img{
            width: 350px;
            height: 350px;

        }
        .formprofile{
            margin-top: 6%;
        }
        .container-fluid{
            font-size: 15px;
        }
        body{
            background-image: url(".jpg");
            font-size: 20px;          

        }
        .jumbotron{
            background-color: pink;
            opacity: 0.9;
        }
        center{
            background-color: white;
            opacity: 0.9;
        }
       

    </style>

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <button class="btn btn-danger navbar-btn">SOS</button>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <p style="font-size: 72px;">Appointment</p>
        <p style="font-size: 20px">คนสร้างpost</p>
        
    </div>
    </form>
    </div>
    <center><h2>Your profile</h2></center>
<div class ="col-md-4">

    <br>
    <center><img src="student.jpg" alt="student"></center>
    <br>
    <br>
    <br>
</div>
<div class ="col-md-4 formprofile">
    <form action="/action_page.php">
        <center>Name:<br>
        <input type="text" name="Name" value=" ">
        <br>
        Student ID:<br>
        <input type="number" name="Student ID" value=" ">
        <br>
        Phone number:<br>
        <input type="number" name="Phone number" value=" ">
        <br>
        Department:<br>
        <input type="text" name=" Department" value=" ">
        <br>
        <br>
        <div class="Button">
                <a href=" " target="_blank" class="btn btn-info" role="button">Submit</a>
            </div>
       
    </form>
    </div>
    <div class ="col-md-4 formprofile">
        <center><p>map</p></center>
        </div>    
</body>

</html>