<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC_SEARCH' => 'Filtro rápido',
    'LBL_ADVANCED_SEARCH' => 'Filtro avançado',
    'LBL_BASIC_TYPE' => 'Tipo básico',
    'LBL_ADVANCED_TYPE' => 'Tipo avançado',
    'LBL_SYSOPTS_2' => 'Que tipo de base de dados será utilizado pela instância SuiteCRM que está prestes a instalar?',
    'LBL_SYSOPTS_DB' => 'Especificar tipo de base de dados',
    'LBL_SYSOPTS_DB_TITLE' => 'Tipo de base de dados',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Por favor, corrija os seguintes erros antes de continuar:',
    'ERR_DB_VERSION_FAILURE' => 'Não foi possível verificar a versão da base de dados.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Indique o nome de utilizador para administrador do CRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'Indique a senha para o administrador do CRM.',

    'ERR_CHECKSYS' => 'Foram detetados erros durante a verificação de compatibilidade. Para que a sua instalação SuiteCRM funcione corretamente, por favor, tome as medidas adequadas para resolver os problemas listados abaixo e pressione o botão para nova verificação, ou tente instalar de novo.',
    'ERR_CHECKSYS_CALL_TIME' => 'Permissão de passagem por referência de tempo de chamada está ativada (deverá definir Call Time Pass Reference para Off no php.ini)',
    'ERR_CHECKSYS_CURL' => 'Não encontrado: o agendador do CRM será executado com funcionalidades limitadas.',
    'ERR_CHECKSYS_IMAP' => 'Não encontrado: Entrada de correio e Campanhas (email) necessitam de bibliotecas IMAP. Nenhuma delas ficará funcional.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Definir como ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M ou maior no seu ficheiro php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Alerta: Não editável',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'A sua versão de PHP não é suportada pelo SuiteCRM. Tem de instalar uma versão que seja compatível com a aplicação SuiteCRM. Por favor, consulte a matriz de compatibilidade nas notas de lançamento sobre versões de PHP suportadas. A sua versão é ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'A sua versão de IIS não é suportada pelo SuiteCRM. É necessário instalar uma versão que seja compatível com a aplicação SuiteCRM. Por favor, consulte a matriz de compatibilidades nas notas de lançamento para conhecer as versões IIS suportadas. A sua versão é ',
    'ERR_CHECKSYS_FASTCGI' => 'Detetámos que não está a utilizar um manipulador de mapeamento FastCGI para o PHP. É necessário instalar/configurar uma versão que seja compatível com a aplicação SuiteCRM. Por favor, consulte a matriz de compatibilidade nas notas de lançamento para versões suportadas. Consulte <a href="https://www.iis.net/php/" target="_blank">https://www.iis.net/php/</a> para detalhes ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Para otimizar a utilização do IIS/FastCGI sapi, defina o valor 0 para o fastcgi.logging no seu ficheiro php.ini. ',
    'LBL_DB_UNAVAILABLE' => 'Base de dados indisponível',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Não foi encontrado suporte a base de dados. Por favor, certifique-se que possui os drivers necessários para um dos seguintes tipos de base de dados suportados: MySQL, MS SQLServer. Talvez seja necessário descomentar a extensão no ficheiro php.ini ou recompilar com o ficheiro binário correto, dependendo da sua versão de PHP. Por favor, consulte o manual do PHP para mais informações sobre como ativar o suporte a bases de dados.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Não foram encontradas funções associadas às bibliotecas de análise sintática XML que são necessárias à aplicação SuiteCRM. Dependendo da sua versão de PHP, talvez seja necessário descomentar a extensão no ficheiro php.ini ou recompilar com o ficheiro binário correto. Por favor, consulte o manual do PHP para mais informações.',
    'ERR_CHECKSYS_MBSTRING' => 'Não foram encontradas funções associadas à extensão Multibyte Strings PHP (mbstring) que são necessárias à aplicação SuiteCRM.  <br/><br/>Geralmente, o módulo mbstring não está ativado no PHP e deve ser ativado com --enable-mbstring quando o ficheiro binário PHP é construído. Por favor, consulte o manual do PHP para mais informações sobre como ativar o suporte a mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'O ficheiro de configuração existe, mas não é editável. Por favor, tome as medidas necessárias para tornar o ficheiro editável. Dependendo do seu sistema operativo, pode ser necessário alterar as permissões executando o chmod 766, ou clicando com o botão direito no nome do ficheiro para aceder às propriedades e desmarcar a opção somente leitura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'O ficheiro para a substituição de configurações existe, mas não permite a escrita. Por favor, realize os passos necessários para atribuir permissões de escrita ao ficheiro. Dependendo do seu Sistema Operativo, pode ser necessário alterar as permissões executando o chmod 766, ou clicar com o botão direito do rato sobre o ficheiro para aceder às propriedades e desativar a opção Só de leitura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'O diretório personalizado existe, mas não é editável. Por favor, tome as medidas necessárias para tornar o ficheiro editável. Dependendo do seu sistema operativo poderá ser necessário alterar as suas permissões (chmod 766) ou clicar nele com o botão direito e desmarcar a opção APENAS LEITURA.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Os ficheiros ou diretórios abaixo listadas não são editáveis ou estão em falta e não podem ser criados. Dependendo do seu sistema operativo, a correção pode exigir que altere as permissões (chmod 755) nos ficheiros ou no diretório superior. Em alternativa clique com o botão direito do rato no diretório de origem e desmarque a opção 'apenas leitura' aplicando-a a todas as subpastas.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Não foram encontradas funções associadas às bibliotecas de análise sintática JSON que são necessárias à aplicação SuiteCRM. Dependendo da sua versão de PHP, talvez seja necessário descomentar a extensão no ficheiro php.ini ou recompilar com o ficheiro binário correto. Por favor, consulte o manual do PHP para mais informações.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Sobreposição à configuração',
    'ERR_CHECKSYS_SAFE_MODE' => 'Modo de Segurança está ativo (pode desativar no php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Zlib não encontrado: o SuiteCRM colhe enormes benefícios no seu desempenho com a compressão zlib.',
    'ERR_CHECKSYS_ZIP' => 'Suporte ZIP não encontrado: o SuiteCRM precisa de suporte a ZIP para poder processar ficheiros comprimidos.',
    'ERR_CHECKSYS_PCRE' => 'Biblioteca PCRE não encontrada: o SuiteCRM necessita da biblioteca PCRE para processar a correspondência de padrões de expressões regulares de estilo Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Versão da biblioteca PCRE: o SuiteCRM necessita da biblioteca PCRE, versão 7.0 ou superior, para processar a correspondência de padrões de expressões regulares de estilo Perl.',
    'ERR_DB_ADMIN' => 'O nome de utilizador e/ou senha do administrador da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor, insira um nome de utilizador e senha válidos. (Erro:',
    'ERR_DB_ADMIN_MSSQL' => 'O nome de utilizador e/ou senha do administrador da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor, insira um nome de utilizador e senha válidos.',
    'ERR_DB_EXISTS_NOT' => 'A base de dados especificada não existe.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Já existe uma base de dados com os dados de configuração. Para executar uma instalação com a base de dados selecionada, por favor execute novamente a instalação e escolha: "Remover e recriar as tabelas SuiteCRM existentes?". Para fazer uma atualização, utilize o Assistente de atualização no painel de administração. Por favor, leia a documentação de atualização <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">aqui</a>.',
    'ERR_DB_EXISTS' => 'Já existe uma base de dados com esse nome. Não é possível criar outra com o mesmo nome.',
    'ERR_DB_EXISTS_PROCEED' => 'Já existe uma base de dados com o nome indicado. Poderá: <br>1. carregar no botão para voltar atrás e escolher um novo nome <br>2. clicar em SEGUINTE e continuar, mas todas as tabelas existentes nessa base de dados serão eliminadas.<strong>Isto significará que as suas tabelas e dados serão destruídos.</strong> ',
    'ERR_DB_HOSTNAME' => 'O nome do hospedeiro não pode ficar em branco.',
    'ERR_DB_INVALID' => 'Tipo de base de dados selecionado é inválido.',
    'ERR_DB_LOGIN_FAILURE' => 'O nome do servidor da base de dados, ou o nome de utilizador e/ou senha da base de dados é inválido(a) pelo que não foi possível efetuar uma ligação à base de dados. Por favor, insira um nome de hospedeiro, nome de utilizador e senha válidos',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'O nome do servidor da base de dados, ou o nome de utilizador e/ou senha da base de dados é inválido(a) pelo que não foi possível efetuar uma ligação à base de dados. Por favor, insira um nome de hospedeiro, nome de utilizador e senha válidos',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'O nome do servidor da base de dados, ou o nome de utilizador e/ou senha da base de dados é inválido(a) pelo que não foi possível efetuar uma ligação à base de dados. Por favor, insira um nome de hospedeiro, nome de utilizador e senha válidos',
    'ERR_DB_MYSQL_VERSION' => 'A sua versão do MySQL (%s) não é suportada pelo SuiteCRM. É necessário instalar uma versão que seja compatível com a aplicação SuiteCRM. Por favor, consulte a matriz de compatibilidades nas notas de lançamento para conhecer as versões MySQL suportadas.',
    'ERR_DB_NAME' => 'Nome da base de dados não pode ficar em branco.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "O nome da base de dados não pode conter '\\', '/', ou '.' ",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "O nome da base de dados não pode começar por um número nem por \"#\" ou \"@\" e não pode conter espaços nem caracteres como '\"', \";'\", '*', '/', '\\', '?', ':', '&lt;', '&gt;', ou '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "O nome da base de dados apenas pode conter caracteres alfanuméricos e os símbolos '#', '_' ou '$'",
    'ERR_DB_PASSWORD' => 'As senhas fornecidas para o administrador da base de dados do SuiteCRM não coincidem. Por favor, reinsira uma senha igual nos campos respetivos.',
    'ERR_DB_PRIV_USER' => 'Forneça um nome de utilizador do administrador da base de dados. O utilizador é necessário para a conexão inicial à base de dados.',
    'ERR_DB_USER_EXISTS' => 'Já existe esse nome de utilizador da base de dados do CRM -- não é possível criar outro com o mesmo nome. Por favor, insira um novo nome de utilizador.',
    'ERR_DB_USER' => 'Insira um nome de utilizador para ser administrador da base de dados do CRM.',
    'ERR_DBCONF_VALIDATION' => 'Por favor, corrija os seguintes erros antes de continuar:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'As senhas fornecidas para o utilizador da base de dados do CRM não coincidem. Por favor, reinsira senhas iguais nos campos respetivos.',
    'ERR_ERROR_GENERAL' => 'Foram encontrados os seguintes erros:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Não é possível eliminar o ficheiro:',
    'ERR_LANG_MISSING_FILE' => 'Não é possível encontrar o ficheiro:',
    'ERR_LANG_NO_LANG_FILE' => 'Não foi encontrado o ficheiro de pacote de idioma em incluir/idioma no interior:',
    'ERR_LANG_UPLOAD_1' => 'Ocorreu um problema com o seu carregamento. Por favor, tente de novo.',
    'ERR_LANG_UPLOAD_2' => 'Pacotes de Idiomas devem ser ficheiros ZIP.',
    'ERR_LANG_UPLOAD_3' => 'O PHP não pôde mover o ficheiro temporário para a diretório de atualização.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Pasta indicada para Log não é válida.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Pasta indicada para Log não é editável.',
    'ERR_NO_DIRECT_SCRIPT' => 'Não foi possível processar diretamente o script.',
    'ERR_NO_SINGLE_QUOTE' => 'Não é possível usar aspas simples para ',
    'ERR_PASSWORD_MISMATCH' => 'As senhas fornecidas para o administrador do SuiteCRM não coincidem. Por favor, reinsira senhas iguais nos campos das senhas.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Não é possível editar o ficheiro <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Pode continuar esta instalação criando manualmente o ficheiro config.php e colar a informação de configuração abaixo no ficheiro config.php. No entanto, <strong>deve</strong> criar o ficheiro config.php antes de prosseguir para a próxima etapa.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Lembrou-se de criar o ficheiro config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Alerta: Não foi possível editar o ficheiro config.php. Por favor, assegure-se que ele existe.',
    'ERR_PERFORM_HTACCESS_1' => 'Não é possível escrever em ',
    'ERR_PERFORM_HTACCESS_2' => ' ficheiro.',
    'ERR_PERFORM_HTACCESS_3' => 'Se pretende impedir que o seu ficheiro de historial seja acessível via browser, crie um ficheiro .htaccess na pasta do ficheiro de historial e adicionando a linha:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Não foi detetada qualquer ligação à Internet.</b>Quando tiver uma ligação ativa, por favor, visite <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> para se registar no SuiteCRM. Ao desvendar-nos um pouco sobre como pretende utilizar o SuiteCRM poderemos assegurar um fornecimento contínuo das aplicações certas para as suas necessidades.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'O diretório de sessão indicado não é um diretório válido.',
    'ERR_SESSION_DIRECTORY' => 'O diretório de sessão indicado não é editável.',
    'ERR_SESSION_PATH' => 'Caminho da sessão é obrigatório se pretende especificar um personalizado.',
    'ERR_SI_NO_CONFIG' => 'Não incluiu o config_si.php na raiz do documento, ou não definiu $sugar_config_si em config.php ',
    'ERR_SITE_GUID' => 'ID da aplicação é obrigatório se pretende especificar um personalizado.',
    'ERROR_SPRITE_SUPPORT' => "Neste momento não conseguimos localizar a biblioteca GD, como resultado, não poderá utilizar a funcionalidade Sprite CSS.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Alerta: A sua configuração PHP deve ser alterada para permitir o carregamento de ficheiros com pelo menos 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Tamanho de ficheiros a carregar',
    'ERR_URL_BLANK' => 'Indique o URL base para a instância SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Não foi possível localizar registo de instalação de',
    'ERROR_MANIFEST_TYPE' => 'Ficheiro manifesto deve especificar o tipo de pacote.',
    'ERROR_PACKAGE_TYPE' => 'Ficheiro manifesto especifica um tipo de pacote não reconhecido',
    'ERROR_VERSION_INCOMPATIBLE' => 'O ficheiro carregado não é compatível com esta versão do CRM: ',

    'LBL_BACK' => 'Voltar',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_ACCEPT' => 'Aceito',
    'LBL_CHECKSYS_CACHE' => 'Subpastas de Cache — Editáveis',
    'LBL_DROP_DB_CONFIRM' => 'Já existe uma base de dados com o nome indicado. Poderá <br>1. Clicar no botão Cancelar e escolher um novo nome para a base, ou <br>2. Clicar no botão Aceitar e continuar. Esta segunda opção fará com que todas as tabelas existentes na base de dados sejam eliminadas. <strong>Isto significará que as suas tabelas e dados serão destruídos.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Componente',
    'LBL_CHECKSYS_CONFIG' => 'Ficheiro de configuração SuiteCRM (config.php) editável',
    'LBL_CHECKSYS_CURL' => 'Módulo de cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Diretório personalizado — Editável',
    'LBL_CHECKSYS_DATA' => 'Subpastas de dados — Editável',
    'LBL_CHECKSYS_IMAP' => 'Módulo IMAP ',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Módulo MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'OK (sem Limite) ',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Ilimitado) ',
    'LBL_CHECKSYS_MEM' => 'Limite de Memória PHP',
    'LBL_CHECKSYS_MODULE' => 'Ficheiros e subpastas de módulos editáveis',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Não Disponível',
    'LBL_CHECKSYS_OK' => 'Aceitar',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'Correto (ver. ',
    'LBL_CHECKSYS_PHPVER' => 'Versão PHP',
    'LBL_CHECKSYS_IISVER' => 'Versão IIS',
    'LBL_CHECKSYS_JSON' => 'Análise sintática JSON',
    'LBL_CHECKSYS_RECHECK' => 'Reverificação',
    'LBL_CHECKSYS_STATUS' => 'Situação',
    'LBL_CHECKSYS_TITLE' => 'Aceitação da verificação do sistema',
    'LBL_CHECKSYS_XML' => 'Análise sintática XML',
    'LBL_CHECKSYS_ZLIB' => 'Módulo de Compressão ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Módulo Suporte ZIP',
    'LBL_CHECKSYS_PCRE' => 'Biblioteca PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Por favor, corrija os seguintes ficheiros ou diretórios antes de continuar:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Por favor, corrija os seguintes diretórios de módulo e os ficheiros nelas contidos antes de continuar:',
    'LBL_CHECKSYS_UPLOAD' => 'Diretório de carregamento editável',
    'LBL_CLOSE' => 'Fechar',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'ser criado',
    'LBL_CONFIRM_DB_TYPE' => 'Tipo de base de dados',
    'LBL_CONFIRM_NOT' => 'não',
    'LBL_CONFIRM_TITLE' => 'Confirmar definições',
    'LBL_CONFIRM_WILL' => 'irá',
    'LBL_DBCONF_DB_DROP' => 'Remover tabelas',
    'LBL_DBCONF_DB_NAME' => 'Nome da base de dados',
    'LBL_DBCONF_DB_PASSWORD' => 'Senha do utilizador da base de dados',
    'LBL_DBCONF_DB_PASSWORD2' => 'Reinserir senha do utilizador da base de dados',
    'LBL_DBCONF_DB_USER' => 'Nome do utilizador da base de dados',
    'LBL_DBCONF_SUITE_DB_USER' => 'Nome do utilizador da base de dados',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nome de utilizador do administrador da base de dados',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Senha do administrador da base de dados',
    'LBL_DBCONF_COLLATION' => 'Intercalação',
    'LBL_DBCONF_CHARSET' => 'Codificação de texto',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Configuração avançada da base de dados',
    'LBL_DBCONF_DEMO_DATA' => 'Preencher a base de dados com dados de demonstração?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Escolher dados de demonstração',
    'LBL_DBCONF_HOST_NAME' => 'Nome do hospedeiro',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instância do hospedeiro',
    'LBL_DBCONFIG_SECURITY' => 'Por razões de segurança, pode especificar um utilizador exclusivo de base de dados MySQL para se ligar à base de dados do SuiteCRM. Este utilizador deve poder editar, atualizar e obter dados da base de dados do SuiteCRM que será criada para esta instância. Este utilizador pode ser o administrador da base de dados acima especificado, ou pode indicar informações para um novo ou de um já existente na base de dados.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Indicar um utilizador existente',
    'LBL_DBCONFIG_CREATE_DD' => 'Definir utilizador a criar',
    'LBL_DBCONFIG_SAME_DD' => 'Igual ao utilizador administrador',
    'LBL_DBCONF_TITLE' => 'Configuração da base de dados',
    'LBL_DBCONF_TITLE_NAME' => 'Indicar nome da base de dados',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Indicar dados de utilizador da base de dados',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Senha',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'O instalador já foi executado uma vez. Como medida de segurança, foi desativada uma segunda execução. Se tem a certeza absoluta de que pretende executá-lo novamente, por favor, vá ao seu ficheiro config.php e encontre (ou adicione) a variável chamada \'installer_locked\' e defina-a para \'false\'. A linha deve ficar assim:',
    'LBL_DISABLED_HELP_1' => 'Para ajuda na instalação, por favor visite o SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => ' A instalação do SuiteCRM foi desativada',
    'LBL_HELP' => 'Ajuda',
    'LBL_INSTALL' => 'Instalar',
    'LBL_INSTALL_TYPE_TITLE' => 'Opções de instalação',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Escolher tipo de instalação',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Instalação típica</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Instalação personalizada</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Necessita de informação mínima para a instalação. Recomendado para novos utilizadores.',
    'LBL_INSTALL_TYPE_MSG3' => 'Fornece opções adicionais para definir durante a instalação. A maioria destas opções também está disponível após a instalação nos ecrãs de administração. Recomendado para utilizadores avançados.',
    'LBL_LANG_1' => 'Para utilizar um idioma diferente do idioma predefinido (US-English), pode agora carregar e instalar o pacote de idioma. Será também possível carregar e instalar pacotes de idiomas dentro da aplicação SuiteCRM. Se quiser ignorar este passo, clique em Seguinte.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instalar',
    'LBL_LANG_BUTTON_REMOVE' => 'Remover',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Desinstalar',
    'LBL_LANG_BUTTON_UPLOAD' => 'Carregar',
    'LBL_LANG_NO_PACKS' => 'nenhum',
    'LBL_LANG_PACK_INSTALLED' => 'Foram instalados os seguintes pacotes de idioma:',
    'LBL_LANG_PACK_READY' => 'Estão prontos a ser instalados os seguintes pacotes de idioma:',
    'LBL_LANG_SUCCESS' => 'O pacote de idioma foi carregado com êxito.',
    'LBL_LANG_TITLE' => 'Pacote de Idioma',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'A instalar o SuiteCRM. Isto poderá demorar alguns minutos.',
    'LBL_LANG_UPLOAD' => 'Carregar um Pacote de Idioma',
    'LBL_LICENSE_ACCEPTANCE' => 'Aceitação da licença',
    'LBL_LICENSE_CHECKING' => 'A verificar a compatibilidade do sistema.',
    'LBL_LICENSE_CHKENV_HEADER' => 'A verificar o ambiente',
    'LBL_LICENSE_CHKDB_HEADER' => 'A verificar as credenciais da base de dados.',
    'LBL_LICENSE_CHECK_PASSED' => 'O sistema passou a verificação de compatibilidade.',
    'LBL_CREATE_CACHE' => 'A preparar para instalar...',
    'LBL_LICENSE_REDIRECT' => 'Redirecionando em ',
    'LBL_LICENSE_I_ACCEPT' => 'Aceito',
    'LBL_LICENSE_PRINTABLE' => ' Versão para Impressão ',
    'LBL_PRINT_SUMM' => 'Imprimir resumo',
    'LBL_LICENSE_TITLE_2' => 'Licença SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'João',
    'LBL_LOCALE_NAME_LAST' => 'Silva',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Ação',
    'LBL_ML_DESCRIPTION' => 'Descrição',
    'LBL_ML_INSTALLED' => 'Data de instalação',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data de publicação',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Não Instalável',
    'LBL_ML_VERSION' => 'Versão',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Driver Microsoft SQL Server para PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (extensão mysqli)',
    'LBL_NEXT' => 'Seguinte',
    'LBL_NO' => 'Não',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Definir senha do administrador do sítio',
    'LBL_PERFORM_CONFIG_PHP' => 'A criar ficheiro de configuração do CRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>A criar base de dados</b>',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>em</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'A criar nome de utilizador e senha da base de dados...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'A criar dados predefinidos do CRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'A criar tarefas agendadas predefinidas',
    'LBL_PERFORM_DEFAULT_USERS' => 'A criar utilizadores predefinidos',
    'LBL_PERFORM_DEMO_DATA' => 'Preenchendo as tabelas da base de dados com dados de demonstração (isto pode demorar um pouco)',
    'LBL_PERFORM_DONE' => 'concluído<br>',
    'LBL_PERFORM_FINISH' => 'Concluir',
    'LBL_PERFORM_OUTRO_1' => 'A configuração do CRM',
    'LBL_PERFORM_OUTRO_2' => ' está agora concluída!',
    'LBL_PERFORM_OUTRO_3' => 'Tempo total:',
    'LBL_PERFORM_OUTRO_4' => ' segundos.',
    'LBL_PERFORM_OUTRO_5' => 'Memória utilizada aproximada: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => 'Sucesso!',
    'LBL_PERFORM_TABLES' => 'A criar metadados de relacionamento, tabelas de aplicação e tabelas de auditoria do SuiteCRM',
    'LBL_PERFORM_TITLE' => 'Executar Configuração',
    'LBL_PRINT' => 'Imprimir',
    'LBL_REG_CONF_1' => 'Por favor, preencha o formulário abaixo para receber anúncios de produtos, novidades de formação, ofertas especiais e convites para eventos da SuiteCRM. Não vendemos, alugamos, partilhamos ou distribuímos a terceiros as informações aqui recolhidas.',
    'LBL_REG_CONF_3' => 'Obrigado por se registar. Clique no botão Concluir para aceder ao SuiteCRM. É necessário fazer autenticar-se pela primeira vez utilizando o nome "admin" e a senha que inseriu no passo 2.',
    'LBL_REG_TITLE' => 'Criar conta',

    'LBL_REQUIRED' => '* Campo obrigatório',

    'LBL_SITECFG_ADMIN_Name' => 'Nome do administrador da aplicação SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Reinserir senha do administrador do SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Senha de administrador do SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID da Aplicação',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Se selecionado, deve fornecer um ID de aplicação para substituir o ID auto-gerado. O ID garante que as sessões de uma instância SuiteCRM não sejam utilizadas por outras instâncias. Se tem um cluster de instalações SuiteCRM, todas elas devem partilhar o mesmo ID de aplicação.',
    'LBL_SITECFG_CUSTOM_ID' => 'Indique o seu próprio ID de aplicação',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Se selecionado, terá de especificar uma pasta para Log de forma a substituir a pasta predefinida de historial do SuiteCRM. Independentemente do local do ficheiro, o seu acesso por browser será restrito através de um redirecionamento .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilizar pasta personalizada para Log',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Se selecionado, deve indicar uma pasta segura para armazenar informação de sessão do SuiteCRM. Isto deve ser feito para evitar a vulnerabilidade dos dados da sessão SuiteCRM em servidores partilhados.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utilizar um diretório de sessão personalizada para o SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Por favor, corrija os seguintes erros antes de continuar:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Pasta de historial',
    'LBL_SITECFG_SESSION_PATH' => 'Caminho para o diretório de sessão<br>(deve ser editável)',
    'LBL_SITECFG_SITE_SECURITY' => 'Selecionar opções de segurança',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Se selecionado, o sistema irá verificar periodicamente versões atualizadas da aplicação.',
    'LBL_SITECFG_SUITE_UP' => 'Verificar atualizações automaticamente?',
    'LBL_SITECFG_TITLE' => 'Configuração do sítio',
    'LBL_SITECFG_TITLE2' => 'Identificar utilizador de administração',
    'LBL_SITECFG_SECURITY_TITLE' => 'Segurança do sítio',
    'LBL_SITECFG_URL' => 'URL da instância SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Enviar estatísticas anónimas de utilização?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Se selecionado, o CRM enviará estatísticas <b>anónimas</b> sobre a sua instalação para a SuiteCRM de cada vez que o seu sistema procurar por novas versões. Esta informação irá ajudar-nos a entender melhor como a aplicação é utilizada e guia de melhorias ao produto.',
    'LBL_SITECFG_URL_MSG' => 'Insira o URL que será usado para aceder à instância SuiteCRM após a instalação. O URL também será utilizado como base para os URL nas páginas da aplicação SuiteCRM. O URL deve incluir o servidor web ou o nome da máquina ou o endereço IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Insira um nome para o seu sistema. Este nome será exibido na barra do título do browser quando os utilizadores visitarem a aplicação SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Após a instalação, necessitará de utilizar o administrador SuiteCRM (nome de utilizador = admin) para aceder à instância SuiteCRM. Insira uma senha para este utilizador administrador. Esta senha pode ser alterada após a autenticação inicial.',
    'LBL_SITECFG_COLLATION_MSG' => 'Selecionar as configurações de intercalação (ordenação) para o seu sistema. Estas configurações irão criar as tabelas com o idioma específico que utiliza. No caso do seu idioma não necessitar de uma configuração especial, utilize o valor padrão.',
    'LBL_SPRITE_SUPPORT' => 'Suporte a Sprite',
    'LBL_SYSTEM_CREDS' => 'Credenciais do sistema',
    'LBL_SYSTEM_ENV' => 'Ambiente do sistema',
    'LBL_SHOW_PASS' => 'Mostrar senhas',
    'LBL_HIDE_PASS' => 'Ocultar senhas',
    'LBL_HIDDEN' => '<i>(ocultas)</i>',
    'LBL_STEP1' => 'Passo 1 de 2 — Requisitos de pré-instalação',
    'LBL_STEP2' => 'Passo 2 de 2 — Configurações',
    'LBL_STEP' => 'Passo',
    'LBL_TITLE_WELCOME' => 'Bem-vindo ao CRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Está pronto a instalar?',
    'REQUIRED_SYS_COMP' => 'Componentes de Sistema Necessários',
    'REQUIRED_SYS_COMP_MSG' =>
        'Antes de começar, certifique-se que possui versões compatíveis dos seguintes componentes do sistema::<br><ul> <li> Base de Dados/Sistema de Gestão de Base de Dados (Exemplos: MySQL, SQL Server, Oracle)</li> <li> Servidor Web (Apache, IIS)</li> </ul>Consulte a matriz de compatibilidade nas notas de lançamento para identificar componentes do sistema compatíveis com a versão do SuiteCRM que está a instalar.<br>',
    'REQUIRED_SYS_CHK' => 'Verificação inicial do sistema',
    'REQUIRED_SYS_CHK_MSG' =>
        'Quando iniciar o processo de instalação, será executada uma verificação de sistema no servidor web onde estão os ficheiros SuiteCRM para garantir que o sistema está configurado corretamente e que tem todos os componentes necessários para concluir com êxito a instalação. <br><br> 
