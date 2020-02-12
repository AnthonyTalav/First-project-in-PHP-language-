<?php

namespace App\Controller;

class AdminController extends BaseController
{

    public function getIndex(){

        return $this->renderHTML('admin.twig');

    }
    
}
