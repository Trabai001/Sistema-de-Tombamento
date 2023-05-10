<?php 
class Usuario{

function autenticar($email, $senha,){
	$pdo = new PDO("mysql:host=localhost;dbname=sistema_de_tombamento","root","");
				$sql="SELECT * FROM usuario WHERE email = :email and senha = :senha";
				$consulta = $pdo->prepare($sql);
				$consulta->BindValue(':email',$email);
				$consulta->BindValue(':senha',$senha);
				$consulta->execute();  
				

			
				if($consulta->rowCount()>0){
					header('Location: ../view/TelaDeC.php'); 
				}else{
					header('Location: ../index.php');
					
		
				}
		}
}
?>