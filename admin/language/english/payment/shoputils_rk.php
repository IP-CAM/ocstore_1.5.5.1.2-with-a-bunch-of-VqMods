<?php
/*
 * Shoputils
 *
 * ПРИМЕЧАНИЕ К ЛИЦЕНЗИОННОМУ СОГЛАШЕНИЮ
 *
 * Этот файл связан лицензионным соглашением, которое можно найти в архиве,
 * вместе с этим файлом. Файл лицензии называется: LICENSE.1.5.x.RUS.txt
 * Так же лицензионное соглашение можно найти по адресу:
 * http://opencart.shoputils.ru/LICENSE.1.5.x.RUS.txt
 * 
 * =================================================================
 * OPENCART 1.5.x ПРИМЕЧАНИЕ ПО ИСПОЛЬЗОВАНИЮ
 * =================================================================
 *  Этот файл предназначен для Opencart 1.5.x. Shoputils не
 *  гарантирует правильную работу этого расширения на любой другой 
 *  версии Opencart, кроме Opencart 1.5.x. 
 *  Shoputils не поддерживает программное обеспечение для других 
 *  версий Opencart.
 * =================================================================
*/

// Heading
$_['heading_title']         = 'Robokassa, v2.2';

// Tab 
$_['tab_emails']            = 'E-mail уведомления';
$_['tab_settings']          = 'Настройка платежей';
$_['tab_log']               = 'Журнал';
$_['tab_information']       = 'Информация';

// Text 
$_['text_payment']            = 'Оплата';
$_['text_success']            = 'Настройки модуля "%s" обновлены!';
$_['text_clear_log_success']  = 'Журнал запросов модуля успешно очищен!';
$_['text_confirm']            = 'Удаление журнала невозможно отменить! Вы уверены, что хотите это сделать?';
$_['text_shoputils_rk']       = '<a onclick="window.open(\'http://robokassa.ru\');"><img src="view/image/payment/shoputils_robokassa.png" alt="Robokassa" title="Robokassa" /></a>';
//$_['text_order_status_cart']  = 'Корзина';
$_['text_lang_auto']          = 'Определять автоматически';
$_['text_lang_ru']            = 'Русский (ru)';
$_['text_lang_en']            = 'Английский (en)';
$_['text_copyright']      	  = 'Модуль оплаты "%s" разработан ShopUtils. Вопросы по техподдержке и работе модуля отправляйте через сайт <a href="http://opencart.shoputils.ru/?route=information/contact" target="_blank">http://opencart.shoputils.ru</a>.<br />&copy; ShopUtils 2010 &mdash; %s';
$_['text_info']               =  'После <a href="http://partner.robokassa.ru/Reg/Register?culture=ru" target="_blank">регистрации</a> учетной записи интернет-магазина в «ROBOKASSA»
необходимо настроить магазин для приема платежей. Сделать это можно в <a href="http://partner.robokassa.ru/?culture=ru" target="_blank">личном кабинете</a>,
кликнув по  названию своего магазина и перейдя на вкладку "Технические настройки". Данные которые необходимо ввести в настройках магазина:';

// Text FT
$_['text_order_id_ft']                   = '№ заказа';
$_['text_store_name_ft']                 = 'Название магазина';
$_['text_logo_ft']                       = 'Логотип магазина';
$_['text_products_ft']                   = 'Список купленных товаров';
$_['text_total_ft']                      = 'Итого';
$_['text_customer_firstname_ft']         = 'Имя Отчество покупателя';
$_['text_customer_lastname_ft']          = 'Фамилия покупателя';
$_['text_customer_group_ft']             = 'Группа покупателя';
$_['text_customer_email_ft']             = 'e-mail покупателя';
$_['text_customer_telephone_ft']         = 'Телефон покупателя';
$_['text_order_status_ft']               = 'Статус заказа';
$_['text_comment_ft']                    = 'Комментарий покупателя к заказу';
$_['text_ip_ft']                         = 'IP адрес покупателя';
$_['text_date_added_ft']                 = 'Дата и время добавления заказа';
$_['text_date_modified_ft']              = 'Дата и время изменения заказа';


// Entry
$_['entry_status']                    = 'Статус:';
$_['entry_order_status']              = 'Статус заказа после оплаты:';
$_['entry_geo_zone']                  = 'Географическая зона:';
$_['entry_sort_order']                = 'Порядок сортировки:';
$_['entry_minimal_order']             = 'Минимальная стоимость заказа';
$_['entry_maximal_order']             = 'Максимальная стоимость заказа';
$_['entry_order_confirm_status']      = 'Статус заказа после подтверждения:';
$_['entry_order_fail_status']         = 'Статус заказа после неудачной оплаты:';
$_['entry_laterpay_mode']             = 'Режим отсроченной оплаты:';
$_['entry_order_later_status']        = 'Статус заказа для отсроченной оплаты:';
$_['entry_title']                     = 'Название:';
$_['entry_instruction']               = 'Инструкция по оплате:';


