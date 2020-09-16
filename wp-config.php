<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tim-2020' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&IrWgrt@C;yp-FL6WUNz8j{:^%nUa#q}pW{fAXH1ON<_xY?)Fl58x49vED|(:Tr>' );
define( 'SECURE_AUTH_KEY',  '3[fx*dtP`F~&e|_e&!dmgeFmX]>tNpIs[i>d-duvpH7S2VLvAp<69VSS}`k7`,T`' );
define( 'LOGGED_IN_KEY',    '-?1|Lvuj+nXItV(9?rYNA@,TlW*uTI&qKG?ur;QT*3=i#{ZqhyN!*3a2DP|by!z1' );
define( 'NONCE_KEY',        'n=!dqkdg/-.1Imo3LL(U[N}dJ}4od>]Zr=m6/-L6o}D`wA=N#X5z~l:WTC+9,d>a' );
define( 'AUTH_SALT',        'vrC63gK+H|XFWPfL$g=aR?[A[^-8|_$Oi3SW#.<,j+&zKDEsqA/Q*7aDh;v(gOPB' );
define( 'SECURE_AUTH_SALT', '{)Px9zoa(k+E?cf#C[d(}2N1ZpH)rh791[R%S*Y=ZR[g0tpcG|~tJ]AFtzaea/xh' );
define( 'LOGGED_IN_SALT',   'mqke=k&F*rZnT_Eu4U&l55QZ27O7wi =/S0JiT0JPZ`<*Qp(0qfN)P|/y!j$^1:D' );
define( 'NONCE_SALT',       '_XW;vmn0 LW$/`yohB<#K.VI^klhb58d%+^o}@W8|M(-}]4{ldu7Z;=STLJ7v{V%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
