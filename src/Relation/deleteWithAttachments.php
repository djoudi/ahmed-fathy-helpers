<?php
namespace AhmedFathy\Helpers\Relation;



trait deleteWithAttachments{

	public function deleteWithAttachments()
	{
		$extends = str_singular($this->getTable());
		\Control::destroy(request(),$this->id,$extends);	
	}


}
