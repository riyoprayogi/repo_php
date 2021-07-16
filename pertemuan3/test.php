<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- Baris -->
        <?php for( $i = 1; $i <= 5; $i++) : ?>
            <?php if( $i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <!-- Kolom -->
                <?php for( $j = 1; $j <= 10; $j++) : ?>
                    <!-- data dalam tabel -->
                    <td><?= "$i, $j"?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>