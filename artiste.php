<?php
/**
 * Template Name: Artiste
 */

$artist = [
  "name" => "Ariana Grande",
  "listeners" => "128.8M",
  "avatar" => get_template_directory_uri() . "/assets/images/arianagrande.jpg"
];

$popularTracks = [
  ["title" => "we can't be friends (wait for your love)", "artist" => "Ariana Grande", "duration" => "3:55", "cover" => get_template_directory_uri() . "/assets/images/we can be friend (wait for love).jpg"],
  ["title" => "Into you", "artist" => "Ariana Grande", "duration" => "3:19", "cover" => get_template_directory_uri() . "/assets/images/intoyou.jpg"],
  ["title" => "One Last Time", "artist" => "Ariana Grande", "duration" => "3:35", "cover" => get_template_directory_uri() . "/assets/images/onelasttime.jpg"],
  ["title" => "7 rings", "artist" => "Ariana Grande", "duration" => "3:35", "cover" => get_template_directory_uri() . "/assets/images/ghostin.jpg"],
];

$albums = [
  ["title" => "eternal sunshine", "cover" => get_template_directory_uri() . "/assets/images/eternal sunshine.jpg"],
  ["title" => "Positions", "cover" => get_template_directory_uri() . "/assets/images/positions.jpg"],
  ["title" => "thank u, next", "cover" => get_template_directory_uri() . "/assets/images/eternal sunshine.jpg"],
  ["title" => "Sweetener", "cover" => get_template_directory_uri() . "/assets/images/Sweetener.jpg"],
  ["title" => "Dangerous Woman", "cover" => get_template_directory_uri() . "/assets/images/DangerousWoman.jpg"],
  ["title" => "My Everything", "cover" => get_template_directory_uri() . "/assets/images/My Everything.jpg"],
  ["title" => "Yours Truly", "cover" => get_template_directory_uri() . "/assets/images/Yours Truly.jpg"],
];
?>
<!doctype html>
<html lang="fr" translate="no">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google" content="notranslate" />
  <title><?php bloginfo('name'); ?> - Artiste</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/artiste.css" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<main class="phone">

  <!-- TOP BAR -->
  <header class="topbar">
    <a class="icon-btn" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Retour">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M14.5 5.5L8 12l6.5 6.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>

    <div class="brand" aria-label="BeeHarmony">BeeHarmony</div>
  </header>

  <!-- ARTIST HEADER -->
  <section class="artist">
    <div class="avatar-wrap">
      <img class="avatar" src="<?= htmlspecialchars($artist["avatar"]) ?>" alt="<?= htmlspecialchars($artist["name"]) ?>">
    </div>

    <h1 class="artist-name"><?= htmlspecialchars($artist["name"]) ?></h1>
    <p class="listeners"><?= htmlspecialchars($artist["listeners"]) ?> auditeurs mensuels</p>

    <button class="follow-btn" type="button">Suivre</button>
  </section>

  <!-- CONTENT -->
  <div class="content">
    <!-- POPULAR TRACKS -->
    <section class="block">
      <h2 class="block-title">Titres populaires</h2>

      <div class="tracklist">
        <?php foreach ($popularTracks as $t): ?>
          <article class="track-row">
            <img class="track-cover" src="<?= htmlspecialchars($t["cover"]) ?>" alt="cover">

            <div class="track-meta">
              <div class="track-title"><?= htmlspecialchars($t["title"]) ?></div>
              <div class="track-artist"><?= htmlspecialchars($t["artist"]) ?></div>
            </div>

            <div class="track-right">
              <div class="track-time"><?= htmlspecialchars($t["duration"]) ?></div>
              <button class="dots" type="button" aria-label="Options">
                <span></span><span></span><span></span>
              </button>
            </div>
          </article>
          <div class="row-divider"></div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- ALBUMS -->
    <section class="block">
      <h2 class="block-title">Albums</h2>

      <div class="albums">
        <?php foreach ($albums as $a): ?>
          <figure class="album">
            <div class="album-cover-wrap">
              <img class="album-cover" src="<?= htmlspecialchars($a["cover"]) ?>" alt="<?= htmlspecialchars($a["title"]) ?>">
            </div>
            <figcaption class="album-title"><?= htmlspecialchars($a["title"]) ?></figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </section>

  </div>

</main>

<!-- FOOTER -->
<footer class="bh-footer">
    <span>©2025BeeHarmony</span>
    <div class="footer-icons">
        <a href="#" class="footer-icon-link" aria-label="Twitter">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
            </svg>
        </a>
        <a href="#" class="footer-icon-link" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="white"/>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>
        <a href="#" class="footer-icon-link" aria-label="Facebook">
            <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
            </svg>
        </a>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const followBtn = document.querySelector('.follow-btn');
  
  followBtn.addEventListener('click', function() {
    if (this.textContent === 'Suivre') {
      this.textContent = 'Abonné';
      this.classList.add('following');
    } else {
      this.textContent = 'Suivre';
      this.classList.remove('following');
    }
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
