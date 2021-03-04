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
define( 'DB_NAME', 'tylurrude' );

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
define( 'AUTH_KEY',         '6[fteq)^sPM(qt[wb%P2|z^-qR|4_OAH[SOX(0v3]$_}+bG}ok+pPW7$%0c~)ZFB' );
define( 'SECURE_AUTH_KEY',  ']G=;7LblY8Pq[g?O,YR|Zl|Mu.Q `-3tF|?5}.W C /8MFr[)H=l 3Na$C-MUCbb' );
define( 'LOGGED_IN_KEY',    '@{s]x5>0%=d`NXqE>F^h!>BFn.JW97Zqwvyo7l3+85bMTYd,ZlU`dHn=9n5JAw{U' );
define( 'NONCE_KEY',        'Q=TE:8d:_UBPvIDi2xk_Pxn;<0)>QJJLHcOnYw`,08@3a||p-y[{t@Z?qKF(_9m@' );
define( 'AUTH_SALT',        'r5g^.NVYM:Ln^KI~^^5%f|$6sd>obds>9k]pm:^6ve [Q.L1y qyo1H<A#1choWP' );
define( 'SECURE_AUTH_SALT', 'xHZ.)eTmp!*zCZ*$Gqx`Ic_^Ur^FtDkP1pa5cPX{FOH:v|=2A;{]$sIFy^OF)qY<' );
define( 'LOGGED_IN_SALT',   'n1*h1gLSW ^LU;k2VHZw&3vsS6_W3Ef&F&uN/1p b(+-nqlO`Z!gd?V=3H/+o_<=' );
define( 'NONCE_SALT',       'y^k91U&~s^3Vi8qKUH&@n?_wH)?Nd?9.;;.I79[INlve^<f:|cOKg~/J{,_fflYx' );
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
