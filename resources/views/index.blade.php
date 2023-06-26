@extends('layouts.app')

@section('content')
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">BAYAN HAMMADEH</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span
                                class="navbar-toggler-bar bar2"></span><span
                                class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div>
            <div class="profile-page">
                <div class="wrapper">
                    <div class="page-header page-header-small" filter-color="green">
                        <div class="page-header-image" data-parallax="true"
                            style="background-image: url({{ asset('assets/images/duma.jpeg') }})"></div>
                        <div class="container">
                            <div class="content-center">
                                <div class="cc-profile-image"><a href="#"><img
                                            src="{{ asset('assets/images/bayan.jpg') }}" alt="Image" /></a></div>
                                <div class="h2 title">{{ $personal->fname . ' ' . $personal->lname }}</div>
                                <p class="category text-white">{{ $personal->title }}</p><a
                                    class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in"
                                    data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="#"
                                    data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="button-container">
                                    @foreach ($personal->socials as $social)
                                        <a class="btn btn-default btn-round btn-lg btn-icon" href="{{ $social->url }}"
                                            rel="tooltip" title="Follow me on {{ $social->name }}" target="_blank">
                                            <i class="fa fa-{{ $social->name }}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="about">
                <div class="container">
                    <div class="card" data-aos="fade-up" data-aos-offset="10">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">About</div>
                                    <p>{{ $personal->description }}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">Basic Information</div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                        <div class="col-sm-8">{{ $personal->email }}</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Mobile:</strong></div>
                                        <div class="col-sm-8">{{ $personal->mobile }}</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                                        <div class="col-sm-8">{{ $personal->address }}</div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>

                                        <div class="col-sm-8">
                                            @foreach ($personal->langs as $lang)
                                                {{ $lang->lang_name }}
                                                <br />
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="skill">
                <div class="container">
                    <div class="h4 text-center mb-4 title">Professional Skills</div>
                    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($personal->skills as $skill)
                                    <div class="col-md-6">
                                        <div class="progress-container progress-primary"><span
                                                class="progress-badge">{{ $skill->skill_name }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="h4 text-center mb-4 title">Portfolio</div>
                        </div>
                    </div>
                    <div class="tab-content gallery mt-5">
                        <div class="tab-pane active" id="web-development">
                            <div class="ml-auto mr-auto">
                                <div class="row">
                                    @foreach ($personal->projects as $project)
                                        <div class="col-md-6">
                                            <div class="cc-porfolio-image img-raised" data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"><a
                                                    href="{{ asset($project->project_url) }}" target="_blank">
                                                    <figure class="cc-effect"><img
                                                            src="{{ asset('assets/images/' . $project->project_image) }}"
                                                            alt="Image" />
                                                        <figcaption>
                                                            <div class="h4">{{ $project->project_name }}
                                                                <br />
                                                                {{ $project->project_url }}
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="experience">
                <div class="container cc-experience">
                    <div class="h4 text-center mb-4 title">Work Experience</div>
                    @foreach ($personal->experiences as $experience)
                        @foreach ($experience->jobs as $job)
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-5 bg-primary" data-aos="fade-right" data-aos-offset="50"
                                        data-aos-duration="500">
                                        <div class="card-body cc-experience-header">
                                            <p>{{ $experience->period }}</p>
                                            <div class="h5">{{ $job->job_header }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-7" data-aos="fade-left" data-aos-offset="50"
                                        data-aos-duration="500">
                                        <div class="card-body">
                                            <p>{{ $job->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                    <div class="section">
                        <div class="container cc-education">
                            <div class="h4 text-center mb-4 title">Education</div>
                            @foreach ($personal->educations as $education)
                                @foreach ($education->details as $detail)
                                    <div class="card">
                                        <div class="row">
                                            <div class="col-md-5 bg-primary" data-aos="fade-right" data-aos-offset="50"
                                                data-aos-duration="500">
                                                <div class="card-body cc-education-header">
                                                    <p>2013 - 2015</p>
                                                    <div class="h5">{{ $education->education_name }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-7" data-aos="fade-left" data-aos-offset="50"
                                                data-aos-duration="500">
                                                <div class="card-body">
                                                    <div class="h5">{{ $detail->edu_name }}</div>
                                                    <p class="category">{{ $detail->detail }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="section" id="contact">
                        <div class="cc-contact-information" style="background-image: url('images/staticmap.png')">
                            <div class="container">
                                <div class="cc-contact">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="card mb-0" data-aos="zoom-in">
                                                <div class="h4 text-center title">Contact Me</div>
                                                <div class="alert alert-success" id="success_msg" style="display:none">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <form method="POST">
                                                                @csrf

                                                                <div class="row mb-3">
                                                                    <div class="col">
                                                                        <div class="input-group"><span
                                                                                class="input-group-addon"><i
                                                                                    class="fa fa-user-circle"></i></span>
                                                                            <input class="form-control" type="text"
                                                                                name="name" id="name"
                                                                                placeholder="Name" required="required" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col">
                                                                        <div class="input-group"><span
                                                                                class="input-group-addon"><i
                                                                                    class="fa fa-file-text"></i></span>
                                                                            <input class="form-control" type="text"
                                                                                name="Subject"
                                                                                id="subject" placeholder="Subject"
                                                                                required="required" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col">
                                                                        <div class="input-group"><span
                                                                                class="input-group-addon"><i
                                                                                    class="fa fa-envelope"></i></span>
                                                                            <input class="form-control" type="email"
                                                                                name="email" id="email"
                                                                                placeholder="E-mail"
                                                                                required="required" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="message" id="message" placeholder="Your Message" required="required"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <button type="submit" id="submit"
                                                                            class="btn btn-primary">Send</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <p class="mb-0"><strong>Address </strong></p>
                                                            <p class="pb-2">{{ $personal->address }}</p>
                                                            <p class="mb-0"><strong>Phone</strong></p>
                                                            <p class="pb-2">{{ $personal->mobile }}</p>
                                                            <p class="mb-0"><strong>Email</strong></p>
                                                            <p>{{ $personal->email }}</p>
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
                </div>
            </div>
            <footer class="footer">
                <div class="container text-center">
                    @foreach ($personal->socials as $social)
                        <a class="cc-{{ $social->name }} btn btn-link" href="{{ $social->url }}" target="_blank">
                            <i class="fa fa-{{ $social->name }} fa-2x " aria-hidden="true"></i>
                        </a>
                    @endforeach
                </div>
                <div class="h4 title text-center">{{ $personal->fname . ' ' . $personal->lname }}</div>
            </footer>
        @endsection

        @section('scripts')
            <script>
                $("#submit").click(function(e) {
                    e.preventDefault();
                    var name = $('#name').val();
                    var subject = $('#subject').val();
                    var email = $('#email').val();
                    var message = $('#message').val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    $.ajax({
                        type: 'POST',
                        data: {
                            name: name,
                            subject: subject,
                            email: email,
                            message: message,
                        },
                        dataType: 'json',
                        url: '{{ url('store') }}',
                        success: function(data) {
                            $('#success_msg').show();
                            $('#success_msg').text(data.message);
                        },
                        error: function(data) {
                            $('#success_msg').show();
                            $('#success_msg').text(data.message);
                        }
                    });
                });
            </script>
        @endsection
