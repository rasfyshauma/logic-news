@extends('layouts.user.app', [
    'title' => 'News',
    'logo' => '',
    'email' => $contact->email ?? 'NotFound',
    'phone' => $contact->phone ?? 'NotFound',
    'addr' => $contact->address ?? 'NotFound'
])
@section('content')
<style>
section,
footer{
    padding : 50px 0px;
}
    .slides img{
        filter : brightness(50%)
    }
</style>
    <div class="slider" id="home">
        <ul class="slides">
            <li>
                <img src="{{ asset('asset/ASET/x1/pascal-muller-iSz0IMtulos-unsplash.png') }}">
                <div class="caption left-align">
                    <h3>Berita</h3>
					<p>Simak beberapa berita berikut dibawah ini!</p>
                </div>
            </li>
        </ul>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col m3">
                    <img src="{{ asset('asset/ASET/x1/zoe-reeve-9hSejnboeTY-unsplash.png') }}" class="responsive-img materialboxed">
                </div>
                <div class="col m3">
                    <img src="{{ asset('asset/ASET/x1/ronald-gijezen-7h06P9UKhYY-unsplash.png') }}" class="responsive-img materialboxed">
                    <br>
                    <img src="{{ asset('asset/ASET/x1/david-clode-AtCChdVhAmA-unsplash.png') }}" class="responsive-img materialboxed">
                </div>
                <div class="col m6">
                    <h3>10 Hewan Herbivora Yang Berbahaya</h3>
                    <p>1. Babun</P> 
					<p>Walaupun memakan buah-buahan, babun memiliki taring yang besar. Jika kamu berurusan dengan mereka, maka bersiap-siaplah dengan gigitannya</p>
                    <p>2. Bison</p>
					<p>Ada fakta bison membunuh turis lebih banyak daripada beruang dan serigala. Alasannya cukup mudah: para turis tersebut melanggar privasi bison.</p>
                    <a href="{{ route('news') }}" data-target="slide-out" class="sidenav-trigger waves-effect waves-light btn green">Lihat Selengkapnya &RightArrow;</a>
                </div>
            </div>
        </div>
    </section>
@endsection
