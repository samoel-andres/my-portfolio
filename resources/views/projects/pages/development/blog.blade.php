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
        <h3>Blog (web)</h3>
        <span>Front end & back end (Laravel con PHP 8.1, MySQL)</span>
        <br><br><br>
        <h5>El reto</h5>
        <p class="text-start" style="color: #535353;">
            Desarrollar un blog donde los usuarios puedan iniciar sesión, publicar articulos, hacer
            comentarios y tengan un panel de administración.
        </p>
        <h5>Solución</h5>
        <p class="text-start" style="color: #535353;">
            Este proyecto lo he creado usando herramientas proporcionadas por el framework de Laravel
            como Laravel UI para controlar los inicios de sesión, estilos del sitio, una herramienta
            de terceros para el tablero de administración y finalmente MySQL para gestionar los datos
            de usuarios, articulos, etc.
        </p>
        <h5>Proceso</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Configuración de la base de datos
                <p class="text-start ms-3" style="color: #535353;">
                    Como primer paso configuro los valores para conectar la aplicación con MySQL. En
                    Este caso es un proyecto local.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Dentro del archivo de configuracion realizo los
 * siguientes cambios.
 */
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_database
DB_USERNAME=test_user
DB_PASSWORD=test_pass
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Crear los modelos
                <p class="text-start ms-3" style="color: #535353;">
                    Los modelos ayudan a ejecutar cualquier acción sobre las tablas. Cuando
                    es ejecutada cualquier migración Laravel crea la base de datos y las tablas
                    basado en cada migración creada, posteriormente podemos crear cada modelo y agregar
                    métodos de relacion entre las tablas.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Estos son los métodos del modelo de usuarios.
 */

// Relation one - one (user-profile)
public function profile() {
    return $this->hasOne(Profile::class);
}

// Relation one - many (user-article)
public function articles() {
    return $this->hasMany(Article::class);
}

// Relation one - many (user-comment)
public function comments() {
    return $this->hasMany(Comment::class);
}
                        </code>
                    </pre>
                </div>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Estos son los métodos del modelo de articulos.
 */

// Relation one - many (inverse) (article-user)
public function user() {
    return $this->belongsTo(User::class);
}

// Relation one - many (article-comment)
public function comments() {
    return $this->hasMany(Comment::class);
}

// Relation one - many (inverse) (article-category)
public function category() {
    return $this->belongsTo(Category::class);
}
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Creación de rutas y controladores
                <p class="text-start ms-3" style="color: #535353;">
                    Las rutas manejan las vistas, el flujo de información, etc. Se requiere un controlador
                    que renderiza, redirige o pasa información entre vistas y devuelve un resultado, por ejemplo:
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Este es la ruta que retorna los comentarios de un articulo y también elimina
 * un comentario.
 */
Route::resource('comments', CommentController::class)
    ->only('index', 'destroy')
    ->names('comments');

/**
 * Mostrar un listado de los comentarios.
 */
public function index() {
    $comments = DB::table('comments')
            ->join('articles', 'comments.article_id', '=', 'articles.id')
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->select('comments.id', 'comments.value', 'comments.description', 'articles.title', 'users.full_name')
            ->where('articles.user_id', '=', Auth::user()->id)
            ->orderBy('articles.id', 'desc')
            ->get();

    return view('admin.comments.index', compact('comments'));
}

/**
 * Eliminar el comentario especificado.
 */
public function destroy(Comment $comment) {
    $comment->delete();

    return redirect()->action([CommentController::class, 'index'], compact('comment'))
        ->with('success-delete', 'Comentario eliminado con exito');
}
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Validación de datos
                <p class="text-start ms-3" style="color: #535353;">
                    La validación de datos se realiza mediante reglas, internamente estas se
                    ejecutan cuando se necesitan.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #5353535c;">
                    <pre class="ms-2">
                        <code>
/**
 * Esta funcion especifica las reglas de validación para
 * la creación de nuevos items.
 */
public function rules(): array {
    $slug = request()->isMethod('put') ? 'required|unique:articles,slug,' . $this->id : 'required|unique:articles';
    $image = request()->isMethod('put') ? 'nullable|mimes:jpeg,jpg,png,gif,svg|max:8000' : 'required|image';

    return [
        'title' => 'required|min:5|max:255',
        'slug' => $slug,
        'introduction' => 'required|min:10|max:255',
        'body' => 'required',
        'image' => $image,
        'status' => 'required|boolean',
        'category_id' => 'required|integer',
    ];
}
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Realizar las vistas
                <p class="text-start ms-3" style="color: #535353;">
                    En este proyecto las interfaces no tuvieron un proceso de diseño. Las vistas se 
                    renderizan dinámicamente cuando los controladores solicitan la renderización. 
                    A continuación, muestro una breve galeria del desarrollo.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="evidence-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="9500">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_15.webp') }}" alt="evidence-15">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_16.webp') }}" alt="evidence-16">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_17.webp') }}" alt="evidence-17">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/evidence_18.webp') }}" alt="evidence-18">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#evidence-carousel" data-bs-slide="prev" name="prev-evidences" id="prev-evidences">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#evidence-carousel" data-bs-slide="next" name="next-evidences" id="next-evidences">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Resultados
                <p class="text-start ms-3" style="color: #535353;">
                    Finalmente, muestro una galeria con las interfaces realizadas y funcionando.
                </p>
                <div class="col-md-10 ms-3">
                    <div id="results-carousel" class="carousel slide border" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center" data-bs-interval="10000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_11.webp') }}" alt="result-11">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_12.webp') }}" alt="result-12">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_13.webp') }}" alt="result-13">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_14.webp') }}" alt="result-14">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_15.webp') }}" alt="result-15">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_16.webp') }}" alt="result-16">
                            </div>
                            <div class="carousel-item text-center" data-bs-interval="2000">
                                <img class="d-block w-100" src="{{ asset('build/assets/image/other/result_17.webp') }}" alt="result-17">
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
            </li>
        </ol>
        <h5 style="color: #006064;">Nota</h5>
        <p class="text-start" style="color: #535353;">
            Este proyecto es personal, fue desarrollado durante un curso de Laravel. Adjunto una
            evidencia de la existencia del repositorio. Puedes ver el código de este proyecto en
            mi <a style="color: #006064;" href="https://github.com/samoel-andres" target="_blank">GitHub</a>, 
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/image/other/evidence_19.webp') }}" alt="evidence-19">
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
                <a class="btn" href="{{ route('projects.portfolio') }}">
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
            <div class="col text-end"></div>
        </div>
    </main>
</div>
@endsection