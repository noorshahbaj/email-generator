<?php

namespace Noorshahbaj\EmailGenerator;

use Faker\Factory;

class Email
{
    private static $faker;

    public static function generate()
    {
        if (self::$faker === null) {
            self::$faker = Factory::create();
        }

        return self::$faker->email;
    }
}
