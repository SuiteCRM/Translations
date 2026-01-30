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
    'LBL_EDIT_LAYOUT' => 'Editar esquema',
    'LBL_EDIT_FIELDS' => 'Editar campos personalizados',
    'LBL_SELECT_FILE' => 'Selecionar ficheiro',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Caixa de ferramentas',
    'LBL_SUITE_FIELDS_STAGE' => 'Campos SuiteCRM (clique nos itens a adicionar à área de ensaio)',
    'LBL_VIEW_SUITE_FIELDS' => 'Ver campos SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Falha ao guardar',
    'LBL_CONFIRM_UNSAVE' => 'As alterações efetuadas não foram guardadas. Tem a certeza de que pretende continuar?',
    'LBL_PUBLISHING' => 'A publicar...',
    'LBL_PUBLISHED' => 'Publicado',
    'LBL_FAILED_PUBLISHED' => 'Falha ao publicar',
    'LBL_DROP_HERE' => '[Largar aqui]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Nome',
    'LBL_LABEL' => 'Rótulo',
    'LBL_MASS_UPDATE' => 'Atualização em lote',
    'LBL_DEFAULT_VALUE' => 'Valor predefinido',
    'LBL_REQUIRED' => 'Obrigatório',
    'LBL_DATA_TYPE' => 'Tipo',


    'LBL_HISTORY' => 'Histórico',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Bem-vindo ao Estúdio!</h2><br>O que gostaria de fazer hoje?<br><b>Por favor, selecione as opções abaixo.</b> ',
    'LBL_SW_EDIT_MODULE' => 'Editar um módulo',
    'LBL_SW_EDIT_DROPDOWNS' => 'Editar listas de seleção',
    'LBL_SW_EDIT_TABS' => 'Configurar abas',
    'LBL_SW_RENAME_TABS' => 'Renomear abas',
    'LBL_SW_EDIT_GROUPTABS' => 'Configurar grupo de abas',
    'LBL_SW_EDIT_PORTAL' => 'Editar Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Reparar campos personalizados',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Migrar Campos Personalizados',

//Manager Backups History
    'LBL_MB_DELETE' => 'Eliminar',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Criar uma Lista de seleção',
    'LBL_DROPDOWN_NAME' => 'Nome da lista de seleção:',
    'LBL_DROPDOWN_LANGUAGE' => 'Idioma da lista de seleção:',
    'LBL_TABGROUP_LANGUAGE' => 'Idioma:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Exibir valor',
    'LBL_DD_DATABASEVALUE' => 'Valor da base de dados',
    'LBL_DD_ALL' => 'Tudo',

//BUTTONS
    'LBL_BTN_SAVE' => 'Guardar',
    'LBL_BTN_CANCEL' => 'Cancelar',
    'LBL_BTN_SAVEPUBLISH' => 'Guardar e implementar',
    'LBL_BTN_HISTORY' => 'Histórico',
    'LBL_BTN_ADDROWS' => 'Adicionar linhas',
    'LBL_BTN_UNDO' => 'Desfazer',
    'LBL_BTN_REDO' => 'Refazer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Adicionar campo personalizado',
    'LBL_BTN_TABINDEX' => 'Editar ordem de tabulação',

//TABS
    'LBL_MODULES' => 'Módulos',
    'LBL_MODULE_NAME' => 'Administração',
    'LBL_CONFIGURE_GROUP_TABS' => 'Módulos em menus — Configurar filtros',
    'LBL_GROUP_TAB_WELCOME' => 'Os filtros abaixo serão exibidos na lista do módulo de menu para os utilizadores poderem escolher ver grupos de módulos no menu. Arraste e solte os módulos para os grupos pretendidos. Nota: os grupos vazios não serão exibidos no menu.',
    'LBL_RENAME_TAB_WELCOME' => 'Clique em qualquer aba de valor de visualização na tabela abaixo para renomear a aba.',
    'LBL_DELETE_MODULE' => 'Remover&nbsp;módulo<br />do&nbsp;filtro',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Selecione um idioma disponível, edite os rótulos e clique em Guardar e implementar para aplicar os rótulos no idioma selecionado.',
    'LBL_ADD_GROUP' => 'Adicionar filtro',
    'LBL_NEW_GROUP' => 'Novo grupo',
    'LBL_RENAME_TABS' => 'Renomear módulos',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Erro: Valor de chave inválido: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Guardar' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Desfazer' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Refazer' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Diretamente' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Adicionar campo' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Maximizar' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Minimizar' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Publicar' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Adicionar linhas' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Adicionar campo' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Editar' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Selecione o idioma a editar.',
    'LBL_SINGULAR' => 'Rótulo — Singular',
    'LBL_PLURAL' => 'Rótulo — Plural',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Clique <b>Guardar</b> para aplicar as alterações.'

);
