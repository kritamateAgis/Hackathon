<!DOCTYPE html>
<html lang="en">

<head>
    <title>Campaign</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url("wayy.jpg");
            opacity: 0.7;
        }

        .jumbotron {
            background-color: gray;
            color: white;
        }

        .navbar {
            margin-bottom: 0px;
        }

        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: normal;
            width: 50px;
        }

        h2 {
            color: black;
            font-size: 30px;
        }

        h3 {
            color: black;
            font-size: 30px;
        }

        .btn-info {
            font-size: 15px;
        }

        .btn-danger {
            font-size: 15px;
        }

        .btn-success {
            font-size: 15px;
        }

        textarea {
            height: 300px;
            width: 1200px;
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

    <div class="jumbotron text-center"><br><br><br>
        <p style="font-size: 72px;">Find new friends</p><br><br><br>
    </div>


    <div class="container">
        <form action="/action_page.php">
            <h2>Write about yourself!<br><br><textarea type="text" name="write" value="What's on your mind?"></textarea>
            </h2>
            <br>
           <br>
            <div class="Button">
                <a href=" " target="_blank" class="btn btn-info" role="button">Post</a>
            </div>
            <br>
            <br>
            



        </form>



    </div>

</body>

</html>