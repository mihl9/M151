<?php
class view
{
    public function __construct()
    {

    }

    public function  showtxt($data)
    {
        //return '<h1>' . $data . '</h1>';
        ob_start();
        include('./template/Template1.html');
        $output= ob_get_contents();
        ob_end_clean();
        return $output;
    }
}
?>