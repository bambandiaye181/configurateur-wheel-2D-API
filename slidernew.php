
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   

<!-- <div class="container">
    <div class="box mySwiper">
      <div class="content swiper-wrapper">
        <div class="card swiper-slide">
          <div class="card-content">
            <div class="image">
              <img src="https://picsum.photos/200/300" alt="">
            </div>
            <div class="name-profession">
              <span class="name">Lucas Franklin</span>
            </div>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card-content">
            <div class="image">
              <img src="https://picsum.photos/200/300" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Flora Ocean</span>
            </div>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card-content">
            <div class="image">
              <img src="https://picsum.photos/200/300" alt="">
            </div>

            <div class="name-profession">
              <span class="name">John Kendric</span>
            </div>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card-content">
            <div class="image">
              <img src="https://picsum.photos/200/300" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Kylian Onyx</span>
            </div>

          </div>
        </div>

        <div class="card swiper-slide">
          <div class="card-content">
            <div class="image">
              <img src="https://picsum.photos/200/300" alt="">
            </div>

            <div class="name-profession">
              <span class="name">Zayla Clover</span>
            </div>
          </div>
        </div>

        
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
</div> -->



<div style="margin:60px 0 16px;width:100%;max-width:1200px;display:grid;grid-gap:16px;grid-template-columns:repeat(3,MINMAX(360px,1fr))">
    <div style="position:relative;
                                display:grid;
                                padding:40px;
                                min-height:600px;
                                overflow:hidden;
                                border-radius:16px;
                                border:1px solid var(--natural-palette-300,#E7E7EB);
                                background:rgba(231,231,235,.3);
                                background-blend-mode:luminosity;
                                -webkit-backdrop-filter:blur(25px);
                                backdrop-filter:blur(25px);
                                transition:all .3s">
        <div class="slider-container">
            <div class="slider">
                <!-- Slide 1 -->
                <div class="slide">
                    <div class="slide-header">Sélectionnez votre véhicule</div>
                    Modèle Jante : <br>
                    <select id="wheelSelect" class="full-width">
                        <option value="pp-01">PP-01</option>
                        <option value="pp-02">PP-02</option>
                        <option value="pp-03">PP-03</option>
                        <option value="pp-04">PP-04</option>
                    </select><br><br>

                    <div class="wheel-selection">
                        <div class="wheel-header">Modèle de Jantes </div>
                        <div class="wheel-description" id="wheel-description">Choississez un modéle </div>
                        <div class="wheel-options">
                            <img src="https://picsum.photos/200/300" alt="Wheel 1" class="wheel-option" onclick="selectWheel(this, 'PP-01')">
                            <img src="https://picsum.photos/200/300" alt="Wheel 2" class="wheel-option" onclick="selectWheel(this, 'PP-02')">
                            <img src="https://picsum.photos/200/300" alt="Wheel 3" class="wheel-option" onclick="selectWheel(this, 'PP-03')">
                            <img src="https://picsum.photos/200/300" alt="Wheel 4" class="wheel-option" onclick="selectWheel(this, 'PP-04')">
                        </div>
                    </div>

                <!-- Slide 2 -->
                <div class="slide">
                    Année : <br>
                    <select id="yearSelect" onchange="fetchMakes(this.value)" onclick="fetchYear()" class="dynamic-select1 full-width">
                        <option value="">Année</option>
                    </select><br><br>

                    Marque : <br>
                    <select id="makeSelect" onchange="fetchModels(this.value)" class="dynamic-select2 full-width">
                        <option value="">Marque</option>
                    </select><br><br>
                </div>

                <!-- Slide 3 -->
                <div class="slide">
                    Modèle : <br>
                    <select id="modelSelect" onchange="fetchTemplatesVehicule(this.value)" class="dynamic-select3 full-width">
                        <option value="">Modèle</option>
                    </select><br><br>

                    Véhicule : <br>
                    <select id="vehiculeSelect" onchange="fetchVehiculeColor(this.value)" class="dynamic-select4 full-width">
                        <option value="">Véhicule template</option>
                    </select><br><br>

                    Couleur : <br>
                    <select id="colorSelect" onchange="changeVehiculeColor(this.value)" class="dynamic-select5 full-width">
                        <option value="">Couleur</option>
                    </select><br><br>
                </div>
            </div>
            <div class="controls">
                <button class="control-btn" id="prevBtn">❮</button>
                <button class="control-btn" id="nextBtn">❯</button>
            </div>
        </div>
    </div>

    <!-- <div style="position:relative;
                            display:grid;
                            justify-items:center;
                            padding:40px;
                            min-height:600px;
                            align-content:start;
                            overflow:hidden;
                            border-radius:16px;
                            border:1px solid var(--natural-palette-300,#E7E7EB);
                            background:rgba(231,231,235,.3);
                            background-blend-mode:luminosity;
                            -webkit-backdrop-filter:blur(25px);
                            backdrop-filter:blur(25px);
                            transition:all .3s;width: 850px;">
                            <img src="https://configurator.wheel-size.com/generated-media/2023/11/27/chevrolet-blazer-2ac5bdc873d448f7bf57a67f58a346aa.png" id="vehicleImage" alt="Image">
    </div> -->
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
        padding: 40px;
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
    }

    .controls {
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        margin-top:30px;
    }

    .control-btn {
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        color: white;
        padding: 10px;
        cursor: pointer;
        border-radius: 50%;
    }

    .full-width {
        width: 30%;
    }

    .wheel-options {
display: grid;
grid-template-columns: repeat(2, 1fr);
grid-gap: 10px; 
justify-items: center;
max-width: 30%;
}

.wheel-option-container {
width: 100px; 
height: 100px; 
border-radius: 50%;
overflow: hidden; 
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
    width: 80px;
    height: 80px;
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

/* 

.container {
position: relative;
max-width: 1200px;
width: 100%;
padding: 40px;
}

.container .box {
padding: 50px 30px;
overflow: hidden;
}

.image img {
width: 100px;
height: 100px;
object-fit: cover;
border-radius: 50%;
opacity: .8;
border: 3px solid #fff;
}

.card:hover {
border-radius: 50%;
}

.card::before {
content: '';
position: absolute;
top: 50px;
left: 65px;
width: 35px;
height: 35px;
background: #fff;
border-radius: 50%;
opacity: .9;
}

.card::after {
content: '';
position: absolute;
top: 90px;
left: 85px;
width: 15px;
height: 15px;
background: #fff;
border-radius: 50%;
opacity: .9;
}

.card .card-content {
position: relative;
display: flex;
align-items: center;
flex-direction: column;
padding: 30px;
}

.card-content .name-profession {
display: flex;
align-items: center;
flex-direction: column;
margin-top: 10px;
color: #333;
}

.name-profession .name {
font-size: 20px;
font-weight: 600;
}

.name-profession .profession {
font-size: 15px;
font-weight: 500;
}

.card-content .rating {
display: flex;
align-items: center;
margin-top: 18px;
}

.card-content .rating i {
font-size: 22px;
color: var(--clr);
margin: 0 2px;
opacity: .75;
}

.card-content button {
position: relative;
padding: 8px 35px;
background: var(--clr);
border: none;
outline: none;
border-radius: 40px;
box-shadow: 0 2px 2px rgba(0, 0, 0, .25);
cursor: pointer;
font-size: 16px;
color: #fff;
font-weight: 500;
opacity: .75;
margin-top: 30px;
}

.card-content button::before {
content: '';
position: absolute;
top: 6px;
left: 50%;
transform: translateX(-50%);
width: 55%;
height: 5px;
background: rgba(255, 255, 255, .5);
border-radius: 5px;
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
} */
</style>
 <!-- swiper js -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
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
        if (currentSlide < 2) {
            currentSlide++;
            updateSliderPosition();
        }
    });

    function updateSliderPosition() {
        const slideWidth = document.querySelector('.slide').clientWidth;
        slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

    function selectWheel(element, wheelName) {
        const wheels = document.querySelectorAll('.wheel-option');
        wheels.forEach(wheel => wheel.classList.remove('selected'));
        element.classList.add('selected');
        document.getElementById('wheel-description').textContent = wheelName;
    }
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 50,
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
