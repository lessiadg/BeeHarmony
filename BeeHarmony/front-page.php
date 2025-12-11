<?php
get_header();
?>

<div class="page bh-page">

    <!-- HEADER / TOP BAR -->
    <header class="bh-header">
        <h1 class="bh-logo">BeeHarmony</h1>

        <p class="bh-subtitle">
            Recherchez vos titres et artistes favoris. Créez vos playlist, partagez, faites de nouvelles rencontres
            et donnez-vous à vos proches.
        </p>

        <nav class="bh-nav">
            <button class="nav-btn active">Accueil</button>

            <div class="bh-search">
                <span class="search-icon">🔍</span>
                <input type="text" placeholder="Rechercher, musiques, artistes, ..." />
            </div>

            <!-- Zone connexion / profil -->
            <div class="bh-auth">
                <?php if ( is_user_logged_in() ) : ?>
                    <span class="bh-hello">
                        Bonjour, <strong><?php echo esc_html( wp_get_current_user()->display_name ); ?></strong>
                    </span>
                    <a class="profile-btn" href="<?php echo esc_url( home_url('/profil') ); ?>">
                        Profil
                    </a>
                    <a class="logout-link" href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>">
                        Déconnexion
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
                <div class="playlist-card"><span>Rock</span></div>
                <div class="playlist-card"><span>Pop</span></div>
                <div class="playlist-card"><span>Rap</span></div>
                <div class="playlist-card"><span>Latino</span></div>
                <button class="arrow-btn">➜</button>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/titre1.jpg" alt="Dangerous Woman">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">Dangerous Woman</p>
                        <p class="titre-artist">Ariana Grande</p>
                        <div class="titre-actions">
                            <span>♡</span><span>💬</span>
                        </div>
                    </div>
                </article>

                <article class="titre-card">
                    <div class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/titre2.jpg" alt="Espresso">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">Espresso</p>
                        <p class="titre-artist">Sabrina Carpenter</p>
                        <div class="titre-actions">
                            <span>♡</span><span>💬</span>
                        </div>
                    </div>
                </article>

                <article class="titre-card">
                    <div class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/titre3.jpg" alt="24K Magic">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">24K Magic</p>
                        <p class="titre-artist">Bruno Mars</p>
                        <div class="titre-actions">
                            <span>♡</span><span>💬</span>
                        </div>
                    </div>
                </article>

                <article class="titre-card">
                    <div class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/titre4.jpg" alt="I Wanna Be Yours">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">I Wanna Be Yours</p>
                        <p class="titre-artist">Arctic Monkeys</p>
                        <div class="titre-actions">
                            <span>♡</span><span>💬</span>
                        </div>
                    </div>
                </article>

                <button class="arrow-btn">➜</button>
            </div>
        </section>

        <!-- ARTISTES -->
        <section class="section">
            <div class="section-header">
                <h2>Artistes</h2>
            </div>
            <div class="avatar-row">
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ariana.jpg" alt="Ariana Grande">
                    <p>Ariana Grande</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tame_impala.jpg" alt="Tame Impala">
                    <p>Tame Impala</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mac_miller.jpg" alt="Mac Miller">
                    <p>Mac Miller</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/weeknd.jpg" alt="The Weeknd">
                    <p>The Weeknd</p>
                </div>
                <button class="arrow-btn">➜</button>
            </div>
        </section>

        <!-- MEMBRES -->
        <section class="section">
            <div class="section-header">
                <h2>Membres</h2>
            </div>
            <div class="member-row">
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/louis.jpg" alt="Louis">
                    <div class="member-text">
                        <span class="member-name">@louis</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sara.jpg" alt="Sara">
                    <div class="member-text">
                        <span class="member-name">@sara</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/camille.jpg" alt="Camille">
                    <div class="member-text">
                        <span class="member-name">@camille</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
                <div class="member-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/emma.jpg" alt="Emma">
                    <div class="member-text">
                        <span class="member-name">@emma</span>
                        <span class="member-action">+Suivre</span>
                    </div>
                </div>
                <button class="arrow-btn">➜</button>
            </div>
        </section>

    </main>

    <!-- LECTEUR AUDIO -->
    <section class="player-wrapper">
        <div class="player">
            <div class="player-left">
                <div class="player-cover"></div>
                <div class="player-info">
                    <p class="player-title">Snooze</p>
                    <p class="player-artist">SZA</p>
                </div>
            </div>

            <div class="player-center">
                <button class="player-btn">⏮</button>
                <button class="player-btn play">▶</button>
                <button class="player-btn">⏭</button>
            </div>

            <div class="player-right">
                <span class="time">1:02</span>
                <div class="progress"><div class="progress-bar"></div></div>
                <span class="time">2:19</span>
            </div>
        </div>
    </section>

    <!-- FOOTER LOCAL (si ton footer WP ne suffit pas visuellement) -->
    <footer class="bh-footer">
        <span>©2025BeeHarmony</span>
        <div class="footer-icons">
            <a href="#">🐦</a>
            <a href="#">📷</a>
            <a href="#">🎵</a>
        </div>
    </footer>

</div>

<?php
get_footer();
?>