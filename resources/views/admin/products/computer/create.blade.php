@extends('layouts.admin')
@section('content')
    <h1 class="text-center p-3">{{__('Create Item')}}</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('admin.computer.store')}}" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{__('Computer name')}}</label>
                    <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">{{__('Color')}}</label>
                    <input type="text" class="form-control" id="color" name="color" value="{{old('color')}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">{{__('Price')}}</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                </div>
                <div class="mb-3">
{{--                    <label for="character" class="form-label">{{__('Character')}}</label><br>--}}
                    <textarea name="character" placeholder="character..." cols="57" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">{{__('Image')}}</label>
                    <input type="file" class="form-control" id="image" name="img" value="{{old('img')}}">

                </div>
                <div class="mb-5">
                    <label for="stat" class="form-label">{{__('Status')}}</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected value="1">active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
            </form>
        </div>
    </div>
@endsection


