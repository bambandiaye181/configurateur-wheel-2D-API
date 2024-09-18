
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<div style="margin:60px 0 16px;width:100%;max-width:1200px;display:grid;grid-gap:16px;grid-template-columns:repeat(3,MINMAX(360px,1fr))">
    <div style="position:relative;
                                display:grid;
                                padding:10px;
                                min-height:600px;
                                overflow:hidden;
                                border-radius:16px;
                                background:rgba(231,231,235,.3);
                                background-blend-mode:luminosity;
                                -webkit-backdrop-filter:blur(25px);
                                backdrop-filter:blur(25px);
                                transition:all .3s;">
<div class="slider-container">
    <div class="slider">


        <!-- Slide 1 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 1</div>
            <div class="slide-header" style="padding-left: 80px;">Choix du véhicule</div>
            <div style="background:rgb(231 231 231 / 30%);border-radius: 15px;margin-bottom: 15px;padding-top: 10px">

                <div class="slide-header">Année : <span id="year">-</span></div>
                <div class="container" id="container1">
                    <div class="box mySwiper">
                        <div class="content swiper-wrapper" id="yearDiv">

                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 1</div>
            <div class="slide-header" style="padding-left: 80px;">Choix du véhicule</div>
            <div style="background:rgb(231 231 231 / 30%);border-radius: 15px;padding-top: 10px">


                <div class="slide-header">Marque : <span id="make-name">-</span></div>
                <div class="container" id="container2">
                    <div class="box mySwiper">
                        <div class="content swiper-wrapper" id="cards-container">
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 1</div>
            <div class="slide-header" style="padding-left: 80px;">Choix du véhicule</div>
            <div style="background:rgb(231 231 231 / 30%);border-radius: 15px;margin-bottom: 15px;padding-top: 10px">
                <div class="slide-header">Modèle : <span id="model">-</span></div>
                <div class="container" id="container3">
                    <div class="box mySwiper">
                        <div class="content swiper-wrapper" id="modelDiv">

                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 4 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 1</div>
            <div class="slide-header" style="padding-left: 80px;">Choix du véhicule</div>
            <div style="background:rgb(231 231 231 / 30%);border-radius: 15px;padding-top: 10px">
                <div class="slide-header">Motorisation : <span id="motor">-</span></div>
                <div class="container" id="container4">
                    <div class="box mySwiper">
                        <div class="content swiper-wrapper" id="motorDiv">
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 5 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 2</div>
            <div class="slide-header" style="padding-left: 80px;">Choix des paramètres </div>
            <div class="container" style="margin-top: 150px">
                <div class="card-content" style="margin-left: 35px;">
                    <button style="--clr: #ff0f5b; height: 50px; width: 250px" class="param-option" onclick="selectParam(this, 'free')">
                        PARAMÈTRES LIBRES
                        <span class="badge" data-tooltip="Nous vous donnons les commandes, vous êtes
