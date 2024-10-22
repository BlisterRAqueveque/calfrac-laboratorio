<style>
    body {
        font-family: 'Quicksand', sans-serif !important;
    }

    table {
        border-spacing: 0;
    }

    .d_g_first_td {
        width: 40%;
        color: #343434;
        background-color: #f1f1f1;
        border-right: 1px solid #494949;
        border-bottom: 1px solid #494949;
        border-radius: 5px 0 0 0;
        text-align: center;
        font-size: 13px;
        font-weight: bold;
    }

    .d_g_second_td {
        width: 40%;
        color: #343434;
        background-color: #f1f1f1;
        border-bottom: 1px solid #494949;
        border-right: 1px solid #494949;
        text-align: center;
        font-size: 13px;
        font-weight: bold;
        border-radius: 0
    }

    .d_g_last_td {
        width: 40%;
        color: #343434;
        background-color: #f1f1f1;
        border-bottom: 1px solid #494949;
        text-align: center;
        font-size: 13px;
        font-weight: bold;
        border-radius: 0 5px 0 0;
    }

    .td_oldelval {
        width: 20%;
        color: #343434;
        border-right: 1px solid #494949;
        text-align: center;
        font-weight: bold;
    }

    .d_g_first_td.midd_s {
        border-top: 1px solid #494949 !important;
        border-radius: 0 !important;
    }

    .d_g_second_td.midd_m {
        border-right: 1px solid #494949 !important;
        border-top: 1px solid #494949 !important;
        border-radius: 0 !important;
    }

    .d_g_last_td.midd_e {
        border-top: 1px solid #494949 !important;
        border-radius: 0 !important;
    }



    .th_subtitle,
    .th_subtitle_dos {
        color: #343434;
        background-color: #f1f1f1;
        border-right: 1px solid #494949;
        border-bottom: 1px solid #494949;
        font-weight: bold;
        padding: 5px 0;
    }

    .th_subtitle_dos {
        border-top: 1px solid #494949;
    }

    .th_subtitle:first-child {
        border-radius: 5px 0 0 0;
    }

    .th_subtitle:last-child {
        border-right: none;
        border-radius: 0 5px 0 0;
    }

    .th_subtitle_dos:last-child {
        border-right: none;
    }

    .td_content {
        border-right: 1px solid #494949;
    }

    .td_content_dos {
        border-right: 1px solid #494949;
    }


    .td_content:last-child,
    .td_content_dos:last-child {
        border-right: none;
    }

    .checkmark {
        font-family: DejaVu Sans;
        /* Necesario para mostrar símbolos especiales */
    }

    /*  */
    @page {
        @top-left {
            content: url("<!?= base_url('assets/img/favicon.png') ?>");
        }
    }

    @page {
        /* Aumenta el margen inferior para dejar espacio para el pie de página */
        margin-top: 40px;
    }

    .footer {
        position: fixed;
        font-size: 14px;
        bottom: 0;
        left: 0;
        right: 0;
        height: 30px;
        text-align: center;
        line-height: 50px;
        color: #000;
        font-style: italic;
        color: gray;
    }

    .pagenum:before {
        content: counter(page);
    }
</style>

<html>

<head>
    <meta charset="gb18030">
    <title>Laboratorio Calfrac - Solicitud de Lodo</title>
</head>

