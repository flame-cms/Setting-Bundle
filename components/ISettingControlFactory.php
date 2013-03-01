<?php
/**
 * ISettingControlFactory.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    16.02.13
 */

namespace Flame\CMS\SettingBundle\Components;

interface ISettingControlFactory
{

	/**
	 * @param \Flame\CMS\SettingBundle\Model\Setting $setting
	 * @return SettingControl
	 */
	public function create(\Flame\CMS\SettingBundle\Model\Setting $setting = null);

}
