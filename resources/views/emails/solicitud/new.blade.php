<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body style="width: 35%; margin: 10px auto; font-family: 'Poppins', sans-serif; border: 1px solid #e1e1e1; box-shadow: 0px 5px 5px 0px rgba(186,186,186,1); border-radius: 10px 10px 0 0;">
    <header style="background-color: #006F53; color: white; font-weight: 500; text-align: center; border-radius: 10px 10px 0 0; padding: 10px 0; display: flex; flex-direction: column; justify-content: center">
        <img src="{{ asset('img/empresa_logo.png') }}" style="width: 50px; height: auto; margin: 0 auto" alt="">
    </header>

    <main>
        <div style="display: flex; justify-content: center; flex-direction: column; align-items: center">
            <h3 style="letter-spacing: .8px; margin-bottom: 0">Solicitud de Fractura</h3>
            <p style="margin: 0 auto; font-weight: 500">{{ $data['locacion'] }}</p>
            <p style="margin: 0 auto; font-weight: 700">N°{{ $data['solicitud_id'] }}</p>
        </div>

        <hr>

        <div style="padding: 10px; font-size: 14px">
            <p style="margin: 0 auto">Estimado/da, se ha creado una nueva Solicitud de Fractura</p>
            <p style="margin: 0 auto"></p>
        </div>

        <div style="display: flex; justify-content: center">
            <p style="margin-bottom: 0">Datos de la Solicitud</p>
        </div>
        <hr>

        <div style="padding: 10px; display: flex; flex-direction: column; font-size: 14px">
            <p style="margin-bottom: 0"><b>Fecha de Solicitud:</b> {{ $data['fecha_solicitud'] }}</p>
            <p style="margin-bottom: 0"><b>Usuario carga:</b> {{ $data['usuario_carga'] }}</p>
            <p style="margin-bottom: 0"><b>Cliente:</b> {{ $data['cliente'] }}</p>
            <p style="margin-bottom: 0"><b>Compañía:</b> {{ $data['empresa'] }}</p>
        </div>

        <div style="display: flex; justify-content: center; margin-bottom: 10px">
            <button style="background: #006F53; color: white; padding: 10px 15px; border: 0; border-radius: 5px; cursor: pointer;">Ver Solicitud</button>
        </div>

        <footer style="background-color: #006F53; padding: 15px 10px; color: white; font-size: 13px">
            ® Blister Technologies, Neuquén - Argentina
        </footer>

    </main>

</body>

</html>
