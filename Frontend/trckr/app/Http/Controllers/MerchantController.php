<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use Illuminate\Http\UploadedFile;   
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Validator,Redirect,File;
use App\Document;



class MerchantController extends Controller
{
    public function index()
    {
        $this->view_profile();
    }

    public function view_profile()
    {
        //payload
        $merchant_id = "";
        $user_id = "";
        
        $api_endpoint = "/merchant/profile"; 
        /*
        $profile = Http::get($api_endpoint,  [
        ]);
        */
        //mock data
        $profile = '{
            "merchant_id": "24f7bab4-a05c-463b-b88c-0a4046e886dd",
            "name": "Coca Cola",
            "address": "Quezon City City",
            "trade_name": "Food and Beverages",
            "sector": "Life",
            "business_structure": "Regular Business?",
            "authorized_representative": "Jason Coke",
            "position": "test",
            "contact_person": "test",
            "contact_number": "test",
            "email_address": "test",
            "business_nature": "test",
            "product_type": "test",
            "createdAt": "2020-08-10T03:49:05.000Z",
            "updatedAt": "2020-08-10T03:49:05.000Z"
          }';
          $profile = json_decode($profile);

        return view('merchant.merchant', ['profile' => $profile]);
    }

    public function modify_profile(Request $request)
    {
        //request()->validate([
        //]);

        $data = $request->all();

        //payload
        $merchant_id = "";
        $user_id = "";
        
        $api_endpoint = "/merchant/profile"; 
        /*
        $profile = Http::get($api_endpoint,  [
        ]);
        */
        //mock data
        $profile = '{
            "merchant_id": "24f7bab4-a05c-463b-b88c-0a4046e886dd",
            "name": "Coca Cola",
            "address": "Quezon City City",
            "trade_name": "Food and Beverages",
            "sector": "Life",
            "business_structure": "Regular Business?",
            "authorized_representative": "Jason Coke",
            "position": "test",
            "contact_person": "test",
            "contact_number": "test",
            "email_address": "test",
            "business_nature": "test",
            "product_type": "test",
            "createdAt": "2020-08-10T03:49:05.000Z",
            "updatedAt": "2020-08-10T03:49:05.000Z"
        }';
        $profile = json_decode($profile);

        return Response()->json([
            "success" => true,
            "messaGE" => "Merchant Details are successfully saved!",
            "file" => $data
        ]);
    }

    public function upload_products(Request $request)
    {
        request()->validate([
            'file'  => 'required|mimes:csv,txt|max:2048',
        ]);
  
        if ($files = $request->file('file')) {
            //store file
            $file = $request->file->store('public/documents');
            $path = $request->file('file')->getPathName();
            //get stored file
            $content = File::get($path);
            //parse
            $content = explode("\r\n", $content);
            //TODO: check header
            $header = explode(";", $content[0]);
            unset($content[0]);
            //TODO: check products
            $products = array();
            foreach ($content as $c) {
                $temp = explode(";", $c);
                $products[] = array(
                    $header[0] => $temp[0], 
                    $header[1] => $temp[1]
                );
            }

            //TODO: trigger API Call to Upload Products

            return Response()->json([
                "success" => true,
                "messaGE" => "Uploaded file successfully",
                "file" => $products
            ]);
            
        }
  
        return Response()->json([
            "success" => false,
            "message" => "Failed to Upload the file",
            "file" => ''
        ]);
    }

    public function products()
    {
        //payload
        $merchant_id = "";
        $user_id = "";
        
        $api_endpoint = "/merchant/product"; 
        /*
        $profile = Http::get($api_endpoint,  [
        ]);
        */
        //mock data
        $profile = '{
            "merchant_id": "24f7bab4-a05c-463b-b88c-0a4046e886dd",
            "name": "Coca Cola",
            "address": "Quezon City City",
            "trade_name": "Food and Beverages",
            "sector": "Life",
            "business_structure": "Regular Business?",
            "authorized_representative": "Jason Coke",
            "position": "test",
            "contact_person": "test",
            "contact_number": "test",
            "email_address": "test",
            "business_nature": "test",
            "product_type": "test",
            "createdAt": "2020-08-10T03:49:05.000Z",
            "updatedAt": "2020-08-10T03:49:05.000Z"
            }';
        $profile = json_decode($profile);

        $products = array(
            array(
                "no" => 1,
                'brand' => 'Head and Shoulders',
                "description" => "Anti-dandruff 50ml for Men",
                "action" => 1,
            ),
            array(
                "no" => 2,
                'brand' => 'Head and Shoulders',
                "description" => "Anti-dandruff 50ml for Woen",
                "action" => 0,
            ),
            array(
                "no" => 3,
                'brand' => 'Colgate',
                "description" => "Activated Carbon",
                "action" => 1,
            )
            
        );
        return view('merchant.products', ['products' => $products]);
    }

    public function upload_branches(Request $request)
    {
        request()->validate([
            'file'  => 'required|mimes:csv,txt|max:2048',
        ]);
  
        if ($files = $request->file('file')) {
            //store file
            $file = $request->file->store('public/documents');
            $path = $request->file('file')->getPathName();
            //get stored file
            $content = File::get($path);
            //parse
            $content = explode("\r\n", $content);
            //TODO: check header
            $header = explode(";", $content[0]);
            unset($content[0]);
            //TODO: check bramches
            $products = array();
            foreach ($content as $c) {
                $temp = explode(";", $c);
                $products[] = array(
                    $header[0] => $temp[0], 
                    $header[1] => $temp[1]
                );
            }

            //TODO: trigger API Call to Upload Branches

            return Response()->json([
                "success" => true,
                "messaGE" => "Uploaded file successfully",
                "file" => $products
            ]);
            
        }
  
        return Response()->json([
            "success" => false,
            "message" => "Failed to Upload the file",
            "file" => ''
        ]);
    }

    public function branches()
    {
        //api call for bramches

        $branches = array(
            array(
                "no" => 1,
                'address' => 'SM Megamall Annex A',
                "coordinates" => "127, 1 192.168",
                "action" => 1,
            ),
            array(
                "no" => 2,
                'address' => 'SM Megamall Annex B',
                "coordinates" => "127, 1 192.168",
                "action" => 0,
            ),
            array(
                "no" => 3,
                'address' => 'Trade and Financial Tower',
                "coordinates" => "127, 1 192.168",
                "action" => 1,
            )
            
        );
        return view('merchant.branches', ['branches' => $branches]);
    }

    public function users()
    {
        //api call for users

        $users = array(
            array(
                "no" => 1,
                'name' => 'Jethro Gutierrez',
                "email_address" => "jet.gutierrez@gmail.com",
                "type" => "Operations",
                "action" => 1,
            ),
            array(
                "no" => 1,
                'name' => 'Camille San Antonio',
                "email_address" => "camille.sanantonio@gmail.com",
                "type" => "Tracker",
                "action" => 0,
            ),
            array(
                "no" => 1,
                'name' => 'Celine Yap',
                "email_address" => "celine.yap@gmail.com",
                "type" => "Operations",
                "action" => 1,
            ),
            
        );
        return view('merchant.users', ['users' => $users]);
    }

    public function rewards()
    {
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
                "no" => 1,
                "campaign_name" => "Campaign 2",
                "budget" => "Php 100,000",
                "duration" => "07/05/2020 to 08/13/2020",
                "status" => "Completed",
            ),
            array(
                "no" => 1,
                "campaign_name" => "Campaign 3",
                "budget" => "Php 100,000",
                "duration" => "07/13/2020 to 08/25/2020",
                "status" => "Completed",
            ),
            
        );
        return view('merchant.rewards', ['rewards' => $rewards, 'remaining_budget' => $remaining_budget]);
    }
}