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
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_ADMIN', true);
}
https://www.wordpress.test/

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '}Xp+ |[6Ks4y.5<!($@SG!1se.U:{KG%TpdMrEIcSHz?^vAZB~m_* {cT+VSV<Q9' );
define( 'SECURE_AUTH_KEY',  'DiXH`1.-g)A!^L,/6_jUf@C.*sw<#3N.z VEDnr[O~Td=GroDSyFQ!75ah$,79Vx' );
define( 'LOGGED_IN_KEY',    '-}wy@7lj(j<lnSe$H/u8+*4DMi`7Sx7h=i7CArpTf^XWWeaKX!HKu@at.GA;g%-{' );
define( 'NONCE_KEY',        'hKBu6R~!9g);F~V6]yfZm%anLY+?Zy4?-_S3$&YD^G3I/{c.b1}X.qN]0Y]v*}`@' );
define( 'AUTH_SALT',        '-iu--D.A/YgB<60pr}R)[O .HS^DxOP;05.1kKP{AQm2 Frbf3Wo,7t$_?np;9&n' );
define( 'SECURE_AUTH_SALT', '$G.oqz6uiibS8|JUC5QA/OY.sKz?&Q(,gos>_-=,uiP)?#mc5+|+Z+REtiJP$qCt' );
define( 'LOGGED_IN_SALT',   '&52#6vyKcMc(K`aJ{%)V:P3Xe$wl!tsR$^QJ^,_:{?]o4vy?,ngOy!:O0uI> pgZ' );
define( 'NONCE_SALT',       'd`0ia_KC=>{>A6P&%UmvG3^LlQ>R[f)S-w}h|k}lq:18>!ghFX6$%A7SYDuSJe^R' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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


