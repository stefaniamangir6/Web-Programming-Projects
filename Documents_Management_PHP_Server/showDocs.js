var prevFilter;
$((function () {
    prevFilter = ""
    function refresh() {
        format = $("#format")
        // receive data in json format using getjson function 
        $.getJSON("showDocs.php", {format: format.val()}, function (result) {
            $("table tr:gt(0)").remove()
            result.forEach(function (thing) {
                $("table").append(`<tr>
                                <td>${thing.title}</td>
                                <td>${thing.author}</td>
                                <td>${thing.nr_of_pages}</td>
                                <td>${thing.format}</td>
                                <td>
                                    <a href=updateDoc.php?id=${thing.id}>Update</a>
                                    <br>
                                    <a href=deleteDoc.php?id=${thing.id}>Delete</a>
                                    <br>
                                </td>
                               </tr>`)
            })
        })
        $("#info").html("<p>The last query has been done with the format: " + prevFilter + "</p>")
        prevFilter = format.val()
    }
    $("#format").on("click", function () {
        refresh()
    })

    refresh()
}));