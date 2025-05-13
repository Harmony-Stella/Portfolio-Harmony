<!-- PORTFOLIO SECTION -->
<section id="portfolio" class="container my-5">
  <div class="row g-4">

    <?php
    $projects = [
      [
        'title' => 'Premier Portfolio',
        'description' => 'Mon tout premier portfolio réalisé avec Angular.',
        'technos' => 'Angular',
        'image' => 'assets/img/projects/pj-5.jpg'
      ],
      [
        'title' => 'Ego Transfer',
        'description' => 'Site vitrine développé avec Flask.',
        'technos' => 'Python, Flask',
        'image' => 'assets/img/projects/pj-7.jpg'
      ],
      [
        'title' => 'DigiHMB',
        'description' => 'Site vitrine professionnel développé sous WordPress.',
        'technos' => 'WordPress',
        'image' => 'assets/img/projects/pj-3.png'
      ],
      [
        'title' => 'APSI-CI',
        'description' => 'Site de l’Association de Sécurité Informatique de Côte d’Ivoire.',
        'technos' => 'WordPress',
        'image' => 'assets/img/projects/pj-4.png'
      ],
      [
        'title' => 'Magali Iovino',
        'description' => 'Site pour coach personnel réalisé avec WordPress.',
        'technos' => 'WordPress',
        'image' => 'assets/img/projects/pj-6.png'
      ],
      [
        'title' => 'FoodMap',
        'description' => 'Application de localisation de restaurants avec Angular, Django et MySQL.',
        'technos' => 'Angular, Django, MySQL',
        'image' => 'assets/img/projects/pj-2.jpg'
      ],
      [
        'title' => 'Learn Soft',
        'description' => 'Application d\'apprentissage web développée avec Symfony et MySQL.',
        'technos' => 'PHP, Symfony, MySQL',
        'image' => 'assets/img/projects/pj-1.jpg'
      ],
      [
        'title' => 'Mon Portfolio PHP',
        'description' => 'Mon portfolio professionnel développé entièrement en PHP avec animations GSAP.',
        'technos' => 'PHP, GSAP',
        'image' => 'assets/img/projects/pj-8.png'
      ]
    ];

    foreach ($projects as $project): ?>
      <div class="col-12 col-md-4">
        <div class="project-card"
             data-title="<?= $project['title'] ?>"
             data-description="<?= $project['description'] ?>"
             data-technos="<?= $project['technos'] ?>">
          <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>" class="project-image">
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- MODAL -->
<div class="modal-overlay" id="projectModal">
  <div class="modal-content shadow">
    <span class="close-btn" id="closeModal">&times;</span>
    <h2 id="modalTitle" class="modal-title"></h2>
    <p id="modalDescription" class="modal-description"></p>
    <div class="tech-tags mt-3" id="modalTechnos"></div>
  </div>
</div>




