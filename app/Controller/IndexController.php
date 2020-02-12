<?php

namespace App\Controller;

use App\Models\{Job, Project};

class IndexController extends BaseController
{
    public function indexAction()
    {

        $jobs = Job::all();
        $project = Project::all();

        $name = 'Anthony Talavera Carranza';
        $limitMonths = 20;

        return $this->renderHTML('index.twig',[
            'name'=>$name,
            'jobs'=>$jobs
        ]);
        //include '../views/index.php';
    }
}
