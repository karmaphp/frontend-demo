<?php namespace App\Service\View;

class SmartyService
{
    /**
     * @var \Smarty
     */
    private $smarty;

    public function __construct()
    {
        $this->smarty = new \Smarty();

        $this->smarty->setTemplateDir(ROOT_DIR . '/views/smarty');
        $this->smarty->setCompileDir(ROOT_DIR . '/views/smarty_c');
    }

    public function fetch($template, $params = [])
    {
        foreach ($params as $key => $value) {
            $this->smarty->assign($key, $value);
        }

        return $this->smarty->fetch($template);
    }
}