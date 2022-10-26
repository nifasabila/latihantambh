<!DOCTYPE html>
<html lang="en">
<head>
    <title>from bantuan blt</title>
</head>
<body>
    <h1>FORM Bantuan BLT</h1>
    <form action="proses_tambah.php" method="POST">
        <form>
        <fieldset>
            <p>
                <label for="nama"> Nama Lengkap : </label>
                <input type="text" name="nama"/>
</p>
<p>
    <label for="jb" name="jb"> Jenis Bantuan :</label>
    <label><input type="radio" name="jb" value="tunai"/> Tunai </label>
    <label><input type="radio" name="jb" value="nontunai"/> Non Tunai </label>
    <label><input type="radio" name="jb" value="beras"/> Beras </label>
    <label><input type="radio" name="jb" value="minyak"/> Minyak</label>
    <label><input type="radio" name="jb" value="gula"/> Gula</label>
</p> 
<p>
    <input type="submit" value="tambah" name="tambah"/>
</P>
</fieldset>
</form>
</body>
</html>