<?php

namespace Noorshahbaj\EmailGenerator;

use Faker\Factory;

class Email
{
    private static $faker;

    public static function generate(?string $domain = null)
    {
        if (self::$faker === null) {
            self::$faker = Factory::create();
        }

        if ($domain !== null) {
            $firstPart = explode('@', self::$faker->email)[0];

            return $firstPart.'@'.$domain;
        }

        return self::$faker->email;
    }
}
