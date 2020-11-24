<?php 
    $file = 'users.txt';
    $perevirka = file_get_contents($file);
    preg_match_all('/(.*)\t([a-z0-9_-]+\@[a-z0-9-_]+\.[a-z]+)\t(.*)\n/', $perevirka, $rows);

    $count =count($rows[1]);
    //print_r($rows);
    //$i =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Work</title>
</head>
<body>
    <table style="text-align: center; width: 60%; marginLeft: 20%;">
    <thead>
        <td><strong>Nickname</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Password</strong></td>
    </thead>
    <tbody>
        <?php for($i = 0; $i< $count; $i++):?>
            <tr>
                <td><?=$rows[1][$i] ?? '-'?></td>
                <td><?=$rows[2][$i] ?? '-'?></td>
                <td><?=$rows[3][$i] ?? '-'?></td>
            </tr>
            <?php endfor; ?>
    </tbody>
    </table>
    <a href="/labFolder/index.php">Back to menu</a>
</body>
</html>