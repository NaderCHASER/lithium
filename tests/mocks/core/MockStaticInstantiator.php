<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2010, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\tests\mocks\core;

/**
 * @deprecated
 */
class MockStaticInstantiator extends \lithium\core\StaticObjectDeprecated {

	protected static $_classes = ['request' => 'lithium\tests\mocks\core\MockRequest'];

	public static function instance($name, array $config = []) {
		return static::_instance($name, $config);
	}

	protected static function _foo() {
		return false;
	}
}

?>