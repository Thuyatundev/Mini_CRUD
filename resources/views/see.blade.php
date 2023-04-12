@extends('master')

@section('content')
        <div class="col-6 offset-3 mt-5">
           
            <div class="row">
                <div class="col-9 offset-2">
                <a href="{{route('Post#index')}}" class="text-decoration-none text-dark" ><i class="fa-solid fa-left-long"></i></i> Back</a>
                <h2 class="mt-3">{{$post['title']}}</h2>
                <p class="text-muted mt-3">{{$post['Description']}}</p>
               </div>
                <div class="col-3 offset-9 mt-3">
                    <button class="btn btn-dark"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                </div>
            </div>
          
            
        </div>
@endsection