<?php

define("HELP_IMPORT_LICENSE", "ที่นี่ คุณสามารถวางใบอนุญาตที่สร้างขึ้นจากที่อื่น (เช่น ด้วยตนเอง) และจะถูกตรวจสอบและเพิ่มลงในฐานข้อมูล");
define("HELP_NEW_PRODUCT", "กรอกแบบฟอร์มด้านล่างเพื่อสร้างผลิตภัณฑ์ใหม่ เลือกความยาวของคีย์อย่างระมัดระวัง เนื่องจากค่าที่มากขึ้นหมายถึงความปลอดภัยที่มากขึ้น แต่การประมวลผลที่ช้าลงและหมายเลขซีเรียลที่ใหญ่ขึ้น ปล่อยความยาวเริ่มต้นไว้หากไม่แน่ใจ");
define("HELP_IMPORT_PRODUCT", "เลือกไฟล์โปรเจ็กต์ VMProtect ในเครื่องแล้วอัปโหลดไปยังฐานข้อมูลพร้อมหมายเลขซีเรียลและคุณสมบัติอื่นๆ ที่เกี่ยวข้องกับการออกใบอนุญาต จากนั้นคุณสามารถใช้คำสั่ง \"Export\" เพื่อดาวน์โหลดโครงการกลับ มีประโยชน์มากสำหรับการซิงโครไนซ์");
define("HELP_NEW_REGISTRATOR", "ใส่ชื่อผู้ให้บริการอีคอมเมิร์ซของคุณที่นี่ คุณสามารถใส่ IP ที่นี่ ดังนั้น ตัวจัดการใบอนุญาต จะยอมรับเฉพาะการเรียก keygen จากที่อยู่เหล่านั้นเท่านั้น");
define("HELP_COPY_URL", "เลือกผู้ให้บริการอีคอมเมิร์ซของคุณจากรายการดรอปดาวน์ด้านล่าง และใส่ URL ตัวสร้างคีย์ไปที่แผงควบคุมของผู้ให้บริการอีคอมเมิร์ซ หากผู้ให้บริการของคุณไม่อยู่ในรายการ โปรดสร้าง URL ของคุณเองโดยใช้หลักการเดียวกันและส่งเทมเพลตมาให้เรา เพื่อให้เราสามารถเพิ่มในการอัปเดตครั้งต่อไป");

define("VERSION_TXT", "เวอร์ชั่น");

/* Login page */
define("LOGIN_HEADER_TXT", "เข้าสู่ระบบ");
define("LOGIN_BTN_TXT", "เข้าสู่ระบบ");
define("CAPTCHA_TXT", "รหัสความปลอดภัย<br/>(ตัวพิมพ์เล็กและตัวพิมพ์ใหญ่)");
define("CAPTCHA_ANOTHER_TXT", "แสดงรูปภาพอื่น");
define("CAPTCHA_ERROR_TXT", "รหัสความปลอดภัยไม่ถูกต้อง");
define("LOGIN_ERROR_TXT", "เข้าสู่ระบบหรือรหัสผ่านไม่ถูกต้อง");
define("USERNAME_TXT", "ชื่อผู้ใช้");
define("PASSWORD_TXT", "รหัสผ่าน");
define("FORGOT_TXT", "ลืมรหัสผ่าน?");

/* Retrive password page */
define("RP_RETPASS_TXT", "ดึงรหัสผ่าน");
define("RP_EMAIL_TXT", "อีเมล์");
define("RP_SEND_TXT", "ส่ง");
define("RP_USERNOTFOUND_TXT", "ไม่พบผู้ใช้ดังกล่าว!");
define("RP_SENT_TXT", "รหัสผ่านใหม่ถูกส่งไปยังที่อยู่อีเมลของคุณแล้ว");
define("RP_ERROR_TXT", "เกิดข้อผิดพลาดขณะส่งอีเมล");

define("HELLO_TXT", "สวัสดี");
define("HELP_TXT", "ช่วยเหลือ");
define("LOGOUT_TXT", "ออกจากระบบ");

define("M_LICS_TXT", "ใบอนุญาต");
define("M_NEWLIC_TXT", "เพิ่มใบอนุญาตใหม่");
define("H_EDITLIC_TXT", "แก้ไขใบอนุญาต");
define("M_IMPORTLIC_TXT", "นำเข้าใบอนุญาต");

