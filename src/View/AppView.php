<?php
namespace App\View;

use Cake\View\View;

class AppView extends View
{
    public function initialize()
    {
        parent::initialize();

        $this->loadHelper('Markdown.Markdown');
    }
}