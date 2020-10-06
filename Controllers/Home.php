<?php

class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = "Home";
        $data['page_title'] = "Página Principal";
        $data['page_tag'] = "home";
        $this->views->getView($this, "home", $data);
    }
}
