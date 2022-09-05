
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Form Register</title>
</head>
<body>
<form class="" action="proses.php" method="post">
<label for="">Nama</label>
<input type="text" name="" autocomplete="off"><br>
<label for="">Umur</label>
<input type="text" name="" autocomplete="off"><br>
<label for="">Email</label>
<input type="text" name="" autocomplete="off"><br>
<input type="radio" name="jeniskelamin" value="Pria">Pria
<input type="radio" name="jeniskelamin" value="Wanita">Wanita <br>
<label for="">Agama</label>
<select class="" name="agama">
<option value="islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="buddha">Buddha</option>
<option value="hindu">Hindu</option>
<option value="konghucu">Konghucu</option>
</select><br>
<label for="">Komentar</label><br>
<textarea name="komentar" rows="8" cols="80"></textarea><br>
<button type="submit" name="submit" value= <?php echo date("h:i:sa"); ?> >Submit</button>
</form>
</body>
</html>
