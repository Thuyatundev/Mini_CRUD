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

                    <label>Price</label>
                    
                    <input type="number" class="form-control my-2 @error('price') is-invalid @enderror" name="price" value="{{old('price',$post['price'])}}"  placeholder="Enter Your Title...">
                    @error('price')
                         <div class="text-danger">{{$message}}</div>   
                    @enderror

                    <label>Location</label>
                   
                    <input type="text" class="form-control my-2 @error('location') is-invalid @enderror" name="location" value="{{old('location',$post['location'])}}"  placeholder="Enter Your Title...">
                    @error('location')
                         <div class="text-danger">{{$message}}</div>   
                    @enderror

                    <label>Rating</label>
                    
                    <input type="number" min="0" max="5" class="form-control my-2 @error('rating') is-invalid @enderror" name="rating" value="{{old('rating',$post['rating'])}}"  placeholder="Enter Your Title...">
                    @error('rating')
                         <div class="text-danger">{{$message}}</div>   
                    @enderror
                    
                    <input type="submit" class="form-control my-3 btn btn-dark" value="Update">
                </form>
            </div>
          
            
        </div>
@endsection