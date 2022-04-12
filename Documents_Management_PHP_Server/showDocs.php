
<?php
    $conn = new mysqli("localhost", "root", "", "DocumentsDB");
    $rows = $conn->query("SELECT * FROM Document");
    $response = array();
    while($row = $rows->fetch_assoc())
    {   
        $format = $_GET["format"];
        if(strcmp($row['format'], $format)==0)
            {$result = new stdClass();
            $result->id = $row['doc_id'];
            $result->title = $row['title'];
            $result->author = $row['author'];
            $result->nr_of_pages = $row['nr_of_pages'];
            $result->format = $row['format'];
            array_push($response, $result);}
    }
    $conn->close();

    echo(json_encode($response));