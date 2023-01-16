@extends('template') 
@section('content') 

  <div class="card card-primary card-outline">
    <div class="card-body box-profile">
      <div class="text-center">
      </div>

      <h3 class="profile-username text-center">Detail Podcast</h3>

      <p class="text-muted text-center">{{ $podcast->data()['title']}}</p>

      <strong>Deskripsi</strong>
      <p class="text-muted">
        {{ $podcast->data()['description']}}
      </p>
      <hr>

      <strong>Link</strong>
      <p class="text-muted">{{ $podcast->data()['link']}}</p>
      <hr>

      <strong>Gambar</strong>
      <p class="text-muted">{{ $podcast->data()['image']}}</p>
      <hr>
      
      </div>
      
      <div class="text-center">
          <a class="btn btn-danger" href="/podcast">Back</a>
      </div>

      <br>

    </div>
  </div>

@endsection