<?php
/**
 * ISettingFormFactory.php
 *
 * @author  Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date    16.02.13
 */

namespace Flame\CMS\SettingBundle\Components\Forms;

interface ISettingFormFactory
{

	/**
	 * @param array $availableSettings
	 * @param array $default
	 * @return SettingForm
	 */
	public function create(array $availableSettings, array $default = array());
}
