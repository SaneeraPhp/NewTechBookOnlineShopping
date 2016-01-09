<?php
class View
{
    public function render($name)
    {
            require('Views/header.php');
            if ($name != 'signin') {
                require('Views/navigation.php');
            }
            require('Views/pages/' . $name . '.php');
            require('Views/footer.php');
    }
}

