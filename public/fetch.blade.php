<?php

  $conn = mysqli_connect('127.0.0.1','root','','doqumenta');
  $request='';
  if(isset($_POST['request'])) {
      $request=$_POST['request'];
  }
  $request2='';
  if(isset($_POST['request2'])) {
      $request2=$_POST['request2'];
  }



  //manana SELECT * FROM `events` WHERE  DATE_FORMAT(`start`,'%T')>='06:00:00' AND DATE_FORMAT(`start`,'%T')<='11:59:59'
  //tarde SELECT * FROM `events` WHERE  DATE_FORMAT(`start`,'%T')>='12:00:00' AND DATE_FORMAT(`start`,'%T')<='18:59:59'
  //noche SELECT * FROM `events` WHERE  (DATE_FORMAT(`start`,'%T')>='19:00:00' AND DATE_FORMAT(`start`,'%T')<='23:59:59') OR (DATE_FORMAT(`start`,'%T')>='00:00:00' AND DATE_FORMAT(`start`,'%T')<='05:59:59')

  /*if($request2=='manana'){
    $condicion="DATE_FORMAT(`start`,'%T')>='06:00:00' AND DATE_FORMAT(`start`,'%T')<='11:59:59'";
  }
  else if($request2=='tarde'){
    $condicion="DATE_FORMAT(`start`,'%T')>='12:00:00' AND DATE_FORMAT(`start`,'%T')<='18:59:59'";
  }
  else if($request2=='noche'){
    $condicion="((DATE_FORMAT(`start`,'%T')>='19:00:00' AND DATE_FORMAT(`start`,'%T')<='23:59:59') OR
                (DATE_FORMAT(`start`,'%T')>='00:00:00' AND DATE_FORMAT(`start`,'%T')<='05:59:59'))";
  }*/



  //var_dump($request);
  //var_dump($request2);


  if($request=='ninguno' && $request2=='ninguno'){
      $query="select * from calendario";
      //var_dump('ninguno seleccionado');
  }
  else if($request && $request2=='ninguno'){
      $query="select * from calendario where sedes_id='$request'";
      //var_dump('request2 no seleccionado');
  }

  else if($request=='ninguno' && $request2){
      $query="select * from calendario where programa_id='$request2'";
      //var_dump('request no seleccionado');
  }

  else if($request && $request2){
      $query="select * from calendario where sedes_id='$request' and programa_id='$request2'";
      //var_dump('ambos');
  }

  else{
      $query="select * from calendario";
      //var_dump('aun no hacen nada');
  }



  $output=mysqli_query($conn,$query);

     $events = array();
  while($fetch = mysqli_fetch_assoc($output))
  {
      $e = array();

      $e['id'] = $fetch['id'];
      $e['title'] = $fetch['title'];
    $e['start'] = $fetch['start'];
    $e['color'] = $fetch['color'];

    array_push($events, $e);

  }
echo json_encode($events);

 ?>
