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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY', '^HM<].ychezrne2D4sqR.-8&$zWH}uUIP_Y}uXEX#6;RgCVI2%1F!tp1`rr>,.T^');
define('SECURE_AUTH_KEY', 'r`Z[gA>mhnw.plE4Fb!Uv3)8?Z_TUt>1(<`#5` ~IE3K`L_3U0G4o><>H8g9yGD[');
define('LOGGED_IN_KEY', '^QSm71qr|Or3^OOr]Qc4&~@ZGL]1Ll)/lZsOMyyONE2+j_X7(`jbri3bmh??s t]');
define('NONCE_KEY', 'SHv4!O,7<y$|x?FyA#>Dw|.Yz|q:w--hUMHyLyZl(ItVyJA$F~v3_1A)T?Bw53/n');
define('AUTH_SALT', 'IE}g<A`hZr<X/)k WXc%rN(TA.]|2%?Dk@2I=Un`k-nqDi#S=WG!3,@2J`2Da#sM');
define('SECURE_AUTH_SALT', '.M|mzb$cc};G *3>O<.XiE(*Vwrmy)s!P}lLbPmS{n|y}nInEVL<yUf5-Xt rY|~');
define('LOGGED_IN_SALT', 'P8fMKXPUNB08eAx%mT^SVFvxo 2aS)N9i3YoWmw>3(l%$3i0]2;H`f~_U1]VbLVL');
define('NONCE_SALT', 'jJ||?~&3!aAgB^(PH?apJNFO4z0T]62ujWC3=fmkpK01ZGzv^e=q22cUQ{AK&4Lu');

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

