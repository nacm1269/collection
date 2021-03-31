<?php

require '../functions.php';
use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessShirtDisplay()
    {
        //expected result of test

                $expected = '<div class="jersey"><img src="/test.jpg" alt="football-shirt"/>';
                $expected .= "<h1>randomteam</h1><p>yellowish</p>1875</div>";

        //input to get the expected result

                $input = [
                    'image'=>'/test.jpg',
                    'team'=>'randomteam',
                    'kit_type'=>'yellowish',
                    'year'=>'1875'
                ];


        //real function
                $case = displayShirt($input);


        //comaprison of results
                $this->assertEquals($expected, $case);
    }


    public function testMalformedShirtDisplay()
    {

        $this->expectException(TypeError::class);

        $input = displayShirt(3);


    }
}
