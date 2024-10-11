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
        <span class="span-silver">UX | UI</span>
        <span class="span-silver">Web site</span>
        <span class="span-silver">Adobe XD</span>
        <br><br><br>
        <h5>El reto</h5>
        <p class="text-start" style="color: #535353;">
            Para demostrar mis conocimientos, he pensado en crear un sitio web donde pueda listar los proyectos
            que he realizado, sencillo y con información resumida pero a la vez relevante.
        </p>
        <h5>Algunas consideraciones</h5>
        <ul class="text-start" style="color: #535353;">
            <li>
                <b>Logo</b>
                <br>
                Es un símbolo de identificación, con el que un cliente o persona reconoce una marca.
            </li>
            <li>
                <b>Orden</b>
                <br>
                En un sitio web, es importante presentar la información de forma ordenada para que los usuarios
                puedan comprender y encontrar contenido de forma fácil.
            </li>
            <li>
                <b>Fácil de usar</b>
                <br>
                El sitio web debe ser fácil de usar, ofrecer una navegación limpia y adecuada.
            </li>
        </ul>
        <br>
        <h5>Diseño de mi logo</h5>
        <p class="text-start" style="color: #535353;">
            Inicie ideando y creando un boceto con las iniciales de mi nombre.
        </p>
        <div class="col-md-10">
            <img class="img-fluid" src="{{ asset('build/assets/media/portfolio/logo_sketch.webp') }}" alt="logo-sketch">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Como segundo paso, realice el logo de manera digital y realice breves cambios, también 
            elegí los colores (verde y turquesa).
        </p>
        <div class="col-md-10">
            <img class="img-fluid" src="{{ asset('build/assets/image/logo.webp') }}" alt="logo">
        </div>
        <br><br>
        <h5>Diseño del sitio</h5>
        <p class="text-start" style="color: #535353;">
            Ahora inicio con el deseño del sitio. Como buena práctica, siempre empiezo haciendo bocetos a mano.
            Estos son borradores para representar las ideas del diseño.
        </p>
        <div class="col-md-10">
            <img class="img-fluid" src="{{ asset('build/assets/media/portfolio/sketches.webp') }}" alt="sketches">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Ahora realizo los wireframes del diseño con ayuda de los bocetos previos. Un wireframe es mas claro y 
            permite visualizar el contenido que estará presente en cada pantalla de manera abstracta.
        </p>
        <div class="col-md-10">
            <img class="img-fluid" src="{{ asset('build/assets/media/portfolio/wireframes.webp') }}" alt="wireframes">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Continuando con el diseño, es tiempo de hacer los diseños de alta fidelidad, estos son más precisos y cercanos
            a como se verá el producto final (algunas características especificas no son posibles de detallar, por ejemplo,
            animaciones).
        </p>
        <div class="col-md-10">
            <img class="img-fluid" src="{{ asset('build/assets/media/portfolio/high_fidelity.webp') }}" alt="high_fidelity">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            El diagrama de flujo de usuario traza la ruta que el usuario debe seguir* al interactuar con el sitio/plataforma 
            o sistema.
        </p>
        <div class="col-md-10">
            <img class="img-fluid" src="{{ asset('build/assets/media/portfolio/user_flow_diagram_1.webp') }}" alt="user-flow-diagram">
        </div>
        <p class="text-start mt-2" style="color: #535353;">
            El flujo de interacción es importante para que el usuario pueda moverse libremente entre las diferentes páginas/secciones,
            sin importar el punto donde se encuentre dentro del sitio.
        </p>
        <br>
        <p class="text-start" style="color: #535353;">
            Para concluir el resumen del diseño de este proyecto, genere el siguiente prototipo.
        </p>
        <div class="col-md-10">
            <video class="img-fluid" src="{{ asset('build/assets/media/portfolio/prototype.mp4') }}" alt="portfolio-video" controls preload="auto">
                <p>Not supported...</p>
            </video>
        </div>
        <p class="text-start mt-2" style="color: #535353;">
            Los prototipos se utilizan para mostrar a los usuarios como sería la experiencia con el producto, se busca la máxima 
            satisfacción y aprobación de los usuarios.
        </p>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
            </div>
            <div class="col text-center">
                <a href="#" id="up" class="btn">
                    <span>Subir</span>
                </a>
            </div>
            <div class="col text-end">
                <a class="btn" href="{{ route('projects.designonstore') }}">
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