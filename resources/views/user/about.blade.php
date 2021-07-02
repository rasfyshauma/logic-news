@extends('layouts.user.app', [
    'title' => 'About',
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
    .slides img{
        filter : brightness(50%)
    }
</style>
    <div class="slider" id="home">
        <ul class="slides">
            <li>
                <img src="{{ asset('asset/ASET/x1/pascal-muller-iSz0IMtulos-unsplash.png') }}">
                    <div class="caption left-align">
                        <h3>Tentang Kami</h3>
						<p> Ini adalah web yang memberikan anda wawasan dan pengalaman mengenai kehidupan alam semesta kita yang indah.</p>
                    </div>
            </li>
        </ul>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col m6">
                                    <h3>Inilah ciri khas yang dimiliki hewan!</h3>
                                    <p>Seperti bunglon yang dapat merubah warna dirinya sesuai dengan tempat dia berdiam, yang biasa disebut dengan mimikri, kemampuan ini membantu bunglon untuk menghindari musuh (mengecoh musuh),</p>
                                </div>
                                <div class="col m3">
                                    <br>
                                    <img src="{{ asset('asset/ASET/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') }}" class="responsive-img materialboxed">
                                </div>
                                <div class="col m3">
                                    <br>
                                    <img src="{{ asset('asset/ASET/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" class="responsive-img materialboxed">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m6 offset-m6">
                                    <br>
                                    <img src="{{ asset('asset/ASET/x1/smit-patel-dGMcpbzcq1I-unsplash.png') }}" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
    </section>
@endsection
