<?php
/*
Template Name: Playlist
*/
get_header(); ?>

<main class="main-content">
    <div class="container">
        <!-- PLAYLISTS -->
        <section class="section">
            <div class="section-header">
                <h2>Mes Playlists</h2>
                <button class="create-playlist-btn">+ Créer une playlist</button>
            </div>
            
            <div class="playlist-grid">
                <article class="playlist-card">
                    <div class="playlist-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Espresso.jpg" alt="Playlist Été 2024">
                        <button class="play-btn" aria-label="Lecture">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="playlist-info">
                        <h3 class="playlist-name">Été 2024</h3>
                        <p class="playlist-meta">12 titres • 45 min</p>
                    </div>
                </article>

                <article class="playlist-card">
                    <div class="playlist-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TellYourFriends.jpg" alt="Playlist Chill Vibes">
                        <button class="play-btn" aria-label="Lecture">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="playlist-info">
                        <h3 class="playlist-name">Chill Vibes</h3>
                        <p class="playlist-meta">24 titres • 1h 30min</p>
                    </div>
                </article>

                <article class="playlist-card">
                    <div class="playlist-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/24Kmagic.jpg" alt="Playlist Party">
                        <button class="play-btn" aria-label="Lecture">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="playlist-info">
                        <h3 class="playlist-name">Party Mix</h3>
                        <p class="playlist-meta">30 titres • 2h 15min</p>
                    </div>
                </article>

                <article class="playlist-card">
                    <div class="playlist-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Iwannabeyours.jpg" alt="Playlist Indie">
                        <button class="play-btn" aria-label="Lecture">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="playlist-info">
                        <h3 class="playlist-name">Indie Favorites</h3>
                        <p class="playlist-meta">18 titres • 1h 10min</p>
                    </div>
                </article>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>