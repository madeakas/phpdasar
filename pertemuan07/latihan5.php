<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php if(isset($_POST["submit"])) : ?>
            <h1>Halo, Selamat Datang <?php echo $_POST["nama"]; ?></h1>
        <?php endif; ?>

        <form action="" method="post">
            Masukan nama :
            <input type="text" name="nama">
            <br>
            <button type="submit" name="submit">Kirim!</button>

        </form>



    </body>
</html>