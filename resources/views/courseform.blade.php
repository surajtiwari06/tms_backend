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
        <div class="section-full p-t70 p-b90 site-bg-gray bg-cover overlay-wraper" style="background-image:url('{{ asset('images/background/bg-1.jpg') }}')">
            <div class="overlay-main site-bg-primary opacity-01"></div>
            <div class="container">
            
                <h3 class="site-text-primary display-6 text-center mb-5 mt-3">Genrative AI Course Registration Form</h3>


                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5 col-md-12 m-b30">
                            <!--Block one-->
                            <div class="blog-post twm-blog-post-2-outer">
                                <div class="wt-post-media">
                                    <img src="{{ asset('images/ai.jpg')}}" alt="" height="40px">
                                </div>                                    
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">TMS</li>
                                        </ul>
                                    </div>
                                                                 
                                <div>
                                    <div class="wt-post-title">
                                        <h4 class="post-title">
                                            <a href="">
                                                Enroll in our cutting-edge AI course and advance your skills!
                                            </a>
                                        </h4>
                                    </div>                                  
                                </div>

                            </div>                                
                            </div>
                        </div>
                        
                        <div class="col-lg-7 col-md-12">
    
                            <div class="twm-blog-post-wrap-right">
                                <div class="blog-post twm-blog-post-1-outer shadow-none m-b10">
                                    <div class="wt-post-info">
    
                                        <div class="wt-post-text mt-4">
                                            <form class="cons-contact-form" method="POST" action="{{ route('courseform.store') }}">
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
                                                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                                            </select>
                                                            @error('gender')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                    
                                                    <div class="col-lg-12 mb-2">
                                                        <div class="form-group">
                                                            <input type="text" name="address" class="form-control"
                                                                value="{{ old('address') }}" placeholder="Address" required>
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
                                    
                                                    <div class="col-lg-12 col-md-12 mb-2">
                                                        <div class="form-group">
                                                            <input type="text" name="company" class="form-control"
                                                                value="{{ old('company') }}" placeholder="Company">
                                                            @error('company')
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
                                                        <button type="submit" class="site-button btn-primary">Submit Now</button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                            <script>
                                                function showAlert(className, message) {
                                                    const alertDiv = document.createElement('div');
                                                    alertDiv.className = `alert ${className} mt-3`;
                                                    alertDiv.textContent = message;
                                    
                                                    const form = document.querySelector('.cons-contact-form');
                                                    form.parentNode.insertBefore(alertDiv, form);
                                    
                                                    setTimeout(() => {
                                                        alertDiv.remove();
                                                    }, 5000);
                                                }
                                    
                                                document.querySelector('.cons-contact-form').addEventListener('submit', function(e) {
                                                    e.preventDefault();
                                                    const submitButton = document.querySelector('.site-button');
                                                    submitButton.disabled = true;
                                    
                                                    const formData = new FormData(this);
                                    
                                                    axios.post('{{ route('courseform.store') }}', formData)
                                                        .then(response => {
                                                            if (response.data.success) {
                                                                showAlert('alert-success', response.data.success);
                                                                this.reset();
                                                            } else {
                                                                showAlert('alert-danger', response.data.error);
                                                            }
                                                        })
                                                        .catch(error => {
                                                            showAlert('alert-danger', 'An error occurred while submitting the form.');
                                                        })
                                                        .finally(() => {
                                                            submitButton.disabled = false;
                                                        });
                                                });
                                            </script>
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



