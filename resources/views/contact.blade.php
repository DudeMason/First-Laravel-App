@extends('layouts.master')

@section('main')
<body>
  <div class="flex-center position-ref">
    <div class='main'>
      <div class='title m-b-md'>
        Contact Page
      </div>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" onclick="alert('Email Sent!')">Submit</button>
      </form>
    </div>
  </div>
</body>
@endsection
