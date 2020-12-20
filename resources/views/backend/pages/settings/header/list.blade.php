@extends('backend.master')
@section('title') Dashboard ||  Header Settings @endsection
@section('content')
<div class="col-lg-6 offset-md-3">
    @include('backend.partials._flash')
    <form action="{{route('backend.setting.header.update')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="webstieTitle">Website Titile</label>
        <input name="website_title" class="form-control" id="webstieTitle" type="text" value="{{$all_settings[0]->value}}">
      </div>
      <div class="form-group">
        <label for="websiteEmail">Email Address</label>
        <input name="website_email" class="form-control" id="websiteEmail" type="text" value="{{$all_settings[1]->value}}">
      </div>
      <div class="form-group">
        <label for="hotlineNumber">Hotline Number</label>
        <input name="hotline" class="form-control" id="hotlineNumber" type="text" value="{{$all_settings[2]->value}}">
      </div>
      <div>
          <img src="{{asset('uploads/logo/'.$all_settings[3]->value)}}" width="80px" height="40px" alt="">
      </div>
      <div class="form-group">
        <label for="webstieTitle">Logo</label>
        <input name="website_logo" class="form-control" id="webstieTitle" type="file">
      </div>
      <input class="btn btn-primary" type="submit" value="Update">
    </form>
  </div>
@endsection
