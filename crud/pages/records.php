<thead>
	<tr>
		<th>no</th>
		<th>nama</th>
		<th>nim</th>
		<th>action</th>
	</tr>
</thead>

<tbody>
	<?php
       	include 'model.php';
        $model = new Model();
        $rows = $model->fetch();
        $i = 1;
        if(!empty($rows)){
        	foreach($rows as $row){ 
    ?>

        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['nama_mahasiswa']; ?></td>
            <td><?php echo $row['nim_mahasiswa']; ?></td>
            <td>
                <a href="read.php?id=<?php echo $row['id']; ?>">Read</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            </td>
        </tr>

    <?php
        	}
        }else{
            echo "no data";
        }
    ?>
</tbody>