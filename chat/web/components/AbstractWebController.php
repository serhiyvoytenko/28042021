<?php


namespace web\components;

use components\AbstractController;
use helpers\ComponentsTrait;

abstract class AbstractWebController extends AbstractController
{
    use ComponentsTrait;

    public function __construct()
    {
        $guestPages = $this->config()->get('guestPages');
        $currentPage = $this->router()->getCurrentPage();
        if ($this->user()->isGuest() && !in_array($currentPage, $guestPages, true)) {
            $this->redirect($this->config()->get('loginPage'));
        }
    }

    protected function redirect(string $url, int $status = 301, bool $terminate = true): void
    {
//        var_dump($url, $terminate);
        header("Location: {$url}, true, $status");
        if ($terminate){
            exit;
        }

    }

    protected function render (string $template, array $vars = [], string $layout = ''): void
    {
        echo $this->template()?->render($template, $vars, $layout);
    }
}