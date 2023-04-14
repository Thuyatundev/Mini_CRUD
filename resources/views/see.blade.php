@extends('master')

@section('content')
        <div class="col-6 offset-3 mt-5">
           
            <div class="row">
                <div class="col-9 offset-2">
                <a href="{{route('Post#index')}}" class="text-decoration-none text-dark" ><i class="fa-solid fa-left-long"></i></i> Back</a>
                <h2 class="mt-3">{{$post['title']}}</h2>
                <p class="text-muted mt-3">{{$post['Description']}}</p>
                <span>
                    <small><i class="fa-solid fa-sack-dollar text-primary"></i> {{$post['price']}} Kyats |</small>
                </span>
                <span>
                    <small><i class="fa-solid fa-location-dot text-danger"></i> {{$post['location']}} |</small>
                </span>
                <span>
                    <small><i class="fa-solid fa-star text-warning"></i> {{$post['rating']}}</small>
                </span>
               </div>
                <div class="col-3 offset-9 mt-3">
                    <a href="{{route('Post#update', $post['id'])}}" class="btn btn-dark">Edit</a>
                </div>
            </div>
          
            
        </div>
@endsection