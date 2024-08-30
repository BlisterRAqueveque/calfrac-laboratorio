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
    <title>Calfrac - Laboratorio de Cementación</title>
</head>

<body>

    <div class="footer">
        Calfrac | Laboratorio de Cementación <span class="pagenum"></span>
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
                        <h2 style="color: #000000; margin: 0; padding: 0; font-size: 14px;">Laboratorio de Cementación</h2> <!-- Tamaño más grande para el título -->
                        <h6 style="margin: 0; padding: 0;">NEUQUEN, ARGENTINA</h6>
                    </td>
                    <td style="width: 20%; text-align: center;">
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr style="border: 1px solid #000000;">
                                <td style="border: 1px solid #000000; padding: 5px;">
                                    Numero: C-FM8.0-0459
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
                                    Trabajo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{$solicitud->tipo_trabajo_cemento->nombre}}
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
                                    MD:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $s_l[0]->profundidad_pozo_md }}m
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    TVD:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $s_l[0]->profundidad_pozo_tvd }}m
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    BHCT:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $s_l[0]->bhct }} °C

                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    BHST:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $s_l[0]->bhst }} °C
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Objetivo del ensayo:
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->tipo_requerimiento_cemento->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Ensayo N°:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $solicitud->ensayo->tipo ?? 'null'}}-{{ $solicitud->ensayo->incrementable ?? 'null'}}-{{ $solicitud->ensayo->anio ?? 'null'}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Posicion Lechada:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $ensayos_seleccionados }}
                                </td>
                            </tr>
                        </table>
                    </td>


                    <!-- Columna "Datos de Lechada" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 110%; left: 110%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>DATOS DE LECHADA</b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 54%; border: 1px solid #494949; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Fecha:
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $s_l[0]->fecha_reconocimiento }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Tipo de cemento / Marca:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $s_l[0]->tipo_cemento ?? "-" }}
                                </td>
                            </tr>
                        </table>
                        <table style="width: 100%; border-collapse: collapse;">
                            <!-- Fila del encabezado -->
                            <tr>
                                <th style="width: 10%; text-align: center; background-color: #ffffff; border: none;">Prod N°</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">N° Lote</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">Aditivo</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">Conc.</th>
                                <th style="width: 22%; text-align: center; background-color: #ffffff; border: none;">Units</th>
                                <th style="width: 12%; text-align: center; background-color: #ffffff; border: none;">OM</th>
                            </tr>

                            <!-- Filas numeradas del 1 al 10 -->
                            <?php
                            $i = 0;
                            ?>
                            @foreach ($s_l[0]->formulacion_tentativa as $formulacion)
                            <?php
                            $i++;
                            ?>
                            <tr>
                                <td
                                style="width: 40%;color: #686868; text-align: right; font-size: 13px; background-color: #ffffff;">
                                <?= $i; ?>
                                </td>
                                <td
                                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $formulacion->lote }}
                                </td>
                                <td
                                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border: 1px solid #494949; background-color: #ffffff;">
                                    @if(isset($formulacion->aditivos->nombre))
                                    {{ $formulacion->aditivos->nombre }}
                                @elseif($formulacion->aditivo == 'SD')
                                    {{ $formulacion->comentario ?? '-' }}
                                @else
                                    -
                                @endif
                                </td>
                                <td
                                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $formulacion->concentracion }}
                                </td>
                                <td
                                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border: 1px solid #494949; background-color: #ffffff;">
                                    %BOWC
                                </td>
                                <td style="width: 40%;color: #686868; text-align: center; font-size: 13px; border: 1px solid #494949; background-color: #ffffff;">
                                    {{ $formulacion->blend }}
                                </td>
                            </tr>
                        @endforeach
                            {{-- <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">1</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">{{ $formulacion->lote ?? "-" }}</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">{{ $formulacion->concentracion ?? "-"  }}</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">2</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">3</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">4</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">5</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">6</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">7</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">8</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">9</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;">10</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"> %BOWC</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                            </tr> --}}
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                                <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                                <td style="text-align: center; background-color: #ffffff; border: none;">Densidad</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">g/L: </td>
                                <td style="text-align: center; background-color: #ffffff; border: none;">ppg</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                                <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                                <td style="text-align: center; background-color: #ffffff; border: none;">Rendimiento</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">L/bolsa: </td>
                                <td style="text-align: center; background-color: #ffffff; border: none;">ft³/bolsa</td>
                            </tr>
                            <tr>
                                <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                                <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                                <td style="text-align: center; background-color: #ffffff; border: none;">Req. Agua</td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;"></td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">%: </td>
                                <td style="text-align: center; background-color: #ffffff; border: none;">L/bolsa</td>
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
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 90%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>RESULTADOS DE LOS ENSAYOS</b></div>
                    </td>
                    @foreach ($s_l[0]->rel_bombeabilidad as $bombeabilidad)
                    @if ($bombeabilidad->selected)            
                    <!-- Columna con tabla interna -->
                    <td style="width: 47%; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%;">
                            <tr>
                                <!-- Columna "Datos Generales" -->
                                <td style="width: 6%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #D3D3D3; color:black;">
                                    <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 100%; left: 115%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Tiempo de Bombeabilidad</div>
                                </td>

                                <!-- Columna con tabla interna -->
                                <td style="width: 94%;  padding: 4px; text-align: center; vertical-align: top;">
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Consistometro N°:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->consistometro ? $bombeabilidad->consistometro : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Tiempo de acondicionamiento:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->time_acondicionamiento ? $bombeabilidad->time_acondicionamiento : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Planilla:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->planilla ? $bombeabilidad->planilla : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Gradiente:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                            {{ $bombeabilidad->gradiente ? $bombeabilidad->gradiente : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                ºF/100 ft
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Temperatura:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->temperatura ? $bombeabilidad->temperatura : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                ºC
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Presion:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->presion ? $bombeabilidad->presion : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                psi
                                            </td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                40 Bc:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->bc_40 ? $bombeabilidad->bc_40 : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                70 Bc:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->bc_70 ? $bombeabilidad->bc_70 : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                100 Bc:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $bombeabilidad->bc_100 ? $bombeabilidad->bc_100 : 'No aplica' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    @endif
                    @endforeach
                
                    <td style="width: 47%; padding: 4px; text-align: center; vertical-align: top;">

                        <table style="width: 100%;">
                            <tr>
                                <!-- Columna "Datos Generales" -->
                                <td style="width: 6%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #D3D3D3; color:black;">
                                    <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 92%; left: 115%; width: 200px; height: 20px; text-align: center;font-size: 13px;">UCA - Resistencia a la Compresión</div>
                                </td>

                                <!-- Columna con tabla interna -->
                                <td style="width: 94%; padding: 4px; text-align: center; vertical-align: top;">
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                UCA N°:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->id }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Principal:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->principal ? $s_l[0]->rel_uca[0]->principal . '°' : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                °C
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                50 psi:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->psi_50 ? $s_l[0]->rel_uca[0]->psi_50 : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                500 psi:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->psi_500 ? $s_l[0]->rel_uca[0]->psi_500 : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                1000 psi:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->psi_1000 ? $s_l[0]->rel_uca[0]->psi_1000 : '-' }}

                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                12 hr:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->hs_12 ? $s_l[0]->rel_uca[0]->hs_12 : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                psi
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                24 hr:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->hs_24 ? $s_l[0]->rel_uca[0]->hs_24 : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                psi
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                Impedancia Acustica:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->impedancia_acustica ? $s_l[0]->rel_uca[0]->impedancia_acustica : '-' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                M/rayls
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                SGS cero:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->sgs_cero ? $s_l[0]->rel_uca[0]->sgs_cero : '-' }}

                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                SGS max:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                {{ $s_l[0]->rel_uca[0]->sgs_max ? $s_l[0]->rel_uca[0]->sgs_max : 'No aplica' }}
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                D Tiempo:
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">

                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                hh:mm
                                            </td>
                                        </tr>
                                    </table>
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
                    <td style="width: 1.7%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 100%; left: 80%; width: 200px; height: 20px; text-align: center;font-size: 13px;"></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 54%; padding: 4px; text-align: center; vertical-align: top;">
                        <br>
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #D3D3D3; color:black;">
                                    <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 150%; left: 115%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Reología</div>
                                </td>

                                <td style="width: 65%; vertical-align: top;">
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 54%; padding: 4px; text-align: center; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: none;">
                                                    <tr>
                                                        <td style="width: 52%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="4">
                                                                        Reologías Temp. Ambiente (27°C)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        RPM
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Up
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Down
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Cociente
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Prom.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        300
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_300_up : '-' }}                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300 ? $s_l[0]->rel_reologia[0]->tem_ambiente_300 : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        200
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_200_up : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200 ? $s_l[0]->rel_reologia[0]->tem_ambiente_200 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        100
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_100_up : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100 ? $s_l[0]->rel_reologia[0]->tem_ambiente_100 : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        60
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_60_up : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60 ? $s_l[0]->rel_reologia[0]->tem_ambiente_60 : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        30
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_30_up : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30 ? $s_l[0]->rel_reologia[0]->tem_ambiente_30 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        6
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_6_up : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6 ? $s_l[0]->rel_reologia[0]->tem_ambiente_6 : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        3
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_3_up : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3 ? $s_l[0]->rel_reologia[0]->tem_ambiente_3 : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td style="width: 50%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td>
                                                                        <div style="width: 100%; height: 100px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                                                            {{-- @if (isset($bombeabilidad) && $bombeabilidad->img)
                                                                            @if (file_exists(public_path('uploads/ensayos/') . $bombeabilidad->img) && $bombeabilidad->img)
                                                                            <img src="{{ public_path('uploads/ensayos/') . $bombeabilidad->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                            <p style="text-align: center;">Archivo no disponible</p>
                                                                            @endif
                                                                            @else
                                                                            <p style="text-align: center;">Archivo no disponible</p>
                                                                            @endif --}}
                                                                            @if (!empty($s_l[0]->rel_reologia[0]->img_up) && file_exists(public_path('uploads/ensayos/') . $s_l[0]->rel_reologia[0]->img_up))
                                                                                <img src="{{ public_path('uploads/ensayos/') . $s_l[0]->rel_reologia[0]->img_up }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                                <p>Archivo no disponible</p>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Viscosidad Plastica (cp):
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Punto de Cedencia (lb/100ft2):
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Gel 10 seg:
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Gel 10 min:
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <br>
                                                    <tr>
                                                        <td style="width: 52%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="4">
                                                                        Reologías a 87°C
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        RPM
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Up
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Down
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Cociente
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Prom.
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        300
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_300_up : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300 ? $s_l[0]->rel_reologia[0]->tem_ensayo_300 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        200
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_200_up : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200 ? $s_l[0]->rel_reologia[0]->tem_ensayo_200 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        100
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_100_up : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100 ? $s_l[0]->rel_reologia[0]->tem_ensayo_100 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        60
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_60_up : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60 ? $s_l[0]->rel_reologia[0]->tem_ensayo_60 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        30
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_30_up : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30 ? $s_l[0]->rel_reologia[0]->tem_ensayo_30 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        6
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_6_up : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6 ? $s_l[0]->rel_reologia[0]->tem_ensayo_6 : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        3
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_3_up : '-' }}

                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3 ? $s_l[0]->rel_reologia[0]->tem_ensayo_3 : '-' }}
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td style="width: 50%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td>
                                                                        <div style="width: 100%; height: 100px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                                                            {{-- @if (isset($bombeabilidad) && $bombeabilidad->img)
                                                                            @if (file_exists(public_path('uploads/ensayos/') . $bombeabilidad->img) && $bombeabilidad->img)
                                                                            <img src="{{ public_path('uploads/ensayos/') . $bombeabilidad->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                            <p style="text-align: center;">Archivo no disponible</p>
                                                                            @endif
                                                                            @else
                                                                            <p style="text-align: center;">Archivo no disponible</p>
                                                                            @endif --}}
                                                                            @if (!empty($s_l[0]->rel_reologia[0]->img_down) && file_exists(public_path('uploads/ensayos/') . $s_l[0]->rel_reologia[0]->img_down))
                                                                                <img src="{{ public_path('uploads/ensayos/') . $s_l[0]->rel_reologia[0]->img_down }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                                <p>Archivo no disponible</p>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Viscosidad Plastica (cp):
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Punto de Cedencia (lb/100ft2):
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Gel 10 seg:
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 80%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                                        Gel 10 min:
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                                <td style="width: 32%; padding: 4px; text-align: center; vertical-align: top;">
                                    <br>
                                    <table style="width: 100%;">
                                        <tr>
                                            <!-- Columna "Datos Generales" -->
                                            <td style="width: 10%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 130px; background: #D3D3D3; color:black;">
                                                <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 110%; left: 120%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Pérdida de Filtrado</div>
                                            </td>

                                            <!-- Columna con tabla interna -->
                                            <td style="width: 90%; padding: 4px; text-align: center; vertical-align: top;">
                                                <br>
                                                <table style="width: 100%; border-collapse: collapse; border: none;">
                                                    <tr>
                                                        <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                            Temperatura:
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                            {{ $s_l[0]->rel_perdida_filtrado[0]->temperatura ? $s_l[0]->rel_perdida_filtrado[0]->temperatura : '-' }}

                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                            °C
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                            Fluido Acumulado:
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                            {{ $s_l[0]->rel_perdida_filtrado[0]->fluido_acumulado ? $s_l[0]->rel_perdida_filtrado[0]->fluido_acumulado : '-' }}

                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                            mL
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                            Filtrado API:
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                            {{ $s_l[0]->rel_perdida_filtrado[0]->filtrado_api ? $s_l[0]->rel_perdida_filtrado[0]->filtrado_api : '-' }}

                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                            mL/30min
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table style="width: 100%;">
                                        <tr>
                                            <!-- Columna "Datos Generales" -->
                                            <td style="width: 10%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 130px; background: #D3D3D3; color:black;">
                                                <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 110%; left: 120%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Mezclabilidad</div>
                                            </td>

                                            <!-- Columna con tabla interna -->
                                            <td style="width: 90%; padding: 4px; text-align: center; vertical-align: top;">
                                                <br>
                                                <table style="width: 100%; border-collapse: collapse; border: none;">
                                                    <tr>
                                                        <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                            Mezclabilidad:
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                            {{ $s_l[0]->rel_mezclabilidad[0]->mezclabilidad }}
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><b>Observación:</b> Mezclabilidad 5 es si la lechada se mezcla muy bien;1 es si cuesta mezclar</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table style="width: 100%;">
                                        <tr>
                                            <!-- Columna "Datos Generales" -->
                                            <td style="width: 10%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 100px; background: #D3D3D3; color:black;">
                                                <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 130%; left: 120%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Agua libre</div>
                                            </td>
                                            <!-- Columna con tabla interna -->
                                            <td style="width: 90%; padding: 4px; text-align: center; vertical-align: top;">
                                                <br>
                                                <table style="width: 100%; border-collapse: collapse; border: none;">
                                                    <tr>
                                                        <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                            Agua libre:
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                            {{ $s_l[0]->rel_agua_libre[0]->agua_libre ? $s_l[0]->rel_agua_libre[0]->agua_libre : 'No aplica' }}
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                            °C
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                            Volumen:
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                            {{ $s_l[0]->rel_agua_libre[0]->volumen ? $s_l[0]->rel_agua_libre[0]->volumen : 'No aplica' }}
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                            mL
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                                            API Agua libre:
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                            {{ $s_l[0]->rel_agua_libre[0]->api_agua_libre ? $s_l[0]->rel_agua_libre[0]->api_agua_libre : 'No aplica' }}
                                                        </td>
                                                        <td style="width: 50%; padding: 2px; text-align: left; border: none; background-color: #ffffff;">
                                                            %
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </table>
    <table width='100%' style="border: 1px solid #000000; font-size: 10px;">
        <!-- Tamaño de letra uniforme -->

        <div style="border-radius: 3px">
            <table style="width: 100%;border: 1px solid #000000;">
                <tr>
                    <td style="width: 20%; text-align: center; background: #006f53; vertical-align: middle;">
                        <div style="width: 50px; height: 50px; margin: 0 auto;">
                            <img src="{{ public_path('img/empresa_logo.png') }}" style="max-width: 100%; height: auto;" alt="">
                        </div>
                    </td>
                    <td style="width: 60%; text-align: center;">
                        <h2 style="color: #000000; margin: 0; padding: 0; font-size: 14px;">Laboratorio de Cementación</h2> <!-- Tamaño más grande para el título -->
                        <h6 style="margin: 0; padding: 0;">NEUQUEN, ARGENTINA</h6>
                    </td>
                    <td style="width: 20%; text-align: center;">
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr style="border: 1px solid #000000;">
                                <td style="border: 1px solid #000000; padding: 5px;">
                                    Numero: C-FM8.0-0459
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
            <table style="width: 100%; border-collapse: collapse;border: 1px solid #000000;">
                <tr>
                    <!-- Columna Izquierda -->
                    <td style="width: 33%; vertical-align: top; padding: 4px;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    Cliente:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $solicitud->cliente->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    Pozo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $solicitud->pozo }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    Yacimiento:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $solicitud->locacion->nombre }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    Trabajo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{$solicitud->tipo_trabajo_cemento->nombre}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    Equipo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $solicitud->equipos->nombre }}
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- Columna Central -->
                    <td style="width: 33%; vertical-align: top; padding: 4px;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    MD:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $s_l[0]->profundidad_pozo_md}}m
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    TVD:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $s_l[0]->profundidad_pozo_tvd}}m
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    BHCT:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $s_l[0]->bhct }} °C
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    BHST:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $s_l[0]->bhst }} °C
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- Columna Derecha -->
                    <td style="width: 33%; vertical-align: top; padding: 4px;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none;">
                                    Fecha:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949;">
                                    {{ $solicitud->fecha_solicitud->format('Y-m-d') }}
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
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 110%; left: 110%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>RAFICO BOMBEALIDIDAD - Aguada del Chañar</b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 97%; border: 1px solid #494949; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td>
                                    <div style="width: 100%; height: 320px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                        @if (isset($bombeabilidad) && $bombeabilidad->img)
                                        @if (file_exists(public_path('uploads/ensayos/') . $bombeabilidad->img) && $bombeabilidad->img)
                                        <img src="{{ public_path('uploads/ensayos/') . $bombeabilidad->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                        @else
                                        <p style="text-align: center;">Archivo no disponible</p>
                                        @endif
                                        @else
                                        <p style="text-align: center;">Archivo no disponible</p>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <!-- Columna "Datos Generales" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 110%; left: 110%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>GRAFICO UCA - Aguada del Chañar</b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 97%; border: 1px solid #494949; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td>
                                    <div style="width: 100%; height: 320px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                        {{-- @if (isset($bombeabilidad) && $bombeabilidad->img)
                                        @if (file_exists(public_path('uploads/ensayos/') . $bombeabilidad->img) && $bombeabilidad->img)
                                        <img src="{{ public_path('uploads/ensayos/') . $bombeabilidad->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                        @else
                                        <p style="text-align: center;">Archivo no disponible</p>
                                        @endif
                                        @else
                                        <p style="text-align: center;">Archivo no disponible</p>
                                        @endif --}}
                                        @if (!empty($s_l[0]->rel_uca[0]->img) && file_exists(public_path('uploads/ensayos/') . $s_l[0]->rel_uca[0]->img))
                                            <img src="{{ public_path('uploads/ensayos/') . $s_l[0]->rel_uca[0]->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                        @else
                                            <p>Archivo no disponible</p>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
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
                                    <span style="font-size: 16px; font-weight: bold;">{{ $s_l[0]->solicitado->nombre ?? '-' . ' '}} {{ $s_l[0]->solicitado->apellido ?? '-' }}</span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{ $s_l[0]->solicitado->nombre  ?? '-' . ' '}} {{ $s_l[0]->solicitado->apellido ?? '-' }}<br>
                                        Date: {{ $s_l[0]->fecha_solicitante }}
                                    </span>
                                    <img src="ruta/a/la/firma.png" style="position: absolute; top: 10px; left: 10px; width: 80px; opacity: 0.3; z-index: -1;">
                                </td>

                                <!-- Segunda Columna -->
                                <td width="33.33%" style="position: relative; text-align: left; padding: 10px;">
                                    <span style="font-weight: bold; font-size: 14px;">Reconocido por:</span><br>
                                    <span style="font-size: 16px; font-weight: bold;">{{ $s_l[0]->user_reconocimiento->nombre ?? '-' . ' '}} {{ $s_l[0]->user_reconocimiento->apellido ?? '-'}}</span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{ $s_l[0]->user_reconocimiento->nombre  ?? '-' . ' '}} {{ $s_l[0]->user_reconocimiento->apellido ?? '-' }}<br>
                                        Date: {{ $s_l[0]->fecha_reconocimiento }}
                                    </span>
                                    <img src="ruta/a/la/firma.png" style="position: absolute; top: 10px; left: 10px; width: 80px; opacity: 0.3; z-index: -1;">
                                </td>

                                <!-- Tercera Columna -->
                                <td width="33.33%" style="position: relative; text-align: left; padding: 10px;">
                                    <span style="font-weight: bold; font-size: 14px;">Autorizado por:</span><br>
                                    <span style="font-size: 16px; font-weight: bold;">{{ $s_l[0]->user_autorizacion->nombre ?? '-' . ' '}} {{ $s_l[0]->user_autorizacion->apellido ?? '-' }}</span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{ $s_l[0]->user_autorizacion->nombre ?? '-' . ' '}} {{ $s_l[0]->user_autorizacion->apellido ?? '-'}}<br>
                                        Date: {{ $s_l[0]->fecha_autorizacion }}
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

    <!-- <div class="footer">
        Calfrac | Laboratorio de Cementación <span class="pagenum"></span>
    </div>

    <div style="background: #006f53; padding: 15px; border-radius: 3px">
        <table style="width: 100%;">
            <tr>
                <td style="width: 50%; text-align:center">
                    <div style="width: 50px; height: 50px">
                        <img src="{{ public_path('img/empresa_logo.png') }}" style="max-width: 100%;" alt="">
                    </div>
                </td>
                <td style="width: 50%; text-align:center; color: white">
                    <h2>Laboratorio de Cementación</h2>
                </td>
            </tr>
        </table>
    </div>

   
    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 10px">
        <th style="width: 80%; text-align: center; color: #494949; padding-top: 5px; letter-spacing: 1px;">
            Datos Generales
        </th>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 10px;">
        <tbody>
            <tr>

                <td class="d_g_first_td">
                    Cliente
                </td>
                <td class="d_g_second_td">
                    Yacimiento
                </td>
                <td class="d_g_last_td">
                    Pozo
                </td>
            </tr>
            <tr>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{ $solicitud->cliente->nombre }}
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{ $solicitud->locacion->nombre}}

                </td>
                <td style="width: 40%;color: #686868; text-align: center; font-size: 13px;">
                    {{ $solicitud->pozo }}
                </td>
            </tr>
            <tr>

                <td class="d_g_first_td midd_s">
                    Programa
                </td>
                <td class="d_g_second_td midd_m">
                    Equipo
                </td>
                <td class="d_g_last_td midd_e">
                    Tipo Requerimiento
                </td>
            </tr>
            <tr>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{ $solicitud->programa }}
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{ $solicitud->equipos->nombre ?? $solicitud->equipos}}
                </td>
                <td style="width: 40%;color: #686868; text-align: center; font-size: 13px;">
                    {{ $solicitud->tipo_requerimiento_cemento->nombre }}
                </td>
            </tr>
            <tr>

                <td class="d_g_first_td midd_s">
                    Tipo Trabajo
                </td>
                <td class="d_g_second_td midd_m">
                    Tipo Cementación
                </td>
                <td class="d_g_last_td midd_e">
                    {{--Base (MD/TVD)--}}
                    Fecha Solicitud
                </td>
            </tr>
            <tr>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{$solicitud->tipo_trabajo_cemento->nombre}}
                    {{--{{ $s_l[0]->base_tvd }} --}}
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{--{{ $s_l[0]->bhct }}--}}
                    {{ $solicitud->tipo_cementacion->nombre }}
                </td>
                <td style="width: 40%;color: #686868; text-align: center; font-size: 13px;">
                    {{--{{ $s_l[0]->bhst }}--}}
                    {{ $solicitud->fecha_solicitud->format('Y-m-d') }}
                </td>
            </tr>
            {{--<tr>

                <td class="d_g_first_td midd_s">
                    {{--Agregar algo--}}
                {{--</td>
                <td class="d_g_second_td midd_m">
                    BHCT
                </td>
                <td class="d_g_last_td midd_e">
                    BHST
                </td>
            </tr>
            <tr>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{ $s_l[0]->base_tvd }}
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{ $s_l[0]->base_tvd }}
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                    {{ $s_l[0]->base_tvd }}
                </td>
            </tr>  --}}
        </tbody>
    </table>

    {{-- Datos de Lechada --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 10px">
        <th style="width: 80%; text-align: center; color: #494949; padding-top: 5px; letter-spacing: 1px;">
            Datos de Lechada
        </th>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 10px;">
        <tbody>
            <tr>

                <td class="d_g_first_td" colspan="5">
                    Tipo de Cemento / Marca
                </td>

            </tr>

            <tr>
                <td class="d_g_first_td">
                    Producción N° Lote
                </td>
                <td class="d_g_second_td">
                    Aditivo
                </td>
                <td class="d_g_second_td">
                    Conc.
                </td>
                <td class="d_g_second_td">
                    Units
                </td>
                <td class="d_g_last_td" style="border-radius: 0">
                    Blend
                </td>
            </tr>
            @foreach ($s_l[0]->formulacion_tentativa as $formulacion)
                <tr>
                    <td
                        style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                        {{ $formulacion->lote }}
                    </td>
                    <td
                        style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                        {{ $formulacion->aditivos->nombre ?? $formulacion->aditivo }}
                    </td>
                    <td
                        style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                        {{ $formulacion->concentracion }}
                    </td>
                    <td
                        style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                        %BOWC
                    </td>
                    <td style="width: 40%;color: #686868; text-align: center; font-size: 13px;">
                        {{ $formulacion->blend }}
                    </td>
                </tr>
            @endforeach

            {{--<tr>
                <td colspan="2" style="border-right: 1px solid #494949; border-top: 1px solid #494949"></td>
                <td class="d_g_second_td midd_m" style="border-bottom: 0">
                    Densidad
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-top: 1px solid #494949">
                    <b>-</b> <small>g/L</small>
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-top: 1px solid #494949">
                    <b>-</b> <small>ppg</small>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-right: 1px solid #494949;"></td>
                <td class="d_g_second_td midd_m" style="border-bottom: 0">
                    Rendimiento
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-top: 1px solid #494949">
                    <b>-</b> <small>L/bolsa</small>
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-top: 1px solid #494949">
                    <b>-</b> <small>ft3/bolsa</small>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-right: 1px solid #494949;"></td>
                <td class="d_g_second_td midd_m" style="border-bottom: 0">
                    Req. Agua
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-top: 1px solid #494949">
                    <b>-</b> <small>%</small>
                </td>
                <td
                    style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-top: 1px solid #494949">
                    <b>-</b> <small>L/bolsa</small>
                </td>
            </tr>--}}

        </tbody>
    </table>
    {{-- Reología --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            Reología (avg reads)
        </th>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td class="d_g_first_td">

            </td>
            <td class="d_g_first_td">
                RPM
            </td>
            <td class="d_g_second_td">
                300
            </td>
            <td class="d_g_second_td">
                200
            </td>
            <td class="d_g_second_td">
                100
            </td>
            <td class="d_g_second_td">
                60
            </td>
            <td class="d_g_second_td">
                30
            </td>
            <td class="d_g_second_td">
                6
            </td>
            <td class="d_g_last_td">
                3
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                T° Amb.
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_rpm ? $s_l[0]->rel_reologia[0]->tem_ambiente_rpm . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300 ? $s_l[0]->rel_reologia[0]->tem_ambiente_300 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200 ? $s_l[0]->rel_reologia[0]->tem_ambiente_200 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100 ? $s_l[0]->rel_reologia[0]->tem_ambiente_100 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60 ? $s_l[0]->rel_reologia[0]->tem_ambiente_60 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30 ? $s_l[0]->rel_reologia[0]->tem_ambiente_30 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6 ? $s_l[0]->rel_reologia[0]->tem_ambiente_6 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949; border-right: 0">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3 ? $s_l[0]->rel_reologia[0]->tem_ambiente_3 . '°' : 'No aplica' }}
            </td>

        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                T° Ens.
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_rpm ? $s_l[0]->rel_reologia[0]->tem_ensayo_rpm . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300 ? $s_l[0]->rel_reologia[0]->tem_ensayo_300 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200 ? $s_l[0]->rel_reologia[0]->tem_ensayo_200 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100 ? $s_l[0]->rel_reologia[0]->tem_ensayo_100 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60 ? $s_l[0]->rel_reologia[0]->tem_ensayo_60 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30 ? $s_l[0]->rel_reologia[0]->tem_ensayo_30 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6 ? $s_l[0]->rel_reologia[0]->tem_ensayo_6 . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-right: 0">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3 ? $s_l[0]->rel_reologia[0]->tem_ensayo_3 . '°' : 'No aplica' }}
            </td>
        </tr>

    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td class="d_g_first_td">
                Temperatura °C
            </td>
            <td class="d_g_second_td">
                T° Amb.
            </td>
            <td class="d_g_last_td">
                T° Ens.
            </td>
        </tr>

        <tr>
            <td class="d_g_first_td midd_m">
                Viscosidad Plástica (cp)
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->temp_ambiente ? $s_l[0]->rel_reologia[0]->temp_ambiente . '°' : 'No aplica' }}

            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->temp_ensayo ? $s_l[0]->rel_reologia[0]->temp_ensayo . '°' : 'No aplica' }}
            </td>
        </tr>

        <tr>
            <td class="d_g_first_td midd_m">
                Punto de Cedencia (lb / 100ft2)
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->temp_ambiente_punto_cedencia ? $s_l[0]->rel_reologia[0]->temp_ambiente_punto_cedencia . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->temp_ensayo_punto_cedencia ? $s_l[0]->rel_reologia[0]->temp_ensayo_punto_cedencia . '°' : 'No aplica' }}
            </td>
        </tr>
        <tr>
            <td class="d_g_first_td midd_m">
                Gel 10 seg
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_seg ? $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_seg . '°' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_seg ? $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_seg . '°' : 'No aplica' }}
            </td>
        </tr>
        <tr>
            <td class="d_g_first_td midd_m" style="border-bottom: 0; border-radius: 0 0 0 5px">
                Gel 10 min
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_min ? $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_min . '°' : 'No aplica' }}
            </td>
            <td style="width: 40%;color: #686868; text-align: center; font-size: 13px;">
                {{ $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_min ? $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_min . '°' : 'No aplica' }}
            </td>
        </tr>

    </table>

    {{-- Reología up reads --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            Reología (up reads)
        </th>
    </table>
    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td class="d_g_first_td">

            </td>
            <td class="d_g_first_td">
                RPM
            </td>
            <td class="d_g_second_td">
                300
            </td>
            <td class="d_g_second_td">
                200
            </td>
            <td class="d_g_second_td">
                100
            </td>
            <td class="d_g_second_td">
                60
            </td>
            <td class="d_g_second_td">
                30
            </td>
            <td class="d_g_second_td">
                6
            </td>
            <td class="d_g_last_td">
                3
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                T° Amb.
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_300_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_200_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_100_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_60_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_30_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_6_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949; border-right: 0">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_3_up . '°' : '-' }}
            </td>

        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                T° Ens.
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_300_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_200_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_100_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_60_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_30_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_6_up . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-right: 0">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_3_up . '°' : '-' }}
            </td>
        </tr>

    </table>

    {{-- Reología up reads --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            Reología (down reads)
        </th>
    </table>
    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td class="d_g_first_td">

            </td>
            <td class="d_g_first_td">
                RPM
            </td>
            <td class="d_g_second_td">
                300
            </td>
            <td class="d_g_second_td">
                200
            </td>
            <td class="d_g_second_td">
                100
            </td>
            <td class="d_g_second_td">
                60
            </td>
            <td class="d_g_second_td">
                30
            </td>
            <td class="d_g_second_td">
                6
            </td>
            <td class="d_g_last_td">
                3
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                T° Amb.
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_300_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_200_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_100_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_60_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_30_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_6_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949; border-right: 0">
                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_3_down . '°' : '-' }}
            </td>

        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                T° Ens.
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_300_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_200_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_100_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_60_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_30_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949;">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_6_down . '°' : '-' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-right: 0">
                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_3_down . '°' : '-' }}
            </td>
        </tr>

    </table>
    

    {{-- Pérdida de Filtrado --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            Pérdida de Filtrado
        </th>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td class="d_g_first_td">
                Temperatura
            </td>
            <td class="d_g_second_td">
                Fluido Acumulado 
            </td>
            <td class="d_g_last_td">
                Filtrado API
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 0">
                {{ $s_l[0]->rel_perdida_filtrado[0]->temperatura ? $s_l[0]->rel_perdida_filtrado[0]->temperatura . '°C' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 0">
                {{ $s_l[0]->rel_perdida_filtrado[0]->fluido_acumulado ? $s_l[0]->rel_perdida_filtrado[0]->fluido_acumulado . ' mL' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 0; border-right: 0">
                {{ $s_l[0]->rel_perdida_filtrado[0]->filtrado_api ? $s_l[0]->rel_perdida_filtrado[0]->filtrado_api . ' mL / 30min' : 'No aplica' }}
            </td>
        </tr>
    </table>
    <div style="page-break-after: always;"></div>
    {{-- Tiempo de Bombeabilidad --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            Tiempo de Bombeabilidad
        </th>
    </table>

    @foreach ($s_l[0]->rel_bombeabilidad as $bombeabilidad)
        @if ($bombeabilidad->selected)
            <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
                <tr>
                    <td class="d_g_first_td" style="width: 20%">
                        <b>Consistómetro N°</b>
                    </td>
                    <td
                        style="color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                        {{ $bombeabilidad->consistometro ? $bombeabilidad->consistometro : 'No aplica' }}
                    </td>
                    <td class="d_g_first_td">
                        <b>Tiempo de Acondicionamiento</b>
                    </td>
                    <td
                        style="width: 10%; color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                        {{ $bombeabilidad->time_acondicionamiento ? $bombeabilidad->time_acondicionamiento : 'No aplica' }}
                    </td>
                    <td class="d_g_last_td" style="width: 15%; border-right: 0">
                        <b>Planilla N°
                            {{ $bombeabilidad->planilla ? $bombeabilidad->planilla : '---' }}</b>
                    </td>
                </tr>
                <tr>
                    <td style="color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949"
                        colspan="2">
                        <b>Gradiente:</b>
                        {{ $bombeabilidad->gradiente ? $bombeabilidad->gradiente : 'No aplica' }}
                        <small>(°F/100ft)</small>
                    </td>
                    <td
                        style="color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                        <b>Temperatura:</b>
                        {{ $bombeabilidad->temperatura ? $bombeabilidad->temperatura : 'No aplica' }}
                        <small>(°C)</small>
                    </td>
                    <td style="width: 30%; color: #686868; text-align: center; font-size: 13px; border-bottom: 1px solid #494949"
                        colspan="2">
                        <b>Presión:</b>
                        {{ $bombeabilidad->presion ? $bombeabilidad->presion : 'No aplica' }}<small>(psi)</small>
                    </td>
                </tr>
                <tr>
                    <td style="color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949"
                        colspan="2">
                        <b>40 Bc:</b>
                        {{ $bombeabilidad->bc_40 ? $bombeabilidad->bc_40 : 'No aplica' }}
                        <small>(hh:mm)</small>
                    </td>
                    <td
                        style="color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                        <b>70 Bc:</b>
                        {{ $bombeabilidad->bc_70 ? $bombeabilidad->bc_70 : 'No aplica' }}
                        <small>(hh:mm)</small>
                    </td>
                    <td style="width: 30%; color: #686868; text-align: center; font-size: 13px; border-bottom: 1px solid #494949"
                        colspan="2">
                        <b>100 Bc:</b>
                        {{ $bombeabilidad->bc_100 ? $bombeabilidad->bc_100 : 'No aplica' }}
                        <small>(hh:mm)</small>
                    </td>
                </tr>

                <tr>
                    <td colspan="5" style="text-align: center; padding-top: 10px"><h5 style="margin: 0; padding: 0">Adjunto</h5></td>
                </tr>
                <tr>
                    <td colspan="5" style="padding: 5px">
                        @if (file_exists(public_path('uploads/ensayos/') . $bombeabilidad->img) && $bombeabilidad->img)
                            <img src="{{ public_path('uploads/ensayos/') . $bombeabilidad->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                        @else
                            <p style="text-align: center;">Archivo no dispobible</p>
                        @endif
                        {{-- vieja configuración 
                        <div style="width: 100%; height: 250px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center">
                            <img src="{{ public_path('uploads/ensayos/') . $bombeabilidad->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                        </div> --}}
                    </td>
                </tr>
            </table>
        @endif
    @endforeach


    {{-- UCA - Resistencia a la Compresión --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            UCA - Resistencia a la Compresión
        </th>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td class="d_g_first_td" style="width: 20%">
                <b>UCA N°</b>
            </td>
            <td
                style="color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_uca[0]->id }}
            </td>
            <td class="d_g_first_td">
                <b>Principal</b>
            </td>
            <td
                style="width: 10%; color: #686868; text-align: center; font-size: 13px; border-right: 0; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_uca[0]->principal ? $s_l[0]->rel_uca[0]->principal . '°' : 'No aplica' }}
            </td>
        </tr>
        <tr>
            <td class="d_g_first_td" style="border-top: 0">50 psi</td>
            <td class="d_g_first_td" style="border-top: 0">500 psi</td>
            <td class="d_g_first_td" style="border-top: 0">1000 psi</td>
            <td class="d_g_first_td" style="border-top: 0; border-right: 0">12 hr</td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_uca[0]->psi_50 ? $s_l[0]->rel_uca[0]->psi_50 . ' (hh:mm)' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_uca[0]->psi_500 ? $s_l[0]->rel_uca[0]->psi_500 . ' (hh:mm)' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_uca[0]->psi_1000 ? $s_l[0]->rel_uca[0]->psi_1000 . ' (hh:mm)' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-right: 0; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_uca[0]->hs_12 ? $s_l[0]->rel_uca[0]->hs_12 . ' hr' : 'No aplica' }}
            </td>
        </tr>
        <tr>
            <td class="d_g_first_td" style="border-top: 0">24 hr</td>
            <td class="d_g_first_td" style="border-top: 0">Impedancia Acústica</td>
            <td class="d_g_first_td" style="border-top: 0">SGS cero</td>
            <td class="d_g_first_td" style="border-top: 0; border-right: 0">SGS max</td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_uca[0]->hs_24 ? $s_l[0]->rel_uca[0]->hs_24 . ' hr' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949;">
                {{ $s_l[0]->rel_uca[0]->impedancia_acustica ? $s_l[0]->rel_uca[0]->impedancia_acustica : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_uca[0]->sgs_cero ? $s_l[0]->rel_uca[0]->sgs_cero . ' (hh:mm)' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-right: 0; border-bottom: 1px solid #494949">
                {{ $s_l[0]->rel_uca[0]->sgs_max ? $s_l[0]->rel_uca[0]->sgs_max . ' (hh:mm)' : 'No aplica' }}
            </td>
        </tr>

        <tr>
            <td colspan="5" style="text-align: center; padding-top: 10px"><h5 style="margin: 0; padding: 0">Adjunto</h5></td>
        </tr>
        <tr>
            <td colspan="5" style="padding: 5px">
                <div style="width: 100%; height: 250px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center">
                    @if (!empty($s_l[0]->rel_uca[0]->img) && file_exists(public_path('uploads/ensayos/') . $s_l[0]->rel_uca[0]->img))
                    <img src="{{ public_path('uploads/ensayos/') . $s_l[0]->rel_uca[0]->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                @else
                    <p>Archivo no disponible</p>
                @endif
                    {{-- vieja conf <img src="{{ public_path('uploads/ensayos/') . $s_l[0]->rel_uca[0]->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);"> --}}
                </div>
            </td>
        </tr>
    </table>


    {{-- Agua Libre --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            Agua Libre
        </th>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td class="d_g_first_td">
                Agua Libre
            </td>
            <td class="d_g_second_td">
                Volumen
            </td>
            <td class="d_g_last_td">
                API Agua Libre
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 0">
                {{ $s_l[0]->rel_agua_libre[0]->agua_libre ? $s_l[0]->rel_agua_libre[0]->agua_libre . '°C' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 0">
                {{ $s_l[0]->rel_agua_libre[0]->volumen ? $s_l[0]->rel_agua_libre[0]->volumen . 'mL' : 'No aplica' }}
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; border-bottom: 0; border-right: 0">
                {{ $s_l[0]->rel_agua_libre[0]->api_agua_libre ? $s_l[0]->rel_agua_libre[0]->api_agua_libre . ' %' : 'No aplica' }}
            </td>

        </tr>


    </table>
    <div style="page-break-after: always;"></div>
    {{-- Mezclabilidad --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 2px; margin-top: 10px">
        <th
            style="width: 80%; text-align: center; color: #494949; padding-top: 3px; letter-spacing: 1px; font-size: 13px; background: rgb(214, 232, 238)">
            Mezclabilidad
        </th>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 5px;">
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right:0; border-bottom: 0">
                {{ $s_l[0]->rel_mezclabilidad[0]->mezclabilidad }}
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right:0; border-bottom: 0; border-top: 1px solid #494949">
                Mezclabilidad <b>5</b> es si la lechada se mezcla muy bien | <b>1</b> si cuesta mezclar
            </td>
        </tr>
    </table>

    {{-- Observaciones --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin-top: 25px;">
        <tr>
            <td class="d_g_first_td" style="border-radius: 5px 5px 0 0; border-bottom: 0; border-right: 0">
                Observaciones
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right:0; border-bottom: 0; border-top: 1px solid #494949; padding: 5px">
                {{ $s_l[0]->observacion }}
            </td>
        </tr>
    </table>

    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin: 20px 0"></table>
    {{-- Quien lo ralizó | Quién lo revisó | Quién lo solicitó --}}
    <table width='100%' style="border: 1px solid #494949; border-radius: 5px; margin: 15px 0">
        <tr>
            <td class="d_g_first_td">
                {{--Realizado por--}}
                Solicitado por
            </td>
            <td class="d_g_second_td">
                Laboratorio
            </td>
            <td class="d_g_last_td">
                {{--
                Solicitado por--}}
                Autoriza
            </td>
        </tr>
        <tr>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; padding: 20px 0">
            {{--$s_l[0]->solicitado->--}}Working...
            </td>
            <td
                style="width: 40%;color: #686868; text-align: center; font-size: 13px; border-right: 1px solid #494949; padding: 20px 0">
                Working...</td>
            <td style="width: 40%;color: #686868; text-align: center; font-size: 13px; padding: 20px 0">
            Working...</td>
        </tr>
    </table> -->

</body>

</html>