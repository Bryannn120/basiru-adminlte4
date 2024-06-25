@extends('back.layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'page title here')
<style>
    .faq-section {
        text-align: center;
        padding: 50px 0;
    }

    .faq-section h2 {
        font-weight: bold;
    }

    .faq-section hr {
        width: 60px;
        border: 2px solid yellow;
        margin: 10px auto;
    }
    .accordion-item{
        text-align: center;

    }

    .accordion-button:focus {
        box-shadow: none;
    }

    .accordion-button {
        font-weight: 30px;
        border: none;
           
    }

    /* .accordion-button::after {
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>');
    } */
    .row{
        border-radius: 0px;
    }
    .fw-bold {
            
            color: rgb(0, 0, 255);
            font-weight: 600;
            font-size: 35;
        }
    .pb{
        margin-top: 50px;
        font-weight: 600;
        font-size: 35;
    }
</style>
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col fs-4">
                <p class="pb">"Basiru berasal dari bahasa Sumbawa yang berarti</p>&nbsp;
                <span class="fw-bold" style="color: rgb(23, 23, 56);" font-weight="bold">TOLONG MENOLONG."</span>
            </div>
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-4" style="color :rgb(23, 23, 56);">Tentang&nbsp;<span class="underline">Basiru</span></h2>
                <p class="text-muted"><br><span style="color: rgb(23, 23, 56);">BASIRU merupakan platform Securities Crowdfunding yang menjadi jawaban untuk para investor yang ingin berinvestasi secara mudah, aman, terpercaya, dan menguntungkan, serta membantu pelaku usaha untuk mendapatkan permodalan.</span><br><br></p>
            </div>
        </div>
        <div class="faq-section">
            <h2>FAQ</h2>
            <hr>
            <p><H5>Berikut pertanyaan yang sering ditanya.</H5></p>

            <div class="accordion text-left" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Bagaimana mendapatkan modal usaha dari Basiru?
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>
                    1. Mahasiswa/alumni dari Universitas Teknologi Sumbawa (UTS).<br>
                    2. Memiliki Surat Izin Usaha Perdagangan (SIUP).<br>
                    3. Laporan Keuangan 1 tahun terakhir.<br>
                    4. Foto Lokasi Usaha.
                </p>
                <p class="mb-0">Untuk lebih jelas hubungi admin melalui email di admin@basiru.org</p>
            </div>
        </div>
    </div>
<br>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Bagaimana cara mendapatkan keuntungan dari menanam modal di Basiru?
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p class="mb-0">
                    Basiru menggunakan skema kerjasama kedua belah pihak (Bagi Hasil).<br>
                    Pihak pertama selaku pengelola dan pihak kedua sebagai pemodal.<br>
                    Pihak pertama mengelola penuh modal hingga mendapatkan keuntungan dan pihak kedua juga mendapatkan keuntungan sesuai persentase yang telah disepakati.<br>
                    Jika pihak pertama mengalami kerugian, maka pihak kedua mengalami kerugian sesuai persentase modal yang diberikan.
                </p>
            </div>
        </div>
    </div>
<br>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Apakah bisa orang selain mahasiswa/alumni UTS mendapatkan modal dari BASIRU?
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p class="mb-0">
                    Saat ini platform belum bisa melakukannya. Dikarenakan masih dalam tahap uji coba.<br>
                    Semoga kedepannya platform ini bisa beredar ke masyarakat luas.
                </p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Bagaimana Caranya mendaftarkan usaha di Basiru?
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p>
                    1. Mahasiswa/alumni dari Universitas Teknologi Sumbawa (UTS).<br>
                    2. Mengajukan Surat Izin Usaha Perdagangan (SIUP).<br>
                    3. Mau Bekerja Sama.<br>
                    4. Foto Lokasi Usaha Yang Akan Didaftarkan.
                </p>
                <p class="mb-0">Untuk lebih jelas hubungi admin melalui email di admin@basiru.org</p>
            </div>
        </div>
    </div>
    
</div>

        </div>

    </div>
    </div>


    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-4" style="color: rgb(23, 23, 56);">Ada&nbsp;<span class="underline">pertanyaan</span>?</h2>
                <p class="text-muted">Jika ada pertanyaan atau masukan kami selalu siap melayani.</p>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div>
            <form class="p-3 p-xl-4" method="post" action="#">
                @csrf <!-- Ini penting untuk keamanan Laravel CSRF -->
                <div class="mb-3">
                    <input class="shadow form-control" type="text" id="nama" name="nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <input class="shadow form-control" type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <textarea class="shadow form-control" id="message" name="message" rows="6" placeholder="Pesan" required></textarea>
                </div>
                <div>
                    <button class="btn btn-primary shadow d-block w-100" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@endsection