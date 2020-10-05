@extends('layouts.app')
@section('content')
    <h1>Questionaire: {{$questionaires[2]->name}}</h1>
    <p>Complete the questions</p>
    <form method="post" action="/create" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nameid" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input name="name" type="text" class="form-control" id="nameid" placeholder="Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="ageid" class="col-sm-3 col-form-label">Age</label>
            <div class="col-sm-9">
                <input name="age" type="text" class="form-control" id="ageid"
                       placeholder="Age">
            </div>
        </div>
        <div class="form-group row">
            <label for="genderid" class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-9"> 
                <select class="form-control m-bot15" name="genderselect_id">            
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                 </select>
            </div>
        </div>  
        <div class="form-group row">
            <label for="favsportteamid" class="col-sm-3 col-form-label">Favourite American football team</label>
            <div class="col-sm-9">
                <input name="favourite_sport_team" type="text" class="form-control" id="favsportteamid"
                       placeholder="Favourite American football team">
            </div>
        </div>
        <input type="hidden" id="questionaireId" name="questionaireId" value={{$questionaires[2]->id}}>
        <input type="hidden" id="questionaireSlugName" name="questionaireSlugName" value={{$questionaires[2]->question_slug}}>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection()
