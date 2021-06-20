<?php
    $photo = new App\Photo();
    $rows = $photo->tampil();

?>
<h2>Tambah Album Photo</h2>

<form action="album_proses.php" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="name" name="i_album_name"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="i_keterangan"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <select name="i_id_photo">
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