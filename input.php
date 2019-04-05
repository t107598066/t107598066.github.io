<?PHP
    include "db_config.php";
    // $nname = $_POST['$inputNameAdd'];
    $uploadName = $_POST['inputNameAdd'];
    $uploadLabel = $_POST['inputLabelAdd'];
    $uploadLat = $_POST['recordLat'];
    $uploadLng = $_POST['recordLng'];
    $uploadGoogleMapURL = $_POST['googleMapURL'];
    $uploadTime = $_POST['time'];
    // upload to database
    $sql = "INSERT INTO data(name,label,lat,lng,googleMapURL,time,date) VALUES('$uploadName','$uploadLabel','$uploadLat','$uploadLng','$uploadGoogleMapURL','$uploadTime',now())";
    // update json file
    if ($conn->query($sql) === TRUE)
    {
      $str = file_get_contents('places.json');
       $arr = json_decode($str, true);
        $data = array('id'=>$uploadName,'label'=>$uploadLabel,'googlemaps'=>$uploadGoogleMapURL,'vol'=>'1','db'=>'0.5','x'=>$uploadLat,'y'=>$uploadLng,'type'=>'city','time'=>$uploadTime,'author'=>'me');
        array_push( $arr, $data);
        $str = json_encode($arr);

        if (json_decode($str) != null)
          {
            $file = fopen('places.json','w');
            fwrite($file, $str);
            fclose($file);
          }
          else
          {
            
          }

      header("location:success.php");
      echo "加入成功";
    }
    else
    {
      header("location:false.php");
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);

?>
