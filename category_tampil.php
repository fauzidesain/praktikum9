<?php
    $category = new App\Category();
    $rows = $category->tampil();
?>
<h2>Category Photo</h2>

<a href="index.php?page=category_input">Tambah</a>
<table>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Edit</th>

    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['text']; ?></td>
        <td><a href="index.php?page=category_edit&id=<?php echo $row['id']; ?> ">Edit</a></td>
        <td><input type="submit" name="b_delete" value="delete"></td>
    </tr>
    <?php } ?>       
</table>     
</table>