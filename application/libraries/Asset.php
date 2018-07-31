<?php
class Asset
{
	static function js($files)
	{
		$script = '';
		if (is_array($files))
		{
			foreach ($files as $file)
			{
				$script .= "<script src='".base_url()."assets/js/".$file."'></script>";
			}
		}
		else
		{
			$script = "<script src='".base_url()."assets/js/".$files."'></script>";
		}
		return $script;
	}
	
	static function css($files)
	{
		$script = '';
		if (is_array($files))
		{
			foreach ($files as $file)
			{
				$script .= "<link href='".base_url()."assets/css/".$file."' rel='stylesheet' type='text/css'>";
			}
		}
		else
		{
			$script = "<link href='".base_url()."assets/css/".$files."' rel='stylesheet' type='text/css'>";
		}
		return $script;
	}
	
	static function font($file)
	{
		return base_url().'/assets/font/'.$file;
	}
	
	static function icon($file)
	{
		return "<link href='".base_url()."assets/img/".$file."' rel='icon'>";
	}
}