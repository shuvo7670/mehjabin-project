@extends('backend.master')
@section('title') Dashboard || Terms & Condition Page  Setting @endsection
@section('content')
<div class="col-lg-6 offset-md-3">
    @include('backend.partials._flash')
    <form action="{{route('backend.pages.termsofcondition.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div>
          <img src="{{asset('uploads/thumbnails/'.$termsOfCondition->thumbnail_image)}}" width="80px" height="40px" alt="">
      </div>
      <div class="form-group">
        <label for="termsOfConditionThumbnail">Thumbnail Image</label>
        <input name="terms_of_condition_thumbnail" class="form-control" id="termsOfConditionThumbnail" type="file">
      </div>
	    <div class="form-group">
	        <label for="termsOfConditionDescriptioni">Terms & Condition</label>
	        <textarea name="text" id="termsOfConditionDescriptioni" cols="30" rows="10" class="form-control tinymce-editor">{!! $termsOfCondition->text !!}</textarea>
	    </div>
      <input class="btn btn-primary" type="submit" value="Update">
    </form>
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
.tox-notifications-container{
        display: none !important;
    }
</style>
@endsection