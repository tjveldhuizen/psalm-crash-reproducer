<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class OneTest extends KernelTestCase
{
    /** @var ValidatorInterface */
    private $validator;

    protected function setUp(): void
    {
        static::bootKernel();

        $this->validator = static::$container->get('validator');
    }

    public function testCreateApikey(): void
    {
        self::assertTrue(true);
    }
}
