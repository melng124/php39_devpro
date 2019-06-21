<?php
function ham_chuyen_doi_kieu($input, $ucase)
{
    $case = $ucase;
    $narray = array();
    if (!is_array($input))
    {
        return $narray;
    }
    foreach ($input as $key => $value)
    {
        if (is_array($value))
        {
            $narray[$key] = ham_chuyen_doi_kieu($value, $case);
            continue;
        }
        $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
    }
    return $narray;
}
$arrs = ['1', 'B', 'C', 'E'];
ham_chuyen_doi_kieu($arrs,CASE_LOWER);
var_dump($arrs);