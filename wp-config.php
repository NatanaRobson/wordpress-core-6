<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_salon' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         ']c[<Bv5g_n@5S##`p]?~M-|HfWZZI+rc=gk$8?6i<&qF]paqxoQ^j)z:Bb G=j%C' );
define( 'SECURE_AUTH_KEY',  '|u`>KHAcw8h!uz!F0LkPr:7DKXIo~aMCkC]>/jdO_+VnzzU<(L<*?i6r@+[*/zU)' );
define( 'LOGGED_IN_KEY',    '4Jvr=bUqc>0G*+MRQ@+7K6+ufUbEJ 2rws~zD}p$uXxuA]0<J!VJ6c^S(ahn p_K' );
define( 'NONCE_KEY',        'O39yz&1b(@P{M26A&4_Uw>jhH[G <J9E#XiB;CX~|kW]e^rXk>fu_`R;vQk^`BMK' );
define( 'AUTH_SALT',        '6Gq~=`qE_*Uxd;i QPdkQw%??E=M7[U;}h,(O8DA93}8{Yx*QPNLE-+Of?#k`<!}' );
define( 'SECURE_AUTH_SALT', 'D[t=,BQ6?lwS39cBewH`!~,r+#sboB-3P),~.qibn$9]@8Un/$-6|H(.!oxmhlLY' );
define( 'LOGGED_IN_SALT',   '0bvh=x-q/o~@7t?3Mw*45# $!_bL<K-3E x5lJQ8{RyEWno0Z_v3Is=6h|QnA|.H' );
define( 'NONCE_SALT',       'Sc!rp[d)Alxsh_3a[N=`K*]N2F3,i5W/;9WU}G]Du|P~hvydRT9}}WaQz rdTz3m' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
