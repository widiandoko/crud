<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <header class="py-6 px-6 bg-gray-800 w-2/3 mx-auto rounded mt-3">
        <div class="flex items-center justify-between mx-auto w-full">
            <div class="text-lg font-bold">crud</div>
            <div class="flex space-x-12 items-center">
                <a href="index.php">form</a>
                <a href="records.php">records</a>
            </div>
        </div>
    </header>

    <div class="py-6 px-6 bg-gray-800 w-2/3 mx-auto rounded mt-3">
        <?php
            include 'model.php';
            $model = new Model();
            $id = $_REQUEST['id'];
            $rows = $model->fetch();

            if (isset($_POST['update'])) {
                if (isset($_POST['nama']) && isset($_POST['nim'])) {
                    if (!empty($_POST['nama']) && !empty($_POST['nim'])) {
                    
                        $data['id'] = $id;
                        $data['nama'] = $_POST['nama'];
                        $data['nim'] = $_POST['nim'];

                        $update = $model->update($data);

                        if($update){
                            echo "<script>alert('record update successfully');</script>";
                            echo "<script>window.location.href = 'records.php';</script>";
                        }else{
                            echo "<script>alert('record update failed');</script>";
                            echo "<script>window.location.href = 'records.php';</script>";
                        }

                    }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                    }
                }
            }
            if(!empty($rows)){
                foreach($rows as $row){ 

        ?>
        <form action="" method="post">
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-300">Nama</label>
                <input class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 text-white" type="text" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-300">NIM</label>
                <input class="border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 text-white" type="number" name="nim" value="<?php echo $row['nim']; ?>">
            </div>
            <div>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" type="submit" name="update">kirim</button>
            </div>
        </form>
        <?php
                }
            }else{
                echo "no data";
            }
        ?>
    </div>
</body>
</html>