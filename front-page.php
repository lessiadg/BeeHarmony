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
                <a href="<?php echo home_url('/playlist'); ?>" class="playlist-card"><span>Pop</span></a>
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
                    <a href="<?php echo home_url('/titre'); ?>" class="titre-cover">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TellYourFriends.jpg" alt="Tell Your Friends - The Weeknd" style="object-position: center 60%;">
                    </a>
                    <div class="titre-info">
                        <a href="<?php echo home_url('/titre'); ?>" class="titre-name">Tell Your Friends</a>
                        <p class="titre-artist">The Weeknd</p>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Espresso.jpg" alt="Espresso - Sabrina Carpenter" style="object-position: center 20%;">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/24Kmagic.jpg" alt="24K Magic - Bruno Mars" style="object-position: center 20%;">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Iwannabeyours.jpg" alt="I Wanna Be Yours - Arctic Monkeys">
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
                <a href="<?php echo home_url('/artiste'); ?>" class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arianagrande.jpg" alt="Ariana Grande">
                    <p>Ariana Grande</p>
                </a>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tameimpla.jpg" alt="Tame Impala">
                    <p>Tame Impala</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/macmiller.jpg" alt="Mac Miller">
                    <p>Mac Miller</p>
                </div>
                <div class="avatar-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TheWeeknd.jpg" alt="The Weeknd">
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
            <div class="player-top">
                <!-- Gauche: cover + info -->
                <div class="player-left">
                    <img class="player-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/snooze.jpg" alt="Snooze - SZA">
                    <div class="player-info">
                        <p class="player-title">Snooze</p>
                        <p class="player-artist">SZA</p>
                    </div>
                </div>

                <!-- Centre: contrôles -->
                <div class="player-center">
                    <button class="player-btn" aria-label="Précédent">
                        <svg viewBox="0 0 24 24" fill="black">
                            <path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/>
                        </svg>
                    </button>
                    <button class="player-btn player-btn-play" aria-label="Lecture">
                        <svg viewBox="0 0 24 24" fill="black">
                            <path d="M8 5l12 7-12 7z"/>
                        </svg>
                    </button>
                    <button class="player-btn" aria-label="Suivant">
                        <svg viewBox="0 0 24 24" fill="black">
                            <path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/>
                        </svg>
                    </button>
                </div>

                <!-- Spacer pour équilibrer -->
                <div class="player-spacer"></div>
            </div>

            <!-- Bas: progression -->
            <div class="player-bottom">
                <span class="player-time player-time-current">1:02</span>
                <input type="range" min="0" max="201" value="62" class="progress-bar">
                <span class="player-time player-time-total">3:21</span>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const range = document.querySelector('.progress-bar');
        const currentTimeEl = document.querySelector('.player-time-current');
        if (!range) return;

        // Fonction pour formater les secondes en mm:ss
        const formatTime = (seconds) => {
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${mins}:${secs.toString().padStart(2, '0')}`;
        };

        const updateGradient = () => {
            const min = Number(range.min) || 0;
            const max = Number(range.max) || 100;
            const val = ((Number(range.value) - min) / (max - min)) * 100;
            range.style.setProperty('--progress', val + '%');
            
            // Mettre à jour le temps actuel
            if (currentTimeEl) {
                currentTimeEl.textContent = formatTime(Number(range.value));
            }
        };

        updateGradient();
        range.addEventListener('input', updateGradient);
        range.addEventListener('change', updateGradient);

        // Recherche en temps réel
        const searchInput = document.getElementById('search-input');
        const searchDropdown = document.getElementById('search-dropdown');
        const searchResults = document.getElementById('search-results');
        
        // Données de recherche (titres et artistes de la page)
        const searchData = [
            { type: 'titre', name: 'Tell Your Friends', artist: 'The Weeknd', image: '<?php echo get_template_directory_uri(); ?>/assets/images/TellYourFriends.jpg' },
            { type: 'titre', name: 'Espresso', artist: 'Sabrina Carpenter', image: '<?php echo get_template_directory_uri(); ?>/assets/images/Espresso.jpg' },
            { type: 'titre', name: '24K Magic', artist: 'Bruno Mars', image: '<?php echo get_template_directory_uri(); ?>/assets/images/24Kmagic.jpg' },
            { type: 'titre', name: 'I Wanna Be Yours', artist: 'Arctic Monkeys', image: '<?php echo get_template_directory_uri(); ?>/assets/images/Iwannabeyours.jpg' },
            { type: 'artiste', name: 'Ariana Grande', image: '<?php echo get_template_directory_uri(); ?>/assets/images/arianagrande.jpg' },
            { type: 'artiste', name: 'Tame Impala', image: '<?php echo get_template_directory_uri(); ?>/assets/images/tameimpla.jpg' },
            { type: 'artiste', name: 'Mac Miller', image: '<?php echo get_template_directory_uri(); ?>/assets/images/macmiller.jpg' },
            { type: 'artiste', name: 'The Weeknd', image: '<?php echo get_template_directory_uri(); ?>/assets/images/TheWeeknd.jpg' }
        ];
        
        if (searchInput && searchDropdown && searchResults) {
            searchInput.addEventListener('input', function(e) {
                const query = e.target.value.toLowerCase().trim();
                
                if (query.length === 0) {
                    searchDropdown.classList.remove('active');
                    return;
                }
                
                // Filtrer les résultats
                const results = searchData.filter(item => {
                    const nameMatch = item.name.toLowerCase().includes(query);
                    const artistMatch = item.artist && item.artist.toLowerCase().includes(query);
                    return nameMatch || artistMatch;
                });
                
                // Afficher les résultats
                if (results.length > 0) {
                    searchResults.innerHTML = results.map(item => {
                        if (item.type === 'titre') {
                            return `
                                <div class="search-result-item">
                                    <img src="${item.image}" alt="${item.name}">
                                    <div class="search-result-info">
                                        <div class="search-result-name">${item.name}</div>
                                        <div class="search-result-artist">${item.artist}</div>
                                    </div>
                                    <span class="search-result-type">Titre</span>
                                </div>
                            `;
                        } else {
                            return `
                                <div class="search-result-item">
                                    <img src="${item.image}" alt="${item.name}">
                                    <div class="search-result-info">
                                        <div class="search-result-name">${item.name}</div>
                                    </div>
                                    <span class="search-result-type">Artiste</span>
                                </div>
                            `;
                        }
                    }).join('');
                    searchDropdown.classList.add('active');
                } else {
                    searchResults.innerHTML = '<div class="search-no-results">Aucun résultat trouvé</div>';
                    searchDropdown.classList.add('active');
                }
            });
            
            // Fermer le dropdown en cliquant ailleurs
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !searchDropdown.contains(e.target)) {
                    searchDropdown.classList.remove('active');
                }
            });
        }

        // Gestion des clics sur les cœurs
        const heartBtns = document.querySelectorAll('.heart-btn');
        heartBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });

        // Gestion du bouton play/pause avec progression automatique
        const playBtn = document.querySelector('.player-btn-play');
        let isPlaying = false;
        let progressInterval = null;

        playBtn.addEventListener('click', function() {
            isPlaying = !isPlaying;
            const svg = this.querySelector('svg');
            
            if (isPlaying) {
                // Afficher l'icône pause (deux barres)
                svg.innerHTML = '<path d="M6 4h4v16H6zm8 0h4v16h-4z" fill="black"/>';
                this.setAttribute('aria-label', 'Pause');
                
                // Démarrer la progression automatique
                progressInterval = setInterval(() => {
                    const currentValue = Number(range.value);
                    const maxValue = Number(range.max);
                    
                    if (currentValue < maxValue) {
                        range.value = currentValue + 1;
                        updateGradient();
                    } else {
                        // Arrêter à la fin
                        clearInterval(progressInterval);
                        isPlaying = false;
                        svg.innerHTML = '<path d="M8 5l12 7-12 7z" fill="black"/>';
                        playBtn.setAttribute('aria-label', 'Lecture');
                    }
                }, 1000); // Mise à jour toutes les secondes
                
            } else {
                // Afficher l'icône play (triangle)
                svg.innerHTML = '<path d="M8 5l12 7-12 7z" fill="black"/>';
                this.setAttribute('aria-label', 'Lecture');
                
                // Arrêter la progression
                if (progressInterval) {
                    clearInterval(progressInterval);
                    progressInterval = null;
                }
            }
        });
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
