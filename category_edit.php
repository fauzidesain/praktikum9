<?php
    $category = new App\Category();
    $rows = $category->tampil();

?>
<h2>Edit Category Photo</h2>


<form action="category_proses.php" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <?php foreach ($rows as $row) { ?>
            <td><input type="text" value="<?php echo $row['name']; ?>">
            <?php } ?>

                
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>
                <select name="e_keterangan">
                    <?php foreach ($rows as $row) { ?>
                        <option value="<?php echo $row['text']; ?>"><?php echo $row['text']; ?></option>
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
