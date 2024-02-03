<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                @if (isset ($user))
                <form action="/admin/user/{{ $banner->id}}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/banner" method="POST">
                @endif
                    @csrf
                <div class="form-group">
                    <label for="">Headline</label>
                    <input type="text" name="headline" class="form-control @error('headline') is-invalid @enderror" placeholder="Username" value="{{ isset($banner) ? $banner->name : old('headline')}}">
                    @error('headline')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Deskripsi" value="{{ isset($user) ? $user->desc : old('desc')}}" >
                    @error('desc')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" placeholder="gambar">
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>