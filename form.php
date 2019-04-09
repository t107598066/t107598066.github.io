<html>
<head>
    <meta charset='UTF-8'>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="dark_style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- <script src="script.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
    <script type='text/javascript' src='scripts.js'></script>
</head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=big5"> -->
<title>Sounds of Taipei</title>

<body>
  <p align="center"><font size="15" color="white"><b>Add a new voice of location</b></font>
  <hr><P><p align="center"><font size="20" color="white"><b>
<form method="POST" enctype="multipart/form-data" action="input.php">
<div align="center">
<table border="4" width="600" id="table1" bgcolor="white" height="70" bordercolor="black" align="center">
     <tr>
         <td width="250"><font size="5" color="black">location</font></td>
         <td><input type="text" id="inputNameAdd" name="inputNameAdd" minlength="1" maxlength="8" size="14" required="required" ></td>
     </tr>
     <tr>
         <td width="250"><font size="5" color="black">label</td>
         <td><input type="text" id="inputLabelAdd" name="inputLabelAdd" minlength="1" maxlength="8" size="14" required="required" ></td>
     </tr>
     <tr>
         <td width="250"><font size="5" color="black">googlemaps</td>
        <td><input type="text" id="googleMapURL" name="googleMapURL" minlength="1" maxlength="100" size="14" required="required" ></td>

     </tr>
     <tr>
         <td width="250"><font size="5" color="black">volume (0~1 interval)</td>
        <td><input type="text" id="vol" name="vol" minlength="1" maxlength="1" size="14" required="required" ></td>

     </tr>
     <tr>
         <td width="250"><font size="5" color="black">db (0~1 interval)</td>
        <td><input type="text" id="db" name="db" minlength="1" maxlength="1" size="14" required="required" ></td>

     </tr>
     <tr>
         <td width="250"><font size="5" color="black">latitude</td>
         <td><input type="text" id="recordLat" name="recordLat" size="30" value="" required="required"/></td>
     </tr>
     <tr>
         <td width="250"><font size="5" color="black">longitude</td>
         <td><input type="text" id="recordLng" name="recordLng" size="30" value="" required="required"/></td>
     </tr>

     <tr>
       <td width="250"><font size="5" color="black">time</td>
       <td>
           <select name="time" style="font-size:20px;">
             <option value="day">day</option>
             <option value="night">night</option>
         </select>
       </td>
     </tr>
     <tr>
       <td width="250"><font size="5" color="black">type</td>
       <td>
         <select name="type"  style="font-size:20px;">
         <option value="null"> </option>
       　<option value="city">city</option>
       　<option value="location">location</option>
       　<option value="event">event</option>
         </select>
       </td>
     </tr>
     <tr>
         <td width="250"><font size="5" color="black">upload picture (.jpg)</td>
         <td><input type="file" name="uploadPic" accept=".jpg"/></td>
     </tr>
     <tr>
         <td width="250"><font size="5" color="black">upload sound (.mp3)</td>
         <td><input type="file" name="uploadMusic" accept=".mp3"/></td>
     </tr>
     <tr>
         <td width="250"><font size="5" color="black">author</td>
         <td><input type="text" id="inputAuthorAdd" name="inputAuthorAdd" minlength="1" maxlength="8" size="10" required="required" ></td>
     </tr>

</table>
</div>
      <p align="center"><input type="button" style="width:120px;height:40px;font-size:20px;" onclick="javascript:location.href='index.php'"  value="return">
      <input type="submit" style="width:120px;height:40px;font-size:20px;" value="submit">
</form>
</body>

</html>
