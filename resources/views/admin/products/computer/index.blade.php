@extends('layouts.admin ')
@section('content')
    <div class="container">
        <table class="table">
            <caption>List of computers</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{_('name')}}</th>
                <th scope="col">{{__('Image')}}</th>
                <th scope="col">{{__('Color')}}</th>
                <th scope="col">{{__('Character')}}</th>
                <th scope="col">{{__('Price')}}</th>
                <th scope="col">{{__('Status')}}</th>
                <th colspan="3" class="text-center" scope="col">{{__('Actions')}}</th>

            </tr>
            </thead>
            <tbody>
            <div class="d-flex flex-row-reverse"><a href="{{route('admin.computer.create')}}" class="btn bg-primary text-white m-3 ">{{__('Add Item')}}</a></div>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{($products->currentpage()-1)*$products->perpage()+$loop->index+1}}</th>
                    <td>{{$product->name}}</td>
                    <td style="width: 100px; height: 100px;"><img style="width: 100%; height: 100%;"  src="./images/notebook/mbp-silver-select-202011_result-500x500.jpeg"></td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->character}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->status}}</td>
                    <td>
                        <a href="{{route('admin.computer.show',$product->id)}}">
                            <i class="fa fa-eye"  aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('admin.computer.edit',['computer'=>$product->id])}}">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{route('admin.computer.destroy',['computer'=>$product->id])}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">

                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                            </button>

                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        {{$products->links()}}
    </div>
@endsection

