<h1>Форма.</h1>
<form action="checkform.php" method="post">
	<fieldset>
		<legend>Заполните все поля</legend>
			Ваше имя
			<br><input type="text" placeholder="Ваше Имя" name="name">
			<br><br>Сколько вам лет
			<br><input type="text" placeholder="Вам Лет" name="age">
			<br><br>Сообщение
			<br><textarea id="message" name="mail" rows="4" required></textarea>
			<br><br><input type="submit" value="Отправить">
	</fieldset>
</form>