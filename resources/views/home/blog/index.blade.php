<div class="container my-5">
    <div class="text-center">
    <h4 class="">Blog</h4>
    <p>Apa Saja Kabar Hari Ini? kami beri tahu anda</p>
</div>

    <div class="row">


  
        @foreach($blog as $item)

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-blog">
                <img src="/{{ $item->cover }}" class="img-card-blog" alt="">
            </div>
            <div class="p-3">
            <a href="/blog/show/{{ $item->id}}" class="text-decoration-none"><h5>{{ $item->title}}</h5></a>
            <p>{!! Illuminate\Support\Str::limit($item->body, 100) !!}</p>
                <!-- <a href="/blog/show/{{ $item->id}}">Selengkapnya &RightArrow;</a> -->
            </div>
    </div>
    </div>


    @endforeach

 
    </div>
</div>