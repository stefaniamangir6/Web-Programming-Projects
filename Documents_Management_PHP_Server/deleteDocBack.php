
<?php
require_once "config.php";
global $connection;
//isset - variable exists and != null , trim removes whitespace or any other predefined character from both the left and right sides of a string
if (isset($_POST['id']) && !empty(trim($_POST['id']))) {
    $id = $_POST['id'];
    $sql_query = "delete from Document where doc_id = '$id';";
    $result = mysqli_query($connection, $sql_query);
    if ($result) {
        echo "Your document was deleted successfully!";
        header("Location: showDocs.htm");
    } else {
        echo "Oops! Something went wrong and your document cannot be deleted! Please try again later.";
    }
}
mysqli_close($connection);