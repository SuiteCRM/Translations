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
    //module
    'LBL_MODULE_NAME' => 'Documentos',
    'LBL_MODULE_TITLE' => 'Documentos: entrada',
    'LNK_NEW_DOCUMENT' => 'Criar documento',
    'LNK_DOCUMENT_LIST' => 'Ver documentos',
    'LBL_DOC_REV_HEADER' => 'Revisões do documento',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar documentos',
    //vardef labels
    'LBL_NAME' => 'Nome do documento',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_CATEGORY' => 'Categoria',
    'LBL_SUBCATEGORY' => 'Subcategoria',
    'LBL_STATUS' => 'Situação',
    'LBL_CREATED_BY' => 'Criado por',
    'LBL_DATE_ENTERED' => 'Data de criação',
    'LBL_DATE_MODIFIED' => 'Data de alteração',
    'LBL_DELETED' => 'Eliminado',
    'LBL_MODIFIED' => 'Alterado pelo ID',
    'LBL_MODIFIED_USER' => 'Alterado por',
    'LBL_CREATED' => 'Criado por',
    'LBL_REVISIONS' => 'Revisões',
    'LBL_RELATED_DOCUMENT_ID' => 'ID do documento relacionado',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID da revisão do documento relacionado',
    'LBL_IS_TEMPLATE' => 'É um modelo',
    'LBL_TEMPLATE_TYPE' => 'Tipo de documento',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_REVISION_NAME' => 'Número da revisão',
    'LBL_MIME' => 'Tipo de Mime',
    'LBL_REVISION' => 'Revisão',
    'LBL_DOCUMENT' => 'Documento relacionado',
    'LBL_LATEST_REVISION' => 'Última Revisão',
    'LBL_CHANGE_LOG' => 'Historial de alterações',
    'LBL_ACTIVE_DATE' => 'Data de publicação',
    'LBL_EXPIRATION_DATE' => 'Data de validade',
    'LBL_FILE_EXTENSION' => 'Extensão de ficheiro',
    'LBL_LAST_REV_MIME_TYPE' => 'Tipo de MIME da última revisão',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Não Especificado',
    'LBL_HOMEPAGE_TITLE' => 'Os meus documentos',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Novo documento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nome do documento:',
    'LBL_FILENAME' => 'Nome do Ficheiro:',
    'LBL_LIST_FILENAME' => 'Ficheiro:',
    'LBL_DOC_VERSION' => 'Revisão:',
    'LBL_FILE_UPLOAD' => 'Ficheiro:',

    'LBL_CATEGORY_VALUE' => 'Categoria:',
    'LBL_LIST_CATEGORY' => 'Categoria',
    'LBL_SUBCATEGORY_VALUE' => 'Subcategoria:',
    'LBL_DOC_STATUS' => 'Situação:',
    'LBL_LAST_REV_CREATOR' => 'Revisão criada por:',
    'LBL_LASTEST_REVISION_NAME' => 'Nome da última revisão',
    'LBL_SELECTED_REVISION_NAME' => 'Nome da revisão selecionada:',
    'LBL_CONTRACT_STATUS' => 'Situação do contrato:',
    'LBL_CONTRACT_NAME' => 'Nome do contrato',
    'LBL_DET_RELATED_DOCUMENT' => 'Documento relacionado:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Revisão do documento relacionado:",
    'LBL_DET_IS_TEMPLATE' => 'Modelo?',
    'LBL_DET_TEMPLATE_TYPE' => 'Tipo de documento:',
    'LBL_DOC_DESCRIPTION' => 'Descrição:',
    'LBL_DOC_ACTIVE_DATE' => 'Data de publicação:',
    'LBL_DOC_EXP_DATE' => 'Data de validade:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista de documentos',
    'LBL_LIST_DOCUMENT' => 'Documento',
    'LBL_LIST_SUBCATEGORY' => 'Subcategoria',
    'LBL_LIST_REVISION' => 'Revisão',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
    'LBL_LIST_LAST_REV_DATE' => 'Data de revisão',
    'LBL_LIST_VIEW_DOCUMENT' => 'Ver',
    'LBL_LIST_ACTIVE_DATE' => 'Data de publicação',
    'LBL_LIST_EXP_DATE' => 'Data de validade',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_LINKED_ID' => 'ID associado',
    'LBL_SELECTED_REVISION_ID' => 'ID da revisão selecionada',
    'LBL_LATEST_REVISION_ID' => 'ID da última revisão',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nome de ficheiro da revisão selecionada',
    'LBL_FILE_URL' => 'URL do ficheiro',

    //document search form.
    'LBL_SF_CATEGORY' => 'Categoria:',
    'LBL_SF_SUBCATEGORY' => 'Subcategoria:',

    'DEF_CREATE_LOG' => 'Documento criado',

    //error messages
    'ERR_DOC_NAME' => 'Nome do documento',
    'ERR_DOC_ACTIVE_DATE' => 'Data de publicação',
    'ERR_FILENAME' => 'Nome do ficheiro',
    'ERR_DOC_VERSION' => 'Versão do documento',
    'ERR_DELETE_CONFIRM' => 'Deseja eliminar esta revisão do documento?',
    'ERR_DELETE_LATEST_VERSION' => 'Não tem permissão para eliminar a revisão mais recente do documento.',
    'LNK_NEW_MAIL_MERGE' => 'Impressão em série',
    'ERR_MISSING_FILE' => 'Falta um ficheiro neste documento, provavelmente devido a um erro durante o carregamento. Por favor, tente fazer novamente o carregamento do ficheiro ou contacte o administrador.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nome',
    'LBL_LIST_IS_TEMPLATE' => 'Modelo?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Tipo de documento',
    'LBL_LAST_REV_CREATE_DATE' => 'Data de criação da última revisão',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CREATED_USER' => 'Utilizador criado',
    'LBL_DOCUMENT_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID da origem do documento',
    'LBL_DOC_TYPE' => 'Origem',
    'LBL_DOC_TYPE_POPUP' => 'Selecione um destino para onde este documento será enviado <br> e no qual ficará disponível.',
    'LBL_DOC_URL' => 'URL de origem do documento',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nome do ficheiro',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Os últimos 20 ficheiros alterados são exibidos na lista abaixo, por ordem descendente. Utilize a pesquisa para encontrar outros ficheiros.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nome do ficheiro',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'O utilizador tentou aceder a uma API externa inválida ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Falha na verificação de autenticação da API externa ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalias',

    'LBL_AOS_CONTRACTS' => 'Contratos',
);
