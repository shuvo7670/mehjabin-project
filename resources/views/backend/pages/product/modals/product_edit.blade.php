@extends('backend.master')
@section('title') Dashboard || Product @endsection
@section('content')
<div class="col-md-12">
    @include('backend.partials._flash')
    <div class="tile">
    <a href="{{route('backend.product.list')}}" class="btn btn-primary pull-right">All Product</a>
        <h3 class="tile-title">Edit Product</h3>
        <div class="col-md-6 offset-md-3">
            <form action="{{route('backend.product.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="product_id">
                <div class="form-group">
                    <label for="editProductName">Product Name </label>
                    <input type="text" name="product_name" class="form-control" id="editProductName" value="{{$product->product_name}}">
                </div>
                <div class="form-group">
                    <label for="editProductName">Select Category </label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif>{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="productDescription">Product Description</label>
                    <textarea name="description" id="productDescription" cols="30" rows="10" class="form-control tinymce-editor">{!! $product->description !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="productName">Product Old Price (optional)</label>
                <input type="number" name="old_price" class="form-control" id="productName" value="{{$product->old_price}}">
                </div>
                <div class="form-group">
                    <label for="productName">Product Price </label>
                    <input type="number" name="new_price" class="form-control" id="productName" value="{{$product->new_price}}">
                </div>
                <div class="form-group">
                    <img src="{{asset('uploads/products/'.$product->product_image)}}" width="100%" height="250">
                </div>
                <div class="form-group">
                    <label for="productImage">Choose Product Image</label>
                    <input type="file" name="product_image" class="form-control" id="productImage">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
  </div>
@endsection
@section('custom_scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 400,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection
@section('custom_styles')
<style>
    .field-empty{
    text-align:center;
    font-size: 18px ;
    color:red;
}
.tox-notifications-container{
        display: none !important;
    }
</style>
@endsection
