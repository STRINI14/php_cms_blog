<?php
$id = $_GET["id"];
if ($id) {
include("../connect.php");
$sqlDelete = "DELETE FROM posts WHERE id = $id";
if(mysqli_query($conn, $sqlDelete)) {
    session_start();
    $_SESSION["delete"] = "Post Deleted Successfully";
    header("Location:index.php");
} else {
    die("An Error Has Occured. Post Has Not Been Deleted");
}
} else {
    echo "Post Has Not Been Found";
}

?>