<?php
	if((empty(getenv("REMOTE_ADDR")))||(getenv("REMOTE_ADDR")=='')||(getenv("REMOTE_ADDR")==null))
	{
		
	}
	elseif((!empty(getenv("REMOTE_ADDR")))&&(getenv("REMOTE_ADDR")!='')&&(getenv("REMOTE_ADDR")!=null))
	{
		$SERVER[]=$_SERVER["REMOTE_ADDR"];
		$REMOTE_ADDR=$_SERVER_VALUE;
	}
?>