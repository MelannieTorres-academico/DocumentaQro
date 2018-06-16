<?php

  $conn = mysqli_connect('127.0.0.1','root','','document_sysdoq');
  $request = '';
  if (isset($_POST['request'])) {
      $request = $_POST['request'];
  }
  $request2 = '';
  if (isset($_POST['request2'])) {
      $request2 = $_POST['request2'];
  }

  if ($request == 'ninguno' && $request2 == 'ninguno') {
      $query = "select * from calendario";
  } else if ($request && $request2 == 'ninguno') {
      $query = "select * from calendario where sedes_id='$request'";
  } else if ($request == 'ninguno' && $request2) {
      $query = "select * from calendario where programa_id='$request2'";
  } else if ($request && $request2) {
      $query = "select * from calendario where sedes_id='$request' and programa_id='$request2'";
  } else{
      $query = "select * from calendario";
  }

  $output = mysqli_query($conn,$query);
  $events = array();
  while($fetch = mysqli_fetch_assoc($output)){
    $e = array();

    $e['id'] = $fetch['id'];
    $e['title'] = $fetch['title'];
    $e['start'] = $fetch['start'];
    $e['color'] = $fetch['color'];

    array_push($events, $e);
  }

  echo json_encode($events);

 ?>
