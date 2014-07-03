<?php

namespace PegasTest\TestBundle\Helper;



abstract class AClassNameReflector {
	public static function getClassName(){
		return get_called_class();
	}

}