<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcat icon" href="favicon.ico">

    <title>EAR</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        .row {
            margin-top: 2em;
        }

        .container {
            background-color: rgb(224 73 40 / 74%);
            border-radius: 15px;
            padding: 2em;
            box-shadow: 4px 0px 6px 0px #9f4a4a;
        }

        .description {
            color: white;
        }

        .inputs-radio {
            text-align: center;
        }

        .container h1 {
            text-align: center;
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        div#my-form {
            margin: 1em;
        }

        p {
            font-weight: 700;
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }


        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="container">
        <div class="row justify-content-center align-items-center minh-100">
            <div>
                <h1>Cuestionario de  Equipos de Alto Rendimiento Discovery Leadership ©</h1>
            </div>
            <span class="description">
                Este cuestionario nos servirá para comenzar a trabajar, teniendo en cuenta dónde está el equipo en este momento. Sólo el facilitador conocerá las respuestas individuales. El equipo conocerá el agregado de todos los miembros del equipo Taalentfy. A continuación encontrarás 28 frases referidas a este Equipo. Marca la opción que más se aproxime a su funcionamiento habitual, teniendo en cuenta si la frase se cumple siempre, casi siempre, a veces, pocas veces o nunca.
            </span>
        </div>
    </div>
    <form action="/dashboard" method="POST" name="form" value="submit">
        <div class="row justify-content-center">
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Algunas preguntas se quedaron sin responder. Realice de nuevo el cuestionario
            </div>
            @endif
            <div id="my-form" class="col-12 col-md-10 col-lg-8 my-form">
                @csrf
                <p>1.-Todos somos conscientes de los comportamientos premiados y aceptados por el equipo y actuamos en consecuencia.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2"> casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>2.-Todos disfrutamos de discutir y compartir los problemas apasionadamente y sin tapujos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>3.-Señalamos las deficiencias y conductas improductivas propias y de los demás, sin miedos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>4.-Sabemos en qué están trabajando los otros miembros del equipo y cómo contribuyen a los objetivos comunes.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>5.-Las normas de funcionamiento del equipo son conocidas por todos y apelamos a ellas cuando alguien se las salta.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option5" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option5" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option5" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option5" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option5" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>6.-Nos disculpamos en el acto y con toda sinceridad cuando decimos o hacemos algo inadecuado o posiblemente perjudicial para el equipo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>7.-Son importantes el respeto, la camaradería y la escucha de los demás, a nivel personal y profesional.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>8.-Todos los miembros del equipo estamos dispuestos a sacrificar objetivos personales (tiempo, presupuesto, proyecto, carrera... ) por el bien común del equipo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option8" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option8" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option8" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option8" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option8" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>9.-Confesamos abiertamente nuestras debilidades y errores, para mejora de todos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option9" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option9" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option9" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option9" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option9" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>10.-Las reuniones del equipo son apasionantes, abiertas, enriquecedoras... nunca aburridas.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>11.-Nos marchamos de las reuniones confiados en que nuestros compañeros están por completo comprometidos con las decisiones acordadas, aunque hubiera desacuerdos inicialmente.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>12.-En este equipo, el apoyo emocional a compañeros de trabajo en momentos difíciles está asegurado.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option12" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option12" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option12" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option12" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option12" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>13.-El equipo lo pasa realmente mal cuando no se logran los objetivos comunes.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>14.-Durante las reuniones del equipo, los asuntos más importantes y difíciles se ponen sobre la mesa para ser resueltos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option14" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option14" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option14" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option14" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option14" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>15.-Hay unas reglas claras de funcionamiento en el equipo (valores compartidos, creencias, lo que es importante, lo que es accesorio...)</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>16.-A los miembros de este equipo nos preocupa seriamente la perspectiva de defraudar a nuestros compañeros.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>17.-Confiamos en que los errores son aceptados para mejorar y no son ocultados a los demás miembros del equipo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>18.-Terminamos nuestros debates y reuniones con resoluciones claras, específicas y con un plan de acción.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option18" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option18" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option18" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option18" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option18" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>19.-Sabemos que la vida personal de cada uno afecta al equipo y lo tenemos en cuenta para ayudarnos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>20.-Nos desafiamos unos a otros acerca de nuestros proyectos, ideas nuevas y planteamientos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option20" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option20" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option20" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option20" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option20" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>21.-Los miembros de nuestro equipo no tienen prisa en destacar sus propias contribuciones pero señalan las de los demás sin pérdida de tiempo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>22.-Sabemos lo que hay que hacer, cómo, cuando y quien lo tiene que hacer.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>23.-La Confianza es uno de nuestros pilares.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option23" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option23" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option23" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option23" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option23" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>24.-Gestionamos los conflictos de manera positiva para ayudarnos unos a otros, promoviendo el aprendizaje conjunto.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option24" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option24" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option24" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option24" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option24" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>25.-Estamos totalmente comprometidos con los objetivos comunes.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option25" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option25" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option25" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option25" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option25" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>26.-Estamos todos "en el mismo barco" y nos co-responsabilizamos de "llegar a buen puerto" juntos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option26" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option26" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option26" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option26" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option26" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>27.-Conseguir los objetivos nos llena de satisfacción.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option27" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option27" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option27" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option27" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option27" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>28.-La comunicación, abierta y sincera, es importante en nuestro equipo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option28" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option28" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">casi nunca</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option28" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">a veces</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option28" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">casi siempre</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option28" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">siempre</label>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Algunas preguntas se quedaron sin responder. Realice de nuevo el cuestionario
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-12 text-center" style="margin-top: 1em;">
                        <button type="submit" class="btn btn-lg btn-primary" style="vertical-align:middle; background-color:rgb(224, 73, 40); border:1px solid black" id="myBtn" value="submit">Enviar</button>

                    </div>
                </div>
    </form>
</body>

</html>