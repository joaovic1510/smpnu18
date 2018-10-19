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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sao-miguel');

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
define('AUTH_KEY',         'Nr|*AK:ytIW3sjvCJA-G6aKI}(r(n3V)iDWYTW11yw@xnOjEc$JtcMLAclKVfrs5');
define('SECURE_AUTH_KEY',  'Auo e2:Wx@nFn}aXQi {8MvNU|iqAp:u{m__3c ?>K(Mj9:xEtzXdBB&.bmw&h,F');
define('LOGGED_IN_KEY',    'BZ(DyOv63mx9+23kQ]]s!#U08 ]Ew_2W7I;&o4&OX]u$~9XOywMj.Be`]{2vG+#C');
define('NONCE_KEY',        'rb#]yfcsS0ykGm?1/B,^Cqw!6& f1i(48o88Mp>-:X[wse.z~+BS6BpWOP=VJDhR');
define('AUTH_SALT',        'nNSBn65sB3d:KHmO=pE4fK%Hyr~*B#ECJ|PT<j>pJ%! ;XFFb 0F4uC:WC(p79l3');
define('SECURE_AUTH_SALT', 'GA{t8-pz/SDTVo.qp0Vn^![hvZ8X2<oHY-Og!/)TQ+z<c8FGe<5AA?7VlkwClKRD');
define('LOGGED_IN_SALT',   '94EPg&|rA(E*?VnLVk~#bi!z:PS2aQx{%muun+4lsBq.p8J}4).zB{~7UUZ,A1.,');
define('NONCE_SALT',       '@dvVq+6O!+Lx@%>sqkmfT]c*k#v]:RC2y%ZCdkjg>=qzz l$iJ ts.5E+yIgzY-A');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
