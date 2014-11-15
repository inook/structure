<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_structure');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd&KyrJSwM@UBw0[|$lX4zyrkgDTIJ0j9a:oI^18r!DxJ}?c76HuQoq<ltVjfAnib');
define('SECURE_AUTH_KEY',  '(&Dmv[iya,aa5:)N Aq&vTZn]UT*mBS8hP:i3[]y?z8w_~&LsQJ^00}:Br[)`!)D');
define('LOGGED_IN_KEY',    '*:K)xnaq2T!3@3qt7hbmrld%z0?z*Q8*;(Lk!(KArSZSw9J15dl*g3]c2/x..%^i');
define('NONCE_KEY',        'm_ji&[&!E-3e{Bb%#X&;qG(%Q?lkdHak4Xj~_Uqgg;_N_]!$cI@5T/{QDg#9Qu06');
define('AUTH_SALT',        'gI_I[>Ovmb]ZV5c&7GR|w83r@^8bPhP_iw@u)o<n<.{)lb3R, }KkjiW4J/:dZ72');
define('SECURE_AUTH_SALT', 'Bp{eZx{Xxo lV:<<$1Sa6/whEQy49#kSL-<azTC[Bsh#i#0ScW:p3>hsiE%VU(.E');
define('LOGGED_IN_SALT',   'd9 gFZ[RAy%b8vEgH|f#Ecf~RA;eYxNot+;OyK1-t^g./>}HpI6aI@;5fpl|raDk');
define('NONCE_SALT',       '(RCkRHL4HD^(>{)?HLIY/(n=F^Z??KRd;-1hl1j6&&lZjsn$e?M$5,#:eM`UE[.9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');