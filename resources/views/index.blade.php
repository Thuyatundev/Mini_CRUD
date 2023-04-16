@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 p-3">
                <form action="{{route('Post#create')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="text-group mb-3">
                        {{-- created alert --}}
                        @if (session('createdData'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('createdData')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>   
                        @endif

                        {{--Updated alert  --}}
                        @if (session('updatedData'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{session('updatedData')}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>   
                        @endif
                        <h2><i class="fa-solid fa-circle-plus text-success"></i> Create Post</h2>
                        <label for="">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Your Title..." value="{{old('title')}}">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        <div class="text-group mb-3">
                        <label for="">Description</label>
                       <textarea name="des" class="form-control @error('des') is-invalid @enderror" cols="30" rows="10" placeholder="Enter Your Message..." >{{old('des')}}</textarea>
                       @error('des')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Image</label>
                           <input type="file" class="form-control" name="image" value="{{old('image')}}" placeholder="Enter Your Price...">
                           @error('image')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="text-group mb-3">
                            <label for="">Price</label>
                           <input type="number" class="form-control" name="price" value="{{old('price')}}" placeholder="Enter Your Price...">
                           @error('price')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                            <div class="text-group mb-3">
                                <label for="">Location</label>
                               <input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="Enter Your location...">
                               @error('location')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="text-group mb-3">
                                <label for="">Rating</label>
                               <input type="number" max="5" min="0" class="form-control" name="rating" value="{{old('rating')}}" placeholder="Enter Your Rating...">
                               @error('rating')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        <div class="text-group col-3">
                        <button type="submit" class="form-control btn btn-outline-success"><i class="fa-solid fa-circle-plus fa-bounce text-danger"></i> Create</button>
                        </div>
                    </form>
            </div>
            <div class="col-7">
                {{--deleted alert  --}}
                @if (session('DeletePost'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session('DeletePost')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>   
                @endif
                
                    <div class="row">
                        <div class="col-5">
                            <h2>Total - {{$posts->total()}}</h2>
                        </div>
                        <div class="col-5 offset-2 mb-4">
                       <form action="{{route('Post#index')}}" method="get">
                        @csrf
                            <div class="row">
                                <div class="d-flex">
                                    <input type="text" class="form-control" name="searchKey" placeholder="Enter Your Search Key..." value="{{request('searchKey')}}">
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
                                   </div>
                            </div>
                       </form>
                    </div>
                    </div>
                    
                    @foreach ($posts as $post)
                    <div class="post-container p-3 shadow-sm mb-3">
                        <div class="row">
                            <h2 class="col-8">{{$post['title']}}</h2>
                            <p  class="col-3 offset-1">{{$post->created_at->format("j-F-Y")}}</p>
                        </div>
                        <p>{{Str::words($post['Description'],30,'.....')}}</p>
                        <span>
                            <small><i class="fa-solid fa-sack-dollar text-primary"></i> {{$post['price']}} Kyats |</small>
                        </span>
                        <span>
                            <small><i class="fa-solid fa-location-dot text-danger"></i> {{$post['location']}} |</small>
                        </span>
                        <span>
                            <small><i class="fa-solid fa-star text-warning"></i> {{$post['rating']}}</small>
                        </span>
                        <div class="text-end">
                            <a href="{{route('Post#view',$post['id'])}}" class="btn-sm btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('Post#delete',$post['id'])}}" class="btn-sm btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa-solid fa-trash text-dark"></i></a>
                        </div> 
                    </div> 
                   
                @endforeach
                {{$posts->appends(request()->query())->links()}}  
            </div>
            
        </div>
        
    </div>   
@endsection