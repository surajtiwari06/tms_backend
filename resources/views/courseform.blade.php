@extends('layouts.app')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <div class="section-full twm-hpage-6-subs-wrap">
            <div class="container">
                <div class="section-content mb-5">

                </div>
            </div>
        </div>
        <div class="section-full p-t70 p-b90 site-bg-gray bg-cover overlay-wraper"
            style="background-image:url('{{ asset('images/background/bg-1.jpg') }}')">
            <div class="overlay-main site-bg-primary opacity-01"></div>
            <div class="container">

                <h3 class="site-text-primary display-6 text-center mb-5 mt-3">Generative AI Course Registration Form</h3>


                <div class="section-content">
                    <div class="d-flex justify-content-center">
                        <div class="">
                            <div class="twm-blog-post-wrap-right">
                                <div class="blog-post twm-blog-post-1-outer shadow-none m-b10">
                                    <div class="wt-post-info">

                                        <div class="wt-post-text mt-4">
                                            @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        

                                            <form class="cons-contact-form" action="{{ route('courseform.store') }}"
                                                method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ old('name') }}" placeholder="Name" required>
                                                            @error('name')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <select name="gender" class="form-control" required>
                                                                <option value="" disabled selected>Gender</option>
                                                                <option value="male"
                                                                    {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                                                </option>
                                                                <option value="female"
                                                                    {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                                                </option>
                                                                <option value="other"
                                                                    {{ old('gender') == 'other' ? 'selected' : '' }}>Other
                                                                </option>
                                                            </select>
                                                            @error('gender')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control"
                                                                value="{{ old('email') }}" placeholder="Email" required>
                                                            @error('email')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <input type="tel" name="phone" class="form-control"
                                                                value="{{ old('phone') }}" placeholder="Phone" required>
                                                            @error('phone')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <input type="text" name="company" class="form-control"
                                                                value="{{ old('company') }}" placeholder="Company">
                                                            @error('company')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <select name="study" id="study" class="form-control"
                                                                required>
                                                                <option class="text-inherit" value="" disabled
                                                                    selected>Education</option>
                                                                <option value="graduation"
                                                                    {{ old('study') == 'graduation' ? 'selected' : '' }}>
                                                                    Graduation</option>
                                                                <option value="post_graduation"
                                                                    {{ old('study') == 'post_graduation' ? 'selected' : '' }}>
                                                                    Post Graduation</option>
                                                                <option value="phd"
                                                                    {{ old('study') == 'phd' ? 'selected' : '' }}>PhD
                                                                </option>
                                                            </select>
                                                            @error('study')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 mb-2">
                                                        <div class="form-group">
                                                            <input type="text" name="address" class="form-control"
                                                                value="{{ old('address') }}" placeholder="Address"
                                                                required>
                                                            @error('address')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <input type="text" name="city" class="form-control"
                                                                value="{{ old('city') }}" placeholder="City" required>
                                                            @error('city')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <input type="text" name="state" class="form-control"
                                                                value="{{ old('state') }}" placeholder="State" required>
                                                            @error('state')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                                                            @error('message')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="site-button btn-primary">Submit
                                                            Now</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
