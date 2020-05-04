@extends('Admin')
@section('content')

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><br/>
        @endif

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">IMG</th>
                <th scope="col">ID_TYPE</th>
                <th scope="col">NAME</th>
                <th scope="col">PRICE</th>
                <th scope="col">PROMOTION PRICE</th>
                <th scope="col">Trạng thái ( còn :1, hết :0 )</th>
                <th scope="col">ACTITON</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $pro)
                <tr>
                    <th scope="row">{{$pro->id}}</th>
                    <td>
                        <img src="source/image/product/{{$pro->image}}" alt="" height="50px">
                    </td>
                    <th scope="row">{{$pro->id_type}}</th>

                    <td>{{$pro->name}}</td>
                    <td>{{$pro->unit_price}}</td>
                    <td>{{$pro->promotion_price}}</td>
                    <td>{{$pro->new}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('admin.edit',$pro->id)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('admin.destroy',$pro->id)}}" method="post" class="form-block">
{{--                            <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <div class="row text-center">
            {{$products->links()}}
        </div>

    </div>
@endsection
