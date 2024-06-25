@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Investor')
<style>
    /* body {
    font-family: Arial, sans-serif;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
} */

    /* .container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: right;
}

.header {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    padding-left: 20px;
    margin-bottom: 20px;
}*/
    .welcome-container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    /* h1 {
        font-size: medium;
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-style: italic;
        position: relative;
        left: 50px;
    } */

    .content {
        display: flex;
        justify-content: space-between;
        width: 100%;
        align-items: flex-start;
    }

    .left-content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-left: 20px;
    }

    .left-content p {
        font-size: 20px;
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-style: italic;
        position: relative;
        left: 50px;
    }

    .images {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 20px;
    }

    .images img {
        width: 250px;
        height: 130px;
        border-radius: 15px;
        border: 2px solid rgb(23, 23, 56);
    }

    .balance {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .balance-button {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-family: Arial, sans-serif;
        position: relative;
        left: 100px;

    }

    .balance-button .left,
    .balance-button .right {
        padding: 10px 20px;
    }

    .balance-button .left {
        background-color: rgb(23, 23, 56);
        color: white;
        border: 2px solid rgb(23, 23, 56);
        border-top-left-radius: 25px;
        border-bottom-left-radius: 25px;
    }

    .balance-button .right {
        background-color: white;
        color: black;
        border: 2px solid rgb(23, 23, 56);
        border-left: none;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
    }

    .right-section {
       
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;

    }

    .illustration {
        width: 900px;
        height: auto;
    }


    /* batasss */

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

</style>
@section('content')

<body>
    <div class="welcome-container">
        <div class="content">
            <div class="left-content">
                <p>Jadilah investor yang bertanggung jawab </p>
                <p>serta terpercaya dan dapat membantu banyak orang !!!</p>
                <div class="images">
                    <img src="/back/vendors/images/bakso.jpg" alt="Example Image" />
                    <img src="/back/vendors/images/air.jpg" alt="Example Image" />
                </div>
                <div class="balance-button">
                    <div class="left">Jumlah saldo</div>
                    <div class="right">Rp. 12.00xxxx</div>
                </div>
            </div>
        </div>
        <div class="right-section">
            <img src="/back/vendors/images/yuu.png" alt="Illustration" class="illustration">
        </div>

    </div>

    <div class="container">
    
        <h1>Daftar Investor Yang Bergabung</h1>
        <p>Mari Bergabung Bersama Yang Lainnya.</p>

        <div class="courses">
    <div class="course-card">
        <img src="/back/vendors/images/j.png" alt="Course Image">
        <h3>Zul Fajri</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/bdpropil.png" alt="Course Image">
        <h3>Bryan Oktoviano</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/delv.png" alt="Course Image">
        <h3>Dinar Candy</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/dinar.png" alt="Course Image">
        <h3>Delva Agustini</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/mendek.png" alt="Course Image">
        <h3>Mawardi Alfi</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/alif.png" alt="Course Image">
        <h3>Satria Alif</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/cepi.png" alt="Course Image">
        <h3>Veri Irawan</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/likon.png" alt="Course Image">
        <h3>Lira Aulia</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
    <div class="course-card">
        <img src="/back/vendors/images/gum.png" alt="Course Image">
        <h3>Muh. Gumilang</h3>
        <p>PT.********</p>
        <a href="{{ route('admin.login') }}" class="buy-button">Join Sekarang</a>
    </div>
</div>
</body>

@endsection