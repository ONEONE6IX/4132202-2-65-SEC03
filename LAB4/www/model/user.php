<?php

include "condb.php"

?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Lastname</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM db_user ORDER BY user_id ASC";
        $result = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_assoc($result));
        ?>
        <tr>
            <td><?=$row['user_id']?></td>
            <td><?=$row['user_name']?></td>
            <td><?=$row['user_pass']?></td>
            <th><button data="<?="user_id"?>">EDIT</button></th>
            <th><button data="<?="user_id"?>">DEL</button></th>
        </tr>
    </tbody>

</table>