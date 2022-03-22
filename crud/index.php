<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white">
    <header class="py-6 bg-slate-800">
        <div class="w- flex items-center justify-between mx-auto w-full">
            <div class="text-lg font-bold">crud</div>
            <div class="flex space-x-12 items-center">
                <a href="index.php/?page=form">form</a>
                <a href="record.php/?page=records">records</a>
            </div>
        </div>
    </header>

    <div>
        <?php
            if(isset($_GET['page']))
            {
                $page = $_GET['page'];
                $display = 'pages/'.$page.'.php';
                include($display);
            }
        ?>
    </div>
</body>
</html>