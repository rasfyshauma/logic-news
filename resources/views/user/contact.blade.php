@extends('layouts.user.app', [
    'title' => 'Contact',
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
<section>
        <div class="container">
            <h3>Kontak Kami</h3>
            <div class="row">
                <form action="">
                <div class="col m6 s12">
                <div class="card-panel" style="height: 305px;">
                    <div class="input-field">
                        <textarea name="messagge" id="messagge" class="materialize-textarea validate" required></textarea>
                        <label for="messagge">Message</label>
                    </div>
                </div>
                </div>
                <div class="col m6 s12">
                        <div class="card-panel">
                            <div class="input-field">
                                <input type="text" name="name" id="name" required class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone" class="validate" required>
                                <label for="phone">Phone</label>
                            </div>

                            <button class="btn green darken-2" style="width: 100%;">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
