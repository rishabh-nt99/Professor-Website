<?php

  $highType= $_REQUEST['high_type']; //getting the type of file needed low rated courses
  $lowType= $_REQUEST['low_type']; //getting the type of file needed from low rated courses

  $json = file_get_contents("../json/emlc_data.json"); //json file holding data.
  $array= json_decode($json, true);

  $zip = new ZipArchive();
  $zip_name = "emlc_selected_corpus.zip"; //creating a zip archive named files.zip

  if(file_exists($zip_name)){ //if file exists, overwrite
      $result_code=$zip->open($zip_name,  ZipArchive::OVERWRITE);
  }
  else{ //else create
    $result_code=$zip->open($zip_name,  ZipArchive::CREATE);
  }
  if($result_code!=true){
    echo($result_code); //echoing error for debuging
  }

  //going through the json files.
  for($x = 0; $x <sizeof($array); $x++){
    //For high rated courses
    if($array[$x]["rating"]=='high'){
        if(strcasecmp($highType,"Plain Text")==0){
          $temp_path = "../files/emlc/High Rated Courses/Plain Text/".$array[$x]["txt"];
          $file_name=$array[$x]["txt"];
        }
        else{
          $temp_path = "../files/emlc/High Rated Courses/XML/".$array[$x]["xml"];
          $file_name=$array[$x]["xml"];
        }
        $zip->addFile($temp_path,'High Rated Courses/'.$file_name);
    }
    elseif($array[$x]["rating"]=='low'){
        if(strcasecmp($lowType,"Plain Text")==0){
          $temp_path = "../files/emlc/Low Rated Courses/Plain Text/".$array[$x]["txt"];
          $file_name=$array[$x]["txt"];
        }
        else{
          $temp_path =   $temp_path = "../files/emlc/Low Rated Courses/XML/".$array[$x]["xml"];
          $file_name=$array[$x]["xml"];
        }
        $zip->addFile($temp_path,'Low Rated Courses/'.$file_name);
    }
  }
  $zip->close();
  echo "$zip_name";
?>
