<?php
  include ('conn.php');
  include('session.php');
  // if(isset($_POST['name'])){
  //   $inputValue = $_POST['name'];
  //   $query = "SELECT name FROM `tblmastercustomer` WHERE name LIKE '%$inputValue%'";
  //   $result = mysqli_query($conn, $query);
  //   $names = array();
  //   while($row = mysqli_fetch_assoc($result)){
  //     $names[] = $row['name'];
  //   }
  //   echo json_encode($names);
  // }
  if (isset($_GET['name'])) {
    $name = $_GET['name'];

    $query = "SELECT * FROM `tblmastercustomer` WHERE name LIKE '%$name%'";
    $result = mysqli_query($connection, $query);

    $nameList = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $nameList[] = $row['name'];
    }

    echo json_encode($nameList);
    exit;
}
     
?>