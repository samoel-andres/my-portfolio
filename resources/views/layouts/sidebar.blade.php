<div class="col-md-3 col-md-4 py-1 bg-white">
    <a role="button">
        <h4 class="accordion bg-white py-2" id="accordion" data-bs-toggle="collapse" href="#projects-list" aria-expanded="true" aria-controls="projects-list">My projects list</h4>
    </a>
    <div class="collapse show" id="projects-list">
        <div class="list-group">
            <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/citas-web' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasweb') }}">
                Dating system (frontend)
            </a>
            <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/citas-api' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasapi') }}">
                Dating system (backend)
            </a>
            <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/blog' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.blog') }}">
                Blog (web)
            </a>
        </div>
    </div>
    <a class="btn btn-animate floating-3 mt-3 mb-3" href="{{ route('contact.index') }}">
        <span>Contact me</span>
        <svg width="13px" height="10px" viewBox="0 0 13 10">
            <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
        </svg>
    </a>
</div>

<div class="col-md-3 col-md-8 py-1 bg-white" style="display: {!! (Request::path()) == 'projects' ? '' : 'none' !!};">
    <h3>Notice</h3>
    <p class="text-start" style="color: #7d7d7d;">
        Consider that the information about the projects is summarized and informative, however,
        you can see some codes in my <a style="color: #006064;" href="https://github.com/xxxSAV" target="_blank">GitHub</a>, 
        some are private by instructions of the company for wich they were developed.
    </p>
</div>