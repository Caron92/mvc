<?php

declare(strict_types=1);

namespace Mos\Controller;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use function Mos\Controller\ControllerBase;

class ControllerBaseTest extends TestCase
{

    public function testCreateTheControllerClass()
    {
        $controller = new ControllerBase();
        $this->assertInstanceOf("Mos\Controller\ControllerBase", $controller);
    }
}
