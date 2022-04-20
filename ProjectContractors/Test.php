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
$contractors = [
    'id1' => ['CompanyName' => 'Zavod', 'CEO' => 'Kateryna', 'Contact' => '09765754**',
        'Activity' => 'Production POSM', 'Region' => 'all of Ukraine'],
    'id2' => ['CompanyName' => 'Freedom', 'CEO' => 'Anastasiya', 'Contact' => '09360121**',
        'Activity' => 'Design 2D, 3D', 'Region' => 'all of Ukraine'],
    'id3' => ['CompanyName' => 'BDH', 'CEO' => 'Eduard', 'Contact' => '09324580**',
        'Activity' => 'Advertising Agency', 'Region' => 'all of Ukraine'],
    'id4' => ['CompanyName' => 'Building', 'CEO' => 'Dmytro', 'Contact' => '06732814**',
        'Activity' => 'Construction', 'Region' => 'all of Ukraine'],
    'id5' => ['CompanyName' => 'Photos', 'CEO' => 'Artem', 'Contact' => '09305023**',
        'Activity' => 'Photo', 'Region' => 'Kyiv'],
    'id6' => ['CompanyName' => 'Staff', 'CEO' => 'Maryna', 'Contact' => '09353700**',
        'Activity' => 'Recruitment', 'Region' => 'all of Ukraine'],
];
?>
<h1>Contractors</h1>
<ul>
    <?php foreach ($contractors as $contractor) { ?>
<li><?php print_r($contractor) ?></li>
<?php }  ?>
</ul>

</body>
</html>