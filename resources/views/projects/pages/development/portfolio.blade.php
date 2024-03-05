@extends('layouts.base-details')

@section('project')
<div class="row text-end fade-in">
    <div class="col">
        <a class="btn" href="{{ route('projects.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
            <span>Close details</span>
        </a>
    </div>
</div>
<div class="row py-2 fade-in">
    <main>
        <h3>My portfolio web</h3>
        <span>Frontend (Laravel with PHP 8.1)</span>
        <br><br><br>
        <h5>The challenge</h5>
        <p class="text-start" style="color: #535353;">
            Develop a personal web to display information about of me (short information personal,
            work history/projects done and education). This to endorse my work experience and with
            curricular porpouses.
        </p>
        <h5>Process</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Design of views (low fidelity)
                <p class="text-start ms-3" style="color: #535353;">
                    Having clear the objetive of the development, I started with ideas for the site 
                    views.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="low-fidelity-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_7.webp') }}" alt="design-low-fidelity-7">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_8.webp') }}" alt="design-low-fidelity-8">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/low_fidelity_9.webp') }}" alt="design-low-fidelity-9">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#low-fidelity-carousel" data-bs-slide="prev" name="prev-low-fidelity" id="prev-low-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#low-fidelity-carousel" data-bs-slide="next" name="next-low-fidelity" id="next-low-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Design of views (high fidelity)
                <p class="text-start ms-3" style="color: #535353;">
                    In this step, I realized those ideas in high fidelity before laying then out.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="high-fidelity-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9500">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_11.webp') }}" alt="design-high-fidelity-11">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_12.webp') }}" alt="design-high-fidelity-12">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_12_1.webp') }}" alt="design-high-fidelity-12-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_13.webp') }}" alt="design-high-fidelity-13">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_13_1.webp') }}" alt="design-high-fidelity-13-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/high_fidelity_14.webp') }}" alt="design-high-fidelity-14">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#high-fidelity-carousel" data-bs-slide="prev" name="prev-high-fidelity" id="prev-high-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#high-fidelity-carousel" data-bs-slide="next" name="next-high-fidelity" id="next-high-fidelity">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Make views
                <p class="text-start ms-3" style="color: #535353;">
                    The views are rendered dynamically, are extensions of a base to avoid
                    writing code repeatedly.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="evidence-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_20.webp') }}" alt="evidence-11">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_21.webp') }}" alt="evidence-12">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#evidence-carousel" data-bs-slide="prev" name="prev-evidence" id="prev-evidence">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#evidence-carousel" data-bs-slide="next" name="next-evidence" id="next-evidence">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Results
                <p class="text-start ms-3" style="color: #535353;">
                    The image is illustrative, the results is this site that you are viewing.
                </p>
                <div class="col-md-10 ms-3">
                    <img class="img-fluid border" src="{{ asset('build/assets/image/other/result_devices_1.webp') }}" alt="result-devices">
                </div>
                <br>
            </li>
        </ol>
        <h5 style="color: #006064;">Note</h5>
        <p class="text-start" style="color: #535353;">
            This is a personal project, I hope you like it and it is of interest to you, if you wish you can contact me
            through <a style="color: #006064;" href="{{ route('contact.index') }}">my contact page</a>. You can view the
            code of this project on my <a style="color: #006064;" href="https://github.com/xxxSAV" target="_blank">GitHub</a>, 
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/image/other/evidence_22.webp') }}" alt="evidence-22">
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
                <a class="btn" href="{{ route('projects.citasapi') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006064" viewBox="0 0 16 16">
                        <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                    </svg>
                    <span>Prev</span>
                </a>
            </div>
            <div class="col text-center">
                <a href="#" id="up" class="btn">
                    <span>Slide up</span>
                </a>
            </div>
            <div class="col text-end">
                <a class="btn" href="{{ route('projects.blog') }}">
                    <span>Next</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006064" viewBox="0 0 16 16">
                        <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                    </svg>
                </a>
            </div>
        </div>
    </main>
</div>
@endsection