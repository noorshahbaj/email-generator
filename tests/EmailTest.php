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

    public function test_generates_random_email_with_domain()
    {
        $email = Email::generate('shahbaj.com.bd');
        $this->assertStringContainsString('@shahbaj.com.bd', $email);
    }
}