$_['entry_notify_customer_success']               = 'Свой шаблон письма покупателю об успешной оплате:';
$_['entry_mail_customer_success_subject']         = 'Тема письма покупателю об успешной оплате:';
$_['entry_mail_customer_success_content']         = 'Шаблон письма покупателю об успешной оплате:';
$_['entry_notify_customer_fail']                  = 'Свой шаблон письма покупателю о неудачной оплате:';
$_['entry_mail_customer_fail_subject']            = 'Тема письма покупателю о неудачной оплате:';
$_['entry_mail_customer_fail_content']            = 'Шаблон письма покупателю о неудачной оплате:';
$_['entry_notify_admin_success']                  = 'Отправлять администратору уведомление по e-mail об успешной оплате:';
$_['entry_mail_admin_success_subject']            = 'Тема письма администратору об успешной оплате клиентом:';
$_['entry_mail_admin_success_content']            = 'Шаблон письма администратору об успешной оплате клиентом:';
$_['entry_notify_admin_fail']                     = 'Отправлять администратору уведомление по e-mail о неудачной оплате:';
$_['entry_mail_admin_fail_subject']               = 'Тема письма администратору о неудачной оплате клиентом:';
$_['entry_mail_admin_fail_content']               = 'Шаблон письма администратору о неудачной оплате клиентом:';

$_['entry_MerchantLogin']   = 'Идентификатор магазина:';
$_['entry_MerchantPass1']   = 'Пароль #1:';
$_['entry_MerchantPass2']   = 'Пароль #2:';
$_['entry_test_mode']       = 'Тестовый режим:';
$_['entry_lang']            = 'Язык интерфейса:';

$_['entry_log']             = 'Журнал:';
$_['text_log_off']          = 'Выключен';
$_['text_log_short']        = 'Частичный (Только результары операций)';
$_['text_log_full']         = 'Полный (Все запросы)';
$_['entry_log_file']        = 'Файл журнала:';

$_['entry_password1']            = 'Пароль #1:';
$_['entry_password1_text']       = 'Ваш "Пароль #1", установленный в настройках модуля на закладке "Прием платежей"';
$_['entry_password2']            = 'Пароль #2:';
$_['entry_password2_text']       = 'Ваш "Пароль #2", установленный в настройках модуля на закладке "Прием платежей"';
$_['entry_result_url']           = 'Result URL:';
$_['entry_result_url_method']    = 'Метод отсылки данных по Result URL:';
$_['entry_success_url']          = 'Success URL:';
$_['entry_success_url_method']   = 'Метод отсылки данных по Success URL:';
$_['entry_fail_url']             = 'Fail URL:';
$_['entry_fail_url_method']      = 'Метод отсылки данных по Fail URL:';

// Placeholder
$_['placeholder_instruction']   = 'Уважаемый покупатель! Просим Вас дождаться звонка от нашего менеджера перед оплатой. Это необходимо для подтверждения наличия товара на складе и возможности доставки в Ваш регион. После чего менеджер отправит Вам письмо со ссылкой на оплату заказа.';

// Sample
$_['sample_mail_customer_success_subject']  = 'Ваш заказ №{order_id} успешно оплачен';
$_['sample_mail_customer_success_content']  = 'Уважаемый {customer_firstname} {customer_lastname}! Ваш заказ {order_id} оплачен.';
$_['sample_mail_customer_fail_subject']     = 'Заказ №{order_id} отклонен платежной системой';
$_['sample_mail_customer_fail_content']     = 'Уважаемый {customer_firstname} {customer_lastname}! К сожалению, заказ №{order_id} был отклонен платежной системой {date_modified}. Пожалуйста, повторите заказ еще раз.';
$_['sample_mail_admin_success_subject']     = 'Заказ №{order_id} оплачен';
$_['sample_mail_admin_success_content']     = 'Заказ №{order_id} оплачен {date_modified} на сумму {total}. Статус: {order_status}; Покупатель: {customer_firstname} {customer_lastname}; E-mail: {customer_email}; Телефон: {customer_telephone}';
$_['sample_mail_admin_fail_subject']        = 'Заказ №{order_id} был отклонен платежной системой';
$_['sample_mail_admin_fail_content']        = 'Заказ №{order_id} от {date_added} на сумму {total} был отклонен {date_modified}. Текущий статус заказа: {order_status}. ';

