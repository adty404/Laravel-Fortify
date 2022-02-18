@extends('layouts.app', ['title' => 'Email Verification'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Email Verification</div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                Email sudah dikirim.
                            </div>
                        @endif
                        Untuk mengunjungi halaman ini, Anda harus melakukan verifikasi email. Tapi ketika misalnya, email nya tidak dikirim, silahkan tekan tombol kirim ulang.

                        <form action="/email/verification-notification" method="post" class="mt-2">
                            @csrf
                            <button type="submit" class="btn btn-primary">Kirim Ulang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection