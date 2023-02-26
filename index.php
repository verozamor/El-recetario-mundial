<?php require('./layout/header.php')?>

<main>
    <!--Header 2 Nombre- Slogan-->
    <section>
            <div class="tittle">
                <h1>EL RECETARIO MUNDIAL</h1>
                <h2>EL SABOR DEL MUNDO A TU MESA</h2>
            </div>

        </section>

<section class="about">
        <div class="containerabout">
          <div class="textab">
            <p>Cada país tiene su propia gastronomía, basadas en ingredientes, tradiciones y gustos particulares de cada provincia, ciudad y pueblo.</p> <br>
            <p>En <b id="negrita">El Recetario Mundial</b> somos amantes de los sabores exóticos, cargados de historia y cultura, no importa de qué parte del mundo.</p> <br>
            <p>Tenemos muchas recetas internacionales que te invitamos a que cocines y saborees lo mejor de cada país.</p> <br>
            <p>Nuestra página cuenta con una sección dedicada a destacar restaurante de comidas
              típicas destacadas de cada país, hecha especialmente para aquellos turistas que
              se encuentran recorriendo nuestros países más destacados.</p>

            <div class="derecha">
              <a href="" class="btnV">
                  Para Viajeros
              </a>
          </div>

          </div>

          <div class="containerimgab">
            <img src="img/imgAb.png" class="imgab" alt="">

          </div>
        </div>

      </section>
        <!--Paises-->
        <section>
          <div class="contenedor">
            <h2 class="titulo">Países</h2>
          </div>

        </section>

        <section class="contenedor-body">
          
            <div class="container">

                <input type="radio" name="dot" id="one">
                <input type="radio" name="dot" id="two">
            
                <div class="main-card">
            
                    <!--PARTE 1 DE TARJETAS-->
                  <div class="cards">
            
                    <div class="card">
                     <div class="content">
                     <a href="El Salvador.php">
                       <div class="img">
                        <img src="img/indeximg/pupusas.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">El Salvador</div>
                         <div class="food">Centro America</div>
                         </div>
                    </a>
            
                     </div>
                    </div>
            
            
                    <div class="card">
                     <div class="content">
                       <div class="img">
                        <img src="img/indeximg/comparag.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Paraguay</div>
                         <div class="food">Sur America</div>
                       </div>
            
                     </div>
                    </div>
            
            
                    <div class="card">
                     <div class="content">
                       <div class="img">
                        <img src="img/indeximg/paella.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">España</div>
                         <div class="food">Europa</div>
                       </div>
            
                     </div>
                    </div>
            
            
                    <div class="card">
                        <div class="content">
                          <div class="img">
                            <img src="img/indeximg/comcorea.jpg" alt="">
                          </div>
                          <div class="details">
                            <div class="name">Corea</div>
                            <div class="food">Asia</div>
                          </div>
            
                        </div>
                       </div>
                  </div>
            
            
                    <!--PARTE 2 DE TARJETAS-->
            
                  <div class="cards">
                   
                    <div class="card">
                     <div class="content">
                       <div class="img">
                         <img src="img/indeximg/comnig.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Nigeria</div>
                         <div class="food">Africa</div>
                       </div>
                     </div>
                    </div>
            
                    <div class="card">
                     <div class="content">
                       <div class="img">
                         <img src="img/indeximg/comnor.jpg" alt="">
                       </div>
                       <div class="details">
                         <div class="name">Noruega</div>
                         <div class="food">Europa</div>
                       </div>
            
                     </div>
                    </div>
            
                    <div class="card">
                        <div class="content">
                          <div class="img">
                            <img src="img/indeximg/comnue.jpg" alt="">
                          </div>
                          <div class="details">
                            <div class="name">Nueva Zelanda</div>
                            <div class="food">Oceania</div>
                          </div>
                        </div>
                       </div>
            
                       <div class="card">
                        <div class="content">
                          <div class="img">
                            <img src="img/indeximg/comcol.jpg" alt="">
                          </div>
                          <div class="details">
                            <div class="name">Colombia</div>
                            <div class="food">Sur America</div>
                          </div>
                        </div>
                       </div>
            
                  </div>
                </div>
            
                <div class="button">
                  <label for="one" class=" active one"></label>
                  <label for="two" class="two"></label>
                </div>
              </div>
            
        </section>

        <!--Tendencias-->

        <section>
          <div class="contenedor">
            <h2 class="titulo">Recetas en Tendencia</h2>
          </div>

        </section>

        <section class="contenedor-body">
          <bodyT>
            <div class="grid">
              <div class="grid-item">
                <div class="cardT">
                  <img class="cardT-img" src="img/indeximg/yassa.jpg" alt="" />
                  <div class="cardT-content">
                    <h1 class="cardT-header">Yassa</h1>
                    <p class="cardT-text">
                      <strong>Nigeria</strong>
                      <div class="cop">
                        Dificultad: Media <br>
                      Tienpo de Duración: 3 horas <br>
                      </div>
                    </p>
                    <!--<button class="card-btn"> <span>&rarr;</span></button>-->
                  </div>
                </div>
              </div>
        
        
              <div class="grid-item">
                <div class="cardT">
                  <img class="cardT-img" src="img/indeximg/arepa.jpg" alt="" />
                  <div class="cardT-content">
                    <h1 class="cardT-header">Arepa</h1>
                    <p class="cardT-text">
                      <strong>Colombia</strong>
                      <div class="cop">
                        Dificultad: Media <br>
                      Tienpo de Duración: 1 hora <br>
                      </div>
                    </p>
                 
                  </div>
                </div>
              </div>
        
              <div class="grid-item">
                <div class="cardT">
                  <img class="cardT-img" src="img/indeximg/Bibimbap.jpg" alt="" />
                  <div class="cardT-content">
                    <h1 class="cardT-header">Bibimbap</h1>
                    
                    <p class="cardT-text">
                      <strong>Corea</strong>
                      <div class="cop">
                        Dificultad: Alta <br>
                      Tienpo de Duración: 3 horas <br>
                      </div>
                    </p>
        
                  </div>
                </div>
              </div>
        
              <div class="grid-item">
                <div class="cardT">
                  <img class="cardT-img" src="img/indeximg/fraika.jpg" alt="" />
                  <div class="cardT-content">
                    <h1 class="cardT-header">fårikål</h1>
                    <p class="cardT-text">
                      <strong>Noruega</strong>
                      <div class="cop">
                        Dificultad: Media<br>
                      Tienpo de Duración: 4 horas <br>
                      </div>
                    </p>
        
                  </div>
                </div>
              </div>
        
        
        
        
        
        
            </div>
          </bodyT>
        </section>
    </main>
</main>

<?php require('./layout/footer.php')?>
