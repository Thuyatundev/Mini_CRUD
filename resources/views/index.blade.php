@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 p-3">
                <form action="" method="">
                    @csrf
                    <div class="text-group mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="" placeholder="Enter Your Title...">
                    </div>
                    <div class="text-group mb-3">
                        <label for="">Description</label>
                       <textarea name="" class="form-control" cols="30" rows="10" placeholder="Enter Your Message..."></textarea>
                    </div>
                    <div class="text-group col-2">
                        <input type="submit" class="form-control" value="Create">
                    </div>
                </form>
            </div>
            <div class="col-6 bg-warning">2</div>
        </div>
    </div>   
@endsection