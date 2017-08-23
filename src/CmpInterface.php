<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 01.06.2016
 * Time: 23:16
 */
namespace Ceive\Util\Data {

	/**
	 * Interface CmpInterface
	 * @package Ceive\Data
	 */
	interface CmpInterface{

		/**
		 * @param $current_value
		 * @param $selection_each
		 * @return int
		 */
		public function __invoke($current_value, $selection_each);

	}
}

