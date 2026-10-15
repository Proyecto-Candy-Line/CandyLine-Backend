<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'CandyLine') }} | Backend</title>

    <style>
        :root {
            color-scheme: light;
            font-family: Arial, Helvetica, sans-serif;
            font-synthesis: none;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
            padding: 24px;
            color: #3b1730;
            background:
                radial-gradient(circle at 15% 20%, #ffe2ee 0, transparent 30%),
                radial-gradient(circle at 85% 80%, #ffe9c8 0, transparent 28%),
                #fff8fb;
        }

        main {
            width: min(100%, 720px);
            padding: clamp(32px, 7vw, 64px);
            border: 1px solid #f4dce8;
            border-radius: 28px;
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 24px 70px rgba(105, 35, 75, 0.12);
            text-align: center;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 28px;
            color: #a21c62;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .brand-mark {
            display: grid;
            width: 42px;
            height: 42px;
            place-items: center;
            border-radius: 14px;
            color: #fff;
            background: linear-gradient(135deg, #e83e8c, #a21c62);
            font-size: 22px;
        }

        .label {
            display: inline-block;
            margin: 0 0 16px;
            padding: 8px 13px;
            border: 1px solid #f3c9dc;
            border-radius: 999px;
            color: #a21c62;
            background: #fff4f8;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            color: #3b1730;
            font-size: clamp(36px, 7vw, 56px);
            line-height: 1.08;
            letter-spacing: -0.04em;
        }

        .description {
            max-width: 510px;
            margin: 20px auto 0;
            color: #76556a;
            font-size: 17px;
            line-height: 1.7;
        }

        .divider {
            width: 64px;
            height: 4px;
            margin: 32px auto;
            border-radius: 999px;
            background: linear-gradient(90deg, #e83e8c, #ffbd69);
        }

        .notice {
            padding: 18px 20px;
            border: 1px solid #f5e5ec;
            border-radius: 16px;
            color: #76556a;
            background: #fffafd;
            font-size: 14px;
            line-height: 1.6;
        }

        .notice strong {
            color: #51213e;
        }

        footer {
            margin-top: 32px;
            color: #a18496;
            font-size: 12px;
        }

        @media (max-width: 480px) {
            main {
                border-radius: 22px;
            }

            .description {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="brand">
            <span class="brand-mark" aria-hidden="true">C</span>
            <span>{{ config('app.name', 'CandyLine') }}</span>
        </div>

        <p class="label">Backend</p>

        <h1>Bienvenido a CandyLine</h1>

        <p class="description">
            Este es el punto de entrada del backend de CandyLine.
            La aplicación está configurada para ofrecer los servicios
            que se definan en sus rutas.
        </p>

        <div class="divider" aria-hidden="true"></div>

        <div class="notice">
            <strong>¿Buscabas una API?</strong>
            Consulta las rutas configuradas en el proyecto para conocer
            los recursos disponibles.
        </div>

        <footer>
            &copy; {{ date('Y') }} {{ config('app.name', 'CandyLine') }}
        </footer>
    </main>
</body>
</html>