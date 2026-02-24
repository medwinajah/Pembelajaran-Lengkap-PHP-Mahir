<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
    <form class="form-tambah" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>?>" method="post">
        <h1>To-Do List</h1>
        <input type="text" name="task" id="task" placeholder="Tambahkan tugas baru . . .">
        <button class="tambah" name="add">Tambah</button>

        <?php
        session_start();

        if(!isset($_SESSION["tasks"])){
            $_SESSION["tasks"]=[];
        }

        if(isset($_POST["add"])){
            $task=trim($_POST["task"]);

            if(!empty($task)){
                $_SESSION["tasks"][]=$task;

                header("Location: ".htmlspecialchars($_SERVER["PHP_SELF"]));
                exit();
            }
        }

        if(isset($_POST["delete"])){
            $index=$_POST["index"];
            unset($_SESSION["tasks"][$index]);
            $_SESSION["tasks"]=array_values($_SESSION["tasks"]);
            header("Location: ".htmlspecialchars($_SERVER["PHP_SELF"]));
            exit();
        }

        ?>


        <ul class="ul">
            <?php foreach ($_SESSION["tasks"] as $key=> $value ): ?>

        
        <li><?= htmlspecialchars($value);?>
                <form class="hapus" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" style="display: inline;">
                <input type="hidden" name="index" value="<?= $key; ?>">
                <button type="submit" name="delete" class="delete">Hapus</button>
                </form>
    </li>

        <?php endforeach; ?>
        </ul>
    </form>
    </div>
</body>
</html>