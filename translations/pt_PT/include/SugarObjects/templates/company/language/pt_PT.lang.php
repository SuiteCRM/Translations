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
    'LBL_ACCOUNT_NAME' => 'Nome da empresa:',
    'LBL_ACCOUNT' => 'Empresa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Dados de endereço',
    'LBL_ANNUAL_REVENUE' => 'Rendimento anual:',
    'LBL_ANY_ADDRESS' => 'Todos os endereços:',
    'LBL_ANY_EMAIL' => 'Todos os endereços de email:',
    'LBL_EMAIL_NON_PRIMARY' => 'Endereços de email não principais',
    'LBL_ANY_PHONE' => 'Todos os telefones:',
    'LBL_ASSIGNED_TO_NAME' => 'Utilizador:',
    'LBL_RATING' => 'Classificação',
    'LBL_ASSIGNED_TO' => 'Atribuído a:',
    'LBL_ASSIGNED_USER' => 'Atribuído a:',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
    'LBL_BILLING_ADDRESS_CITY' => 'Faturação — Cidade:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faturação — País:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faturação — Código postal:',
    'LBL_BILLING_ADDRESS_STATE' => 'Faturação — Concelho:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Faturação — Rua 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Faturação — Rua 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Faturação — Rua 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faturação — Rua:',
    'LBL_BILLING_ADDRESS' => 'Endereço de faturação:',
    'LBL_ACCOUNT_INFORMATION' => 'Dados da empresa',
    'LBL_CITY' => 'Cidade:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_COUNTRY' => 'País:',
    'LBL_DATE_ENTERED' => 'Data de criação:',
    'LBL_DATE_MODIFIED' => 'Data de alteração:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contas',
    'LBL_DESCRIPTION_INFORMATION' => 'Dados da descrição',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DUPLICATE' => 'Conta provavelmente duplicada',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Colaboradores:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Área de atividade:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da conta',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_EMAIL_ADDRESS' => 'Endereço de email',
    'LBL_LIST_PHONE' => 'Telefone',
    'LBL_LIST_STATE' => 'Concelho',
    'LBL_MEMBER_OF' => 'Membro de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizações filiais',
    'LBL_NAME' => 'Nome:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email alternativo:',
    'LBL_OTHER_PHONE' => 'Telefone alternativo 2:',
    'LBL_OWNERSHIP' => 'Propriedade:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID da conta hospedeira',
    'LBL_PHONE_ALT' => 'Telefone alternativo:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefone de trabalho:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_EMAIL_ADDRESS' => 'Endereço de email',
    'LBL_EMAIL_ADDRESSES' => 'Endereço(s) de email',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_SAVE_ACCOUNT' => 'Guardar conta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Cidade — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Código postal — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Concelho — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rua — Endereço de envio 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rua — Endereço de envio 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rua — Endereço de envio 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rua — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS' => 'Endereço de envio:',

    'LBL_STATE' => 'Estado:',
    'LBL_TICKER_SYMBOL' => 'Símbolo de Bolsa',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Sítio Internet:',

    'LNK_ACCOUNT_LIST' => 'Contas',
    'LNK_NEW_ACCOUNT' => 'Criar conta',

    'MSG_DUPLICATE' => 'A criação desta conta poderá gerar uma conta duplicada. São listadas abaixo contas com nomes semelhantes. <br>Pode clicar em Criar conta para continuar e criar uma nova conta ou selecionar uma conta da lista abaixo.',
    'MSG_SHOW_DUPLICATES' => 'A criação desta conta poderá gerar uma conta duplicada. São listadas abaixo contas com nomes semelhantes. <br>Pode clicar em Guardar para continuar a criar esta nova conta ou clicar em Cancelar para voltar ao módulo sem criar a conta.',

    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registo?',

    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',

);
