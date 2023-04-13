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
                    <input type="text" class="form-control my-2" name="title" value="{{$post['title']}}" required placeholder="Enter Your Title...">
                    <label>Description</label>
                    <textarea name="des" class="form-control my-2" cols="30" rows="10" required placeholder="Enter Your Message...">{{$post['Description']}}</textarea>
                    <input type="submit" class="form-control my-3 btn btn-dark" value="Update">
                </form>
            </div>
          
            
        </div>
@endsection