totalement libre et responsable dans le choix des paramètres">?</span>
                    </button>
                    <hr style="border: 0; height: 2px; background-color: #c9c9c9; width: 20%;margin-left: 20px;margin-top: 40px;">
                    <button style="--clr: #ff0f5b; height: 50px; width: 250px" class="param-option" onclick="selectParam(this, 'recommanded')"> PARAMÈTRES CONSEILLÉS
                        <span class="badge" data-tooltip="Nous vous proposons le plus large choix de paramétrage adapté pour vous ainsi que votre véhicule">?</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Slide 6 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 2</div>
            <div class="slide-header" style="padding-left: 80px;">Choix des paramètres </div>
            <div class="container" id="container5">
                <div class="box mySwiper">
                    <div class="" id="modifDiv">


                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- <div class="container" style="margin-top: 150px">
                 <div class="card-content" style="margin-left: 35px;">
                     <button style="--clr: #ff0f5b; height: 50px; width: 150px" class="param-option" onclick="selectParam(this, 'free')">
                         PARAMÈTRES LIBRES
                         <span style="text-transform: lowercase;">description</span>
                         <span class="badgemodifright" >un</span>
                         <span class="badgemodifleft" >deux</span>
                     </button>
                 </div>
             </div>-->
        </div>
        <!-- Slide 7 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 2</div>
            <div class="slide-header" style="padding-left: 80px;">Choix des paramètres </div>
            <div class="container" style="margin-top: 150px;margin-left: -50px;">
                <div class="card-content" style="margin-left: 35px;">
                    <table>
                        <tr>
                            <td>Factory Size </td>
                            <td id="tire_full"></td>
                        </tr>
                        <tr>
                            <td><span>Taille :</span></td>
                            <td>
                                <select  class="dynamic-select5" id="rim_diameter">
                                    <!-- Ajoutez d'autres options si nécessaire -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Alesage Central :</span></td>
                            <td>
                                <select  class="dynamic-select5" id="centre_bore">
                                    <!-- Ajoutez d'autres options si nécessaire -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Entraxe :</span></td>
                            <td>
                                <select  class="dynamic-select5" id="front_rim">
                                    <!-- Ajoutez d'autres options si nécessaire -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Déport :</span></td>
                            <td>
                                <select  class="dynamic-select5" id="rim_offset">
                                    <!-- Ajoutez d'autres options si nécessaire -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Taille de Filletage :</span></td>
                            <td>
                                <select  class="dynamic-select5" id="thread_size">
                                    <!-- Ajoutez d'autres options si nécessaire -->
                                </select>
                            </td>
                        </tr>

                    </table>
                    <br>

                    <div class="checkbox">
                        <span style="margin-right: 200px;">Conserver les mêmes paramètres <br>avant et arrière</span>
                        <input type="checkbox" id="conserver" >
                    </div>

                </div>
            </div>
        </div>
        <!-- Slide 8 -->
        <div class="slide">
            <div class="slide-header" style="padding-left: 130px;">ETAPE 3</div>
            <div class="slide-header" style="padding-left: 80px;">Configuration</div>
            Modèle Jante : <br>

            <div class="wheel-selection">
                <!--<div class="wheel-header">Jantes</div>-->
                <div class="wheel-description" id="wheel-description">-</div>
                <div class="wheel-options">
                    <div class="wheel-option-container">
                        <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.29V2-1-scaled-e1718040438520.jpg" alt="Wheel 1" class="wheel-option" onclick="selectWheel(this, 'PP-O1 : LUTECE')">
                    </div>
                    <div class="wheel-option-container">
                        <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.23-scaled.jpg" alt="Wheel 2" class="wheel-option" onclick="selectWheel(this, 'PP-O2 : BOHEME')">
                    </div>
                    <div class="wheel-option-container">
                        <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.28v2-scaled.jpg" alt="Wheel 3" class="wheel-option" onclick="selectWheel(this, 'PP-O3 : SEINE')">
                    </div>
                    <div class="wheel-option-container">
                        <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.30v2-scaled.jpg" alt="Wheel 4" class="wheel-option" onclick="selectWheel(this, 'PP-O4 : GALION')">
                    </div>
                </div>
            </div>
            <br>
            <br>
            Couleur : <br>
            <select id="colorSelect" onchange="changeVehiculeColor(this.value)" class="dynamic-select5 full-width">
                <option value="">Couleur</option>
            </select><br><br>

        </div>

    </div>
    <div class="controls">
        <button class="control-btn" id="prevBtn">❮ Précédent</button>
        <button class="control-btn" id="nextBtn">Suivant ❯</button>
    </div>
</div>

</div>


    <div style="position:relative;
                            display:grid;
                            justify-items:center;
                            padding:40px;
                            min-height:600px;
                            align-content:start;
                            overflow:hidden;
                            border-radius:16px;
                            background:rgba(231,231,235,.3);
                            background-blend-mode:luminosity;
                            -webkit-backdrop-filter:blur(25px);
                            backdrop-filter:blur(25px);
                            transition:all .3s;width: 850px;">
        <img src="https://configurator.wheel-size.com/generated-media/2023/11/27/chevrolet-blazer-2ac5bdc873d448f7bf57a67f58a346aa.png" id="vehicleImage" alt="Image">
    </div>
