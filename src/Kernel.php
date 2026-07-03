<?php

namespace App; // avoid naming conflicts

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait; //reuse code, allow routes and services directory to store inside kernel
use Symfony\Component\HttpKernel\Kernel as BaseKernel;// avoid confusion with our own Kernel class and to extend its functionality.

class Kernel extends BaseKernel //responsible for booting the app,initialising and loading configuration
{
    use MicroKernelTrait; //routes,configuration services
}