O sistema verifica os seguintes elementos: <br>
 <ul>
 <li><b>versão do PHP</b> &#8211; deve ser compatível com a aplicação</li>
 <li><b>Variáveis de sessão</b> &#8211; devem estar a funcionar corretamente</li>
 <li><b>MB Strings</b> &#8211; devem estar instaladas e ativadas no php.ini</li>
 <li><b>Suporte a bases de dados</b> &#8211; deve existir para MariaDB, MySQL ou SQL Server</li>
 <li><b>Config.php</b> &#8211; deve existir e ter as permissões adequadas para ser editável</li>
 <li>Os seguintes diretórios SuiteCRM devem ser editáveis:<ul><li><b>/custom</li> 
 <li>/cache</li> 
 <li>/modules</li>
 <li>/upload</b></li></ul></li></ul>
 Se a verificação falhar, não poderá continuar com a instalação e será exibida uma mensagem de erro, explicando o porquê do sistema não ter passado a verificação. Após fazer as alterações necessárias, pode executar novamente a verificação do sistema para efetuar a instalação.<br>',


    'REQUIRED_INSTALLTYPE' => 'Instalação típica ou personalizada',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Após a execução da verificação do sistema, pode escolher entre uma instalação Típica ou Personalizada.<br><br> Para ambas as instalações <b>Típica</b> e <b>Personalizada</b>, necessitará de saber o seguinte:<br> <ul> <li> <b>Tipo de base de dados</b> que irá alojar os dados do SuiteCRM <ul><li>Tipos de base de dados compatíveis: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li> <li> <b>Nome do servidor web</b> ou máquina (hospedeira) na qual se encontra a base de dados <ul><li>Pode ser <i>servidor</i> se a base de dados está no seu computador local ou está no mesmo servidor web ou máquina que os seus ficheiros SuiteCRM.<br><br></li></ul></li> <li><b>Nome da base de dados</b>onde pretende alojar os dados do SuiteCRM</li> <ul> <li> Talvez já tenha uma base de dados existente que pretenda usar. Se fornecer o nome de uma base de dados existente, as tabelas na base de dados serão descartadas durante a instalação quando for definido o esquema para a base de dados do SuiteCRM.</li> <li> Se ainda não tiver uma base de dados, o nome que fornecer será usado para a nova base de dados que é criada para a instância durante a instalação.<br><br></li> </ul><li><b>Nome de utilizador e senha do administrador da base de dados</b> <ul><li>O administrador da base de dados deverá ser capaz de criar tabelas e utilizadores e editar a base de dados.</li><li>Talvez seja necessário entrar em contacto com o administrador da base de dados se esta não estiver localizada no seu computador local e/ou se você não for o administrador da base de dados.<br><br></ul></li></li><li> <b>Nome e senha do utilizador da base de dados SuiteCRM</b> </li> <ul> <li> O utilizador pode ser o administrador da base de dados, ou pode fornecer o nome de outro utilizador da base de dados. </li> <li> Se pretender criar um novo utilizador da base de dados para este fim, será capaz de fornecer um novo nome de utilizador e senha durante o processo de instalação, e o utilizador será criado durante a instalação. </li> </ul></ul><p> Para a configuração <b>Personalizada</b>, também precisa de saber o seguinte: <br> <ul> <li> <b>URL que será utilizado para aceder à instância SuiteCRM</b> depois de instalado. Esse URL deve incluir o servidor web ou o nome da máquina ou o endereço IP.<br><br></li> <li> [Opcional] <b> Caminho para o diretório de sessão</b> se deseja usar um diretório de sessão personalizado para conter dados do SuiteCRM de modo a prevenir a vulnerabilidade dos dados de sessão em servidores partilhados.<br><br></li> <li> [Opcional] <b>Caminho para uma pasta personalizada de historial</b> se pretender substituir a pasta padrão de historial SuiteCRM.<br><br></li> <li> [Opcional] <b>ID da Aplicação</b> se pretende substituir o ID automático que garante que as sessões de uma instância SuiteCRM não são usadas por outras instâncias.<br><br></li> <li><b>Definição de Caracteres</b> mais utilizados no seu local de idioma.<br><br></li></ul> Para informações mais detalhadas, por favor consulte o guia de instalação.                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Por favor, leia as seguintes informações importantes antes de prosseguir com a instalação. As informações ajudarão a determinar se está ou não pronto para instalar a aplicação neste momento.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Escolha o seu idioma</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Assistente de configuração',
    'LBL_WIZARD_TITLE' => 'Assistente de configuração do SuiteCRM: ',
    'LBL_YES' => 'Sim',

    'LBL_PATCHES_TITLE' => 'Instalar correções mais recentes',
    'LBL_MODULE_TITLE' => 'Instalar pacotes de idiomas',
    'LBL_PATCH_1' => 'Se pretende ignorar este passo, clique em Seguinte.',
    'LBL_PATCH_TITLE' => 'Correção do sistema',
    'LBL_PATCH_READY' => 'As correções seguintes estão prontas a ser instaladas:',
    'LBL_SESSION_ERR_DESCRIPTION' => "O SuiteCRM baseia-se em sessões PHP para armazenar informações importantes enquanto estiver ligado a este servidor web. A sua instalação PHP não tem as informações de sessão corretamente configuradas. <br><br>Um erro de configuração comum é o da diretiva <b>'session.save_path'</b> não estar a apontar para um diretório válido. <br> <br> Por favor, corrija a sua <a target=_new href='https://us2.php.net/manual/en/ref.session.php'>configuração PHP</a> no ficheiro php.ini localizado aqui em baixo.",
    'LBL_SESSION_ERR_TITLE' => 'Erro de configuração das sessões PHP',
    'LBL_SYSTEM_NAME' => 'Nome do sistema',
    'LBL_COLLATION' => 'Configurações de intercalação',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Indique um nome de sistema para a instância SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Escolha um ficheiro de correção do seu computador local',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'É necessário PHP versão 5 ou acima',
    'LBL_MINIMUM_PHP_VERSION' => 'Versão PHP mínima necessária é 5.1.0. Versão PHP recomendada é 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(A sua versão PHP atual é',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Versão PHP mínima é a 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'O modo Php Backward Compatibility está ligado. Configure o zend.ze1_compatibility_mode para Desligado para prosseguir ',
    'LBL_STREAM' => 'O PHP permite usar a stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informação sobre a nova conta',
        'type' => 'sistema',
        'description' => 'Este modelo será utilizado quando o administrador de sistema enviar uma nova senha a um utilizador.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Este é o seu nome de utilizador e senha temporária:</p><p>Utilizador: $contact_user_user_name </p><p>Senha: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Após se autenticar com os dados acima, poderá ser solicitado a redefinir a senha para uma da sua preferência.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Este é o seu nome de utilizador e senha temporária: 