define("M_ACTS_TXT", "รหัสเปิดใช้งาน");
define("M_NEWACT_TXT", "เพิ่มรหัสใหม่");
define("H_NEWACT_TXT", "เพิ่มรหัสเปิดใช้งานใหม่");
define("H_EDITACT_TXT", "แก้ไขรหัสเปิดใช้งาน");
define("M_IMPORTACT_TXT", "นำเข้ารหัส");
define("H_IMPORTACT_TXT", "นำเข้ารหัสเปิดใช้งาน");
define("M_PRODS_TXT", "ผลิตภัณฑ์");
define("M_NEWPROD_TXT", "เพิ่มผลิตภัณฑ์ใหม่");
define("H_EDITPROD_TXT", "แก้ไขผลิตภัณฑ์");
define("M_NEWMODE_TXT", "เพิ่มโหมดใหม่");
define("H_EDITMODE_TXT", "แก้ไขโหมด");
define("M_IMPORTPROD_TXT", "นำเข้าผลิตภัณฑ์");

define("M_REGS_TXT", "ตัวแทนจำหน่าย");
define("M_NEWREG_TXT", "เพิ่มตัวแทนจำหน่ายใหม่");
define("H_EDITREG_TXT", "แก้ไขตัวแทนจำหน่าย");
define("M_USERS_TXT", "ผู้ใช้");
define("M_NEWUSER_TXT", "เพิ่มผู้ใช้ใหม่");
define("H_EDITUSER_TXT", "แก้ไขผู้ใช้");

define("ADD_TXT", "เพิ่มใหม่");
define("ITEMS_TXT", "รายการ");
define("ALL_TXT", "ทั้งหมด");
define("BLOCKED_TXT", "ถูกบล็อค");
define("INACTIVE_TXT", "ไม่ใช้งาน");
define("SAVE_TXT", "บันทึก");
define("IMPORT_TXT", "นำเข้า");
define("EDIT_TXT", "แก้ไข");
define("DELETE_TXT", "ลบ");
define("CANCEL_TXT", "ลบ");
define("BLOCK_TXT", "บล็อค");
define("UNBLOCK_TXT", "ปลดบล็อค");
define("COPYCPB_TXT", "คัดลอกไปที่คลิปบอร์ด");

/* Licenses */
define("LIC_DATE_TXT", "วันที่ซื้อ");
define("LIC_PROD_TXT", "ผลิตภัณฑ์");
define("LIC_NAME_TXT", "ชื่อลูกค้า");
define("LIC_EMAIL_TXT", "อีเมลลูกค้า");
define("LIC_ORDERREF_TXT", "เลขที่ใบสั่งซื้อ");
define("LIC_COMMENTS_TXT", "ความคิดเห็น");
define("LIC_HWID_TXT", "เลขเครื่อง");
define("LIC_EXPDATE_TXT", "วันที่หมดอายุ");
define("LIC_LIMIT_TXT", "จำกัดเวลา");
define("LIC_MAXBDATE_TXT", "วันที่สร้างถึงขีดจำกัด");
define("LIC_DATA_TXT", "วันที่");
define("LIC_BLOCKED_TXT", "ถูกบล็อค");
define("LIC_COPYSN_TXT", "คัดลอกหมายเลขซีเรียล");
define("LIC_SN_TXT", "หมายเลขซีเรียลใบอนุญาต");
define("LIC_DELETE_TXT", "ลบใบอนุญาต");
define("LIC_DELMSG_TXT", "คุณแน่ใจว่าต้องการลบใบอนุญาตนี้หรือไม่?");
define("LIC_ENOTP_TXT", "ไม่พบผลิตภัณฑ์สำหรับหมายเลขซีเรียลนี้");

/* Activations */
define("ACT_CODE_TXT", "รหัสการเปิดใช้งาน");
define("ACT_COUNT_TXT", "จำนวนการเปิดใช้งาน");
define("ACT_USED_TXT", "ใช้แล้ว");
define("ACT_LICS_TXT", "แสดงใบอนุญาต");
define("ACT_BLOCKED_TXT", "ถูกบล็อค");
define("ACT_DELETE_TXT", "ลบรหัสการเปิดใช้งาน");
define("ACT_DELMSG_TXT", "คุณแน่ใจหรือไม่ว่าต้องการลบรหัสเปิดใช้งาน?");
define("ACT_CODES_TXT", "รหัสการเปิดใช้งาน");
define("ACT_ECODES_TXT", "รหัสไม่ถูกต้อง");
define("ACT_NONE_TXT", "ไม่มี");
define("ACT_FROMURL_TXT", "จาก URL");
define("ACT_DELAY_TXT", "วันนับจากวันที่เปิดใช้งาน");
define("ACT_EXPDELAY_TXT", "วันนับจากวันที่ซื้อ");
define("ACT_VALUE_TXT", "value");
define("ACT_EXPDATE_TXT", "วันที่หมดอายุ");

