<?php

  $fileType= $_REQUEST['fileType']; //gets selected file type
  $levelOfProfession= $_REQUEST['levelOfProfession']; //gets selected level of profession
  $speakerBackground= $_REQUEST['speakerBackground']; //gets selected background of speaker
  $holdings=$_REQUEST["holdings"]; //gets yes or no value for holding files

  $json = file_get_contents("../json/cscqa_data.json");
  $array= json_decode($json, true);

  $files = array(); //array storing paths of the files meeting the selected criteria.
  $key=0; //indexing key for files array

  //going through the json file
  /*Below the values gotten from the project_cscqa.php page form is compared to json field values, if edited make sure they are absolutely same.*/
  for($x = 0; $x <sizeof($array); $x++){
    if($array[$x]["Level of Profession"]==$levelOfProfession){
      if($array[$x]["Speaker Background"]==$speakerBackground){
        if(strcasecmp($fileType,"Plain Text")==0){
          $files[$key] = "{$array[$x]["txt-file"]}";
        }
        else{
          $files[$key] = "{$array[$x]["xml-file"]}";
        }
        $key++; // file added incrementing the key.
      }
    }
  }

  $zip = new ZipArchive(); //creating a zip file.
  $zip_name = "cscqa_selected_corpus.zip";
  //if zipfile of same name exists on server, overwrite, else create new.
  if(file_exists($zip_name)){
      $result_code=$zip->open($zip_name,  ZipArchive::OVERWRITE);
  }
  else{
    $result_code=$zip->open($zip_name,  ZipArchive::CREATE);
  }

  //going over the array of selected files and adding them to the zip file.
  foreach ($files as $file) {
    $path = "../files/cscqa/{$fileType}/".$file;
    if(file_exists($path)){
      $zip->addFromString(basename($path),  file_get_contents($path));
    }
    else{
     echo"file does not exist";
    }
  }
  if(strcasecmp($holdings,"yes")==0){
    $zip->addFromString(basename("../files/cscqa/Holdings.xlsx"), file_get_contents("../files/cscqa/Holdings.xlsx"));
  }
  $zip->close();
  echo "$zip_name";
?>
