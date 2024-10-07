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
        <h3>Sistema de citas</h3>
        <span class="span-silver">Frontend</span>
        <span class="span-silver">Angular</span>
        <span class="span-silver">Web site</span>
        <br><br><br>
        <h5>El reto</h5>
        <p class="text-start" style="color: #535353;">
            Realizar las interfaces diseñadas del sistema, cuyo propósito es permitir
            la interacción y manipulación de información para los usuarios de la plataforma
            por parte de la entidad.
        </p>
        <h5>Proceso</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Realizar las vistas
                <p class="text-start ms-3" style="color: #535353;">
                    Angular funciona empleando componentes, cada vista se considera un componente 
                    y a su vez, cada componente esta formado por 3 archivos clave (HTML, CSS y TypeScript).
                </p>
                <div class="col-md-10 ms-3">
                    <img class="img-fluid border" src="{{ asset('build/assets/image/other/components_angular.webp') }}" alt="components-angular">
                </div>
                <br>
                <p class="text-start ms-3" style="color: #535353;">
                    Realice las interfaces con la version 14.2.0 de Angular. A continuación, se muestra una
                    pequeña galeria de evidencias del desarrollo, solo se visualiza el contenido de algunos
                    archivos ya que son varios componentes y archivos extensos.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="evidences-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9500">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_1.webp') }}" alt="evidence-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_2.webp') }}" alt="evidence-2">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_3.webp') }}" alt="evidence-3">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_4.webp') }}" alt="evidence-4">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_5.webp') }}" alt="evidence-5">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_6.webp') }}" alt="evidence-6">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_7.webp') }}" alt="evidence-7">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#evidences-carousel" data-bs-slide="prev" name="prev-evidences" id="prev-evidences">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#evidences-carousel" data-bs-slide="next" name="next-evidences" id="next-evidences">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Comunicación con el back end (API).
                <p class="text-start ms-3" style="color: #535353;">
                    A continuación, muestro solo algunos fragmentos de archivos TypeScript. Desde estos archivos
                    se controlan las acciones que el usuario realiza en las interfaces, se manipula y presenta la
                    información que el back end proporciona al igual que la que el usuario envía.
                    <br><br>
                    <b>Nota:</b> no se muestran datos especificos ni código sensible que pueda comprometer la
                    integridad del sistema y sus datos.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Esta función envía una solicitud a la API, después verifica la
 * respuesta que recibe.
 *
 * @param object-data 
 * @returns 
 */
function_name(object-data: any) {
    return this.httpClient.post(< destination >, < object-data >)
        .pipe(map((response: any) => {
            if (response.< value > === < value >) {
                load-element.setItem('a', response.< value >)
                load-element.setItem('b', response.< value >)
                load-element.setItem('c', response.< value >)
                load-element.setItem('d', response.< value >)
                load-element.setItem('e', response.< value >)
            }
        }))
    }
                        </code>
                    </pre>
                </div>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Esta función envía una solicitud a la API y retorna un objeto
 * JSON como respuesta al componente
 * 
 * @param object-data
 * @returns
 */
function_name(object-data: any) {
    return this.httpClient.post(< destination >, < object-data >)
        .pipe(map((response: any) => {
            return response
        }))
    }
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Resultados
                <p class="text-start ms-3" style="color: #535353">
                    Finalmente, muestro una galeria con las interfaces realizadas y funcionando. La plataforma es
                    responsiva, lo que permite que sea accesible desde cualquier dispositivo (PC, Laptop o Móvil)..
                </p>
                <div class="col-md-10 ms-3">
                    <div id="results-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_1.webp') }}" alt="result-1">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_2.webp') }}" alt="result-2">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_3.webp') }}" alt="result-3">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_4.webp') }}" alt="result-4">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_6.webp') }}" alt="result-6">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_7.webp') }}" alt="result-7">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_8.webp') }}" alt="result-8">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_9.webp') }}" alt="result-9">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#results-carousel" data-bs-slide="prev" name="prev-results" id="prev-results">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#results-carousel" data-bs-slide="next" name="next-results" id="next-results">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
                <div class="col-md-10 ms-3 border">
                    <img class="img-fluid" src="{{ asset('build/assets/image/other/result_devices.webp') }}" alt="result-devices">
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Funcionalidad especial
                <p class="text-start ms-3" style="color: #535353">
                    Para garantizar la atención de los clientes, el sistema posee la cualidad de enviar un email cada
                    día con los datos de los clientes que tienen cita (si no hay citas, no se envía). Este correo debe
                    ser configurado por el administrador del sistema y puede especificar varios destinatarios.
                </p>
                <div class="col-md-10 ms-3">
                    <img class="img-fluid border" src="{{ asset('build/assets/image/other/result_10.webp') }}" alt="result-10">
                </div>
                <br>
            </li>
        </ol>
        <h5 style="color: #006064;">Nota</h5>
        <p class="text-start" style="color: #535353;">
            Esta web procesa, envía y recibe datos desde y hacia la <a style="color: #006064;" href="{{ route('projects.citasapi') }}">API</a>. 
            Todas y cada una de las interfaces de la plataforma están protegidas por una validacion de sesión activa,
            toda la información se limpia, valida y formatea antes de ser enviada a la API. Los fragmentos de código
            contienen modificaciones y lineas que se eliminaron por motivos de privacidad, integridad y seguridad de
            la aplicación.
        </p>
        <h5 style="color: #006064;">Importante</h5>
        <p class="text-start" style="color: #535353;">
            Esta plataforma solo funciona dentro de la red interna de la entidad para la cual fue desarrollada, por lo
            que no existe un link de acceso público, de igual forma el código es privado, adjunto evidencia de la
            existencia del respositorio.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/image/other/evidence_14.webp') }}" alt="evidence-14">
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start"></div>
            <div class="col text-center">
                <a href="#" id="up" class="btn">
                    <span>Subir</span>
                </a>
            </div>
            <div class="col text-end">
                <a class="btn" href="{{ route('projects.citasapi') }}">
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