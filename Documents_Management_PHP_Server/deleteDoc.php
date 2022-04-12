<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delete Doc</title>
    <link rel="stylesheet" type="text/css" href="deleteDoc.css">
</head>

<body>
<h1>Delete Document</h1>

<div class="container">
    <p><b>Are you sure you want to delete this document?</b></p>
    
    <form action="deleteDocBack.php" method="post">
        <input type="hidden" name="id" value="<?php echo trim($_GET['id']); ?>">
        <button type="submit" class="yes">YES</button>
    </form>
    <button class="no" onclick="window.location.href='showDocs.htm'">
        NO
    </button>
</div>
</body>

</html>