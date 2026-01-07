<?php
/**
 * Template Name: Login Template
 */

// Traiter la connexion
if (isset($_POST['login_submit'])) {
    $username = sanitize_text_field($_POST['username']);
    $password = $_POST['password'];
    
    $user = wp_signon(array(
        'user_login' => $username,
        'user_password' => $password,
        'remember' => true
    ), false);
    
    if (is_wp_error($user)) {
        $error = 'Nom d\'utilisateur ou mot de passe incorrect';
    } else {
        wp_redirect(home_url('/'));
        exit;
    }
}

// Si déjà connecté
if (is_user_logged_in()) {
    wp_redirect(home_url('/'));
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion - BeeHarmony</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo img {
            height: 60px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        input:focus {
            outline: none;
            border-color: #667eea;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }
        button:hover {
            background: #5568d3;
        }
        .error {
            background: #fee;
            color: #c33;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        .register-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO-BEEHARMONY (1).png" alt="BeeHarmony">
        </div>
        <h1>Connexion</h1>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="post">
            <div class="form-group">
                <label for="username">Email ou nom d'utilisateur</label>
                <input type="text" name="username" id="username" placeholder="votre@email.com" required>
            </div>
            
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Votre mot de passe" required>
            </div>
            
            <button type="submit" name="login_submit">Se connecter</button>
        </form>
        
        <p class="register-link">Pas de compte ? <a href="<?php echo home_url('/inscription'); ?>">S'inscrire</a></p>
    </div>
</body>
</html>