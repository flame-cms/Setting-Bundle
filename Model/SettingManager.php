<?php
/**
 * SettingManager.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    16.02.13
 */

namespace  Flame\CMS\SettingBundle\Model;

use Flame\CMS\SettingBundle\Model\Setting;

class SettingManager extends \Flame\Model\Manager
{

	/** @var \Flame\CMS\SettingBundle\Model\SettingFacade */
	private $settingFacade;

	/**
	 * @param \Flame\CMS\SettingBundle\Model\SettingFacade $settingFacade
	 */
	public function injectSettingFacade(\Flame\CMS\SettingBundle\Model\SettingFacade $settingFacade)
	{
		$this->settingFacade = $settingFacade;
	}

	/**
	 * @param $data
	 * @return bool
	 */
	public function update($data)
	{
		if(count($data)){
			foreach($data as $name => $value){
				if($setting = $this->settingFacade->getOneByName($name)){
					$setting->setValue($value);
					$this->settingFacade->save($setting);

				}else{
					if($type = $this->settingFacade->getAvailableSettingByName($name)){
						$setting = $this->createSetting($name, $value, $type);
						$this->settingFacade->save($setting);
					}
				}
			}

			return true;
		}else{
			return false;
		}
	}

	/**
	 * @param $name
	 * @param $value
	 * @param int $type
	 * @return \Flame\CMS\SettingBundle\Model\Setting
	 */
	protected function createSetting($name, $value, $type = Setting::STRING)
	{
		$setting = new Setting($name, $value);
		$setting->setType($type);
		return $setting;
	}

}
