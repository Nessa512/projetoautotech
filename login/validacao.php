?<php
	include login.html;

$email = $_POST['$email'];
$senha = $_POST['$senha'];

$sql = "INSERT INTO logins (email, senha) VALUES ('$email', $senha)";
	$inserir = mysqli_query($conexao, $sql);



<?