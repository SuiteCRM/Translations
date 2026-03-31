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
    'ADVANCED' => 'Advanced',
    'DEFAULT_CURRENCY_ISO4217' => 'Código de Moeda ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'Nome da moeda',
    'DEFAULT_CURRENCY_SYMBOL' => 'Símbolo da moeda',
    'DEFAULT_DATE_FORMAT' => 'Formato de data padrão',
    'DEFAULT_DECIMAL_SEP' => 'Símbolo decimal',
    'DEFAULT_LANGUAGE' => 'Idioma padrão',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Formato de horário padrão',

    'DISPLAY_RESPONSE_TIME' => 'Mostrar o tempo de resposta do servidor',

    'IMAGES' => 'Logotipos',
    'LBL_ALLOW_USER_TABS' => 'Permitir aos usuários ocultar guias',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Exibir Log',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID do Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Mesclar e-mail',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalo Minimo do Auto-Refresh do Dashlet',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Este é o valor mínimo que pode ser escolhido para o auto-refresh dos dashlets. Definir para &#39;Nunca&#39; desabilita o auto-refresh dos dashlets completamente.',
    'LBL_MODULE_FAVICON' => 'Exibir ícone de módulo como favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Se está num módulo com um ícone, utilize o ícone do módulo como favicon, em vez do favicon do tema, no tabulador do browser.',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Configurador',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => 'Endereço "De":',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Configurar o endereço do Host do Proxy e autenticação',
    'LBL_PROXY_ON' => 'Utilizar um host do proxy?',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Mostrar o Nome Completo',
    'LBL_USE_REAL_NAMES_DESC' => 'Mostrar o nome completo dos Usuários ao invés do nome de Usuário',
    'LBL_DISALBE_CONVERT_LEAD' => 'Desativar ação de conversão de Potenciais para Potenciais Convertidos',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se um Potencial já foi convertido, habilitar esta opção irá remover a ação de conversão de Potenciais.',
    'LBL_ENABLE_ACTION_MENU' => 'Visualizar ações dentro do Menu',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Selecione para exibir a tela de Detalhes e as ações do subpanel em um menu dropdown. Se não for selecionado, as ações serão exibidas como botões separados.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Habilitar edição inline na exibição de lista',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Selecione para habilitar a Edição Inline para os campos no modo de exibição de lista. Se não selecionada, a Edição Inline será desabilitada na exibição de lista.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Habilitar edição inline na tela de detalhes',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Selecione para habilitar a Edição Inline para os campos na tela de detalhes. Se não selecionada, a Edição Inline será desabilitada na tela de detalhes.',
    'LBL_HIDE_SUBPANELS' => 'Subpainéis recolhidos',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Itens por página na vista de lista',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Número de registros por página nos Subpainéis',
    'LOG_MEMORY_USAGE' => 'Log de uso da memória',
    'LOG_SLOW_QUERIES' => 'Log de consultas lentas',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'Essa logo é exibida no centro da tela de login da aplicação SuiteCRM.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Limite em milissegundos das consultas mais lentas',
    'STACK_TRACE_ERRORS' => 'Mostrar o stack trace de erros',
    'UPLOAD_MAX_SIZE' => 'Tamanho máximo de Arquivos a carregar',
    'VERIFY_CLIENT_IP' => 'Validar o IP do Usuário',
    'LOCK_HOMEPAGE' => 'Evitar que o usuário customize o layout da Página Inicial',
    'LOCK_SUBPANELS' => 'Evitar que o usuário customize o layout de subpainel',
    'MAX_DASHLETS' => 'Número máximo de Dashlets do SuiteCRM na página inicial',
    'SYSTEM_NAME' => 'Nome do Sistema',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'LBL_SNOOZE_TIMER' => 'Definir Adiamento para Notificações',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Suporte para Autenticação LDAP',
    'LBL_LDAP_LEGACY_WARNING' => 'Aviso LDAP',
    'LBL_LDAP_LEGACY_WARNING_MORE' => 'Esta configuração do LDAP será usada somente para autenticação da API v4. Para configurar o login do SuiteCRM com LDAP, adicione as configurações necessárias para o arquivo .env.local. Verifique a documentação da configuração LDAP para mais informações.',
    'LBL_LDAP_ENABLE' => 'Ativar LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Usado para procurar o usuário LDAP. Pode precisar ser totalmente qualificado.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Ligar ao servidor LDAP usando uma credencial de usuário específico. Será ligada anonimamente se não fornecida.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Create Users:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Qualquer parâmetral de filtro adicional para aplicar ao autenticar usuários, por exemplo, <em>is_suitecrm_user = 1 ou (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Exemplos para vincular usuários LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Exemplos para pesquisar usuários LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemplo: ldap.example.com ou ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Exemplo: <em>389 ou 636 para SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Exemplo <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Exemplo: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Se não existe um usuário autenticado será criado um no SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Modo de Programador',
    'LBL_SET_SUBPANEL_PAGINATION_TYPE' => 'Tipo de paginação de subpainel',
    'LBL_SET_LISTVIEW_PAGINATION_TYPE' => 'Tipo de Paginação para a Visão de Lista',
    'LBL_LIST_ENTRIES_PER_MODAL' => 'Lista de Registros do Pop-up',
    'LBL_SET_RECORD_MODAL_PAGINATION_TYPE' => 'Tipo de Paginação para a Lista de Registros do Pop-up',

    'SHOW_DOWNLOADS_TAB' => 'Mostrar o Separador de Downloads',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Quando selecionada, a guia de Download irá aparecer nas configurações do usuário e fornecer aos usuários com acesso a SuiteCRM plug-ins e outros arquivos disponíveis',
    'LBL_LDAP_ENC_KEY_DESC' => 'Para autenticação SOAP quando utilizar LDAP',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A extensão php_mcrypt deve ser Ativada no seu arquivo php.ini',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'A extensão openssl deve ser ativada no seu arquivo php.ini.',
    'LBL_ALL' => 'All',
    'LBL_MARK_POINT' => 'Marcar Ponto',
    'LBL_NEXT_' => 'Próximo >>',
    'LBL_REFRESH_FROM_MARK' => 'atualizar a Partir da Marca',
    'LBL_SEARCH' => 'Pesquisar:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignorar-se:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marcação Inicial do Logging',
    'LBL_DISPLAYING_LOG' => 'Exibindo Registro',
    'LBL_YOUR_PROCESS_ID' => 'O seu ID do processo',
    'LBL_YOUR_IP_ADDRESS' => 'O seu Endereço de IP é',
    'LBL_IT_WILL_BE_IGNORED' => 'será ignorado',
    'LBL_LOG_NOT_CHANGED' => 'Registro não se alterou',
    'LBL_ALERT_JPG_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG. Carregue um novo arquivo com a extensão .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'O formato do arquivo da imagem deve ser JPEG ou PNG. Carregue um novo arquivo com a extensão .jpg ou .png.',
    'LBL_ALERT_SIZE_RATIO' => 'A proporção do aspecto da imagem deve estar entre 1:1 e 10:1. A imagem será redimensionada.',
    'ERR_ALERT_FILE_UPLOAD' => 'Erro durante o carregamento da imagem.',
    'LBL_LOGGER' => 'Configurações de Logger',
    'LBL_LOGGER_FILENAME' => 'Nome do arquivo Log',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extensão',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Tamanho máximo do log',
    'LBL_STACK_TRACE' => 'Habilitar rastreamento',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Nível do Log',
    'LBL_LEAD_CONV_OPTION' => 'Opções de Conversão de Potenciais',
    'LEAD_CONV_OPT_HELP' => "<b>Copiar</b> - Cria e relaciona cópias de todas as atividades dos Potenciais para novos registros que são selecionados pelo usuário durante a conversão. Cópias são criadas para cada um dos registros selecionados.<br><br><b>Mover</b> - Move todas as atividades dos Potenciais de um novo registro que é selecionado pelo usuário durante a conversão.<br><br><b>Nenhum</b> - Não faz nada com as atividades dos Potenciais durante a conversão. As atividades continuam relacionados apenas ao Potencial.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Habilitar ou desabilitar a utilização do AJAX UI para módulos especificos',
    'LBL_LOGGER_MAX_LOGS' => 'Número máximo de logs (antes do rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Anexar após o nome do arquivo',
    'LBL_VCAL_PERIOD' => 'Período de Tempo das atualizações vCal',
    'LBL_IMPORT_MAX_RECORDS' => 'Importar: Número máximo de linhas',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Especificar quantas linhas são permitidas dentro de arquivos de importação.<br />Se o número de linhas em um arquivo de importação exceder este número, o usuário será alertado.<br />Se nenhum número é inserido, um número ilimitado de linhas são permitidos.',
    'vCAL_HELP' => 'Utilize esta configuração para determinar o número de meses em antecedência à atual data em que a informação Free/Busy para chamadas telefônicas e reuniões é publicada.</BR>Para desligar a publicação Free/Busy, introduza "0". O mínimo é 1 mês; o máximo são 12 meses.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Seus Cenários',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nenhum cenário foi configurado',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Escolha quais cenários são adequados à sua instalação.  Essas opções podem ser alteradas após a instalação.',

    'LBL_WIZARD_TITLE' => 'Assistente de Administração',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Clique em <b>Próximo</b> para inserir sua marca, dados de localização e configurar o SuiteCRM agora. Se você deseja configurar o SuiteCRM mais tarde, clique em <b>Ignorar</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Próximo >',
    'LBL_WIZARD_BACK_BUTTON' => '< Anterior',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuar',
    'LBL_WIZARD_FINISH_TITLE' => 'Você está pronto para usar o SuiteCRM!',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Loading...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Delete' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Mostrar e-mails dos contatos relacionados na história Subpainel por módulos',
    'LBL_HISTORY_SUBPANEL' => 'History Subpanel',
);
