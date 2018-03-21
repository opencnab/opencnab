<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>OpenCNAB - Leitor</title>
	<meta name="description" content="Leitor de Cnab Online">
	<meta name="keywords" content="Cnab, 240, 400, Leitor, Online, Banco, Brasil, Santander, Caixa, Bradesco">
	<meta name="author" content="Tiago Abreu">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115818394-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-115818394-1');
	</script>

	<!-- Google AdSense -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6953774314778359",
		enable_page_level_ads: true
	});
	</script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	p {
		padding: 0;
		margin: 0;
	}
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 1px 0 1px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>CNAB - <?=$register_type?></h1>

	<div id="body">
		

		<?php
			foreach ($positions as $NR => $position) {
		?>

			<p><?=$NR?> - <?=$position['description']?></p>
			<code><?=$data[$NR]?></code>
			<!-- <p style="float:right"><?=$position['pi']?> a <?=$position['pf']?> - <?=$position['rule']?></p> -->
			<br>
			<div style="clear:both"></div>

		<?php
			}
		?>



	</div>

	<p class="footer">
		<?=$this->pagination->create_links()?>
		<!-- Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?> 
	</p>
</div>

</body>
</html>