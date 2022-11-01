<?
    include 'bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RegSecond</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>surname</td>
            <td>email</td>
            <td>password</td>
        </tr>
        <?
        $select=mysqli_query($bd, "SELECT * FROM `registersecond`");
        $lang=mysqli_fetch_assoc($select);
        do{
        ?>
        <tr>
            <td><?=$lang['id']?></td>   
            <td><?=$lang['name']?></td>
            <td><?=$lang['surname']?></td>
            <td><?=$lang['email']?></td>
            <td><?=$lang['password']?></td>
        </tr>
        <?}while($lang=mysqli_fetch_assoc($select));?>
    </table>
    <button>
        <a href="add.php">ADD</a>
    </button>
</body>
</html>