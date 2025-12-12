<?php
get_header();
?>

<?php echo '<!-- BeeHarmony front-page loaded -->'; ?>

<div class="page bh-page">

    <!-- HEADER / TOP BAR -->
    <header class="bh-header">
        <h1 class="bh-logo">BeeHarmony</h1>

        <p class="bh-subtitle">
            Recherchez vos titres et artistes favoris. Créez vos playlist, partagez, faites de nouvelles rencontres
            et donnez-vous à vos proches.
        </p>

        <nav class="bh-nav">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="nav-btn active">Accueil</a>

            <form method="get" action="<?php echo esc_url( home_url('/recherche') ); ?>" class="bh-search">
                <span class="search-icon">🔍</span>
                <input type="text" name="s" placeholder="Rechercher, musiques, artistes, ..." />
            </form>

            <!-- Zone connexion / profil -->
            <div class="bh-auth">
                <?php if ( is_user_logged_in() ) : ?>
                    <a class="profile-btn" href="<?php echo esc_url( home_url('/profil') ); ?>">
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

        <!-- RECOMMANDATION PLAYLIST -->
        <section class="section">
            <div class="section-header">
                <h2>Recommandation Playlist</h2>
            </div>
            <div class="playlist-grid">
                <div class="playlist-card"><span>Pop</span></div>
                <div class="playlist-card"><span>Rock</span></div>
                <div class="playlist-card"><span>Rap</span></div>
                <div class="playlist-card"><span>Latino</span></div>
            </div>
        </section>

        <!-- TITRES -->
        <section class="section">
            <div class="section-header">
                <h2>Titres</h2>
            </div>

            <div class="titre-grid">
                <article class="titre-card">
                    <div class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dangerous-woman.jpg" alt="Dangerous Woman - Ariana Grande">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">Dangerous Woman</p>
                        <p class="titre-artist">Ariana Grande</p>
                        <div class="titre-actions">
                            <button class="heart-btn" aria-label="J'aime">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                              </svg>
                            </button>
                            <button class="comment-btn" aria-label="Commenter">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                              </svg>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="titre-card">
                    <div class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/espresso.jpg" alt="Espresso - Sabrina Carpenter">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">Espresso</p>
                        <p class="titre-artist">Sabrina Carpenter</p>
                        <div class="titre-actions">
                            <button class="heart-btn" aria-label="J'aime">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                              </svg>
                            </button>
                            <button class="comment-btn" aria-label="Commenter">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                              </svg>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="titre-card">
                    <div class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/24k-magic.jpg" alt="24K Magic - Bruno Mars">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">24K Magic</p>
                        <p class="titre-artist">Bruno Mars</p>
                        <div class="titre-actions">
                            <button class="heart-btn" aria-label="J'aime">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                              </svg>
                            </button>
                            <button class="comment-btn" aria-label="Commenter">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                              </svg>
                            </button>
                        </div>
                    </div>
                </article>

                <article class="titre-card">
                    <div class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/i-wanna-be-yours.jpg" alt="I Wanna Be Yours - Arctic Monkeys">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">I Wanna Be Yours</p>
                        <p class="titre-artist">Arctic Monkeys</p>
                        <div class="titre-actions">
                            <button class="heart-btn" aria-label="J'aime">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                              </svg>
                            </button>
                            <button class="comment-btn" aria-label="Commenter">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                              </svg>
                            </button>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- ARTISTES -->
        <section class="section">
            <div class="section-header">
                <h2>Artistes</h2>
            </div>
            <div class="avatar-row">
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ariana.jpg" alt="Ariana Grande">
                    <p>Ariana Grande</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tame_impala.jpg" alt="Tame Impala">
                    <p>Tame Impala</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mac_miller.jpg" alt="Mac Miller">
                    <p>Mac Miller</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/weeknd.jpg" alt="The Weeknd">
                    <p>The Weeknd</p>
                </div>
            </div>
        </section>

        <!-- MEMBRES -->
        <section class="section">
            <div class="section-header">
                <h2>Membres</h2>
            </div>
            <div class="member-row">
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/louis.jpg" alt="Louis">
                    <div class="member-text">
                        <span class="member-name">@louis</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sara.jpg" alt="Sara">
                    <div class="member-text">
                        <span class="member-name">@sara</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camille.jpg" alt="Camille">
                    <div class="member-text">
                        <span class="member-name">@camille</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/emma.jpg" alt="Emma">
                    <div class="member-text">
                        <span class="member-name">@emma</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- PLAYER -->
    <section class="player-wrapper">
        <div class="player">
            <!-- Gauche: cover + info -->
            <div class="player-left">
                <div class="player-cover"></div>
                <div class="player-info">
                    <p class="player-title">Snooze</p>
                    <p class="player-artist">SZA</p>
                </div>
            </div>

            <!-- Centre: contrôles -->
            <div class="player-center">
                <button class="player-btn">⏮</button>
                <button class="player-btn">▶</button>
                <button class="player-btn">⏭</button>
            </div>

            <!-- Droite: progression -->
            <div class="player-right">
                <span class="player-time">1:02</span>
                <input type="range" min="0" max="139" value="62" class="progress-bar">
                <span class="player-time">2:19</span>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const range = document.querySelector('.progress-bar');
        if (!range) return;

        const updateGradient = () => {
            const min = Number(range.min) || 0;
            const max = Number(range.max) || 100;
            const val = ((Number(range.value) - min) / (max - min)) * 100;
            range.style.setProperty('--progress', val + '%');
        };

        updateGradient();
        range.addEventListener('input', updateGradient);
        range.addEventListener('change', updateGradient);
    });
    </script>

    <!-- FOOTER LOCAL (si ton footer WP ne suffit pas visuellement) -->
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

<?php
get_footer();
?>
