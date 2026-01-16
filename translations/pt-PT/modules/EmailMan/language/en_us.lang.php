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
    'LBL_SEND_DATE_TIME' => 'Data de envio',
    'LBL_IN_QUEUE' => 'Em análise',
    'LBL_IN_QUEUE_DATE' => 'Data da fila',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Apenas são aceites valores inteiros para o número de email a enviar em lote',

    'LBL_ATTACHMENT_AUDIT' => ' foi enviado. Não foi duplicado localmente para preservar espaço em disco.',
    'LBL_CONFIGURE_SETTINGS' => 'Configurar',
    'LBL_CUSTOM_LOCATION' => 'Definido pelo utilizador',
    'LBL_DEFAULT_LOCATION' => 'Predefinido',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Eliminar notas e anexos relacionados com os emails eliminados',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Notificações de alerta de email',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Configurações de consentimento de comunicações de marketing',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Enviar automaticamente email de autorização de mensagens',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Modelo de email para confirmação de autorização de mensagens',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Ativar modo compatível de composição de email',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Configuração de saída de correio',
    'LBL_EMAILS_PER_RUN' => 'Número de emails enviados por lote:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Campanha',
    'LBL_LIST_FORM_TITLE' => 'Fila',
    'LBL_LIST_FROM_NAME' => 'Nome do remetente',
    'LBL_LIST_IN_QUEUE' => 'Em análise',
    'LBL_LIST_MESSAGE_NAME' => 'Mensagem de marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Email do destinatário',
    'LBL_LIST_RECIPIENT_NAME' => 'Nome do destinatário',
    'LBL_LIST_SEND_ATTEMPTS' => 'Tentativas de envio',
    'LBL_LIST_SEND_DATE_TIME' => 'Enviar em',
    'LBL_LIST_USER_NAME' => 'Nome do utilizador',
    'LBL_LOCATION_ONLY' => 'Localização',
    'LBL_LOCATION_TRACK' => 'Localização de ficheiros de rastreio de campanhas (tal como campaign_tracker.php):',
    'LBL_CAMP_MESSAGE_COPY' => 'Guarde cópias de mensagens de campanha:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Pretende armazenar cópias completas de <bold>CADA</bold> mensagem de email enviada durante todas as campanhas? Recomendamos a opção predefinida <bold>Não</bold>. Ao escolher Não irá armazenar apenas o modelo que é enviado e as variáveis necessárias para recriar a mensagem individual.',
    'LBL_MAIL_SENDTYPE' => 'Agente de transferência de correio:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Senha:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPUSER' => 'Utilizador SMTP:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de email',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
    'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de email Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Utilizador Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'Cliente de email',
    'LBL_MARKETING_ID' => 'ID de marketing',
    'LBL_MODULE_ID' => 'Gestor de email',
    'LBL_MODULE_NAME' => 'Definições de email',
    'LBL_MODULE_TITLE' => 'Gestão da fila de saída do correio',
    'LBL_NOTIFICATION_ON_DESC' => 'Enviar notificações via email quando determinados registos forem atribuídos.',
    'LBL_NOTIFY_FROMADDRESS' => 'Endereço do remetente:',
    'LBL_NOTIFY_FROMNAME' => 'Nome do remetente:',
    'LBL_NOTIFY_ON' => 'Notificação de atribuições',
    'LBL_NOTIFY_TITLE' => 'Opções de email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Opções de email de saída',
    'LBL_RELATED_ID' => 'ID relacionado',
    'LBL_RELATED_TYPE' => 'Tipo relacionado',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar filas',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valor do parâmetro site_url no ficheiro Config.php',
    'TXT_REMOVE_ME_ALT' => 'Para se remover desta lista de emails entre em',
    'TXT_REMOVE_ME_CLICK' => 'clique aqui',
    'TXT_REMOVE_ME' => 'Para se remover desta lista de email',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Enviar notificação a partir do endereço de email do utilizador que atribui',

    'LBL_SECURITY_TITLE' => 'Email — Definições de segurança',
    'LBL_SECURITY_DESC' => 'As etiquetas marcadas abaixo NÃO serão permitidas nos emails de entrada ou exibidas no módulo de emails.',
    'LBL_SECURITY_APPLET' => 'Etiqueta de Applet',
    'LBL_SECURITY_BASE' => 'Etiqueta de base',
    'LBL_SECURITY_EMBED' => 'Etiqueta de embutir',
    'LBL_SECURITY_FORM' => 'Etiqueta de formulário',
    'LBL_SECURITY_FRAME' => 'Etiqueta de moldura',
    'LBL_SECURITY_FRAMESET' => 'Etiqueta de molduras',
    'LBL_SECURITY_IFRAME' => 'Etiqueta de iFrame',
    'LBL_SECURITY_IMPORT' => 'Etiqueta de importação',
    'LBL_SECURITY_LAYER' => 'Etiqueta de camada',
    'LBL_SECURITY_LINK' => 'Etiqueta de hiperligações',
    'LBL_SECURITY_OBJECT' => 'Etiqueta do objeto',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Selecionar precauções de segurança mínimas do Outlook por padrão (erros ao lado da exibição correta).',
    'LBL_SECURITY_STYLE' => 'Etiqueta de estilo',
    'LBL_SECURITY_TOGGLE_ALL' => 'Ativar todas as opções',
    'LBL_SECURITY_XMP' => 'etiqueta Xmp',
    'LBL_YES' => 'Sim',
    'LBL_NO' => 'Não',
    'LBL_PREPEND_TEST' => '[Teste]:',
    'LBL_SEND_ATTEMPTS' => 'Tentativas de envio',
    'LBL_OUTGOING_SECTION_HELP' => 'Configurar o servidor predefinido de envio de email para notificações, incluindo os fluxos de trabalho.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Os utilizadores podem enviar usando a identidade desta conta:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando esta opção estiver selecionada, todos os utilizadores poderão enviar emails utilizando a mesma conta que o sistema usa para enviar notificações e alertas.<br>Se a opção não estiver selecionada, os utilizadores podem ainda utilizar o servidor de saída de correio se fornecerem as suas informações de conta.',
    'LBL_FROM_ADDRESS_HELP' => 'Quando ativado, o nome do utilizador e endereço de email será incluído no campo de remetente do email. Este recurso pode não funcionar em servidores SMTP que não permitam o envio a partir de uma conta de email diferente da conta do servidor.',
    'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Ver contas de saída de correio',
    'LBL_ALLOW_SEND_AS_USER' => 'Os utilizadores podem enviar como eles próprios:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Quando ativado, <b>todos</b> os utilizadores podem enviar email utilizando o servidor de saída de correio, utilizando o seu endereço principal de email no endereço de remetente &quot;De&quot;.<br>Este recurso pode não funcionar em servidores SMTP que não permitam o envio a partir de uma conta de email diferente da conta do servidor.',
);
