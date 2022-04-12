<?php
require_once "config.php";
$doc_id = $_POST['id'];
$title = filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$author = filter_var($_POST['author'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$nr_of_pages = filter_var($_POST['nr_of_pages'], FILTER_SANITIZE_NUMBER_INT);
$format = filter_var($_POST['format'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$sql_query = "update Document set title='$title', author = '$author', nr_of_pages = $nr_of_pages, format = '$format' where doc_id= $doc_id";
$result = mysqli_query($connection, $sql_query);
if ($result) {
    echo "Your document was updated successfully!";
    header("Location: showDocs.htm");
} else {
    echo "Oops! Something went wrong and your document cannot be added! Please try again later.";
}
mysqli_close($connection);