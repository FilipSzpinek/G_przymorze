<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl"><head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
<title>Księga gości</title>
</head><body>

<form action="index.php" method="post">
<input type="text" name="imie" value="imie" />
<br /><input name="email" type="text" value="e-mail" />
<br /><input name="www" type="text" value="http://" />
<br /><textarea name="wpis" rows="3" cols="30">wpis</textarea>
<br /><input type=submit value=" dodaj! " />
</form>

<?
$ksiega = "ksiega.txt";

$imie = stripslashes(htmlspecialchars($_POST["imie"], ENT_QUOTES));
$email = stripslashes(htmlspecialchars($_POST["email"], ENT_QUOTES));
$www = stripslashes(htmlspecialchars($_POST["www"], ENT_QUOTES));
$wpis = stripslashes(htmlspecialchars($_POST["wpis"], ENT_QUOTES));

  
</body></html>