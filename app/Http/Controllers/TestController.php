<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(){ 	//route에서 던졌을 때 정의된 method가 없을 경우 불려지는 기본 함수.
    	return 'Test Controller Invoke';
    }


    public function test(){
    	return 'This is test function in Test Controller`';
    }
}
