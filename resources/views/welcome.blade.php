@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'page title here')
<!-- <style>
        body {
            font-family: Arial, sans-serif;
        }
        .why-basiru {
            text-align: center;
            padding: 50px 0;
        }
        .why-basiru h2 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .why-basiru h2 span {
            color: #FFC107;
        }
        .why-basiru p.quote {
            font-style: italic;
            margin-top: 10px;
            color: #555;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            text-align: left;
            padding: 20px 0;
        }
        .feature-item {
            flex: 1 1 200px;
            margin: 20px;
            max-width: 220px;
        }
        .feature-item img {
            width: 50px;
            height: 50px;
            margin-right: 5px;
            vertical-align: middle;
        }
        .feature-item1 {
            width: 100px;
            height: 100px;
            margin-right: 5px;
            vertical-align: middle;
        }
        .feature-item h4 {
            display: inline;
            font-size: 1.2rem;
            color: #333;
        }
        .feature-item p {
            margin: 10px 0 0 50px;
            color: #666;
        }
        .image-container {
            text-align: center;
            margin-top: 40px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style> -->
<style>
    .why-basiru {
        text-align: center;

    }


    .highlight {
        background-color: yellow;
        padding: 0 5px;
        border-radius: 10px;
        border: 3px solid blue;
    }

    .quote {
        font-weight: 600;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #f9f9f9;
    }

    .container {
        width: 90%;
        margin: auto;
    }

    .logo {
        width: 150px;
    }

    nav ul {
        list-style: none;
        display: flex;
    }

    nav ul li {
        margin: 0 15px;
    }

    nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .auth-buttons {
        display: flex;
    }

    .auth-buttons a {
        margin-left: 15px;
        text-decoration: none;
        color: #fff;
        background-color: #333;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
    }

    main {
        padding: 40px 0;
    }

    main h1 {
        text-align: center;
        margin-bottom: 10px;
    }

    main p {
        text-align: center;
        margin-bottom: 30px;
    }

    .courses {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .course-card {
        /* background-color: #fff; */
        /* border: 1px solid #eaeaea; */
        border-radius: 5px;
        width: 30%;
        margin-bottom: 20px;
        padding: 15px;
        text-align: center;
    }

    .course-card img {
        width: 100%;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .course-card h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .course-card p {
        color: #777;
        margin-bottom: 10px;
    }

    .course-card .price {
        color: #333;
        font-weight: bold;
        margin-bottom: 15px;
    }

    /* batas */
    .containerr {
        width: 100%;
        margin: auto;
    }

    .logo {
        width: 150px;
    }

    nav ul {
        list-style: none;
        display: flex;
    }

    nav ul li {
        margin: 0 15px;
    }

    nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .auth-buttons {
        display: flex;
    }

    .auth-buttons a {
        margin-left: 15px;
        text-decoration: none;
        color: #fff;
        background-color: #333;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
    }

    .containerrr {
        padding: 40px 0;
    }

    h1 {
        text-align: center;
        margin-bottom: 10px;
    }

    p {
        text-align: center;
        margin-bottom: 30px;
    }

    .courses-categories {
        text-align: center;
        margin-bottom: 30px;
    }

    .courses-categories button {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 10px 20px;
        margin: 0 5px;
        border-radius: 5px;
        cursor: pointer;
    }

    .courses-categories .active {
        background-color: #333;
        color: #fff;
        border: 1px solid #333;
    }

    .coursess {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .courses-cardi {
        background-color: #fff;
        border: 1px solid #eaeaea;
        border-radius: 5px;
        width: 30%;
        margin-bottom: 20px;
        padding: 15px;
        text-align: center;
    }

    .courses-cardi img {
        /* width: 100%; */
        border-radius: 5px;
        margin-bottom: 5px;
    }

    .courses-cardi h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .courses-cardi p {
        color: #777;
        margin-bottom: 10px;
    }

    .courses-cardi .price {
        color: #333;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .courses-cardi .buy-button {
        background-color: #0037ff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }
    .buy-button{
        background-color: #0037ff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        justify-content: center;
        text-align: center;
        margin-bottom: 10px;
    }
</style>
@section('content')
<div class="hero" id="home">
    <div class="container">
        <div class="box-hero">
            <div class="box">
                <h1 class="center-container">Welcome to Crowdfunding Basiru</h1>
            </div>
            <div class="containert">
                <div class="textt">
                    <h3>Yuk bergabung pada bagian kami!</h3>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, consequuntur?
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae porro nemo,
                    accusamus beatae sint debitis et eius officia quisquam facere.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, dolorum iste.
                </div>
                <div class="col-md-6 col-lg-6 img">
                    <img src="/back/vendors/images/sir.png" alt="Example Image" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="why-basiru">
    <h2>Kenapa memilih <span class="highlight">Basiru?</span></h2>

    <p class="quote">"Dan Allah akan senantiasa menolong seorang hamba, selama ia menolong saudaranya."
        <br>— H.R. Muslim
    </p>

</div>

<section>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">



        </div>
    </div>
</section>
<section>
    <!-- <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="display-6 fw-bold pb-md-4">Kenapa memilih&nbsp;<span class="underline">Basiru?</span></h3>
                </div>
                <div class="col-md-6 pt-4">
                    <figure>
                        <blockquote class="blockquote">
                            <p class="mb-0"><span style="color: rgb(51, 51, 51);">"Dan Allah akan senantiasa menolong seorang hamba, selama ia menolong saudaranya."</span></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">H.R. Muslim</figcaption>
                    </figure>
                </div>
            </div> -->
    <div>
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div>
                    <div class="row gy-2 row-cols-1 row-cols-sm-2">
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-3 text-primary bg-warning">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M256-.0078C260.7-.0081 265.2 1.008 269.4 2.913L457.7 82.79C479.7 92.12 496.2 113.8 496 139.1C495.5 239.2 454.7 420.7 282.4 503.2C265.7 511.1 246.3 511.1 229.6 503.2C57.25 420.7 16.49 239.2 15.1 139.1C15.87 113.8 32.32 92.12 54.3 82.79L242.7 2.913C246.8 1.008 251.4-.0081 256-.0078V-.0078zM256 444.8C393.1 378 431.1 230.1 432 141.4L256 66.77L256 444.8z"></path>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Aman</h5>
                            </div>
                            <p class="text-muted my-3"><span style="color: rgb(22, 28, 45);">Proses terintegrasi teknologi serta perlindungan atas data pengguna</span>.</p>
                        </div>
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-3 text-primary bg-warning">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M512 302.3c0 35.29-28.99 63.91-64.28 63.91c-38.82 0-88.7-22.75-122.4-40.92c18.17 33.7 40.92 83.57 40.92 122.4c0 35.29-28.61 63.91-63.91 63.91c-18.1 0-34.45-7.52-46.09-19.63C244.6 504.3 228 512 209.7 512c-35.29 0-63.91-28.99-63.91-64.28c0-38.82 22.75-88.7 40.92-122.4c-33.7 18.17-83.57 40.92-122.4 40.92c-35.29 0-63.91-28.61-63.91-63.91c0-18.1 7.52-34.45 19.63-46.09C7.676 244.6 0 228 0 209.7c0-35.29 28.99-63.91 64.28-63.91c38.82 0 88.7 22.75 122.4 40.92C168.5 152.1 145.8 103.1 145.8 64.28c0-35.29 28.61-63.91 63.91-63.91c18.1 0 34.45 7.52 46.09 19.63C267.4 7.676 283.1 0 302.3 0c35.29 0 63.91 28.99 63.91 64.28c0 38.82-22.75 88.7-40.92 122.4c33.7-18.17 83.57-40.92 122.4-40.92c35.29 0 63.91 28.61 63.91 63.91c0 18.1-7.52 34.45-19.63 46.09C504.3 267.4 512 283.1 512 302.3z"></path>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Terpercaya</h5>
                            </div>
                            <p class="text-muted my-3">Sebagai platform yang amanah.</p>
                        </div>
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-3 text-primary bg-warning">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Mudah</h5>
                            </div>
                            <p class="text-muted my-3">Penggunaan aplikasi yang begitu mudah.</p>
                        </div>
                        <div class="col text-center text-md-start">
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-currency-dollar fs-3 text-primary bg-warning">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path>
                                    <path d="M12 3v3m0 12v3"></path>
                                </svg>
                                <h5 class="fw-bold mb-0 ms-2">Menguntungkan</h5>
                            </div>
                            <p class="text-muted my-3">Mendapatkan imbal hasil.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-first order-md-last">
                <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="/back/vendors/images/inves.png"></div>
            </div>
        </div>
    </div>
    </div>
</section>
<br>


</section>


@endsection