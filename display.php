<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php
    $cnn = mysqli_connect("localhost","root","","project");

    if(isset($_POST["submit"]))
    {

        $qry = "INSERT INTO test VALUES('$name',$number)";
        
        // $qry = "select * from test";
        
        $result = $cnn->query($qry);

        $table = "<table> <tr><th>Name</th> <th>Number</th></tr>";
        while($row = $result->fetch_assoc())
        {
            $name = $row["name"];
            $nummber = $row["number"];

            $table.= "<tr> <td>$name</td> <td>$number</td> </tr>";
        }
        $table.= "</table>";

        echo $table;
    }
    
    ?>
<form method = "post">
    <table>
        <tr>
            <td>
                Name
            </td>
            <td>
                <input type="text" name = "name">
            </td>
        </tr>
        <tr>
            <td>
                Number
            </td>
            <td>
                <input type="text" name = "number">
            </td>
        </tr>
        <tr>
            <td>
                Insert
            </td>
            <td>
                <input type="submit" value = "insert" name = "submit">
            </td>
        </tr>
    </table>

    </form>
</body>
</html>