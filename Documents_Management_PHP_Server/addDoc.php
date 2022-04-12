<?php
require_once "config.php";
$title = filter_var($_POST['title'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$author = filter_var($_POST['author'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$nr_of_pages = filter_var($_POST['nr_of_pages'], FILTER_SANITIZE_NUMBER_INT);
$format = filter_var($_POST['format'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$sql_query = "INSERT INTO Document(title, author, nr_of_pages, format) VALUES('$title', '$author', $nr_of_pages, '$format')";
global $connection;
$result = mysqli_query($connection, $sql_query);
if ($result) {
    echo "Your document was added successfully!";
    header("Location: showDocs.htm");
} else {
    echo "Oops!Something went wrong and your document cannot be added! Please try again later.";
}
mysqli_close($connection);