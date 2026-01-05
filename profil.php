<?php
/**
 * Template Name: Profil
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/accueil.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/profil.css?v=<?php echo time(); ?>">
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
              <img class="profil-avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/lea.jpg" alt="photo profil">
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
                <button class="btn-follow">Suivre</button>
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

          <hr class="line">

          <!-- Footer -->
          <footer class="mini-footer">
            <p>©2025BeeHarmony</p>

            <div class="footer-icons">
              <span>🐦</span>
              <span>📷</span>
              <span>f</span>
            </div>
          </footer>

        </section>

    </main>

</div>

<?php wp_footer(); ?>
</body>
</html>
