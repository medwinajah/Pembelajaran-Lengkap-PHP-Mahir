<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="todo-container">
        <h1>To Do List</h1>
        <form class="todo-form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="task" id="task" placeholder="Tambahkan tugas baru . . .">
        <button type="submit" name="add">Tambah</button>
        </form>

        <?php
            // Menginisialisai session 
            session_start();
            
            // Melakukan validasi apakah $_SESSION["tasks"]
            if(!isset($_SESSION["tasks"])){

            // Membuat session array kosong;
                $_SESSION["tasks"]=[];
            }


            // Melukan pengecekan apakah tombol button diklik
            if(isset($_POST["add"])){

            // Menyimpan nilai input dari task kedalam variabel $task
                $task=trim($_POST["task"]);
            
                //Melakukan validasi apakah task nya tidak kosong
                if(!empty($task)){
                    // Menyimpan nilai tasknya kedalam session array
                $_SESSION["tasks"][]=$task;
                }

                // redirect untuk menghindari resubmission saat refresh
                header("Location: ".htmlspecialchars($_SERVER["PHP_SELF"]));
                exit();
            }

            // Jika ada request untuk menghapus task/todo
            if(isset($_POST["delete"])){
                $index_to_delete = $_POST["delete"];

                if(isset($_SESSION['tasks'])){
                    unset($_SESSION["tasks"][$index_to_delete]);

                    // reset index array setelah penghapusan
                    $_SESSION["tasks"]=array_values($_SESSION["tasks"]);
                    header("Location: ".htmlspecialchars($_SERVER["PHP_SELF"]));
                    exit();
                }
            }
        ?>

        <ul class="todo-list">
            <?php
        foreach($_SESSION["tasks"] as $index=> $task):
            ?>
            <li><?= htmlspecialchars($task); ?>

            <form action="<?= $_SERVER["PHP_SELF"]?>" method="post" style="display:inline; ">
                <input type="hidden" name="delete" value="<?= $index; ?>">
                <button type="submit" class="delete-btn">Hapus</button>
            </form>
        </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>