<?php
function num_max($nums){
    $max = $nums[0];
    foreach ($nums as $x) {
        if ($x > $max)
            $max = $x;

    }
    return $max;
}

$nums = [56,80,99,69,0];
echo num_max($nums);