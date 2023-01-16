@extends('template') 
@section('content') 


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>

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

            <form action="/book/store" method="POST">
            {{csrf_field()}}

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title" required="required" placeholder="Masukkan Judul Buku">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required="required" placeholder="Masukkan Author Buku">
                </div>
                <div class="form-group">
                    <label for="descriptions">Deskripsi</label>
                    <textarea class="form-control" name="descriptions" id="descriptions" required="required" cols="20" rows="10" placeholder="Masukkan Deskripsi 1"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Harga Buku</label>
                    <input type="number" class="form-control" id="price" name="price" required="required" placeholder="Masukkan Harga">
                </div>       
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="page">Halaman</label>
                    <input type="number" class="form-control" id="pages" name="pages" required="required" placeholder="Masukkan Halaman Buku">
                </div>   
                <div class="form-group">
                    <label for="date">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" required="required" placeholder="Masukkan Tanggal">
                </div>                       
                <div class="form-group">
                    <label for="deskripsi2">Deskripsi 2</label>
                    <textarea class="form-control" name="deskripsi2" id="deskripsi2" required="required" cols="20" rows="10" placeholder="Masukkan Deskripsi 2"></textarea>
                </div>  
                <div class="form-group">
                    <label for="linkBuys">Link Beli Buku</label>
                    <input type="text" class="form-control" id="linkBuys" name="linkBuys" required="required" placeholder="Masukkan Link Beli">
                </div>  
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                <a class="btn btn-danger" href="/books">Back</a>
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