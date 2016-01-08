<?php
class View{
   
    public function render($name){
            require('Views/header.php');
            require('Views/pages/'.$name.'.php');
            require('Views/footer.php');
        }

}

