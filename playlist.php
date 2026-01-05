<?php
/*
Template Name: Playlist
*/

$playlist = [
  "name" => "Pop",
  "creator" => "BeeHarmony",
  "count" => 42,
  "duration" => "2h34",
  "cover" => ""
];

$tracks = [
  ["cover" => get_template_directory_uri() . "/assets/images/ghostin.jpg", "title" => "ghostin", "artist" => "Ariana Grande", "time" => "3:55"],
  ["cover" => get_template_directory_uri() . "/assets/images/24Kmagic.jpg", "title" => "That's What I Like", "artist" => "Bruno Mars", "time" => "3:19"],
  ["cover" => get_template_directory_uri() . "/assets/images/snooze.jpg", "title" => "Nobody Get Me", "artist" => "SZA", "time" => "3:35"],
  ["cover" => get_template_directory_uri() . "/assets/images/Espresso.jpg", "title" => "Bed Chem", "artist" => "Sabrina Carpenter", "time" => "3:35"],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($playlist["name"]) ?> - BeeHarmony</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/playlist.css" />
</head>

<body>
  <div class="page">

    <header class="topbar">
      <a class="back" href="<?php echo home_url(); ?>" aria-label="Retour">
        <!-- flèche -->
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M14.5 5.5 8 12l6.5 6.5" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>

      <div class="brand">BeeHarmony</div>

      <div class="topbar-spacer" aria-hidden="true"></div>
    </header>

    <main class="content">
      <section class="hero">
        <div class="hero-cover">
        </div>

        <div class="hero-info">
          <h1 class="pl-title"><?= htmlspecialchars($playlist["name"]) ?></h1>
          <p class="pl-sub">Playlist créer par <?= htmlspecialchars($playlist["creator"]) ?></p>
          <p class="pl-meta"><?= (int)$playlist["count"] ?> titres - <?= htmlspecialchars($playlist["duration"]) ?></p>

          <div class="hero-actions">
            <button class="btn-play" type="button">
              <span class="icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M9 7.5v9l8-4.5-8-4.5z" fill="currentColor"/>
                </svg>
              </span>
              Lire
            </button>

            <button class="btn-like heart-btn" type="button" aria-label="Ajouter aux favoris">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
              </svg>
            </button>
          </div>
        </div>
      </section>

      <hr class="divider"/>

      <section class="tracklist" aria-label="Liste des titres">
        <?php foreach ($tracks as $t): ?>
          <article class="track">
            <div class="track-left">
              <div class="track-cover">
                <img src="<?= htmlspecialchars($t["cover"]) ?>" alt="" />
              </div>
              <div class="track-text">
                <div class="track-title"><?= htmlspecialchars($t["title"]) ?></div>
                <div class="track-artist"><?= htmlspecialchars($t["artist"]) ?></div>
              </div>
            </div>

            <div class="track-right">
              <div class="track-time"><?= htmlspecialchars($t["time"]) ?></div>
              <button class="btn-more" type="button" aria-label="Plus d'options">
                <span class="dots" aria-hidden="true">
                  <span></span><span></span><span></span>
                </span>
              </button>
            </div>
          </article>

          <div class="rowline"></div>
        <?php endforeach; ?>
      </section>
    </main>

    <footer class="footer">
      <div class="copy">©2025BeeHarmony</div>

      <div class="social">
        <a href="#" aria-label="Twitter">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M19.7 7.1c.01.17.01.34.01.52 0 5.34-4.07 11.5-11.5 11.5-2.28 0-4.4-.66-6.2-1.8.32.04.63.05.96.05 1.9 0 3.65-.65 5.04-1.74-1.77-.03-3.26-1.2-3.77-2.8.25.05.5.08.77.08.36 0 .72-.05 1.05-.14-1.85-.37-3.24-2-3.24-3.95v-.05c.54.3 1.16.48 1.82.5-1.08-.72-1.79-1.95-1.79-3.34 0-.74.2-1.43.55-2.03 1.98 2.43 4.96 4.02 8.31 4.19-.07-.3-.1-.62-.1-.94 0-2.25 1.83-4.08 4.08-4.08 1.17 0 2.23.49 2.97 1.28.92-.18 1.79-.52 2.57-.99-.3.94-.94 1.74-1.77 2.24.82-.1 1.6-.32 2.32-.64-.55.82-1.24 1.55-2.03 2.13z"
                  fill="currentColor"/>
          </svg>
        </a>

        <a href="#" aria-label="Instagram">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M7.5 2.8h9A4.7 4.7 0 0 1 21.2 7.5v9A4.7 4.7 0 0 1 16.5 21.2h-9A4.7 4.7 0 0 1 2.8 16.5v-9A4.7 4.7 0 0 1 7.5 2.8zm0 1.8A2.9 2.9 0 0 0 4.6 7.5v9a2.9 2.9 0 0 0 2.9 2.9h9a2.9 2.9 0 0 0 2.9-2.9v-9a2.9 2.9 0 0 0-2.9-2.9h-9z"
                  fill="currentColor"/>
            <path d="M12 7.7A4.3 4.3 0 1 1 7.7 12 4.3 4.3 0 0 1 12 7.7zm0 1.8A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5z"
                  fill="currentColor"/>
            <circle cx="16.9" cy="7.1" r="1.1" fill="currentColor"/>
          </svg>
        </a>

        <a href="#" aria-label="Facebook">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M13.8 21v-7h2.4l.4-2.8h-2.8V9.4c0-.8.2-1.4 1.4-1.4H16.4V5.5c-.3 0-1.3-.1-2.5-.1-2.4 0-4 1.5-4 4.2v1.6H7.4V14H10v7h3.8z"
                  fill="currentColor"/>
          </svg>
        </a>
      </div>
    </footer>

  </div>

  <script>
    // Gestion du clic sur le cœur
    document.addEventListener('DOMContentLoaded', function() {
      const heartBtn = document.querySelector('.heart-btn');
      if (heartBtn) {
        heartBtn.addEventListener('click', function() {
          this.classList.toggle('active');
        });
      }
    });
  </script>
</body>
</html>