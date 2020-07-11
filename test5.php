<!DOCTYPE html>
<html>
<head>
    <title>Read Data from HTML Table uisng JavaScript</title>
    <style>
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }
        th {
            font-weight:bold;
        }
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
</head>
<body>
    <table id="myTable">
        <tr>
            <th>ID</th>
                <th>Employee Name</th>
                    <th>Age</th>
        </tr>
        <tr>
            <td>01</td>
                <td>Alpha</td>
                    <td>37</td>
        </tr>
        <tr>
            <td>02</td>
                <td>Bravo</td>
                    <td>29</td>
        </tr>
    </table>

    <p><input type="button" id="bt" value="Show Table Data" onclick="createpdf()" /></p>
    <p id="info"></p>
</body>
<!-- 
<script>
    function showTableData() {
        document.getElementById('info').innerHTML = "";
        var myTab = document.getElementById('empTable');

        // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
        for (i = 1; i < myTab.rows.length; i++) {

            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
            var objCells = myTab.rows.item(i).cells;

            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
            for (var j = 0; j < objCells.length; j++) {
                info.innerHTML = info.innerHTML + ' ' + objCells.item(j).innerHTML;
            }
            info.innerHTML = info.innerHTML + '<br />';     // ADD A BREAK (TAG).
        }
    }
</script> -->

<script src="js/createpdf.js"></script>

</html>