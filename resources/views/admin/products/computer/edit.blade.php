@extends('layouts.admin')
@section('content')
    <h1 class="text-center p-3">{{__('Update Item')}}</h1>
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('admin.computer.update',$product->id)}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{__('Computer name')}}</label>
                    <input type="text" class="form-control" id="name" name="name"  value="{{$product->name}}">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">{{__('Color')}}</label>
                    <input type="text" class="form-control" id="color" name="color" value="{{$product->color}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">{{__('Price')}}</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
                </div>
                <div class="mb-3">
                    <label for="character" class="form-label">{{__('Character')}}</label>
                    <input type="text" class="form-control" id="character" name="character" value="{{$product->character}}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">{{__('Image')}}</label>
                    <input type="text" class="form-control" id="image" name="img" value="{{$product->img}}">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">{{__('Status')}}</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{$product->status}}">
                </div>
                <button type="submit" class="btn btn-primary">{{__('Update')}}</button>
            </form>
        </div>
    </div>
@endsection


