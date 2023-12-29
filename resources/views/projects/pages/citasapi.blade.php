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
        <h3>Dating system (API)</h3>
        <span>Backend (Nodejs, express, mongoose)</span>
        <br><br><br>
        <h5>The challenge</h5>
        <p class="text-start" style="color: #7d7d7d;">
            Develop an API that resceives and responds to HTTP requests sents from the frontend 
            (only from SAAC system).
        </p>
        <h5>Solution</h5>
        <p class="text-start" style="color: #7d7d7d;">
            My solution is an API Rest; This API should created with Node.js and have protected routes, 
            validators of data, generate special token's with signature of the API, data filtering and 
            validators of users permissions.
        </p>
        <h5>Process</h5>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item bg-white" style="color: #006064;">
                Scaffold of files
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    As first step I established the scaffold to save each program file, this makes it an 
                    orderly, scalable and easy to understand application.
                </p>
                <div class="col-auto ms-3">
                    <ul class="list-group">
                        <li class="list-group-item bg-white">+ config</li>
                        <li class="list-group-item bg-white">+ controllers</li>
                        <li class="list-group-item bg-white">+ middleware</li>
                        <li class="list-group-item bg-white">+ models</li>
                        <li class="list-group-item bg-white">+ routes</li>
                        <li class="list-group-item bg-white">+ utils</li>
                        <li class="list-group-item bg-white">+ validator</li>
                    </ul>
                </div>
                <br>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                File that starts the App
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    In this file I create instances of tools as dotenv, express.js, cors and some config files.
                    Each tool have a different function, for example, dotenv help to manage enviroments variables
                    inside App.
                </p>
                <div class="col-auto ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
require('dotenv').config()
const express = require('express')
const cors = require('cors')
const dbConnect = require('./config/mongo')
const app = express()

app.use(cors())
app.use(express.json())

port = process.env.PORT || 5500

/**
 * Invoke the routes here.
 * http://host/file/endpoint
 */
app.use(require('./routes'))

app.listen(port, () => {
    console.log(`App is ready on http://host:${port}`)
})

dbConnect()
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064;">
                Routes
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    I create a file dynamic to identify the route requested, each file contains the routes availables
                    referring to customers, users and email configs. The routes create, read, update and delete information
                    on the database.
                </p>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
const express = require('express')
const fs = require('fs')
const router = express.Router()

const PATH_ROUTES = __dirname

/**
 * This method extract only name of file that is the route.
 * @param {*} fileName 
 * @returns 
 */
const removeExtension = (fileName) => {
    return fileName.split('.').shift()
}

/**
 * This method read the routes and redidirect to correct file.
 */
fs.readdirSync(PATH_ROUTES).filter((file) => {
    const name = removeExtension(file)

    if (name !== 'index') {
        router.use(`/${name}`, require(`./${file}`))
    }
})
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Protection of routes
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    The routes are protected by middleware injected that check permissions, if have session active and if the token
                    was generated by this API, finally validates the object data received before pass to controller.
                </p>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * For example, insert item on http://host/file/endpoint.
 * The route is protected by the middleware that check if have session,
 * validates the token, check the rol's authorized and check data object received.
 */
router.post('/add', authMiddleware, checkRol(['UserType', 'UserType']), validateItem, createItem)
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Rol middleware
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    This function check the user rol and grant or denied access at route specified.
                </p>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * This function check the user rol received, if not found denied access.
 * @param {*} rol
 * @returns
 */
const checkRol = (roles) => (req, res, next) => {
    try {
        const { user } = req
        const rolesByUser = user.role
        
        const checkValueRol = roles.some((rolSingle) => rolesByUser.includes(rolSingle))

        if (!checkValueRol) {
            handleHttpError(res, 'ACCESS DENIED')
            return
        }
        next()
    } catch (e) {
        handleHttpError(res, 'OCURRED AN ERROR')
    }
}
                        </code>
                    </pre>
                </div>
            </li>
            <li class="list-group-item bg-white" style="color: #006064">
                Results
                <p class="text-start ms-3" style="color: #7d7d7d;">
                    The responses returned by this API are similar to the following examples.
                </p>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * If some value not exists or not is correct on the object, 
 * return an error indicated the fields invalids.
 */
{
    "errors": 
    [
        {
            "msg": "Invalid value",
            "param": "customer.folder",
            "location": "body"
        },
        {
            "msg": "Invalid value",
            "param": "customer.number.azul",
            "location": "body"
        }
    ]
}
                        </code>
                    </pre>
                </div>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * If some body try to access at some route and not have a session, receives 
 * the followin message, something similar happens if the token is invalid or
 * not was generated by this API.
 */
NOT_SESSION_401
                        </code>
                    </pre>
                </div>
                <div class="col-auto ms-3 ms-3" style="border-left: 1px solid #7d7d7d5c;">
                    <pre class="ms-2">
                        <code>
/**
 * If all credentials and data is validated correctly, return an object with the data
 * requested and some details of the user owner of the session active, 
 * similar to the following.
 */
{
    "data": [
        {
            "customer": {
                "content": {
                    < INFORMATION >
                }
            }
        }
    ],
    "user": {
        "account": {
            "details": {
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
        <h5 style="color: #006064;">Note</h5>
        <p class="text-start" style="color: #7d7d7d;">
            This App process, receives and responds data from and to the <a style="color: #006064;" href="{{ route('projects.citasweb') }}">WEB</a>.
            All routes are protected by multiples validators and a secret key inside API, the information is
            cleaned and validated before save on the database. The examples displayed contain modifications and 
            lines that were removed for privacy, integrity and security of the API.
        </p>
        <h5 style="color: #006064;">Important</h5>
        <p class="text-start" style="color: #7d7d7d;">
            This project is private on my GitHub, but I attach evidence of the existence of 
            the repository.
        </p>
        <div class="col-md-10">
            <img class="img-fluid border" src="{{ asset('build/assets/image/other/evidence_13.webp') }}" alt="evidence-13">
        </div>
        <br>
        <div class="row justify-content-around">
            <div class="col text-start">
                <a class="btn" href="{{ route('projects.citasweb') }}">
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
            <div class="col text-end">
                <a class="btn" href="{{ route('projects.portfolio') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#006064" viewBox="0 0 16 16">
                        <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/>
                    </svg>
                    <span>Next</span>
                </a>
            </div>
        </div>
    </main>
</div>
@endsection