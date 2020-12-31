<?php
include('data.php');

$studentID = $_POST['searchID'];

if($studentID == "")
{
    echo "No results found";
    return;
}

$connection = new data();
$conn = $connection->openCon();

$sql = "SELECT * FROM resultlist where id = ".$studentID;
//echo $sql;

$result = $connection->SelectQuery($conn, $sql);

echo "Search Result:";

if($result->num_rows>0)
{
    echo "<div class='tbl'>
    <table  width = '100%' border = '1px solid black'>
    <tr >
    <th> ID </th>
    <th> Course </th>
    <th> Mark </th>
    <th> GPA </th>
    <th> Update </th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><form method = 'POST' action = '../updateMark.php'><td>".$row['id']."</td>
            <td>".$row['course']."</td>
            <td>".$row['mark']."</td>
            <td>".$row['gpa']."</td>
            <th><button name = 'btn' onclick='console.log('yes');' class = 'btn' value = '".$row['id']."' >update</button></th>
            </form>
            </tr>";
    }
    echo "</table></div>";
}
else
{
    echo "No results were found!<br>";
}
?>