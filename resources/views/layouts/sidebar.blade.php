<div class="col-md-3 col-md-4 py-1 bg-white {!! (Request::path()) == 'projects' ? 'fade-in' : '' !!}">
    {{-- <a role="button">
        <h4 class="accordion bg-white py-2" id="accordion" data-bs-toggle="collapse" href="#project-list" aria-expanded="true" aria-controls="project-list">Project list</h4>
    </a> --}}
    {{-- <div class="collapse show" id="project-list"> --}}
        <div class="list-group">
            <a role="button">
                <h5 class="accordion bg-white py-2" id="accordion-2" data-bs-toggle="collapse" href="#design-section" aria-expanded="true" aria-controls="design-section">UX/UI Design</h5>
            </a>
            <div class="collapse show" id="design-section">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/ux-ui-design/portfolio' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.designportfolio') }}">
                        My portfolio
                    </a>
                    <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/ux-ui-design/onstore-app' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.designonstore') }}">
                        On-Store (App)
                    </a>
                </div>
            </div>
        </div>
        <div class="list-group">
            <a role="button">
                <h5 class="accordion bg-white py-2" id="accordion-3" data-bs-toggle="collapse" href="#development-section" aria-expanded="true" aria-controls="development-section">Web development</h5>
            </a>
            <div class="collapse show" id="development-section">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/citas' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasweb') }}">
                        Dating system (Web)
                    </a>
                    <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/citas-api' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasapi') }}">
                        Dating system (API)
                    </a>
                    <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/portfolio' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.portfolio') }}">
                        My portfolio (Web)
                    </a>
                    <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/blog' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.blog') }}">
                        Blog (Web)
                    </a>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    <a class="btn btn-animate floating-3 mt-3 mb-3" href="{{ route('contact.index') }}">
        <span>Contact me</span>
        <svg width="13px" height="10px" viewBox="0 0 13 10">
            <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
        </svg>
    </a>
</div>

<div class="col-md-3 col-md-8 py-1 bg-white fade-in" style="display: {!! (Request::path()) == 'projects' ? '' : 'none' !!};">
    <h3>Notice</h3>
    <p class="text-start" style="color: #535353;">
        Consider that the information about the projects is summarized and informative, however,
        in the case of the development projects you can see some codes in my <a style="color: #006064;" href="https://github.com/xxxSAV" target="_blank">GitHub</a>.
    </p>
</div>