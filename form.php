<!DOCTYPE html>
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
  <p align="center"><font size="15" color="white"><b>新增地標聲音</b></font>
<form method="POST" enctype="multipart/form-data" action="input.php">
<table border="4" width="600" id="table1" bgcolor="white" height="70" bordercolor="black" align="center">
     <tr>
         <td width="100"><font size="5" color="black">輸入地標名</font></td>
         <td><input type="text" id="inputNameAdd" name="inputNameAdd" minlength="4" maxlength="8" size="14" required="required" ></td>
     </tr>
     <tr>
         <td width="100"><font size="5" color="black">輸入標籤</td>
         <td><input type="text" id="inputLabelAdd" name="inputLabelAdd" minlength="4" maxlength="8" size="14" required="required" ></td>
     </tr>
     <tr>
         <td width="100"><font size="5" color="black">googlemaps</td>
        <td><input type="text" id="googleMapURL" name="googleMapURL" minlength="4" maxlength="100" size="14" required="required" ></td>

     </tr>
     <tr>
         <td width="100"><font size="5" color="black">vol(0~1)</td>
        <td><input type="text" id="vol" name="vol" minlength="1" maxlength="4" size="14" required="required" ></td>

     </tr>
     <tr>
         <td width="100"><font size="5" color="black">db(0~1)</td>
        <td><input type="text" id="db" name="db" minlength="1" maxlength="4" size="14" required="required" ></td>

     </tr>
     <tr>
         <td width="100"><font size="5" color="black">緯度</td>
         <td><input id="recordLat" name="recordLat" type="text" size="30" value="" required="required"/></td>
     </tr>
     <tr>
         <td width="100"><font size="5" color="black">經度</td>
         <td><input id="recordLng" name="recordLng" type="text" size="30" value="" required="required"/></td>
     </tr>

     <tr>
       <td width="100"><font size="5" color="black">時間</td>
       <td>
           <select name="time" style="font-size:20px;">
             <option value="day">day</option>
             <option value="night">night</option>
         </select>
       </td>
     </tr>
     <tr>
       <td width="100"><font size="5" color="black">種類</td>
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
         <td width="100"><font size="5" color="black">上傳圖片</td>
         <td><input type="file" name="uploadPic" accept="image/*"/></td>
     </tr>
     <tr>
         <td width="100"><font size="5" color="black">上傳音檔</td>
         <td><input type="file" name="uploadMusic" accept="audio/*"/></td>
     </tr>
     <tr>
         <td width="100"><font size="5" color="black">編輯者</td>
         <td><input type="text" id="inputAuthorAdd" name="inputAuthorAdd" minlength="4" maxlength="8" size="10" required="required" ></td>
     </tr>

</table>

      <p align="center"><input type="button" style="width:120px;height:40px;font-size:20px;" onclick="javascript:location.href='index.php'"  value="返回">
      <input type="submit" style="width:120px;height:40px;font-size:20px;" value="送出">
</form>
</body>

</html>
