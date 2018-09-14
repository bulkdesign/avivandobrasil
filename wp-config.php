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
define('DB_NAME', 'avivandobrasil');

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

define('FS_METHOD','direct');
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
define('AUTH_KEY',         '5@W!Y3))Z`4Y0qGjI8|S4G$,ZF+yHvxwM+vE3qMU9JTw4-v;hjoV9Ap2{F,~ge%U');
define('SECURE_AUTH_KEY',  'S+j)}ZScG-&3sE_<fBq(uwE>^yq6p[fo9q+Uyrov ,1`=xCcH11ybu]k-1`X0)q]');
define('LOGGED_IN_KEY',    'UGz!9H6fUP[>~NGs`,,oj@.r%v(^rmr?.%~GgIAs^%dhj;T@(q8)`H[TUUDY#.q)');
define('NONCE_KEY',        'laKW2tmuB]2;1NK3M}<n/uwSP3<TW~A@k@_GR_}wQ_MLKqI>IF-e:jg#R6*~(FM9');
define('AUTH_SALT',        'oh&bu:0W0;ffNJG%L/rB`NYn1> >uqVXI/a(o&f$p$V7pE2h<2.% j<g+jT._5>m');
define('SECURE_AUTH_SALT', '4`iIWNbmZ8C81R70~YMu[MT=xc^`>J9-&-I~= c,=`7c.q9[cG-Uh%,^Lijn7OyW');
define('LOGGED_IN_SALT',   '~5MKQl5.VWpSDBkU-3Ubsm|B6>KFz2|y}Hj.`--edxscviVqO~-mfd,,fbDKINB=');
define('NONCE_SALT',       'dSBOOZK~u_kiM8AtAjysONh{(eI]*hzs?ou&Y{kc9/X9D(Gzk`1`<F~dDbmX(O^%');

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