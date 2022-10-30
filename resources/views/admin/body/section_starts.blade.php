
<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> {{ $name }} </h3>
        <h3> <span> age : </span> {{ $age }} </h3>
        <h3> <span> qualification : </span> {{ $qualification }} </h3>
        <h3> <span> post : </span> {{ $post }} </h3>
        <h3> <span> language : </span> {{ $language }} </h3>
        <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>{{ $box1 }}</span>
            <h3>{{ $keterangan1 }}</h3>
        </div>

        <div class="box">
            <span>{{ $box2 }}</span>
            <h3>{{ $keterangan2 }}</h3>
        </div>

        <div class="box">
            <span>{{ $box3 }}</span>
            <h3>{{ $keterangan3 }}</h3>
        </div>

        <div class="box">
            <span>{{ $box4 }}</span>
            <h3>{{ $keterangan4 }}</h3>
        </div>

    </div>

</div>

</section>