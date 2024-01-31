<div class="container my-5">
    <div class="text-center">
    <h4 class="">Blog</h4>
    <p>Apa Saja Kabar Hari Ini? kami beri tahu anda</p>
</div>

    <div class="row">


        @for($i = 0; $i < 12; $i++)

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="wrapper-card-blog">
                <img src="/img/thumb.jpg" class="img-card-blog" alt="">
            </div>
            <div class="p-3">
            <a href="" class="text-decoration-none"><h5>Tanam Pohon Adam</h5></a>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, reprehenderit? 
                <a href="">Selengkapnya &RightArrow;</a>
            </p>
            </div>
    </div>
    </div>

    @endfor

 
    </div>
</div>