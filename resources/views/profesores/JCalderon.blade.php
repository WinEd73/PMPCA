@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div id="professor-description" class="row mb-4">
            <div class="col-12 col-sm-12">
                <br>
                <h1><strong>DRA. JAQUELINE CALDERÓN HERNÁNDEZ</strong></h1><br>
            </div>
            <div class="col-12 col-sm-3 ">
                <img class="mx-auto d-block" src="{{ asset('storage/images/Jaqueline_Calderon_Hernandez.png') }}" alt="">
            </div>
            <div class="col-12 col-sm-9">
                <div>
                    <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
                    <h5><strong>Facultad de Medicina.</strong></h5>
                    <h5><strong>SNI nivel I.</strong></h5>
                    <p>
                        Av. Venustiano Carranza 2405 Colonia Los Filtros,<br>
                        C.P. 78210 San Luis Potosí, S.L.P.<br>
                        Tel. (444) 8262300 Ext. 6619 <br>
                        calderoj@uaslp.mx
                    </p>

                    <div class="enlacesprof">
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/3A4AAA%3D%3D">Webpage</a>
                        <a target="_blank"
                            href="http://www.ciacyt.uaslp.mx/images/pdf/Ciaas/Dra.JaquelineCalderonHernandez.pdf">Curriculum
                            Vitae </a>
                        <a target="_blank"
                            href="https://investigadores.uaslp.mx/InvestigadorProfile/3A4AAA%3D%3D">Directorio de
                            Investigadores</a>
                        <a target="_blank" href="https://orcid.org/0000-0002-7865-3357"><img
                                src="{{ asset('storage/images/orcid.png') }}" alt=""></a>
                        <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=7102018652">
                            <img src="{{ asset('storage/images/scopus.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <strong>Actividad académica</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li><strong>Cursos:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Bioestadística aplicada y epidemiologia ambiental </li>
                                <li> Análisis probabilístico de riesgos</li>
                            </ul>
                            </p>
                            <li><strong>LGAC:</strong></li>
                            <p>
                            <ul class="vineta">
                                <li> Evaluación integrada del riesgo y salud ambiental </li>
                            </ul>
                            </p>
                            <li><strong>Dirección de Tesis:</strong></li>

                            <p><em>Maestría en Ciencias Ambientales (Doble Titulación), Co-Dirección: </em>
                            <ul class="vineta">
                                <li> Ramírez Paredes Socorro Isabel. 2018. <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4395/MCA1RPS201801.pdf?sequence=1&isAllowed=y">
                                        Monitoreo del entorno para la salud infantil desde un enfoque integral: en un
                                        escenario metropolitano.</a></li>
                            </ul>
                            </p>

                            <p><em>Maestría en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li> <a
                                        href="http://ambiental.uaslp.mx/pmpca/Anterior/tesis/Mae/Gen%202002-08/2005_pmpca_rochaamador.pdf">Rocha
                                        Amador Diana Olivia. 2005. Efectos sobre el sistema nervioso central por la
                                        exposición simultánea a flúor y arsénico.</a>.</li><br>
                                <li> <a
                                        href="http://ambiental.uaslp.mx/pmpca/Anterior/tesis/Mae/Gen%202003-08/2006_pmpca_martinezsalinas.pdf">Martínez
                                        Salinas Rebeca Isabel. 2006. Exposición a hidrocarburos aromáticos policíclicos en
                                        población infantil</a>.</li><br>
                                <li> <a
                                        href="http://ambiental.uaslp.mx/pmpca/Anterior/tesis/Mae/Gen%202006-08/2008_pmpca_munizcarreon.pdf">Muñiz
                                        Carreón Gregoria Patricia. 2008. Evaluación de los efectos crónicos asociados a la
                                        exposición de plaguicidas en comunidades vulnerables</a>.</li><br>
                                <li> <a
                                        href="http://ambiental.uaslp.mx/pmpca/Anterior/tesis/Mae/Gen%202014-08/2016_pmpca_murillovaldez.pdf">Murillo
                                        Valdez Daniela. 2016. Metodología para identificar áreas prioritarias para inversión
                                        en investigación de la enfermedad renal crónica</a>. </li>
                                <li> <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4528/MCA1RCH201801.pdf?sequence=1&isAllowed=y">Rojas
                                        Calderón Hector. 2018. Modelaje de las interacciones entre el ambiente, la población
                                        y el desarrollo cognitivo</a>.</li>
                            </ul>
                            </p>

                            <p><em>Doctorado en Ciencias Ambientales</em>
                            <ul class="vineta">
                                <li> <a
                                        href="http://ambiental.uaslp.mx/pmpca/Anterior/tesis/Doc/Gen2005-08/2009_pmpca_rochaamador.pdf">Rocha
                                        Amador Diana Olivia. 2009. Neurotoxicidad asociada a DDT, DDE y BPCs en niños
                                        residentes de comunidades rurales del Sureste Mexicano</a>.</li><br>
                                <li> <a
                                        href="http://ambiental.uaslp.mx/pmpca/Anterior/tesis/Doc/Gen2010-08/2014_pmpca_villasenorlozano.pdf">Villaseñor
                                        Lozano César Gerardo. 2014. Metodología para la evaluación del riesgo del desarrollo
                                        infantil de comunidades vulnerables</a>.</li><br>
                                <li> <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4529/DCA1GJE201801.pdf?sequence=1&isAllowed=y">Gaytán
                                        Jiménez Efraín. 2018. Determinantes sociales y ambientales en el desarrollo
                                        cognitivo y salud mental infantil</a>.</li><br>
                                <li> <a
                                        href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4765/DCA1VMJ201901.pdf?sequence=1&isAllowed=y">Vázquez
                                        Medina Jazmín Lizzeth. 2019. Influencia del ambiente sobre el desarrollo en niños
                                        residentes en la zona metropolitana de San Luis Potosí</a>.</li>
                            </ul>
                            </p>
                        </ol>
                    </div>
                </div>
            </div>
            {{-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>Publicaciones</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Artículos de Investigación</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> Mónica Terán Hernández, Rebeca Ramis Prieto, Jaqueline Calderón Hernández, Carlos Garrocho
                                Rangel, Juan Campos Alanís; <b>Antonio Ávalos Lozano</b>, Miguel Aguilar Robledo., (2016).
                                Geographic variations in cervical cancer risk in San Luis Potosí state, México: A spatial
                                statistical approach. Universidad Nacional Autónoma de México, D.F. MEXICO.</li>
                        </ul>
                        </p>
                        <p><strong>Capítulos de Libros</strong></p>
                        <p>
                        <ul class="vineta">
                            <li> <b>Antonio Avalos-Lozano</b> (2017). Propuesta estratégica para el desarrollo sustentable
                                de las comunidades rurales en zonas áridas de México. En Diálogos temáticos sobre desarrollo
                                rural sustentable y soberanía alimentaria. Rocky Alvarado Hernández, <b>José Antonio Ávalos
                                    Lozano</b>, Anabell Guadalupe Díaz Espinosa, Antonio Manuel García Gonzáles, Luis Gómez
                                Oliver, Eduardo Arcadio Gonzáles Valenzuela, Antonio Hernández Beltrán, Octavio Jurado
                                Juárez, Liv Lafontaine Navarro, Roberto Martínez Yllescas, Martín Martínez Salvador, Jorge
                                Galo Medina Torres, Abel Pérez Zamorano, Vinicio Horacio Santoyo Cortés, Fernando Soto
                                Baquero y Antonio Yúnez Naude (Eds). Honorable Cámara de Diputados LXIII Legislatura/
                                Congreso de la Unión. ISBN 978-607-8501-34-2 </li>
                            <li> <b>Antonio Avalos-Lozano</b>, Miguel Aguilar-Robledo, (2017). Reconstructing the
                                Environmental History of Colonial Mining: The Real del Catorce Mining District, 18th to 19th
                                centuries; in J.R. Mcneill, George H. Vrtis, the Environmental History of Mining in North
                                America, University of California Press. ISBN 978 052 027 916 2.</li>
                            <li> Moreno-Unda,l A.A., Aguilar-Robledo y <b>J.A. Ávalos Lozano</b>, (2017). “El Programa
                                Nacional de Desmontes en México”. La historia ambiental en México: estudios de caso. M.
                                Aguilar-Robledo, H. Reyes-Hernández y O. Reyes-Pérez, eds. Universidad Autónoma de San Luis
                                Potosí-Centro de Investigaciones en Geografía Ambiental, UNAM. Aceptado.</li>
                            <li> <b>Ávalos Lozano, J.A.</b>, M. Aguilar Robledo, P. Medellín Milán y J. A. Alcalá Jáuregui.
                                (2017). “Esbozo histórico de la industria minera-metalúrgica de producción de plata en la
                                Nueva España/México, siglos XVIII y XIX”. La historia ambiental en México: estudios de caso.
                                M. Aguilar-Robledo, H. Reyes-Hernández y O. Reyes-Pérez, eds. Universidad Autónoma de San
                                Luis Potosí-Centro de Investigaciones en Geografía Ambiental, UNAM. Aceptado.</li>
                            <li> Gerardo A. Hernández Cendejas, <b>Antonio Ávalos Lozano</b> y Pedro Urquijo. (2016). El
                                Te’lom ¿Una alternativa a la deforestación en la Huasteca? Analisis de un sistema
                                agroforestal entre los Teenek Potosinos, en Etnoagroforestería en México. A.I.
                                Moreno-Calles, A.Casas, V.M. Toledo, M. Vallejo, UNAM. ISBN 978 607 028 164 8</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>Vinculación</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                        <ul class="vineta">
                            <li> <b>Estudio de Cuencas Atmosféricas para la Zona Metropolitana de la Ciudad de San Luis
                                    Potosí.</b><br>Director del Proyecto<br>Secretaría de Ecología y Gestión Ambiental del
                                Gobierno del Estado de San Luis Potosí y Universidad Autónoma de San Luis Potosí. <br>2018
                            </li><br>
                            <li> <b>Plan de Manejo de la Presa San José.</b> <br>Director del Proyecto<br>Secretaría de
                                Ecología y Gestión Ambiental del Gobierno del Estado de San Luis Potosí y Universidad
                                Autónoma de San Luis Potosí. <br>2018</li><br>
                            <li> <b>Inventario Estatal de Gases de Efecto Invernadero del Estado de San Luis Potosí 2007 -
                                    14. </b><br>Director del Proyecto<br>Secretaría de Ecología y Gestión Ambiental del
                                Gobierno del Estado de San Luis Potosí y Universidad Autónoma de San Luis Potosí. <br>2018
                            </li><br>
                            <li> <b>Estrategia Estatal de Acción ante el Cambio Climático.</b> <br>Director del
                                Proyecto<br>Secretaría de Ecología y Gestión Ambiental del Gobierno del Estado de San Luis
                                Potosí y Universidad Autónoma de San Luis Potosí. <br>2018</li><br>
                            <li> <b>Mantenimiento a los cuadrantes de la flora rescatada del proyecto Ramones Fase II Sur,
                                    localizados en el estado de San Luis Potosí.</b><br>Director del Proyecto<br>TAG
                                Pipelines S. de R.L. de C.V., y Universidad Autónoma de San Luis Potosí. <br>2017 a 2019
                            </li><br>
                            <li> <b>Construcción del “Jardín Botánico del Desierto Chihuahuense” para el rescate y
                                    reubicación de las plantas removidas en diferentes polígonos de los tramos T05-San Luis
                                    Potosí y T06-San Luis Potosí del proyecto Sistema de Transporte de gas natural Los
                                    Ramones Fase II Sur.</b> <br>Director del Proyecto<br>ICA-FLUOR DANIEL S.R.L de C.V. y
                                Universidad Autónoma de San Luis Potosí.<br> 2016-2017 </li><br>
                            <li> <b>Programa Estatal de Acción ante el Cambio Climático para el Estado de San Luis
                                    Potosí.</b> <br>Director del Proyecto<br>Secretaría de Ecología y Gestión Ambiental del
                                Gobierno del Estado de San Luis Potosí y Universidad Autónoma de San Luis Potosí. <br>2017
                            </li><br>
                            <li> <b>Diseño, establecimiento, arranque y operación de un sistema de vigilancia satelital,
                                    monitorización de riesgos y evaluación de siniestros agropecuarios para la República
                                    Mexicana. (SISMOR)</b><br>Director del Proyecto<br>MAPFRE-TEPEYAC S.A.<br>
                                Primer contrato: agosto 2015 a julio 2016<br>
                                Segundo contrato: agosto 2016 a julio 2017<br>
                                Tercer contrato: agosto 2017 a julio 2018<br>
                                Cuarto contrato: agosto 2018 a julio 2019</li><br>
                            <li> <b>La GEO WEB Sistema Producto Caña de Azúcar, definida como una Plataforma WEB, diseñada
                                    en software libre.</b><br>Director del Proyecto<br>El Ingenio Plan de Ayala, la unión
                                local de productores de Caña de Azúcar C.N.P.R., Unión Local C.N.C., Grupo Ejidal
                                Universidad Autónoma de San Luis Potosí.<br> 15 de diciembre de 2016 al 15 de diciembre del
                                2017</li><br>
                            </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
    <br><br><br>
    </div>
@endsection
