
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. ANUSCHKA VAN´T HOOFT</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/AnuschkaVantHoft.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Sociales y Humanidades</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Av. Industrias #101-A Fracc. Talleres <br>
            C.P. 78399, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 832-1000 Ext. 9218<br>
            avanthooft@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="https://sociales.uaslp.mx/Paginas/Investigacion/2108#gsc.tab=0">Webpage</a>
            <a target="_blank" href="/storage/CV/Vant_Hooft_AnuschkaJohannaMaria.pdf">Curriculum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/azUAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="http://orcid.org/0000-0002-3742-9121"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=55304325900"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                <li><strong>Cursos</strong></li>
                    <p>TSCA: Diseño y Evaluación de Proyectos de Investigación<br>
                    Naturaleza y sociedad. Una introducción a las posiciones teóricas recientes</p>

                <li><strong>LGAC</strong></li>
                <p>Lenguas y culturas indígenas<br>
                   Cultura y medio ambiente
                </p>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <p>
                  Clausen Gretel. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3695/MCA1CGR201201.pdf?sequence=3&isAllowed=y">Governance of sustainable social housing programs: potential for implementation of UNEP-Sushi in Uruguay.</a><br>
                  Martínez Mata Fabiola. 2014. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3870/MCA1MMF201401.pdf?sequence=3&isAllowed=y">Social participation in the REDD+ Program in Mexico.</a><br>
                  Galindo Borbón Cecilia María. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4530/MCA1GBC201701.pdf?sequence=1&isAllowed=y">Comfort perception and its influence on energy consumption in social housing in hot dry climates.</a><br>
                  Aguilar Ramírez Arantza Paulina. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4539/MCA1ARA201801.pdf?sequence=1&amp;isAllowed=y">Sustainability in fashion: consumer behavior and the greening of the garment industry in Mexico.</a><br>
                  Barriga Albuja Victor Mauricio. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4534/MCA1BAV201801.pdf?sequence=1&amp;isAllowed=y">Comparative study of renewable energy policies between Ecuador and Germany. Shifting from FITs to auctions.</a><br>
                  Gallegos Trujillo Viridiana. 2018. <a href="https://ninive.uaslp.mx/xmlui/handle/i/4537"> The role of connectivity for sustainable regional development in the Highland Plateau Zone of San Luis Potosi.</a><br>
                  Cuichán Palma, Cinthia Anabel. 2021. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/7464/TesisM.PMPCA.2021.Safeguarding.Cuichan.pdf?sequence=1&isAllowed=y"> Safeguarding indigenous traditional knowledge. The sustainable commercialization of medicinal plants through biotrade.</a>
                </p>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <p>
                  Tapia Hernández Karla Teresa. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3552/MCA1THK201201.pdf?sequence=3&isAllowed=y">La cultura Wixarika en torno a la peregrinación a Wirikuta: la importancia del agua en el sitio sagrado natural.</a><br>
                  Sánchez Tapia Víctor Manuel. 2014. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3827/MCA1PRI01401.pdf?sequence=3&isAllowed=y">La percepción del riesgo ante inundaciones súbitas en la ciudad de San Luis Potosí.</a> (Co-dirección)<br>
                  Niño Daniel Bianca Lizeth. 2015. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3971/MCA1NDB201501.pdf?sequence=3&isAllowed=y">Emociones de miedo e ira en la percepción de riesgo frente al fenómeno de inundaciones súbitas en la ciudad de San Luis Potosí.</a><br>
                  Santiago Bautista Alejandra. 2020. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5727/MCA1SBA202001.pdf?sequence=1&isAllowed=y">Economía familiar y aprovechamiento de los recursos naturales para la alimentación en una comunidad Tének de la Huasteca Potosina.</a>
                </p>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>
                  Heindorf Claudia. 2020. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/5674/DCA1HEC202002.pdf?sequence=1&isAllowed=y">Management and <em>in situ</em> conservation of plant genetic resources in indigenous land use systems of the Huasteca Potosina</a> (Co-dirección).
                </p>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <strong>Publicaciones</strong>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Artículos de investigación</strong><br><br>
              <p>
                Heindorf, C.; J. A. Reyes Agüero; <b>A. van 't Hooft</b>. 2021. Local markets: agrobiodiversity reservoirs and access points for farmers' plant propagation materials. Frontiers in Sustainable Food Systems 5:597822. Section Agroecology and Ecosystem Services. ISSN: 2571-581X (Online). DOI: <a href="https://doi.org/10.3389/fsufs.2021.597822" target="_blank">10.3389/fsufs.2021.597822</a><br><br>
                Heindorf, C.; J. A. Reyes-Agüero; J. Fortanelli-Martínez; <b>A. van 't Hooft</b>. 2021. More than Maize, Bananas, and Coffee: The Inter– and Intraspecific Diversity of Edible Plants of the Huastec Mayan Landscape Mosaics in Mexico. Economic Botany 75 (2): 158-174. ISSN:1874-9364 (Online). DOI: <a href="https://link.springer.com/article/10.1007/s12231-021-09520-9"> 10.1007/s12231-021-09520-9</a><br><br>
                Reyes-Samilpa, A.; J.A. Reyes-Agüero; <b>A. van 't Hooft</b>. 2021. El conocimiento tradicional <i>hñähñu</i> de las características físicas de la fibra del ixtle (<i>Agave</i> spp.). Anthropos 116 (2): 393-403. ISSN: 0257 9774. ISSN online: 0257 9774 <a href="https://doi.org/10.5771/0257-9774-2021-2-393">https://doi.org/10.5771/0257-9774-2021-2-393</a><br><br>
                Heindorf, C.; <b>A. van't Hooft</b>; J.A. Reyes-Agüero; J. Fortanelli-Martínez. 2020. Folk Taxonomy of the Inter-and Intraspecific Edible Plant Diversity of Huastec Mayan Farmers in Mexico. Journal of Ethnobiology 40 (4): 552-568. <a href="https://doi.org/10.2993/0278-0771-40.4.552">https://doi.org/10.2993/0278-0771-40.4.552</a><br><br>
                Reyes-Samilpa, A.; J.A. Reyes-Agüero; G. Álvarez-Fuentes; J.R. Aguirre Rivera; <b>A. van 't Hooft</b>. 2020. Physical characterization of the fibers of <i>Agave salmiana</i> and <i>A. mapisaga</i> from the Mezquital Valley, Mexico. Journal of Natural Fibers. ISSN: 1544 0478. eISSN: 1544 046X. <a href="https://doi.org/10.1080/15440478.2020.1848722">https://doi.org/10.1080/15440478.2020.1848722</a><br><br>
                Reyes-Samilpa, A.; <b>A. van 't Hooft</b>, J.A. Reyes-Agüero; S. Rubín de la Borbolla. 2020. Elaborar ayates. El trabajo artesanal <i>hñähñu</i> del hilado y tejido en el Valle del Mezquital, México. Itinerarios. Revista de estudios lingüísticos, literarios, históricos y antropológicos 31: 267-291. ISSN: 1507-7241. DOI: <a href="https://www.researchgate.net/publication/343615481_2020_Elaborar_ayates_El_trabajo_artesanal_hnahnu_del_hilado_y_tejido_en_el_Valle_del_Mezquital_Mexico_Itinerarios_Revista_de_estudios_linguisticos_literarios_historicos_y_antropologicos"> 10.7311/ITINERARIOS.31.2020-14</a><br><br>
                Antoni, C.; E. Huber-Sannwald; H. Reyes-Hernández; <b>A. van 't Hooft</b>; M. Schoon. 2019. Socio-ecological dynamics of a tropical agricultural region: historical analysis of system change and opportunities. Land Use Policy 81: 346-359. <a href="https://doi.org/10.1016/j.landusepol.2018.10.028">https://doi.org/10.1016/j.landusepol.2018.10.028</a><br><br>
                Heindorf, C.; J.A. Reyes–Agüero; <b>A. van 't Hooft</b>; J. Fortanelli–Martínez. 2019. Inter- and Intraspecific Edible Plant Diversity of the Tének Milpa Fields in Mexico. Economic Botany 73(4): 489–504. ISSN: 0013-0001 (Print) 1874-9364 (Online). <a href="https://doi.org/10.1007/s12231-019-09475-y">https://doi.org/10.1007/s12231-019-09475-y</a><br><br>
                Navarro Gamboa, M.; V. Vázquez Solís; <b>A. van 't Hooft</b>; J.A. Reyes Agüero. 2019. Participación comunitaria y turismo alternativo en zonas indígenas en el contexto mexicano: cuatro estudios de caso. El Periplo Sustentable 36: 7-33. ISSN: 1870-9036. <a href="https://doi.org/10.36677/elperiplo.v0i36.9081"> https://doi.org/10.36677/elperiplo.v0i36.9081</a><br><br>
                Monsiváis-Nava, C. D.; S. Romero-Contreras; I. García-Cedillo; <b>A. van 't Hooft</b>; A. C. Cubillas Tejeda 2018. Prácticas y saberes sobre alimentación infantil en familias de una comunidad cercana al tiradero municipal de San Luis Potosí. RESPYN Revista de Salud Pública y Nutrición, 17 (4): 11-26. ISSN: 1870-0160. DOI: <a href="https://respyn.uanl.mx/index.php/respyn/article/view/392" target="_blank"> 10.29105/respyn17.4-2</a><br><br>
                Antoni, C., E. Huber-Sannwald, H. Reyes-Hernández, <b>A. van 't Hooft</b>. 2017. Condition, tendency, and dynamic interaction in a resilience context of a socio ecological system. Journal of Natural Resources and Development 7:12-21. <a href="https://journals.ub.uni-koeln.de/index.php/JNRD/article/view/755">https://journals.ub.uni-koeln.de/index.php/JNRD/article/view/755</a><br><br>
                Torres R., J. C.; J. Fortanelli M.; V. Benítez G.; <b>A. van 't Hooft</b>. 2015. Etnobotánica de la vivienda rural en la región xi’iuy de La Palma, San Luis Potosí, México. Etnobiología 13(2): 21-36. ISSN <a href="https://revistaetnobiologia.mx/index.php/etno/article/view/77/75">1665-2703</a><br><br>
                Torres-Nerio, R.; G. Domínguez Cortinas; <b>A. van 't Hooft</b>; F. Díaz-Barriga Martínez; A. Cr. Cubillas-Tejeda. 2010. Análisis de la percepción de exposición a riesgos ambientales a la salud, en dos poblaciones infantiles mediante la elaboración de dibujos. Revista Salud Colectiva 6(1): 65-81. ISSN: 1669-2381 (impreso). DOI: <a href="http://revistas.unla.edu.ar/saludcolectiva/article/view/358"> 10.18294/sc.2010.358</a><br><br>
              </p>
              <strong>Libros</strong><br><br>
              <p>
                <b>Van 't Hooft, A.</b> (ed). 2020. Environment and resources management in Latin America. Medio ambiente y gestión de los recursos naturales en América. San Luis Potosí/Colonia (Alemania), PMPCA-FCSH, Universidad Autónoma de San Luis Potosí e Institute for Technology and Resources Management in the Tropics and Subtropics, Technische Hochschule Köln. 124 pp. ISBN: <a href="https://www.researchgate.net/publication/339274964_2020_Environment_and_resources_management_in_Latin_America_Medio_ambiente_y_gestion_de_los_recursos_naturales_en_America"> 978-607-535-132-2</a><br>
              </p>
              <!--<strong>Capítulos en libros</strong><br><br>
              <p>

              </p>-->
            </div>
          </div>
        </div>
        <!--<div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <strong>Vinculación</strong>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
              adds the appropriate classes that we use to style each element. These classes control the overall
              appearance,
              as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
              overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>-->
      </div>
    </div>
    </div>
    <br><br><br>
</div>

@endsection