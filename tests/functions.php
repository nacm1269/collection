<?php

require 'collection/functions.php';
use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessShirtDisplay() {
        //expected result of test

                $expected = '<div class="jersey"><img src="' $shirt['test-here'] '" alt="football-shirt"/>';
                $expected .= '<h1>' $shirt['team'] "</h1><p>" $shirt['kit_type'] "</p>" $shirt['year'] '</div>';


    }
}
