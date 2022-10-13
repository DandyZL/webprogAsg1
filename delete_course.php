<?php
include "db_connect.php";

$sql = "DELETE FROM `coursebinus` WHERE 1";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: list_course.php?msg=Course deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
}
?>