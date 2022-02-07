<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Lang;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Education;
use App\Models\Contact;
use App\Models\Social;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{

    public function index()
    {
        $personal = Personal::find(1);
        $skills = Skill::where('personal_id', '=', 1)->get();
        $langs = Lang::where('personal_id', '=', 1)->get();
        $socials = Social::where('personal_id', '=', 1)->get();
        $projects = Project::where('personal_id', '=', 1)->get();
        $projects = Project::where('personal_id', '=', 1)->get();
        $experiences = Experience::with('jobs')->where('personal_id', '=', 1)->get();
        $educations = Education::with('edudetails')->where('personal_id', '=', 1)->get();

        $result = [
            'personal' => $personal,
            'skills' => $skills,
            'langs' => $langs,
            'projects' => $projects,
            'experiences' => $experiences,
            'educations' => $educations,
            'socials' => $socials,
        ];
        return $result;
        //return $_SERVER['REMOTE_ADDR'];

    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->recuriname = $request->recuriname;
        $contact->subject = $request->subject;
        $contact->email = $request->email;
        $contact->msg = $request->msg;
        $contact->save();
        return response()->json([
            'message' => 'Your message has been sent'
        ]);
    }

    public function create()
    {
        $pdfname = Personal::find(1);
        $pdf = $pdfname['cvfile'];
        $pdfpath = public_path('pdf/' . $pdf);
        return response()->download($pdfpath);
    }

    /*public function getUserIpAddr()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }*/
}
