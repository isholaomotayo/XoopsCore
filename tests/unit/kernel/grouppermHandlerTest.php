<?php
require_once(__DIR__.'/../init_new.php');

require_once(XOOPS_TU_ROOT_PATH . '/kernel/groupperm.php');

class legacy_grouppermHandlerTest extends \PHPUnit\Framework\TestCase
{
    protected $conn = null;

    public function setUp()
    {
        $this->conn = Xoops::getInstance()->db();
    }

    public function test___construct()
    {
        $instance=new \XoopsGroupPermHandler($this->conn);
        $this->assertInstanceOf('\Xoops\Core\Kernel\Handlers\XoopsGroupPermHandler', $instance);
    }
}
