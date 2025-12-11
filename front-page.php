<?php
get_header();
?>

<?php
// Debug banner only when ?beeharmony_debug=1 is present in URL
if ( isset($_GET['beeharmony_debug']) && $_GET['beeharmony_debug'] == '1' ) :
    $published_count = wp_count_posts('post')->publish;
    ?>
    <div style="position:fixed;left:0;right:0;top:0;background:#ffea00;color:#000;padding:8px 12px;z-index:99999;font-family:sans-serif;border-bottom:2px solid #000;text-align:center;">
        BeeHarmony front-page template loaded — posts publiés: <?php echo intval($published_count); ?> — <a href="<?php echo esc_url( home_url('/wp-admin/')); ?>">Admin</a>
    </div>
    <div style="height:46px;"></div>
<?php endif; ?>

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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/titre1.jpg" alt="Dangerous Woman">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/titre2.jpg" alt="Espresso">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/titre3.jpg" alt="24K Magic">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/titre4.jpg" alt="I Wanna Be Yours">
                    </div>
                    <div class="titre-info">
                        <p class="titre-name">I Wanna Be Yours</p>
                        <p class="titre-artist">Arctic Monkeys</p>
                        <div class="titre-actions">
                            <span>♡</span><span>💬</span>
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

        <!-- PUBLICATIONS (affiche les posts récents) -->
        <section class="section">
            <div class="section-header">
                <h2>Publications récentes</h2>
            </div>
            <div class="posts-list">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'post_status' => 'publish',
                );
                $recent_posts = new WP_Query($args);

                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                </div>
                            <?php endif; ?>
                            <div class="post-body">
                                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="post-meta">Par <?php the_author(); ?> — <?php echo get_the_date(); ?></div>
                                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                            </div>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <p>Aucune publication récente.</p>
                <?php endif; ?>
            </div>
        </section>

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
