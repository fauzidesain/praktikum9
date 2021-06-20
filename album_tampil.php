<?php
    $album = new App\Album();
    $rows = $album->tampil();
?>
<h2>Album Photo</h2>

<a href="index.php?page=album_input">Tambah</a>
<table>
    <tr>
        <th>No</th>
        <th>Nama Album</th>
        <th>Keterangan</th>
        <th>Photo</th>

    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['album_name']; ?></td>
        <td><?php echo $row['keterangan']; ?></td>
        <td><?php echo $row['photo_id']; ?></td>
        <td><a href="index.php?page=album_edit&id=<?php echo $row['id']; ?> ">Edit</a></td>
        <td><input type="submit" name="b_delete" value="delete"></td>
    </tr>
    <?php } ?>       
</table>     
</table>