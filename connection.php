<?php

function connect(){
    return new mysqli("127.0.0.1",  "root", "", "bucazona",  3306);
}
?>