<?php
namespace AhmedFathy\Helpers\Relation;



trait ImageRelation{

	public function image()
	{
		$extends = str_singular($this->getTable());
		$getUrl =  $this->hasMany('\App\Image','parent')->where('extends',$extends);
			if ($getUrl->exists()) 
			{
				if (file_exists(public_path($getUrl->first()->url))) 
				{
					return url('public/'.$getUrl->first()->url);
				}else{
					return url(cp_url.'img/no_image.jpg');
				}
			}else{
					return url(cp_url.'img/no_image.jpg');
				
			}
	}
	

	public function firstImage()
	{
		$extends = str_singular($this->getTable());

			$getUrl =  $this->hasMany('\App\Image','parent')->where('extends',$extends);
			if ($getUrl->exists()) 
			{
				if (file_exists(public_path($getUrl->first()->url))) 
				{
					return url('public/'.$getUrl->first()->url);
				}else{
					return url(cp_url.'img/no_image.jpg');
				}
			}else{
					return url(cp_url.'img/no_image.jpg');

			}
	}
	
	public function lastImage()
	{
		$getUrl =  $this->hasMany('\App\Image','parent')->where('extends',$extends);
			if ($getUrl->exists()) 
			{
				if (file_exists(public_path($getUrl->get()->last()->url))) 
				{
					return url('public/'.$getUrl->get()->last()->url);
				}else{
					return url(cp_url.'img/no_image.jpg');
				}
			}else{
					return url(cp_url.'img/no_image.jpg');
				
			}
	}
	

	public function images()
	{
		$extends = str_singular($this->getTable());
		
			$urls = [];
			$getUrls =$this->hasMany('\App\Image','parent')->where('extends',$extends);
			
			if ($getUrls->exists()) 
			{
				foreach ($getUrls->lists('url')->toArray() as $getUrl) 
				{
					if (file_exists(public_path($getUrl))) 
					{
						$urls[] = url('public/'.$getUrl);
					}else{
						$urls[] = url(cp_url.'img/no_image.jpg');
					}
				}
				return $urls;
			}else{
					return [url(cp_url.'img/no_image.jpg')];
				
			}

	}


}