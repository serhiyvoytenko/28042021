<?php


namespace web\components;

//use App;
use components\AbstractController;
use helpers\ComponentsTrait;
//use Magento\Tests\NamingConvention\true\string;

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