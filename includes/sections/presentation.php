<section id="about" class="inner about">

  <!-- Content Block - Titre de la Section Start -->
  <div class="content__block section-grid-title">
    <p class="h2__subtitle animate-in-up">
      <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="13px" viewBox="0 0 13 13" fill="currentColor">
        <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
          C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
          C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>
      </svg>
      <span>Qui suis-je ?</span>
    </p>
    <h2 class="h2__title animate-in-up">Transformer des problèmes complexes en solutions simples</h2>
  </div>
  <!-- Content Block - Titre de la Section End -->

  <!-- Content Block - Infos sur moi Start -->
  <div class="content__block grid-block block-large">
    <div class="container-fluid p-0">
      <div class="row g-0 justify-content-between">
        
        <!-- Description sur moi Start -->
        <div class="col-12 col-xl-8 grid-item about-descr">
          <p class="about-descr__text animate-in-up">
            Passionnée par la technologie, j'aime relever les défis techniques et trouver des solutions innovantes. 
            Chaque projet est une opportunité pour moi de simplifier des concepts complexes et de les transformer en expériences 
            intuitives et fonctionnelles.
          </p>
          <p class="about-descr__text animate-in-up">
            En tant que développeuse web et gestionnaire de projets IT, je suis constamment à la recherche de nouveaux 
            défis à relever, notamment avec des technologies comme Python, Angular, PHP et WordPress. 
            Mon expertise s'étend également à la gestion de projets IT et à la direction de la communication & des médias sociaux.
          </p>
          <div class="btn-group about-descr__btnholder animate-in-up">
            <a class="btn mobile-vertical btn-default btn-hover btn-hover-accent" 
            href="mailto:<?= $Email ?>?subject=Contact%20via%20le%20portfolio%20de%20<?= urlencode($name) ?>">
        <span class="btn-caption">Me contacter</span>
        <i class="ph-bold ph-paper-plane-tilt"></i>
            </a>
          </div>
        </div>
        <!-- Description sur moi End -->

        <!-- Informations sur moi Start -->
        <div class="col-12 col-xl-4 grid-item about-info">
          <div class="about-info__item animate-in-up">
            <h6>
              <small class="top">Nom</small>
              <?= $name ?>
            </h6>
          </div>
          <div class="about-info__item animate-in-up">
            <h6>
              <small class="top">Email</small>
              <a class="text-link-bold" href="mailto:<?= $Email ?>?subject=Message%20via%20le%20site%20web"><?= $Email ?></a>
            </h6>
          </div>
        </div>
        <!-- Informations sur moi End -->

      </div>
    </div>
  </div>
  <!-- Content Block - Infos sur moi End -->

</section>
