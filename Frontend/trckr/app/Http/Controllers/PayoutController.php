<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\PayoutService;
use Response;

class PayoutController extends Controller
{

    private $payoutService;

    private $defaultPerPage;

    public function __construct(PayoutService $payoutService)
    {
        $this->payoutService = $payoutService;
        $this->defaultPerPage = Config::get('trckr.table_pagination');
    }


    public function index()
    {
        $this->view();
    }

    public function listAjax(Request $request)
    {
        $data = [
            'count_per_page' => isset($request->per_page)? $request->per_page : $this->defaultPerPage,
            'page' => isset($request->per_page)? $request->page : 1
        ];
        
        $list = $this->payoutService->getAll($data);

        $list = [
            'data' => $list->rows,
            'per_page' => $data['count_per_page'],
            'current_page' => $list->current_page,
            'total_pages' => $list->total_pages
        ];

        return Response::json(['data' => $list, 'msg' => 'Success!' ], 200);
    }

    public function getAll(Request $request)
    {

    }

    public function get(Request $request)
    {

    }

    public function update(Request $request)
    {

    }

    public function exportList(Request $request)
    {
        
    }

}