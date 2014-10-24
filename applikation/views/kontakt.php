<?php
class view
{
    private $data = array();

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

    public function printLoginForm() {
        if(isset())
        $html = '
        <form action="?controller=kontakt" method="post">
            <input name="test">
            <button type="submit">Senden</button>
        </form>';

        $this->data["loginform"] = $html;
    }
}
?>