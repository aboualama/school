<?php

namespace App\Traits;

 
trait CustodyTrait {
 
     
    public function get_form($type , $category)
    {      
        $arr1 = ['1', '3', '4', '6', '7', '11'];                // 36
        $arr2 = ['2'];                                          // test اختبارات 
        $arr3 = ['5'];                                          // records
        $arr4 = ['8'];                                          // 43  معامل ومختبرات
        $arr5 = ['9', '10'];                                    // dec 
        $arr6 = ['12', '17'];                                   // book 
        $arr7 = ['13', '14', '15', '16', '18', '19', '20'];     // ch

        switch ($type) {
            case in_array($type, $arr1):
                $form = "form_1";
                break;
            case in_array($type, $arr2):
                $form = "form_2";
                break;
            case in_array($type, $arr3):
                $form = "form_3";  
                break;
            case in_array($type, $arr4):
                $form = "form_4";  
                break;
            case in_array($type, $arr5):
                $form = "form_5";  
                break;
            case in_array($type, $arr6):
                $form = "form_6";  
                break;
            case in_array($type, $arr7):
                $form = "form_7";  
                break;
            default: 
                $form = ($category == 1) ? "form_1" : "form_7";  
        } 
        return  $form ; 
    }


     
    public function get_table($type , $category)
    {      
        $arr1 = ['1', '3', '4', '6', '7', '11'];                // 36
        $arr2 = ['2'];                                          // test
        $arr3 = ['5'];                                          // records  ؟؟؟؟؟؟؟؟
        $arr4 = ['8'];                                          // 43
        $arr5 = ['9', '10'];                                    // dec 
        $arr6 = ['12', '17'];                                   // book 
        $arr7 = ['13', '14', '15', '16', '18', '19', '20'];     // ch

        switch ($type) {
            case in_array($type, $arr1):
                $table = "table_1";
                break;
            case in_array($type, $arr2):
                $table = "table_2";
                break;
            case in_array($type, $arr3):
                $table = "table_3";  
                break;
            case in_array($type, $arr4):
                $table = "table_4";  
                break;
            case in_array($type, $arr5):
                $table = "table_5";  
                break;
            case in_array($type, $arr6):
                $table = "table_6";  
                break;
            case in_array($type, $arr7):
                $table = "table_7";  
                break;
            default: 
                $table = ($category == 1) ? "table_1" : "table_7";  
        } 
        return  $table ; 
    }


}