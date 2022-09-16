<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\API_Health;
use App\Models\ScheduleAppointment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $db;

    public function __construct(ScheduleAppointment $schedule)
    {
        $this->db = $schedule;
    }
    public function index(API_Health $api)
    {
        $title = 'Healf Schedule | Sistema de Agendamento de Consultas';
        $registers = $this->db->all();

        return view('admin.pages.dashboard.index', compact('title', 'registers'));
    }
}
