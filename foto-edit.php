<?php
    $photo = new App\Photo();
    $rows = $photo->tampil();

?>
<h2>Edit Info Photo</h2>


<form action="foto_proses.php" method="POST">
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
            <td>Post ID</td>
            <td>
                <select name="e_post_id">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['post_id']; ?>"><?php echo $row['post_id']; ?></option>
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
