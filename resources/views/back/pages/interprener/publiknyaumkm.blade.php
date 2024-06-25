@extends('back.pages.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Umkm')
<style>
    .welcome-container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    /* Left section containing the welcome text and cards */
    .left-section {
        flex: 1;
        padding-right: 20px;
    }

    .left-section h1 {
        font-size: 36px;
        color: rgb(23, 23, 56);
    }

    .emoji {
        font-size: 36px;
    }

    /* Card styles */
    .cardd {
        display: flex;
        align-items: center;
        background-color: #e0e0e0;
        border-radius: 15px;
        margin: 10px 0;
        padding: 10px;
        width: 450px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .cardd img {
        width: 200px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
        margin-right: 10px;
    }

    .cardd .contentt {
        display: flex;
        flex-direction: column;
    }

    .cardd .contentt h3 {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
    }

    .cardd .contentt p {
        margin: 2px 0;
        font-size: 14px;
        color: #555;
    }

    
    /* Right section containing the illustration and description */
    .right-section {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        
    }

    .illustration {
        width: 100%;  /* Mengatur lebar gambar */
        height: 80%; 
    }

    .description {
        font-size: 14px;
        color: #555;
    }

    /* bataasss */

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
<div class="welcome-container">
    <div class="left-section">
        <h1>Selamat Datang <span class="emoji">🙌</span></h1>
        <br>
        <div class="cardd">
            <img src="/back/vendors/images/air.jpg" alt="Drink">
            <div class="contentt">
                <h3>Air Tebu</h3>
                <p>Januardi hadi firmansyah</p>
                <p>Jl. sumbawa utan</p>
            </div>
        </div>
        <br>
        <div class="cardd">
            <img src="/back/vendors/images/bakso.jpg" alt="Food">
            <div class="contentt">
                <h3>Bakso laros</h3>
                <p>Januardi hadi firmansyah</p>
                <p>Jl. sumbawa utan</p>
            </div>
        </div>
       
    </div>
    <div class="right-section">
        <img src="/back/vendors/images/enter.png" alt="Illustration" class="illustration">
        <p class="description">Bergabunglah bersama kami di crowdfunding basiru, untuk dapat saling membantu dengan mudah serta amanah dan berkah</p>
    </div>
</div>
</section>
<section>
    <div class="containerr">
        <h1>Daftar UMKM Yang Bergabung</h1>
        <!-- <p>Mari Bergabung Bersama Yang Lainnya.</p> -->

        <div class="courses-categories">
            <a href="" class="active"><button>Semua UMKM</button></a>
            <a href=""><button>Labuhan Badas</button></a>
            <a href=""><button>Berang Biji</button></a>
            <a href=""><button>Sumbawa</button></a>
            <a href=""><button>Kebayan</button></a>
            <a href=""><button>Lempeh</button></a>
        </div>

        <div class="coursess">
            <div class="courses-cardi">
                <img src="/back/vendors/images/mkan.jpg" alt="Startup Donations Isometric Flowchart Vector Image">
                <h3>Rumah Makan</h3>
                <p>Oleh Sasana Digital Lab</p>
                <p class="price">Rp 231.242</p>
                <button class="buy-button">Invest Sekarang</button>
            </div>

            <div class="courses-cardi">
                <img src="/back/vendors/images/steak.jpg" alt="Steak House Image">
                <h3>Steak House</h3>
                <p>Oleh Elsa Nuramchat</p>
                <p class="price">Rp 105.110</p>
                <button class="buy-button">Invest Sekarang</button>
            </div>

            <div class="courses-cardi">
                <img src="/back/vendors/images/nagor.jpg" alt="Nasi Goreng Image">
                <h3>Nasi Goreng</h3>
                <p>Oleh Ikhsan Hanif Fuadi</p>
                <p class="price">Rp 105.110</p>
                <button class="buy-button">Invest Sekarang</button>
            </div>

            <div class="courses-cardi">
                <img src="/back/vendors/images/boba.jpg" alt="King Boba Image">
                <h3>King Boba</h3>
                <p>Oleh Ikhsan Hanif Fuadi</p>
                <p class="price">Rp 105.110</p>
                <button class="buy-button">Invest Sekarang</button>
            </div>

            <div class="courses-cardi">
                <img src="/back/vendors/images/bakso2.jpg" alt="Empe-Empe Malang Image">
                <h3>Empe-Empe Malang</h3>
                <p>Oleh Ikhsan Hanif Fuadi</p>
                <p class="price">Rp 105.110</p>
                <button class="buy-button">Invest Sekarang</button>
            </div>

            <div class="courses-cardi">
                <img src="/back/vendors/images/baso.jpg" alt="Bakso Malang Image">
                <h3>Bakso Malang</h3>
                <p>Oleh Ikhsan Hanif Fuadi</p>
                <p class="price">Rp 105.110</p>
                <button class="buy-button">Invest Sekarang</button>
            </div>
        </div>
    </div>
</section>


@endsection