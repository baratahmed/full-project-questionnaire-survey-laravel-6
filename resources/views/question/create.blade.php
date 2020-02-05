@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>
                <div class="card-body">
                    <form action="/questionnaires/{{$questionnaire->id}}/questions" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" name="question[question]" value="{{old('question.question')}}" class="form-control" id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                            <small id="questionHelp" class="form-text text-muted">Give your question</small>
                            @error('question.question')
                                <small class="text-danger">{{$message}}</small>
                            @enderror                            
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">Give Choices</small>
                                <div>
                                    <div class="form-group">
                                        <label for="answer1">Choice One</label>
                                        <input type="text" name="answers[][answer]" value="{{old('answers.0.answer')}}" class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice One">
                                        @error('answers.0.answer')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror                            
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer2">Choice Two</label>
                                        <input type="text" name="answers[][answer]" value="{{old('answers.1.answer')}}" class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice Two">
                                        @error('answers.1.answer')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror                            
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer3">Choice Three</label>
                                        <input type="text" name="answers[][answer]" value="{{old('answers.2.answer')}}" class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Enter Choice Three">
                                        @error('answers.2.answer')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror                            
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer4">Choice Four</label>
                                        <input type="text" name="answers[][answer]" value="{{old('answers.3.answer')}}" class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Enter Choice Four">
                                        @error('answers.3.answer')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror                            
                                    </div>
                                </div>
                            </fieldset>
                        </div>
            
                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
