<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Sounds of Taipei</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon_io/site.webmanifest">
    <link rel="mask-icon" href="assets/logo.svg" color="#ec4667">

    <script type='text/javascript' src='libraries/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='scripts.js'></script>
    <link rel='stylesheet' href='styles.css'>

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300,400,500,700,900" rel="stylesheet">

    <link rel='stylesheet' href='libraries/leaflet.css'>
    <script type='text/javascript' src='libraries/leaflet.js'></script>
</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo"></div>
        </div>
        <div class="center">
            <p class="howto">Hover over any dot on this map of Taipei to listen to its unique sound!</p>
            <ul class="legend">
                <li class="item1">
                    <h3>General</h3>
                    <p>Heard all around the city</p>
                </li>
                <li class="item2">
                    <h3>Location</h3>
                    <p>Only heard in certain places</p>
                </li>
                <li class="item3">
                    <h3>Events</h3>
                    <p>Recorded at special events</p>
                </li>
                <li class="item4">
                    <h3><a href="form.php" target="_self">Manual add location</a></h3>
                    <p>Manual add new location</p><br>
                    <p>If you didn't define type, the circle would be black.<p>
                </li>

            <form method="POST" enctype="multipart/form-data" action="input.php">
                <br><b>Add new location</b>
                <br>location:
                <input type="text" id="inputNameAdd" name="inputNameAdd" size="25" value="" required="required">
                <br>label:<br>
                <input type="text" id="inputLabelAdd" name="inputLabelAdd" size="25" value="" required="required">
                <br>google map:
                <input type="text" id="googleMapURL" name="googleMapURL" size="25" value="" required="required">
                <br>volume (0~1 interval) :
                <input type="text" id="vol" name="vol" size="25" value="" required="required">
                <br>db (0~1 interval) :
                <input type="text" id="db" name="db" size="25" value="" required="required">
                <br>current latitude :
                <input type="text" id="recordLat" name="recordLat" size="25" value="" required="required">
                <br>current longitude :
                <input type="text" id="recordLng" name="recordLng" size="25" value="" required="required">
                <br>time:<br>
                  <select name="time">
                　<option value="day">day</option>
                　<option value="night">night</option>
                  </select>
                <br>type:<br>
                  <select name="type">
                  <option value="null"> </option>
                　<option value="city">city</option>
                　<option value="location">location</option>
                　<option value="event">event</option>
                  </select>
                <br>author:<br>
                <input type="text" id="inputAuthorAdd" name="inputAuthorAdd" size="25" required="required" >
                <br>upload picture (.jpg):
                    <input type="file" name="uploadPic" accept=".jpg"/>
                <br>upload sound (.mp3):
                    <input type="file" name="uploadMusic" accept=".mp3"/>
                <p>
                <input type="submit" value="upload" style="font-size:20px">
            </form>
          </ul>
        </div>
        <div class="bottom">
            <div class="credits"><a href="https://www-en.ntut.edu.tw/bin/home.php" target="_blank">An NTUT Project</a>
                • <a href="https://fh-potsdam.github.io/Sounds-of-Taipei/" target="_blank">Github</a></div>
        </div>
    </div>
    <div id="photo" class="hidden">
        <p id="label">Sunset down by the river</p>
    </div>
    <div id="photobg" class="hidden"></div>
    <div id="mapid"></div>
</body>
</html>
