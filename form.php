<?php
if (isset($_GET['message'])) {
	$message = htmlspecialchars($_GET['message'], ENT_QUOTES);
} else {
	$message = '何か入力してください';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>git_study</title>
</head>
<body>
<form action="form.php" method="get">
<textarea name="message" rows="4" cols="40"></textarea>
<input type="submit">
</form>
<?php echo $message; ?>
</body>
</html>
