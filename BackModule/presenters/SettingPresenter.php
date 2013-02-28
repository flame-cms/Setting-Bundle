<?php
/**
 * SettingPresenter.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    16.02.13
 */

namespace Flame\CMS\BackModule;

class SettingPresenter extends BackPresenter
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
