<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contractors</title>
</head>
<body>

<?php
$contractors =
[
    [
        'CompanyName' => 'Zavod',
        'CEO' => 'Kateryna',
        'Contact' => '09765754**',
        'Activity' => 'Production POSM',
        'Region' => 'all of Ukraine'
    ],
    [
        'CompanyName' => 'Freedom',
        'CEO' => 'Anastasiya',
        'Contact' => '09360121**',
        'Activity' => 'Design 2D, 3D',
        'Region' => 'all of Ukraine'
    ],
    [
        'CompanyName' => 'BDH',
        'CEO' => 'Eduard',
        'Contact' => '09324580**',
        'Activity' => 'Advertising Agency',
        'Region' => 'all of Ukraine'
    ],
    [
        'CompanyName' => 'Building',
        'CEO' => 'Dmytro',
        'Contact' => '06732814**',
        'Activity' => 'Construction',
        'Region' => 'all of Ukraine'
    ],
    [
        'CompanyName' => 'Photos',
        'CEO' => 'Artem',
        'Contact' => '09305023**',
        'Activity' => 'Photo',
        'Region' => 'Kyiv'
    ],
    [
        'CompanyName' => 'Staff',
        'CEO' => 'Maryna',
        'Contact' => '09353700**',
        'Activity' => 'Recruitment',
        'Region' => 'all of Ukraine'
    ],
];
//$contractors = array_chunk($contractors, 5);
?>

<table class = "Contractors">
    <th>CompanyName</th>
    <th>CEO</th>
    <th>Contact</th>
    <th>Activity</th>
    <th>Region</th>
<?php foreach ($contractors as $contractor): ?>
<tr>
    <?php foreach ($contractor as $a): ?>
    <td> <?php echo $a; ?> </td>
    <?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>

<style>
    .Contractors {
        width: 50%;
    }
    .Contractors th {
        width: 10%;
        border: 1px solid #ddd;
        padding: 7px 7px;
    }
    .Contractors td {
        width: 10%;
        border: 1px solid #ddd;
        padding: 7px 7px;
    }
</style>

</body>
</html>