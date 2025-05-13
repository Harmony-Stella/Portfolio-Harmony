<section id="contact" class="inner contact">

  <!-- Titre de section -->
  <div class="content__block section-title">
    <p class="h2__subtitle animate-in-up">
      <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="13px" viewBox="0 0 13 13" fill="currentColor">
        <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
          C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
          C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>
      </svg>
      <span>Contact</span>
    </p>
    <h2 class="h2__title animate-in-up">Donnez vie à vos projets ici !</h2>
  </div>

  <!-- Formulaire de contact -->
  <div class="content__block grid-block block-grid-large">
    <div class="form-container">

      <!-- Message de confirmation -->
      <div class="form__reply centered text-center">
        <i class="ph-bold ph-smiley reply__icon"></i>
        <p class="reply__title">C'est envoyé !</p>
        <span class="reply__text">Merci pour ton message. Je reviens vers toi très vite.</span>
      </div> 

      <!-- Formulaire -->
      <form class="form contact-form" id="contact-form">
        <!-- Champs cachés requis -->
        <input type="hidden" name="project_name" value="Portfolio Harmony">
        <input type="hidden" name="admin_email" value="<?= $Email ?>">
        <input type="hidden" name="form_subject" value="Nouveau message depuis le site">
        <!-- Fin champs cachés -->
        <div class="container-fluid p-0">
          <div class="row gx-0">
            <div class="col-12 col-md-6 form__item animate-in-up">
              <input type="text" name="Name" placeholder="Ton prénom ou pseudo*" required>
            </div>
            <div class="col-12 col-md-6 form__item animate-in-up">
              <input type="text" name="Company" placeholder="Entreprise ou projet perso">
            </div>
            <div class="col-12 col-md-6 form__item animate-in-up">
              <input type="email" name="E-mail" placeholder="Ton adresse email*" required>
            </div>
            <div class="col-12 col-md-6 form__item animate-in-up">
              <input type="tel" name="Phone" placeholder="Téléphone (optionnel)">
            </div>
            <div class="col-12 form__item animate-in-up">
              <textarea name="Message" placeholder="Explique-moi ton besoin*" required></textarea>
            </div>
            <div class="col-12 form__item animate-in-up">
              <button class="btn btn-default btn-hover btn-hover-accent" type="submit">
                <span class="btn-caption">Envoyer</span>
                <i class="ph-bold ph-paper-plane-tilt"></i>
              </button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>

  <!-- Teaser -->
  <div class="content__block">
    <div class="teaser">
      <p class="teaser__text animate-in-up">
        Tu veux en savoir plus,un projet, ou juste dire coucou ? 
        <a class="text-link-bold" href="mailto:<?= $Email ?>?subject=Message%20depuis%20le%20site">Écris-moi</a>, je réponds dès que possible.
      </p>
    </div>
  </div>

  <!-- Infos de contact -->
  <div class="content__block">
    <div class="container-fluid p-0 contact-lines animate-in-up">
      <div class="row g-0 contact-lines__item">
        <div class="col-12 col-md-4 contact-lines__data">
          <p class="contact-lines__title animate-in-up">Email</p>
          <p class="contact-lines__text animate-in-up">
            <a class="text-link-bold" href="mailto:<?= $Email ?>?subject=Message%20depuis%20le%20site"><?= $Email ?></a>
          </p>
        </div>
      </div>
    </div>
  </div>

</section>
