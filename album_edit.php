<?php
    $album = new App\Album();
    $rows = $album->tampil();

?>
<h2>Edit Album Photo</h2>


<form action="album_proses.php" method="POST">
    <table>
        <tr>
            <td>Nama Album</td>
            <td> 
                <?php foreach ($rows as $row) { ?>
                    <td><input type="text" value="<?php echo $row['album_name']; ?>">
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>
                <?php foreach ($rows as $row) { ?>
                    <td><input type="text" value="<?php echo $row['keterangan']; ?>">
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Photo ID</td>
            <td> 
                <?php foreach ($rows as $row) { ?>
                    <td><input type="text" value="<?php echo $row['photo_id']; ?>">
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="b_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>
