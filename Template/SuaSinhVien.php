<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="?action=update&id=<?php echo $sv['0']['id'] ?>" method="post" >
        <label for="inputName">Ten: </label>
        <input type="text" id="inputName" name="name" value="<?php echo $sv['0']['name'] ?>">
         <label for="inputAge">Tuoi: </label>
        <input type="text" id="inputAge" name="age" value="<?php echo $sv['0']['age'] ?>">
         <label for="inputAddress">Dia Chi: </label>
        <input type="text" id="inputAddress" name="address" value="<?php echo $sv['0']['address'] ?>">
        <input type="submit" value="Sua">
    </form>
</body>
</html>