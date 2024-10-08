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
                        <h2 style="color: #000000; margin: 0; padding: 0; font-size: 14px;">Solicitud de "Lodos"</h2> <!-- Tamaño más grande para el título -->
                        <h6 style="margin: 0; padding: 0;">NEUQUEN, ARGENTINA</h6>
                    </td>
                    <td style="width: 20%; text-align: center;">
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr style="border: 1px solid #000000;">
                                <td style="border: 1px solid #000000; padding: 5px;">
                                    <!-- Numero: C-FM8.0-0459 -->
                                    -
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
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 110%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>DATOS GENERALES</b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 40%; border: 1px solid #494949; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Cliente:
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $solicitud->cliente->nombre }} --}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Pozo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $solicitud->pozo}} --}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Yacimiento:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $solicitud->locacion->nombre}} --}}
                                </td>
                            </tr>
                            <!-- <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Trabajo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{$solicitud->tipo_trabajo_cemento->nombre}} --}}
                                </td>
                            </tr> -->
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Equipo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $solicitud->equipos->nombre }} --}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Servicio:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $s_l[0]->profundidad_pozo_md }}m --}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Compania de Lodo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $s_l[0]->profundidad_pozo_tvd }}m --}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Densidad de Lodo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $s_l[0]->bhct }} °C --}}

                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    PF:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $s_l[0]->bhst }} °C --}}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    VP:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $s_l[0]->bhst }} °C --}}
                                </td>
                            </tr>
                        </table>
                    </td>


                    <!-- Columna "Datos de Lechada" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 110%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>REGISTRO DE ADITIVOS</b></div>
                    </td>

                    <!-- Columna con tabla interna -->
                    <td style="width: 54%; border: 1px solid #494949; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse; border: none;">
                            <tr>
                                <td style="width: 50%; padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Fecha:
                                </td>
                                <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $s_l[0]->fecha_reconocimiento }} --}}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding: 2px; text-align: right; border: none; background-color: #ffffff;">
                                    Tipo de Lodo:
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $s_l[0]->tipo_cemento ?? "-" }} --}}
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
                                <th style="width: 22%; text-align: right; background-color: #ffffff; border: none;">Units</th>
                                <!-- <th style="width: 12%; text-align: center; background-color: #ffffff; border: none;"></th>
                                <th style="width: 12%; text-align: center; background-color: #ffffff; border: none;">OM</th> -->
                            </tr>

                            <!-- Filas numeradas del 1 al 10 -->
                            <?php
                            $i = 0;
                            ?>
                            {{-- @foreach ($s_l[0]->rel_aditivos as $formulacion) --}}
                            <?php
                            $i++;
                            ?>
                            <tr>
                                <td style="padding: 2px; text-align: right; background-color: #ffffff;">
                                    <?= $i; ?>
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $formulacion->lote }} --}}
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- @if(isset($formulacion->aditivos->nombre))
                                    {{ $formulacion->aditivos->nombre }}
                                    @elseif($formulacion->aditivo == 'SD')
                                    {{ $formulacion->comentario ?? '-' }}
                                    @else
                                    -
                                    @endif --}}
                                </td>
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $formulacion->concentracion }} --}}
                                </td>
                                <!-- <td colspan="2" style="padding: 2px; text-align: center; border: 1px solid #494949; background-color: #ffffff;">
                                    %BOWC
                                </td> -->
                                <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                    {{-- {{ $formulacion->om }} --}}
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                            <!-- <tr>
                    <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                    <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                    <td style="text-align: center; background-color: #ffffff; border: none;">Densidad</td>
                    <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                        {{-- @foreach ($s_l[0]->calculos_ensayos as $calculo)
                        {{ $calculo->densidad_ensayo ?? '-' }}
                        @endforeach --}}
                    </td>
                    <td style="padding: 2px; text-align: left; border: none; background-color: #ffffff;"><small>g/L</small></td>
                    <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                        {{-- @foreach ($s_l[0]->calculos_ensayos as $calculo)
                        {{ $calculo->ppg_ensayo ?? '-' }}
                        @endforeach --}}
                    </td>
                    <td style="text-align: center; background-color: #ffffff; border: none;">ppg</td>
                </tr>
                <tr>
                    <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                    <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                    <td style="text-align: center; background-color: #ffffff; border: none;">Rendimiento</td>
                    <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">                        
                        {{-- @foreach ($s_l[0]->calculos_ensayos as $calculo)
                        {{ $calculo->rendimiento_ensayo ?? '-' }}
                        @endforeach --}}
                    </td>
                    <td style="padding: 2px; text-align: left; border: none; background-color: #ffffff;"><small>L/bolsa</small></td>
                    <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                        {{-- @foreach ($s_l[0]->calculos_ensayos as $calculo)
                        {{ $calculo->ft_bolsa ?? '-' }}
                        @endforeach --}}
                    </td>
                    <td style="text-align: center; background-color: #ffffff; border: none;"><small>ft³/bolsa</small></td>
                </tr>
                <tr>
                    <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                    <td style="text-align: center; background-color: #ffffff; border: none;"></td>
                    <td style="text-align: center; background-color: #ffffff; border: none;">Req. Agua</td>
                    <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                        {{-- @foreach ($s_l[0]->calculos_ensayos as $calculo)
                        {{ $calculo->req_agua ?? '-' }}
                        @endforeach --}}
                    </td>
                    <td style="text-align: left; background-color: #ffffff; border: none;"><small>%</small></td>
                    <td style="padding: 2px; text-align: center; border: 1px solid #494949; background-color: #ffffff;">
                        {{-- @foreach ($s_l[0]->calculos_ensayos as $calculo)
                        {{ $calculo->bolsa_ensayo ?? '-' }}
                        @endforeach --}}
                    </td>
                    <td style="text-align: center; background-color: #ffffff; border: none;">
                        <small>L/bolsa</small>
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
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 100%; left: 90%; width: 200px; height: 20px; text-align: center;font-size: 13px;"><b>RESULTADOS DE ENSAYOS</b></div>
                    </td>
                    {{-- @foreach ($s_l[0]->rel_bombeabilidad as $bombeabilidad)
                    @if ($bombeabilidad->selected) --}}
                    <!-- Columna con tabla interna -->
                    <td style="width: 47%; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%;">
                            <tr>
                                <!-- Columna "Datos Generales" -->
                                <td style="width: 6%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 200px; background: #D3D3D3; color:black;">
                                    <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 100%; left: 115%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Caracterización del Lodo</div>
                                </td>
                                <td style="width: 94%;">
                                    <!-- Contenedor para las dos tablas lado a lado -->
                                    <table style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                                        <tr>
                                            <!-- Primera tabla: Tipo de Lodo, Base, Dens. (ppg), Cia de Lodos -->
                                            <td style="width: 50%; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: 1px solid #494949;">
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">T. de Lodo</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Base</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Dens(ppg)</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Cia de Lodos</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                </table>
                                            </td>

                                            <!-- Segunda tabla: Tiempo, 10 seg, 10 min, 30 min -->
                                            <td style="width: 50%; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: 1px solid #494949;">
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Tiempo</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">10 seg</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">10 min</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">30 min</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                                        <tr>
                                            <!-- Primera tabla: Tipo de Lodo, Base, Dens. (ppg), Cia de Lodos -->
                                            <td style="width: 50%; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: 1px solid #494949;">
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Temp. BHCT</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">600 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">300 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">200 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">100 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">60 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">30 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">6 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">3 rpm</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">VP</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">YP</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                % de Fluido
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="8">
                                                Reología
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Lodo</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Colchón</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">600</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">300</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">200</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">100</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">60</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">30</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">6</td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">3</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                100
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                0
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                75
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                25
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                50
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                50
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                25
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                75
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                0
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                100
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>



                        </table>
                    </td>
                    {{-- @endif
                    @endforeach --}}

                    <td style="width: 47%; padding: 4px; text-align: center; vertical-align: top;">

                        <table style="width: 100%;">
                            <tr>
                                <!-- Columna "Datos Generales" -->
                                <td style="width: 6%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 250px; background: #D3D3D3; color:black;">
                                    <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 83%; left: 115%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Compatibilidad Colchón Mecánico y Lodo</div>
                                </td>

                                <!-- Columna con tabla interna -->
                                <td style="width: 94%; padding: 4px; text-align: center; vertical-align: top;">
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                Vol.(bbl)
                                            </td>
                                            <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                12
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                Lodo
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                Den.(ppg)
                                            </td>
                                            <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                12
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                -
                                            </td>
                                            <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                -
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table style="width: 100%; border-collapse: collapse; table-layout: fixed;">
                                        <tr>
                                            <!-- Primera tabla: Tipo de Lodo, Base, Dens. (ppg), Cia de Lodos -->
                                            <td style="width: 50%; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: 1px solid #494949;">
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">% de Fluido</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">VP</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">YP</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Lodo</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Colchón</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">(cp)</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">(lb/100ft2)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">100</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">0</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">75</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">25</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">50</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">50</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">25</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">75</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">0</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">100</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                </table>
                                            </td>

                                            <!-- Segunda tabla: Tiempo, 10 seg, 10 min, 30 min -->
                                            <td style="width: 50%; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: 1px solid #494949;">
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">% de Fluido</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Gel 10</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Gel 10</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Lodo</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">Colchón</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">(Seg)</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">(Min)</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">100</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">0</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">75</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">25</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">50</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">50</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">25</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">75</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">0</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">100</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
                                                        <td style="padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">-</td>
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
                                <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 210px; background: #D3D3D3; color:black;">
                                    <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 115%; width: 200px; height: 20px; text-align: center;font-size: 13px;">Remoción Estática y Mecánica</div>
                                </td>

                                <td style="width: 50%; vertical-align: top;">
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 54%; padding: 4px; text-align: center; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: none;">
                                                    <tr>
                                                        <td style="width: 52%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="6">
                                                                        Remoción Mecánica Lodo
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Vol.(bbl)
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        12
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                                        Lodo
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Den.(ppg)
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        12
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                                        -
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                            <br>
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Tiempo de contacto (min)
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Lodo
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        2.5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        7.5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        10
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        12.5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                        <td style="width: 50%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td>
                                                                        <div style="width: 100%; height: 80px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                                                            {{-- @if ($chartImage1)
                                                                            <img src="{{ $chartImage1 }}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                            <p>Archivo no disponible</p>
                                                                            @endif --}}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                            <br>
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td>
                                                                        <div style="width: 100%; height: 80px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                                                            {{-- @if ($chartImage1)
                                                                            <img src="{{ $chartImage1 }}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                            <p>Archivo no disponible</p>
                                                                            @endif --}}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <br>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                                <td style="width: 47%; vertical-align: top;">
                                    <table style="width: 100%; border-collapse: collapse; border: none;">
                                        <tr>
                                            <td style="width: 54%; padding: 4px; text-align: center; vertical-align: top;">
                                                <table style="width: 100%; border-collapse: collapse; border: none;">
                                                    <tr>
                                                        <td style="width: 52%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="6">
                                                                        Remoción Estática Lodo
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Vol.(bbl)
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        12
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                                        Lodo
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Den.(ppg)
                                                                    </td>
                                                                    <td style="width: 20%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        12
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                                        -
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                    <td style="width: 50%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;" colspan="2">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                            <br>
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Tiempo de contacto (min)
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        Lodo
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        2.5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        7.5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        10
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width: 60%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        12.5
                                                                    </td>
                                                                    <td style="width: 40%; padding: 2px; text-align: left; border: 1px solid #494949; background-color: #ffffff;">
                                                                        -
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        </td>
                                                        <td style="width: 50%; vertical-align: top;">
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td>
                                                                        <div style="width: 100%; height: 80px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                                                            {{-- @if ($chartImage1)
                                                                            <img src="{{ $chartImage1 }}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                            <p>Archivo no disponible</p>
                                                                            @endif --}}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                            <br>
                                                            <table style="width: 100%; border-collapse: collapse; border: none;">
                                                                <tr>
                                                                    <td>
                                                                        <div style="width: 100%; height: 80px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center; border: 1px solid #494949;">
                                                                            {{-- @if ($chartImage1)
                                                                            <img src="{{ $chartImage1 }}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                                                                            @else
                                                                            <p>Archivo no disponible</p>
                                                                            @endif --}}
                                                                        </div>
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
                    </td>
                </tr>
            </table>
        </div>
        <div style="border-radius: 3px;">
            <table style="width: 100%;">
                <tr>
                    <!-- Columna "Datos Generales" -->
                    <td style="width: 3%; border: 1px solid #494949; text-align: center; vertical-align: top; position: relative; height: 0px; background: #006f53; color:white;">
                        <div style="transform: rotate(-90deg); transform-origin: left bottom; white-space: nowrap; position: absolute; top: 90%; left: 90%; width: 20px; height: 0px; text-align: center;font-size: 13px;"><b>&nbsp;</b></div>
                    </td>
                    <td style="width: 97%; padding: 4px; text-align: center; vertical-align: top;">
                        <table style="width: 100%;">
                            <tr>
                                <td style="padding: 0px 10px;">
                                    <span style="font-size: 10px;"><b>HUMECTABILIDAD:</b> <br> Se evalúa la capacidad del colchón mecánico de invertir la fase externa oleosa no conductiva elétricamente del lodo, por una fase externa acousa conductiva.
                                        El procedimiento considedra el agregado de colchón en un volumen determinado de lodo, ambos son pre acondicionados a BHCT y finalmente se determina el oprcentaje de espaciador necesaio par invertir la fase externa del lodo.
                                        % Vol de Espaciador = (Vol Total de Espaciador / (Vol de lodo + Espaciador) * 100) <br> % Humectabilidad: X %</span>
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
                                    <span style="font-size: 16px; font-weight: bold;">
                                        {{-- {{ $s_l[0]->solicitado->nombre ?? '-' . ' '}} {{ $s_l[0]->solicitado->apellido ?? '-' }} --}}
                                    </span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{-- {{ $s_l[0]->solicitado->nombre  ?? '-' . ' '}} {{ $s_l[0]->solicitado->apellido ?? '-' }}<br>
                                        Date: {{ $s_l[0]->fecha_solicitante }} --}}
                                    </span>
                                    <img src="ruta/a/la/firma.png" style="position: absolute; top: 10px; left: 10px; width: 80px; opacity: 0.3; z-index: -1;">
                                </td>

                                <!-- Segunda Columna -->
                                <td width="33.33%" style="position: relative; text-align: left; padding: 10px;">
                                    <span style="font-weight: bold; font-size: 14px;">Reconocido por:</span><br>
                                    <span style="font-size: 16px; font-weight: bold;">
                                        {{-- {{ $s_l[0]->user_reconocimiento->nombre ?? '-' . ' '}} {{ $s_l[0]->user_reconocimiento->apellido ?? '-'}} --}}
                                    </span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{-- {{ $s_l[0]->user_reconocimiento->nombre  ?? '-' . ' '}} {{ $s_l[0]->user_reconocimiento->apellido ?? '-' }}<br>
                                        Date: {{ $s_l[0]->fecha_reconocimiento }} --}}
                                    </span>
                                    <img src="ruta/a/la/firma.png" style="position: absolute; top: 10px; left: 10px; width: 80px; opacity: 0.3; z-index: -1;">
                                </td>

                                <!-- Tercera Columna -->
                                <td width="33.33%" style="position: relative; text-align: left; padding: 10px;">
                                    <span style="font-weight: bold; font-size: 14px;">Autorizado por:</span><br>
                                    <span style="font-size: 16px; font-weight: bold;">
                                        {{-- {{ $s_l[0]->user_autorizacion->nombre ?? '-' . ' '}} {{ $s_l[0]->user_autorizacion->apellido ?? '-' }} --}}
                                    </span><br>
                                    <span style="font-size: 10px;">
                                        Digitally signed by<br>
                                        {{-- {{ $s_l[0]->user_autorizacion->nombre ?? '-' . ' '}} {{ $s_l[0]->user_autorizacion->apellido ?? '-'}}<br> --}}
                                        {{-- Date: {{ $s_l[0]->fecha_autorizacion }} --}}
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