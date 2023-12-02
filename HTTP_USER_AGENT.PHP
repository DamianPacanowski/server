<?php
	if((empty(getenv("HTTP_USER_AGENT")))||(getenv("HTTP_USER_AGENT")=='')||(getenv("HTTP_USER_AGENT")==null))
	{
		
	}
	elseif((!empty(getenv("HTTP_USER_AGENT")))&&(getenv("HTTP_USER_AGENT")!='')&&(getenv("HTTP_USER_AGENT")!=null))
	{
		$SERVER[]=$_SERVER["HTTP_USER_AGENT"];
		$HTTP_USER_AGENT=$_SERVER_VALUE;
	}
?>