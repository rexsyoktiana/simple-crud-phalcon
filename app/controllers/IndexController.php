<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        // Add some local CSS resources
        // $this->assets->addCss('assets/bootstrap/dist/css/bootstrap.min.css');

        // And some local JavaScript resources
        $this->assets->addJs('assets/jquery/dist/jquery.min.js');
        $this->assets->addJs('assets/bootstrap/dist/js/bootstrap.min.js');
    }

}

