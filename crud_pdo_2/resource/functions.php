<?php
function printRow ($p_id='no id', $p_name='no name', $p_email='no email') {
    if (isset($p_id) || isset($p_name) || isset($p_email)){

        echo "<h4>".$p_id .' || '.$p_name .' || '. $p_email.'<br />'."</h4>";

    }
}