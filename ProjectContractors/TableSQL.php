<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contractors</title>

    <style type="text/css">
    table
    {
        width: 500px;
        margin: 0 auto;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
        border-collapse: collapse;
    }
    th, td
    {
        border: 1px solid black;
        padding: 10px;
    }
    </style>

</head>
<body>

<table>
    <tr>
        <th>№</th>
        <th>CompanyName</th>
        <th>CEO</th>
        <th>Contact</th>
        <th>Activity</th>
        <th>Region</th>
        <th>EntryDate</th>
    </tr>

<?php
$mysqli = new mysqli
(
    'localhost',
    'root',
    'mysql',
    'contractor'
);
if ($mysqli->connect_errno) {
    echo "Извини, ошибка!";
    exit;
}

$query = "SELECT * FROM contractor";
$result = mysqli_query($mysqli, $query) or die (mysqli_error($mysqli));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;
$result = '';
foreach ($data as $element) {
    $result .= '<tr>';

    $result .= '<td>' .$element['contractor_id'] . '</td>';
    $result .= '<td>' .$element['company_name'] . '</td>';
    $result .= '<td>' .$element['ceo'] . '</td>';
    $result .= '<td>' .$element['contact'] . '</td>';
    $result .= '<td>' .$element['activity'] . '</td>';
    $result .= '<td>' .$element['region'] . '</td>';
    $result .= '<td>' .$element['entry_date'] . '</td>';

    $result .= '</tr>';
}
echo $result;
?>

</table>

</body>
</html>