</div>
<style>
    
        .slider-container {
            width: 100%;
            max-width: 1200px;
            margin: 60px auto;
            overflow: hidden;
            position: relative;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 300%;
        }

        .slide {
            min-width: 100%;
            /*box-sizing: border-box;
            padding: 10px;
            min-height: 600px;
            border-radius: 16px;
            border: 1px solid var(--natural-palette-300, #E7E7EB);
            background: rgba(231, 231, 235, 0.3);
            background-blend-mode: luminosity;
            -webkit-backdrop-filter: blur(25px);
            backdrop-filter: blur(25px);*/
        }

        .slide-header {
            color: #3c3f5b;
            font-size: 16px;
            font-weight: 700;
            line-height: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 16px;
            margin-left: 30px;
        }

        .controls {
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            margin-top:150px;
        }

        .control-btn {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
        }

        .full-width {
            width: 30%;
        }

        .wheel-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px; /* Espace entre les images */
            justify-items: center;
            max-width: 30%;
        }

        .wheel-option-container {
            /*width: 100px;  Largeur des divs contenant les images */
            /*height: 100px;  Hauteur des divs contenant les images */
            /*border-radius: 50%; /* Pour créer des cercles */
            /*overflow: hidden; /* Pour cacher les parties d'image dépassant du cercle */
        }

        .wheel-option {
            width: 100%; /* Ajuster la largeur de l'image au conteneur */
            height: 100%; /* Ajuster la hauteur de l'image au conteneur */
            object-fit: cover; /* Redimensionner l'image pour remplir le conteneur */
        }


        .wheel-header {
            font-size: 18px;
            font-weight: bold;
        }

        .wheel-description {
            font-size: 14px;
            margin-bottom: 16px;
        }

        .wheel-options {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .wheel-option {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .wheel-option:hover {
            transform: scale(1.1);
        }

        .wheel-option.selected {
            border: 2px solid red;
            transform: scale(1.1);
        }

        .wheel-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-gap: 10px;
            justify-items: center;
            align-items: center;
        }

        .year-option {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .year-option:hover {
            transform: scale(1.1);
        }

        .year-option.selected {
            border: 2px solid #000000;
            transform: scale(1.1);
        }

        .make-option.selected {
            border: 2px solid #ff0000;
            transform: scale(1.1);
        }

        .model-option {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .model-option:hover {
            transform: scale(1.1);
        }

        .model-option.selected {
            border: 2px solid #000000;
            transform: scale(1.1);
        }

        .motor-option {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .motor-option:hover {
            transform: scale(1.1);
        }

        .motor-option.selected {
            border: 2px solid #000000;
            transform: scale(1.1);
        }

        .modif-option {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .modif-option:hover {
            transform: scale(1.1);
        }

        .modif-option.selected {
            border: 2px solid #000000;
            transform: scale(1.1);
        }

        .param-option {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .param-option:hover {
            transform: scale(1.1);
        }

        .param-option.selected {
            border: 2px solid #000000;
            transform: scale(1.1);
        }

        .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 50%;
            background-color: #fff;
            color: #ff0f5b;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .badge:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            top: 100%;
            left: -250%;
            transform: translate(-50%, -5px);
            background-color: #000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 1;
            display: block;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
            text-transform: lowercase;
        }

        .badge:hover::after {
            opacity: 1;
            width: 200px;
        }

        td, th {
            border: 1px solid #e4e7e8;
            padding: 4px 4px 20px 40px;
            /* margin-right: 10px; */
        }

        .badgemodifright {
            position: absolute;
            top: -10px;
            right: -10px;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 25%;
            background-color: #fff;
            color: #ff0f5b;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .badgemodifleft {
            position: absolute;
            top: -10px;
            left: -10px;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 25%;
            background-color: #fff;
            color: #ff0f5b;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .container {
            position: relative;
            /*max-width: 300px;*/
           margin-left: 0;
       }

       .container .box {
       padding: 50px 10px;
       overflow: hidden;
       }

       .image img {
       width: 50px;
       height: 50px;
       object-fit: cover;
       border-radius: 50%;
       opacity: 1;
       border: 3px solid #fff;
       }

       .card:hover {
       border-radius: 50%;
       }


       .card .card-content {
       position: relative;
       display: flex;
       align-items: center;
       flex-direction: column;
       }

       .card-content .car-name {
       display: flex;
       align-items: center;
       flex-direction: column;
       margin-top: 10px;
       color: #333;
       }

       .car-name .name {
       font-size: 20px;
       font-weight: 600;
       }

       .car-name .profession {
       font-size: 15px;
       font-weight: 500;
       }

       .card-content button {
           position: relative;
           padding: 3px 3px;
           /* background: var(--clr); */
            border: none;
            outline: none;
            border-radius: 10px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, .25);
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            font-weight: 50;
            opacity: .75;
            margin-top: 30px;
            font-size: 10px;
        }



        .box .swiper-button-next,
        .box .swiper-button-prev {
        color: #666;
        }

        .box .swiper-button-next {
        right: 0;
        }

        .box .swiper-button-prev {
        left: 0;
        }

        .box .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: #666;
        }
    </style>
     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    // Définir la fonction onPageLoad
    function onPageLoad() {
        console.log("La page est complètement chargée.");
        fetchYear();
    }

    // Ajouter un écouteur d'événement pour déclencher onPageLoad lors du chargement de la page
    document.addEventListener('DOMContentLoaded', onPageLoad);

</script>
<script>
    // variable for formulaire
    let counter = 0;
    let year_selected;
    let model_selected;
    let vehicule_selected;
    let template_selected;
    let modification_selected;
    let wheelOption_selected;
    let wheel_selected;
    let param_selected;


    const slider = document.querySelector('.slider');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentSlide = 0;

    prevBtn.addEventListener('click', () => {
        if (currentSlide > 0) {
            currentSlide--;
            updateSliderPosition();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentSlide < 8) {
            currentSlide++;
            updateSliderPosition();
        }
    });

    function updateSliderPosition() {
        const slideWidth = document.querySelector('.slide').clientWidth;
        slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }



    function fetchYear(){
        let apiUrl = "https://api.wheel-size.com/v2/configurator/years/?user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";

        if (counter <= 1){
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Process the retrieved data and populate select fields
                    const container = document.getElementById('container1');
                    data.data.forEach(function(item) {
                        //option.value = item.slug;
                        //option.textContent = item.name;
                        // Create the card element
                        // Create the main div with class "card swiper-slide"
                        let cardDiv = document.createElement("div");
                        cardDiv.className = "card swiper-slide";

                        // Create the inner div with class "card-content"
                        let cardContentDiv = document.createElement("div");
                        cardContentDiv.className = "card-content";

                        // Create the button element
                        let button = document.createElement("button");
                        button.className = "year-option";
                        button.style = "--clr: #ff0f5b; height: 50px; width: 50px";
                        let name = item.name;
                        button.setAttribute("onclick", "selectYear(this, \'" + name + "\')");
                        button.textContent = item.name;

                        // Append the button to the inner div
                        cardContentDiv.appendChild(button);

                        // Append the inner div to the main div
                        cardDiv.appendChild(cardContentDiv);

                        // Append the card to the container
                        document.getElementById('yearDiv').appendChild(cardDiv);

                        container.style.maxWidth = '470px';
                    });



                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                });
        }else{

        }

    }
    function fetchMake(selectedValue){
        year_selected = selectedValue;
        let apiUrl = "https://api.wheel-size.com/v2/configurator/makes/?year="+year_selected+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    // Process the retrieved data and populate select fields
                    const container = document.getElementById('container2');
                    data.data.forEach(function(item) {
                        //option.value = item.slug;
                        //option.textContent = item.name;
                        // Create the card element
                        const card = document.createElement('div');
                        card.className = 'card swiper-slide';

                        // Create the card content
                        const cardContent = document.createElement('div');
                        cardContent.className = 'card-content';

                        // Create the image container
                        const imageContainer = document.createElement('div');
                        imageContainer.className = 'image';

                        // Create the image element
                        const img = document.createElement('img');

                        img.src = item.logo;
                        img.className = 'make-option';
                        img.alt = '';
                        img.setAttribute("onclick", "selectMake(this, \'" + item.slug + "\', \'" + item.name + "\')");

                        // Append the image to the image container
                        imageContainer.appendChild(img);
                        // Create the car name container
                        const carName = document.createElement("div");
                        carName.className = "car-name";

                        // Create the span for the name
                        const nameSpan = document.createElement("span");
                        nameSpan.className = "name";
                        nameSpan.textContent = item.name;

                        // Append the name span to the car name container
                        carName.appendChild(nameSpan);

                        // Append the image container to the card content
                        cardContent.appendChild(imageContainer);
                        cardContent.appendChild(carName);

                        // Append the card content to the card
                        card.appendChild(cardContent);

                        // Append the card to the container
                        document.getElementById('cards-container').appendChild(card);

                        container.style.maxWidth = '470px';
                    });



                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                });


    }
    function fetchModel(selectedValue){
        model_selected = selectedValue;
        let apiUrl = "https://api.wheel-size.com/v2/configurator/models/?make="+model_selected+"&year="+year_selected+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";



        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                const container = document.getElementById('container3');

                data.data.forEach(function(item) {
                    //option.value = item.slug;
                    //option.textContent = item.name;
                    // Create the card element
                    // Create the main div with class "card swiper-slide"
                    let cardDiv = document.createElement("div");
                    cardDiv.className = "card swiper-slide";

                    // Create the inner div with class "card-content"
                    let cardContentDiv = document.createElement("div");
                    cardContentDiv.className = "card-content";

                    // Create the button element
                    let button = document.createElement("button");
                    button.className = "model-option";
                    button.style = "--clr: #ff0f5b; height: 50px; width: 60px";

                    button.setAttribute("onclick", "selectModel(this, \'" + item.slug + "\', \'" + item.name + "\')");
                    button.textContent = item.name;

                    // Append the button to the inner div
                    cardContentDiv.appendChild(button);

                    // Append the inner div to the main div
                    cardDiv.appendChild(cardContentDiv);

                    // Append the card to the container
                    document.getElementById('modelDiv').appendChild(cardDiv);

                    container.style.maxWidth = '470px';
                });



            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }
    function fetchTemplatesVehicule(selectedValue){
        vehicule_selected = selectedValue.toLowerCase();
        year = year_selected.toLowerCase();
        model = model_selected.toLowerCase();

        let apiUrl = "https://api.wheel-size.com/v2/configurator/templates/?make="+model+"&model="+vehicule_selected+"&year="+year+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";
        console.log(apiUrl);
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                const container = document.getElementById('container4');
                data.data.forEach(function(item) {
                    //option.value = item.slug;
                    //option.textContent = item.name;
                    // Create the card element
                    // Create the main div with class "card swiper-slide"
                    let cardDiv = document.createElement("div");
                    cardDiv.className = "card swiper-slide";

                    // Create the inner div with class "card-content"
                    let cardContentDiv = document.createElement("div");
                    cardContentDiv.className = "card-content";

                    // Create the button element
                    let button = document.createElement("button");
                    button.className = "motor-option";
                    button.style = "--clr: #ff0f5b; height: 50px; width: 100px";
                    button.setAttribute("onclick", "selectMotor(this, \'" + item.body.name + "\',\'" + item.id + "\')");
                    button.textContent = item.vehicle_data.trim +" "+item.vehicle_data.year+" "+item.vehicle_data.body+" "+item.vehicle_data.wheels;

                    // Append the button to the inner div
                    cardContentDiv.appendChild(button);

                    // Append the inner div to the main div
                    cardDiv.appendChild(cardContentDiv);

                    // Append the card to the container
                    document.getElementById('motorDiv').appendChild(cardDiv);

                    container.style.maxWidth = '470px';
                });



            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }
    function fetchModification(){
        //vehicule_selected = vehicule_selected.toLowerCase();
        //year = year_selected.toLowerCase();
        //model = model_selected.toLowerCase();

        let apiUrl = "https://api.wheel-size.com/v2/modifications/?make="+model_selected+"&model="+vehicule_selected+"&year="+year_selected+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "https://api.wheel-size.com/v2/modifications/?make=audi&model=a6&year=2023&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";
        console.log(apiUrl);
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                const container = document.getElementById('container5');
                data.data.forEach(function(item) {
                    //option.value = item.slug;
                    //option.textContent = item.name;
                    // Create the card element
                    // Create the main div with class "card swiper-slide"
                    let cardDiv = document.createElement("div");
                    cardDiv.className = "card swiper-slide";

                    // Create the inner div with class "card-content"
                    let cardContentDiv = document.createElement("div");
                    cardContentDiv.className = "card-content";

                    // Create the button element
                    let button = document.createElement("button");
                    button.className = "modif-option";
                    button.style = "--clr: #ff0f5b; height: 50px; width: 250px";
                    button.setAttribute("onclick", "selectModification(this, \'" + item.slug + "\')");

                    let spanTrimLevels = document.createElement("span");
                        spanTrimLevels.style = "text-transform: lowercase;";
                        spanTrimLevels.textContent = item.trim_levels;

                    let spanType = document.createElement("span");
                        spanType.className = "badgemodifleft";
                        spanType.textContent = item.engine.type;

                    let spanPower = document.createElement("span");
                    spanPower.className = "badgemodifright";
                    spanPower.textContent = item.engine.power.hp+" HP";

                    let br = document.createElement("br");

                    button.textContent = item.name;

                    // Append the span to the inner button
                    button.appendChild(br);
                    button.appendChild(spanTrimLevels);
                    button.appendChild(spanType);
                    button.appendChild(spanPower);

                    // Append the button to the inner div
                    cardContentDiv.appendChild(button);

                    // Append the inner div to the main div
                    cardDiv.appendChild(cardContentDiv);

                    // Append the card to the container
                    document.getElementById('modifDiv').appendChild(cardDiv);

                    container.style.maxWidth = '470px';
                });



            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }

    function fetchWheelOption() {


        // Replace NEW_API_URL with your actual API endpoint

        //let apiUrl = "https://api.wheel-size.com/v2/configurator/templates/"+template_selected+"/fit/?url="+imgUrl+"&user_key=a77861354fca6475fa1ec64b00bed407";
        let apiUrl = "https://api.wheel-size.com/v2/search/by_model/?make="+model_selected+"&model="+vehicule_selected+"&modification="+modification_selected+"&year="+year_selected+"&user_key=a77861354fca6475fa1ec64b00bed407";

        console.log(apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                console.log(data.data[0].wheels[0].front.rim_diameter);
                    const select = document.getElementById('rim_diameter');
                    select.innerHTML = ""; // Clear previous options
                    let option = document.createElement("option");
                    option.value = data.data[0].wheels[0].front.rim_diameter; // Use the slug as the value
                    option.textContent = data.data[0].wheels[0].front.rim_diameter+"\"";
                    select.appendChild(option);

                    const select1 = document.getElementById('centre_bore');
                    select1.innerHTML = ""; // Clear previous options
                    let option1 = document.createElement("option");
                    option1.value = data.data[0].technical.centre_bore; // Use the slug as the value
                    option1.textContent = data.data[0].technical.centre_bore;
                    select1.appendChild(option1);

                    const select2 = document.getElementById('front_rim');
                    select2.innerHTML = ""; // Clear previous options
                    let option2 = document.createElement("option");
                    option2.value = data.data[0].wheels[0].front.rim; // Use the slug as the value
                    option2.textContent = data.data[0].wheels[0].front.rim;
                    select2.appendChild(option2);

                    const select3 = document.getElementById('rim_offset');
                    select3.innerHTML = ""; // Clear previous options
                    let option3 = document.createElement("option");
                    option3.value = data.data[0].wheels[0].front.rim_offset; // Use the slug as the value
                    option3.textContent = data.data[0].wheels[0].front.rim_offset;
                    select3.appendChild(option3);

                    const select4 = document.getElementById('thread_size');
                    select4.innerHTML = ""; // Clear previous options
                    let option4 = document.createElement("option");
                    option4.value =  data.data[0].technical.wheel_fasteners.thread_size; // Use the slug as the value
                    option4.textContent = data.data[0].technical.wheel_fasteners.thread_size;
                    select4.appendChild(option4);

                    const select5 = document.getElementById('tire_full');
                    select5.innerHTML = ""; // Clear previous options
                    let option5 = document.createElement("option");
                    option5.value =  data.data[0].wheels[0].front.tire_full; // Use the slug as the value
                    option5.textContent = data.data[0].wheels[0].front.tire_full;
                    select5.appendChild(option5);


            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }
    function fetchVehiculeColor(selectedValue) {

        let wheelValue = selectedValue;
        console.log(wheelValue);
        let imgUrl = "";
        if(wheelValue == "PP-O1 : LUTECE") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }else if(wheelValue == "PP-O2 : BOHEME") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/vlcsnap-2023-11-27-22h54m31s309-removebg-preview.png";
        }else if(wheelValue == "PP-O3 : SEINE") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i7-removebg-preview.png";
        }else if(wheelValue == "PP-O4 : GALION") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }

        // Replace NEW_API_URL with your actual API endpoint

        let apiUrl = "https://api.wheel-size.com/v2/configurator/templates/"+template_selected+"/fit/?url="+imgUrl+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";
        console.log(selectedValue);
        console.log(template_selected);
        console.log(apiUrl);

        let requestOptions = {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            }
        };

        let responseData = fetch(apiUrl, requestOptions).then(response => response.json());
        fetch(apiUrl, requestOptions)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                let selectFields = document.getElementsByClassName("dynamic-select5");

                for (let i = 0; i < selectFields.length; i++) {
                    let select = selectFields[i];
                    select.innerHTML = ""; // Clear previous options
                    let option = document.createElement("option");
                    option.textContent = "Couleur";
                    option.value = "";
                    select.appendChild(option);

                    let option1 = document.createElement("option");
                    option1.value = data.color.slug; // Use the slug as the value
                    option1.textContent = data.color.name +" "+data.color.slug;
                    select.appendChild(option1);

                    let vehicleImage = document.getElementById("vehicleImage");
                    vehicleImage.src = data.image;
                }
            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }
    function changeVehiculeColor(color) {
        let wheelValue = wheel_selected;
        let imgUrl = "";
        if(wheelValue == "PP-O1 : LUTECE") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }else if(wheelValue == "PP-O2 : BOHEME") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/vlcsnap-2023-11-27-22h54m31s309-removebg-preview.png";
        }else if(wheelValue == "PP-O3 : SEINE") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i7-removebg-preview.png";
        }else if(wheelValue == "PP-O4 : GALION") {
            imgUrl = "https://paris-performance.com/wp-content/uploads/2023/11/i1t.png";
        }

        // Replace NEW_API_URL with your actual API endpoint
        let apiUrl = "https://api.wheel-size.com/v2/configurator/templates/"+template_selected+"/fit/?color="+color+"&url="+imgUrl+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";
        console.log(apiUrl);

        let requestOptions = {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            }
        };

        let responseData = fetch(apiUrl, requestOptions).then(response => response.json());
        fetch(apiUrl, requestOptions)
            .then(response => response.json())
            .then(data => {
                // Process the retrieved data and populate select fields
                let selectFields = document.getElementsByClassName("dynamic-select5");
                let vehicleImage = document.getElementById("vehicleImage");
                vehicleImage.src = data.image;

            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }

    function selectYear(element, year) {

        resetSelect('.year-option');
        resetSelect('.make-option');

        element.classList.add('selected');
        document.getElementById('year').textContent = year;
        document.getElementById('make-name').innerHTML = "";
        fetchMake(year);
    }

    function selectMake(element, slug,makeName) {
        resetSelect('.make-option');
        resetSelect('.model-option');

        element.classList.add('selected');
        document.getElementById('make-name').textContent = makeName;

        fetchModel(slug);
    }


    function selectModel(element, slug,modelName) {

        console.log(slug);
        resetSelect('.model-option');
        resetSelect('.motor-option');

        element.classList.add('selected');
        document.getElementById('model').textContent = modelName;
        fetchTemplatesVehicule(slug);
    }

    function selectMotor(element, motor,id) {
        resetSelect('.motor-option');
        element.classList.add('selected');
        document.getElementById('motor').textContent = motor;
        template_selected = id;
        fetchModification();
    }

    function selectModification(element, id) {
        resetSelect('.modif-option');
        element.classList.add('selected');
        //document.getElementById('motor').textContent = motor;
        modification_selected = id;
        console.log(id);
        fetchWheelOption();
    }

    function selectWheel(element, wheelName) {
        resetSelect('.wheel-option');
        element.classList.add('selected');
        document.getElementById('wheel-description').textContent = wheelName;
        fetchVehiculeColor(wheelName);
        wheel_selected = wheelName;
    }

    function resetSelect(option) {
        const optionType = document.querySelectorAll(option);
        optionType.forEach(option => option.classList.remove('selected'));

    }

    /*function selectParam(element, param) {
        console.log(param);
        element.classList.add('selected');
        param_selected = param;
        
    }*/
    function selectParam(button, param) {
        // Deselect all other buttons
        const allButtons = document.querySelectorAll('.param-option');
        for (const btn of allButtons) {
            btn.classList.remove('selected'); // Assuming 'selected' is the class used to indicate selection
        }

        // Select the current button
        button.classList.add('selected');

        // Handle the selection based on the param value (e.g., update a state, trigger an event)
        if (param === "free") {
            console.log(param);
            param_selected = param;
        } else if (param === "recommanded") {
            console.log(param);
            param_selected = param;
        }
    }

</script>
<script>
    let swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 40,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
</script>
