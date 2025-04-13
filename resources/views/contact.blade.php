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
                    <p class="mb-4">You can just send an email</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="first_name" id="first_name" class="form-control" style="background: #f0f8ff" placeholder="First Name" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="last_name" id="last_name" class="form-control"  style="background: #f0f8ff" placeholder="Last Name" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <input type="text" name="contact_number" id="contact_number" class="form-control"  style="background: #f0f8ff" placeholder="Contact Number" required>
                        </div>
                    </div>

                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"  style="background: #f0f8ff" placeholder="Your email address" required>
                    <textarea name="message" rows="5" class="form-control" style="background: #f0f8ff" id="message" placeholder="What can we help you?"></textarea>

                    <button type="submit" class="form-control">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection