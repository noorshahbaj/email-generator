<?php

namespace Noorshahbaj\EmailGenerator\Tests;

use Noorshahbaj\EmailGenerator\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function test_generates_random_email()
    {
        $email = Email::generate();
        $this->assertStringContainsString('@', $email);
    }
}
