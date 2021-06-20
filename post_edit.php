<?php
    $post = new App\Post();
    $rows = $post->tampil();

?>
<h2>Edit Post </h2>


<form action="post_proses.php" method="POST">
    <table>
        <tr>
            <td>Tanggal</td>
            <td>
                <select name="e_tanggal">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['tanggal']; ?>"><?php echo $row['tanggal']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Slug</td>
            <td>
                <select name="e_slug">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['slug']; ?>"><?php echo $row['slug']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>
                <select name="e_judul">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>
                <select name="e_keterangan">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['keterangan']; ?>"><?php echo $row['keterangan']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select name="e_kategori">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_id']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="b_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>
