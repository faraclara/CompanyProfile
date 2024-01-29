<style>
    .wrapper-img-banner{
        max-width: 100%;
        max-height: 400px;

    }

    .img-banner{
        width: 100%;
    }
</style>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="wrapper-img-banner">
            <img src="/img/banner.jpg" class="img-banner" alt="">
    </div>
        

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="container mt-5">
    <div class="text-center">
    <h4 class="">ABOUT</h4>
    <p>Anda Tahu kami? kami beri tahu anda</p>
    </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="/img/banner.jpg" width="100%" alt="">

        </div>
        <div class="col-md-6">
        <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quaerat unde in cum vel debitis, aliquid ratione accusantium quis deserunt. Eum, laudantium eos. Maxime dolor aliquid repellendus deleniti adipisci ratione ipsum. Quidem nesciunt iure voluptatem doloribus tempora quam, repellendus neque architecto quasi placeat? Hic iusto ut laboriosam sit, numquam cumque sint modi excepturi consequuntur optio tenetur dolores voluptatibus earum debitis, cupiditate dolorum obcaecati beatae. Libero error ex quaerat corrupti commodi rerum, enim at doloremque delectus esse quam similique magni. Dolorum eaque autem similique eum, voluptatem vel animi, exercitationem architecto doloremque temporibus, quia optio aliquid! Culpa esse quae quod eius perferendis!</P>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ut ipsa consequuntur voluptates doloremque amet error iure in esse nihil culpa libero, accusantium modi. Molestiae eius enim maxime qui optio? Explicabo atque molestias nulla tenetur obcaecati, distinctio, assumenda provident incidunt cum quam optio commodi nostrum culpa eius aut, at eaque. </p>
        </div>
    </div>


</div>


<div class="bg-success my-5">
    <div class="container py-5">
        <div class="text-white">
        <h5>Pelajari Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto animi neque unde praesentium quasi tempore delectus voluptate eos. Recusandae ratione possimus corrupti velit minus maiores ullam temporibus ipsum voluptate?
        </p>
        </div>
    </div>
</div>



<div class="container my-4">
    <div class="text-center">
    <h4 class="">Services</h4>
    <p>Apa yang kami lakukan? kami beri tahu anda</p>
    </div>

<div class="row">

        @for($i = 0; $i < 4; $i++)
        <div class="col-md-3">
        <div class="text-center">
        <i class="fas fa-home fa-3x text-success"></i>
        <h5><b>Penanaman pohon</b></h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, nemo.</p>
    </div>
        </div>

        @endfor


    </div>

    <div class="text-center mt-3">
        <a href="" class= "btn btn-success px-5"class="">Selengkapnya<i class="fas fa-arrow-right"></i></a>

</div>
</div>


<div class="bg-light my-5">
    <div class="container py-5">
        <div class="text-dark text-center">
        <h5>Pelajari Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto animi neque unde praesentium quasi tempore delectus voluptate eos. Recusandae ratione possimus corrupti velit minus maiores ullam temporibus ipsum voluptate?
        </p>
        </div>
    </div>
</div>



<div class="container my-2">
    <div class="text-center">
    <h4 class="">Blog</h4>
    <p>Apa Saja Kabar Hari Ini? kami beri tahu anda</p>
</div>

    <div class="row">



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


    <div class="text-center mt-3">
        <a href="" class= "btn btn-success px-5"class="">Selengkapnya<i class="fas fa-arrow-right"></i></a>

</div>
 
    </div>
</div>


<div class="bg-success my-5">
    <div class="container py-5">
        <div class="text-white">
        <h5>Pelajari Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto animi neque unde praesentium quasi tempore delectus voluptate eos. Recusandae ratione possimus corrupti velit minus maiores ullam temporibus ipsum voluptate?
        </p>
        </div>
    </div>
</div>



<div class="container my-2 mb-5">
    <div class="text-center">
    <h4 class="">Hubungi Kami</h4>
    <p>Anda dapat bertanya langsung ke kami </p>
    <a href=""class="btn btn-success px-5" targets="blank"> <i class="fas fa-phone"></i>Hubungi Kami di WhatsApp</a>
</div>
</div>


