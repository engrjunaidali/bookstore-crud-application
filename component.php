<?php
function inputElement($icon,$placeholder,$name,$value){
    $ele = "
    <div class='input-group mb-2'>
        <div class='input-group-prepend'>
            <div class='input-group-text bg-warning py-2'>$icon</div>
        </div>
        <input type='text' name='$name' value='$value' class='form-control py-1' placeholder='$placeholder' aria-label='Username'
            aria-describedby='basic-addon1'>
    </div>";
    echo $ele;
}

?>