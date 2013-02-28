<?php
/**
 * SettingPresenter.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    16.02.13
 */

namespace Flame\CMS\AdminModule;

class SettingPresenter extends AdminPresenter
{

	/**
	 * @autowire
	 * @var \Flame\CMS\SettingBundle\Components\Settings\ISettingControlFactory
	 */
	protected $settingControlFactory;

	/**
	 * @return \Flame\CMS\SettingBundle\Components\Settings\SettingControl
	 */
	protected function createComponentSetting()
	{
		return $this->settingControlFactory->create();
	}

}
