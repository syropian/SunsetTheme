<?php

class Helper {

    public static function summary($chunkotext) {
        $match = explode("\n",$chunkotext, 2);
        return $match[0];

    }

}