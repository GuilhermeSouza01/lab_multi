<?php

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'lab_multi');

define('FS_METHOD', 'direct');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')l,sIu%VYQoQC2v)`#A sK`u`:{&{5FD*PEr*l<B*@y89;})m^YErG2&uD#oL0zg');
define('SECURE_AUTH_KEY',  'Q-I9paQ]?x%!Oe&BB=;DgC;4/G-p,XkGz0J-OvDTphH&Z)gD(:7`XDS@@$@lOU8.');
define('LOGGED_IN_KEY',    '.eZ7oa+l-,$j|7,%V<MnZG[<7EMt{{K8zl Ql)(^yTrG;nCpDTUj{x}i=vvp^N>m');
define('NONCE_KEY',        ')FYxgt5 &K$.#|[yQXjV*qp(Rjwr?81:NR^MXF*WzCYH%i/Q(_Hb! g5t&2<]8+1');
define('AUTH_SALT',        '@y5S3c/ORa#9fu!5>2}%N5]|oE9Mh+5|}4~2T( xc;tQdv05F28-d|lsv^0kB-=]');
define('SECURE_AUTH_SALT', 'O&yL+4xmqu8XOtlg6t<L+l<m4AJI_yUW/<V!os}..Mz]K|zoM|-$rM1Ihn[mn#z`');
define('LOGGED_IN_SALT',   'OYPBg3wV0goS5)<RL.^?mPC>rKt42m%7:PqAt4EjSS.Di,%g,Ou8r` (Dokr:&d2');
define('NONCE_SALT',       'F3I9S@ViOnP9AgXAGk nv?a!|4^y}r ]CNL AsZdz^Yj?GR;G3`cIdP#/Igk7wWo');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
