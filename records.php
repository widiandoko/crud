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
            $rows = $model->fetch();
        ?>
        <div class="relative overflow-x-auto rounded">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                	<tr>
                		<th scope="col" class="px-6 py-3">no</th>
                		<th scope="col" class="px-6 py-3">nama</th>
                		<th scope="col" class="px-6 py-3">nim</th>
                		<th scope="col" class="px-6 py-3">action</th>
                	</tr>
                </thead>

                <tbody>
                	<?php
                        $i = 1;
                        if(!empty($rows)){
                        	foreach($rows as $row){ 
                    ?>

                        <tr class="border-b bg-gray-800 border-gray-700">
                            <td class="px-6 py-4"><?php echo $i++; ?></td>
                            <td scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap"><?php echo $row['nama_mahasiswa']; ?></td>
                            <td class="px-6 py-4"><?php echo $row['nim_mahasiswa']; ?></td>
                            <td class="px-6 py-4">
                                <a class="text-blue-500 mx-2" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                <a class="text-blue-500" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            </td>
                        </tr>

                    <?php
                        	}
                        }else{
                            echo "no data";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>