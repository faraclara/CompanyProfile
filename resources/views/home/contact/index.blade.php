<div class="container">

<div class="text-center my-5">
    <h4 class="">Kontak Kami</h4>
    <p>Berikan Saran dan Masukkan Untuk Kami</p>
</div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/contact/send" method="POST">
                        @csrf
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Anda">
                @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>
            <div class="form-group mt-4">
                <label for="">Isi Pesan</label>
                <textarea name="desc" id="" cols="30" rows="10" class="form-control @error('desc') is-invalid @enderror" placeholder="Masukkan Pesan Anda"></textarea>
                @error('desc')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>

            
            <button type="submit" class="btn btn-success  mt-3">Kirim</button>
            </form>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="d-flex">
                <i class="fas fa-phone fa-2x px-3"></i> <h3>00000000</h3>
            </div>

        <div class="col-md-6">
            <div class="d-flex">
                <i class="fas fa-envelope fa-2x px-3"></i> <h3>email@gmail.com</h3>
            </div>  

        <div class="col-md-6">
            <div class="d-flex">
                <i class="fas fa-marker fa-2x px-3"></i> <h3>Jl.Cendrawasih No.00</h3>
            </div>    
        </div>


    </div>
</div>