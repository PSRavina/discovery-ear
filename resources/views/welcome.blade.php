<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcat icon" href="favicon.ico">

    <title>TPR</title>

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
            background-color: rgb(224, 73, 40);
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
                <h1>TEST DE PREDOMINANCIA RELACIONAL DISCOVERY LEADERSHIP ©</h1>
            </div>
            <span class="description">
                Bienvenido al Test de Predominancia Relacional Discovery (TPR)©. Este Cuestionario de Autodiagnóstico nos servirá para conocer un poco más tu estilo relacional. No hay estilos mejores o peores, sólo diferentes maneras de ver el mundo. Responde sin pensar demasiado, a <strong>qué es importante para tí y qué te gusta hacer y qué haces con mayor facilidad y sin esfuerzo. Si haces algo bien, pero no te sientes cómodo, tranquilo y satisfecho al hacerlo, no marques las frase.</strong>
                Marca la opción que más se aproxime a tu funcionamiento habitual, es decir si la frase, <u><strong>generalmente</strong></u>, <strong>Sí</strong> se cumple o <strong>No</strong> se cumple.
            </span>
        </div>
    </div>
    <form action="/dashboard" method="POST" name="form" value="submit">
        <div class="row justify-content-center">
            <div id="my-form" class="col-12 col-md-10 col-lg-8 my-form">
                @csrf
                <p>1.-Me gusta tener las cosas organizadas y centrarme en los detalles: un sitio para cada cosa.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>2.-Presto especial atención a la comunicación verbal y no verbal para comprender mejor al otro.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>3.-Me encanta perderme en el mundo de las ideas, de los grandes principios y valores.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>4.-Funciono fundamentalmente por objetivos: alcanzar los retos que me propongo es muy importante para mi.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>5.-El mundo es muy complejo, todo se relaciona y funciona de manera Sistémica.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option5" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option5" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>6.-Siempre hago lo que tengo que hacer en tiempo y forma. La disciplina y el orden son pilares en mi vida.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>7.-Los sentimientos son mucho más importantes que los pensamientos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>8.-Estoy convencido de que voy a dejar un legado importante en el Mundo, un toque de genialidad.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option8" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option8" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>9.-Soy muy bueno cuando tengo la responsabilidad final sobre las cosas: me gusta dar dirección, tomar decisiones, asumir responsabilidades y gestionar a otros.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option9" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option9" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>10.-Soy consciente de que, en general, cualquier problema afecta mucho más allá de lo que se ve, a muchos ámbitos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>11.-Creo que las reglas son importantes y deben cumplirse, aunque no esté de acuerdo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>12.-Soy empático y creo que es crucial entender cómo se sienten las personas para conectar y avanzar juntos.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option12" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option12" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>13.-Soy una persona abierta, comunicativa, expresiva, con mucha energía, que inspira a otros.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>14.-No me rindo nunca: cuando tengo un objetivo, voy a por él y casi siempre lo consigo. </p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option14" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option14" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>15.-Soy bueno en detectar todas las partes de un asunto, sus relaciones e implicaciones.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>16.-Me disgusta la ambigüedad, la falta de previsión, la falta de planificación y los riesgos innecesarios.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>17.-Creo que el desarrollo y el crecimiento personal es la clave para ser feliz.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>18.-Me disgustan las tareas o actividades rutinarias y me aburro enseguida de ellas.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option18" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option18" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>19.-Considero que pensar es significativamente más importante que sentir.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>20.-Me cuesta tomar decisiones si no tengo toda la información.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option20" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option20" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>21.-Prefiero relacionarme con personas poco emocionales, que estén centradas en el trabajo y se comporten adecuadamente. </p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>22.-Primero las personas: con un buen equipo puedo alcanzar cualquier objetivo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>23.-Suelo tomar decisiones con rapidez y seguridad; La paciencia no es mi mejor virtud.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option23" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option23" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>24.-Evaluo mi éxito en función de la efectividad de lo que hago y el resultado final.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option24" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option24" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>25.-Me molesta tener que elegir apresuradamente, sin reflexionar.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option25" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option25" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>26.-Disfruto de tareas como clasificar, ordenar y planificar.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option26" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option26" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>27.-Me siento incómodo ante situaciones de conflicto.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option27" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option27" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>28.-Me gusta trabajar en varios temas a la vez; la agilidad, lo novedoso, lo distinto, lo original.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option28" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option28" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>29.-Suelo organizarlo todo en puntos clave y en principios operativos; si algo no es operativo, no lo tengo en cuenta.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option29" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option29" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>30.-Para mí es muy importante pensar bien las cosas antes de actuar.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option30" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option30" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>31.-Me gusta programar mi vida personal y profesional y me molesta cuando tengo que desviarme de lo planificado.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option31" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option31" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>32.-La cooperación, la armonía y la tranquilidad son algunos de mis valores.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option32" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option32" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>33.-A veces me cuesta enfocar en un único tema o centrarme en los pequeños detalles.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option33" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option33" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>34.-Veo ideas, temas, oportunidades nuevas, soluciones creativas, donde otros sólo ven "lo de siempre".</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option34" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option34" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>35.-Soy una persona paciente, reflexiva, introspectiva, que intento equilibrar todo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option35" id="inlineRadio1" value="1" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option35" id="inlineRadio5" value="0">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center" style="margin-top: 1em;">
                        <button type="submit" class="btn btn-lg btn-primary" style="vertical-align:middle; background-color:rgb(224, 73, 40); border:1px solid black" id="myBtn" value="submit">Enviar</button>
                    </div>
                </div>
    </form>
</body>

</html>