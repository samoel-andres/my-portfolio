<div class="col-md-3 col-md-4 py-1 bg-white {!! (Request::path()) == 'projects' ? 'fade-in' : '' !!}">
    <div class="list-group">
    <a role="button">
            <h5 class="accordion bg-white py-2" id="accordion-2" data-bs-toggle="collapse" href="#design-section" aria-expanded="true" aria-controls="design-section">Diseño UX/UI</h5>
        </a>
        <div class="collapse show" id="design-section">
            <div class="list-group">
                <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/ux-ui-design/portfolio' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.designportfolio') }}">
                    Mi portafolio
                </a>
                <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/ux-ui-design/onstore-app' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.designonstore') }}">
                    On-Store (App)
                </a>
            </div>
        </div>
    </div>
    <div class="list-group">
        <a role="button">
            <h5 class="accordion bg-white py-2" id="accordion-3" data-bs-toggle="collapse" href="#development-section" aria-expanded="true" aria-controls="development-section">Desarrollo</h5>
        </a>
        <div class="collapse show" id="development-section">
            <div class="list-group">
                <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/citas' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasweb') }}">
                    Sistema de citas (Web)
                </a>
                <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/citas-api' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.citasapi') }}">
                    Sistema de citas (API)
                </a>
                <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/portfolio' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.portfolio') }}">
                    Mi portafolio (Web)
                </a>
                <a class="list-group-item list-group-item-action {!! (Request::path()) == 'projects/web-development/blog' ? 'bg-active' : 'bg-white' !!}" href="{{ route('projects.blog') }}">
                    Blog (Web)
                </a>
            </div>
        </div>
    </div>
    <a class="btn btn-animate floating-3 mt-3 mb-3" href="{{ route('contact.index') }}">
        <span>Contáctame</span>
        <svg width="13px" height="10px" viewBox="0 0 13 10">
            <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
        </svg>
    </a>
</div>

<div class="col-md-3 col-md-8 py-1 bg-white fade-in" style="display: {!! (Request::path()) == 'projects' ? '' : 'none' !!};">
    <h3>Aviso</h3>
    <p class="text-start" style="color: #535353;">
        Considere que la información sobre los proyectos es resumida e informativa, sin embargo,
        en el caso de los proyectos de desarrollo puede ver algunos codigos en mi <a style="color: #006064;" href="https://github.com/samoel-andres" target="_blank">GitHub</a>.
    </p>
</div>