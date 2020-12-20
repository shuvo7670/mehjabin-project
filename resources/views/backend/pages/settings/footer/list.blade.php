@extends('backend.master')
@section('title') Dashboard ||  Footer Settings @endsection
@section('content')
<div class="col-lg-6 offset-md-3">
    @include('backend.partials._flash')
    <form action="{{route('backend.setting.footer.update')}}" method="POST">
        @csrf
      <div class="form-group">
        <label for="websiteAddress">Address </label>
        <input name="footer_address" class="form-control" id="websiteAddress" type="text" value="{{$all_settings[4]->value}}">
      </div>
      <div class="form-group">
        <label for="footerPhone">Phone</label>
        <input name="footer_phone" class="form-control" id="footerPhone" type="text" value="{{$all_settings[5]->value}}">
      </div>
      <div class="form-group">
        <label for="footerEmail">Email</label>
        <input name="footer_email" class="form-control" id="footerEmail" type="text" value="{{$all_settings[6]->value}}">
      </div>
      <div class="form-group">
        <label for="facebookLink">Facebook Link</label>
        <input name="facebook_link" class="form-control" id="facebookLink" type="text" value="{{$all_settings[7]->value}}">
      </div>
      <div class="form-group">
        <label for="twitterLink">Twitter Link</label>
        <input name="twitter_link" class="form-control" id="twitterLink" type="text" value="{{$all_settings[8]->value}}">
      </div>
      <div class="form-group">
        <label for="linkedinLink">Linkedin Link</label>
        <input name="linkedin_link" class="form-control" id="linkedinLink" type="text" value="{{$all_settings[9]->value}}">
      </div>
      <div class="form-group">
        <label for="WhatsAppLink">WhatsApp </label>
        <input name="whatsapp" class="form-control" id="WhatsAppLink" type="text" value="{{$all_settings[10]->value}}">
      </div>
      <div class="form-group">
        <label for="copywriteText">Copywrite Text </label>
        <input name="copywrite_text" class="form-control" id="copywriteText" type="text" value="{{$all_settings[11]->value}}">
      </div>
      <input class="btn btn-primary" type="submit" value="Update">
    </form>
  </div>
@endsection
