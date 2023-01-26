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
            <th><button Class="btn_edit" data="<?="user_id"?>">EDIT</button></th>
            <th><button Class="btn_del" data="<?="user_id"?>">DEL</button></th>
        </tr>
    </tbody>
</table>

<script>
    $(".btn_del").click(function (){
        $.ajax({
            url:"/model/user_del.php",
            method:"GET",
            data: {id: id_val},
            success: function(res){
                $("#div_res").html(res);
                $("#div_action").lond("/model/user_data.php");
            }
        });
    });
    
</script>