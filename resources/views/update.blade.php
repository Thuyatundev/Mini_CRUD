@extends('master')

@section('content')
        <div class="col-6 offset-3 mt-5">
           
            <div class="row">
                <div class="col-8 offset-2">
                <a href="{{route('Post#view',$post['id'])}}" class="text-decoration-none text-dark" ><i class="fa-solid fa-left-long"></i></i> Back</a>
                <form action="{{route('Updated#post')}}" method="post">
                    @csrf
                    <label>Title</label>
                    <input type="hidden" name="postId" value="{{$post['id']}}">
                    <input type="text" class="form-control my-2 @error('title') is-invalid @enderror" name="title" value="{{old('title',$post['title'])}}"  placeholder="Enter Your Title...">
                    @error('title')
                         <div class="text-danger">{{$message}}</div>   
                    @enderror

                    <label>Description</label>
                    <textarea name="des" class="form-control my-2 @error('des') is-invalid @enderror" cols="30" rows="10"  placeholder="Enter Your Message...">{{old('des',$post['Description'])}}</textarea>
                    @error('des')
                         <div class="text-danger">{{$message}}</div>   
                    @enderror
                    <input type="submit" class="form-control my-3 btn btn-dark" value="Update">
                </form>
            </div>
          
            
        </div>
@endsection