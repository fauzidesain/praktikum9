<?php
    $post = new App\Post();
    $rows = $post->tampil();
?>
<h2>Posting Photo</h2>

<a href="index.php?page=post_input">Tambah</a>
<table>
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Slug</th>
        <th>Judul</th>
        <th>Keterangan</th>
        <th>Kategory</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['slug']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['keterangan']; ?></td>
        <td><?php echo $row['cat_id']; ?></td>
        <td><a href="index.php?page=post_edit&id=<?php echo $row['id']; ?> ">Edit</a></td>
        <td><input type="submit" name="b_delete" value="delete"></td>
    </tr>
    <?php } ?>       
</table>     
</table>