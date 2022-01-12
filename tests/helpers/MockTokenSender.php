<?php
namespace test\helpers;

use  expresscore\rbac\interfaces\TokenSenderInterface;
use  expresscore\rbac\interfaces\UserInterface;


class MockTokenSender implements TokenSenderInterface
{
    public function sendToken(UserInterface $user, $content)
    {

    }

    public function getCommunicationEndpoint(UserInterface $user) : ?string
    {
        return 'test endpoint';
    }
}
