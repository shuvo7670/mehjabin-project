@extends('backend.master')
@section('title') Dashboard || Category @endsection
@section('content')
<div class="col-md-12">
    @include('backend.partials._flash')
    <div class="tile">
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addCategory">Add Category</button>
      <h3 class="tile-title">Category List</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>S.I</th>
              <th>Category Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($categories)>0)
                @foreach($categories as $category)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td id="category_name">{{$category->category_name}}</td>
                    <td>{{ $category->status == 0 ? "Deactive" : "Active" }}</td>
                    <td>
                        <button class="btn btn-info" onclick="categoryEditModal('{{$category->id}}','{{$category->category_name}}')">Edit</button>
                        <a  href="{{route('backend.category.delete',['category_id'=> $category->id])}}" class="btn btn-danger delete-confirm">Delete</a>
                    </td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="5" class="field-empty">Your Category Table Field is Empty!!</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('modals')
@include('backend.pages.category.modals.category_add')
@include('backend.pages.category.modals.category_edit')
@endsection
@section('custom_scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
      function categoryEditModal(category_id,category_name){
          $('#editCategory').modal('show');
          $('#category_id').val(category_id);
          $('#editCategoryName').val(category_name);
      }
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
@endsection
@section('custom_styles')
<style>
    .field-empty{
    text-align:center;
    font-size: 18px ;
    color:red;
}
</style>
@endsection
