<?php
/**
 * ISettingControlFactory.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    16.02.13
 */

namespace Flame\CMS\SettingBundle\Components\Settings;

interface ISettingControlFactory
{

	/**
	 * @param \Flame\CMS\SettingBundle\Entity\Settings\Setting $setting
	 * @return SettingControl
	 */
	public function create(\Flame\CMS\SettingBundle\Entity\Settings\Setting $setting = null);

}
