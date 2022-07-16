<?php

declare(strict_types=1);

namespace App\Controller;

require_once $_SERVER['DOCUMENT_ROOT']."/src/View.php";

use App\Request;
use App\View;

abstract class AbstractController
{
    protected Request $request;
    protected View $view;

    public const DEFAULT_ACTION = "convertForm";

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->view = new View();
    }
    public function action()
    {
        return $this->request->getParam('action', self::DEFAULT_ACTION);
    }
}