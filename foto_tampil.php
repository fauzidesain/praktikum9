<?php
    $photo = new App\Photo();
    $rows = $photo->tampil();
?>
<h2>PHOTOS</h2>

<a href="index.php?page=foto_input">Tambah</a>
<table>
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Judul</th>
        <th>keterangan</th>
        <th>Post</th>

    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['keterangan']; ?></td>
        <td><?php echo $row['post_id']; ?></td>
        <td><a href="index.php?page=foto-edit&id=<?php echo $row['id']; ?> ">Edit</a></td>
        <td><input type="submit" name="b_delete" value="delete"></td>
    </tr>
    <?php } ?>       
</table>     
</table>