<?php

namespace App\Http\Controllers;

use App\Models\Questionaire_result;
use App\Models\Questionnaire;
use Illuminate\Http\Request;
class QuestionnaireController extends Controller
{

    public function index()
    {
        $data = Questionnaire::all();
        return view('pages.index')->with('questionaires', $data);
    }

    public function single(Questionnaire $questionnaire)
    {
        // $questionnaire contains our questionnaire object.
        return $questionnaire;
    }

    public function showSlug($question_slug)
    {       
        $questionnaire = Questionnaire::all();
       
        //return $questionaireDataString;
        return view('pages.'.$question_slug)->with('questionaires', $questionnaire);
    }

    public function create(Request $request)
    {
        //checks for any errors
        $this->validate($request, [
        'name' => 'required',
        'age' => 'required|numeric',
        'genderselect_id' => 'required',
        'favourite_sport_team' => 'required'
        ]
        );
        $post = new Questionaire_result;
        $post->name = $request->input('name');
        $post->age = $request->input('age');
        $post->gender = $request->input('genderselect_id');
        $post->favouriteSportTeam = $request->input('favourite_sport_team');
        $post->questionaire_id = $request->input('questionaireId');
        $post->save();

        //stay on same page when submitted
        return redirect('questionnaire1/'.$request->input('questionaireSlugName'))->with('success', 'Questionnaire entry added');
       
    }
}
