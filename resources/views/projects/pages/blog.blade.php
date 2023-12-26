@extends('layouts.base-details')

@section('project')
<div class="row text-end">
    <div class="col">
        <a class="btn" href="{{ route('projects.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
            <span>Close details</span>
        </a>
    </div>
</div>
<div class="row py-2">
    <main>
        <h3>Blog (web)</h3>
        <span>Frontend & backend (Laravel with PHP 8.1, MySQL)</span>
        <br><br><br>
        <h5>The challenge</h5>
        <p class="text-start" style="color: #7d7d7d;">
            Develop a blog web, the users can be able login, post articles, add comments and they have
            an admin dashboard.
        </p>
        <h5>Solution</h5>
        <p class="text-start" style="color: #7d7d7d;">
            Using some tools provided by Laravel I built the blog. Laravel UI --auth for the login page,
            Laravel UI bootstrap for style of site,I use a third party tool for the dashboar of 
            admin (AdminLTE) and finally, I use MySQL to manage the data of users, articles, etc.
        </p>
        <h5>Process</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Configure MySQL database
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    Beginning by configure the values to connect the App with MySQL. In this case,
                    our project is local, then the configures are local too.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * Inside the .env file, we locate the lines and add
 * the values to connect with MySQL.
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
                Create models
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    The models help to excecute any action on the tables. When any migration is
                    excecuted; Laravel creates the database and tables based on our created migrations
                    and then we can create each model and add relation methods between tables.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * These are some methods of the user model.
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
                <div class="col-auto ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * These are some methods of the articles model.
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
                Create routes and controllers
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    The routes handle views, information flow, etc. They required a
                    controller that renders, redirects or pasees information between 
                    views and returns a result, for example:
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * This is the route that returns the comments of an article and also delete
 * a comment.
 */
Route::resource('comments', CommentController::class)
    ->only('index', 'destroy')
    ->names('comments');

/**
 * Display a listing of the resource.
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
 * Remove the specified resource from storage.
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
                Data validation
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    The data validation is done by means of requests, in these are indicated
                    what is required for each record in the database.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * This function specifies the validation rules for creating new items.
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
                Make views
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    In this case, the design of the views was provided by a teacher. 
                    The views are rendered dynamically.
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
                        <button class="carousel-control-prev btn" type="button" data-bs-target="#evidence-carousel" data-bs-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#evidence-carousel" data-bs-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Results
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    Finally, this is the result of my work.
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
                        <button class="carousel-control-prev btn" type="button" data-bs-target="#results-carousel" data-bs-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                            </svg>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#results-carousel" data-bs-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#006064" viewBox="0 0 16 16">
                                <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                            </svg>
                        </button>
                    </div>
                </div>
                <br>
            </li>
        </ol>
        <h5 style="color: #006064;">Note</h5>
        <p class="text-start" style="color: #7d7d7d;">
            This project was developed during a Laravel course, it was only considered for viewing on 
            large screen, for example: PC or Laptop. I attach evidence of the existence of the repository.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/image/other/evidence_19.webp') }}" alt="evidence-19">
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
                <a class="btn" href="{{ route('projects.citasapi') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006064" viewBox="0 0 16 16">
                        <path d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/>
                    </svg>
                    <span>Prev</span>
                </a>
            </div>
            <div class="col text-center">
                <a href="#" id="up" class="btn">
                    <span>Slide up</span>
                </a>
            </div>
            <div class="col text-end"></div>
        </div>
    </main>
</div>
@endsection