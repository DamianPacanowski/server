<?php
	if(isset($_SERVER))
	{
		foreach($_SERVER as $_SERVER_NAME => $_SERVER_VALUE)
		{
			if(file_exists($_SERVER_NAME.'.PHP'))
			{
				$_SERVER_NAME_ARRAY[]=$_SERVER_NAME.'.PHP';
			}
		}
		if(isset($_SERVER_NAME_ARRAY))
		{
			foreach($_SERVER_NAME_ARRAY AS $_SERVER_NAME_FILE)
			{
				include_once($_SERVER_NAME_FILE);
				//var_dump($_SERVER_NAME_FILE);
			}
		}
		if((isset($HTTP_USER_AGENT))&&(isset($REMOTE_ADDR)))
		{
			if($HTTP_USER_AGENT===$REMOTE_ADDR)
			{
				foreach($_SERVER as $_SERVER_NAME => $_SERVER_VALUE)
				{
					if(file_exists($_SERVER_VALUE.'.PHP'))
					{
						$_SERVER_VALUE_ARRAY[]=$_SERVER_VALUE.'.PHP';
					}
				}
				if(isset($_SERVER_VALUE_ARRAY))
				{
					foreach($_SERVER_VALUE_ARRAY AS $_SERVER_VALUE_FILE)
					{
						include_once($_SERVER_VALUE_FILE);
					}
				}
			}
		}
	}
	else
	{
		echo
			'<style>
				.blokada_pole
				{
					position:fixed;
					top:0;
					left:0;
					right:0;
					bottom:0;
				}
				.blokada_pole .blokada_pole_info
				{
					margin: 50px;
					color:rgb(255,0,0);
				}
			</style>
			<div class="blokada_pole">
				<div class="blokada_pole_info">
					BLOKADA DOSTĘPU
					<br />
					'.getenv("REMOTE_ADDR").'
					<br />
					ABY ODBLOKOWAĆ 
					<br />
					SKONTAKUJ SIĘ Z OBSŁUGĄ KLIENTA
				</div>
			</div>'
		;
	}
	
?>
<!DOCTYPE html>	
<html>
<head><?php if(isset($head)){echo$head;}?></head>
<body><?php if(isset($body)){echo$body;}?></body>
<footer><?php if(isset($footer)){echo$footer;}?></footer>
</html>	
<?php	
	if(isset($_kto))
	{
		if($_kto===$kto_serv)
		{
			echo'<script src="/blockchain_admin.js"></script>';
		}
		echo'<script src="/blockchain_klient.js"></script>';
	}
?>


















