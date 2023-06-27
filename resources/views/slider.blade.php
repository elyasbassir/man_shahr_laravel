<!DOCTYPE html>
<html lang="en">

<head>
    {!! SEO::generate() !!}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 90%;
            height: 90%;
            object-fit: cover;
            border-radius: 20%;
        }
    </style>
</head>

<body>
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
   @forelse($data as $value)
        <div class="swiper-slide">
            <img src="{{url('/image_slider/'.$city_hash.'/'.$value->slider_image_name)}}" alt="">
        </div>
        @empty

        @endforelse

    </div>
    <div class="swiper-pagination"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });
</script>
</body>

</html>
