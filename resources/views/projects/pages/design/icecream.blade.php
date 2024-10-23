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
            <h3>ICE Cream</h3>
            <span class="span-silver">UX | UI</span>
            <span class="span-silver">Web site</span>
            <span class="span-silver">Adobe XD</span>
            <br><br><br>
            <h5>El reto</h5>
            <p class="text-start" style="color: #535353;">
                Desarrollar una propuesta de rediseño que incluye UX & UI para el sitio web de una heladeria.
                La meta es crear interfaces intuitivas y una experiencia de usuario agradable, esta plataforma
                está pensada principalmente para que los usuarios puedan realizar pedidos en alrededores
                cercanos de donde se encuentra el lugar.
            </p>
            <h5>Identidad visual</h5>
            <p class="text-start" style="color: #535353;">
                El cliente ya cuenta con un logotipo establecido que utiliza en su publicidad y es como sus clientes
                lo identifican actualmente por lo cual desea que no se modifique.
            </p>
            <div class="col-md-10">
                <img class="img-fluid" src="{{ asset('build/assets/media/icecream/logo.webp') }}" alt="ice-cream-logo" style="max-height: 277px; width: 100%; object-fit: contain;">
            </div>
            <br>
            <h6>Paleta de colores</h6>
            <p class="text-start" style="color: #535353;">
                Tomando como referencia principal los colores cyan, rosa pastel, beige y cafe oscuro presentes en el logotipo,
                he determinado los colores que están presentes en las interfaces.
            </p>
            <div class="col-md-10">
                <img class="img-fluid" src="{{ asset('build/assets/media/icecream/color_palette.webp') }}" alt="color-palette">
            </div>
            <br>
            <h6>Tipografía</h6>
            <p class="text-start" style="color: #535353;">
                La plataforma existente posee 2 tipos de letra predeterminados, respetando esto la tipografia es la siguiente.
            </p>
            <div class="col-md-10">
                <img class="img-fluid" src="{{ asset('build/assets/media/icecream/typography.webp') }}" alt="typography">
            </div>
            <br>
            <h5>Sitio web</h5>
            <p class="text-start" style="color: #535353;">
                Tomando en cuenta que es un sitio web cuyo objetivo principal es permitir a los usuarios realizar pedidos desde
                su hogar se plantearon los siguientes contenidos.
            </p>
            <ul class="text-start" style="color: #535353;">
                <li>
                    <b>Inicio</b>
                    <br>
                    En el inicio se presentan promociones, los productos más vendidos, información de contacto, la ubicación
                    de las instalaciones del comercio y una breve seccion en la que se muestran algunas fotografias del comercio.
                </li>
                <li>
                    <b>Contacto</b>
                    <br>
                    Es una breve sección en la que se muestran los medios de contacto junto con la ubicacion del comercio.
                </li>
                <li>
                    <b>Productos</b>
                    <br>
                    La seccion principal del sitio, es donde se listan todos los productos disponibles para ordenar, se ofrece un menú
                    lateral con los tipos de productos que el comercio ofrece, en cada seccion se listan tarjetas con una fotografía
                    del producto y breves detalles importantes como nombre, cantidad de contenido, precio y la opción para elegir.
                    También se ofrece un buscador de productos y un filtro para ordenar los productos listados.
                </li>
                <li>
                    <b>Carrito de compras</b>
                    <br>
                    La sección donde cada usuario puede tener una vista rápida de los productos que vaya agregando a su carrito antes
                    de realizar su pedido, se ofrece la suma del total de su orden, breves detalles de cada producto y la opcion para
                    finalizar su pedido.
                </li>
                <li>
                    <b>Resumen de compra</b>
                    <br>
                    Se ofrece un formulario en el que el cliente debera proporcionar los datos de dirección, la lista de productos que esta
                    ordenando y una seccion donde se muestran los datos de su orden con el total que deberá pagar.
                </li>
            </ul>
            <br>
            <h5>Arquitectura del sitio web</h5>
            <div class="col-md-10">
                <img class="img-fluid" src="{{ asset('build/assets/media/icecream/architecture.webp') }}" alt="architecture">
            </div>
            <br>
            <h5>Prototipo</h5>
            <div class="row">
                <div class="col-md-5 m-1 p-3" style="border-radius: 15px; background-color: rgb(140, 159, 170, 0.05);">
                    <img class="img-fluid" src="{{ asset('build/assets/media/icecream/view_1.webp') }}" alt="view-1">
                </div>
                <div class="col-md-5 m-1 p-3" style="border-radius: 15px; background-color: rgb(140, 159, 170, 0.05);">
                    <img class="img-fluid" src="{{ asset('build/assets/media/icecream/view_2.webp') }}" alt="view-2">
                </div>
                <div class="col-md-5 m-1 p-3" style="border-radius: 15px; background-color: rgb(140, 159, 170, 0.05);">
                    <img class="img-fluid" src="{{ asset('build/assets/media/icecream/view_3.webp') }}" alt="view-3">
                </div>
                <div class="col-md-5 m-1 p-3" style="border-radius: 15px; background-color: rgb(140, 159, 170, 0.05);">
                    <img class="img-fluid" src="{{ asset('build/assets/media/icecream/view_4.webp') }}" alt="view-4">
                </div>
            </div>
            <br>
            <h5>Conoce el sitio web</h5>
            <div class="col-md-10 mt-4">
                <video class="img-fluid" style="width: 100%;" src="{{ asset('build/assets/media/icecream/prototype.mp4') }}" alt="ice-cream-video" controls preload="auto">
                    <p>not supported...</p>
                </video>
            </div>
            <br>
            <h5>Conclusiones</h5>
            <p class="text-start" style="color: #535353;">
                Este es el primer paso tecnológico que ICE Cream decide dar para poder alcanzar más clientes potenciales, además,
                de buscar acercarse mas a sus clientes. Está cmprometida con brindar un servicio de calidad, amable y variado que
                satisfaga a sus consumidores, tiene planes para su sitio web y mejoras en consideración a futuro.
            </p>
            <br>
            <div class="row justify-content-around">
                <div class="col text-start">
                    <a class="btn" href="{{ route('projects.designonstore') }}">
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
                </div>
            </div>
    </main>
</div>
@endsection