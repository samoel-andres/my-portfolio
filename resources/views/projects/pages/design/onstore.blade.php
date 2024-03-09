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
        <h3>On-Store (App)</h3>
        <span>UX/UI Design</span>
        <br><br><br>
        <h5>Theme</h5>
        <p class="text-start" style="color: #535353;">
            Design a shopping app. The focus should be on the process of buying products. The purchase
            should be as easy and fast as possible.
        </p>
        <h5>Design process</h5>
        <p class="text-start" style="color: #535353;">
            Interface sketches. My goal in this step is to represent the main features to be seen on each
            screen.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/onstore_sketches.webp') }}" alt="sketches">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            My next step is to make the wireframes that show abstractly the content that will be in each interface.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/wireframes.webp') }}" alt="wireframes">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Now, I define the color palette. These are the color I'll use for the design and coloring of
            the app. The selection of color is made according to some important aspects, such as the context
            and the subject of the study.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/color_palette.webp') }}" alt="color-palette">
        </div>
        <p class="text-start mt-2" style="color: #535353;">
            And these are other colors to use in text, background or prices.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/other_colors.webp') }}" alt="other_colors">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            These are icons that I selected to give a more pleasing appearance.
        </p>
        <div class="col-md-10 text-center border">
            <div class="row justify-content-around">
                <div class="col"><img class="img-fluid" src="{{ asset('build/assets/media/onstore/icons/logo.webp') }}" alt="logo"></div>
                <div class="col"><img class="img-fluid" src="{{ asset('build/assets/media/onstore/icons/icon_user.webp') }}" alt="icon-u"></div>
                <div class="col"><img class="img-fluid" src="{{ asset('build/assets/media/onstore/icons/icon_search.webp') }}" alt="icon-sea"></div>
                <div class="col"><img class="img-fluid" src="{{ asset('build/assets/media/onstore/icons/icon_pay_cart.webp') }}" alt="icon-pay-c"></div>
                <div class="col"><img class="img-fluid" src="{{ asset('build/assets/media/onstore/icons/icon_pay.webp') }}" alt="icon-"></div>
                <div class="col"><img class="img-fluid" src="{{ asset('build/assets/media/onstore/icons/icon_cart_empty.webp') }}" alt="icon-cart-em"></div>
                <div class="col"><img class="img-fluid" src="{{ asset('build/assets/media/onstore/icons/icon_added_to_cart.webp') }}" alt="icon-addet-to-c"></div>
            </div>
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            It's time to create the high fidelity designs. These are closer to
            reality of the final product will look like.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/high_fidelity.webp') }}" alt="high-fidelity-design">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            User flow diagrams.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/user_flow_to_purchase.webp') }}" alt="user-flow-diagram">
        </div>
        <br>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/user_flow_add_to_cart.webp') }}" alt="process-to-add-at-cart">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Finally, the prototype of the app is shown below.
        </p>
        <div class="col-md-10">
            <video class="img-fluid border" style="width: 100%; height: 500px;" src="{{ asset('build/assets/media/onstore/prototype.mp4') }}" alt="onstore-video" controls preload="auto">
                <p>not supported...</p>
            </video>
        </div>
        <div class="col-md-10 mt-2" style="color: #535353;">
            This is my solution to the problem mentioned at the beginning of this small project.
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
                <a class="btn" href="{{ route('projects.designportfolio') }}">
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
            </div>
        </div>
    </main>
</div>
@endsection