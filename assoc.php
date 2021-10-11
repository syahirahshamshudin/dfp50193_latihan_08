<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'menu.php';?>

    <h2>ASSOCIATIVE ARRAY</h2>

    <?php
    $peserta = [
        'nama' => 'Ali',
        'umur' => 16,
        'jantina' => 'Lelaki',
    ];
    ?>

    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $peserta['nama'];?><td>
        </tr>
        <tr>
            <td>Umur:</td>
            <td><?php echo $peserta['umur'];?>tahun<td>
        </tr>
        <tr>
            <td>Jantina:</td>
            <td><?php echo $peserta['jantina'];?><td>
        </tr>
    </table>
    
</body>
</html>