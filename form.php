<?php
if (isset($_GET['message'])) {
	$message = $_GET['message'];
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
<h1>フォーマットに文を入力すると、下に表示されます</h1>
<form action="form.php" method="get">
<textarea name="message" rows="4" cols="40"></textarea>
<input type="submit">
</form>
<?php echo $message; ?>
</body>
</html>
