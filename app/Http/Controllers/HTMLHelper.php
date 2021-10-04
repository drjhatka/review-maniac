<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Form;

class HTMLHelper extends Controller
{

    public static function label($for, $text, $options, $div_size){
        $div = '<div class="col-lg-'.$div_size.'">'.
            Form::label($for, $text, $options).
        '</div>';
        echo $div;

    }

    public static function add_text_input($name, $options, $div_size=4, $isHidden =false ){
        $div = '<div class="col-lg-'.$div_size.'">'.
            Form::text($name, null, $options).
        '</div>';

        echo $div;
    }

    public static function add_select_input($name, $list, $options,$div_size ){
        $div = '<div class="col-lg-'.$div_size.'">'.
            Form::select($name, $list, true, $options).
        '</div>';

        echo $div;
    }//end method

    public static function add_date_input($name, $list, $options,$div_size ){
        $div = '<div class="col-lg-'.$div_size.'">'.
            Form::date($name, null, $options).
        '</div>';

        echo $div;
    }//end method

    public static function add_checkbox_input($name, $value, $options,$div_size ){
        $div = '<div class="col-lg-'.$div_size.'">'.
            Form::checkbox($name, $value, false, $options).
        '</div>';

        echo $div;
    }//end method

    
}
