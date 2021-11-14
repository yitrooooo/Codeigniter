<html>
<head>
 <title>Contoh 3</title>
</head>
<body>
<h1> Masukan Identitas Anda<h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<pre>
    Nama : <input type="text" name="nama">
    No Telp: <input type="text" name="notelp">
    Alamat : <textarea name="alamat" rows="5" cols="40"></textarea>
    <input type="submit" value="TAMPIL"><input type="reset" value="BATAL">
</pre>
</form>
<?php
    $nama = $_POST['nama'];
    $telp = $_POST['notelp'];
    $alamat = $_POST['alamat'];
    if(!empty($nama)){
        echo "Nama : $nama <br>"; }
    if(!empty($telp)){
        echo "No Telp : $telp <br>"; }
    if(!empty($alamat)){
        echo "Alamat : $alamat <br>"; }
?>
</body>
</html> 