Utilizador: $contact_user_user_name 
Senha: $contact_user_user_hash 

$config_site_url 

Após se autenticar com os dados acima, poderá ser solicitado a redefinir a senha para uma da sua preferência.',
        'name' => 'Email de senha gerada pelo sistema',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Redefinir a senha da sua conta',
        'type' => 'sistema',
        'description' => "Este modelo é utilizado para enviar ao utilizador uma hiperligação para poder redefinir a sua senha.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Solicitou em $contact_user_pwd_last_changed a reposição da senha da sua conta. </p><p>Clique na ligação abaixo para repor a sua senha:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Solicitou em $contact_user_pwd_last_changed a reposição da senha da sua conta.

Clique na ligação abaixo para repor a sua senha:

$contact_user_link_guid',
        'name' => 'Email para senha esquecida',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Código da autenticação a dois fatores',
        'type' => 'sistema',
        'description' => "Este modelo é usado para enviar ao utilizador um código para autenticação a dois fatores.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>O código da autenticação a dois fatores é <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'O código da autenticação a dois fatores é $code.',
        'name' => 'Email da autenticação a dois fatores',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nome do remetente:',
    'LBL_FROM_ADDR' => 'Endereço do remetente:',

    'LBL_WIZARD_SMTP_DESC' => 'Forneça os dados da sua conta de email e senha do servidor de email de saída padrão. Os utilizadores vão receber emails do CRM originados desta conta de email.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de email:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Outros',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Ativar SMTP sobre SSL ou TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de email Gmail',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir aos utilizadores usar esta conta para enviar email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando esta opção estiver selecionada, todos os utilizadores poderão enviar emails utilizando a mesma conta que o sistema usa para enviar notificações e alertas. Se a opção não estiver selecionada, os utilizadores podem ainda utilizar o servidor de correio de saída se fornecerem as suas informações de conta.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Utilizador Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',


    'LBL_MAIL_SMTPUSER' => 'Utilizador SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Insira o nome de sua organização e logótipo para a marca do seu CRM.',
    'SYSTEM_NAME_WIZARD' => 'Nome:',
    'SYSTEM_NAME_HELP' => 'Nome que aparece na barra de título do seu navegador.',
    'NEW_LOGO' => 'Selecionar logótipo',
    'NEW_LOGO_HELP' => 'O formato dos ficheiros de imagem pode ser .png ou .jpg. A altura máxima é 170px , e a largura máxima é de 450px . Qualquer imagem carregada, que seja maior em qualquer destas dimensões, será redimensionado para essas dimensões máximas.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Carregar',
    'CURRENT_LOGO' => 'Logótipo atual',
    'CURRENT_LOGO_HELP' => 'Este logótipo é exibido no ecrã de autenticação da aplicação SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Seleção de cenário',
    'LBL_WIZARD_SCENARIO_DESC' => 'Isto permite a adaptação dos módulos exibidos com base nas suas necessidades.  Cada um dos módulos pode ser ativado após a instalação através da página de administração.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Atualmente não existem cenários definidos no ficheiro de configuração (config. php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Configuração de localização do sistema',
    'LBL_WIZARD_LOCALE_DESC' => 'Especificar o fuso horário e a forma como pretende que datas, moedas e nomes apareçam no CRM. Estas serão as definições padrão. Cada utilizador poderá definir as suas próprias preferências.',
    'LBL_DATE_FORMAT' => 'Data — Formato:',
    'LBL_TIME_FORMAT' => 'Hora — Formato:',
    'LBL_TIMEZONE' => 'Fuso horário',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CURRENCY' => 'Moeda:',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo de moeda:',
    'LBL_CURRENCY_ISO4217' => 'Código de moeda em formato ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador dos milhares:',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal:',
    'LBL_NAME_FORMAT' => 'Nome — Formato:',
    'UPLOAD_LOGO' => 'A carregar logótipo, por favor, aguarde...',
    'ERR_UPLOAD_FILETYPE' => 'Tipo de ficheiro não permitido. Por favor, carregue um ficheiro jpeg ou png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ocorreu um erro desconhecido no carregamento.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'O ficheiro carregado excede a directiva upload_max_filesize no php.ini',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'O ficheiro carregado excede a directiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'O ficheiro carregado foi apenas parcialmente carregado.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Nenhum ficheiro carregado.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Pasta temporária em falta.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Falha ao escrever o ficheiro para o disco.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Uma extensão do PHP interrompeu o carregamento do ficheiro. O PHP não permite determinar qual a extensão que causou essa interrupção.',

    'LBL_INSTALL_PROCESS' => 'Instalar...',

    'LBL_EMAIL_ADDRESS' => 'Email:',
    'ERR_ADMIN_EMAIL' => 'O endereço de email do administrador está incorreto.',
    'ERR_SITE_URL' => 'É necessário um URL para o sítio.',

    'STAT_CONFIGURATION' => 'A configurar relacionamentos...',
    'STAT_CREATE_DB' => 'Criar base de dados...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'A criar definições predefinidas...',
    'STAT_INSTALL_FINISH' => 'A concluir a instalação...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Processo de instalação concluído. Por favor, <a href="%s">autentique-se...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Por favor, primeiro aceite a licença',

    'LBL_MORE_OPTIONS_TITLE' => 'Mais opções',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Erro da base de dados',
    'LBL_OLD_PHP' => 'Versão antiga de PHP detetado!',
    'LBL_OLD_PHP_MSG' => 'A versão recomendada do PHP para instalar o SuiteCRM é %s <br />A versão mínima necessária do PHP é %s<br />Você está a usar a versão %s do PHP, que já atingiu o EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Por favor, considere atualizar a sua versão PHP. ',
    'LBL_OLD_PHP_OK' => 'Estou ciente dos riscos e desejo continuar.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Utilizador',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nome da base de dados',
    'LBL_DBCONFIG_MSG3' => 'Nome da base de dados que irá conter os dados para a instância SuiteCRM que está prestes a instalar.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nome do hospedeiro',
    'LBL_DBCONFIG_MSG2' => 'Nome do servidor web ou máquina (hospedeiro) em que está localizada a base de dados (como www.mydomain.com). Se estiver a instalar localmente, por motivos de desempenho, é melhor usar \'localhost\' do que \'127.0.0.1\'.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'É necessário um nome de utilizador e senha de um administrador da base de dados que possa criar utilizadores e tabelas de base de dados e que possa editar a base de dados de forma a configurar a base de dados do SuiteCRM.'
);
