<?php
//Utility function for creating html seelct elements
function generateNumericSelect($name, $from, $to) {
    echo "<select name=\"$name\" class=\"form-select\">";
    for ($i=$from; $i <= $to ; $i++) { 
        echo "<option value=\"$i\">$i</option>";
    }
    echo "</select>";
}

?>