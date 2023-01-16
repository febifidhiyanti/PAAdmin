@extends('template') 
@section('content') 


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Data</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <form action="/kajian/update/{{ $kajian->id()}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Judul Kajian</label>
                    <input type="text" class="form-control" id="title" name="title" required="required" placeholder="Masukkan Judul Kajian" value="{{ $kajian['title'] }}">
                </div>
                <div class="form-group">
                    <label for="ustad">Ustad</label>
                    <input type="text" class="form-control" id="ustad" name="ustad" required="required" placeholder="Masukkan Ustad" value="{{ $kajian['ustad'] }}">
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description" required="required" cols="20" rows="10" placeholder="Masukkan Deskripsi">{{ $kajian['description'] }}</textarea>
                </div>    
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">                
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" class="form-control" id="link" name="link" required="required" placeholder="Masukkan Link" value="{{ $kajian['link'] }}">
                </div>   
                <div class="form-group">
                    <label for="image">Link Gambar</label>
                    <input type="text" class="form-control" id="iamge" name="image" required="required" placeholder="Masukkan Link Gambar" value="{{ $kajian['image'] }}">
                </div>   
                <div class="form-group">
                    <label for="date">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" required="required" placeholder="Masukkan Tanggal" value="{{ $kajian['date'] }}">
                </div>               
                <div class="form-group">
                    <label for="location">Lokasi</label>
                    <input type="text" class="form-control" id="location" name="location" required="required" placeholder="Masukkan Lokasi"  value="{{ $kajian['location'] }}">
                </div>  
                <div class="form-group">
                    <label for="detaillocation">Detail Lokasi</label>
                    <input type="text" class="form-control" id="detaillocation" name="detaillocation" required="required" placeholder="Masukkan Detail Lokasi"  value="{{ $kajian['detaillocation'] }}">
                </div>  
                <!-- /.form-group -->
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <a class="btn btn-danger" href="/kajian">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            </div>
           
            </form>

          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection