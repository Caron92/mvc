<?php

declare(strict_types=1);

namespace Mos\Controller;

//use Nyholm\Psr7\Response;
//use Nyholm\Psr7\Stream;
use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Message\ResponseInterface;

use function Mos\Functions\renderView;

/**
 * Controller for the debug route.
 */
class DiceTest
{
    public function __invoke(): ResponseInterface
    {
        $body = renderView("layout/diceTest.php");

        //Create and return the response
        $psr17Factory = new Psr17Factory();
        return $psr17Factory
        
            ->createResponse(200)
            ->withBody($psr17Factory->createStream($body));
    }
}