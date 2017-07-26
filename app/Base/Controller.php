<?php namespace App\Base;

use App\Service\View\SmartyService;
use App\Service\View\TwigService;

class Controller extends \Karma\Controller
{
    /**
     * @Inject
     * @var SmartyService
     */
    protected $smarty;

    /**
     * @Inject
     * @var TwigService
     */
    protected $twig;

}
