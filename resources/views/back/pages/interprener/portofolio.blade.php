@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'page title here')
<style>
    .con{
        font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        
    }
    .sec {
        
        background-color: rgb(23, 23, 56);
        height: 30vh;
        width: 90%;
        position: fixed;
        top: 30px;
        left: -205px;
        margin: 20%;
        padding: 0px;
        border-radius: 15px;
    }

    .profile-card {
    display: flex;
    align-items: flex-start;
    background-color: #e0e0e0;
    border-radius: 15px;
    padding: 20px;
    width: 1000px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    position: relative; /* Tambahkan ini */
    z-index: 1;
    justify-content: center;
}


    .profile-card img {
        width: 500px;
        height: auto;
        border-radius: 10px;
        margin-right: 20px;
        z-index: 1;
    }

    .profile-content {
        display: flex;
        flex-direction: column;
        z-index: 1;
    }

    .profile-content h3 {
        margin: 0;
        font-size: 22px;
        font-weight: bold;
        color: rgb(23, 23, 56);
        z-index: 1;
    }

    .profile-content p {
        margin: 5px 0;
        font-size: 16px;
        color: rgb(23, 23, 56);
        z-index: 1;
    }

    .profile-content .info {
        display: flex;
        flex-wrap: wrap;
        z-index: 1;
    }

    .profile-content .info p {
        margin: 5px 0;
        font-size: 16px;
        color: #555;
        width: 50%;
        z-index: 1;
    }

    .profile-content .description {
        margin-top: 10px;
        z-index: 1;
    }

    .address {
        margin-top: 20px;
        font-size: 16px;
        color: #333;
        text-align: right;
        z-index: 1;
    }
</style>
@section('content')
<div class="con">
    <div class="profile-card">
        <img src="/back/vendors/images/bakso.jpg" alt="Bakso Laros">
        <div class="profile-content">
            <h3>PROFIL USAHA</h3>
            <div class="info">
                <p>Nama : Bakso Laros</p>
                <p>Bidang : Dagang</p>
                <p>Jenis Produk : Bakso</p>
            </div>
            <div class="description">
                <p>Bakso Laros ialah suatu produk bakso yang berasal dari Sumbawa yang memiliki rasa yang enak dan bentuk hidangannya yang unik.</p>
            </div>
            <div class="address">
                <p>Jln. Samota Sumbawa Besar</p>
            </div>
        </div>
    </div><section class="sec"></section>
    </div>
@endsection