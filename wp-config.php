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
define( 'DB_NAME', 'woocommerce' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Iy^w i5e,O*bN[Je|jOS##),3st, P8g^mSDo~3/k}W9ETgjI? b MQ{]#[hVHY/' );
define( 'SECURE_AUTH_KEY',  'R)a%6)Pq4%$_cpK*4sg^Gvc_QoZ!=-@97#h(1PNN!<K%B>P8 x*AC9)RjWOsUe1<' );
define( 'LOGGED_IN_KEY',    'f_g}bTKQ/cpW+.pcXK8*JTT2Jd!Qsf>fK5:5QWFPjpb}<8A|V/ma|/,Xequnr>tj' );
define( 'NONCE_KEY',        '|Dn/cvmIqD;q%Jxi`F[9>fp3SlAw^^H|)PF28+X=+I@ 6lSOAi23Kzg;.<~rS6YM' );
define( 'AUTH_SALT',        'U(Tn/{c~m/w>o0URSx1KG86)h#vU!Im-K={s4,88yX][%*6[+Ap&cAuv`B}g5Npb' );
define( 'SECURE_AUTH_SALT', '2{2n5l(f|XeEl`OJ}AB*8|7t4x^&z0d~vy`,ksaTc[xP@^JV+vw(hbjFY2VyH=#l' );
define( 'LOGGED_IN_SALT',   '-QTN7K#}w}+&e;6Kl2)Z5,]bR}}Jx^&m.>h12laiYkx&z[Z;L qt!#52hZBaUCMH' );
define( 'NONCE_SALT',       '=tG-l3G%.]v=6I+<t,huBxL|:7J]z.(+kQ%:?>~}>fxH7<.JFd?^+6 ]73Bs_6C$' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'woo_';

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
