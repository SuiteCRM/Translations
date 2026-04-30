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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Avançada',
    'DEFAULT_CURRENCY_ISO4217' => 'Código da moeda em formato ISO 4217 ',
    'DEFAULT_CURRENCY_NAME' => 'Nome da moeda',
    'DEFAULT_CURRENCY_SYMBOL' => 'Símbolo da moeda',
    'DEFAULT_DATE_FORMAT' => 'Data — Formato predefinida',
    'DEFAULT_DECIMAL_SEP' => 'Símbolo decimal',
    'DEFAULT_LANGUAGE' => 'Idioma predefinido',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Tema predefinido',
    'DEFAULT_TIME_FORMAT' => 'Formato de horário predefinido',

    'DISPLAY_RESPONSE_TIME' => 'Mostrar o tempo de resposta do servidor',

    'IMAGES' => 'Logótipos',
    'LBL_ALLOW_USER_TABS' => 'Permitir aos utilizadores ocultar abas',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Ver historial',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'Utilizador SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de email',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de email Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Utilizador Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir aos utilizadores usar esta conta para enviar email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Impressão em série',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Tempo mínimo para atualização automática das miniaplicações',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este é o valor mínimo a escolher para ter atualização automática das miniaplicações. Definir para NUNCA desativa totalmente a atualização automática das miniaplicações.',
    'LBL_MODULE_FAVICON' => 'Exibir ícone de módulo como favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Se está num módulo com um ícone, utilize o ícone do módulo como favicon no browser em vez do favicon do tema.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Configurador',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"From" Address:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy do hospedeiro',
    'LBL_PROXY_ON_DESC' => 'Configurar endereço do servidor de Proxy e definições de autenticação',
    'LBL_PROXY_ON' => 'Utilizar servidor de Proxy?',
    'LBL_PROXY_PASSWORD' => 'Senha:',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'Nome de utilizador',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Mostrar o nome completo',
    'LBL_USE_REAL_NAMES_DESC' => 'Mostrar o nome completo dos Utilizadores ao invés do nome de utilizador',
    'LBL_DISALBE_CONVERT_LEAD' => 'Desativar a conversão de pistas para pistas convertidas',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se uma pista já foi convertida, ativar esta opção irá reverter a ação de conversão da pista.',
    'LBL_ENABLE_ACTION_MENU' => 'Exibir ações dentro de menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selecione para exibir a Vista de detalhes e o subpainel de ações dentro de um menu de seleção. Se não estiver selecionado, as ações serão exibidas em botões separados.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Ativar edição direta na vista de lista',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Selecionar para ativar a edição direta em campos no modo de vista de lista. Se desmarcada, a edição direta será desativada na vista de lista.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Ativar edição direta na vista de detalhes',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Selecionar para ativar a edição direta ou embutida em campos no modo de visualização de detalhes. Se desmarcada, a edição direta será desativada na visualização de detalhes.',
    'LBL_HIDE_SUBPANELS' => 'Subpainéis contraídos',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Itens por página na vista de lista',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Itens por página nos subpainéis',
    'LOG_MEMORY_USAGE' => 'Registar utilização da memória',
    'LOG_SLOW_QUERIES' => 'Registar consultas mais lentas',
    'CURRENT_LOGO' => 'Logótipo atual:',
    'CURRENT_LOGO_HELP' => 'Este logótipo é exibido no ecrã de autenticação da aplicação SuiteCRM.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'O formato dos ficheiros de imagem pode ser .png ou .jpg. A altura máxima é 170px , e a largura máxima é de 450px . Qualquer imagem carregada, que seja maior em qualquer destas dimensões, será redimensionada para as dimensões máximas.',
    'NEW_LOGO_HELP_NO_SPACE' => 'O formato dos ficheiros de imagem pode ser .png ou .jpg. A altura máxima é 170px , e a largura máxima é de 450px . Qualquer imagem carregada, que seja maior em qualquer destas dimensões, será redimensionada para as dimensões máximas.',
    'SLOW_QUERY_TIME_MSEC' => 'Limite em milissegundos das consultas mais lentas',
    'STACK_TRACE_ERRORS' => 'Mostrar o rastreamento da pilha de erros',
    'UPLOAD_MAX_SIZE' => 'Tamanho máximo de carregamento',
    'VERIFY_CLIENT_IP' => 'Validar o IP do utilizador',
    'LOCK_HOMEPAGE' => 'Impedir o utilizador de alterar o esquema da página principal',
    'LOCK_SUBPANELS' => 'Impedir o utilizador de alterar o esquema dos subpainéis',
    'MAX_DASHLETS' => 'Número máximo de miniaplicações na página principal',
    'SYSTEM_NAME' => 'Nome do sistema',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'LBL_SNOOZE_TIMER' => 'Definir adiamentos para notificações',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Suporte a Autenticação LDAP',
    'LBL_LDAP_LEGACY_WARNING' => 'Alerta LDAP',
    'LBL_LDAP_LEGACY_WARNING_MORE' => 'Essa configuração de LDAP será usada apenas para autenticação de API v4. Para configurar a autenticação no SuiteCRM para usar o LDAP, inclua as configurações necessárias no ficheiro .env.local. Consulte os documentos de configuração do LDAP para obter mais informações.',
    'LBL_LDAP_ENABLE' => 'Ativar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Usado para procurar pelo utilizador LDAP. Isto pode precisar de ser totalmente qualificado.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Vincular ao servidor LDAP usando credenciais específicas dos utilizadores. Irá ligar anonimamente se não fornecida.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Criação automática de utilizadores:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membro de grupo:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Quaisquer parâmetros de filtro adicionais a aplicar aquando da autenticação de utilizadores ex:<em>is_suitecrm_user=1 ou (is_suitecrm_user=1)(is_sales=1)</em>; ',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Atributo de vinculação:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Exemplos para vinculação de utilizador LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Exemplos para pesquisar por utilizador LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemplo: ldap.example.com ou ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemplo: <em>389 ou 636 para SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemplo <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exemplo: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Se não existir um utilizador autenticado, será criado um no SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Modo de programador',
    'LBL_SET_SUBPANEL_PAGINATION_TYPE' => 'Tipo de paginação de subpainel',
    'LBL_SET_LISTVIEW_PAGINATION_TYPE' => 'Tipo de paginação de lista de visualização',
    'LBL_LIST_ENTRIES_PER_MODAL' => 'Lista de registos flutuante',
    'LBL_SET_RECORD_MODAL_PAGINATION_TYPE' => 'Tipo de paginação da lista de registos flutuante',

    'SHOW_DOWNLOADS_TAB' => 'Exibir aba de transferências',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Quando selecionado, a aba de transferências aparecerá nas configurações de utilizador e fornecerá aos utilizadores o acesso a plugins do SuiteCRM e a outros ficheiros disponíveis',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para autenticação SOAP quando utilizar LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A extensão php_mcrypt deve ser ativada no seu ficheiro php.ini',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'A extensão openssl deve ser ativada no seu ficheiro php.ini',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Marca ponto',
    'LBL_NEXT_' => 'Seguinte >>',
    'LBL_REFRESH_FROM_MARK' => 'Atualizar a partir da marca',
    'LBL_SEARCH' => 'Pesquisar:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorar-se:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcação para início do historial',
    'LBL_DISPLAYING_LOG' => 'A exibir historial',
    'LBL_YOUR_PROCESS_ID' => 'O seu ID de processo ',
    'LBL_YOUR_IP_ADDRESS' => 'O seu Endereço de IP é',
    'LBL_IT_WILL_BE_IGNORED' => ' Será ignorado ',
    'LBL_LOG_NOT_CHANGED' => 'Historial não se alterou',
    'LBL_ALERT_JPG_IMAGE' => 'O formato do ficheiro da imagem deve ser JPEG. Carregue um novo ficheiro com a extensão .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'O formato do ficheiro da imagem deve ser JPEG ou PNG. Carregue um novo ficheiro com a extensão .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'A proporção do aspecto da imagem deve estar entre 1:1 e 10:1. A imagem será redimensionada.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erro durante o carregamento da imagem.',
    'LBL_LOGGER' => 'Configurações do historial',
    'LBL_LOGGER_FILENAME' => 'Nome do ficheiro de historial',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensão',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Tamanho máximo do historial',
    'LBL_STACK_TRACE' => 'Ativar rastreamento da pilha',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Data — Formato predefinido',
    'LBL_LOGGER_LOG_LEVEL' => 'Nível de historial',
    'LBL_LEAD_CONV_OPTION' => 'Opções de conversão de pistas',
    'LEAD_CONV_OPT_HELP' => "<b>Copiar</b> - Cria e relaciona as cópias de todas as atividades das pistas para novos registos que são selecionados pelo utilizador durante a conversão. As cópias são criadas para cada um dos registos selecionados.<br><br><b>Mover</b> - Move todas as atividades das pistas para novos registos que são selecionados pelo utilizador durante a conversão.<br><br><b>Nada</b> - Não fazer nada com as atividades das pistas durante a conversão. As atividades permanecem relacionadas apenas com as pistas.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Ativar ou desativar a utilização do IU AJAX para módulos específicos.',
    'LBL_LOGGER_MAX_LOGS' => 'Número máximo de historiais (antes da rolagem)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Anexar após o nome do ficheiro',
    'LBL_VCAL_PERIOD' => 'Período de tempo das atualizações vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'Importar — Número máximo de linhas:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especifica quantas linhas são permitidas nos ficheiros importados.<br>Se o número de linhas num ficheiro importado for superior a este valor, o utilizador será alertado.<br>Se não for indicado um valor, será permitido um número ilimitado de linhas.',
    'vCAL_HELP' => 'Utilize esta configuração para determinar o número de meses, por antecedência à data atual, para que seja publicada a informação de Disponível/Ocupado para telefonemas e reuniões.<BR>Para desligar a publicação Disponível/Ocupado, introduza "0". O mínimo é 1 mês e o máximo são 12 meses.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Os seus cenários',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Sem cenários configurados',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Escolha que cenários serão apropriados para sua instalação.  Estas opções podem ser alteradas após a instalação.',

    'LBL_WIZARD_TITLE' => 'Assistente de administração',
    'LBL_WIZARD_WELCOME_TAB' => 'Bem-vindo',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao CRM!',
    'LBL_WIZARD_WELCOME' => 'Clique em <b>Seguinte</b> para personalizar com a sua marca e fazer configurações para o uso do CRM. Se desejar configurar o SuiteCRM mais tarde, clique em <b>Saltar</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Seguinte >',
    'LBL_WIZARD_BACK_BUTTON' => '< Voltar',
    'LBL_WIZARD_SKIP_BUTTON' => 'Saltar',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TITLE' => 'Você está pronto para usar o CRM!',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Especificar o fuso horário e a forma como pretende que datas, moedas e nomes apareçam no CRM. Estas serão as definições padrão. Cada utilizador poderá definir as suas próprias preferências.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'A carregar...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Bem-vindo' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logótipo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Exibe os emails de contactos relacionados no subpainel de histórico dos módulos',
    'LBL_HISTORY_SUBPANEL' => 'Histórico — Subpainel',
);
