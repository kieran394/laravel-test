@extends('layouts.app')
@section('content')
    <h1>Home</h1>
    <p>Choose a questionaire to complete</p>
    <p> <ul class = "list-group">
        @foreach($questionaires as $questionaire)
        
           <li class ="list-group-item"><a href="questionnaire1/{{$questionaire->question_slug}}".>{{$questionaire->name}}</a></li>
        
        @endforeach
    </ul>
    </p>
@endsection()
