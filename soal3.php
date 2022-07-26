
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post">
            <input type="number" name="number" id="" max="10000" placeholder="Input Disini">
            <button type='submit' name="kirim">submit</button>
        </form>
        <?php
if (isset($_POST['kirim'])) {
    $number = $_POST['number'];
    ?>
            <form action="output.php" method="post">
                <?php
for ($b = 0; $b < $number; $b++) {
        ?>
                    <input type="text" name="text" id="">
                    <?php
}
    ?>
                <input type="submit" name="kirim1">
            </form>
            <?php
}
?>
</body>
</html>
