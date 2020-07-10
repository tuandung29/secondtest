@extends('Admin')
@section('content')
    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
{{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
        @csrf
        <div class="container " style="width: 50rem;">

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er)
                        {{$er}}
                    @endforeach
                </div>
            @endif

            <div class="form-group">
                <label for="prod_name">Product id:</label>
                <input type="text" class="form-control" name="prod_id"/>
            </div>
            <div class="form-group">
                <label for="prod_name">Product Name:</label>
                <input type="text" class="form-control" name="prod_name"/>
            </div>
            <div class="form-group">
                <label for="prod_name">Product id type:</label>
                <input type="text" class="form-control" name="prod_id_type"/>
            </div>
            <div class="form-group">
                <label for="prod_desc">Product Description:</label>
                <input type="text" class="form-control" name="prod_desc"/>
            </div>
            <div class="form-group">
                <label for="prod_price">Product Price:</label>
                <input type="text" class="form-control" name="prod_price"/>
            </div>
            <div class="form-group">
                <label for="prod_price">Product Promotion Price:</label>
                <input type="text" class="form-control" name="prod_promo_price"/>
            </div>
            <div class="form-group">
                <label for="prod_qty">Loại ( hộp/cái ):</label>
                <input type="text" class="form-control" name="prod_unit"/>
            </div>
            <div class="form-group">
                <label for="prod_qty">trạng thái(còn :1, hết :0 )</label>
                <input type="text" class="form-control" name="prod_new"/>
            </div>
            <div class="form-group">
                <label for="prod_name">Product img:</label>
                <input type="file" class="form-control" name="prod_img"/>
            </div>
            <button type="submit" class="btn btn-danger">Add</button>
            <a href="{{route('admin.index')}}" class="btn btn-warning">Back</a>

        </div>
    </form>
@endsection
