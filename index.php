<!DOCTYPE html>
<html>
<head>
	<title>Projeto Vídeo Chat</title>
	<script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
</head>
<body>

	<style type="text/css">
		.welcome{
			text-align: center;
			padding: 10px 0;
		}

		body{
			display: flex;
			height: 100vh;
			margin: 0;
			align-items: center;
			justify-content: center;
			padding: 0 50px;
		}


		video{
			max-width: calc(50% - 100px);
			margin: 0 50px;
			box-sizing: border-box;
			border-radius: 2px;
			padding: 0;
			border:1px solid #ccc;
		}

		.title{
			position: fixed;
			top: 10px;
			left: 50%;
			transform:translate(-50%,0);
			font-size: 30px;
		}

	</style>

	<div class="title">Bem-vindo ao chat em tempo real!</div>
	

	<video id="localVideo" autoplay muted></video>
	<video id="remoteVideo" autoplay></video>

	<script src="./script.js"></script>

</body>
</html>