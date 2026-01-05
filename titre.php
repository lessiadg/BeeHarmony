<?php
/**
 * Template Name: Titre
 */

// Données du titre
$track = [
  "title" => "Tell Your Friends",
  "artist" => "The Weeknd",
  "duration" => "3:45",
  "cover" => get_template_directory_uri() . "/assets/images/TellYourFriends.jpg"
];

// Commentaires
$comments = [
  [
    "user" => "leo_dechamps",
    "avatar" => get_template_directory_uri() . "/assets/images/louis.jpg",
    "text" => "Un classique intemporel.",
    "time" => "Il y a 3 jours",
    "liked" => false,
    "reply_to" => null
  ],
  [
    "user" => "cam.stn",
    "avatar" => get_template_directory_uri() . "/assets/images/camille.jpg",
    "text" => "J'adore cette chanson !",
    "time" => "Il y a 1 jour",
    "liked" => false,
    "reply_to" => null
  ],
  [
    "user" => "man.non",
    "avatar" => get_template_directory_uri() . "/assets/images/emma.jpg",
    "text" => "Moi aussi !",
    "time" => "Il y a 12h",
    "liked" => false,
    "reply_to" => "cam.stn"
  ],
  [
    "user" => "saralove",
    "avatar" => get_template_directory_uri() . "/assets/images/sara.jpg",
    "text" => "C'est l'une de ces meilleures performances, sa voix est incroyable !",
    "time" => "Il y a 3h",
    "liked" => false,
    "reply_to" => null
  ],
  [
    "user" => "axeldrn",
    "avatar" => get_template_directory_uri() . "/assets/images/louis.jpg",
    "text" => "Ce son m'apaise.",
    "time" => "Il y a 15 min",
    "liked" => false,
    "reply_to" => null
  ],
];
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?> - Commentaires</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/titre.css" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <main class="phone">
    <!-- TOP BAR -->
    <header class="topbar">
      <a class="icon-btn" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Retour">
        <!-- back arrow -->
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M14.5 5.5L8 12l6.5 6.5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>

      <div class="brand" aria-label="BeeHarmony">BeeHarmony</div>

      <div class="spacer"></div>
    </header>

    <!-- TRACK CARD -->
    <section class="track">
      <img class="cover" src="<?= htmlspecialchars($track["cover"]) ?>" alt="Cover" />

      <div class="track-meta">
        <h1><?= htmlspecialchars($track["title"]) ?></h1>
        <p class="artist"><?= htmlspecialchars($track["artist"]) ?></p>
        <p class="duration"><?= htmlspecialchars($track["duration"]) ?></p>

        <div class="track-actions">
          <button class="play-btn" type="button">
            <span class="play-ic" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M9 7l10 5-10 5V7z" fill="currentColor"/>
              </svg>
            </span>
            Lire
          </button>

          <button class="heart-btn" type="button" aria-label="Ajouter aux favoris">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
          </button>

          <button class="icon-btn ghost" type="button" aria-label="Partager">
            <!-- share -->
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 16V3" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <path d="M7 7l5-4 5 4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5 14v6h14v-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
      </div>
    </section>

    <hr class="divider" />

    <!-- COMMENTS -->
    <section class="comments">
      <?php foreach ($comments as $c): ?>
        <article class="comment <?php echo $c['reply_to'] ? 'comment-reply' : ''; ?>">
          <img class="avatar" src="<?= htmlspecialchars($c["avatar"]) ?>" alt="<?= htmlspecialchars($c["user"]) ?>" />

          <div class="comment-body">
            <div class="comment-top">
              <div class="comment-text">
                <div class="username"><?= htmlspecialchars($c["user"]) ?></div>
                <?php if ($c["reply_to"]): ?>
                  <div class="reply-to">En réponse à @<?= htmlspecialchars($c["reply_to"]) ?></div>
                <?php endif; ?>
                <div class="text"><?= htmlspecialchars($c["text"]) ?></div>
              </div>

              <button class="like-btn heart-btn <?php echo $c["liked"] ? 'active' : ''; ?>" type="button" aria-label="Aimer">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                </svg>
              </button>
            </div>

            <div class="comment-bottom">
              <span class="time"><?= htmlspecialchars($c["time"]) ?></span>
              <button class="reply" type="button">Répondre</button>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </section>

    <!-- INPUT -->
    <footer class="composer">
      <div class="composer-box">
        <span class="bubble" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path d="M4 5h16v11H7l-3 3V5z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
          </svg>
        </span>
        <input type="text" id="comment-input" placeholder="Ecrire un commentaire..." />
        <button type="button" id="submit-comment" class="submit-comment-btn">Envoyer</button>
      </div>
    </footer>

    <!-- FOOTER -->
    <footer class="footer">
      <span class="copyright">©2025 BeeHarmony</span>

      <div class="socials" aria-label="Réseaux sociaux">
        <a class="social" href="#" aria-label="Twitter/X">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M18 2h3l-7 8 8 12h-6l-5-7-6 7H2l8-9-8-11h6l4 6 6-6z" fill="currentColor"/>
          </svg>
        </a>
        <a class="social" href="#" aria-label="Instagram">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 6.5A3.5 3.5 0 1 0 15.5 12 3.5 3.5 0 0 0 12 8.5zm7-2.2a1 1 0 1 0 1 1 1 1 0 0 0-1-1z"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
          </svg>
        </a>
        <a class="social" href="#" aria-label="Facebook">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v3H7v3h3v6h3v-6h3l1-3h-4v-3c0-.6.4-1 1-1z" fill="currentColor"/>
          </svg>
        </a>
      </div>
    </footer>
  </main>

  <script>
    // Gestion des clics sur les cœurs
    document.addEventListener('DOMContentLoaded', function() {
      const heartBtns = document.querySelectorAll('.heart-btn, .like-btn');
      heartBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          this.classList.toggle('active');
        });
      });

      // Gestion de l'ajout de commentaire
      const commentInput = document.getElementById('comment-input');
      const submitBtn = document.getElementById('submit-comment');
      const commentsSection = document.querySelector('.comments');

      submitBtn.addEventListener('click', function() {
        const text = commentInput.value.trim();
        if (text === '') return;

        // Créer un nouveau commentaire
        const newComment = document.createElement('article');
        newComment.className = 'comment';
        newComment.innerHTML = `
          <img class="avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/louis.jpg" alt="Vous" />
          <div class="comment-body">
            <div class="comment-top">
              <div class="comment-text">
                <div class="username">Vous</div>
                <div class="text">${text}</div>
              </div>
              <button class="like-btn heart-btn" type="button" aria-label="Aimer">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                </svg>
              </button>
            </div>
            <div class="comment-bottom">
              <span class="time">À l'instant</span>
              <button class="reply" type="button">Répondre</button>
            </div>
          </div>
        `;

        // Ajouter le commentaire en haut de la liste
        commentsSection.appendChild(newComment);

        // Ajouter le listener pour le cœur du nouveau commentaire
        const newHeartBtn = newComment.querySelector('.heart-btn');
        newHeartBtn.addEventListener('click', function() {
          this.classList.toggle('active');
        });

        // Ajouter le menu contextuel pour supprimer
        newComment.addEventListener('contextmenu', function(e) {
          e.preventDefault();
          if (confirm('Voulez-vous supprimer ce commentaire ?')) {
            newComment.remove();
          }
        });

        // Vider le champ
        commentInput.value = '';

        // Scroller vers le nouveau commentaire
        newComment.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      });

      // Permettre l'envoi avec la touche Entrée
      commentInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
          submitBtn.click();
        }
      });
    });
  </script>

<?php wp_footer(); ?>
</body>
</html>
