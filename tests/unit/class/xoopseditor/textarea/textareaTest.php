<?php
require_once(dirname(__FILE__).'/../../../init_new.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class FormTextAreaTest extends \PHPUnit\Framework\TestCase
{
    protected $myclass = 'FormTextArea';

    public function test___construct()
    {
		$class = $this->myclass;
		$instance = new $class();
		$this->assertInstanceOf($class, $instance);
		$this->assertInstanceOf('XoopsEditor', $instance);
	}
}
