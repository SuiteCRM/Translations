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
    'LBL_MODULE_NAME' => 'Mục tiêu',
    'LBL_MODULE_ID' => 'Mục tiêu',
    'LBL_INVITEE' => 'Báo cáo trực tiếp',
    'LBL_MODULE_TITLE' => 'Đối tượng: Tr.chính',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm',
    'LBL_LIST_FORM_TITLE' => 'Danh sách đối tượng',
    'LBL_NEW_FORM_TITLE' => 'Đối tượng mới',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_LAST_NAME' => 'Họ',
    'LBL_LIST_TITLE' => 'Chức vụ',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Điện thoại',
    'LBL_LIST_FIRST_NAME' => 'Tên',
    'LBL_ASSIGNED_TO_NAME' => 'Chỉ định cho',
    'LBL_ASSIGNED_TO_ID' => 'Giao cho:',
    'LBL_CAMPAIGN_ID' => 'ID Chiến dịch',
    'LBL_EXISTING_ACCOUNT' => 'Chọn Khách hàng hiện hữu',
    'LBL_CREATED_ACCOUNT' => 'Đã tạo 1 Khách hàng mới',
    'LBL_CREATED_CALL' => 'Đã tạo 1 cuộc gọi mới',
    'LBL_CREATED_MEETING' => 'Đã tạo 1 Cuộc hẹn mới',
    'LBL_NAME' => 'Tên:',
    'LBL_PROSPECT_INFORMATION' => 'Thông tin Khách hàng', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Thông tin thêm',
    'LBL_FIRST_NAME' => 'Tên:',
    'LBL_OFFICE_PHONE' => 'Điện thoại VP:',
    'LBL_ANY_PHONE' => 'Điện thoại:',
    'LBL_PHONE' => 'Điện thoại:',
    'LBL_LAST_NAME' => 'Họ:',
    'LBL_MOBILE_PHONE' => 'Di động:',
    'LBL_HOME_PHONE' => 'Nhà:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Địa chỉ:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Tên thành phố chính:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Tên quốc gia:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Tên tiểu bang chính:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Mã bưu chính:',
    'LBL_ALT_ADDRESS_STREET' => 'Địa chỉ khác:',
    'LBL_ALT_ADDRESS_CITY' => 'Tên thành phố khác:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Tên quốc gia khác:',
    'LBL_ALT_ADDRESS_STATE' => 'Địa chỉ tiểu bang khác:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Mã bưu chính khác:',
    'LBL_TITLE' => 'Chức vụ:',
    'LBL_DEPARTMENT' => 'Phòng:',
    'LBL_BIRTHDATE' => 'Ngày sinh:',
    'LBL_EMAIL_ADDRESS' => 'Địa chỉ Email:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ASSISTANT' => 'Phụ:',
    'LBL_ASSISTANT_PHONE' => 'Điện thoại phụ:',
    'LBL_DO_NOT_CALL' => 'Xin đừng gọi:',
    'LBL_EMAIL_OPT_OUT' => 'Email từ bên ngoài:',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ chính:',
    'LBL_ALTERNATE_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ANY_ADDRESS' => 'Địa chỉ:',
    'LBL_CITY' => 'Thành phố:',
    'LBL_STATE' => 'Quận huyện hoặc khu vực:',
    'LBL_POSTAL_CODE' => 'Mã bưu chính:',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_ADDRESS_INFORMATION' => 'Thông tin địa chỉ',
    'LBL_DESCRIPTION' => 'Mô tả:',
    'LBL_OPP_NAME' => 'Tên cơ hội:',
    'LBL_IMPORT_VCARD' => 'Nhập vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Tự động tạo một liên hệ mới bằng cách nhập khẩu vCard tập tin hệ thống của bạn.',
    'LBL_DUPLICATE' => 'Có khả năng trùng Đối tượng',
    'MSG_SHOW_DUPLICATES' => 'Bản ghi mục tiêu bạn sắp tạo có thể là bản sao của một bản ghi mục tiêu đã tồn tại. Các bản ghi mục tiêu có chứa tên và / hoặc địa chỉ email tương tự được liệt kê dưới đây. <br> Nhấp vào Tạo mục tiêu để tiếp tục tạo mục tiêu mới này hoặc chọn một mục tiêu hiện có được liệt kê dưới đây.',
    'MSG_DUPLICATE' => 'Bản ghi mục tiêu bạn sắp tạo có thể là bản sao của một bản ghi mục tiêu đã tồn tại. Các bản ghi mục tiêu có chứa tên và / hoặc địa chỉ email tương tự được liệt kê dưới đây. <br> Nhấp vào Lưu để tiếp tục tạo mục tiêu mới này hoặc nhấp Hủy để quay lại module mà không cần tạo mục tiêu.',
    'LNK_IMPORT_VCARD' => 'Tạo từ vCard',
    'LNK_NEW_ACCOUNT' => 'Tạo Account',
    'LNK_NEW_OPPORTUNITY' => 'Tạo Opportunity',
    'LNK_NEW_CASE' => 'Tạo Vụ việc',
    'LNK_NEW_NOTE' => 'Tạo Ghi chú hoặc Đính kèm',
    'LNK_NEW_CALL' => 'Log Cuộc gọi',
    'LNK_NEW_EMAIL' => 'Lưu trữ Email',
    'LNK_NEW_MEETING' => 'Lịch họp',
    'LNK_NEW_TASK' => 'Tạo Tác vụ',
    'LNK_NEW_APPOINTMENT' => 'Thiết lập cuộc hẹn',
    'LNK_IMPORT_PROSPECTS' => 'Nhập Tiềm năng',
    'NTC_DELETE_CONFIRMATION' => 'Bạn chắc muốn xoá hoàn toàn bản ghi?',
    'NTC_REMOVE_CONFIRMATION' => 'Bạn có chắc bạn muốn loại bỏ Liên hệ này khỏi Vụ việc?',
    'ERR_DELETE_RECORD' => 'Một số hồ sơ phải được xác định để xóa liên lạc.',
    'LBL_SALUTATION' => 'Xưng hô',
    'LBL_CREATED_OPPORTUNITY' => 'Một cơ hội mới đã được tạo',
    'LNK_SELECT_ACCOUNT' => "Chọn Khách hàng",
    'LNK_NEW_PROSPECT' => 'Tạo đối tượng',
    'LNK_PROSPECT_LIST' => 'Xem đối tượng',
    'LNK_NEW_CAMPAIGN' => 'Tạo chiến dịch',
    'LNK_CAMPAIGN_LIST' => 'Chiến dịch',
    'LNK_NEW_PROSPECT_LIST' => 'Tạo danh sách đối tượng',
    'LNK_PROSPECT_LIST_LIST' => 'Các danh sách đối tượng',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Chọn lựa Đối tượng',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Chọn lựa Đối tượng',
    'LBL_INVALID_EMAIL' => 'Email không tồn tại:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mục tiêu',
    'LBL_PROSPECT_LIST' => 'Danh sách tiềm năng',
    'LBL_CONVERT_BUTTON_TITLE' => 'Chuyển đối Đối tượng',
    'LBL_CONVERT_BUTTON_LABEL' => 'Chuyển đối Đối tượng',
    'LNK_NEW_CONTACT' => 'Khách hàng mới',
    'LBL_CREATED_CONTACT' => "Đã tạo 1 Liên hệ mới",
    'LBL_CAMPAIGNS' => 'Chiến dịch',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Ghi lại chiến dịch',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Id Đầu mối',
    'LBL_CONVERTED_LEAD' => 'Đầu mối đã được chuyển đổi',
    'LBL_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_EDIT_ACCOUNT_NAME' => 'Tên Khách hàng:',
    'LBL_CREATED_USER' => 'Người tạo',
    'LBL_MODIFIED_USER' => 'Người sửa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Lịch sử',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Sự kiện',
);