// Help
$_['help_order_confirm_status'] = 'При нажатии на кнопку "Подтвердить" на последнем этапе оформления заказа, заказу будет установлен выбранный статус';
$_['help_order_status']         = 'После успешной оплаты заказа, заказу будет установлен выбранный статус.';
$_['help_minimal_order']        = 'Если сумма заказа меньше указанной суммы, и сумма не пустая и не равна нулю, то этот метод оплаты не будет доступен, при оформлении заказа.<br />Например: 190.90';
$_['help_maximal_order']        = 'Если сумма заказа больше указанной суммы, и сумма не пустая и не равна нулю, то этот метод оплаты не будет доступен, при оформлении заказа.<br />Например: 5000.01';
$_['help_order_fail_status']    = 'Если Робокасса вернет покупателя после неудачного платежа, заказу будет установлен выбранный статус.';
$_['help_laterpay_mode']        = 'При включенном режиме отсроченной (отложенной) оплаты покупатель сможет оплатить заказ только после проверки заказа менеджером магазина.<br />Если Вам необходимо, чтобы у покупателя была возможность произвести оплату сразу после оформления заказа без подтверждения менеджером - не включайте эту опцию.';
$_['help_order_later_status']   = 'После проверки заказа менеджер магазина выставит данный статус, покупатель будет уведомлен по e-mail и сможет оплатить заказ. Также, ссылка на оплату появится в личном кабинете покупателя в разделе "Мои заказы".<br />БУДЬТЕ ВНИМАТЕЛЬНЫ!<br />Если данный статус будет совпадать со "статус заказа после подтверждения" - режим отсроченной оплаты будет отключен и покупатели будут перенаправляться на сайт "Робокассы" для оплаты сразу после нажатия на кнопку "Оформить заказ".';
$_['help_title']                = 'Название метода оплаты на странице оформления заказа';
$_['help_instruction']          = 'Инструкция по оплате выводится при подтверждении заказа. Если поле не заполнено - инструкция по оплате выводиться не будет.';

$_['help_notify_customer_success']          = 'Если включено - после успешной оплаты покупателю на e-mail придет письмо, шаблон которого можно настроить ниже.<br />Если выключено - будет отправляться стандартное в Opencart письмо об изменении заказа.';
$_['help_mail_customer_success_subject']    = 'Поддерживается FastTemplate';
$_['help_mail_customer_success_content']    = 'Поддерживается FastTemplate.<br />Список возможных значений:';
$_['help_notify_customer_fail']             = 'Если включено - при неудачной оплате покупателю на e-mail придет письмо, шаблон которого можно настроить ниже.<br />Если выключено - будет отправляться стандартное в Opencart письмо об изменении заказа.';
$_['help_mail_customer_fail_subject']       = 'Поддерживается FastTemplate';
$_['help_mail_customer_fail_content']       = 'Поддерживается FastTemplate.<br />Список возможных значений:';
$_['help_notify_admin_success']             = 'Если включено - администратору и менеджерам ИМ будет отправляться уведомление по e-mail об успешной оплате клиентом. Дополнительные e-mail адреса для оповещений Вы можете добавить в "Система->Настройки->Изменить->вкладка "Почта"';
$_['help_mail_admin_success_subject']       = 'Поддерживается FastTemplate';
$_['help_mail_admin_success_content']       = 'Поддерживается FastTemplate.<br />Список возможных значений:';
$_['help_notify_admin_fail']                = 'Если включено - администратору и менеджерам ИМ будет отправляться уведомление по e-mail о неудачной оплате клиентом. Дополнительные e-mail адреса для оповещений Вы можете добавить в "Система->Настройки->Изменить->вкладка "Почта"';
$_['help_mail_admin_fail_subject']          = 'Поддерживается FastTemplate';
$_['help_mail_admin_fail_content']          = 'Поддерживается FastTemplate.<br />Список возможных значений:';

$_['help_MerchantLogin']         = 'Идентификатор магазина в обменном пункте Robokassa';
$_['help_MerchantPass1']         = 'Используется интерфейсом инициализации оплаты';
$_['help_MerchantPass2']         = 'Используется интерфейсом оповещения о платеже, XML-интерфейсах';
$_['help_test_mode']             = 'При включенном тестовом режимы все запросы будут отправляться на тестовый сервер: http://test.robokassa.ru/Index.aspx (Внимание! Данный сервер доступен для использования только для новых мерчантов (непрошедших процедуру активации).';
$_['help_lang']                  = 'Язык интерфейса определяется автоматически, но можно задать его как "Русский" или "Английский".';

$_['help_log']                   = 'Журнал запросов от сервера "Robokassa" сохраняется в файле: /system/logs/%s';
$_['help_log_file']              = 'Последние %d строк из файла журнала.';

//lic
$_['text_get_key']  = 'Если Вы не знаете как получить лицензионный ключ - прочтите <a href="http://opencart.shoputils.ru/license_key" target="_blank">инструкцию на нашем официальном сайте</a>.<br />Ваш домен: <b>%s</b>';
$_['entry_key']     = 'Введите лицензионный ключ:';
$_['error_loader']  = '<span style="color:red;">Отсутствует IonCube Loader!</span><br />Обратитесь к Вашему хостеру с просьбой установить IonCube Loader<br /><br />';
$_['error_key']     = 'Недействительный лицензионный ключ!';
$_['error_dir_perm']  = 'Директория "%s" не доступна для записи. Установите необходимые права!';

// Error
$_['error_permission']      = 'У Вас нет прав для управления модулем "%s"!';
$_['error_clear_log']       = 'У Вас нет прав для очистки журнала модуля!';
$_['error_form']            = 'Необходимо заполнить поле "%s" (вкладка "%s")!';
?>