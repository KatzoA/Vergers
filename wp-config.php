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
define('DB_NAME', 'vergers');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&6s_UY<xAa=lugAE.-:;U4UE[o5=ZK?,H87,?E`p0cLnFYX15StOp-uZekR*,c,l');
define('SECURE_AUTH_KEY',  '/n$ AO:ci(7-!-P6c;m+?X6=FerRA4c5o7[lTR?)<%cd<BRGOpELGl([{^WTm8NW');
define('LOGGED_IN_KEY',    'ON8XrR[lJW2ylFP|F Bsrp:jvK*SOHlK>?W456a|7:|A*9 ZL/q)99{m7!z@6NFg');
define('NONCE_KEY',        '{`S)/| hCo+G}-;el;(14tIR[x;~%Z!&R8]sP4|Ekx3_fn5:)MEbAy)oTV-$LpP&');
define('AUTH_SALT',        '-;E{~*D7=s`h U056oe4{?]_70DM8LOUCpb0T-dG-UCS!.rpOC*:Ue7&D,rp<,Ot');
define('SECURE_AUTH_SALT', 'h=VeR-n@a4^-=-Ua4V6Kcc$<th]]s=_W_WTYY7GiW`xU0I!hxcu(M:7|O.*Y*ZKy');
define('LOGGED_IN_SALT',   '-GqR!y28 K%qV+?cWY*qB/ nKTv%tP>;X}V0YTO=C+F@iK17}|Hwqixw0@.kg0 k');
define('NONCE_SALT',       'm3CwWHxg}xLnY/4II-SRo<6Cd9zE^%>r?UGPG@vP=USlNslG=sbkLnsUHl0-`*HB');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
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