/* Products */
define("PR_NAME_TXT", "ชื่อผลิตภัณฑ์");
define("PR_MODE_TXT", "เพิ่มโหมด");
define("PR_LICS_TXT", "แสดงใบอนุญาต");
define("PR_EXPORT_TXT", "ส่งออก");
define("PR_KEYGEN_TXT", "ยูอาร์แอล Keygen");
define("PR_REG_TXT", "เลือกเทมเพลต");
define("PR_ACTIVE_TXT", "เปิดใช้งาน");
define("PR_ALG_TXT", "อัลกอริทึม");
define("PR_BITS_TXT", "บิต");
define("PR_KGMODE_TXT", "โหมด Keygen");
define("PR_ACTPAT_TXT", "รูปแบบรหัสเปิดใช้งาน");
define("PR_ACTEX_TXT", "การเปิดใช้งานเพิ่มเติม");
define("PR_DELETE_TXT", "ลบผลิตภัณฑ์");
define("PR_DELMSG_TXT", "คุณแน่ใจหรือไม่ว่าต้องการลบผลิตภัณฑ์?");
define("PR_FILE_TXT", "ไฟล์ของผลิตภัณฑ์");
define("PR_KGSN_TXT", "หมายเลขซีเรียล");
define("PR_KGAC_TXT", "รหัสการเปิดใช้งาน");
define("PR_ENAME_TXT", "มีผลิตภัณฑ์ชื่อนี้อยู่แล้ว");
define("PR_EFILESIZE_TXT", "ไฟล์มีขนาดใหญ่เกินไป ขนาดไฟล์สูงสุดคือ %d");
define("PR_EXMLFILE_TXT", "เกิดข้อผิดพลาดขณะแยกวิเคราะห์ไฟล์ XML");
define("PR_EXMLDATA_TXT", "ข้อมูล XML ไม่ถูกต้อง");
define("PR_IMPORTED_TXT", "สินค้านำเข้า \'%s\' และ %d ใบอนุญาต");

/* Registrators */
define("R_NAME_TXT", "ชื่อตัวแทนจำหน่าย");
define("R_RANGES_TXT", "เรนจ์ IP");
define("R_START_TXT", "เริ่มที่ IP");
define("R_END_TXT", "สิ้นสุดที่ IP");
define("R_ADD_TXT", "เพิ่ม");
define("R_ACTIVE_TXT", "เปิดใช้งาน");
define("R_DELETE_TXT", "ลบตัวแทนจำหน่าย");
define("R_DELMSG_TXT", "คุณแน่ใจหรือไม่ว่าต้องการลบตัวแทนจำหน่าย?");
define("R_EIP_TXT", "ที่อยู่ IP ไม่ถูกต้อง");
define("R_EOCTET_TXT", "ค่าออคเต็ต แต่ละค่าต้องอยู่ระหว่าง 0 และ 255.");
define("R_EENDIP_TXT", "ที่อยู่ IP สิ้นสุดต้องมากกว่าที่เริ่มต้น");
define("R_EIPS_TXT", "ต้องเพิ่ม IP อย่างน้อยหนึ่งรายการ");
define("R_AUTHMODE_TXT", "โหมดตรวจสอบสิทธิ์");
define("R_AUTHMODE_IP_TXT", "เข้าถึงโดย IP");
define("R_AUTHMODE_LOGIN_TXT", "เข้าถึงโดยเข้าสู่ระบบและรหัสผ่าน");
define("R_LOGIN_TXT", "เข้าสู่ระบบ");
define("R_PASSWORD_TXT", "รหัสผ่าน");
define("R_VALUE_TXT", "Value");

/* Users */
define("U_ADMINS_TXT", "(ผู้ดูแลระบบ)");
define("U_MANS_TXT", "ตัวจัดการ");
define("U_ADMIN_TXT", "ผู้ดูแลระบบ");
define("U_MAN_TXT", "ผู้จัดการ");
define("U_ROLE_TXT", "บทบาท");
define("U_UN_TXT", "ชื่อผู้ใช้");
define("U_PASS_TXT", "รหัสผ่าน");
define("U_PASS2_TXT", "ยืนยันรหัสผ่าน");
define("U_EMAIL_TXT", "อีเมล");
define("U_DELETE_TXT", "ลบผู้ใช้");
define("U_DELMSG_TXT", "คุณแน่ใจหรือว่าต้องการลบผู้ใช้?");
define("U_PROFILE_TXT", "โปรไฟล์");
define("U_ELOGIN_TXT", "ชื่อล็อกอินนี้ถูกใช้แล้ว");
define("U_EEMAIL_TXT", "อีเมลนี้ถูกใช้ไปแล้ว");
define("U_EADMIN_TXT", "ลบผู้ใช้รายแรกไม่ได้");
define("U_ESELF_TXT", "ลบตัวเองไม่ได้");

