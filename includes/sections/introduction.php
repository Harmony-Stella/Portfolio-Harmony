<section id="home" class="main intro">

  <!-- Titre principal -->
  <div id="headline" class="headline d-flex align-items-start flex-column" data-speed="1">
    <p class="headline__subtitle animate-headline">
      <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="13px" viewBox="0 0 13 13" fill="currentColor">
        <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
          C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
          C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>
      </svg>
      <span>Bienvenue</span>
    </p>

    <h1 class="headline__title animate-headline">
      Je suis <?= $name ?><br><?= $work ?>
    </h1>

    <div class="headline__btnholder d-flex flex-column flex-sm-row">
      <a class="btn mobile-vertical btn-default btn-hover btn-hover-accent-mobile animate-headline" href="#portfolio">
        <span class="btn-caption">Mes projets</span>
        <i class="ph-bold ph-squares-four"></i>
      </a>

      <!-- Lien mailto avec données dynamiques -->
      <a class="btn mobile-vertical btn-default btn-hover btn-hover-outline-mobile animate-headline" 
         href="mailto:<?= $Email ?>?subject=Contact%20via%20le%20portfolio%20de%20<?= urlencode($name) ?>">
        <span class="btn-caption">Me contacter</span>
        <i class="ph-bold ph-paper-plane-tilt"></i>
      </a>
    </div>
  </div>
  <!-- Fin Titre principal -->

  <!-- Bouton Scroll -->
  <div class="rotating-btn">
    <a href="#portfolio" class="rotating-btn__link slide-down">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" class="animate-rotation" data-value="360">
        <defs>
          <path id="textPath" d="M110,59.5c0,27.6-22.4,50-50,50s-50-22.4-50-50s22.4-50,50-50S110,31.9,110,59.5z"/>
        </defs>
        <g>
          <use xlink:href="#textPath" fill="none"></use>
          <text>
            <textPath xlink:href="#textPath">Fais défiler pour en voir plus * </textPath>
          </text>
        </g>
      </svg>
      <i class="ph-bold ph-arrow-down"></i>
    </a>
  </div>
  <!-- Fin bouton scroll -->

</section>
