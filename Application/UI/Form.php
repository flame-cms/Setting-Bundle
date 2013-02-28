<?php
/**
 * Form.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    28.02.13
 */

namespace Flame\CMS\SettingBundle\Application\UI;

class Form extends \Flame\Application\UI\Form
{

	public function __construct()
	{
		parent::__construct();

		$this->setRenderer(new \Kdyby\BootstrapFormRenderer\BootstrapRenderer);
	}

}
