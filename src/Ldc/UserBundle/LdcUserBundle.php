<?php
// src/Sdz/UserBundle/SdzUserBundle.php

namespace Ldc\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LdcUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}