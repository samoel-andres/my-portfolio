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
        <h3>On-Store</h3>
        <span class="span-silver">UX | UI</span>
        <span class="span-silver">App</span>
        <br><br><br>
        <h5>El reto</h5>
        <p class="text-start" style="color: #535353;">
            Diseñar una aplicación de compras. La atención debe centrarse en el proceso de compra de productos,
            la compra debe ser lo mas fácil y sencilla posible.
        </p>
        <h5>Proceso de diseño</h5>
        <p class="text-start" style="color: #535353;">
            Creación de los bocetos de interfaz. Mi objetivo es representar mis ideas de como se verá cada una
            de las pantallas de la app.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/onstore_sketches.webp') }}" alt="sketches">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Mi siguiente paso es realizar los wireframes que muestren de forma abstracta el contenido que
            habrá en cada interfaz, basado en los bocetos realizados.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/wireframes.webp') }}" alt="wireframes">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Ahora defino la paleta de colores. Estos son los colores que usaré para el diseño y coloreado de
            la aplicación. La selección del color la realice en función de algunos aspectos importantes como
            el contexto y el tema de estudio.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/color_palette.webp') }}" alt="color-palette">
        </div>
        <p class="text-start mt-2" style="color: #535353;">
            Estos son otros colores que decidí usar para textos, fondo o precios.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/other_colors.webp') }}" alt="other_colors">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Estos son los iconos que seleccioné para darle una apariencia más agradable.
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
            Es hora de crear los diseños de alta fidelidad. Estos son mas cercanos a
            como se verá en realidad el producto final.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/media/onstore/high_fidelity.webp') }}" alt="high-fidelity-design">
        </div>
        <br>
        <p class="text-start" style="color: #535353;">
            Ahora, el reto nos pide hacer el proceso de compra lo mas fácil, sencilla
            y rápida posible, a continuación, muestro el diagrama de flujo de usuario 
            para compras y agregado de productos al carrito.
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
            Finalmente, genero el prototipo de la aplicación.
        </p>
        <div class="col-md-10">
            <video class="img-fluid border" style="width: 100%; height: 500px;" src="{{ asset('build/assets/media/onstore/prototype.mp4') }}" alt="onstore-video" controls preload="auto">
                <p>not supported...</p>
            </video>
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
                <a class="btn" href="{{ route('projects.designportfolio') }}">
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
                <a class="btn" href="{{ route('projects.designicecream') }}">
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