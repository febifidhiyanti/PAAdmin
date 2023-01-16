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
                <h3 class="card-title">Rekomendasi Podcast</h3>
                <div class="float-right">
                    <a class="btn btn-success" href="/podcast/create">Input</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Podcast</th>
                    <th>Deskripsi</th>
                    <th>Gambar Podcast</th>
                    <th>Link</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($podcasts as $podcast)                        
                    <tr> 
                    <td>{{ $number }}</td>
                    <td>{{ $podcast->data()['title']}}</td>     
                    <td>{{ $podcast->data()['description']}}</td>
                    <td>{{ $podcast->data()['image']}}</td>
                    <td>{{ $podcast->data()['link']}}</td>
                    <td>
                      <a class="btn btn-xs btn-primary" href="/podcast/show/{{ $podcast->id() }}">Tampil</a>
                      <a></a>
                      <a class="btn btn-xs btn-warning"  href="/podcast/edit/{{ $podcast->id() }}">Edit</a>
                      <a class="btn btn-xs btn-danger" href="/podcast/hapus/{{ $podcast->id() }}">Hapus</a>
                    </td>
                  </tr>      

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