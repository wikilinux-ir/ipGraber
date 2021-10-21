<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wolcome</title>
	<style>

		input{
			width: 30%;
			padding:10px;
			text-align: center;
			border-radius: 6px;
		}
		input:focus{
			outline:1px solid orange;
		}
		body{
			background-color: #353535;
            color: #e9e9e7;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 100px;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}
		form{
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
		}
		a {
			display: block;
			margin: 20px;
			text-decoration: none;
			color:#fff;
			background: #0078a0;
			padding: 20px 35px;
			border-radius: 6px;
			transition : all 500ms linear;
		}
		a:hover {
			background: #43626d;
		}
		button {
			margin: 20px;
		}
		p {
			color:#009d00;
			line-height: 30px;

		}
		div {
			margin-bottom: 30px;
		}

	</style>
</head>
<body>

	<div>
		<h3>it's a ip graber</h3>
		<p>to use this copy below link and sent to target user and after click target on link , click on Get result to see ip and other information<br>
	for get a new link refresh this page</p>
	</div>
	<form action="<?=$_SERVER['PHP_SELF'];?>">
	<input id="url"type="text" value="<?=DOMAIN . "ip-graber/index.php?requestId={$a->getToken()}";?>">
	<!-- <button id="btn">Copy link</button><br> -->
	<a href="<?=DOMAIN . "ip-graber/result.php?resultId={$a->getToken()}"?>">Get Result</a>
	</form>

	<script>
    const inp = document.querySelector("#url");
	const btn = document.querySelector("#btn");


</script>
</body>
</html>
