<div class="container">
<div class="text-center mt-5">
    <h4 class="">Services</h4>
    <p>Apa yang kami lakukan? kami beri tahu anda</p>
    </div>
<div class="row mt-5">

        <!-- @for($i = 0; $i < 12; $i++) -->

        @foreach ($service as $item)


        <div class="col-md-3 my-3">
        <div class="text-center">
        <i class="{{ $item->icon}} text-success"></i>
        <h5><b>{{ $item->title}}</b></h5>
        <p>{!! Illuminate\Support\Str::limit($item->desc, 100) !!}</p>
    </div>
        </div>

        @endforeach
        <!-- @endfor -->
    </div>
</div>