@extends('layouts.app')

@section('title', 'Page 1')

@section('content')
    <h1 id="title" class="fixed-top m-0 py-2 text-white text-center border-bottom">Le Narval</h1>

    <i id="audio-icon" class="fixed-top text-right m-2 fa fa-volume-off fa-3x"></i>

    <audio src="/media/narval.mp3" id="audio">
            Your browser does not support the
            <code>audio</code> element.
    </audio>

    <br/><br/>

    <div class="p-5">
        <span id="text-first">
            Le narval ou licorne des mers est une espèce de cétacés de
            la famille des Monodontidae vivant dans l'océan Arctique. Le mâle possède une
            unique défense torsadée, issue de l'incisive supérieure gauche qui peut
            mesurer jusqu'à 3 mètres de long. L'animal lui-même a une longueur de 4 à 5 mètres.
            La « défense » du narval est aujourd'hui analysée comme un organe sensoriel,
            dont les riches terminaisons nerveuses permettent à l'animal de percevoir les
            différences de pression, de salinité, ou de température.
        </span>
    </div>

    <div class="row border">
        <div id="narval1" class="col-6 img-parallax border-right"></div>
        <img id="narval1-bis" class="col-6 p-0 img-fluid" src="img/narval1.jpg" />

        <div id="text-narval1" class="col align-self-center text-left-parallax">
            <div class="p-5">
                Le narval vivrait jusqu'à 50 ans.
                Les mâles atteignent la maturité sexuelle entre 8 et 9 ans et les femelles
                entre 4 et 7 ans.
                La période de gestation est d'environ 15 mois.
            </div>
        </div>
    </div>

    <div class="row">
        <div id="text-narval2" class="col align-self-center text-right-parallax">
            <div class="p-5">
                La couleur du narval change selon son âge : à la naissance il est bleu gris ou
                brun, à l'âge juvénile il sera bleu noir ; adulte il sera noir.
                Ensuite, plus le narval vieillira, plus sa peau se couvrira de taches blanches
                au point de devenir presque blanche.
            </div>
        </div>
        <div id="narval2" class="col-6 img-parallax border-left"></div>
        <img id="narval2-bis" class="col-6 p-0 img-fluid" src="img/narval2.jpg" />
    </div>

    <hr class="m-0">

    <p class="p-5">
        <!-- rque : on a besoin de cette div car si on cache le texte (fadeOut) on perd le offset -->
        <span id="text-last-offset"></span>

        <span id="text-last">
            La légende de la licorne date de la Grèce antique. La corne des rhinocéros était
            vendue comme étant une corne de licorne, jusqu'à ce que l'on découvre celle des
            narvals : longue et torsadée. La dent du narval a beaucoup contribué à forger
            l'image que l'on se donnait de la licorne au Moyen Âge. Les navigateurs,
            surtout les nordiques (et notamment les danois), revendaient cette corne pour
            plusieurs fois son poids en or.
            <br/> En 1576, Élisabeth Ire d'Angleterre aurait payé une corne 10 000 livres,
            soit 600 000 euros actuels ou la valeur d'un château à l'époque. Les gens
            attribuaient des vertus à ces cornes, telle la faculté de neutraliser les
            poisons, et se faisaient donc faire des gobelets dans cet ivoire.
            Il a fallu attendre 1704 pour que le lien soit établi avec le narval.
        </span>
    </p>

    <div id="light-gallery" class="row mx-5 mb-5">
        <div class="col-2 p-0">
            <a class="item" href="img/narval1.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval1.jpg" />
            </a>
        </div>
        <div class="col-2 p-0">
            <a class="item" href="img/narval2.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval2.jpg" />
            </a>
        </div>
        <div class="col-2 p-0">
            <a class="item" href="img/narval3.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval3.jpg" />
            </a>
        </div>
        <div class="col-2 p-0">
            <a class="item" href="img/narval4.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval4.jpg" />
            </a>
        </div>
        <div class="col-2 p-0">
            <a class="item" href="img/narval5.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval5.jpg" />
            </a>
        </div>
        <div class="col-2 p-0">
            <a class="item" href="img/narval6.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval6.jpg" />
            </a>
        </div>
        <div class="col-2 p-0">
            <a class="item" href="img/narval7.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval7.jpg" />
            </a>
        </div>
        <div class="col-2 p-0">
            <a class="item" href="img/narval8.jpg">
                <img class="img-fluid gallery-img-size" src="img/narval8.jpg" />
            </a>
        </div>
    </div>

    <script type="text/javascript">
        //Attention : sans jQuery(document).ready on aurait des erreurs car lightGallery serait chargé avant jQuery
        jQuery(document).ready(function($){
            $('#light-gallery').lightGallery({
                selector: '.item',
                download: false//option de téléchargement des images désactivée
            });

            /* gestion de l'audio */
            var audio = document.getElementById("audio");
            $('#audio-icon').click(function () {
                if (audio.paused) {
                    audio.play();
                } else {
                    audio.pause();
                }

                //change l'icon de l'audio selon s'il est activé ou non
                $(this).toggleClass('fa-volume-up');
                $(this).toggleClass('fa-volume-off');
            });
        });

        $("#title").fadeIn(800);
        $("#text-first").slideToggle(1000);

        //lorsque l'user scroll
        $(window).scroll(function() {
            //position du scroll par rapport à la position de la div
            if ($(window).scrollTop() >= $("#text-last-offset").offset().top -500) {
                $("#text-last").fadeIn(1000);//affiche le texte
            } else {
                $("#text-last").fadeOut(200);
            }
        });

        /* parallax */
        $(".img-parallax").paroller({
            factor: 0.3,/* intensité de l'effet parallaxe */
            type: 'background',
            direction: 'vertical'
        });

        $('.text-right-parallax').paroller({
            factor: 0,
            factorMd: -0.2,
            factorLg: -0.2,
            factorXl: -0.2,
            type: 'foreground',
            direction: 'horizontal'
        });

        $('.text-left-parallax').paroller({
            factor: 0,
            factorMd: 0.2,
            factorLg: 0.2,
            factorXl: 0.2,
            type: 'foreground',
            direction: 'horizontal'
        });
    </script>
@endsection

