<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="array2_style.css">
</head>
<body>
    <h2>Data Dosen</h2>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        <tr>
            <th>Informasi</th>
            <th>Data</th>
        </tr>
        
        <?php foreach ($Dosen as $key => $value) : ?>
            <tr>
                <td><?php echo ucwords($key); ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>