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
    'LBL_LOADING' => 'لدائي قسط ادائي ميں اضافہ بارکاري' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'چھپانے کا اختیارات' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'ختم کریں' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'پیکج کے لیے<b> نام</b> مہیا کریں آپ جو نام درج کریں وہ حروف تہجی پر مشتمل ہو اور ان کے درمیان کوئی فاصلہ موجود نہ ہو (Example: HR_Management)<br/><br/> آپ مہیا کر سکتے ہیں<b>مصنف</b>اور <b>تفصیلات</b>معلومات پیکیج کے لیے<br/><br/>بنائے گئے پیکیج کو <b>محفوظ </b>کریں.',
            'modify' => 'یہ جائیداد اس</b> پیکیج<b> کے عمل کے لیے مناسب اقدامات اٹھاتی ہےیہاں ظاہر ہوتی ہے <br><br>آپ تبدیل کرسکتے ہیں<b>نام </b><b>مصنف</b> اور<b>پیکج کی<b> توسیع</b>کسٹومائز ماڈل میں دیکھتے ہوتے ہیں پیکیج کے ساتھ <br><br>کلک<b>نئے ماڈل</b>ماڈل پیکیج کے لئے بنائی<br><br>اگر پیکج کا مواد کم سے کم عنوان پر مشتمل<b>نشر<b> اور <b>دکھانا</b>پیکیج کے طور پر ٹھیک ہو جاتے ہیں <b>ماہر</b>کسٹمائزیشن کو پیکیج میں بنا دیا جاتا ہے.',
            'name' => 'یہ<b> نام</b> موجودہ پیکیج کے لیے ہے<br/><br/>آپ جو نام درج کریں گے وہ حروف تہجی ہونا چاہیے اس کے درمیان کوئی سپیس نہیں ہونے چاہیےپہلا حروف بڑا ہونا چاہیے (Example: HR_Management)',
            'author' => 'یہ<b> مصنف</b> نصب کرنے کے دوران دکھایا جا رہا ہے اندراج کرنے والا نام کے طور پر پیکج کو بنائیں <br><br>مصنف دونوں میں سے ایک انفرادی طور پر کمپنی کا سکہ کرتا ہے.',
            'description' => 'یہ<b> معلومات</b>پیکیج کی انسٹالیشن میں دکھائی جائے گی.',
            'publishbtn' => '</b>نشر<b> پر کلک کر کے تمام تبدیلیوں کو محفوظ کر لیںضبط فائل کے اندر یہ پیکیج میں انسٹال ہو جائیں گے <br><br>ماڈل ریڈر</b> کا استعمال<b> کریں زپ دستاویز کو چڑھانے اور انسٹال کرنے کے لیے.',
            'deploybtn' => 'کلیک<b> افسوس</b>تمام اندراج کو محفوظ کریں انسٹال پیکج کرنے کے لیے کے ساتھ ساتھ تمام ماڈل موجودہ نمونہ کے طور پر محفوظ کریں.',
            'duplicatebtn' => 'کلیک<b> ایک جیسا</b>عنوان کو نئے پیکج میں نقل کریں اور نئے پیکیج میں اس کو دکھائیں<br/><br/>نئے پیکج کے لیےنیا نام خود بخود بن جائے گاجو نمبر وصول کرنے کے لیے نام کے پیکیج میں نئے بنانے کے لیے استعمال ہوتے ہیں نئے اندراج پیکیج کو نام کو تبدیل کرسکتے ہیں<b>نام </b>اور کلک <b>محفوظ </b>.',
            'exportbtn' => '<;b>;برآمد</b>زپ دستاویز کو بنائیںتلخیص کاری پر مشتمل پیکیج<br><br> جو دستاویز بنایا گیا ہے وہ پیکیج ورژن میں انسٹال نہیں ہوگی<br><br>استمال<b>ماڈل لوڈر</b>زپ دستاویز کو درآمد کریںپیکیج میں ہونا چاہیے ماڈل بلڈر کسٹمائزیشن میں ظاہر ہونے چاہیے.',
            'deletebtn' => 'کلک<b> مٹائیں</b>اس پیکج کو مٹائیں تمام دستاویز جو اس پیکج کے متعلق ہیں.',
            'savebtn' => 'کلک <b>محفوظ</b>تمام ڈیٹا کے اندراج کو صاف کریں پیکیج کے متعلق.',
            'existing_module' => 'خصوصیات میں ترمیم کریں اور ماڈیول کے ساتھ منسلک شعبوں، تعلقات اور لے آؤٹ اپنی مرضی کے مطابق <b> ماڈیول </ b> آئکن پر کلک کریں.',
            'new_module' => 'کلک <b> نئے ماڈل</b>پیکیج کیلئے نئے ماڈلز کو بنائیں.',
            'key' => 'یہ 5 خط، موجودہ پیکیج میں تمام ماڈیولز کے لئے تمام ڈائریکٹریز، کلاس کے نام اور ڈیٹا بیس کی میزیں پہلے سے خطے کے لئے حروف تہجی <b> کلید </ b> استعمال کیا جائے گا. <br> <br> کلیدی کوشش میں استعمال کیا جاتا ہے. ٹیبل کا نام انفرادیت حاصل کرنے کے لئے.',
            'readme' => 'اس پیکیج کے لئے <b> ریڈیڈمی </ b> متن شامل کرنے کے لئے کلک کریں. <br> <br> ریڈیو میگزین کے وقت دستیاب ہو جائے گا.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'ماڈیول کے لئے <b> نام </ b> فراہم کریں. نیویگیشن ٹیب میں <b> لیبل </ b> پیش کیا جائے گا. <br/> </> <b> نیویگیشن ٹیب </ b> چیک باکس چیک کرنے کے ذریعہ ماڈیول کے لئے نیویگیشن ٹیب کو ظاہر کرنے کا انتخاب کریں. <br/> <br/> پھر ماڈیول کی قسم منتخب کریں جس کو آپ تیار کرنا چاہتے ہیں.. <br/> <br/> ایک سانچے کی قسم منتخب کریں. آپ کے ماڈیول کے لئے ایک بنیاد کے طور پر استعمال کرنے کے لئے ہر ٹیمپلیٹس کے شعبوں، ساتھ ساتھ پہلے سے مقرر کردہ ترتیب، پر مشتمل ہے. ماڈیول بنانے کیلئے <br/> <br/> <b> محفوظ کریں </ b> پر کلک کریں.',
            'modify' => 'آپ ماڈیول سے متعلق خصوصیات کو تبدیل کرسکتے ہیں یا ماڈیول سے متعلق <b> فیلڈز </ b>، <b> تعلقات </ b> اور <b> ترتیب </ b> اپنی مرضی کے مطابق کرسکتے ہیں.',
            'importable' => 'چیک کریں <b> قابل اعتماد </ b> چیک باکس اس ماڈیول کے لئے درآمد کرنے کے قابل ہو جائے گا. <br> <br> درآمد مددگار کے لئے ایک لنک ماڈیول میں شارٹ کٹ پینل میں دکھائے جائیں گے. درآمد مددگار بیرونی ذرائع سے ڈیٹا کو اپنی مرضی کے ماڈیول میں درآمد کرنے میں سہولت فراہم کرتا ہے.',
            'team_security' => 'چیک کریں <b> قابل اعتماد </ b> چیک باکس اس ماڈیول کے لئے درآمد کرنے کے قابل ہو جائے گا. <br> <br> درآمد مددگار کے لئے ایک لنک ماڈیول میں شارٹ کٹ پینل میں دکھائے جائیں گے. درآمد مددگار بیرونی ذرائع سے ڈیٹا کو اپنی مرضی کے ماڈیول میں درآمد کرنے میں سہولت فراہم کرتا ہے ',
            'reportable' => 'اس باکس کی جانچ پڑتال کرنے کے لئے اس ماڈیول کو اس کے خلاف چلانے کی اجازت دی جائے گی.',
            'assignable' => 'اس باکس کی جانچ پڑتال اس ماڈیول میں ایک مخصوص صارف کو تفویض کرنے کی اجازت دے گی.',
            'has_tab' => '<b> نیویگیشن ٹیب کی جانچ پڑتال </ b> ماڈیول کے لئے نیویگیشن ٹیب فراہم کرے گا.',
            'acl' => 'اس باکس کی جانچ پڑتال کرے گی اس ماڈیول پر فیلڈ سطح سیکورٹی سمیت رسائی کنٹرولز.',
            'studio' => 'اس باکس کی جانچ پڑتال کرنے میں منتظمین کو یہ ماڈیول سٹوڈیو کے اندر اپنی مرضی کے مطابق کرنے کی اجازت دیتا ہے.',
            'audit' => 'اس باکس کی جانچ پڑتال اس ماڈیول کے لئے آڈیٹنگ کو فعال کرے گی. بعض شعبوں میں تبدیلی درج کی جائے گی تاکہ منتظمین تبدیلی کی تاریخ کا جائزہ لے سکیں.',
            'viewfieldsbtn' => 'ماڈیول کے ساتھ منسلک شعبوں کو دیکھنے اور اپنی مرضی کے شعبوں کو تشکیل دینے اور ترمیم کرنے کیلئے <b> دیکھیں فیلڈز </ b> پر کلک کریں.',
            'viewrelsbtn' => 'اس ماڈیول کے ساتھ منسلک تعلقات اور نئے تعلقات پیدا کرنے کے لۓ <b> تعلقات دیکھیں </ b> پر کلک کریں.',
            'viewlayoutsbtn' => 'ماڈیول کے لۓ ترتیبات اور ترتیب کے اندر فیلڈ کے انتظام کو اپنی مرضی کے مطابق دیکھنے کیلئے <b> دیکھیں ترتیب </ b> پر کلک کریں.',
            'duplicatebtn' => 'ماڈیول کی خصوصیات کو نئے ماڈیول میں نقل کرنے اور نئے ماڈیول کو ظاہر کرنے کیلئے <b> ڈپلیکیٹ </ b> پر کلک کریں. <br/> <br/> نئی ماڈیول کے لئے، نیا نام تخلیق کرنے کے لئے استعمال کیا ماڈیول کے نام کے اختتام پر ایک بڑی تعداد کو ضم کرکے ایک نیا نام خود کار طریقے سے پیدا کیا جائے گا.',
            'deletebtn' => 'اس ماڈیول کو حذف کرنے کیلئے <b> حذف کریں </ b> پر کلک کریں.',
            'name' => 'یہ موجودہ ماڈیول کا <b> نام </ b> ہے. <br/> <br/> نام کو ارفانومیج ہونا لازمی ہے اور ایک خط کے ساتھ شروع ہونا چاہیے اور کوئی خالی جگہ نہیں ہے. (مثال: ایچ آر_مینجمنٹ)',
            'label' => 'یہ <b> لیبل </ b> ہے جو ماڈیول کے لئے نیوی گیشن ٹیب میں پیش کرے گا. ',
            'savebtn' => 'ماڈیول سے متعلق تمام درج کردہ ڈیٹا کو بچانے کیلئے <b> محفوظ کریں </ b> پر کلک کریں.',
            'type_basic' => '<b> بنیادی </ b> ٹیمپلیٹ کی قسم بنیادی شعبوں کو فراہم کرتی ہے، جیسے نام، تفویض کردہ ٹیم، تاریخ، تشکیل اور تفصیلات کے شعبوں.',
            'type_company' => '<b> کمپنی </ b> سانچے کی قسم تنظیم کے مخصوص شعبوں، جیسے کمپنی کا نام، انڈسٹری اور بلنگ کا پتہ فراہم کرتا ہے. <br/> <br/> معیاری اکاؤنٹس ماڈیول کی طرح ماڈیولز بنانے کے لئے اس سانچے کا استعمال کریں.',
            'type_issue' => '<b> مسئلہ </ b> سانچے کی قسم کیس اور حیثیت سے متعلق شعبوں جیسے نمبر، حیثیت، ترجیحات اور وضاحت فراہم کرتی ہے. <br/> <br/> معیاری اسی طرح کے ماڈیولز بنانے کیلئے اس سانچے کو استعمال کریں. مقدمات اور کیڑے ماڈیولز.',
            'type_person' => '<b> شخص </ b> سانچے کی قسم انفرادی مخصوص شعبوں، جیسے سلامتی، عنوان، نام، ایڈریس اور فون نمبر فراہم کرتا ہے. <br/> <br/> معیاری اسی طرح کے ماڈیولز بنانے کے لئے اس سانچے کا استعمال کریں. رابطوں اور موڈ ماڈیولز.',
            'type_sale' => '<b> فروخت </ b> ٹیمپلیٹ کی قسم موقع مخصوص شعبوں جیسے لیڈ ماخذ، مرحلے، رقم اور امکانات فراہم کرتی ہے. <br/> <br/> معیاری مواقع ماڈیول سے ملتے جلتے ماڈیولز بنانے کیلئے اس سانچے کا استعمال کریں.',
            'type_file' => '<b> فائل </ b> ٹیمپلیٹ دستاویز مخصوص شعبوں، جیسے فائل کا نام، دستاویز کی قسم، اور شائع شدہ تاریخ فراہم کرتا ہے. <br> <br> ماڈیولز بنانے کے لئے اس سانچے کو استعمال کریں جس میں معیاری دستاویزات ماڈیول کے برابر ہیں.',

        ),
        'dropdowns' => array(
            'default' => 'درخواست کے لئے سبھی <b> ڈراپ ڈاؤنس </ b> یہاں درج کیا جاتا ہے. <br> <br> ڈراپ ڈاؤنس کسی بھی ماڈیول میں ڈراپ ڈاؤن فیلڈز کے لئے استعمال کیا جا سکتا ہے. <br> <br> موجودہ ڈراپ ڈاؤن میں تبدیل کرنے کے لئے، ڈراپ ڈاؤن نام پر کلک کریں. <br> <br> نئی ڈراپ ڈاؤن بنانے کیلئے <b> ڈراپ ڈاؤن شامل کریں </ b> پر کلک کریں.',
            'editdropdown' => 'ڈراپ ڈاؤن فہرست کسی بھی ماڈیول میں معیاری یا اپنی مرضی کے ڈراپ ڈاؤن کے شعبوں کے لئے استعمال کیا جا سکتا ہے. <br> <br> ڈراپ ڈاؤن فہرست کیلئے <b> نام </ b> فراہم کریں. <br> <br> اگر کوئی زبان پیک انسٹال ہوجائے تو درخواست، آپ فہرست اشیاء کے لئے استعمال کرنے کیلئے <b> زبان </ b> منتخب کرسکتے ہیں. <br> <br> <b> آئٹم کا نام </ b> فیلڈ میں، ڈراپ ڈاؤن فہرست میں اختیار کے لئے ایک نام فراہم کریں.. یہ نام ڈراپ ڈاؤن فہرست میں موجود نہیں ہو گا جو صارفین کو نظر آتا ہے. <br> <br> <b> ڈسپلے لیبل </ b> میدان میں، ایک لیبل فراہم کریں جو صارفین کو نظر آئے گا. آئٹم کا نام اور ڈسپلے لیبل فراہم کرنے کے بعد، ڈراپ ڈاؤن فہرست میں آئٹم کو شامل کرنے کیلئے <b> شامل کریں </ b> پر کلک کریں. <br> <br> فہرست میں اشیاء کو دوبارہ ترتیب دینے کے لئے، اشیاء کو مطلوب عہدوں میں ڈریگ اور ڈراپیں. <br> <br> کسی آئٹم کے ڈسپلے لیبل میں ترمیم کرنے کے لئے، <b> ترمیم آئکن </ b> پر کلک کریں، اور ایک نیا لیبل درج کریں. ڈراپ ڈاؤن فہرست سے کسی آئٹم کو حذف کرنے کے لئے، <b> آئکن کو حذف کریں </ b> پر کلک کریں. <br> <br> ڈسپلے لیبل پر تبدیل کرنے کے لئے تبدیل کرنے کیلئے، <b> واپس نہ کریں </ b> پر کلک کریں. کسی تبدیلی کو دوبارہ رد کرنے کے لئے، <b> ریڈو </ b> پر کلک کریں. <br> <br> ڈراپ ڈاؤن فہرست کو بچانے کیلئے <b> محفوظ کریں </ b> پر کلک کریں.',

        ),
        'subPanelEditor' => array(
            'modify' => '<b> سبپنیل </ b> میں دکھایا جا سکتا ہے تمام شعبوں یہاں ظاہر ہوتے ہیں. <br> <br> <b> پہلے سے طے شدہ </ b> کالم میں سب فیلیل میں دکھائے گئے شعبوں پر مشتمل ہے. <br / > <br/> <b> پوشیدہ </ b> کالم میں ایسے فیلٹس شامل ہیں جنہیں ڈیفالٹ کالم میں شامل کیا جا سکتا ہے.'
        ,
            'savebtn' => 'تبدیلیوں کو بچانے کیلئے اور ماڈیول کے اندر اندر ان کو فعال بنانے کیلئے <b> محفوظ کریں اور تعین کریں </ b> پر کلک کریں.',
            'historyBtn' => 'تاریخ سے قبل محفوظ کردہ ترتیب کو دیکھنے اور بحال کرنے کیلئے <b> تاریخ دیکھیں </ b> پر کلک کریں.',
            'historyDefault' => 'اپنے اصل ترتیب میں نظر بحال کرنے کیلئے <b> پہلے سے طے شدہ بحال </ b> پر کلک کریں.',
            'Hidden' => '<b> پوشیدہ </ b> فیلڈ سبپنیل میں نہیں ہوتے ہیں.',
            'Default' => '<b> پہلے سے طے شدہ </ b> فیلڈ سبپنیل میں ظاہر ہوتے ہیں.',

        ),
        'listViewEditor' => array(
            'modify' => '<b>فہرست دیکھیں </ b> میں دکھایا جا سکتا ہے تمام شعبوں یہاں ظاہر ہوتے ہیں. <br> <br> <b> پہلے سے طے شدہ </ b> کالم میں فہرستیں جو ڈیفالٹ کی طرف سے ڈیفالٹ میں دکھائے گئے ہیں. < br /> <br/> <b> دستیاب </ b> کالم میں وہ کھیتوں پر مشتمل ہے جو صارف اپنی مرضی کے مطابق فہرستView تخلیق کرنے کے لئے تلاش میں منتخب کرسکتا ہے. <br/> <br/> <b> پوشیدہ </ b> کالم میں فیلڈز شامل ہیں جو ڈیفالٹ یا دستیاب کالم میں شامل کیا جا سکتا ہے.'
        ,
            'savebtn' => 'تبدیلیوں کو بچانے کیلئے اور ماڈیول کے اندر اندر ان کو فعال بنانے کیلئے <b> محفوظ کریں اور تعین کریں </ b> پر کلک کریں.',
            'historyBtn' => '<b> دیکھیں تاریخ </ b> کے اندر <b> دوبارہ بحال </ b> میدان کی جگہ کو بحال کرنے کے لئے <b> بحال </ b> تاریخ سے پہلے محفوظ کردہ ترتیب کو دیکھنے اور بحال کرنے کیلئے <b> تاریخ دیکھیں </ b> پر کلک کریں. پہلے محفوظ کردہ ترتیب کے اندر. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'historyDefault' => 'اپنے اصل ترتیب میں ایک نظر بحال کرنے کیلئے <b> ڈیفالٹ بحال کریں </ b> پر کلک کریں. <br> <br> <b> ڈیفالٹ دوبارہ بحال کریں </ b> صرف اصل ترتیب کے اندر میدان کی جگہ کو بحال کرتا ہے. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'Hidden' => '<b> پوشیدہ </ b> فیلڈز فی الحال فہرست فہرستز میں دیکھنے کے لئے دستیاب نہیں ہیں.',
            'Available' => '<b> دستیاب </ b> فیلڈ ڈیفالٹ کے ذریعہ نہیں دکھائے گئے ہیں، لیکن صارفین کی فہرست فہرست میں شامل کیا جا سکتا ہے.',
            'Default' => 'فہرست دیکھیں میں <b> پہلے سے طے شدہ </ b> شعبوں کو ظاہر ہوتا ہے جو صارفین کے ذریعہ اپنی مرضی کے مطابق نہیں ہیں.'
        ),
        'popupListViewEditor' => array(
            'modify' => '<b>فہرست دیکھیں</ b> میں دکھایا جا سکتا ہے تمام شعبوں یہاں ظاہر ہوتے ہیں. <br> <br> <b> پہلے سے طے شدہ </ b> کالم میں فہرستیں جو ڈیفالٹ کی طرف سے ڈیفالٹ میں دکھائے گئے ہیں. < br /> <br/> <b> پوشیدہ </ b> کالم میں ایسے فیلٹس شامل ہیں جنہیں پہلے سے طے شدہ یا دستیاب کالم میں شامل کیا جا سکتا ہے.'
        ,
            'savebtn' => 'تبدیلیوں کو بچانے کیلئے اور ماڈیول کے اندر اندر ان کو فعال بنانے کیلئے <b> محفوظ کریں اور تعین کریں </ b> پر کلک کریں.',
            'historyBtn' => '<b> دیکھیں تاریخ </ b> کے اندر <b> دوبارہ بحال </ b> میدان کی جگہ کو بحال کرنے کے لئے <b> بحال </ b> تاریخ سے پہلے محفوظ کردہ ترتیب کو دیکھنے اور بحال کرنے کیلئے <b> تاریخ دیکھیں </ b> پر کلک کریں. پہلے محفوظ کردہ ترتیب کے اندر. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'historyDefault' => 'اپنے اصل ترتیب میں ایک نظر بحال کرنے کیلئے <b> ڈیفالٹ بحال کریں </ b> پر کلک کریں. <br> <br> <b> ڈیفالٹ دوبارہ بحال کریں </ b> صرف اصل ترتیب کے اندر میدان کی جگہ کو بحال کرتا ہے. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'Hidden' => '<b> پوشیدہ </ b> فیلڈز فی الحال فہرست فہرستز میں دیکھنے کے لئے دستیاب نہیں ہیں.',
            'Default' => 'فہرست دیکھیں میں <b> پہلے سے طے شدہ </ b> شعبوں کو ظاہر ہوتا ہے جو صارفین کے ذریعہ اپنی مرضی کے مطابق نہیں ہیں.'
        ),
        'searchViewEditor' => array(
            'modify' => '<b> فلٹر </ b> فارم میں دکھایا جا سکتا ہے تمام کھیتوں یہاں ظاہر ہوتے ہیں. <br> <br> <b> پہلے سے طے شدہ </ b> کالم میں اس فیلٹس پر مشتمل ہے جو تلاش فارم میں دکھائے جائیں گے. <br/> <br/> <b> پوشیدہ </ b> کے کالم میں تلاش کے فارم میں شامل کرنے کیلئے آپ کے منتظم کے طور پر آپ کے لئے دستیاب فیلڈز شامل ہیں.'
        ,
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
            'Hidden' => '<b>Hidden</b> fields do not appear in the Search.',
            'historyBtn' => '<b> دیکھیں تاریخ </ b> کے اندر <b> دوبارہ بحال </ b> میدان کی جگہ کو بحال کرنے کے لئے <b> بحال </ b> تاریخ سے پہلے محفوظ کردہ ترتیب کو دیکھنے اور بحال کرنے کیلئے <b> تاریخ دیکھیں </ b> پر کلک کریں. پہلے محفوظ کردہ ترتیب کے اندر. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'historyDefault' => 'اپنے اصل ترتیب میں ایک نظر بحال کرنے کیلئے <b> ڈیفالٹ بحال کریں </ b> پر کلک کریں. <br> <br> <b> ڈیفالٹ دوبارہ بحال کریں </ b> صرف اصل ترتیب کے اندر میدان کی جگہ کو بحال کرتا ہے. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'Default' => '<b>Default</b> fields appear in the Search.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
            'defaultquickcreate' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
            //this default will be used for edit view
            'default' => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.',
            'saveBtn' => 'Click <b>Save</b> to preserve the changes you made to the layout since the last time you saved it.<br><br>The changes will not be displayed in the module until you Deploy the saved changes.',
            'historyBtn' => '<b> دیکھیں تاریخ </ b> کے اندر <b> دوبارہ بحال </ b> میدان کی جگہ کو بحال کرنے کے لئے <b> بحال </ b> تاریخ سے پہلے محفوظ کردہ ترتیب کو دیکھنے اور بحال کرنے کیلئے <b> تاریخ دیکھیں </ b> پر کلک کریں. پہلے محفوظ کردہ ترتیب کے اندر. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'historyDefault' => 'اپنے اصل ترتیب میں ایک نظر بحال کرنے کیلئے <b> ڈیفالٹ بحال کریں </ b> پر کلک کریں. <br> <br> <b> ڈیفالٹ دوبارہ بحال کریں </ b> صرف اصل ترتیب کے اندر میدان کی جگہ کو بحال کرتا ہے. میدان لیبل کو تبدیل کرنے کے لئے، ہر فیلڈ کے آگے ترمیم آئکن پر کلک کریں.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes you made to the layout since the last time you saved it, and to make the changes active in the module.<br><br>The layout will immediately be displayed in the module.',
            'toolbox' => 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
            'panels' => 'The <b>Layout</b> area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br/><br/>You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/><br/>Remove elements by dragging and dropping them in the <b>Recycle Bin</b> in the Toolbox, or add new elements and fields by dragging them from the <b>Toolbox</b>s and dropping them in the desired location in the layout.',
            'delete' => 'Drag and drop any element here to remove it from the layout',
            'property' => 'Edit The label displayed for this field. <br/><b>Tab Order</b> controls in what order the tab key switches between fields.',
        ),
        'fieldsEditor' => array(
            'default' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
            'mbDefault' => 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>To configure the properties for a field, click the Field Name.<br><br>To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br><br>After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
            'addField' => 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field. The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts. The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field. Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
            'editField' => 'The properties of this field can be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.',
            'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Export customizations made in Studio by creating packages that can be uploaded into another SuiteCRM instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>. You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'This is the <b>Name</b> of the package. This name will be displayed during installation.',
            'author' => 'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
            'description' => 'یہ<b> معلومات</b>پیکیج کی انسٹالیشن میں دکھائی جائے گی.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize deployed modules.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'sugarPortalBtn' => 'Use <b>SuiteCRM Portal Editor</b> to manage and customize the SuiteCRM Portal.',
            'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
            'appBtn' => 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
            'backBtn' => 'Return to the previous step.',
            'studioHelp' => 'Use <b>Studio</b> to determine what and how information is displayed in the modules.',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'The components that you can customize for the module appear here.<br><br>Click an icon to select the component to edit.<br><br>Click <b>Reset Module</b> to remove customizations and restore to original status.',
            'fieldsBtn' => 'Create and customize <b>Fields</b> to store information in the module.',
            'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields and other titles in the module.',
            'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.',
            'layoutsBtn' => 'Customize the module <b>Layouts</b>. The layouts are the different views of the module containing fields.<br><br>You can determine which fields appear and how they are organized in each layout.',
            'subpanelBtn' => 'Determine which fields appear in the <b>Subpanels</b> in the module.',
            'portalBtn' => 'Customize the module <b>Layouts</b> that appear in the <b>SuiteCRM Portal</b>.',
            'layoutsHelp' => 'The module <b>Layouts</b> that can be customized appear here.<br><br>The layouts display fields and field data.<br><br>Click an icon to select the layout to edit.',
            'subpanelHelp' => 'The <b>Subpanels</b> in the module that can be customized appear here.<br><br>Click an icon to select the module to edit.',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create and download a package containing customizations made in Studio for specific modules.',
            'mbHelp' => 'Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects.',
            'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
            'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
            'viewBtnDashlet' => 'Customize the module\'s <b>SuiteCRM Dashlet</b>, including the SuiteCRM Dashlet\'s ListView and Search.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
            'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
            'viewBtnQuickCreate' => 'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',
            'addLayoutHelp' => "To create a custom layout for a Security Group select the appropriate Security Group and the layout from which to copy from as a starting point.",
            'searchHelp' => 'The <b>Search</b> forms that can be customized appear here.<br><br>Search forms contain fields for filtering records.<br><br>Click an icon to select the search layout to edit.',
            'dashletHelp' => 'The <b>SuiteCRM Dashlet</b> layouts that can be customized appear here.<br><br>The SuiteCRM Dashlet will be available to add to the pages in the Home module.',
            'DashletListViewBtn' => 'The <b>SuiteCRM Dashlet ListView</b> displays records based on the SuiteCRM Dashlet search filters.',
            'DashletSearchViewBtn' => 'The <b>SuiteCRM Dashlet Search</b> filters records for the SuiteCRM Dashlet listview.',
            'popupHelp' => 'The <b>Popup</b> layouts that can be customized appear here.<br>',
            'PopupListViewBtn' => 'The <b>Popup ListView</b> displays records based on the Popup search views.',
            'PopupSearchViewBtn' => 'The <b>Popup Search</b> views records for the Popup listview.',
            'BasicSearchBtn' => 'Customize the <b>Quick Filter</b> form that appears in the Quick Filter tab in the Search area for the module.',
            'AdvancedSearchBtn' => 'Customize the <b>Advanced Filter</b> form that appears in the Advanced Search tab in the Search area for the module.',
            'portalHelp' => 'Manage and customize the <b>SuiteCRM Portal</b>.',
            'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the SuiteCRM Portal.',
            'SPSync' => '<b>Sync</b> customizations to the SuiteCRM Portal instance.',
            'Layouts' => 'Customize the <b>Layouts</b> of the SuiteCRM Portal modules.',
            'portalLayoutHelp' => 'The modules within the SuiteCRM Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
            'relationshipsHelp' => 'All of the <b>Relationships</b> that exist between the module and other deployed modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. For example, all of the properties of the relationships for which the Accounts module is the primary module are stored in the Accounts database tables.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.<br><br>Relationships can be created between any two deployed modules.',
            'relationshipHelp' => '<b>Relationships</b> can be created between the module and another deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
            'convertLeadHelp' => 'Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>
		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>',


            'editDropDownBtn' => 'Edit a global Dropdown',
            'addDropDownBtn' => 'Add a new global Dropdown',
        ),
        'fieldsHelp' => array(
            'default' => 'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
            'addrelbtn' => 'mouse over help for add relationship...',
            'addRelationship' => '<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        ),
        'labelsHelp' => array(
            'default' => 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
            'saveBtn' => 'Click <b>Save</b> to save all changes.',
            'publishBtn' => 'Click <b>Save & Deploy</b> to save all changes and make them active.',
        ),
        'portalSync' => array(
            'default' => 'Enter the <b>SuiteCRM Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid SuiteCRM user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the SuiteCRM Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
        ),
        'portalStyle' => array(
            'default' => 'You can customize the look of the SuiteCRM Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the SuiteCRM Portal the next time a sync is performed.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'To get started on a project, click <b>New Package</b> to create a new package to house your custom module(s). <br/><br/>Each package can contain one or more modules.<br/><br/>For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
            'somepackages' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br><br>When the project is complete, you can <b>Deploy</b> the package to install the custom modules within the application.',
            'afterSave' => 'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your SuiteCRM instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your SuiteCRM instance. <br/><br/>You can distribute the file to other users to upload and install within their own SuiteCRM instances.',
            'create' => 'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
        ),
        'main' => array(
            'welcome' => 'Use the <b>Developer Tools</b> to create and manage standard and custom modules and fields. <br/><br/>To manage modules in the application, click <b>Studio</b>. <br/><br/>To create custom modules, click <b>Module Builder</b>.',
            'studioWelcome' => 'All of the currently installed modules, including standard and module-loaded objects, are customizable within Studio.'
        ),
        'module' => array(
            'somemodules' => "Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your SuiteCRM instance or <b>Publish</b> the package to be installed in the current SuiteCRM instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your SuiteCRM instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current SuiteCRM instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further. Then re-publish or re-deploy the package to apply the changes.",
            'editView' => 'Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
            'create' => 'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address. Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number. Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description. Use this template to create modules that are similar to the standard Cases and Bugs modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
            'afterSave' => 'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>. You can further customize the new module.',
            'viewfields' => 'The fields in the module can be customized to suit your needs.<br/><br/>You cannot delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can quickly create new fields that have similar properties to existing fields by clicking <b>Clone</b> in the <b>Properties</b> form. Enter any new properties, and then click <b>Save</b>.<br/><br/>It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
            'viewrelationships' => 'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
            'viewlayouts' => 'You can control what fields are available for capturing data within the <b>Edit View</b>. You can also control what data displays within the <b>Detail View</b>. The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
            'existingModule' => 'After creating and customizing this module, you can create additional modules or return to the package to <b>Publish</b> or <b>Deploy</b> the package.<br><br>To create additional modules, click <b>Duplicate</b> to create a module with the same properties as the current module, or navigate back to the package, and click <b>New Module</b>.<br><br> If you are ready to <b>Publish</b> or <b>Deploy</b> the package containing this module, navigate back to the package to perform these functions. You can publish and deploy packages containing at least one module.',
            'labels' => 'The labels of the standard fields as well as custom fields can be changed. Changing field labels will not affect the data stored in the fields.',
        ),
        'listViewEditor' => array(
            'modify' => 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
            'savebtn' => 'Clicking <b>Save</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that are not currently available to users for use in list views.',
            'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
            'Default' => 'Default fields are displayed to users who have not created custom list view settings.'
        ),

        'searchViewEditor' => array(
            'modify' => 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
            'savebtn' => 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
            'Hidden' => 'Hidden fields are fields that will not be shown in the search view.',
            'Default' => 'Default fields will be shown in the search view.'
        ),
        'layoutEditor' => array(
            'default' => 'دو کالم بائیں طرف پیش کئے گئے ہیں. دائیں ہاتھ کا کالم، موجودہ لے آؤٹ یا لے آؤٹ پیش نظارہ لیبل کیا جاتا ہے، جہاں آپ ماڈیول ترتیب کو تبدیل کرتے ہیں. ترتیب میں ترمیم کرتے ہوئے، بائیں ہاتھ کا کالم، مستحق ٹول باکس میں مفید عناصر اور آلات شامل ہیں. <br/> <br/> اگر لے آؤٹ کا علاقہ موجودہ لے آؤٹ کا عنوان ہے تو آپ فی الحال اس ڈسپلے کے ایک نقل پر کام کر رہے ہیں جو فی الحال نمائش کے لئے ماڈیول کے ذریعہ استعمال کیا جاتا ہے. <br/> <br/> اگر یہ لے آؤٹ پیش نظارہ کا عنوان ہے تو بچاؤ کے بٹن پر ایک کلک کی طرف سے تخلیق کردہ ایک کاپی پر کام کر رہے ہیں، جو شاید اس ماڈیول کے صارفین کے ذریعہ دیکھا جا سکتا ہے.',
            'saveBtn' => 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
            'publishBtn' => 'ترتیب کو تعین کرنے کیلئے اس بٹن پر کلک کریں. اس کا مطلب ہے کہ اس ترتیب کو فوری طور پر اس ماڈیول کے صارفین کی طرف سے دیکھا جائے گا.',
            'toolbox' => 'ٹول باکس میں ترمیم کرنے کیلئے ٹول باکس میں ترمیم کیلئے ایک مختلف قسم کے مفید خصوصیات شامل ہیں، بشمول ٹریش علاقے، اضافی عناصر کا سیٹ اور دستیاب شعبوں کا ایک سیٹ شامل ہے. ان میں سے کسی کو ڈریگ اور لے آؤٹ میں لے جایا جا سکتا ہے.',
            'panels' => 'اس علاقے سے پتہ چلتا ہے کہ جب آپ کو اس ماڈیول کے صارفین کو نظر انداز کیا جاسکتا ہے تو یہ خراب ہوسکتا ہے. <br/> <br/> آپ کو کھینچنے اور انہیں چھوڑ کر عناصر جیسے فیلڈز، صفوں اور پینلوں کی حیثیت سے تبدیل کر سکتے ہیں. ٹول باکس کو ٹول باکس میں ٹریگ علاقے میں گھسیٹنے اور گرنے اور عناصر کو ان باکس باکس سے گھسیٹنے اور مطلوبہ پوزیشن میں لے جانے کے لۓ انہیں چھوڑ کر عناصر کو خارج کر دیں.'
        ),
        'dropdownEditor' => array(
            'default' => 'دو کالم بائیں طرف پیش کئے گئے ہیں. دائیں ہاتھ کا کالم، موجودہ لے آؤٹ یا لے آؤٹ پیش نظارہ لیبل کیا جاتا ہے، جہاں آپ ماڈیول ترتیب کو تبدیل کرتے ہیں. ترتیب میں ترمیم کرتے ہوئے، بائیں ہاتھ کا کالم، مستحق ٹول باکس میں مفید عناصر اور آلات شامل ہیں. <br/> <br/> اگر لے آؤٹ کا علاقہ موجودہ لے آؤٹ کا عنوان ہے تو آپ فی الحال اس ڈسپلے کے ایک نقل پر کام کر رہے ہیں جو فی الحال نمائش کے لئے ماڈیول کے ذریعہ استعمال کیا جاتا ہے. <br/> <br/> اگر یہ لے آؤٹ پیش نظارہ کا عنوان ہے تو بچاؤ کے بٹن پر ایک کلک کی طرف سے تخلیق کردہ ایک کاپی پر کام کر رہے ہیں، جو شاید اس ماڈیول کے صارفین کے ذریعہ دیکھا جا سکتا ہے.',
            'dropdownaddbtn' => 'اس بٹن کو کلک کرنے کے لئے ڈراپ ڈاؤن میں نیا آئٹم شامل ہے.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'اس مثال کے اندر سٹوڈیو میں بنا کردہ حسب ضرورت کسی بھی مثال میں پیک اور تعیناتی کی جا سکتی ہیں. <br> <br> <b> پیکیج کا نام </ b> فراہم کریں. آپ پیکیج کے لئے <b> مصنف </ b> اور <b> تفصیلات </ b> معلومات فراہم کرسکتے ہیں. <br> <br> ماڈیول (ے) کو منتخب کریں جو برآمد کرنے کیلئے اپنی مرضی کے مطابق ہیں. (صرف ماڈیول آپ کے لئے منتخب کرنے کے لئے ظاہر ہو جائے گا.) <br> <br> <b> ایکسپورٹ </ b> پر کلک کریں .zip فائل کو تخلیق کرنے کیلئے پیکیج میں حسب ضرورت شامل ہیں. .zip فائل <b> ماڈیول لوڈر </ b> کے ذریعہ ایک اور مثال میں اپ لوڈ کی جا سکتی ہے.',
            'exportCustomBtn' => 'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
            'name' => 'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'author' => 'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
            'description' => 'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
            'studioBtn' => 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
            'mbBtn' => 'Use <b>Module Builder</b> to create new modules.',
            'appBtn' => 'پروگرام کے مختلف خصوصیات کو اپنی مرضی کے مطابق کرنے کے لئے ایپلی کیشن کا استعمال کریں، جیسے ہوم پیج پر کتنے ٹی پی کی رپورٹ دکھائی جاتی ہیں',
            'backBtn' => 'Return to the previous step.',
            'studioHelp' => 'Use <b>Studio</b> to customize installed modules.',
            'moduleBtn' => 'Click to edit this module.',
            'moduleHelp' => 'Select the module component that you would like to edit',
            'fieldsBtn' => 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
            'labelsBtn' => 'Click <b>Save</b> to save your custom labels.',
            'layoutsBtn' => 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
            'subpanelBtn' => 'Edit what information is shown in this modules subpanels.',
            'layoutsHelp' => '<b> ترمیم کرنے کیلئے لے آؤٹ </ b> منتخب کریں. <br/> <br/> ڈیٹا میں داخل ہونے کیلئے ڈیٹا کے شعبوں میں ترتیب کو تبدیل کرنے کیلئے، <b> دیکھیں ترمیم </ b> پر کلک کریں. <br/> <br /> ترمیم دیکھیں میں درج کردہ اعداد و شمار کو ظاہر کرنے کے لۓ ترتیب کو تبدیل کرنے کیلئے، <b> تفصیل دیکھیں </ b> پر کلک کریں. <br/> <br/> پہلے سے طے شدہ فہرست میں شامل کالمز کو تبدیل کرنے کے لئے، کلک کریں <b> فہرست دیکھیں </ b>. <br/> <br/> بنیادی اور اعلی درجے کی تلاش فارم ترتیبات کو تبدیل کرنے کے لئے، <b> تلاش </ b> پر کلک کریں.',
            'subpanelHelp' => 'Select a <b>Subpanel</b> to edit.',
            'searchHelp' => 'Select a <b>Search</b> layout to edit.',
            'newPackage' => 'Click <b>New Package</b> to create a new package.',
            'mbHelp' => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
            'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'ڈراپ ڈاؤن ایڈیٹر',

//STUDIO2
    'LBL_MODULEBUILDER' => 'ماڈل بنانے والا',
    'LBL_STUDIO' => 'وہ جگہ جہاں سے ٹی وی اور ریڈیو کے پروگرام نشر ھوتے ہیں',
    'LBL_DROPDOWNEDITOR' => 'ڈراپ ڈاؤن ایڈیٹر',
    'LBL_DEVELOPER_TOOLS' => 'ڈویلپر ٹولز',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Editor',
    'LBL_PACKAGE_LIST' => 'Package List',
    'LBL_HOME' => 'شروع',
    'LBL_NONE' => '-None-',
    'LBL_DEPLOYE_COMPLETE' => 'Deploy complete',
    'LBL_DEPLOY_FAILED' => 'An error has occurred during deploy process, your package may not have installed correctly',
    'LBL_AVAILABLE_SUBPANELS' => 'Available Subpanels',
    'LBL_ADVANCED' => 'جدید',
    'LBL_ADVANCED_SEARCH' => 'اعلی درجے کی فلٹر',
    'LBL_BASIC' => 'ابتدائی',
    'LBL_BASIC_SEARCH' => 'فوری فلٹر',
    'LBL_CURRENT_LAYOUT' => 'Layout',
    'LBL_CURRENCY' => 'کرنسی',
    'LBL_DASHLET' => 'SuiteCRM Dashlet',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Dashlet ListView',
    'LBL_POPUP' => 'Popup View',
    'LBL_POPUPLISTVIEW' => 'Popup ListView',
    'LBL_POPUPSEARCH' => 'Popup Search',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Dashlet Search',
    'LBL_DETAILVIEW' => 'تفصیلی منظر دیکھنا',
    'LBL_DROP_HERE' => '[یہاں رکھیں]',
    'LBL_EDIT' => 'ردوبدل',
    'LBL_EDIT_LAYOUT' => 'لے آؤٹ میں ترمیم کریں',
    'LBL_EDIT_FIELDS' => 'Edit Fields',
    'LBL_EDITVIEW' => 'منظر تبدیل کریں',
    'LBL_FILLER' => '(filler)',
    'LBL_FIELDS' => 'فیلڈز',
    'LBL_FAILED_TO_SAVE' => 'Failed To Save',
    'LBL_FAILED_PUBLISHED' => 'Failed to Publish',
    'LBL_HOMEPAGE_PREFIX' => 'My',
    'LBL_LAYOUT_PREVIEW' => 'Layout Preview',
    'LBL_LAYOUTS' => 'لے آوٹ',
    'LBL_LISTVIEW' => 'فہرست کو دیکھنا',
    'LBL_MODULES' => 'ماڈیولز',
    'LBL_MODULE_TITLE' => 'وہ جگہ جہاں سے ٹی وی اور ریڈیو کے پروگرام نشر ھوتے ہیں',
    'LBL_NEW_PACKAGE' => 'New Package',
    'LBL_NEW_PANEL' => 'New Panel',
    'LBL_NEW_ROW' => 'New Row',
    'LBL_PACKAGE_DELETED' => 'Package Deleted',
    'LBL_PUBLISHING' => 'Publishing...',
    'LBL_PUBLISHED' => 'اشاعت',
    'LBL_SELECT_FILE' => 'Select File',
    'LBL_SUBPANELS' => 'Subpanels',
    'LBL_SUBPANEL' => 'Subpanel',
    'LBL_SUBPANEL_TITLE' => 'عنوان: ',
    'LBL_SEARCH_FORMS' => 'فلٹر',
    'LBL_SEARCH' => 'تلاش کریں',
    'LBL_SEARCH_BUTTON' => 'تلاش کریں',
    'LBL_FILTER' => 'فلٹر',
    'LBL_TOOLBOX' => 'Toolbox',
    'LBL_QUICKCREATE' => 'جلدی سے بنانا',
    'LBL_EDIT_DROPDOWNS' => 'Edit a Global Dropdown',
    'LBL_ADD_DROPDOWN' => 'Add a new Global Dropdown',
    'LBL_BLANK' => '-blank-',
    'LBL_TAB_ORDER' => 'Tab Order',
    'LBL_TABDEF_TYPE' => 'Display Type',
    'LBL_TABDEF_TYPE_HELP' => 'منتخب کریں کہ یہ سیکشن کیسے دکھایا جائے. اگر آپ اس نقطہ نظر پر ٹیبز کو فعال کرتے ہیں تو یہ اختیار صرف اس پر اثر انداز ہوتا ہے.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'ترتیب کے نقطہ نظر کے اندر اس پینل کو ظاہر کرنے کے لئے پینل کو منتخب کریں. اس پینل کو ترتیب دینے کے اندر اندر ایک الگ ٹیب کے اندر اندر ظاہر کرنے کے لئے ٹیب کا انتخاب کریں. جب ٹیب ایک پینل کے لئے مخصوص کیا جاتا ہے تو، پینل کے طور پر ظاہر کرنے کے لئے مقرر ہونے والے بعد والے پینل ٹیب کے اندر ظاہر کئے جائیں <br/> اگلے پینل کیلئے ٹیب کا آغاز کیا جائے گا جس کیلئے ٹیب منتخب کیا جاتا ہے. اگر ٹیب پہلے پینل کے نیچے ایک پینل کے لئے منتخب کیا جاتا ہے تو، پہلا پینل ضرور ٹیب ہوگا.',
    'LBL_TABDEF_COLLAPSE' => 'Collapse',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
    'LBL_DROPDOWN_TITLE_NAME' => 'نام',
    'LBL_DROPDOWN_LANGUAGE' => 'زبان',
    'LBL_DROPDOWN_ITEMS' => 'List Items',
    'LBL_DROPDOWN_ITEM_NAME' => 'Item Name',
    'LBL_DROPDOWN_ITEM_LABEL' => 'نقشہ دیکھیں',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sync to Detail View',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br>will be sync\'d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView. <br>Layout changes will not be able to be made in the DetailView.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'یہ DetailView اسی ترمیم کے ساتھ مطابقت رکھتا ہے. <br> اس تفصیل میں فیلڈز اور فیلڈ کی جگہ کا تعین ترمیم میں شعبوں اور فیلڈ کی جگہوں کی عکاسی کرتا ہے. <br> DetailView میں تبدیلیاں اس صفحہ کے اندر محفوظ یا تعیناتی نہیں ہوسکتی ہیں. ترمیم میں تبدیلیوں کو ترتیب دیں یا لے آؤٹ غیر مطابقت پذیری بنائیں',
    'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
    'LBL_DROPDOWN_BLANK_WARNING' => 'آئٹم کا نام اور ڈسپلے لیبل دونوں کے لئے قیمت ضروری ہے. خالی شے شامل کرنے کے لئے، آئٹم کا نام اور ڈسپلے لیبل کے لۓ کسی بھی قدر میں داخل ہونے کے بغیر شامل کریں پر کلک کریں.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'کی فہرست میں پہلے ہی موجود ہے',
    'LBL_NO_SAVE_ACTION' => 'اس قول کے لئے محفوظ کارروائی نہیں مل سکی.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'سٹوڈیو 2: قائم مقام: خرابی سے متعلق دستاویز',


//RELATIONSHIPS
    'LBL_MODULE' => 'ماڈیول',
    'LBL_LHS_MODULE' => 'Primary Module',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relationship created in Studio',
    'LBL_RELATIONSHIPS' => 'Relationships',
    'LBL_RELATIONSHIP_EDIT' => 'Edit Relationship',
    'LBL_REL_NAME' => 'نام',
    'LBL_REL_LABEL' => 'عنوان',
    'LBL_REL_TYPE' => 'قسم',
    'LBL_RHS_MODULE' => 'Related Module',
    'LBL_NO_RELS' => 'No Relationships',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Optional Condition',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Column',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'قیمت',
    'LBL_SUBPANEL_FROM' => 'Subpanel from',
    'LBL_RELATIONSHIP_ONLY' => 'No visible elements will be created for this relationship as there is a pre-existing visible relationship between these two modules.',
    'LBL_ONETOONE' => 'One to One',
    'LBL_ONETOMANY' => 'One to Many',
    'LBL_MANYTOONE' => 'Many to One',
    'LBL_MANYTOMANY' => 'Many to Many',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Select a module to edit.',
    'LBL_QUESTION_LAYOUT' => 'Select a layout to edit.',
    'LBL_QUESTION_SUBPANEL' => 'Select a subpanel to edit.',
    'LBL_QUESTION_SEARCH' => 'Select a filter layout to edit.',
    'LBL_QUESTION_MODULE' => 'Select a module component to edit.',
    'LBL_QUESTION_PACKAGE' => 'Select a package to edit, or create a new package.',
    'LBL_QUESTION_EDITOR' => 'Select a tool.',
    'LBL_QUESTION_DASHLET' => 'Select a dashlet layout to edit.',
    'LBL_QUESTION_POPUP' => 'Select a popup layout to edit.',
//CUSTOM FIELDS
    'LBL_NAME' => 'نام',
    'LBL_LABELS' => 'Labels',
    'LBL_MASS_UPDATE' => 'بڑے پیمانے پر تازہ کاری',
    'LBL_DEFAULT_VALUE' => 'کوتاہي قیمت',
    'LBL_REQUIRED' => 'ضرورت یا طالب',
    'LBL_DATA_TYPE' => 'قسم',
    'LBL_HCUSTOM' => 'CUSTOM',
    'LBL_HDEFAULT' => 'DEFAULT',
    'LBL_LANGUAGE' => 'زبان:',
    'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Edit Labels',
    'LBL_SECTION_PACKAGES' => 'Packages',
    'LBL_SECTION_PACKAGE' => 'Package',
    'LBL_SECTION_MODULES' => 'ماڈیولز',
    'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
    'LBL_SECTION_PROPERTIES' => 'Properties',
    'LBL_SECTION_DROPDOWNED' => 'Edit Dropdown',
    'LBL_SECTION_HELP' => 'مدد',
    'LBL_SECTION_MAIN' => 'Main',
    'LBL_SECTION_FIELDEDITOR' => 'Edit Field',
    'LBL_SECTION_DEPLOY' => 'Deploy',
    'LBL_SECTION_MODULE' => 'ماڈیول',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'طے شدہ',
    'LBL_HIDDEN' => 'چھپا ہوا',
    'LBL_AVAILABLE' => 'دستیاب',
    'LBL_LISTVIEW_DESCRIPTION' => 'ذیل میں دکھایا گیا تین کالم ہیں. <b> پہلے سے طے شدہ </ b> کالم میں ایسے کھیتوں پر مشتمل ہے جو ڈیفالٹ کی طرف سے فہرست کے نقطہ نظر میں پیش کئے جاتے ہیں. <b> اضافی </ b> کالم میں ایسے شعبوں پر مشتمل ہے جو صارف اپنی مرضی کے نقطہ نظر کو تخلیق کرنے کے لئے استعمال کرسکتا ہے. <b> دستیاب </ b> کالم صارف کے ذریعہ استعمال کے لئے پہلے سے طے شدہ یا اضافی کالمز کو شامل کرنے کے لئے آپ کے منتظمین کے طور پر آپ کے لئے دستیاب فیلڈز دکھاتا ہے.',
    'LBL_LISTVIEW_EDIT' => 'List View Editor',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Preview',
    'LBL_MB_RESTORE' => 'دوبارہ بحال کریں',
    'LBL_MB_DELETE' => 'ختم کریں',
    'LBL_MB_DEFAULT_LAYOUT' => 'Default Layout',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'شامل کریں',
    'LBL_BTN_SAVE' => 'محفوظ کریں',
    'LBL_BTN_SAVE_CHANGES' => 'Save Changes',
    'LBL_BTN_DONT_SAVE' => 'Discard Changes',
    'LBL_BTN_CANCEL' => 'منسوخ کریں',
    'LBL_BTN_CLOSE' => 'بند کریں',
    'LBL_BTN_SAVEPUBLISH' => 'Save & Deploy',
    'LBL_BTN_CLONE' => 'Clone',
    'LBL_BTN_ADDROWS' => 'Add Rows',
    'LBL_BTN_ADDFIELD' => 'فیلڈ شامل کریں',
    'LBL_BTN_ADDDROPDOWN' => 'Add Dropdown',
    'LBL_BTN_SORT_ASCENDING' => 'Sort Ascending',
    'LBL_BTN_SORT_DESCENDING' => 'Sort Descending',
    'LBL_BTN_EDLABELS' => 'Edit Labels',
    'LBL_BTN_UNDO' => 'Undo',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Add Custom Field',
    'LBL_BTN_EXPORT' => 'Export Customizations',
    'LBL_BTN_DUPLICATE' => 'بالکل کسی اور کی طرح',
    'LBL_BTN_PUBLISH' => 'شائع کریں',
    'LBL_BTN_DEPLOY' => 'Deploy',
    'LBL_BTN_EXP' => 'برآمد کریں',
    'LBL_BTN_DELETE' => 'ختم کریں',
    'LBL_BTN_VIEW_LAYOUTS' => 'View Layouts',
    'LBL_BTN_VIEW_FIELDS' => 'دیکھیں فیلڈز',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'تعلق کو دیکھنا',
    'LBL_BTN_ADD_RELATIONSHIP' => 'تعلقات شامل کریں',
    'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Error: Field Already Exists',
    'ERROR_INVALID_KEY_VALUE' => "Error: Invalid Key Value: [']",
    'ERROR_NO_HISTORY' => 'No history files found',
    'ERROR_MINIMUM_FIELDS' => 'The layout must contain at least one field',
    'ERROR_GENERIC_TITLE' => 'ایک خرابی آگئی ہے',
    'ERROR_REQUIRED_FIELDS' => 'Are you sure you wish to continue? The following required fields are missing from the layout:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Package Name:',
    'LBL_MODULE_NAME' => 'Module Name:',
    'LBL_AUTHOR' => 'Author:',
    'LBL_DESCRIPTION' => 'تفصیل:',
    'LBL_KEY' => 'کلید:',
    'LBL_ADD_README' => ' Readme',
    'LBL_LAST_MODIFIED' => 'Last Modified:',
    'LBL_NEW_MODULE' => 'New Module',
    'LBL_LABEL' => 'Label:',
    'LBL_LABEL_TITLE' => 'عنوان',
    'LBL_WIDTH' => 'عرض',
    'LBL_PACKAGE' => 'Package:',
    'LBL_TYPE' => 'قسم:',
    'LBL_NAV_TAB' => 'Navigation Tab',
    'LBL_CREATE' => 'بنانا',
    'LBL_LIST' => 'فہرست',
    'LBL_VIEW' => 'دیکھیں',
    'LBL_HISTORY' => 'تاریخ دیکھیں',
    'LBL_RESTORE_DEFAULT' => 'Restore Default',
    'LBL_ACTIVITIES' => 'سرگرمیاں',
    'LBL_NEW' => 'نیا',
    'LBL_TYPE_BASIC' => 'basic',
    'LBL_TYPE_COMPANY' => 'company',
    'LBL_TYPE_PERSON' => 'person',
    'LBL_TYPE_ISSUE' => 'issue',
    'LBL_TYPE_SALE' => 'sale',
    'LBL_TYPE_FILE' => 'file',
    'LBL_RSUB' => 'یہ آپ کے ماڈیول میں دکھایا جائے گا',
    'LBL_MSUB' => 'یہ آپ کے ماڈیول سے متعلقہ ماڈیول کو ڈسپلے کیلئے فراہم کرتا ہے',
    'LBL_MB_IMPORTABLE' => 'Importing',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] was deleted',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Export Customizations',
    'LBL_EC_NAME' => 'Package Name:',
    'LBL_EC_AUTHOR' => 'Author:',
    'LBL_EC_DESCRIPTION' => 'تفصیل:',
    'LBL_EC_CHECKERROR' => 'Please select a module.',
    'LBL_EC_CUSTOMFIELD' => 'customized field(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'customized layout(s)',
    'LBL_EC_NOCUSTOM' => 'No modules have been customized.',
    'LBL_EC_EMPTYCUSTOM' => 'has empty customizations.',
    'LBL_EC_EXPORTBTN' => 'برآمد کریں',
    'LBL_MODULE_DEPLOYED' => 'Module has been deployed.',
    'LBL_UNDEFINED' => 'undefined',
    'LBL_EC_VIEWS' => 'customized view(s)',
    'LBL_EC_SUITEFEEDS' => 'customized Feed(s)',
    'LBL_EC_DASHLETS' => 'customized Dashlet(s)',
    'LBL_EC_CSS' => 'customized css(s)',
    'LBL_EC_TPLS' => 'customized tpls(s)',
    'LBL_EC_IMAGES' => 'customized image(s)',
    'LBL_EC_JS' => 'customized js(s)',
    'LBL_EC_QTIP' => 'customized qtip(s)',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Failed to retrieve data',
    'LBL_AJAX_LOADING' => 'لوڈ کر رہا ہے...',
    'LBL_AJAX_DELETING' => 'Deleting...',
    'LBL_AJAX_BUILDPROGRESS' => 'Build In Progress...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Deploy In Progress...',

    'LBL_AJAX_RESPONSE_TITLE' => 'نتائج',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'This operation is completed successfully',
    'LBL_AJAX_LOADING_TITLE' => 'In Progress...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Please wait, loading...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'کیا آپ واقعی یہ پیکج ہٹانا چاہتے ہیں؟ یہ اس پیکج کے ساتھ منسلک تمام فائلوں کو مستقل طور پر ختم کرے گا.',
    'LBL_JS_REMOVE_MODULE' => 'کیا آپ واقعی یہ ماڈیول ہٹانا چاہتے ہیں؟ یہ اس ماڈیول کے ساتھ منسلک تمام فائلوں کو مستقل طور پر ختم کرے گا.',
    'LBL_JS_DEPLOY_PACKAGE' => 'جب اس ماڈیول کو دوبارہ تعینات کیا جاتا ہے تو آپ اس سٹوڈیو میں کسی بھی حسب ضرورت کو لکھے جائیں گے. کیا آپ واقعی آگے بڑھنا چاہتے ہیں؟',

    'LBL_DEPLOY_IN_PROGRESS' => 'Deploying Package',
    'LBL_JS_VALIDATE_NAME' => 'Name - Must be alphanumeric, begin with a letter and contain no spaces.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Package Name already exists',
    'LBL_JS_VALIDATE_KEY' => 'کلیدی - لازمی طور پر ہونا لازمی ہے، ایک خط کے ساتھ شروع کریں اور کسی خالی جگہ پر مشتمل نہیں.',
    'LBL_JS_VALIDATE_LABEL' => 'براہ کرم ایک لیبل درج کریں جو اس ماڈیول کے لئے ڈسپلے نام کے طور پر استعمال کیا جائے گا',
    'LBL_JS_VALIDATE_TYPE' => 'براہ مہربانی مندرجہ ذیل فہرست سے تعمیر کرنے کے لئے ماڈیول کی قسم منتخب کریں',
    'LBL_JS_VALIDATE_REL_LABEL' => 'لیبل - براہ کرم ایک لیبل شامل کریں جس میں subpanel کے اوپر دکھایا جائے گا',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'اس کسٹم فیلڈ کو حذف کرنا اپنی مرضی کے مطابق میدان اور ڈیٹا بیس میں اپنی مرضی کے میدان سے متعلق تمام ڈیٹا کو حذف کرے گا. فیلڈ کسی بھی ماڈیول ترتیب میں اب نہیں دکھائے گا. \\ n \\ n کیا آپ جاری رکھنا چاہتے ہیں؟',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'کیا آپ واقعی یہ رشتہ ختم کرنا چاہتے ہیں؟',
    'LBL_CONFIRM_DONT_SAVE' => 'آپ کو آخری بچت کے بعد سے تبدیل کردیئے گئے ہیں، کیا آپ کو بچانے کے لئے چاہتے ہیں؟',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Save Changes?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'ڈیٹا ختم کردی جا سکتا ہے اور یہ غیر مستحکم نہیں ہوسکتا ہے، کیا آپ واقعی جاری رکھنا چاہتے ہیں؟',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'اس ڈیٹا کی قسم پر مبنی مناسب ڈیٹا کی قسم منتخب کریں جو میدان میں داخل ہو جائے گی.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Yes</b>: The field will be included in an import operation.<br><b>No</b>: The field will not be included in an import.<br><b>Required</b>: A value for the field must be provided in any import.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Enter a number for Width, as measured in pixels.<br> The uploaded image will be scaled to this Width.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Enter a number for the Height, as measured in pixels.<br> The uploaded image will be scaled to this Height.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Filter</b>: The field will appear in the Merge Duplicates feature, and will be available to use for the filter conditions in the Find Duplicates feature.<br><b>Default selected filter</b>: The field will appear in the Merge Duplicates feature, and will be used by default for the filter conditions in the Find Duplicates feature.<br><b>Only filter</b>: The field will not appear in the Merge Duplicates feature, but will be available to use for the filter conditions in the Find Duplicates feature.',

//Revert Module labels
    'LBL_RESET' => 'دوبارہ سیٹ کریں',
    'LBL_RESET_MODULE' => 'Reset Module',
    'LBL_REMOVE_CUSTOM' => 'Remove Customizations',
    'LBL_CLEAR_RELATIONSHIPS' => 'Clear Relationships',
    'LBL_RESET_LABELS' => 'Reset Labels',
    'LBL_RESET_LAYOUTS' => 'Reset Layouts',
    'LBL_REMOVE_FIELDS' => 'Remove Custom Fields',
    'LBL_CLEAR_EXTENSIONS' => 'Clear Extensions',
    'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
    'LBL_HISTORY_TITLE' => ' history',

    'fieldTypes' => array(
        'varchar' => 'TextField',
        'int' => 'Integer',
        'float' => 'Float',
        'bool' => 'چیک باکس',
        'enum' => 'DropDown',
        'dynamicenum' => 'Dynamic DropDown',
        'multienum' => 'MultiSelect',
        'date' => 'تاریخ',
        'phone' => 'فون',
        'currency' => 'کرنسی',
        'html' => 'ایچ ٹی ایم ایل',
        'radioenum' => 'ریڈیو',
        'relate' => 'تعلق پیدا کرنا یا رابطہ پیدا کرنا',
        'address' => 'پتہ',
        'text' => 'TextArea',
        'url' => 'یوآرایل',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Datetime',
        'decimal' => 'Decimal',
        'image' => 'Image',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Frequently used labels",
        "all" => "All Labels",
    ),

    'parent' => 'موڑنے سے متعلق',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "You are selecting this item for removal from the dropdown list. Any dropdown fields using this list with this item as a value will no longer display the value, and the value will no longer be able to be selected from the dropdown fields. Are you sure you want to continue?",

    'LBL_ALL_MODULES' => 'تمام ماڈل',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
