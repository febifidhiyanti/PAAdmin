@extends('template') 
@section('content') 

  <div class="card card-primary card-outline">
    <div class="card-body box-profile">
      <div class="text-center">
      </div>

      <h3 class="profile-username text-center">Detail Buku</h3>

      <p class="text-muted text-center">{{ $book->data()['title']}}</p>

      <strong>Author</strong>
      <p class="text-muted">
      {{ $book->data()['author']}}
      </p>
      <hr>

      <strong>Deskripsi</strong>
      <p class="text-muted">
        {{ $book->data()['descriptions']}}
        <br>
        <br>
        {{ $book->data()['deskripsi2']}}
      </p>
      <hr>

      <strong>Link Beli</strong>
      <p class="text-muted">{{ $book->data()['linkBuys']}}</p>
      <hr>

      <strong>Halaman</strong>
      <p class="text-muted">{{ $book->data()['pages']}}</p>
      <hr>

      <strong>Tanggal Buku Terbit</strong>
      <p class="text-muted">{{ $book->data()['date']}}</p>
      <hr>

      <strong>Harga Buku</strong>
      <p class="text-muted">Rp. {{ $book->data()['price']}},-</p>
      <hr>

      </div>
      
      <div class="text-center">
          <a class="btn btn-danger" href="/books">Back</a>
      </div>

      <br>

    </div>
  </div>

@endsection