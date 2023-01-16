@extends('template') 
@section('content') 

<?php $number = 1; ?>
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rekomendasi Buku</h3>
                <div class="float-right">
                    <a class="btn btn-success" href="/book/create">Input</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Author</th>
                    <th>Halaman</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($books as $book)                        
                    <tr> 
                    <td>{{ $number }}</td>
                    <td>{{ $book->data()['title']}}</td>                    
                    <td>{{ $book->data()['author']}}</td>           
                    <td>{{ $book->data()['pages']}}</td>
                    <td>{{ $book->data()['descriptions']}}
                        <br>
                        {{ $book->data()['deskripsi2']}}
                    </td>
                    <td>Rp. {{ $book->data()['price']}},-</td>
                    <td>
                      <a class="btn btn-xs btn-primary" href="/book/show/{{ $book->id() }}">Tampil</a>
                      <a></a>
                      <a class="btn btn-xs btn-warning"  href="/book/edit/{{ $book->id() }}">Edit</a>
                      <a class="btn btn-xs btn-danger" onsubmit="return confirm('Move data to trash?')" href="/book/hapus/{{ $book->id() }}">Hapus</a>
                    </td>
                  </tr>      
                  <?php $number++; ?>

                  @endforeach                              
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection