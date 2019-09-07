<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkiraController extends Controller
{
    //
    public function XinChao() {
    	echo "Chào các bạn ";;
    }

    public function KhoaHoc($ten){
    	echo "Khóa học : ".$ten;
    }

    public function GetXinchao($name='Bùi Thị Quyên ') {
    	echo "Xin chào : ".$name ;
    }

    public function Ten_hanh_dong($tham_so,Request $request ){
    	//code php
    }
}    
