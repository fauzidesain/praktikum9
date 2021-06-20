<?php
    $post = new App\Post();
    $rows = $post->tampil();

?>

<h2>Tambah Category Photo</h2>

<form action="foto_proses.php" method="POST">
    <table>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="i_tanggal"></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="i_judul"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="i_keterangan"></td>
        </tr>
        <tr>
        <td>Post</td>
            <td>
                <select name="i_id_post">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
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