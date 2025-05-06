@extends('components.layout')
@section('content')
<section class="section-padding section-bg " id="contact-us">
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="row">
            <div class="col-lg-6 col-12 mx-auto">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> {{ session('message') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> {{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form class="custom-form contact-form bg-white" action="{{ route('email')}}" method="post">
                    @csrf
                    <h2>Contact Us</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <input type="text" name="name" id="first_name" class="form-control" style="background: #f0f8ff" placeholder="Name" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"  style="background: #f0f8ff" placeholder="Your email address" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <input type="text" name="contact_number" id="contact_number" class="form-control"  style="background: #f0f8ff" placeholder="Phone Number" required>
                        </div>
                    </div>

                    <textarea name="message" rows="5" class="form-control" style="background: #f0f8ff" id="message" placeholder="Message"></textarea>

                    <button type="submit" class="form-control">Send Message</button>

                    <div class="mt-4">
                        <ul class="custom-list">
                            <li class="custom-list-item d-flex align-items-center justify-items-center" style="font-size: 14px">
                                <i class="bi-check custom-text-box-icon me-2"></i>
                                <span> By clicking <b class="mx-1"> SUBMIT </b> you consent to receiving SMS messages</span>
                            </li>
                            <li class="custom-list-item d-flex align-items-center justify-items-center" style="font-size: 14px">
                                <i class="bi-check custom-text-box-icon me-2"></i>
                                <span>Messages and data rates may apply. Messages frequency will vary</span>
                            </li>
                            <li class="custom-list-item d-flex align-items-center justify-items-center" style="font-size: 14px">
                                <i class="bi-check custom-text-box-icon me-2"></i>
                                <span> Reply <b class="mx-1"> Help </b> to get more assistance</span>
                            </li>
                            <li class="custom-list-item d-flex align-items-center justify-items-center" style="font-size: 14px">
                                <i class="bi-check custom-text-box-icon me-2"></i>
                                <span>Reply <b class="mx-1"> Stop </b> to Opt-out of messaging</span>
                            </li>
                        </ul>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
@endsection