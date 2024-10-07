@extends('layouts.base-details')

@section('project')
<div class="row text-end fade-in">
    <div class="col">
        <a class="btn" href="{{ route('projects.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
            <span>Cerrar detalles</span>
        </a>
    </div>
</div>
<div class="row py-2 fade-in">
    <main>
        <h3>Mi portafolio</h3>
        <span class="span-silver">Frontend</span>
        <span class="span-silver">Laravel</span>
        <span class="span-silver">Web site</span>
        <br><br><br>
        <h5>El reto</h5>
        <p class="text-start" style="color: #535353;">
            Desarrollar las interfaces diseñadas para mi propio portafolio web, en el debo mostrar
            información breve, historial laboral, proyectos realizados y educación.
        </p>
        <h5>Proceso</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Realizar las vistas
                <p class="text-start ms-3" style="color: #535353;">
                    Laravel es un framework de PHP que funciona por medio de un sistema de paquetes usando
                    la arquitectura modelo-vista-controlador.
                </p>
                <p class="text-start ms-3" style="color: #535353;">
                    Todas las vistas de mi proyecto se renderizan dinámicamente gracias a que el framework
                    funciona con el motor de plantillas Blade, esto permite optimizar la lógica de cada vista
                    evitando tener que escribir repetidamente la misma sintaxis de marcado (HTML).
                </p>
                <div class="col-md-10 ms-3">
                    <img class="img-fluid border" src="{{ asset('build/assets/image/other/interfaces_portfolio.webp') }}" alt="components-angular">
                </div>
                <br>
                <p class="text-start ms-3" style="color: #535353;">
                    A continuación, puedes visualizar una breve galeria de evidencias del desarrollo, solo
                    se visualiza contenido de algunos archivos ya que son bastantes y extensos.
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
                Resultados
                <p class="text-start ms-3" style="color: #535353;">
                    La imagen es ilustrativa, los resultados de este proyecto los estas experimentando en tiempo
                    real, es una web responsiva que se adapta a el tamaño de pantalla de los dispositivos desde
                    los que se visualiza.
                </p>
                <div class="col-md-10 ms-3">
                    <img class="img-fluid border" src="{{ asset('build/assets/image/other/devices_web_portfolio.webp') }}" alt="result-devices">
                </div>
                <br>
            </li>
        </ol>
        <h5 style="color: #006064;">Nota</h5>
        <p class="text-start" style="color: #535353;">
            Este es un proyecto personal, espero que sea de tu agrado e interés, si lo deseas puedes contactar conmigo a través de
            <a style="color: #006064;" href="{{ route('contact.index') }}">mi página de contacto</a>. Puedes ver el codigo de este
            proyecto en mi <a style="color: #006064;" href="https://github.com/samoel-andres" target="_blank">GitHub</a>, 
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
                    <span>Ant</span>
                </a>
            </div>
            <div class="col text-center">
                <a href="#" id="up" class="btn">
                    <span>Subir</span>
                </a>
            </div>
            <div class="col text-end">
                <a class="btn" href="{{ route('projects.blog') }}">
                    <span>Sig</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006064" viewBox="0 0 16 16">
                        <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                    </svg>
                </a>
            </div>
        </div>
    </main>
</div>
@endsection