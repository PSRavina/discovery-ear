<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcat icon" href="favicon.ico">

    <title>CEI</title>

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
                <h1>CUESTIONARIO DE ESCUCHA INTEGRATIVA DISCOVERY LEADERSHIP ©</h1>
            </div>
            <span class="description">
                Bienvenido al <strong>C</strong>uestionario de <strong>E</strong>scucha <strong>I</strong>ntegrativa (<strong>CEI</strong>)©. <strong> <u>Responda</u></strong>, sin pensarlo demasiado, <u><strong>Sí</strong></u> o <u><strong>No</strong></u>, dependiendo de lo que “normalmente” suele hacer. No hay respuestas buenas o malas; sólo posibilidades de mejora y desarrollo.
            </span>
        </div>
    </div>
    <form action="/dashboard" method="POST" name="form" value="submit">
        <div class="row justify-content-center">
            <div id="my-form" class="col-12 col-md-10 col-lg-8 my-form">
                @csrf
                <p>1.-Cuando alguien se enfada conmigo sin razón, pienso: ¿por qué no se calmará y se controlará antes de venir a hablar conmigo?</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option1" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>2.-Yo escucho a todo el mundo por igual. Todo el mundo debe tener el mismo tiempo, espacio y atención por mi parte. </p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option2" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>3.-En general, mientras escucho a otra persona, me adelanto en el tiempo y me pongo a pensar en lo que le voy a responder.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option3" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>4.-Si me doy cuenta de que el otro va a hacer una pregunta, me anticipo y le contesto directamente, para ahorrar tiempo...</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option4" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>5.-Mientras estoy escuchando a otra persona, me centro totalmente en él y me olvido de mi, sabiendo que algo banal para mí puede ser muy importante para el otro.</p>
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
                <p>6.-Creo que a la mayoría de las personas no le importa que las interrumpa, siempre que las ayude en sus problemas...</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option6" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>7.-Cuando escucho a algunas personas, me pregunto mentalmente por qué les resultará tan difícil centrarse en lo importante y no dar tantas vueltas…</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option7" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>8.-Cuando alguien viene a hablar conmigo, dejo todo lo que estaba haciendo, le miro, le observo y me preparo para escuchar todo lo que dice y lo que no dice.</p>
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
                <p>9.-Si no comprendo bien lo que una persona está diciendo o por qué lo dice, hago las preguntas necesarias hasta entenderla, aunque pueda parecer redundante.</p>
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
                <p>10.-Cuando "yo ya he pasado por lo que el otro me está contando", intervengo y lo comparto con él para que aprenda de mi experiencia y/o ganemos tiempo.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option10" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>11.-Hay personas que me cuentan los mismos problemas una y otra vez; yo les escucho, por respeto, pero desconecto mentalmente.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option11" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>12.-El tono de voz de una persona me dice, generalmente, mucho más que sus propias palabras.</p>
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
                <p>13.-Si una persona viene a contarme algo importante, procuro escuchar sólo sus palabras, obviando los sentimientos, para que no me afecten y poder ser más neutral.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option13" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>14.-Cuando una persona tiene dificultades en decirme algo, actúo con calma, con paciencia, a su ritmo, aunque mi tiempo sea muy limitado.</p>
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
                <p>15.-Si no interrumpiera a las personas de vez en cuando, ellas terminarían hablándome durante horas…</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option15" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>16.-Hay personas que me agotan: cuando alguna viene a contarme cosas varias veces seguidas, trato de poner mi mente en otra cosa para no alterarme...</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option16" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>17.-Preguntarle demasiado a una persona sobre un asunto, hace que se desenfoque de lo importante.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option17" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>18.-Si una persona está muy enfadada, lo mejor que puedo hacer es escucharla con empatía, hasta que descargue toda la presión.</p>
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
                <p>19.-Cuando una persona está equivocada acerca de algún punto de su problema, es importante “parar su discurso” y hacer que replantee ese punto de vista de manera correcta.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option19" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>20.-Si alguien me cuenta algo, pero veo que su cuerpo dice otra cosa, se lo comento y le pregunto al respecto.</p>
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
                <p>21.-Si entiendo lo que una persona me acaba de decir, me parece redundante volver a preguntarle para verificar.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option21" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>22.-Soy multitarea: soy perfectamente capaz de escuchar a una persona mientras hago otras cosas.</p>
                <div class="inputs-radio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio1" value="0" required>
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="option22" id="inlineRadio5" value="1">
                        <label class="form-check-label" for="inlineRadio5">No</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 my-form" id="my-form">
                @csrf
                <p>23.-Cuando le contesto a una persona, lo hago en función de cómo percibo que se siente…</p>
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
                <p>24.-Cuando alguna persona me cuenta algo importante para ella, le doy prioridad y me centro en profundizar, comprender y avanzar con ella.</p>
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
                <div class="row">
                    <div class="col-12 text-center" style="margin-top: 1em;">
                        <button type="submit" class="btn btn-lg btn-primary" style="vertical-align:middle; background-color:rgb(224, 73, 40); border:1px solid black" id="myBtn" value="submit">Enviar</button>
                    </div>
                </div>
    </form>
</body>

</html>