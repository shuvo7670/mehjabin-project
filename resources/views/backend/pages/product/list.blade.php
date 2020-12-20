@extends('backend.master')
@section('title') Dashboard || Product @endsection
@section('content')
<div class="col-md-12">
    @include('backend.partials._flash')
    <div class="tile">
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addProduct">Add Product</button>
      <h3 class="tile-title">Product List</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>S.I</th>
              <th>Product Name</th>
              <th>Category Name</th>
              <th>Old Price</th>
              <th>New Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($products)>0)
                @foreach($products as $product)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->category_name}}</td>
                    <td>{{$product->old_price}}</td>
                    <td>{{$product->new_price}}</td>
                    <td>{{ $product->status == 0 ? "Deactive" : "Active" }}</td>
                    <td>
                        <a href="{{route('backend.product.edit',['product_id' => $product->id])}}" class="btn btn-info">Edit</a>
                        <a href="{{route('backend.product.delete',['product_id' => $product->id])}}" class="btn btn-danger delete-confirm">Delete</a
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="8" class="field-empty">Your Product Table Field is Empty!!</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('custom_scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
     $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
</script>
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
@section('modals')
    @include('backend.pages.product.modals.product_add')
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
