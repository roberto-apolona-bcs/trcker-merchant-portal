<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator,Redirect,File;
use Config, Session;
use App\Services\MerchantService;


class MerchantController extends Controller
{
    private $merchantService;

    public function __construct(MerchantService $merchantService)
    {
        $this->merchantService = $merchantService;
    }

    public function index()
    {
        $this->view_profile();
    }

    public function debug(Request $request)
    {
        $arr = [
            [
              'ID' => 1
            ]
          ];

          echo array_search(1, array_column($arr, 'ID')); // prints 0 (!== false)

        $session = $request->session()->get('session_merchant');
        $token = ( ! empty($session->token)) ? $session->token : "";
        var_dump($token);
    }

    /**
     * View Profile
     *
     * @return View
     */
    public function view_profile(Request $request)
    {
        $profile = $this->merchantService->getProfile();
        return view('concrete.merchant.profile', ['profile' => $profile]);
    }

    /**
     * Update Profile
     *
     * @return View
     */
    public function modify_profile(Request $request)
    {
        $data = (array) $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:64',
            'address' => 'required|max:64',
            'trade_name' => 'required|max:64',
            'authorized_representative' => 'required|max:64',
            'position' => 'required|max:64',
            'contact_number' => 'required|numeric|digits_between:1,64',
            'email_address' => 'required|email|max:64'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $this->merchantService->update($data);

        $msg = [
            "type" => "success",
            "message" => "Update Merchant Information success!",
        ];

        $profile = $this->merchantService->getProfile();
        return view('concrete.merchant.profile', ['profile' => $profile, 'formMessage' => $msg ]);
    }

    public function rewards()
    {
        //api call for rewards - no api endpoint yet
        //http://localhost:6001/?
        /*
        $api_endpoint = "http://localhost:6001/?";
        $rewards = Http::withToken($this->$_backend_token)->get($api_endpoint,  []);
        $rewards = json_decode($rewards);
        */
        $remaining_budget = "Php 100,000";
        $rewards = array(
            array(
                "no" => 1,
                "campaign_name" => "Campaign 1",
                "budget" => "Php 100,000",
                "duration" => "07/02/2020 to 08/02/2020",
                "status" => "Completed",
            ),
            array(
                "no" => 2,
                "campaign_name" => "Campaign 2",
                "budget" => "Php 100,000",
                "duration" => "07/05/2020 to 08/13/2020",
                "status" => "Completed",
            ),
            array(
                "no" => 3,
                "campaign_name" => "Campaign 3",
                "budget" => "Php 100,000",
                "duration" => "07/13/2020 to 08/25/2020",
                "status" => "Completed",
            ),

        );
        return view('concrete.merchant.rewards', ['rewards' => $rewards, 'remaining_budget' => $remaining_budget]);
    }

    public function changePassword()
    {

    }

    public function changePasswordPost(Request $request)
    {

    }


}
