<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class fluentString extends Controller
{
    public function fluentProc()
    {
        $goc="???The Str::after method returns everything after the given value in a string. The entire string will be returned if the value does not exist within the string App\Http\Controllers\Controller do hung LUOn NGON NHA NHA NHA???";
        $after=Str::of($goc)->after("everything after");
        $afterLast=Str::afterLast($goc,"\\");
        $appendText=Str::of($goc)->append(" APPEND");
        $lowerText=Str::of($goc)->lower();
        $trimText=Str::of($goc)->trim("?");
        $replaceText=Str::replace('do hung', 'ＲＥＰＬＡＣＥ', $goc);
        $titleText=Str::title($goc);
        $slugText=Str::slug($goc, '-');
        $substrText=Str::substr($goc, 4, 15);
        echo "goc: ".$goc."</br>";
        echo "</br>";
        echo "after: ".$after."</br>";
        echo "</br>";
        echo "afterLast: ".$afterLast."</br>";
        echo "</br>";
        echo "appendText: ".$appendText."</br>";
        echo "</br>";
        echo "lowerText: ".$lowerText."</br>";
        echo "</br>";
        echo "replaceText: ".$replaceText."</br>";
        echo "</br>";
        echo "titleText: ".$titleText."</br>";
        echo "</br>";
        echo "slugText: ".$slugText."</br>";
        echo "</br>";
        echo "substrText: ".$substrText."</br>";
        echo "</br>";
        echo "trimText: ".$trimText."</br>";
    }
}
