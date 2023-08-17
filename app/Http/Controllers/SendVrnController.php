<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SendVrnController extends Controller
{
    public function search(Request $request)
    {
        $vrn = $request->input('vrn');
        

        // 데이터 처리 로직 (예: 데이터베이스에서 검색 등)

        $response = array(
            'vrn' => $vrn,
            'message' => 'vrn 도착 완료',
        );
        // echo $response;
        return response()->json($response);
    }
}
?>