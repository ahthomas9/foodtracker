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
<div class="container-fluid" id="form-bg"></div>
<div class="container-fuid" id="form-content">
    <div class="row">
        <h2 id="form-title">Yesterday, I ate...</h2>
    </div>
    <div class="row" id="form-txt">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <form action="action.php" method="POST">
                <p style="color:grey;padding-top:25px;"><small>To select multiple where applicable, ctrl+click.</small></p>
                <h4>Breakfast:</h4>
                <textarea class="form-control" name= "breakfast" id="breakfast" placeholder="What was for breakfast?" rows="3" required></textarea>
                <h4>Lunch:</h4>
                <textarea class="form-control" name="lunch" id="lunch" placeholder="And lunch?" rows="3" required></textarea>
                <h4>Dinner:</h4>
                <textarea class="form-control" name="dinner" id="dinner" placeholder="What about dinner?" rows="3" required></textarea>
                <h4>Other <small>(Snacks, desserts, drinks):</small></h4>
                <textarea class="form-control" name="other" id="other" placeholder="Anything else goes here!" rows="3" required></textarea>
            </div>
            <div class="col-sm-4" id="form2">
                <br>
                <h4>Today My Skin is/has:</h4>
                <select name="skin[]" id="skin" class="form-control" multiple="multiple" required>
                <?
                        $status = array('Itchy','Inflammed','Rough','Dry','Patchy','Hives/Blisters','Sore','Hot','Normal', 'Good', 'Hydrated','Smooth', 'Calm', 'Soothed', 'Healthy');
                            foreach($status as $state) {
                        echo '<option value="'.$state.'">'.$state.'</option>';
                        }
                ?>
                </select>
                <p style="line-height:3;">and</p>
                <h4>I am:</h4>
                <select name="feel[]" id="feel" class="form-control" multiple="multiple" required>
                <?
                        $feelings = array('Bloated','Cramping','Sluggish','Queasy/Nauseated','Sleepy','Irritable','Tempermental','No change','Normal','Better','Happy','Healed');
                            foreach($feelings as $feeling) {
                        echo '<option value="'.$feeling.'">'.$feeling.'</option>';
                        }
                ?>
                </select>
                <p>Other Notes <small>(Optional)</small></p>
                <textarea class="form-control" name="feelother" id="feelother" placeholder="Other important notes go here!" rows="7"></textarea>
                <input type="submit" name="submit" value="Submit">
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
    </form>

<!--FOOTER-->
<div class="container-fluid">
    <div class="row" id="footer">
        <div class="col-sm-12 " id="center">
            <p id="icons3"><i class="fa fa-user-circle" id="profile3" title="Back to Portfolio Page" onclick="profile();"></i><i class="fa fa-code" id="profile3" title="To GitHub" onclick="github();"></i></a></p>
        </div>
    </div>
</div>
<script src="jquery.js"></script>
</body>
</html>