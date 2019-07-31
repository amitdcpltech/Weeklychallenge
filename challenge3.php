<?php
function transposeMatrix($input_array)
{
    $transposeArray = array();
	$input_array = array_reverse($input_array);
    foreach ($input_array  as $row => $columns) 
    {
        foreach ($columns as $row2 => $column2)
        {
           $transposeArray[$row2][$row] = $column2;
        }
    }
  return $transposeArray;
}

function  transposeMatrix($input_array) {
    $input_array = array_reverse($input_array);
	array_unshift($input_array, null);
    return call_user_func_array('array_map', $input_array);
}

$data = array(array(1,2,3),array(4,5,6),array(7,8,9));
print_r(transposeMatrix($data));