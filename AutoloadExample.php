<?php

namespace pitonn\shoppingcart;

use Yii;
use yii\base\Component;
use yii\base\Widget;

class AutoloadExample extends Component
{
	public function init()
	{
		echo 'test_autoload';
		var_dump($this);
	}
}