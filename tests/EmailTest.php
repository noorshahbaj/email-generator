<?php

namespace Noorshahbaj\EmailGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Noorshahbaj\EmailGenerator\Email;

class EmailTest extends TestCase
{
    public function test_generates_random_email()
    {
        $email = Email::generate();
        $this->assertStringContainsString('@', $email);
    }
}
