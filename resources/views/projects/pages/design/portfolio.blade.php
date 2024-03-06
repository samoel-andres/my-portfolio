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
        <h3>My portfolio</h3>
        <span>UX/UI Design</span>
        <br><br><br>
        <h5>How my idea started</h5>
        <p class="text-start" style="color: #535353;">
            To show about my knowledge, I've thought about creating a website; Where I list the projects
            that I've done, something like a CV, simple and with relevant information.
        </p>
        <h5>Some considerations</h5>
        <ul class="list-group">
            <li class="list-group-item bg-white">
                <strong>Logo</strong>
                <br>
                <span>
                    It's a symbol of identification with wich customer or person recognize a brand.
                </span>
            </li>
            <li class="list-group-item bg-white">
                <strong>Order</strong>
                <br>
                <span>
                    On a website it is important to present information in an orderly fashion so
                    that users can understand the content.
                </span>
            </li>
            <li class="list-group-item bg-white">
                <strong>Easy to use</strong>
                <br>
                <span>
                    The website must be easy to use and offer adequate navigation.
                </span>
            </li>
        </ul>
        <br>
        <h5>Design of my logo</h5>
        <p class="text-start" style="color: #535353;">
            I've created a sketch with the initials of my name.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/portfolio/logo_sketch.webp') }}" alt="logo-sketch">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            This is the logo I made and the colors I select are green and turquoise.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/image/logo.webp') }}" alt="logo">
        </div>
        <br><br>
        <h5>Design of the site</h5>
        <p class="text-start" style="color: #535353;">
            As first step, I allways start by making a sketch or hand drawing. This is as rough draft to 
            represent the main features of the design.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/portfolio/sketches.webp') }}" alt="sketches">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Now, I make the wireframes of the design. A wireframe is clearer and allows to visualize the content
            that will be present on each screen, and reflects the functionalities that will be present.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/portfolio/wireframes.webp') }}" alt="wireframes">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            To continue, I now do the high fidelity designs, these are more accurate and closer to the reality of
            the final product will look like (some specified features are not possible to detail, e.g. animations).
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/portfolio/high_fidelity.webp') }}" alt="high_fidelity">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            The user flow diagram traces the logical path that the user must follow* when interacting with the site or
            system.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/portfolio/user_flow_diagram_1.webp') }}" alt="user-flow-diagram">
        </div>
        <p class="text-start mt-2" style="color: #535353;">
            The flow of interaction is important for the user to be able to move freely between the different pages
            from wherever they are, in this case they can do so thanks to the navigation bar that is visible at all
            times.
        </p>
        <br>
        <p class="text-start" style="color: #535353;">
            To conclude the summary of this project, a final prototype is shown belown.
        </p>
        <div class="col-md-10">
            <video class="img-fluid border" src="{{ asset('build/assets/media/portfolio/prototype.mp4') }}" alt="portfolio-video" controls preload="auto">
                <p>Not suported...</p>
            </video>
        </div>
        <p class="text-start mt-2" style="color: #535353;">
            A prototype is used to show at users would be like the experience with the product, is sought the maximum
            user satisfaction.
        </p>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
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