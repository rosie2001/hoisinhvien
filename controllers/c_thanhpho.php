<?php
class c_thanhpho
{
    public function __construct()
    {
    }
    public function index()
    {
        include ("models/m_thanhpho.php");
        $m_thanhpho = new m_thanhpho();
        $thanhpho = $m_thanhpho ->read_production();
        $view="views/v_thanhpho.php";
        include ("templates/front-end/layout.php");
    }
}
