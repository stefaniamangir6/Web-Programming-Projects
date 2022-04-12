<?php
require_once "config.php";
global $connection;
$doc_id = "";
$title = "";
$author = "";
$nr_of_pages = "";
$format = "";
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $id = trim($_GET['id']);
    $sql_query = "select * from Document where doc_id = $id;";
    $result = mysqli_query($connection, $sql_query);
    if ($result) {
        $number_of_rows = mysqli_num_rows($result);
        if ($number_of_rows == 1) {
            $row = mysqli_fetch_array($result);
            $doc_id = $row['doc_id'];
            $title = $row['title'];
            $author = $row['author'];
            $nr_of_pages = $row['nr_of_pages'];
            $format = $row['format'];
        } else {
            die("Incorrect doc id");
        }
    } else {
        die("Oops! Something went wrong and your document cannot be updated! Please try again later.");
    }
    mysqli_close($connection);
} else die("Oops! Something went wrong and your document cannot be updated! Please try again later.");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Document</title>
    <style>
        <?php include "addDoc.css" ?>
    </style>
</head>

<body>
<div class="container">
    <h1>Update Document</h1>
    <p><b>Please fill this form and submit to update the document in the database.</b></p>

    <form action="updateDocBack.php" method="post">
        <input type="hidden" name="id" value="<?php echo trim($_GET['id']); ?>">
        <input type="text" name="title" placeholder="Title:" value="<?php echo $title ?>"> <br>
        <input type="text" name="author" placeholder="Author:" value="<?php echo $author ?>"> <br>
        <input type="number" name="nr_of_pages" placeholder="Number of pages:" value="<?php echo $nr_of_pages ?>"> <br>
        <input type="text" name="format" placeholder="Format:" value="<?php echo $format ?>"> <br>
        <div class="button_container">
            <button type="submit">Update Document</button>
            <button type="reset" onclick="window.location.href='showDocs.htm'">Cancel</button>
        </div>
    </form>
</div>
</body>

</html>