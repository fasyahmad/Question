@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card">
                    <div class="card-header">
                        All Questions
                    </div>
                    @foreach ($questions as $question)
                    <div class="card-body">
                        <h5 class="card-title">{{ $question->title }}</h5>
                        <p class="card-text">{{$question->body}}</p>
                      </div>
                    @endforeach

                    <div class="justify-center">
                        {{ $questions->links() }} 
                    </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
