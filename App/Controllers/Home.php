<?php

namespace App\Controllers;

use \Core\View;

/*Home controller*/

class Home extends \Core\Controller
{
    /*Before filter */
    protected function before()
    {

    }

    /*After filter */
    protected function after()
    {

    }

    public function indexAction()
    {
        View::renderTemplate('Home/index.html', [
            'name' => 'Ricardo Moura',
            'cities' => ['Campinas', 'Toronto', 'London']
        ]);
    }
}