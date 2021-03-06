<?php
/**
 * SettingControl.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    16.02.13
 */

namespace Flame\CMS\SettingBundle\Components;

class SettingControl extends \Flame\Application\UI\Control
{

	/** @var \Flame\CMS\SettingBundle\Model\SettingFacade */
	private $settingFacade;

	/** @var \Flame\CMS\SettingBundle\Components\Forms\ISettingFormFactory */
	private $settingFormFactory;

	/**
	 * @param \Flame\CMS\SettingBundle\Components\Forms\ISettingFormFactory $settingFormFactory
	 */
	public function injectSettingFormFactory(\Flame\CMS\SettingBundle\Components\Forms\ISettingFormFactory $settingFormFactory)
	{
		$this->settingFormFactory = $settingFormFactory;
	}

	/**
	 * @param \Flame\CMS\SettingBundle\Model\SettingFacade $settingFacade
	 */
	public function injectSettingFacade(\Flame\CMS\SettingBundle\Model\SettingFacade $settingFacade)
	{
		$this->settingFacade = $settingFacade;
	}

	/**
	 * @return Forms\SettingForm
	 */
	protected function createComponentSettingForm()
	{
		$form = $this->settingFormFactory->create($this->settingFacade->getAvailableSetting(), $this->getDefaultValues());
		$form->onSuccess[] = $this->presenter->lazyLink('this');
		return $form;
	}

	/**
	 * @return array
	 */
	private function getDefaultValues()
	{
		$prepared = array();

		if(count($defaults = $this->settingFacade->getLast())){
			foreach($defaults as $setting){
				$prepared[$setting->getName()] = $setting->getValue();
			}
		}

		return $prepared;
	}
}
