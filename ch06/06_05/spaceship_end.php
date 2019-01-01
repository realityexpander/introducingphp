<?php
$friends = [
    ['first' => 'Jim', 'last' => 'White'],
    ['first' => 'Jane', 'last' => 'White'],
    ['first' => 'Hilary', 'last' => 'Brown'],
    ['first' => 'Harry', 'last' => 'Brown'],
    ['first' => 'Paul', 'last' => 'Green'],
    ['first' => 'Amanda', 'last' => 'Green'],
    ['first' => 'John', 'last' => 'Black'],
    ['first' => 'Diana', 'last' => 'Black']
];
usort($friends, function($a, $b) {
    return [$a['last'], $a['first']] <=> [$b['last'], $b['first']];
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anonymous callback</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>User-Defined Sort</h1>
<ul>
<?php
foreach ($friends as $friend) {
    echo '<li>' . implode(' ', $friend) . '</li>';
}

echo ( "<br>" . serialize( [ $friends[4]['last'] , $friends[1]['first'], $friends[2] ] ). "<br><br>");
echo ( "<br>" . serialize( $friends ) . "<br><br>");

echo (serialize($_SERVER));

$year = date('Y');
?>

<?= (($year === 2013) ? 2013 : date('©2013-y')) . " Chris Athanas <br>" ?>

</ul>
</body>
</html>