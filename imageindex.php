<?php require 'function.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="style.css">
</head>
    <form class="" action="" method="post" enctype="multipart/form-data">
        Name
        <input type ="text" name = "name" required> <br>
        Image
        <input type="file" name = "file" required> <br>
        <button type ="submit" name="submit" value="add">Add</button>
    </form>
<body>
    <div class="col-md-12">
        <div class="card">
            <table border = 1 cellpadding = 10 cellspacing = 0>
                <tr>
                    <td>#</td>
                    <td>Evidence</td>
                    <td>Images</td>
                </tr>
                <?php
                $users = mysqli_query($conn, "SELECT * FROM users");
                $i = 1;


                foreach($users as $user) :
                ?>
                <tr>
                    <td> <?php echo $i++; ?> </td>
                    <td> <?php echo $user["name"]; ?> </td>
                    <td style = "display: flex; align-items:center; gap:10px;"> <img src="uploads/<?php echo $user["image"] ?>" width="900"> </td>
                    <td>
                        <!--<a href="edit.user..php?id=<?php echo $user['id']; ?>">Edit</a>
                        <form class="" action="" method="post">
                            <button type="submit" name="button" value = <?php echo $user['id']; ?>>Delete</button>
                        </form>-->
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        </div>
    </div>
</body>
</html>