<?php

declare(strict_types=1);

namespace Mos\Controller;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class ControllerIndexTest extends TestCase
{

    public function testCreateTheControllerClass()
    {
        
        $controller = new Index();
        $this->assertInstanceOf("Mos\Controller\Index", $controller);
    }
}
