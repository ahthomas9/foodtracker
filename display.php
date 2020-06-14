<!DOCTYPE html>
<html>
<head>
<title>Food/Allergy Tracker</title>
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery/UI library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    
    <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

    <!--FontAwesome-->
        <script src="https://use.fontawesome.com/b5f074d7a9.js"></script>
    
    <!--CSS style/Fonts-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet"> 
</head>

<body>
<!--NAVBAR-->
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
        <p class="navbar-brand"><i class="fa fa-sun-o"></i> Mock Logger App </p>
          </div>
        <ul class="nav navbar-nav navbar-left">
        <li><a href="index.html">Home</a></li>
        <li><a href="tracker.php">Food Logger</a></li>
        <li><a href="tipsntricks.html">Tips</a></li>
        </ul>
    </div>
</nav>

<!--CONTENT-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12" id="display-img">
            <h2 id="display-title">your <span style="color: #A0582D;">History</span></h2>
            <a href="#displayTxt"><h4><i class="fa fa-arrow-down" id="down"></i></h4></a>
        </div>
    </div>
    <!--DISPLAY TABLE-->
    <div class="row" id="displayTxt">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <table table-responsive>
                <tr>
                    <th>Day</th>
                    <th>Breakfast</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                    <th>Others</th>
                    <th>My Skin was/had</th>
                    <th>I was</th>
                    <th>Other Notes</th>
                </tr>
                <!--GET FROM DB-->
                <?
                        $servername = "localhost";
                        $username = "*****";
                        $password = "*****";
                        $dbname = "*****";
                        
                        // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM tracker";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output
                                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><?=$row["day"]?></td>
                    <td><?=$row["breakfast"]?></td>
                    <td><?=$row["lunch"]?></td>
                    <td><?=$row["dinner"]?></td>
                    <td><?=$row["other"]?></td>
                    <td><?=$row["skin"]?></td>
                    <td><?=$row["feel"]?></td>
                    <td><?=$row["feelother"]?></td>
                </tr>
                <?php
                }
            } else {
                echo <<<EOT
                Sorry, we don't have any of your information! Click <a href="tracker.php">here</a> to fill out some information.
                EOT;
            }
                ?>
            </table>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<!--FOOTER-->
<div class="container-fluid">
    <div class="row" id="footer">
        <div class="col-sm-12 " id="center">
            <p id="icons"><a href="http://ahthomas9.webfactional.com/"><i class="fa fa-user-circle" id="profile" title="Back to Portfolio Page"></i></a> <a href="https://github.com/ahthomas9"><i class="fa fa-code" id="profile" title="To GitHub"></i></a></p>
        </div>
    </div>
</div>
<script src="jquery.js">swingTo();</script>
</body>
</html>