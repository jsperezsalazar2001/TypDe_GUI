<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function prescribe(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        if((int)$age < 12 || (int)$age > 65){
            $age = 1;
        }else{
            $age = 0;
        }

        $fever = 0;
        if ($request->input('fever') == '1') $fever = 1;
        $headache = 0;
        if ($request->input('headache') == '1') $headache = 1;
        $ocular_pain = 0;
        if ($request->input('ocular_pain') == '1') $ocular_pain = 1;
        $myalgia = 0;
        if ($request->input('myalgia') == '1') $myalgia = 1;
        $arthralgia = 0;
        if ($request->input('arthralgia') == '1') $arthralgia = 1;
        $skin_rash = 0;
        if ($request->input('skin_rash') == '1') $skin_rash = 1;
        $abdominal_pain = 0;
        if ($request->input('abdominal_pain') == '1') $abdominal_pain = 1;
        $vomiting = 0;
        if ($request->input('vomiting') == '1') $vomiting = 1;
        $drowsiness = 0;
        if ($request->input('drowsiness') == '1') $drowsiness = 1;
        $hypotension = 0;
        if ($request->input('hypotension') == '1') $hypotension = 1;
        $hepatomegaly = 0;
        if ($request->input('hepatomegaly') == '1') $hepatomegaly = 1;
        $mucosal_bleeding = 0;
        if ($request->input('mucosal_bleeding') == '1') $mucosal_bleeding = 1;
        $hypothermia = 0;
        if ($request->input('hypothermia') == '1') $hypothermia = 1;
        $increased_hematocrit = 0;
        if ($request->input('increased_hematocrit') == '1') $increased_hematocrit = 1;
        $low_platelet_count = 0;
        if ($request->input('low_platelet_count') == '1') $low_platelet_count = 1;
        $fluid_overload = 0;
        if ($request->input('fluid_overload') == '1') $fluid_overload = 1;
        $extravasation = 0;
        if ($request->input('extravasation') == '1') $extravasation = 1;
        $bleeding_hemothorax = 0;
        if ($request->input('bleeding_hemothorax') == '1') $bleeding_hemothorax = 1;
        $shock = 0;
        if ($request->input('shock') == '1') $shock = 1;
        $organic_damage = 0;
        if ($request->input('organic_damage') == '1') $organic_damage = 1;

        $symptoms = [$age, $fever, $headache, $ocular_pain, $myalgia, $arthralgia, $skin_rash, $abdominal_pain, $vomiting, $drowsiness, $hypotension, $hepatomegaly, $mucosal_bleeding, 
                    $hypothermia, $increased_hematocrit, $low_platelet_count, $fluid_overload, $extravasation, $bleeding_hemothorax, $shock, $organic_damage];

        $symptoms = json_encode($symptoms);
        // Calling the model
        //$command = 'python "'.public_path().'\public\TypDe\run_system.py" '."{$symptoms}";
        $command = 'python3.9 "'.public_path().'/public/TypDe/run_system.py" '."{$symptoms}";
        //$command = 'python -V';
        exec($command, $output);
        // Model results
        $results_code = json_decode($output[0]);
        //dd($results_code);

        // Preparing data for results view

        $data['name'] = $name;
        $data['age'] = $request->input('age');
        $data['average'] = (float) $output[1];
        $data['dengue_type'] = $results_code[0];
        $data['tylenol'] = $results_code[1];
        $data['drink_water'] = $results_code[2];
        $data['drink_rehyd'] = $results_code[3];
        $data['isotonic_solution'] = $results_code[4];
        $data['crystalloid'] = $results_code[5];
        $data['hospitalization'] = $results_code[6];
        $data['percentage'] = $results_code[7];

        $breadlist = array();
        $breadlist[0] = array(__('prescription.prescribe_patient'), "home.index", null, "0");
        $breadlist[1] = array(__('prescription.results'), "", null, "1");
        $data['breadlist'] = $breadlist;

        return view('prescription.results')->with("data",$data);
    }
}
