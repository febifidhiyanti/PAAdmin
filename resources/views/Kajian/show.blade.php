@extends('template') 
@section('content') 

  <div class="card card-primary card-outline">
    <div class="card-body box-profile">
      <div class="text-center">
      </div>

      <h3 class="profile-username text-center">Detail Kajian</h3>

      <p class="text-muted text-center">{{ $kajian->data()['title']}}</p>

      <strong>Author</strong>
      <p class="text-muted">
      {{ $kajian->data()['ustad']}}
      </p>
      <hr>

      <strong>Deskripsi</strong>
      <p class="text-muted">
        {{ $kajian->data()['description']}}
      </p>
      <hr>

      <strong>Link</strong>
      <p class="text-muted">{{ $kajian->data()['link']}}</p>
      <hr>

      <strong>Link Gambar</strong>
      <p class="text-muted">{{ $kajian->data()['image']}}</p>
      <hr>

      <strong>Tanggal Kajian</strong>
      <p class="text-muted">{{ $kajian->data()['date']}}</p>
      <hr>

      <strong>Deskripsi</strong>
      <p class="text-muted">{{ $kajian->data()['description']}}</p>
      <hr>

      <strong>Lokasi</strong>
      <p class="text-muted">{{ $kajian->data()['location']}}</p>
      <hr>

      <strong>Detail Lokasi</strong>
      <p class="text-muted">{{ $kajian->data()['detaillocation']}}</p>
      <hr>

      </div>
      
      <div class="text-center">
          <a class="btn btn-danger" href="/kajian">Back</a>
      </div>

      <br>

    </div>
  </div>

@endsection