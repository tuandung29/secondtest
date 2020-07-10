@extends('Admin')
@section('content')
<form method="post" action="{{route('admin.update',$edit_pro->id)}}" enctype="multipart/form-data">
{{--    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
    @method('PATCH')
    @csrf
    <div class="container " style="width: 50rem;">
        <div class="form-group">
            <label for="prod_name">Product id:</label>
            <input type="text" class="form-control" name="prod_id" value="{{$edit_pro->id}}"/>
        </div>
        <div class="form-group">
            <label for="prod_name">Product Name:</label>
            <input type="text" class="form-control" name="prod_name" value="{{$edit_pro->name}}"/>
        </div>
        <div class="form-group">
            <label for="prod_name">id Type:</label>
            <input type="text" class="form-control" name="prod_id_type" value="{{$edit_pro->id_type}}"/>
        </div>
        <div class="form-group">
            <label for="prod_desc">Product Description:</label>
            <input type="text" class="form-control" name="prod_desc" value="{{$edit_pro->description}}"/>
        </div>
        <div class="form-group">
            <label for="prod_price">Product Price:</label>
            <input type="text" class="form-control" name="prod_price" value="{{$edit_pro->unit_price}}"/>
        </div>
        <div class="form-group">
            <label for="prod_price">Product Promotion Price:</label>
            <input type="text" class="form-control" name="prod_promo_price" value="{{$edit_pro->promotion_price}}"/>
        </div>
        <div class="form-group">
            <label for="prod_qty">Loại ( hộp/cái ):</label>
            <input type="text" class="form-control" name="prod_unit" value="{{$edit_pro->unit}}"/>
        </div>
        <div class="form-group">
            <label for="prod_qty">trạng thái( còn :1, hết :0 )</label>
            <input type="text" class="form-control" name="prod_new" value="{{$edit_pro->new}}"/>
        </div>
        <div class="form-group">
            <label for="prod_name">Product img:</label>
            <input type="file" class="form-control" name="prod_img" value="{{$edit_pro->image}}"/>
        </div>
        <button type="submit" class="btn btn-danger">Update</button>
        <a href="{{route('admin.index')}}" class="btn btn-warning">Back</a>
    </div>
</form>
@endsection
