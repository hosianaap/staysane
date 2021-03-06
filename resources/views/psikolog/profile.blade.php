@extends('layout.main-psikolog-layout')
@section('mainTitle', 'Doctor Profile')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/psikolog/patient" class="btn nav-link " role="button"><i class="bi bi-bag-plus"></i>
                    <span>Patient</span></a></li>
            <li><a href="/psikolog/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/psikolog/profile" class="btn nav-link active" role="button"><i class="bx bx-user"></i>
                    <span>Profile</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection

@section('content')

    <br>
    <br>
    <style>
        p {
            font-size: 18px
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 25px
        }
    </style>
    <div class="row m-0">
        <div class="d-flex justify-content-start align-content-center">
            @foreach ($listakunpsikolog as $d)
                <img src="{{ asset('data_file/' . $d->fotopsikolog) }}">
                <div class="col docname">
                    <h3><strong>{{ $d->namapsikolog }}</strong></h3>
                    <br>
                    <br>
                </div>
        </div>
    </div>

    <h2>
        <p class="kolom">Nama:</p>
        <p>{{ $d->namapsikolog }}</p>
        <p class="kolom">SIPP:</p>
        <p>{{ $d->sipp }}</p>
        <p class="kolom">Email:</p>
        <p>{{ $d->emailpsikolog }}</p>
    </h2>
    @endforeach
    <div class="d-flex" style="padding-top: 40px">
        <a href="/psikolog/schedule">
            <div class="btn payment-bttn"><span><i class="bi bi-calendar"></i></span> Your schedule
            </div>
        </a>
        <div style="padding-left: 40px">
            <a href="/psikolog/profile/edit/{{ $d->sipp }}">
                <div class="btn payment-bttn"> Edit Profile
                </div>
            </a>
        @endsection
