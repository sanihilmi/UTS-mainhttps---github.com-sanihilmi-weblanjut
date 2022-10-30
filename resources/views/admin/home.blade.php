<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="{{asset('backend/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css')}}">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}  ">

</head>
<body>
    
<!-- header section starts  -->

@include('admin.body.header')

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

@include('admin.body.home_section')

<!-- home section ends -->

<!-- about section starts  -->
@include('admin.body.section_starts')

<!-- about section ends -->
<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

@include('admin.body.education_section')

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="img/{{$image1}}" alt="">
    </div>

    <div class="box">
        <img src="img/{{$image2}}" alt="">
    </div>

    <div class="box">
        <img src="img/{{$image3}}" alt="">
    </div>

    <div class="box">
        <img src="img/{{$image4}}" alt="">
    </div>

    <div class="box">
        <img src="img/{{$image5}}" alt="">
    </div>

    <div class="box">
        <img src="img/{{$image6}}" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

@include('admin.body.section_contact')

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="/home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>

<!-- jquery cdn link  -->
<script src="{{asset('../assets/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>

<!-- custom js file link  -->
<script src="{{asset('backend/js/script.js')}} "></script>


</body>
</html>
