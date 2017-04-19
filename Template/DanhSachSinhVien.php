<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sach Sinh Vien</title>
</head>
<body>
    <a href="?action=create">Them</a>
    <table>
        <thead>
         <tr>
            <th>ID</th>
            <th>Ten</th>
            <th>Tuoi</th>
            <th>Dia Chi</th>
            <th></th>
            <th></th>
         </tr>
        </thead>
        <?php foreach($dssv as $item){
           ?>
        <tbody>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['age'] ?></td>
                <td><?php echo $item['address'] ?></td>
                <td><a href="?action=edit&id=<?php echo $item['id'] ?>">Edit</a></td>
                 <td><a href="?action=destroy&id=<?php echo $item['id'] ?>">Delete</a></td>
            </tr>
        </tbody>
         <?php
        }
        ?>
    </table>
</body>
</html>