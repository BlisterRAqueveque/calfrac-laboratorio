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

    <!-- Encabezado | Datos generales -->
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
                    {{ $solicitud->equipos->nombre }}
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
                        {{ $formulacion->aditivo }}
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
                        <div style="width: 100%; height: 250px; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center">
                            <img src="{{ public_path('uploads/ensayos/') . $bombeabilidad->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
                        </div>
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
                    <img src="{{ public_path('uploads/ensayos/') . $s_l[0]->rel_uca[0]->img }}" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0px 0px 5px 0px rgba(191,191,191,1);">
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
    </table>

</body>

</html>
