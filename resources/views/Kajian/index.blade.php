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
                <h3 class="card-title">Rekomendasi Kajian</h3>
                <div class="float-right">
                    <a class="btn btn-success" href="/kajian/create">Input</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Kajian</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Ustad</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($kajians as $kajian)                        
                    <tr> 
                    <td>{{ $number }}</td>
                    <td>{{ $kajian->data()['title']}}</td>     
                    <td>{{ $kajian->data()['description']}}</td>
                    <td>{{ $kajian->data()['date']}}</td>
                    <td>{{ $kajian->data()['ustad']}}</td>
                    <td>{{ $kajian->data()['location']}}</td>
                    <td>
                      <a class="btn btn-xs btn-primary" href="/kajian/show/{{ $kajian->id() }}">Tampil</a>
                      <a></a>
                      <a class="btn btn-xs btn-warning"  href="/kajian/edit/{{ $kajian->id() }}">Edit</a>
                      <a class="btn btn-xs btn-danger" href="/kajian/hapus/{{ $kajian->id() }}">Hapus</a>
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