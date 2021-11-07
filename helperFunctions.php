<?php
include 'conf/connection.php';



// add a record into paper entity
if(isset($_POST['insertIntoPaper'])){
    $pid = $_POST['pid'];
    $title = $_POST['paperTitle'];

    // echo $pid."-".$title;
    $stmt = $conn->prepare("INSERT INTO paper (pid, title) VALUES (?, ?)");
    $stmt->bind_param("ss", $pid, $title);

    $stmt->execute();

    $stmt->close();
    $conn->close();

    echo '<script language="javascript">';
    echo 'alert("record has been inserted into db successfully")';
    echo '</script>';

    include("index.php");
   // header("Location: index.php"); -- this will ignore the alert window


}

?>