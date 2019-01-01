<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- <?php phpinfo(); ?> -->

<h1>Multiplication Table</h1>

<table>
    <tr>
        <th>&nbsp;</th>
        <?php 
        for($i=1; $i<=12; $i++) { ?>
        <th><?php echo $i; ?></th>
        <?php }?>
    </tr>

    <?php 
    for($j=1; $j<=12; $j++) { ?>
    <tr>
        <th><?php echo $j; ?></th>

        <?php
          for($i=1; $i<=12; $i++) { ?>
          <td><?php echo $j * $i; ?></td>
        <?php 
        } ?>
    </tr>
    <?php 
    } ?>
</table>

</body>
</html>