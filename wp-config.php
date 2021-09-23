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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M-e}j1OrE=J Hof2$p;FXx5R,(x5)MD,T|7F%lt3q03IUzu=&.%^y*h!`fxso%ZV' );
define( 'SECURE_AUTH_KEY',  '&Dk:efKWow)3+Y+@=rn#{yPwX#*?@#swzx~`@7,Xvcw#zP^K_ryY(5+U9AWmB+DN' );
define( 'LOGGED_IN_KEY',    'fy4s(DXS;A74I:f*7-[fp.NE0tuI000i[m_qAt(I>#n2QxTRHg>M`<U%8c5mPl81' );
define( 'NONCE_KEY',        '5:ug<))T&I;1I,+I;M`~ISsd~<@Jq<Nzzoc^[}s@W?ZsDHsa3e3+:[]z8:+s8;O_' );
define( 'AUTH_SALT',        'ez}ip=:SY[DFX,J<{*:M<)8^+{2 bfd@XWV`*&]&r!lf5l6z-_Lw4zj`rUZL/0(3' );
define( 'SECURE_AUTH_SALT', '(DafkqBoP%nbx/qFOQ6o(%n:%V]P3d-O8hgbMJXpa&fZCC:L!wfUO<9l#bwQo=[L' );
define( 'LOGGED_IN_SALT',   'D9n=0lLcL>kEt 2SPN85-A,/qP|IB^J$6w9_D.bU)Z>wZdV(U8BiDC&^R9%4Al_#' );
define( 'NONCE_SALT',       '~^`fi_@A$.(eJ)gOo_:yZ(FcpE$SNgQ]^3(d>ksI+&*_TmXb;2i+&DrAn?{WLIyW' );
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

define('WP_MEMORY_LIMIT','300M');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

set_time_limit(300);