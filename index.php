<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade PHP</title>
</head>
<?php $fundo = "darkgreen";?>
<style type="text/css">
	body{
		display: flex;
		flex-direction: column;
		height: 900px;
		font-family: arial;
	}
	#section{
		display: flex;
		justify-content: center;
		align-items: flex-start;
	}
	#section2{
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 10vw;
		background-color: <?php echo $fundo;?>;
		}
	#imagem{
		height: auto;
		width: 500px;
	}

</style>
<body>
	<section id="section">
		<?php
		$nome = "Léo Lucas";
		$idade = 16;
		$email = "leo.orsini@etec.sp.gov.br";

		echo '<background-color="'.$fundo.'"><h1>Olá <font color="#000060">'.$nome. '</font>, Bem Vindo! <br> Você Tem <font color="#ef6950">'.$idade.'</font> anos, Seu email é: "<font color="#6888c9">'.$email.'</font>"</h1>' ;
		?>
	</section>
	<section id="section2">
		<?php 
			$name = "Léo Lucas";
			$imagem = "https://veja.abril.com.br/wp-content/uploads/2021/01/PALMEIRAS-2560x1440-1.jpg";
			echo '<background-color="'.$fundo.'"><h1 style="margin-left: 30%;">'.$name.'<br></h1><img src="'.$imagem.'" id="imagem">';
		 ?>
	</section>
</body>
</html>
