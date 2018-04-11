<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpressasix');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '87f}:v1P$>~$DxUZu^w^?&m|:~;8>k}k|OZQz8_WLD;d$-Vl+2nwnkeTE9R5hk~/');
define('SECURE_AUTH_KEY', 'Xn4}7c;|I5G.l|g*`d.d;2-~Fb~Phq<gZZ$BcH%D;vI+_0W~Ga+;f^xmT.Jv-AN=');
define('LOGGED_IN_KEY', 'jH=Z!EHvObOfOZc.<{[:]KMvQLenBT <f.MEsS+r{-y&y340Lk&>eBgTnPg#6,E?');
define('NONCE_KEY', 'XcM(]~OcrCV,D&ZwVrCj+2{~X1)$cz/ubX%3`PkU!uf2qy|wk1^qMBC&VtN17gHW');
define('AUTH_SALT', 'Pqzw~r^N0sV{j(SKn>4eI^/f]SDfTXAPzD?rr1Y a,>?U69$5!Uu(Jl!9)LHc)y}');
define('SECURE_AUTH_SALT', '4q71@>H7j&L/L:`hcI$C[#7@PGUJFO6dAihPYH5`wUO(<))ywpATn7sc p)lPDiJ');
define('LOGGED_IN_SALT', '6CgzTxrvj,zF/JVK@I*Usr)@>@Lc@N/+.Y|<aPZ3ES4PBx0/+ r#Br=(8GP=s&pc');
define('NONCE_SALT', '2aX|t*I20^uRc;L0*M*I2J/Y<fsk,}7{(A<ZNX*^1<3.JGx@M3k=H^$x2q5J/rUl');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