/* Validation script */
define("V_DIG_TXT", "อนุญาตให้ใช้เฉพาะตัวเลขเท่านั้น");
define("V_REQ_TXT", "จำเป็นต้องกรอก");
define("V_EMAIL_TXT", "อีเมลไม่ถูกต้อง");
define("V_DATE_TXT", "วันที่ไม่ถูกต้อง รูปแบบคือ ปี-เดือน-วัน");
define("V_EQ_TXT", "ควรมีค่าเท่ากับ");
define("V_ERROR_TXT", "ผิดพลาด");

/* Installation */
define("I_MODULES_TXT", "การตรวจสอบโมดูล PHP");
define("I_CONTINUE_TXT", "ดำเนินการ");
define("I_OK_TXT", "โอเค");
define("I_FAILED_TXT", "ล้มเหลว");
define("I_EMODULE_TXT", "โปรดติดตั้งโมดูล PHP ที่จำเป็นก่อนดำเนินการต่อ");
define("I_EGLOBALS_TXT", "โปรดปิดการใช้งาน 'register_globals' ในตัวเลือก PHP");
define("I_DATABASE_TXT", "การเชื่อมต่อกับฐานข้อมูล");
define("I_DBSERVER_TXT", "เซิร์ฟเวอร์ฐานข้อมูล");
define("I_DBNAME_TXT", "ชื่อฐานข้อมูล");
define("I_DBUSER_TXT", "ชื่อผู้ใช้ฐานข้อมูล");
define("I_DBPASS_TXT", "รหัสผ่านฐานข้อมูล");
define("I_DBPREFIX_TXT", "คำนำหน้าตาราง");
define("I_INSTALL_TXT", "ติดตั้งตารางข้อมูล");
define("I_UPDATE_TXT", "อัพเดทตารางข้อมูล");
define("I_CONNECT_TXT", "เชื่อมต่อ");
define("I_DBEXISTS_TXT", "มีตารางข้อมูลอยู่แล้ว คุณสามารถเลือกอัปเดตเพื่อบันทึกข้อมูลของคุณหรือทำการติดตั้งที่ชัดเจน");
define("I_ADMIN_TXT", "สร้างผู้ดูแลระบบ");
define("I_CREATE_TXT", "สร้าง");
define("I_SAVING_TXT", "กำลังบันทึกการกำหนดค่า");
define("I_ERROR_TXT", "ไม่สามารถเขียนไฟล์ตามที่อยู่ดังกล่าว 'include/config.inc.php' ได้");
define("I_SUCCESS_TXT", "บันทึกไฟล์การกำหนดค่าเรียบร้อยแล้ว<br/>ตอนนี้คุณสามารถปิดการใช้งานการเขียนแอตทริบิวต์ของไฟล์ตามที่อยู่ 'include/config.inc.php'<br />เพื่อให้การติดตั้งเสร็จสิ้น ให้ลบไฟล์ 'install.php' จากเซิร์ฟเวอร์และเริ่มใช้งาน <a href=\"index.php\">ที่นี่</a>");

/* Offline activation */
define("OFF_STRING_TXT", "ป้อนการเปิดใช้งานของคุณ / สตริงการปิดใช้งาน:");
define("OFF_SUBMIT_TXT", "ส่ง");
define("OFF_SN_TXT", "หมายเลขซีเรียลของคุณ:");
define("OFF_COPIED_TXT", "คัดลอกแล้ว");
define("OFF_ESTRING_TXT", "สตริงการเปิดใช้งานไม่ถูกต้อง");
define("OFF_ECODE_TXT", "รหัสเปิดใช้งานของคุณไม่ถูกต้อง");
define("OFF_ELIMIT_TXT", "เกินขีดจำกัดการเปิดใช้งาน");
define("OFF_EBLOCKED_TXT", "รหัสเปิดใช้งานของคุณถูกบล็อก");
define("OFF_EEXPIRED_TXT", "รหัสเปิดใช้งานของคุณหมดอายุ");
define("OFF_ESN_TXT", "หมายเลขซีเรียลของคุณไม่ถูกต้อง");
define("OFF_DEACT_TXT", "หมายเลขซีเรียลของคุณถูกปิดการใช้งาน");

?>
