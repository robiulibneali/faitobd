@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/z0B20V6Gkz.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>Contact</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing full">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>{{ trans('frontend.contact.contact') }}</small>
                        <h3>{{ trans('frontend.contact.contact') }}</h3>
                    </div>
                </div>
                <div class="wrap-box-news contact">
                    <span class="dots-abs"><img src="{{ asset('/') }}frontend/assets/contents/images/material/dots-square-small.html" alt=""></span>
                    <figure class="big-img">
                        <img src="{{ asset('/') }}frontend/assets/contents/cjsVDlpkMf.jpg" alt="">
                    </figure>
                    <div class="right-list">
                        <figure><img src="{{ asset('/') }}frontend/assets/contents/4dVXEf6gSg.png" alt=""></figure>
                        <h6>PT FAITO RACING DEVELOPMENT</h6>
                        @foreach($siteSettings as $siteSetting)
                            <p>{!! $siteSetting->description !!}</p>
                            <a href="tel:{{ $siteSetting->helpline_number }}">T. {{ $siteSetting->helpline_number }}</a>
                            <a href="mailto:{{ $siteSetting->email }}">E. {{ $siteSetting->email }}d</a>
                        @endforeach
                    </div>
                </div>
                <div class="wrap-tab">
                    <span class="sub">{{ trans('frontend.contact.available_for') }}</span>
                    <div class="wrap-overflow">
                        <div class="box-tabing contact">
                            <span class="repeat-dots"></span>
                            <div class="head-tab">
                                <ul>
                                    <li><a href="#tab1">{{ trans('frontend.contact.say_hello') }}</a></li>
                                    <li><a href="#tab2">{{ trans('frontend.contact.join_reseller') }}</a></li>
                                </ul>
                            </div>
                            <div class="content-tab text-content" id="tab1">
                                <h4>{{ trans('frontend.contact.send_msg') }}</h4>
                                <p>{{ trans('frontend.contact.send_msg_des') }}</p>
                                <div class="form">
                                    {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJs() !!}
                                    <form method="post" class="yourForm" action="{{ route('frontend.contacts.store') }}" accept-charset="UTF-8" id="formContact" enctype="multipart/form-data">
                                        @csrf
                                        <input name="contact_type" type="hidden" value="regular">
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">{{ trans('frontend.contact.name') }}</label>
                                                <input class="anim-label" required="required" name="name" type="text" value="">
                                                @error('name')<span class="text-danger mt-2">{{ $errors->first('name') }}</span>@enderror
                                            </div>
                                            <div class="col half">
                                                <label for="">{{ trans('frontend.contact.email') }}</label>
                                                <input class="anim-label" required="required" name="email" type="email" value="">
                                                @error('email')<span class="text-danger mt-2">{{ $errors->first('email') }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">{{ trans('frontend.contact.phone') }}</label>
                                                <input class="numberonly anim-label" required="required" name="mobile" type="text" value="">
                                                @error('mobile')<span class="text-danger mt-2">{{ $errors->first('mobile') }}</span>@enderror
                                            </div>
                                            <div class="col half">
                                                <label for="">{{ trans('frontend.contact.motor_type') }}</label>
                                                <select class="anim-label" required="required" name="motor_type_id">
                                                    <option value="" disabled selected="selected"></option>
                                                    @foreach($motorType as $motor)
                                                    <option value="">{{ $motor->name }}</option>>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">{{ trans('frontend.contact.message') }}</label>
                                                <textarea class="anim-label" required="required" name="message" cols="50" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div data-sitekey="6LeWyYkpAAAAAH7cigXUabcyouAZZooYhoqEyXJw" data-secretkey="6LeWyYkpAAAAAC204eHwpuSuIH_Sg9Ind2BFZqDR" class="g-recaptcha"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="submit" value="Send Message" class="submitButton" {{--disabled--}} />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="content-tab" id="tab2">
                                <h4>{{ trans('frontend.contact.become_reseller') }}</h4>
                                <p>{{ trans('frontend.contact.become_reseller_des') }}</p>
                                <div class="form">
                                    {!! \Anhskohbo\NoCaptcha\Facades\NoCaptcha::renderJs() !!}
                                    <form method="post" class="yourForm" action="{{ route('frontend.contacts.store') }}" accept-charset="UTF-8" id="formReseller" enctype="multipart/form-data">
                                        @csrf
                                        <input name="contact_type" type="hidden" value="reseller">
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">{{ trans('frontend.contact.name') }}</label>
                                                <input class="anim-label" required="required" name="name" type="text" value="">
                                                @error('name')<span class="text-danger mt-2">{{ $errors->first('name') }}</span>@enderror
                                            </div>
                                            <div class="col half">
                                                <label for="">{{ trans('frontend.contact.email') }}</label>
                                                <input class="anim-label" required="required" name="email" type="email" value="">
                                                @error('email')<span class="text-danger mt-2">{{ $errors->first('email') }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col half">
                                                <label for="">{{ trans('frontend.contact.phone') }}</label>
                                                <input class="number-only anim-label" required="required" name="mobile" type="text" value="">
                                                @error('mobile')<span class="text-danger mt-2">{{ $errors->first('mobile') }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h5>{{ trans('frontend.contact.workshop_info') }}</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label for="">{{ trans('frontend.contact.address') }}</label>
                                                <input class="anim-label" required="required" name="workshop_info" type="text" value="" />
                                                @error('workshop_info')<span class="text-danger mt-2">{{ $errors->first('workshop_info') }}</span>@enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col fileupload">
                                                <label for="">{{ trans('frontend.contact.photo_outside_workshop') }}</label>
                                                <input class="anim-label" placeholder-text="{{ trans('frontend.contact.upload_here') }}" required="required" name="workshop_inside_image" type="file" accept="image/*" />
                                            </div>
                                            <div class="col fileupload">
                                                <label for="">{{ trans('frontend.contact.photo_inside_workshop') }}</label>
                                                <input class="anim-label" placeholder-text="{{ trans('frontend.contact.upload_here') }}" required="required" name="workshop_outside_image" type="file" accept="image/*" />
                                            </div>
                                            <div class="col fileupload">
                                                <label for="">{{ trans('frontend.contact.photo_selfie_workshop') }}</label>
                                                <input class="anim-label" placeholder-text="{{ trans('frontend.contact.upload_here') }}" required="required" name="workshop_selfie_image" type="file" accept="image/*" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div data-sitekey="6LeWyYkpAAAAAH7cigXUabcyouAZZooYhoqEyXJw" data-secretkey="6LeWyYkpAAAAAC204eHwpuSuIH_Sg9Ind2BFZqDR" class="g-recaptcha"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="submit" value="Send Message" class="submitButton" {{--disabled--}} />
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
    </section>
@endsection

@push('script')

    <script src="{{ asset('/') }}frontend/assets/www.google.com/recaptcha/apid41d.js?" async defer></script>
    <script type="text/javascript" src="{{ asset('/') }}frontend/assets/vendor/jsvalidation/js/jsvalidation.js"></script>

    <script>
        jQuery(document).ready(function(){

            $("#formContact").validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block',

                errorPlacement: function(error, element) {
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.insertAfter(element.parent());
                        // else just place the validation message immediatly after the input
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },
                ignore : [], // <-- this is important

                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function(element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                invalidHandler: function(event, validator) {
                    // 'this' refers to the form
                    var errors = validator.numberOfInvalids();
                    if (errors) {
                        swal(
                            'Validation',
                            'Check your Input',
                            'info'
                        )
                    }
                },

                rules: {"name":{"laravelValidation":[["Required",[],"Name field is required.",true]]},"email":{"laravelValidation":[["Required",[],"Email field is required.",true],["Email",[],"The Email must be a valid email address.",false]]},"phone":{"laravelValidation":[["Required",[],"Phone Number field is required.",true]]},"message":{"laravelValidation":[["Required",[],"Message field is required.",true]]},"motor_type_id":{"laravelValidation":[["Required",[],"motor type id field is required.",true]]},"g-recaptcha-response":{"laravelValidation":[["Required",[],"Google Captcha field is required.",true]]}}        })
        })
    </script>

    <script>
        jQuery(document).ready(function(){

            $("#formReseller").validate({
                errorElement: 'span',
                errorClass: 'help-block error-help-block',

                errorPlacement: function(error, element) {
                    if (element.parent('.input-group').length ||
                        element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.insertAfter(element.parent());
                        // else just place the validation message immediatly after the input
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // add the Bootstrap error class to the control group
                },
                ignore : [], // <-- this is important

                /*
                 // Uncomment this to mark as validated non required fields
                 unhighlight: function(element) {
                 $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                 },
                 */
                success: function(element) {
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
                },

                focusInvalid: false, // do not focus the last invalid input
                invalidHandler: function(event, validator) {
                    // 'this' refers to the form
                    var errors = validator.numberOfInvalids();
                    if (errors) {
                        swal(
                            'Validation',
                            'Check your Input',
                            'info'
                        )
                    }
                },

                rules: {"name":{"laravelValidation":[["Required",[],"Name field is required.",true]]},"email":{"laravelValidation":[["Required",[],"Email field is required.",true],["Email",[],"The Email must be a valid email address.",false]]},"phone":{"laravelValidation":[["Required",[],"Phone Number field is required.",true]]},"address":{"laravelValidation":[["Required",[],"Address field is required.",true]]},"image_outside":{"laravelValidation":[["Required",[],"Photo Outside Workshop field is required.",true],["Mimes",["jpeg","png","jpg","gif","svg"],"The Photo Outside Workshop must be a file of type: jpeg, png, jpg, gif, svg.",false],["Max",["2048"],"Photo Outside Workshop may not be greater than 2048 kilobytes.",false]]},"image_inside":{"laravelValidation":[["Required",[],"Photo Inside Workshop field is required.",true],["Mimes",["jpeg","png","jpg","gif","svg"],"The Photo Inside Workshop must be a file of type: jpeg, png, jpg, gif, svg.",false],["Max",["2048"],"Photo Inside Workshop may not be greater than 2048 kilobytes.",false]]},"image_selfie":{"laravelValidation":[["Required",[],"Photo Selfie Workshop field is required.",true],["Mimes",["jpeg","png","jpg","gif","svg"],"The Photo Selfie Workshop must be a file of type: jpeg, png, jpg, gif, svg.",false],["Max",["2048"],"Photo Selfie Workshop may not be greater than 2048 kilobytes.",false]]},"g-recaptcha-response":{"laravelValidation":[["Required",[],"Google Captcha field is required.",true]]}}        })
        })
    </script>
    <!-- Add this script at the end of your HTML body or in a separate script file -->
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            var submitButton = $('.submitButton');--}}
{{--            var yourForm = $('.yourForm');--}}

{{--            // Disable submit button initially--}}
{{--            submitButton.prop('disabled', true);--}}

{{--            // Hook into reCAPTCHA callback--}}
{{--            window.onNuxtReady(function() { // For Nuxt.js projects, remove this line if not using Nuxt--}}
{{--                grecaptcha.ready(function() {--}}
{{--                    grecaptcha.execute('{{ config('app.nocaptcha_sitekey') }}', {action: 'submit'}).then(function(token) {--}}
{{--                        // Enable submit button when reCAPTCHA is completed--}}
{{--                        submitButton.prop('disabled', false);--}}
{{--                    });--}}
{{--                });--}}
{{--            });--}}

{{--            // Validate reCAPTCHA on form submit--}}
{{--            yourForm.submit(function() {--}}
{{--                if (grecaptcha.getResponse() === '') {--}}
{{--                    // Display an error message or take appropriate action--}}
{{--                    alert('Please complete reCAPTCHA before submitting the form.');--}}
{{--                    return false; // Prevent form submission--}}
{{--                }--}}
{{--                // Form is valid, proceed with submission--}}
{{--                return true;--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endpush

@push('css')
    <style>
        .text-danger {
            color: red!important;
        }
        .mt-2 {
            margin-top: 2px!important;
        }
    </style>
@endpush
