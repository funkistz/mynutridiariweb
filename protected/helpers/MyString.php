<?php
class MyString {
    public static function explode($str) {
        $arr = explode('|', $str);
        $arr2 = array();
        foreach ($arr as $a) {
            $arr2[] = str_replace('"', '', $a);
        }
        return $arr2;
    }
}