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
        <h3>Sistema de citas</h3>
        <span class="span-silver">Backend</span>
        <span class="span-silver">Lógica de negocio</span>
        <span class="span-silver">API</span>
        <span class="span-silver">Node.js</span>
        <br><br><br>
        <h5>El reto</h5>
        <p class="text-start" style="color: #535353;">
            Desarrollar una API Rest que reciba y responda solicitudes HTTP enviadas desde una
            plataforma web.
        </p>
        <h5>Solución</h5>
        <p class="text-start" style="color: #535353;">
            Esta API la he creado usando Node.js, las rutas estan protegidas, realiza validaciones adicionales
            a las que realiza el front end, tiene la capacidad de generar tokens firmados por la misma API,
            filtra los datos y revisa los permisos de cada usuario.
        </p>
        <h5>Proceso</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Andamio de archivos
                <p class="text-start ms-3" style="color: #535353;">
                    Como primer paso, defino la estructura de carpetas donde guardaré cada archivo del programa
                    siguiendo el patrón de arquitectura modelo-vista-controlador (MVC), esto mantiene ordenado el
                    contenido de la API, la hace escalable, fácil de comprender y mantener.
                </p>
                <div class="col-md-10 ms-3">
                    <img class="img-fluid" src="{{ asset('build/assets/image/other/scaffold_api.webp') }}" alt="components-angular">
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Archivo de incio
                <p class="text-start ms-3" style="color: #535353;">
                    Este es el archivo principal de la aplicación, es el que inicia el funcionamiento de la
                    API, también tiene la función de cargar las configuraciones iniciales para un buen
                    funcionamiento.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
const tools = require('express')
const srv = express()

srv.use(tools.json())

port = 3800

/**
 * Invocar rutas con la nomenclatura
 * http://host/endpoint
 */
 srv.use(require('available_routes'))

 srv.listen(port, () => {
    console.log(`App is running`)
})
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Protección de rutas
                <p class="text-start ms-3" style="color: #535353;">
                    Las rutas están protegidas mediante un middleware inyectado en cada ruta, lo cual verifica los permisos
                    de usuario, sesión y comprueba los tokens, finalmente se validan los datos recibidos antes de procesarlos.
                </p>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Por ejemplo http://host/endpoint.
 * La ruta está protegida por el middleware que revisa los datos de sesión, entre otros.
 */
available_routes
    .< method >(< action > | < middleware > | < check_permissions > | < check_data > | < procedure >)
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Control de roles
                <p class="text-start ms-3" style="color: #535353;">
                    Esta función ayuda a verificar los roles de cada usuario, otorga o deniega el acceso
                    a las rutas disponibles.
                </p>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Esta funcion revisa el rol de usuario.
 * 
 * @param {*} data
 * @returns
 */
const function_name = (data) => (a, b, c) => {
    try {
        const { d } = a
        const user = data.property
        
        const val = data.have((auth) => user.have(auth))

        if (!val) {
            launch(b, 'message')
        }
        next()
    } catch (e) {
        launch(b, 'message')
    }
}
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Resultados
                <p class="text-start ms-3" style="color: #535353;">
                    Las respuestas devueltas por la API son similares a los siguientes ejemplos.
                </p>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Si algun valor no existe o es incorrecto en el objecto recibido
 * retorna un error.
 */
{
    "errors": 
    [
        {
            "msg": "Invalid value",
            "param": "property.folder",
            "location": "body"
        },
        {
            "msg": "Invalid value",
            "param": "property.folder.folder",
            "location": "body"
        }
    ]
}
                        </code>
                    </pre>
                </div>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Si algun usuario intenta acceder a rutas sin iniciar sesión o rutas a las
 * que no tiene autorizacion, recibirá un mensaje como el siguiente.
 */
OOPS, UNEXPECTED WRONG
                        </code>
                    </pre>
                </div>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Si todos los datos son validados correctamente, se retorna un objeto con los
 * datos solicitados.
 */
{
    "object": [
        {
            "folder": {
                "content": {
                    < INFORMATION >
                }
            }
        }
    ],
    "object": {
        "folder": {
            "folder": {
                "authorized-level-details": {
                    < PRIVATE >
                },
            "more-details" : < PRIVATE >
            }
        }
    }
}
                        </code>
                    </pre>
                </div>
            </li>
        </ol>
        <h5 style="color: #006064;">Nota</h5>
        <p class="text-start" style="color: #535353;">
            Esta API Rest procesa, recibe, envia datos desde y hacia <a style="color: #006064;" href="{{ route('projects.citasweb') }}">web</a>.
            Todas las rutas están protegidas por multiples validaciones y una clave secreta de la API, la información
            se limpia antes de ser procesada. Los ejemplos mostrados contienen modificaciones y lineas que se eliminaron
            por motivos de privacidad, integridad y seguridad de la API.
        </p>
        <h5 style="color: #006064;">Importante</h5>
        <p class="text-start" style="color: #535353;">
            Esta API solo funciona dentro de la red interna de la entidad para la cual fue desarrollada, de igual
            forma el código es privado, adjunto evidencia de la existencia del repositorio.
        </p>
        <div class="col-md-10">
            <img class="img-fluid" src="{{ asset('build/assets/image/other/evidence_13.webp') }}" alt="evidence-13">
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
                <a class="btn" href="{{ route('projects.citasweb') }}">
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
                <a class="btn" href="{{ route('projects.portfolio') }}">
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