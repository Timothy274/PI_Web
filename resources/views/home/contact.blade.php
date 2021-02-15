@extends('layouts.utama.layout')
@section('section')
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4 font-weight-bold">Tentang Kami</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-8 d-flex">
                <div class="dbox">
                    <h4>Waroenk Bude adalah suatu bisnis katering yang menawarkan masakan indonesia. yang berdiri sejak 1 tahun yang dimana bisnis ini awalnya merupakan sebuah warung yang berada di Jakarta Timur </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Kontak kami</h2>
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukkan nama anda">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukkan email anda">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subjek">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Isi Pesan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="googleMap" style="width:100%;height:100%;"></div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4 font-weight-bold">Informasi Kontak</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="dbox">
                    <p><span>Alamat:</span> Jl. Hj. Misna RT 06 RW 04, Cakung, Penggilingan, Jakarta Timur</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="dbox">
                    <p><span>No. Telp:</span> <a href="tel://1234567920">+6281385484594</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="dbox">
                    <p><span>Email:</span> <a href="mailto:adinatarezawahyu@gmail.com">storafood@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var options = {
            center: new google.maps.LatLng(-6.211206, 106.942148), // longitude latitude bandung
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP // Tipe ROADMAP
        };
        // create map object
        var map = new google.maps.Map(document.getElementById("googleMap"), options);
    }
    // membuat Event Listener untuk memanggil fungsi initialize pada saat halaman selesai di load
    google.maps.event.addDomListener(window, 'load', initialize);

</script>
@endsection
