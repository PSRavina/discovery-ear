<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $request->validate([
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'option5' => 'required',
            'option6' => 'required',
            'option7' => 'required',
            'option8' => 'required',
            'option9' => 'required',
            'option10' => 'required',
            'option11' => 'required',
            'option12' => 'required',
            'option13' => 'required',
            'option14' => 'required',
            'option15' => 'required',
            'option16' => 'required',
            'option17' => 'required',
            'option18' => 'required',
            'option19' => 'required',
            'option20' => 'required',
            'option21' => 'required',
            'option22' => 'required',
            'option23' => 'required',
            'option24' => 'required',
            'option25' => 'required',
            'option26' => 'required',
            'option27' => 'required',
            'option28' => 'required',
        ]);

        $surveyNew = new Survey;
        $surveyNew->user_id = Auth::id();
        $surveyNew->request_date = new Carbon();
        $surveyNew->option1 = $request->option1;
        $surveyNew->option2 = $request->option2;
        $surveyNew->option3 = $request->option3;
        $surveyNew->option4 = $request->option4;
        $surveyNew->option5 = $request->option5;
        $surveyNew->option6 = $request->option6;
        $surveyNew->option7 = $request->option7;
        $surveyNew->option8 = $request->option8;
        $surveyNew->option9 = $request->option9;
        $surveyNew->option10 = $request->option10;
        $surveyNew->option11 = $request->option11;
        $surveyNew->option12 = $request->option12;
        $surveyNew->option13 = $request->option13;
        $surveyNew->option14 = $request->option14;
        $surveyNew->option15 = $request->option15;
        $surveyNew->option16 = $request->option16;
        $surveyNew->option17 = $request->option17;
        $surveyNew->option18 = $request->option18;
        $surveyNew->option19 = $request->option19;
        $surveyNew->option20 = $request->option20;
        $surveyNew->option21 = $request->option21;
        $surveyNew->option22 = $request->option22;
        $surveyNew->option23 = $request->option23;
        $surveyNew->option24 = $request->option24;
        $surveyNew->option25 = $request->option25;
        $surveyNew->option26 = $request->option26;
        $surveyNew->option27 = $request->option27;
        $surveyNew->option28 = $request->option28;
        $surveyNew->save();
        return view('success');
    }
}
