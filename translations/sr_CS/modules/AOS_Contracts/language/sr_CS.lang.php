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
    'LBL_ASSIGNED_TO_NAME' => 'Menadžer ugovora',
    'LBL_CONTRACT_ACCOUNT' => 'Kompanija',
    'LBL_OPPORTUNITY' => 'Prodajna prilika',
    'LBL_ID' => 'ID broj',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Obrisan',
    'LBL_NAME' => 'Naslov Ugovora',
    'LBL_CREATED_USER' => 'Autor je korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_FORM_TITLE' => 'Lista ugovora',
    'LBL_MODULE_NAME' => 'Ugovori',
    'LBL_MODULE_TITLE' => 'Ugovori: Početno',
    'LBL_HOMEPAGE_TITLE' => 'Moji ugovori',
    'LNK_NEW_RECORD' => 'Kreiraj ugovor',
    'LNK_LIST' => 'Pregledaj ugovore',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje ugovora',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi ugovor',
    'LBL_CONTRACT_NAME' => 'Naziv ugovora',
    'LBL_REFERENCE_CODE ' => 'Poziv na broj ',
    'LBL_START_DATE' => 'Datum početka',
    'LBL_END_DATE' => 'Krajnji datum',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Vrednost ugovora',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Datum potpisa kupca',
    'LBL_COMPANY_SIGNED_DATE' => 'Datum potpisa kompanije',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Podsetnik za Datum obnavljanja',
    'LBL_CONTRACT_TYPE' => 'Vrsta ugovora',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_ADD_GROUP' => 'Dodaj grupu',
    'LBL_DELETE_GROUP' => 'Izbriši grupu',
    'LBL_GROUP_NAME' => 'Ime grupe',
    'LBL_GROUP_TOTAL' => 'Grupa ukupno',
    'LBL_PRODUCT_QUANITY' => 'Količina',
    'LBL_PRODUCT_NAME' => 'Proizvod',
    'LBL_PART_NUMBER' => 'Broj dela',
    'LBL_PRODUCT_NOTE' => 'Beleška',
    'LBL_PRODUCT_DESCRIPTION' => 'Opis',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Popust',
    'LBL_UNIT_PRICE' => 'Prodajna cena',
    'LBL_TOTAL_PRICE' => 'Ukupno',
    'LBL_VAT' => 'Porez',
    'LBL_VAT_AMT' => 'Iznos poreza',
    'LBL_SERVICE_NAME' => 'Usluga',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Prodajna cena',
    'LBL_SERVICE_DISCOUNT' => 'Popust',
    'LBL_LINE_ITEMS' => 'Stavke',
    'LBL_SUBTOTAL_AMOUNT' => 'Međuzbir',
    'LBL_DISCOUNT_AMOUNT' => 'Popust',
    'LBL_TAX_AMOUNT' => 'Porez',
    'LBL_SHIPPING_AMOUNT' => 'Dostava',
    'LBL_TOTAL_AMT' => 'Ukupno',
    'LBL_GRAND_TOTAL' => 'Sveukupno',
    'LBL_SHIPPING_TAX' => 'Porez na dostavu',
    'LBL_SHIPPING_TAX_AMT' => 'Porez na dostavu',
    'LBL_ADD_PRODUCT_LINE' => 'Dodaj liniju proizvoda',
    'LBL_ADD_SERVICE_LINE' => 'Dodaj liniju usluge ',
    'LBL_PRINT_AS_PDF' => 'Štampaj kao PDF',
    'LBL_EMAIL_PDF' => 'Pošalji emailom PDF',
    'LBL_PDF_NAME' => 'Ugovor',
    'LBL_EMAIL_NAME' => 'Ugovor za',
    'LBL_NO_TEMPLATE' => 'GREŠKA\Nije pronađen šablon. Ako niste kreirali šablon ugovora, idite na modul PDF šabloni i kreirajte ga',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Vrednost ugovora (osnovna valuta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Međuzbir (osnovna valuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Popust (osnovna valuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Porez (osnovna valuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Dostava (osnovna valuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Ukupno (osnovna valuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Porez na dostavu (osnovna valuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Sveukupno (osnovna valuta)',

    'LBL_CALL_ID' => 'Call ID',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupe stavki po linijama',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ponude za proizvod',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Ponude : Ugovori',
);
