<?php

// @codingStandardsIgnoreStart

declare(strict_types=1);

namespace Mos\Router;

use function Mos\Functions\{
    destroySession,
    redirectTo,
    renderView,
    renderTwigView,
    sendResponse,
    url
};

/**
 * Class Router.
 */
class Router
{
    public static function dispatch(string $method, string $path): void
    {
        if ($method === "GET" && $path === "/") {
            $data = [
                "header" => "Index page",
                "message" => "Hello, this is the index page, rendered as a layout.",
            ];
            $body = renderView("layout/page.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session") {
            $body = renderView("layout/session.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/session/destroy") {
            destroySession();
            redirectTo(url("/session"));
            return;
        } else if ($method === "GET" && $path === "/debug") {
            $body = renderView("layout/debug.php");
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/twig") {
            $data = [
                "header" => "Twig page",
                "message" => "21 Game",
            ];
            $body = renderTwigView("index.php", $data);
            sendResponse($body);
            return;
        } else if ($method === "GET" && $path === "/some/where") {
            $data = [
                "header" => "Rainbow page",
                "message" => "Hey, edit this to do it youreself!",
            ];
            $body = renderView("layout/page.php", $data);
            sendResponse($body);
            return;

        } else if ($method === "GET" && $path === "/diceTest") {
            $data = [
                "header" => "Dice Hand",
                "message" => "Hey, roll up to 100 dices at the same time!",
            ];
            $body = renderView("layout/diceTest.php", $data);
            sendResponse($body);

            // $callable = new \char19\DiceTest\GameTest();
            // $callable->playGame();

            return;

        } else if ($method === "GET" && $path === "/dice") {
            $data = [
                "header" => "Dice",
                "message" => "Set sides on dice below",
            ];
            $body = renderView("layout/dice.php", $data);
            sendResponse($body);

            // $callable = new \char19\DiceTest\GameTest();
            // $callable->playGame();

            return;
        } else if ($method === "GET" && $path === "/yatzy") {
            $data = [
                "header" => "Dice",
                "message" => "Set sides on dice below",
            ];
            $body = renderView("layout/yatzy.php", $data);
            sendResponse($body);

            // $callable = new \char19\DiceTest\GameTest();
            // $callable->playGame();

            return;
        }

        $data = [
            "header" => "404",
            "message" => "The page you are requesting is not here. You may also checkout the HTTP response code, it should be 404.",
        ];
        $body = renderView("layout/page.php", $data);
        sendResponse($body, 404);
    }
}
