<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

	//생성자에서 미들웨어 설정 가능 
	// only -> 설정된 메소드에서만, except -> 설정된 메소드만 제외하고
	public function __construct(){
		$this->middleware('auth');


	}

	public function show($id){
		return $id;
	}



	public function edit($id){
		return 'Edit'.$id;
	}
}
