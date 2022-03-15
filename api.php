<?php
 
  require __DIR__ . '/data.php';

  header('content-type: application/json');

  echo json_encode($database);

?>