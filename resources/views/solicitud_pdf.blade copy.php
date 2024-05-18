<html style="margin: 15px; padding: 0">

<head>
    <meta charset="gb18030">
    <title>Laravel 9 Generate PDF From View</title>
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet"> --}}
</head>
<style>
    body {
        font-family: "Hanken Grotesk", sans-serif !important;
        font-size: 13px
    }

    table {
        border-spacing: 0;
    }

    tbody {
        padding: 0;
    }

    table td {
        padding: 3px
    }

    .page_break {
        page-break-before: always;
    }
</style>

<header style="background: #006f53; padding: 15px; border-radius: 3px">
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
</header>

<body style="margin: 0; padding: 0">
    {{-- Datos Generales --}}
    <table style="width: 100%; margin: 15px 0px 10px 0px;">
        <tbody style="border: 1px solid #626262; border-radius: 5px">
            <tr>
                <th colspan="3" style="padding: 5px">Datos Generales</th>
            </tr>
        </tbody>
    </table>

    <table style="width: 100%; margin: 0; text-align: center">
        <tbody style="border-radius: 5px; border: 1px solid #626262">
            <tr>
                <th>Cliente</th>
                <th>Pozo</th>
                <th>Yacimiento</th>
            </tr>
            <tr style="border: 1px solid #626262">
                <td style="border-right: 1px solid #626262">YPF</td>
                <td>YPF.NW.LACh-594(h)</td>
                <td>La Amarga Chica</td>
            </tr>
            {{-- <tr>
                <td style="border: 1px solid #626262">YPF</td>
                <td style="border: 1px solid #626262">YPF.NW.LACh-594(h)</td>
                <td style="border-right: 1px solid #626262">La Amarga Chica</td>
            </tr>
            <tr>
                <th style="background: #e1e1e1; margin: 0; border: 1px solid #626262;">Trabajo</th>
                <th style="background: #e1e1e1; margin: 0; border: 1px solid #626262;">
                    Equipo</th>
                <th style="background: #e1e1e1; margin: 0; border: 1px solid #626262;">
                    MD</th>
            </tr>
            <tr>
                <td style="border: 1px solid #626262">Aislación</td>
                <td style="border: 1px solid #626262">NBRS-F35</td>
                <td style="border-right: 1px solid #626262">5795</td>
            </tr>
            <tr>
                <th style="background: #e1e1e1; margin: 0; border: 1px solid #626262;">TVD</th>
                <th style="background: #e1e1e1; margin: 0; border: 1px solid #626262;">
                    BHCT</th>
                <th style="background: #e1e1e1; margin: 0; border: 1px solid #626262;">
                    BHST</th>
            </tr>
            <tr>
                <td style="border: 1px solid #626262">2737</td>
                <td style="border: 1px solid #626262">127</td>
                <td style="border: 1px solid #626262">127</td>
            </tr> --}}
        </tbody>
    </table>

    {{-- Datos Lechada --}}
    <table style="width: 100%; margin-top: 15px" cellpadding="0">
        <thead style="border: 1px solid #626262;">
            <tr>
                <th colspan="5" style="padding: 5px">Datos de Lechada</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th style="border: 1px solid #626262; background: #e1e1e1;" colspan="4">Tipo de Cemento / Marca</th>
                <td style="border: 1px solid #626262" colspan="1">Cemento G</td>
            </tr>

            <tr>
                <th style="border: 1px solid #626262; background: #e1e1e1;">
                    Producción N° Lote
                </th>
                <th style="border: 1px solid #626262; background: #e1e1e1;">
                    Aditivo
                </th>
                <th style="border: 1px solid #626262; background: #e1e1e1;">
                    Conc.
                </th>
                <th style="border: 1px solid #626262; background: #e1e1e1;">
                    Units
                </th>
                <th style="border: 1px solid #626262; background: #e1e1e1;">
                    OM
                </th>
            </tr>

            <tr>
                <td style="border: 1px solid #626262;">
                    1123
                </td>
                <td style="border: 1px solid #626262;">
                    ARC-DF1
                </td>
                <td style="border: 1px solid #626262;">
                    0.30%
                </td>
                <td style="border: 1px solid #626262;">
                    %BOWC
                </td>
                <td style="border: 1px solid #626262;">
                    1
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #626262;">
                    1123
                </td>
                <td style="border: 1px solid #626262;">
                    ARC-DF1
                </td>
                <td style="border: 1px solid #626262;">
                    0.30%
                </td>
                <td style="border: 1px solid #626262;">
                    %BOWC
                </td>
                <td style="border: 1px solid #626262;">
                    1
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #626262;">
                    1123
                </td>
                <td style="border: 1px solid #626262;">
                    ARC-DF1
                </td>
                <td style="border: 1px solid #626262;">
                    0.30%
                </td>
                <td style="border: 1px solid #626262;">
                    %BOWC
                </td>
                <td style="border: 1px solid #626262;">
                    1
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th style="border: 1px solid #626262; background: #e1e1e1">Densidad</th>
                <td style="border: 1px solid #626262"><b>1870</b> <small>g/L</small></td>
                <td style="border: 1px solid #626262"><b>15.60</b> <small>ppg</small></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th style="border: 1px solid #626262; background: #e1e1e1">Rendimiento</th>
                <td style="border: 1px solid #626262"><b>52.24</b> <small>L/bolsa</small></td>
                <td style="border: 1px solid #626262"><b>1.846</b> <small>ft3/bolsa</small></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <th style="border: 1px solid #626262; background: #e1e1e1">Req. Agua</th>
                <td style="border: 1px solid #626262"><b>58.16</b> <small>%</small></td>
                <td style="border: 1px solid #626262"><b>29.06</b> <small>L/bolsa</small></td>
            </tr>
        </tbody>
    </table>

    {{-- Tiempo de Bombeabilidad --}}
    <table style="width: 100%; margin-top: 15px; border: 1px solid lightgray;">
        <thead>
            <tr>
                <th style="background-color: lightgray; padding: 3px" colspan="3">Tiempo
                    de Bombeabilidad</th>
            </tr>
        </thead>

        <tbody>
            <td style="padding: 5px" colspan="3">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td style="padding: 5px; border: 1px solid #626262; background: #f1f1f1;"><b>Consistómetro
                                    N°</b></td>
                            <td style="border: 1px solid #626262">
                                7322-714
                            </td>
                            <td style="padding: 5px; border: 1px solid #626262"><b>Tiempo de Acondicionamiento:</b> 15
                            </td>
                            <td style="padding: 5px; border: 1px solid #626262">Planilla N° ---</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; border: 1px solid #626262"><b>Gradiente:</b> 1.75
                                <small>(°F/100ft)</small></td>
                            <td style="padding: 5px; border: 1px solid #626262"><b>Temperatura:</b> 127
                                <small>(°C)</small></td>
                            <td style="padding: 5px; border: 1px solid #626262" colspan="2"><b>Presión:</b> 7500
                                <small>(psi)</small></td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; border: 1px solid #626262"><b>40 Bc:</b> 04:40
                                <small>(hh:mm)</small></td>
                            <td style="padding: 5px; border: 1px solid #626262"><b>70 Bc:</b> 04:57
                                <small>(hh:mm)</small></td>
                            <td style="padding: 5px; border: 1px solid #626262" colspan="2"><b>100 Bc:</b> 05:00
                                <small>(hh:mm)</small></td>
                        </tr>

                        <tr>
                            <td colspan="4" style="text-align: center; padding-top: 10px">Adjunto</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div style="width: 100%; height: 250px; background-color: #e1e1e1; border-radius: 5px">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tbody>
    </table>

    <table style="width: 100%">
        <tbody>
            <tr>
                <td>

                </td>
            </tr>
        </tbody>

    </table>

    <div class="page_break"></div>

    {{-- UCA - Resistencia a la Compresión --}}
    <table style="width: 100%; margin-top: 15px; border: 1px solid lightgray">
        <thead>
            <tr>
                <th style="background-color: lightgray; padding: 3px" colspan="4">UCA -
                    Resistencia a la Compresión</th>
            </tr>
        </thead>

        <tbody>
            <td style="padding: 5px" colspan="4">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-radius: 5px 0 0 0; background: #f1f1f1;">
                                <b>UCA N°</b>
                            </td>
                            <td style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0">745</td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; background: #f1f1f1;">
                                <b>Principal</b>
                            </td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; border-radius: 0 5px 0 0">
                                127°</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px; border: 1px solid gray; border-bottom: 0; background: #f1f1f1;">
                                <b>50 psi</b>
                            </td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; background: #f1f1f1;">
                                <b>500 psi</b>
                            </td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; background: #f1f1f1;">
                                <b>1000 psi</b>
                            </td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; background: #f1f1f1;">
                                <b>12 hr</b>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 5px; border: 1px solid gray; border-bottom: 0">3:54
                                <small><em>(hh:mm)</em></small>
                            </td>
                            <td style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0">4:27
                                <small><em>(hh:mm)</em></small>
                            </td>
                            <td style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0">5:08
                                <small><em>(hh:mm)</em></small>
                            </td>
                            <td style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0">2104
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 5px; border: 1px solid gray; border-bottom: 0; background: #f1f1f1;">
                                <b>24 hr</b>
                            </td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; background: #f1f1f1;">
                                <b>Impedancia Acústica</b>
                            </td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; background: #f1f1f1;">
                                <b>SGS cero</b>
                            </td>
                            <td
                                style="padding: 5px; border: 1px solid gray; border-bottom: 0; border-left: 0; background: #f1f1f1;">
                                <b>SGS max</b>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 5px; border: 1px solid gray; border-radius: 0 0 0 5px">---</td>
                            <td style="padding: 5px; border: 1px solid gray; border-left: 0">5</td>
                            <td style="padding: 5px; border: 1px solid gray; border-left: 0">3:29
                                <small><em>(hh:mm)</em></small>
                            </td>
                            <td style="padding: 5px; border: 1px solid gray; border-left: 0; border-radius: 0 0 5px 0">
                                3:38 <small><em>(hh:mm)</em></small></td>
                        </tr>
                    </tbody>
                </table>
            </td>


            <tr>
                <td colspan="4" style="text-align: center; padding-top: 10px">Adjunto</td>
            </tr>
            <tr>
                <td colspan="4">
                    <div style="width: 100%; height: 300px; background-color: #e1e1e1; border-radius: 5px"></div>
                </td>
            </tr>

        </tbody>
    </table>

    {{-- Reología --}}
    <table style="width: 100%; margin-top: 25px;">
        <thead>
            <tr>
                <th style="background-color: lightgray; border: 1px solid lightgray; border-bottom: 0;">
                    Reología</th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
            </tr>
        </thead>

        <tbody>
            <td style="padding: 10px; border: 1px solid lightgray; border-top: 0" colspan="4">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th></th>
                            <th style="border: 1px solid gray; border-bottom: 0; background-color: #f1f1f1">RPM</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                300</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                200</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                100</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                60</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                30</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                6</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                3</th>
                        </tr>
                        <tr>
                            <td
                                style="border: 1px solid gray; border-bottom: 0; border-right: 0; background-color: #f1f1f1;">
                                Temp° Ambiente</td>
                            <td style="border: 1px solid gray; border-bottom: 0">27°C</td>
                            <td style="border: 1px solid gray; border-bottom: 0; border-left: 0">207</td>
                            <td style="border: 1px solid gray; border-bottom: 0; border-left: 0">125</td>
                            <td style="border: 1px solid gray; border-bottom: 0; border-left: 0">91</td>
                            <td style="border: 1px solid gray; border-bottom: 0; border-left: 0">64</td>
                            <td style="border: 1px solid gray; border-bottom: 0; border-left: 0">42</td>
                            <td style="border: 1px solid gray; border-bottom: 0; border-left: 0">19</td>
                            <td style="border: 1px solid gray; border-bottom: 0; border-left: 0">14</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid gray; border-right: 0; background-color: #f1f1f1;">Temp°
                                Ensayo</td>
                            <td style="border: 1px solid gray;">27°C</td>
                            <td style="border: 1px solid gray; border-left: 0">207</td>
                            <td style="border: 1px solid gray; border-left: 0">125</td>
                            <td style="border: 1px solid gray; border-left: 0">91</td>
                            <td style="border: 1px solid gray; border-left: 0">64</td>
                            <td style="border: 1px solid gray; border-left: 0">42</td>
                            <td style="border: 1px solid gray; border-left: 0">19</td>
                            <td style="border: 1px solid gray; border-left: 0">14</td>
                        </tr>

                        <tr>
                            <td colspan="9"></td>
                        </tr>

                        <tr>
                            <td colspan="3"></td>
                            <th colspan="3"
                                style="background-color: #f1f1f1; border: 1px solid gray; border-bottom: 0; border-right: 0;">
                                Temperatura Ambiente</th>
                            <th colspan="3"
                                style="background-color: #f1f1f1; border: 1px solid gray; border-bottom: 0;">
                                Temperatura Ensayo</th>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="3" style="border: 1px solid gray; border-bottom: 0; border-right: 0">64.00
                            </td>
                            <td colspan="3" style="border: 1px solid gray; border-bottom: 0;">128.68</td>
                        </tr>
                        <tr>
                            <th colspan="3"
                                style="border: 1px solid gray; border-bottom: 0; border-right: 0; background-color: #f1f1f1;">
                                Punto de Cedencia <small>(lb/100ft2)</small></th>
                            <td colspan="3" style="border: 1px solid gray; border-bottom: 0; border-right: 0">28.28
                            </td>
                            <td colspan="3" style="border: 1px solid gray; border-bottom: 0;">19.89</td>
                        </tr>
                        <tr>
                            <th colspan="3"
                                style="border: 1px solid gray; border-bottom: 0; border-right: 0; background-color: #f1f1f1;">
                                Gel 10 segundos</th>
                            <td colspan="3" style="border: 1px solid gray; border-bottom: 0; border-right: 0">6
                            </td>
                            <td colspan="3" style="border: 1px solid gray; border-bottom: 0;">3</td>
                        </tr>
                        <tr>
                            <th colspan="3"
                                style="border: 1px solid gray; border-right: 0; background-color: #f1f1f1;">Gel 10
                                minutos</th>
                            <td colspan="3" style="border: 1px solid gray; border-right: 0">8</td>
                            <td colspan="3" style="border: 1px solid gray;">14</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tbody>
    </table>

    {{-- Pérdida de Filtrado --}}
    <table style="width: 100%; margin-top: 25px;">
        <thead>
            <tr>
                <th style="background-color: lightgray; border: 1px solid lightgray; border-bottom: 0;">
                    Pérdida de Filtrado</th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
            </tr>
        </thead>

        <tbody>
            <td style="padding: 10px; border: 1px solid lightgray; border-top: 0" colspan="4">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th style="border: 1px solid gray; border-bottom: 0; background-color: #f1f1f1">Temperatura
                            </th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                Fluido Acumulado</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                Filtrado API</th>
                        </tr>
                        <tr>
                            <td style="border: 1px solid gray;">87</td>
                            <td style="border: 1px solid gray; border-left: 0;">33</td>
                            <td style="border: 1px solid gray; border-left: 0;">66</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tbody>
    </table>

    {{-- Agua Libre --}}
    <table style="width: 100%; margin-top: 25px;">
        <thead>
            <tr>
                <th style="background-color: lightgray; border: 1px solid lightgray; border-bottom: 0;">
                    Agua Libre</th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
            </tr>
        </thead>

        <tbody>
            <td style="padding: 10px; border: 1px solid lightgray; border-top: 0" colspan="4">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th style="border: 1px solid gray; border-bottom: 0; background-color: #f1f1f1">Agua Libre
                            </th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                Volumen</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                API Agua Libre</th>
                        </tr>
                        <tr>
                            <td style="border: 1px solid gray;">87</td>
                            <td style="border: 1px solid gray; border-left: 0;">33</td>
                            <td style="border: 1px solid gray; border-left: 0;">66</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tbody>
    </table>

    {{-- Mezclabilidad --}}
    <table style="width: 100%; margin-top: 25px;">
        <thead>
            <tr>
                <th style="background-color: lightgray; border: 1px solid lightgray; border-bottom: 0;">
                    Mezclabilidad</th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
                <th style="border-bottom: 1px solid lightgray"></th>
            </tr>
        </thead>

        <tbody>
            <td style="padding: 10px; border: 1px solid lightgray; border-top: 0" colspan="4">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th style="border: 1px solid gray; border-bottom: 0; background-color: #f1f1f1">Agua Libre
                            </th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                Volumen</th>
                            <th
                                style="border: 1px solid gray; border-bottom: 0; border-left: 0; background-color: #f1f1f1">
                                API Agua Libre</th>
                        </tr>
                        <tr>
                            <td style="border: 1px solid gray;">87</td>
                            <td style="border: 1px solid gray; border-left: 0;">33</td>
                            <td style="border: 1px solid gray; border-left: 0;">66</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tbody>
    </table>
</body>

</html>
