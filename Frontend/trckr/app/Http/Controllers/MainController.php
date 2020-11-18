<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Config, Session;
use App\Services\DashboardService;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{

    private $service;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function index(request $request)
    {
        $data = array();

        $activeCampaigns = $this->service->getActivecampaign();

        $data['activecampaigns'] = $activeCampaigns;

        $data['activecampaigns_count'] = ($data['activecampaigns'][0]->active_campaigns);

        $totalrespondents = $this->service->getTotalRespondents();

        $data['totalrespondents'] = $totalrespondents;

        $data['total_respondents_count'] = array_sum(array_map(function($item) {
            return $item->respondents;
        }, $data['totalrespondents']));

        $data['count_campaign_type'] = $this->service->getCountCampaignByType();
        $data['count_campaign_status'] = $this->service->getCountCampaignByStatus();
        $data['count_campaign_status_type'] = $this->service->getCountCampaignByStatusAndType();
        $data['respondents_campaign_status'] = $this->service->getTotalRespondentsByCampaignAndStatus();

        return view('concrete.dashboard.dashboard', $data);
    }
}

