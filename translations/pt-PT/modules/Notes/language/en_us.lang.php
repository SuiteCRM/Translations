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
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar a conta.',
    'LBL_ACCOUNT_ID' => 'ID da conta:',
    'LBL_CASE_ID' => 'ID da ocorrência:',
    'LBL_CLOSE' => 'Fechar:',
    'LBL_CONTACT_ID' => 'ID do contacto:',
    'LBL_CONTACT_NAME' => 'Contacto:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notas',
    'LBL_DESCRIPTION' => 'Nota',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_ATTACHMENT' => 'Anexo do email',
    'LBL_FILE_MIME_TYPE' => 'Tipo de Mime',
    'LBL_FILE_URL' => 'URL do Ficheiro',
    'LBL_FILENAME' => 'Anexo:',
    'LBL_LEAD_ID' => 'ID da Pista:',
    'LBL_LIST_CONTACT_NAME' => 'Contacto',
    'LBL_LIST_DATE_MODIFIED' => 'Última alteração',
    'LBL_LIST_FILENAME' => 'Anexo',
    'LBL_LIST_FORM_TITLE' => 'Lista de Notas',
    'LBL_LIST_RELATED_TO' => 'Relacionar com',
    'LBL_LIST_SUBJECT' => 'Assunto',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_LIST_CONTACT' => 'Contacto',
    'LBL_MODULE_NAME' => 'Notas',
    'LBL_MODULE_TITLE' => 'Notas: entrada',
    'LBL_NEW_FORM_TITLE' => 'Criar nota ou anexo',
    'LBL_NOTE_STATUS' => 'Nota',
    'LBL_NOTE_SUBJECT' => 'Assunto:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Anexos',
    'LBL_NOTE' => 'Notas:',
    'LBL_OPPORTUNITY_ID' => 'ID da oportunidade:',
    'LBL_PARENT_ID' => 'ID do hospedeiro:',
    'LBL_PARENT_TYPE' => 'Tipo de hospedeiro',
    'LBL_PHONE' => 'Telefone:',
    'LBL_PORTAL_FLAG' => 'Exibir no Portal?',
    'LBL_EMBED_FLAG' => 'Embutido no email?',
    'LBL_PRODUCT_ID' => 'ID do Produto:',
    'LBL_QUOTE_ID' => 'ID da proposta:',
    'LBL_RELATED_TO' => 'Referente a:',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar notas',
    'LBL_STATUS' => 'Situação',
    'LBL_SUBJECT' => 'Assunto:',
    'LNK_IMPORT_NOTES' => 'Importar notas',
    'LNK_NEW_NOTE' => 'Criar nota ou anexo',
    'LNK_NOTE_LIST' => 'Ver notas',
    'LBL_MEMBER_OF' => 'Membro de:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizador atribuído',
    'LBL_REMOVING_ATTACHMENT' => 'A remover anexo...',
    'ERR_REMOVING_ATTACHMENT' => 'Falha ao remover anexo...',
    'LBL_CREATED_BY' => 'Criado por',
    'LBL_MODIFIED_BY' => 'Alterado por',
    'LBL_SEND_ANYWAYS' => 'Este email não possui um assunto. Enviar/guardar mesmo assim?',
    'LBL_NOTE_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Minhas notas',
    'LBL_EDITLAYOUT' => 'Editar esquema' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Nome próprio',
    'LBL_LAST_NAME' => 'Apelido',
    'LBL_DATE_ENTERED' => 'Data de criação',
    'LBL_DATE_MODIFIED' => 'Data de alteração',
    'LBL_DELETED' => 'Eliminado',
    'LBL_FILE_CONTENTS' => 'Conteúdo do ficheiro',

    'LBL_ASCENDING' => 'Ascendente',
    'LBL_DESCENDING' => 'Descendente',
);
