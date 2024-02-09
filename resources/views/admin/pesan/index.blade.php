<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">

                
                    <tr>
                        <td width="100px">#</td>
                        <td width="250px">Name</td>
                        <td>Message</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($pesan as $item)
                    <tr style="{{ $item->is_read == 1 ? 'background-color:#f0f0f0' : ''}}">
                        <td>{{ $loop->iteration}}</td>
                        <td><a href="/admin/pesan/{{ $item->id }}"><b>{{ $item->name}}</b></a></td>
                        <td><p>{!! Illuminate\Support\Str::limit($item->desc, 100) !!}</td>

                            <td>
                            <form action="/admin/pesan/{{ $item->id }}" method="POST">
                                @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                @csrf
                            </form>

                            </td>
                    </tr>

                @endforeach    

                    
                </table>
            </div>
        </div>
    </div>
</div>