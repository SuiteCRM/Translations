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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    // Dashlet Categories
    'LBL_CHARTS' => 'Gráficos',
    'LBL_DEFAULT' => 'Vistas',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la cuenta.',
    'LBL_ACCOUNT_INFORMATION' => 'Visión Global', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
    'LBL_ACCOUNT' => 'Cuenta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_ADDRESS_INFORMATION' => 'Información de Dirección',
    'LBL_ANNUAL_REVENUE' => 'Ingresos Anuales:',
    'LBL_ANY_ADDRESS' => 'Cualquier Dirección:',
    'LBL_ANY_EMAIL' => 'Cualquier Correo:',
    'LBL_ANY_PHONE' => 'Cualquier Teléfono:',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
    'LBL_ASSIGNED_TO_ID' => 'Usuario Asignado:',
    'LBL_BILLING_ADDRESS_CITY' => 'Ciudad de Facturación:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'País de Facturación:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'CP de Dirección de Facturación:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado/Provincia de Dirección de Facturación:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Calle de Dirección de Facturación 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Calle de Dirección de Facturación 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Calle de Dirección de Facturación 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Calle de Dirección de Facturación:',
    'LBL_BILLING_ADDRESS' => 'Dirección de Facturación:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',
    'LBL_CAMPAIGN_ID' => 'ID Campaña',
    'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
    'LBL_CITY' => 'Ciudad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_COUNTRY' => 'País:',
    'LBL_DATE_ENTERED' => 'Fecha de Creación:',
    'LBL_DATE_MODIFIED' => 'Fecha de Modificación:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_DESCRIPTION_INFORMATION' => 'Información Adicional',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DUPLICATE' => 'Posible Cuenta Duplicada',
    'LBL_EMAIL' => 'Correo Electrónico:',
    'LBL_EMAIL_OPT_OUT' => 'Rehusar Email:',
    'LBL_EMAIL_ADDRESSES' => 'Direcciones de Email',
    'LBL_EMPLOYEES' => 'Empleados:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
    'LBL_HOMEPAGE_TITLE' => 'Mis Cuentas',
    'LBL_INDUSTRY' => 'Industria:',
    'LBL_INVALID_EMAIL' => 'Email no válido:',
    'LBL_INVITEE' => 'Contactos',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
    'LBL_LIST_ACCOUNT_NAME' => 'Nombre',
    'LBL_LIST_CITY' => 'Ciudad',
    'LBL_LIST_CONTACT_NAME' => 'Nombre Contacto',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FORM_TITLE' => 'Lista de Cuentas',
    'LBL_LIST_PHONE' => 'Teléfono',
    'LBL_LIST_STATE' => 'Estado/Provincia',
    'LBL_MEMBER_OF' => 'Miembro de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizaciones Miembro',
    'LBL_MODULE_NAME' => 'Cuentas',
    'LBL_MODULE_TITLE' => 'Cuentas: Inicio',
    'LBL_MODULE_ID' => 'Cuentas',
    'LBL_NAME' => 'Nombre:',
    'LBL_NEW_FORM_TITLE' => 'Nueva Cuenta',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email Alternativo:',
    'LBL_OTHER_PHONE' => 'Tel. Alternativo:',
    'LBL_OWNERSHIP' => 'Propietario:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Cuenta Padre',
    'LBL_PHONE_ALT' => 'Tel. Alternativo:',
    'LBL_PHONE_FAX' => 'Fax Oficina:',
    'LBL_PHONE_OFFICE' => 'Teléfono Oficina:',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_POSTAL_CODE' => 'Código Postal:',
    'LBL_PRODUCTS_TITLE' => 'Productos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copiar a Contactos',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copiar...',
    'LBL_RATING' => 'Calificación:',
    'LBL_SAVE_ACCOUNT' => 'Guardar Cuenta',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Cuentas',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad de Dirección de Envío:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de Dirección de Envío:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CP de Dirección de Envío:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estado/Provincia de Dirección de Envío:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Calle de Dirección de Envío 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Calle de Dirección de Envío 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Calle de Dirección de Envío 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Calle de Dirección de Envío:',
    'LBL_SHIPPING_ADDRESS' => 'Dirección de Envío:',
    'LBL_SIC_CODE' => 'Código CNAE/SIC:',
    'LBL_STATE' => 'Estado o región:',
    'LBL_TICKER_SYMBOL' => 'Símbolo Ticker:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Sitio Web:',
    'LBL_CAMPAIGNS' => 'Campañas',
    'LNK_ACCOUNT_LIST' => 'Ver Cuentas',
    'LNK_NEW_ACCOUNT' => 'Crear una cuenta',
    'LNK_IMPORT_ACCOUNTS' => 'Importar Cuentas',
    'MSG_DUPLICATE' => 'La creación de esta cuenta puede producir una cuenta duplicada. Puede elegir una cuenta existente de la lista inferior o hacer clic en Guardar para continuar la creación de una nueva cuenta con los datos introducidos previamente.',
    'MSG_SHOW_DUPLICATES' => 'El registro de cuenta que está a punto de crear podría ser un duplicado de una cuenta que ya existe. Las cuentas que contienen nombres similares se listan a continuación.<br>Haga clic en Crear Cuenta para seguir con la creación de esta nueva cuenta, o haga clic en Cancelar para volver al módulo sin crear la cuenta.',
    'LBL_ASSIGNED_USER_NAME' => 'Asignado a:',
    'LBL_PROSPECT_LIST' => 'Lista de Público Objetivo',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',
    //For export labels
    'LBL_PARENT_ID' => 'ID Padre',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Productos y servicios adquiridos',

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_INVOICES' => 'Facturas',
    'LBL_AOS_QUOTES' => 'Cotizaciones',
    'LBL_LIST_WEBSITE' => 'Página web',
);
