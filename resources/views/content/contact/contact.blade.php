@extends('layout.client.master')
@section('title', 'Liên hệ')
@section('style-custom')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('content')
    <section class="contact" id="contact">
        <h1 class="text-center">Liên hệ với chúng tôi</h1>
        <div class="contact-container">
            <div class="row">
                <div class="title-contact">
                    <div class="contact-content">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                            @csrf
                            @honeypot
                            <div class="row">
                                <div class="mb-contact col-md-6">
                                    <input type="text" name="name" value="" size="40" class="form-control "
                                        aria-required="true" aria-invalid="false" placeholder="Nhập tên của bạn">
                                        @if ($errors->first('name'))
                                        <span class="text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-contact col-md-6">
                                    <input type="email" name="email" value="" size="40"
                                        class="form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                        aria-required="true" aria-invalid="false" placeholder="Email">
                                        @if ($errors->first('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-contact col-md-12">
                                    <input type="text" name="subject" value="" size="40" class="form-control "
                                        aria-required="true" aria-invalid="false" placeholder="Tiêu đề">
                                        @if ($errors->first('subject'))
                                        <span class="text-danger">
                                            {{ $errors->first('subject') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="message" cols="40" rows="10" class="form-control" aria-required="true"
                                        aria-invalid="false" placeholder="Message"></textarea>
                                        @if ($errors->first('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <iframe class="contact-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.451170860792!2d106.6268143999402!3d10.85324839223151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529b6a2b351a5%3A0x11690ada8c36f9bc!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgVFAuSENNIChDUzMp!5e0!3m2!1svi!2s!4v1650992498040!5m2!1svi!2s"
                        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-6">
                    <div class="contact-img">
                        <img src="{{ asset('frontend/images/sta.jpg') }}" alt="" class="">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
