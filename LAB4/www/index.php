<?php
echo "Hello PHP!!!";
// phpinfo();

$on = 10;
$name = 'Owen';
?>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Dang</td>
        </tr>
        <?php
        for($i = 2; $i < 5; $i++){
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?= $name?> </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>