<body>

    <div class="footer">
        Laboratorio Calfrac | Solicitud de Lodo<span class="pagenum"></span>
    </div>
    <table width='100%' style="border: 1px solid #000000; font-size: 10px;">
        <!-- Tamaño de letra uniforme -->

        <div style="border-radius: 3px">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 20%; text-align: center; background: #006f53; vertical-align: middle;">
                        <div style="width: 50px; height: 50px; margin: 0 auto;">
                            <img src="{{ public_path('img/empresa_logo.png') }}" style="max-width: 100%; height: auto;" alt="">
                        </div>
                    </td>
                    <td style="width: 60%; text-align: center;">
                        <h2 style="color: #000000; margin: 0; padding: 0; font-size: 14px;">Solicitud de Lodo</h2> <!-- Tamaño más grande para el título -->
                        <h6 style="margin: 0; padding: 0;">NEUQUEN, ARGENTINA</h6>
                    </td>
                    <td style="width: 20%; text-align: center;">
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr style="border: 1px solid #000000;">
                                <td style="border: 1px solid #000000; padding: 5px;">
                                    <!-- Numero: C-FM8.0-0462 -->
                                    Num: C-FM8.0-0462
                                </td>
                            </tr>
                            <tr style="border: 1px solid #000000;">
                                <td style="border: 1px solid #000000; padding: 5px;">
                                    Rev: 1
                                </td>
                            </tr>
                            <tr style="border: 1px solid #000000;">
                                <td style="border: 1px solid #000000; padding: 5px;">
                                    Page: <span class="pagenum"></span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div style="border-radius: 3px;">
            <table style="width: 100%;">
                <tr>
                    <!-- Columna "Datos Generales" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 110%; left: 110%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>DATOS GENERALES</b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 40%; border: 1px solid #494949; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Cliente:
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->cliente->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Programa:
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->programa ?? '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Pozo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->pozo}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Yacimiento:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->locacion->nombre}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Servicio:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->servicios_lodo->nombre}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Equipo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->equipos->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Tipo de Lodo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->tipo_lodo_Lodos->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Compania de Lodo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->compania_lodo->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Densidad del lodo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->densidad_lodo}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    PF:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->pf}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    VP:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->vp}}
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    <u><b>Condiciones del Test</b></u>
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;" colspan="2">

                                </td>
                            </tr>
                            <!-- <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Ensayo N°:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $solicitud->ensayo->tipo ?? 'null'}}-{{ $solicitud->ensayo->incrementable ?? 'null'}}-{{ $solicitud->ensayo->anio ?? 'null'}} --}}
                                </td>
                            </tr> -->
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Temperatura:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                    {{ $solicitud_lodo[0]->temperatura ?? '-'}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Profundidad (MD/TVD) (m):
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->profundidad_md }} MD
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->profundidad_tvd }} TVD
                                </td>
                            </tr>
                        </table>
                    </td>


                    <!-- Columna "Datos de Lechada" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 110%; left: 110%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>REQUERIMIENTOS DEL COLCHON</b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 54%; border: 1px solid #494949; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Tipo de Colchón
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud_lodo[0]->rel_colchon->nombre }}
                                </td>
                            </tr>
                            {{-- <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Tipo de Colchón
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    
                                </td>
                            </tr> --}}
                        </table>
                        <table style="width: 100%; border-collapse: collapse;">
                            <!-- Fila del encabezado -->
                            <tr>
                                <th style="width: 10%; text-align: center; background-color: #ffffff; border: none;">Prod N°</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">N° Lote</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">Aditivo</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">Conc</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">Unidad</th>
                            </tr>

                            <!-- Filas numeradas del 1 al 10 -->
                            <?php
                            $i = 0;
                            ?>
                            @foreach ($solicitud_lodo[0]->formulacion_tentativa as $formulacion)
                            <?php
                            $i++;
                            ?>
                            <tr>
                                <td style="padding: 2px; text-align: right; background-color: #ffffff;">
                                    <?= $i; ?>
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $formulacion->lote }}
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    @if(isset($formulacion->aditivos->nombre))
                                    {{ $formulacion->aditivos->nombre }}
                                    @elseif($formulacion->aditivo == 'SD')
                                    {{ $formulacion->comentario ?? '-' }}
                                    @else
                                    -
                                    @endif
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $formulacion->concentracion }}
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $formulacion->unidad}}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <br><br>
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                    <u><b>Ensayos Requeridos:</b></u>
                                </td>
                                <td style="width: 80%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    <ul>
                                        <!-- Aca se hace el foreach para mostrar la/las opciones marcadas de ensayos requeridos -->
                                        <!-- <li> EJEMPLO </li>
                                        aca se cerraria el foreach -->
                                        @foreach ($ensayos_multiples as $e_r)
                                        @foreach ($opciones_ensayos as $ensayo)
                                            @if ($ensayo->id == $e_r->id_ensayo)
                                                <li>{{ $ensayo->nombre }}</li>
                                            @endif
                                        @endforeach
                                    @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Densidad del Lodo (ppg)
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                    -
                                </td>
                            </tr> -->
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div style="border-radius: 3px;">
            <table style="width: 100%;">
                <tr>
                    <!-- Columna "Datos Generales" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 90%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b></b></div>
                    </td>
                    <!-- Columna con tabla interna -->
                    <td style="width: 71%; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%;">
                            <tr>
                                <!-- Columna "Datos Generales" -->
                                <td style="width: 6%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #D3D3D3; color:black;">
                                    <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 115%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Colchón</div>
                                </td>

                                <!-- Columna con tabla interna -->
                                <!-- Columna con tabla interna -->
                                <td style="width: 94%; padding: 4px; text-align: center; vertical-align: top;">
                                <br><br><br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Volumen del Colchón:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $solicitud_lodo[0]->vol_colchon}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Densidad del Colchón
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $solicitud_lodo[0]->densidad_colchon}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Tiempo de Contacto
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $solicitud_lodo[0]->tiempo_contacto}}
                                            </td>
                                        </tr>
                                    </table>
                                    <br><br><br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                            Observación/Comentarios:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $solicitud_lodo[0]->comentario }}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 26%; padding: 4px; text-align: center; vertical-align: top;"></td>
                </tr>
            </table>
        </div>
        <div style="border-radius: 3px;">
            <table style="width: 100%;">
                <tr>
                    <!-- Columna "Datos Generales" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 90%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b></b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 71%; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%;">
                            <tr>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 26%; padding: 4px; text-align: center; vertical-align: top;"></td>
                </tr>
            </table>
        </div>
        <div style="border-radius: 3px;">
            <table style="width: 100%; border: 1px solid #494949;">
                <tr>
                    <td style="width: 100%; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <!-- Primera Columna -->
                                <td width="33.33%" style="position: relative; text-align: left; padding: 10px;">
                                    <span style="font-weight: bold; font-size: 14px;">Solicitado por:</span><br>
                                    <span style="font-size: 16px; font-weight: bold;">
                                        {{ $solicitud_lodo[0]->user_solicitante->nombre ?? '-' . ' '}} {{ $solicitud_lodo[0]->user_solicitante->apellido ?? '-' }}
                                    </span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{ $solicitud_lodo[0]->user_solicitante->nombre ?? '-' . ' '}} {{ $solicitud_lodo[0]->user_solicitante->apellido ?? '-' }}<br>
                                        Date: {{ $solicitud_lodo[0]->fecha_solicitante }}
                                    </span>
                                    <img src="ruta/a/la/firma.png" style="position: absolute; top: 10px; left: 10px; width: 80px; opacity: 0.3; z-index: -1;">
                                </td>

                                <!-- Segunda Columna -->
                                <td width="33.33%" style="position: relative; text-align: left; padding: 10px;">
                                    <span style="font-weight: bold; font-size: 14px;">Reconocido por:</span><br>
                                    <span style="font-size: 16px; font-weight: bold;">
                                        {{ $solicitud_lodo[0]->user_reconocimiento->nombre ?? '-' . ' '}} {{ $solicitud_lodo[0]->user_reconocimiento->apellido ?? '-' }}
                                    </span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{ $solicitud_lodo[0]->user_reconocimiento->nombre ?? '-' . ' '}} {{ $solicitud_lodo[0]->user_reconocimiento->apellido ?? '-' }}<br>
                                        Date: {{ $solicitud_lodo[0]->fecha_reconocimiento }}
                                    </span>
                                    <img src="ruta/a/la/firma.png" style="position: absolute; top: 10px; left: 10px; width: 80px; opacity: 0.3; z-index: -1;">
                                </td>

                                <!-- Tercera Columna -->
                                <td width="33.33%" style="position: relative; text-align: left; padding: 10px;">
                                    <span style="font-weight: bold; font-size: 14px;">Autorizado por:</span><br>
                                    <span style="font-size: 16px; font-weight: bold;">
                                        {{ $solicitud_lodo[0]->user_autorizacion->nombre ?? '-' . ' '}} {{ $solicitud_lodo[0]->user_autorizacion->apellido ?? '-' }}
                                    </span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{ $solicitud_lodo[0]->user_autorizacion->nombre ?? '-' . ' '}} {{ $solicitud_lodo[0]->user_autorizacion->apellido ?? '-' }}
                                        <br>
                                        {{ $solicitud_lodo[0]->fecha_autorizacion }}
                                    </span>
                                    <img src="ruta/a/la/firma.png" style="position: absolute; top: 10px; left: 10px; width: 80px; opacity: 0.3; z-index: -1;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 20px;">
                        <span style="font-size: 10px;">Responsibility Limit: <br> The confidential analysis and interpretations contained in this report are based upon material supplied by the customer. The interpretations represent the best judgment of the analyst(s). The analyst(s) will not be responsible for any damages, losses, injuries, or consequential damages which may result from the use of or reliance on any information contained herein.</span>
                    </td>
                </tr>
            </table>
        </div>
    </table>


    
</body>

</html>