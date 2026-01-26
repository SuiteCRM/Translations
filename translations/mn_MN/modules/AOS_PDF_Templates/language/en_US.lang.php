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
    'LBL_ASSIGNED_TO_ID' => 'Хариуцагчийн ID',
    'LBL_ASSIGNED_TO_NAME' => 'Хариуцагч',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Үүссэн Огноо',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED_NAME' => 'Өөрчилсөн',
    'LBL_CREATED' => 'Үүсгэсэн',
    'LBL_DESCRIPTION' => 'Body',
    'LBL_HEADER' => 'Header',
    'LBL_FOOTER' => 'Footer',
    'LBL_DELETED' => 'Устгасан',
    'LBL_NAME' => 'Нэр',
    'LBL_CREATED_USER' => 'Үүсгэсэн',
    'LBL_MODIFIED_USER' => 'Өөрчилсөн',
    'LBL_LIST_FORM_TITLE' => 'PDF Templates List',
    'LBL_MODULE_NAME' => 'PDF Templates',
    'LBL_MODULE_TITLE' => 'PDF Templates: Home',
    'LBL_HOMEPAGE_TITLE' => 'My PDF Templates',
    'LNK_NEW_RECORD' => 'Create PDF Template',
    'LNK_LIST' => 'View PDF Templates',
    'LBL_SEARCH_FORM_TITLE' => 'Search PDF Templates',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Түүхийг харах',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Үйл ажиллагаа',
    'LBL_NEW_FORM_TITLE' => 'New PDF Template',
    'LBL_TYPE' => 'Төрөл',
    'LBL_ACTIVE' => 'Идэвхитэй',
    'LBL_BUTTON_INSERT' => 'Оруулах',
    'LBL_WARNING_OVERWRITE' => 'Warning, this will overwrite your current work',
    'LBL_INSERT_FIELDS' => 'Insert Fields',

    'LBL_SAMPLE' => 'Load Sample',
    'LBL_PAGE' => 'Хуудас',
    'LBL_PREPARED_FOR' => 'Зориулан бэлтгэсэн',
    'LBL_PREPARED_BY' => 'Бэлдсэн',
    'LBL_QUOTE_SAMPLE' => 'Үнийн саналын загвар',
    'LBL_INVOICE_SAMPLE' => 'Нэхэмжлэхийн загвар',
    'LBL_ACCOUNT_SAMPLE' => 'Харилцагчийн загвар',
    'LBL_CONTACT_SAMPLE' => 'Харилцагч (хүн)-ийн загвар',
    'LBL_LEAD_SAMPLE' => 'Сонирхолын загвар',
    'LBL_ANY_STREET' => 'Гудамж',
    'LBL_ANY_TOWN' => 'Хот',
    'LBL_ANY_WHERE' => 'Улс',

    'LBL_QUOTE_GROUP_SAMPLE' => 'Үнийн саналын групп загвар',
    'LBL_INVOICE_GROUP_SAMPLE' => 'Нэхэмжлэх групп загвар',
    'LBL_MARGIN_LEFT' => 'Цаасны хэмжээ',
    'LBL_MARGIN_RIGHT' => 'Баруун зай',
    'LBL_MARGIN_TOP' => 'Дээд зай',
    'LBL_MARGIN_BOTTOM' => 'Доод зай',
    'LBL_MARGIN_HEADER' => 'Толгойн зай',
    'LBL_MARGIN_FOOTER' => 'Хөлний зай',
    'LBL_EDITVIEW_PANEL1' => 'Цаасны зай',
    'LBL_DETAILVIEW_PANEL1' => 'Цаасны зай',
    'LBL_PAGE_SIZE' => 'Хуудасны хэмжээ',
    'LBL_ORIENTATION' => 'Хэвлэх чиглэл',
);
