<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;
use App\Models\API_Health;
use App\Models\ScheduleAppointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $specialties, $professional, $source, $db;

    public function __construct(ScheduleAppointment $schedule_appointment)
    {
        $this->specialties = "/specialties/list";
        $this->professional = "/professional/list?especialidade_id=";
        $this->source = "/patient/list-sources";

        $this->db = $schedule_appointment;
    }
    public function index(Request $request, API_Health $api)
    {
        $title = 'Healf Schedule | Sistema de Agendamento de Consultas';

        $data = $api->api_feegow($this->specialties);

        return view('site.pages.home.index', compact('title', 'data'));
    }

    public function create_schedule(API_Health $api, $professional_id, $specialty_id)
    {
        $title = 'Healf Schedule | Sistema de Agendamento de Consultas';

        $data_source = $api->api_feegow($this->source);
        $professional_id = $professional_id;
        $specialty_id = $specialty_id;
        
        return view('site.pages.home.create_schedule', compact('professional_id', 'specialty_id', 'title', 'data_source'));
    }

    public function professional(Request $request, API_Health $api)
    {
        $data = $api->api_feegow($this->professional . $request->especialidade_id);

        return response()->json($data);
    }

    public function save_schedule(Request $request)
    {
        $this->db->create($request->all());

        return response()->json();
    }
    // {   
    //     $data = $api->api_feegow($this->specialties);

    //     return response()->json($data);
    // }   


    // public function patient(API_Health $api)

    // {
    //     $data = $api->api_feegow($this->source);

    //     return response()->json($data);
    // }
}
