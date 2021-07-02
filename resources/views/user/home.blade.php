@extends('layouts.user.app', [
    'title' => 'Home',
    'logo' => '',
    'email' => $contact->email ?? 'NotFound',
    'phone' => $contact->phone ?? 'NotFound',
    'addr' => $contact->address ?? 'NotFound'
])
@section('content')
<style>
section,footer{
    padding : 50px 0px;
}
.parallax img,
.slides img{
    filter : brightness(80%)
}
.carousel .carousel-item {
        width: 34%;
        height : auto;
}
</style>
    <div class="slider" id="home">
        <ul class="slides">
            <li>
                <img src="{{ asset('asset/ASET/x1/pascal-muller-iSz0IMtulos-unsplash.png') }}">
                <div class="caption left-align">
                    <div class="row">
                        <div class="col m5">
                            <h3>LOGICNEWS</h3>
                            <p>Alam merupakan guru terbaik, karena setiap adegan petualangan pasti akan mengajarkan ilmu yang sangat berharga untuk kita.</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- about us -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col m6">
                    <strong class="green-text">TENTANG KAMI</strong>
                    <h3>Inilah 10 Hewan Herbivora Yang Berbahaya!</h3>
                    <p>Apa sajakah 10 hewan berbahaya ini?</p>
                    <a href="{{ route('about') }}" class="sidenav-trigger waves-effect waves-light btn green darken-2 button">Baca Selengkapnya &rightarrow;</a>
                </div>
                <div class="col m3 light">
                    <br>
                    <img src="{{ asset('asset/ASET/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') }}" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3">
                    <br>
                    <img src="{{ asset('asset/ASET/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" alt="" class="responsive-img materialboxed">
                </div>
                <div class="row">
                    <div class="col m6">
                        <br>
                        <img src="{{ asset('asset/ASET/x1/kyle-nieber-3ryX0ShTMWg-unsplash.png') }}" alt="" class="responsive-img materialboxed">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
