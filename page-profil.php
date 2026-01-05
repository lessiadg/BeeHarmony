<?php
/**
 * Template Name: Page Profil
 * Template Post Type: page
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/accueil.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/profil.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="page bh-page">

    <!-- HEADER / TOP BAR -->
    <header class="bh-header">
        <h1 class="bh-logo">BeeHarmony</h1>

        <p class="bh-subtitle">
            Recherchez vos titres et artistes favoris. Créez vos playlist, partagez, faites de nouvelles rencontres
            et donnez-vous à vos proches.
        </p>

        <nav class="bh-nav">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="nav-btn">Accueil</a>

            <div class="bh-search">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input type="text" id="search-input" name="s" placeholder="Rechercher, musiques, artistes, ..." />
                
                <!-- Dropdown de résultats -->
                <div class="search-dropdown" id="search-dropdown">
                    <div class="search-results" id="search-results"></div>
                </div>
            </div>

            <!-- Zone connexion / profil -->
            <div class="bh-auth">
                <?php if ( is_user_logged_in() ) : ?>
                    <a class="profile-btn active" href="<?php echo esc_url( home_url('/profil') ); ?>">
                        Profil
                    </a>
                <?php else : ?>
                    <a class="profile-btn" href="<?php echo esc_url( home_url('/login') ); ?>">
                        Connexion
                    </a>
                    <a class="register-link" href="<?php echo esc_url( home_url('/signup') ); ?>">
                        Inscription
                    </a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main class="bh-main">

        <section class="profil-section">

          <!-- Ligne profil -->
          <div class="profil-top">

            <div class="profil-left">
              <img class="profil-avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/photo de profil.jpg" alt="photo profil">
              <div class="profil-text">
                <p class="profil-name">lea_officiel</p>
                <p class="profil-bio">Toujours un casque dans les oreilles :)</p>
              </div>
            </div>

            <div class="profil-right">
              <div class="profil-stats">
                <div class="stat">
                  <p class="stat-nb">26</p>
                  <p class="stat-label">abonnés</p>
                </div>
                <div class="stat">
                  <p class="stat-nb">33</p>
                  <p class="stat-label">abonnements</p>
                </div>
              </div>

              <div class="profil-buttons">
                <button class="btn-follow">Modifier</button>
                <button class="btn-share">Partager le profil</button>
              </div>
            </div>

          </div>

          <!-- Playlists -->
          <div class="playlist-block">
            <h2 class="playlist-title">Playlist <span class="playlist-add">+créer une playlist</span></h2>

            <div class="playlist-grid">
              <div class="playlist-card pink">
                <div class="playlist-play">▶</div>
                <p class="playlist-name">Playlist 1</p>
              </div>

              <div class="playlist-card purple">
                <div class="playlist-play">▶</div>
                <p class="playlist-name">Playlist 2</p>
              </div>

              <div class="playlist-card orange">
                <div class="playlist-play">▶</div>
                <p class="playlist-name">Playlist 3</p>
              </div>
            </div>
          </div>

          <hr class="line">

          <!-- Activité récente -->
          <div class="recent-block">
            <h2 class="recent-title">Activité récente</h2>

            <div class="recent-grid">

              <div class="recent-card">
                <img class="recent-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ariana.jpg" alt="cover">
                <p class="recent-song">Dangerous Wom...</p>
                <p class="recent-artist">Ariana Grande</p>

                <div class="recent-icons">
                  <span>♡</span>
                  <span>⟳</span>
                </div>
              </div>

              <div class="recent-card">
                <img class="recent-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/arctic.jpg" alt="cover">
                <p class="recent-song">I Wanna Be Your</p>
                <p class="recent-artist">Arctic Monkeys</p>

                <div class="recent-icons">
                  <span>♡</span>
                  <span>⟳</span>
                </div>
              </div>

            </div>
          </div>

        </section>

    </main>

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

</div>

<?php wp_footer(); ?>
</body>
</html>
