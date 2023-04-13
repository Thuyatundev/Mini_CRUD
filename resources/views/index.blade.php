@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 p-3">
                <form action="{{route('Post#create')}}" method="post">
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
                        <input type="text" class="form-control" name="title" placeholder="Enter Your Title..." required>
                    </div>
                    <div class="text-group mb-3">
                        <label for="">Description</label>
                       <textarea name="des" class="form-control" cols="30" rows="10" placeholder="Enter Your Message..." required></textarea>
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
                <h2>Total - {{$posts->total()}}</h2>
                    @foreach ($posts as $post)
                    <div class="post-container p-3 shadow-sm mb-3">
                        <h2>{{$post['title']}}</h2>
                        <p>{{Str::words($post['Description'],30,'.....')}}</p>
                        <div class="text-end">
                            <a href="{{route('Post#view',$post['id'])}}" class="btn-sm btn btn-warning"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('Post#delete',$post['id'])}}" class="btn-sm btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa-solid fa-trash text-dark"></i></a>
                        </div> 
                    </div> 
                   
                @endforeach
                {{$posts->links()}}  
            </div>
            
        </div>
        
    </div>   
@endsection