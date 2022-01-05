<?php
class c_canhan
{
    public function __construct()
    {
    }
    public function index()
    {
        include "models/m_canhan.php";
        $m_canhan = new m_canhan();
        $canhan = $m_canhan -> read_production();

        $view="views/v_canhan.php";
        include ("templates/front-end/layout.php");
    }
}