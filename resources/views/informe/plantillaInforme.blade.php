<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LINSADATA</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo-mini.png') }}" />
</head>
<style>
    hr{
        page-break-after: always;
        border: none;
        margin: 0;
        padding: 0;
    }
</style>
<body>
    <section class="section1">

        <div class="div1"
            style="float: right;">
            <img 
                style="
                    width: 180px; 
                    height: 120px;
                    margin-top: 10px;"
                src="{{ asset('img/logo-informe.png') }}">
        </div>

        <div class="div2"
            style="
                margin-left: 20px;
                margin-right: 20px;
                margin-top: 35%;
                -ms-transform: translate(0, -35%);
                -webkit-transform: translate(0, -35%);
                transform: translate(0, -35%);">
            <center><h2 style="margin-bottom: 5px;">INFORME TÉCNICO</h2></center>
            <center><h2 style="margin-top: 0;">{{ $plantilla->descripcion }}</h2></center>
        </div>

        <div class="div3"
            style="
                margin-left: 60px;
                margin-top: 20%;">
            <h2 style="margin-bottom: 5px;">{{ $plantilla->cliente }}</h2>
            <p style="margin-top: 0;">
                Cartagena de indias - Colombia <br>
                {{ $plantilla->fecha }}</p>
        </div>

        <div class="div4"
            style="
                position: absolute;
                left: 70px;
                right: 15px;
                top: 95%;
                ">
            <center>
                <p style="color: #0f598a">Cartagena de Indias: Bosque Trasversal 50 No. 22 – 60 
                    Celular: 322 557 91 61 – 301 278 29 07
                    E-mail: <u style="color: #0099ff">info@linsacol.com</u>
                </p>
            </center>
        </div>

    </section>
    <hr>
    <section class="section2">

        <div class="div5"
            style="
                margin-left: 60px;
                margin-top: 50px;">
            <h4>OBJETIVO GENERAL</h4>
        </div>

        <div class="div6"
            style="
                margin-left: 60px;
                margin-right: 20px;">
            <p>{{ $plantilla->objetivo_gen }}
            </p>
        </div>

        <div class="div7"
            style="
                margin-left: 60px;">
            <h4>OBJETIVO ESPECIFICOS</h4>
        </div>

        <div class="div8"
            style="
                margin-left: 85px;">
            <p>
                {{ $plantilla->objetivo_esp }}
            </p>
        </div>

        <div class="div9"
            style="
                position: absolute;
                left: 70px;
                right: 15px;
                top: 98%;
                ">
            <center>
                <p style="color: #0f598a">Cartagena de Indias: Bosque Trasversal 50 No. 22 – 60 
                    Celular: 322 557 91 61 – 301 278 29 07
                    E-mail: <u style="color: #0099ff">info@linsacol.com</u>
                </p>
            </center>
        </div>

    </section>
    <hr>
    <section class="section3">

        <div class="div10"
            style="
                margin-left: 60px;
                margin-top: 40px;">
            <h4>INSUMOS UTILIZADOS</h4>
        </div>

        <div class="div11"
            style="
                margin-left: 60px;">
            <p>
                {{ $plantilla->list_insumos }}
            </p>
        </div>

        <div class="div12"
            style="
                margin-left: 60px;">
            <h4>PROCEDIMIENTO</h4>
        </div>

        <div class="div13"
            style="
                margin-left: 60px;
                margin-right: 15px;">
            <p>
                {{ $plantilla->procedimiento }}
            </p>
        </div>

        <div class="div14"
            style="
                position: absolute;
                left: 70px;
                right: 15px;
                top: 98%;
                ">
            <center>
                <p style="color: #0f598a">Cartagena de Indias: Bosque Trasversal 50 No. 22 – 60 
                    Celular: 322 557 91 61 – 301 278 29 07
                    E-mail: <u style="color: #0099ff">info@linsacol.com</u>
                </p>
            </center>
        </div>

    </section>
    <hr>
    <section class="section4">

        <div class="div15"
            style="
                margin-left: 60px;
                margin-top: 40px;">
            <h4>EVIDENCIA</h4>
        </div>

        <div class="div16"
            style="
                margin-left: 60px;">
            <h4>ANTES</h4>
            <img 
                style="
                    width: 90%; 
                    height: 90%;
                    margin-top: 10px;"
                src="{{ $plantilla->foto1 }}">
        </div>

        <div class="div17"
            style="
                margin-left: 60px;">
            <h4>DESPUÉS</h4>
            <img 
                style="
                    width: 90%; 
                    height: 90%;
                    margin-top: 10px;"
                src="{{ $plantilla->foto2 }}">
        </div>

        <div class="div18"
            style="
                position: absolute;
                left: 70px;
                right: 15px;
                top: 98%;
                ">
            <center>
                <p style="color: #0f598a">Cartagena de Indias: Bosque Trasversal 50 No. 22 – 60 
                    Celular: 322 557 91 61 – 301 278 29 07
                    E-mail: <u style="color: #0099ff">info@linsacol.com</u>
                </p>
            </center>
        </div>

    </section>
    <hr>
    <section class="section5">

        <div class="div19"
            style="
                margin-left: 60px;
                margin-top: 40px;">
            <h4>CONCLUSIÓN</h4>
        </div>

        <div class="div20"
            style="
                margin-left: 60px;
                margin-right: 15px;">
            <p>
                {{ $plantilla->conclusion }}
            </p>
        </div>

        <div class="div21"
            style="
                position: absolute;
                margin-left: 60px;
                top: 75%;">
            <h3 style="margin-bottom: 0px;">Wilson Altamiranda De Arco</h3>
            <p style="margin-top: 0;">Representante comercial y técnico<</p>
            <br>
            <p>Fin del Informe <br>
                Informe válido solo para las muestras <br>
                La reproducción total o parcial de este 
                 debe hacerse con autorización de LINSACOL S.A.S.</p>
        </div>

        <div class="div22"
            style="
                position: absolute;
                left: 70px;
                right: 15px;
                top: 98%;
                ">
            <center>
                <p style="color: #0f598a">Cartagena de Indias: Bosque Trasversal 50 No. 22 – 60 
                    Celular: 322 557 91 61 – 301 278 29 07
                    E-mail: <u style="color: #0099ff">info@linsacol.com</u>
                </p>
            </center>
        </div>
    </section>
</body>
</html>