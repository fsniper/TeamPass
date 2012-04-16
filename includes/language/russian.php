<?php
//RUSSIAN
if (!isset($_SESSION['settings']['cpassman_url'])) {
	$TeamPass_url = '';
}else{
	$TeamPass_url = $_SESSION['settings']['cpassman_url'];
}


$txt['account_is_locked'] = "Этот аккаунт заблокирован";
$txt['activity'] = "Активность";
$txt['add_button'] = "Добавить";
$txt['add_new_group'] = "Добавить новую папку";
$txt['add_role_tip'] = "Добавить новую роль";
$txt['admin'] = "Администрирование";
$txt['admin_action'] = "Пожалуйста, проверьте свое действие";
$txt['admin_actions_title'] = "Особые действия";
$txt['admin_action_change_salt_key'] = "Change the main SALT Key";
$txt['admin_action_change_salt_key_tip'] = "Before changing the SALT key, please be sure to do a full backup of the database, and to put the tool in maintenance in order to avoid any users being logged.";
$txt['admin_action_check_pf'] = "Обновить Персональный папки для всех пользователей (создает, если их не существует)";
$txt['admin_action_db_backup'] = "Создать Бэкап базы данных";
$txt['admin_action_db_backup_key_tip'] = "Пожалуйста, введите ключ шифрования. Сохраните его где-нибудь, он будет запрошен во время восстановления. (Оставьте пустым, чтобы не шифровать)";
$txt['admin_action_db_backup_start_tip'] = "Запустить";
$txt['admin_action_db_backup_tip'] = "Это хорошая идея - создавать бэкапы, которые Вы сможете потом использовать для восстановления базы данных";
$txt['admin_action_db_clean_items'] = "Удалить объекты-\"сироты\" из базы данных";
$txt['admin_action_db_clean_items_result'] = "Объекты удалены";
$txt['admin_action_db_clean_items_tip'] = "Это удалит только те элементы и связанные с ними протоколы, которые не были удалены после того, как была удалена папка, в которой находились эти элементы. Перед этой операцией рекомендуется сделать резервную копию базы данных.";
$txt['admin_action_db_optimize'] = "Оптимизировать базу данных";
$txt['admin_action_db_restore'] = "Восстановить базу данных";
$txt['admin_action_db_restore_key'] = "Пожалуйста, введите ключ шифрования";
$txt['admin_action_db_restore_tip'] = "Восстановление базы данных из файла резервной копии, сделанного при помощи опции резервного копирования.";
$txt['admin_action_purge_old_files'] = "Удалить старые файлы";
$txt['admin_action_purge_old_files_result'] = "Файлы удалены";
$txt['admin_action_purge_old_files_tip'] = "Это удалит все временные файлы старше 7 дней";
$txt['admin_action_reload_cache_table'] = "Перезагрузить Cache таблицу";
$txt['admin_action_reload_cache_table_tip'] = "Нажмите для редактирования";
$txt['admin_backups'] = "Резервные копии";
$txt['admin_error_no_complexity'] = "<a href='index.php?page=manage_groups'>Определить?</a>";
$txt['admin_error_no_visibility'] = "Никто не может видеть этот элемент. (<a href='index.php?page=manage_roles'><u>Управление ролями</u></a>)";
$txt['admin_functions'] = "Упарвление ролями";
$txt['admin_groups'] = "Управление папками";
$txt['admin_help'] = "Помощь";
$txt['admin_info'] = "Some information concerning the tool";
$txt['admin_info_loading'] = "Загружаютя данные... Пожалуста ждите";
$txt['admin_ldap_configuration'] = "Настройка LDAP";
$txt['admin_ldap_menu'] = "Опции LDAP";
$txt['admin_main'] = "Информация";
$txt['admin_misc_cpassman_dir'] = "Полный путь к TeamPass";
$txt['admin_misc_cpassman_url'] = "Полный URL к TeamPass";
$txt['admin_misc_custom_login_text'] = "Custom Login text";
$txt['admin_misc_custom_logo'] = "Full url to Custom Login Logo";
$txt['admin_misc_favicon'] = "Полный URL до файла иконки сайта";
$txt['admin_misc_title'] = "Настроить";
$txt['admin_new1'] = "<i><u>14FEB2012:</i></u><br>Administrator profile is no more allowed to see items. This profile is now only an Administrative account.<br />See <a href='http://www.teampass.net/how-to-handle-changes-on-administrator-profile' target='_blank'>TeamPass.net page</a> concerning the way to handle this change.";
$txt['admin_one_shot_backup'] = "One shot backup and restore";
$txt['admin_script_backups'] = "Settings for Backups script";
$txt['admin_script_backups_tip'] = "For more security, it is recommended to parameter a scheduled backup of the database.<br />Use your server to schedule a daily cron task by calling the file 'script.backup.php' in 'backups' folder.<br />You first need to set the 2 first paramteres and SAVE them.";
$txt['admin_script_backup_decrypt'] = "Name of the file you want to decrypt";
$txt['admin_script_backup_decrypt_tip'] = "In order to decrypt a backup file, just indicate the name of the backup file (no extension and no path).<br />The file will be decrypted in the same folder as the backup files are.";
$txt['admin_script_backup_encryption'] = "Encryption key (optional)";
$txt['admin_script_backup_encryption_tip'] = "If set, this key will be used to encrypted your file";
$txt['admin_script_backup_filename'] = "Backup file name";
$txt['admin_script_backup_filename_tip'] = "File name you want for your backups file";
$txt['admin_script_backup_path'] = "Path where backups have to be stored";
$txt['admin_script_backup_path_tip'] = "In what folder the backup files have to be stored";
$txt['admin_settings'] = "Настройки";
$txt['admin_settings_title'] = "Настройки TeamPass";
$txt['admin_setting_activate_expiration'] = "Включить устаревание паролей";
$txt['admin_setting_activate_expiration_tip'] = "Когда включено, устаревшие объекты не будут показываться пользователям.";
$txt['admin_users'] = "Управление пользователями";
$txt['admin_views'] = "Просмотр";
$txt['alert_message_done'] = "Готово!";
$txt['alert_message_personal_sk_missing'] = "Вы должны ввести свой личный ключ шифрования!";
$txt['all'] = "all";
$txt['anyone_can_modify'] = "Разрешить измененение этого элемента любому, кто имеет к нему доступ";
$txt['associated_role'] = "С какой ролью связать эту папку:";
$txt['associate_kb_to_items'] = "Select the items to associate to this KB";
$txt['assoc_authorized_groups'] = "Allowed Associated Folders";
$txt['assoc_forbidden_groups'] = "Forbidden Associated Folders";
$txt['at'] = "в";
$txt['at_add_file'] = "Добавлен файл";
$txt['at_category'] = "Папка";
$txt['at_copy'] = "Copy created";
$txt['at_copy'] = "Copy done";
$txt['at_creation'] = "Создание";
$txt['at_delete'] = "Удаление";
$txt['at_del_file'] = "Удален файл";
$txt['at_description'] = "Описание";
$txt['at_file'] = "Файлы";
$txt['at_import'] = "Importation";
$txt['at_label'] = "Метка";
$txt['at_login'] = "Login";
$txt['at_modification'] = "Modification";
$txt['at_moved'] = "Moved";
$txt['at_personnel'] = "Personal";
$txt['at_pw'] = "Пароль изменён";
$txt['at_restored'] = "Восстановлен";
$txt['at_restriction'] = "Restriction";
$txt['at_shown'] = "Accessed";
$txt['at_url'] = "URL";
$txt['auteur'] = "Author";
$txt['author'] = "Author";
$txt['authorized_groups'] = "Allowed Folders";
$txt['auth_creation_without_complexity'] = "Allow creating an item without respecting the required password complexity";
$txt['auth_modification_without_complexity'] = "Allow modifying an item without respecting the required password complexity";
$txt['auto_create_folder_role'] = "Create folder and role for ";
$txt['block_admin_info'] = "Administrators Info";
$txt['block_last_created'] = "Последние созданные";
$txt['bugs_page'] = "Если вы обнаружили ошибку, вы можете сообщить о ней <a href='http://code.google.com/p/TeamPass/issues/list' target='_blank'><u>сюда</u></a>.";
$txt['by'] = "к";
$txt['cancel'] = "Отмена";
$txt['cancel_button'] = "Отмена";
$txt['can_create_root_folder'] = "Can create a folder at root level";
$txt['changelog'] = "Последние новости";
$txt['change_authorized_groups'] = "Change authorized folders";
$txt['change_forbidden_groups'] = "Change forbidden folders";
$txt['change_function'] = "Change roles";
$txt['change_group_autgroups_info'] = "Select the authorized folders this Role can see and use";
$txt['change_group_autgroups_title'] = "Customize the authorized folders";
$txt['change_group_forgroups_info'] = "Select the forbidden folders this Role can't see and use";
$txt['change_group_forgroups_title'] = "Customize the forbidden folders";
$txt['change_user_autgroups_info'] = "Select the authorized folders this account can see and use";
$txt['change_user_autgroups_title'] = "Customize the authorized folders";
$txt['change_user_forgroups_info'] = "Select the forbidden folders this account can't see nor use";
$txt['change_user_forgroups_title'] = "Customize the forbidden folders";
$txt['change_user_functions_info'] = "Select the functions associated to this account";
$txt['change_user_functions_title'] = "Customize associated functions";
$txt['check_all_text'] = "Проверить все";
$txt['close'] = "Закрыть";
$txt['complexity'] = "Сложность";
$txt['complex_asked'] = "Требуемая сложность";
$txt['complex_asked'] = "Требуемая сложность";
$txt['complex_level0'] = "Очень слабый";
$txt['complex_level1'] = "Слабый";
$txt['complex_level2'] = "Средний";
$txt['complex_level3'] = "Стойкий";
$txt['complex_level4'] = "Очень стойкий";
$txt['complex_level5'] = "Тяжелый";
$txt['complex_level6'] = "Очень тяжелый";
$txt['confirm'] = "Подтвердить";
$txt['confirm_delete_group'] = "You have decided to delete this Folder and all included Items ... are you sure?";
$txt['confirm_deletion'] = "You are going to delete... are you sure?";
$txt['confirm_del_account'] = "You have decided to delete this Account. Are you sure?";
$txt['confirm_del_from_fav'] = "Пожалуйста, подтвердите удаление из Избранных";
$txt['confirm_del_role'] = "Вы действительно собираетесь удалить следующую роль?";
$txt['confirm_edit_role'] = "Введите новое название для следующей роли:";
$txt['confirm_lock_account'] = "You have decided to LOCK this Account. Are you sure?";
$txt['connection'] = "Соединение";
$txt['connections'] = "соединения";
$txt['copy'] = "Copy";
$txt['copy_to_clipboard_small_icons'] = "Enable copy to clipboard small icons in items page";
$txt['copy_to_clipboard_small_icons_tip'] = "<span style='font-size:11px;max-width:300px;'>This could help preventing memory usage if users have no recent computer.<br /> Indeed, the clipboard is not loaded with items informations. But no quick copy of password and login is possible.</span>
";
$txt['creation_date'] = "Дата создания";
$txt['csv_import_button_text'] = "Выберите CSV-файл";
$txt['date'] = "Дата";
$txt['date'] = "Date";
$txt['date_format'] = "Формат даты";
$txt['days'] = "days";
$txt['definition'] = "Описание";
$txt['delete'] = "Удалить";
$txt['deletion'] = "Deletions";
$txt['deletion_title'] = "List of Items deleted";
$txt['del_button'] = "Delete";
$txt['del_function'] = "Удалить роли";
$txt['del_group'] = "Удалить папку";
$txt['description'] = "Описание";
$txt['description'] = "Описание";
$txt['disconnect'] = "Disconnection";
$txt['disconnection'] = "Отсоединение";
$txt['div_dialog_message_title'] = "Информация";
$txt['done'] = "Сделано";
$txt['drag_drop_helper'] = "Drag and drop item";
$txt['duplicate_folder'] = "Разрешить использовать папки с одинаковыми именами";
$txt['duplicate_item'] = "Разрешить использовать элементы с одинаковыми именами";
$txt['email'] = "Email";
$txt['email_altbody_1'] = "Item";
$txt['email_altbody_2'] = "has been created.";
$txt['email_announce'] = "Оповестить об этом объекте по email";
$txt['email_body1'] = "Hi,<br><br>Item '";
$txt['email_body2'] = "has been created.<br /><br />You may view it by clicking <a href='";
$txt['email_body3'] = "'>HERE</a><br /><br />Regards.";
$txt['email_body_on_user_login'] = "Hello,<br><br>User #tp_user# has get connected to TeamPass the #tp_date# at #tp_time#.<br><br>Regards.";
$txt['email_change'] = "Change the account's email";
$txt['email_changed'] = "Email изменен!";
$txt['email_new_user_mail'] = "Hello,<br><br>An administrator has created your account for TeampPass.<br>You can use the next credentials for being logged:<br>- Login: #tp_login#<br>- Password: #tp_pw#<br><br>Click the <a href='#tp_link#'>LINK</a> to access.<br><br>Best regards.";
$txt['email_request_access_mail'] = "Hello #tp_item_author#,<br><br>User #tp_user# has required an access to '#tp_item#'.<br><br>Be sure of the rights of this user before changing the restriction to the Item.<br><br>Regards.";
$txt['email_request_access_subject'] = "[TeamPass] Request an access to item";
$txt['email_select'] = "Select persons to inform";
$txt['email_subject'] = "Creating a new Item in Passwords Manager";
$txt['email_subject_new_user'] = "[TeamPass] Your account creation";
$txt['email_subject_new_user'] = "[TeamPass] Your new account";
$txt['email_subject_on_user_login'] = "[TeamPass] A user has get connected";
$txt['email_text_new_user'] = "Hi,<br /><br />Your account has been created in TeamPass.<br />You can now access $TeamPass_url using the next credentials:<br />";
$txt['enable_favourites'] = "Enable the Users to store Favourites";
$txt['enable_personal_folder'] = "Enable Personal folder";
$txt['enable_personal_folder_feature'] = "Enable Personal folder feature";
$txt['enable_send_email_on_user_login'] = "Send an email to Admins on User log in";
$txt['enable_user_can_create_folders'] = "Users are allowed to manage folders in allowed parent folders";
$txt['encrypt_key'] = "Ключ шифрования резервной копии:";
$txt['errors'] = "ошибки";
$txt['error_complex_not_enought'] = "Сложность пароля не соответствует требуемой!";
$txt['error_confirm'] = "Password confirmation is not correct!";
$txt['error_cpassman_dir'] = "Не указан путь к TeamPass. Укажите правильный путь во вкладке 'Настройки TeamPass' на странице 'Настройки'.";
$txt['error_cpassman_url'] = "Не указан URL к TeamPass. Укажите правильный URL во вкладке 'Настройки TeamPass' на странице 'Настройки'.";
$txt['error_empty_data'] = "No data to proceed!";
$txt['error_fields_2'] = "The 2 fields are mandatory!";
$txt['error_group'] = "A folder is mandatory!";
$txt['error_group_complex'] = "The Folder must have a minimum required passwords complexity level!";
$txt['error_group_exist'] = "Эта папка уже присутствует!";
$txt['error_group_label'] = "The Folder must be named!";
$txt['error_html_codes'] = "Some text contains HTML codes! This is not allowed.";
$txt['error_item_exists'] = "This Item already exists!";
$txt['error_label'] = "A label is mandatory!";
$txt['error_must_enter_all_fields'] = "You must fill in each fields!";
$txt['error_mysql'] = "Ошибка MySQL!";
$txt['error_not_allowed_to'] = "You are not allowed to do that!";
$txt['error_not_authorized'] = "You are not allowed to see this page.";
$txt['error_not_exists'] = "This page doesn't exist.";
$txt['error_no_folders'] = "You should start by creating some folders.";
$txt['error_no_password'] = "Вам нужно ввести свой пароль!";
$txt['error_no_roles'] = "You should also create some roles and associate them to folders.";
$txt['error_no_selected_folder'] = "You need to select a Folder";
$txt['error_password_confirmation'] = "Пароли должны быть одинаковыми";
$txt['error_pw'] = "A password is mandatory!";
$txt['error_pw_too_long'] = "Password is too long! maximum characters is 40.";
$txt['error_renawal_period_not_integer'] = "Период обновления должен указываться в месяцах.";
$txt['error_salt'] = "<b>Ключ шифрования слишком длинный! Ключ шифрования должен быть не длинее 32 символов!";
$txt['error_tags'] = "Не допускается использовать знаки пунтуации в метках! Только пробелы.";
$txt['error_user_exists'] = "Пользователь уже существует";
$txt['expiration_date'] = "Дата окончания срока";
$txt['expir_one_month'] = "1 месяц";
$txt['expir_one_year'] = "1 год";
$txt['expir_six_months'] = "6 месяцев";
$txt['expir_today'] = "сегодня";
$txt['files_&_images'] = "Файлы и картинки";
$txt['find'] = "Поиск";
$txt['find_text'] = "Your search";
$txt['folders'] = "Папки";
$txt['forbidden_groups'] = "Forbidden Folders";
$txt['forgot_my_pw'] = "Забыли пароль?";
$txt['forgot_my_pw_email_sent'] = "Email был отправлен";
$txt['forgot_my_pw_error_email_not_exist'] = "Этот email не существует!";
$txt['forgot_my_pw_text'] = "Ваш пароль будет отправлено по email, связанному с вашей учетной записью.";
$txt['forgot_pw_email_altbody_1'] = "Добрый день, Ваши учетные данные идентификации для TeamPass:";
$txt['forgot_pw_email_body'] = "Hi,<br /><br />Your new password for TeamPass is :";
$txt['forgot_pw_email_body'] = "Hi,<br /><br />Your new password for TeamPass is :";
$txt['forgot_pw_email_body_1'] = "Добрый день, <br /><br />Ваши учетные данные идентификации для TeamPass:<br /><br />";
$txt['forgot_pw_email_subject'] = "[TeamPass] Ваш пароль - шаг 1";
$txt['forgot_pw_email_subject_confirm'] = "[TeamPass] Your password step 2";
$txt['functions'] = "Роли";
$txt['function_alarm_no_group'] = "This role is not associated to any Folder!";
$txt['generate_pdf'] = "Сгенерировать файл PDF";
$txt['generation_options'] = "Generation options";
$txt['gestionnaire'] = "Manager";
$txt['give_function_tip'] = "Добавить новую роль";
$txt['give_function_title'] = "Добавить новую роль";
$txt['give_new_email'] = "Please enter new email for";
$txt['give_new_login'] = "Please select the account";
$txt['give_new_pw'] = "Please indicate the new password for";
$txt['god'] = "Бог";
$txt['group'] = "Папка";
$txt['group_parent'] = "Parent Folder";
$txt['group_pw_duration'] = "Период обновления";
$txt['group_pw_duration_tip'] = "Период обновления пароля, в месяцах. 0 - отключить обновление.";
$txt['group_select'] = "Select folder";
$txt['group_title'] = "Folder label";
$txt['history'] = "История изменений";
$txt['home'] = "Домой";
$txt['home_personal_menu'] = "Личные действия";
$txt['home_personal_saltkey'] = "Ваш личный ключ шифрования";
$txt['home_personal_saltkey_button'] = "Сохранить ключ";
$txt['home_personal_saltkey_info'] = "Если вы хотите использовать личные папки и элементы, то вы должны указать свой личный ключ шифрования.";
$txt['home_personal_saltkey_label'] = "Введите личный ключ шифрования";
$txt['importing_details'] = "Список деталей";
$txt['importing_folders'] = "Импорт папок";
$txt['importing_items'] = "Импорт элементов";
$txt['import_button'] = "Импорт";
$txt['import_csv_anyone_can_modify_in_role_txt'] = "Set \"anyone in the same role can modify\" right on all imported items.";
$txt['import_csv_anyone_can_modify_txt'] = "Set \"anyone can modify\" right on all imported items.";
$txt['import_csv_dialog_info'] = "Информация: импорт должен осуществляться только из файла CSV. Обычно, файл, экспортированный из KeePass, имеет подходящую структуру.<br /> Если вы используете файл, сгенерированный другой программой, имейте ввиду, что структура файла CSV должна быть следующей: `Учетная запись`,`Имя`,`Пароль`,`URL`,`Комментарии`.";
$txt['import_csv_menu_title'] = "Импортировать объекты из файла (CSV/KeePass XML)";
$txt['import_error_no_file'] = "Вы должны выбрать файл!";
$txt['import_error_no_read_possible'] = "Не удалось прочесть файл!";
$txt['import_error_no_read_possible_kp'] = "Не удалось прочесть файл! Вероятно, это не файл KeePass.";
$txt['import_keepass_dialog_info'] = "Информация: импорт должен осуществляться только из файла XML, экспортированным из Keepass. Обратите внимание, что при импорте не будут добавлены папки или элементы, которые уже существуют на том же уровне древовидной структуры.";
$txt['import_keepass_to_folder'] = "Выберите папку";
$txt['import_kp_finished'] = "Импорт из файла KeePass завершен !<br />По умолчанию, уровень сложности для новых папок установлен в `Средний`. Измените его на требуемый в случае необходимости.";
$txt['import_to_folder'] = "Отметьте пункты, которые Вы хотите импортировать в папку:";
$txt['index_add_one_hour'] = "Продлить сессию на 1 час";
$txt['index_alarm'] = "ALARM!!!";
$txt['index_bas_pw'] = "Неверный пароль для этого аккаунта!";
$txt['index_change_pw'] = "Ваш пароль необходимо сменить!";
$txt['index_change_pw'] = "Измените свой пароль";
$txt['index_change_pw_button'] = "Изменение";
$txt['index_change_pw_confirmation'] = "Подтверждение";
$txt['index_expiration_in'] = "окончание сеанса в";
$txt['index_get_identified'] = "Please identify yourself";
$txt['index_identify_button'] = "Войти";
$txt['index_identify_you'] = "Пожалуйста идентифицируйтесь";
$txt['index_last_pw_change'] = "Password changed the";
$txt['index_last_seen'] = "Последнее подключение было";
$txt['index_login'] = "Аккаунт";
$txt['index_maintenance_mode'] = "Активирован режим обслуживания. Могут войти только администраторы.";
$txt['index_maintenance_mode_admin'] = "Активирован режим обслуживания. Пользователи не могут пользоваться TeamPass.";
$txt['index_new_pw'] = "Новый пароль";
$txt['index_password'] = "Пароль";
$txt['index_pw_error_identical'] = "Пароли должны быть идентичны!";
$txt['index_pw_expiration'] = "Actual password expiration in";
$txt['index_pw_level_txt'] = "Сложность";
$txt['index_refresh_page'] = "Обновить страницу";
$txt['index_session_duration'] = "Продолжительность сессии";
$txt['index_session_ending'] = "Ваша сессия закончится менее чем через 1 минуту";
$txt['index_session_expired'] = "Ваша сессия истекла или вы не неверно идентифицированы!";
$txt['index_welcome'] = "Welcome";
$txt['info'] = "Information";
$txt['info_click_to_edit'] = "Click on a cell to edit its value";
$txt['is_admin'] = "Is Admin";
$txt['is_manager'] = "Is Manager";
$txt['is_read_only'] = "Is Read Only";
$txt['items_browser_title'] = "Папки";
$txt['item_copy_to_folder'] = "Please select a folder in which the item has to be copied.";
$txt['item_menu_add_elem'] = "Добавить объект";
$txt['item_menu_add_rep'] = "Добавить папку";
$txt['item_menu_add_to_fav'] = "Добавить в избранное";
$txt['item_menu_collab_disable'] = "Редактирование запрещено";
$txt['item_menu_collab_enable'] = "Редактирование разрешено";
$txt['item_menu_copy_elem'] = "Копировать объект";
$txt['item_menu_copy_login'] = "Скопировать логин";
$txt['item_menu_copy_pw'] = "Скопировать пароль";
$txt['item_menu_del_elem'] = "Удалить объект";
$txt['item_menu_del_from_fav'] = "Удалить из избранного";
$txt['item_menu_del_rep'] = "Удалить папку";
$txt['item_menu_edi_elem'] = "Редактировать объект";
$txt['item_menu_edi_rep'] = "Редактировать папку";
$txt['item_menu_find'] = "Search";
$txt['item_menu_mask_pw'] = "Mask password";
$txt['item_menu_refresh'] = "Обновить страницу";
$txt['kbs'] = "KBs";
$txt['kb_menu'] = "База знаний";
$txt['keepass_import_button_text'] = "Выберите XML-файл";
$txt['label'] = "Label";
$txt['last_items_icon_title'] = "Показать/скрыть последние просмотренные объекты";
$txt['last_items_title'] = "Last items seen";
$txt['ldap_extension_not_loaded'] = "The LDAP extension is not activated on the server.";
$txt['level'] = "Level";
$txt['link_copy'] = "Скопировать ссылку на этот элемент в буфер обмена";
$txt['link_is_copied'] = "Ссылку на этот элемент была скопирована в буфер обмена.";
$txt['login'] = "Login (if needed)";
$txt['login_attempts_on'] = " login attempts on ";
$txt['login_copied_clipboard'] = "Имя скопировано в буфер обмена";
$txt['login_copy'] = "Copy account to clipboard";
$txt['logs'] = "Logs";
$txt['logs_1'] = "Generate the log file for the passwords renewal done the";
$txt['logs_passwords'] = "Generate Passwords Log";
$txt['maj'] = "Uppercase letters";
$txt['mask_pw'] = "Скрыть/показать пароль";
$txt['max_last_items'] = "Maximum number of last items seen by user (default is 10)";
$txt['menu_title_new_personal_saltkey'] = "Changing your Personal Saltkey";
$txt['minutes'] = "минут";
$txt['modify_button'] = "Modify";
$txt['my_favourites'] = "Избранное";
$txt['name'] = "Name";
$txt['nb_false_login_attempts'] = "Number of false login attempts before account is disabled (0 to disable)";
$txt['nb_folders'] = "Число папок";
$txt['nb_items'] = "Число элементов";
$txt['nb_items_by_page'] = "Number of items by page";
$txt['nb_items_by_query'] = "Number of items to get at each query iterration";
$txt['nb_items_by_query_tip'] = "<span style='font-size:11px;max-width:300px;'>More items means more time to display the list.<br />Set to 'auto' to let the tool to adapt this number depending on the size screen of the user.<br />Set to 'max' to force to display the complet list in one time.<br />Set a number corresding to the number of items to get at each query iterration.</span>";
$txt['new_label'] = "New label";
$txt['new_role_title'] = "Новое название";
$txt['new_saltkey'] = "New Saltkey";
$txt['new_saltkey_warning'] = "Please be sure to use the original SaltKey, otherwize the new encryption will be corrupted. Before doing any change, please test your actual SaltKey!";
$txt['new_saltkey_warning_lost'] = "You have lost your saltkey? What a pitty, this one can't be recovered, so please be sure before continuing.<br>By reseting your saltkey, all your previous personal items will be deleted!";
$txt['new_user_title'] = "Добавить нового пользователя";
$txt['no'] = "Нет";
$txt['nom'] = "Name";
$txt['none'] = "Нет";
$txt['none_selected_text'] = "Ничего не выбрано";
$txt['not_allowed_to_see_pw'] = "You are not allowed to see that Item!";
$txt['not_allowed_to_see_pw_is_expired'] = "Этот элемент устарел!";
$txt['not_defined'] = "Not defined";
$txt['no_last_items'] = "No items seen";
$txt['no_previous_pw'] = "No previous password";
$txt['no_restriction'] = "Без ограничений";
$txt['numbers'] = "Numbers";
$txt['number_of_used_pw'] = "Число новых паролей пользователя, которые надо использовать прежде чем можно будет снова использовать старый пароль.";
$txt['ok'] = "OK";
$txt['open_url_link'] = "Open in new page";
$txt['pages'] = "Страниц";
$txt['pdf_del_date'] = "PDF generated the";
$txt['pdf_del_title'] = "Passwords renewal follow-up";
$txt['pdf_download'] = "Download file";
$txt['personal_folder'] = "Личная папка";
$txt['personal_saltkey_change_button'] = "Change it!";
$txt['personal_saltkey_lost'] = "I've lost it";
$txt['personal_salt_key'] = "Your personal salt key";
$txt['personal_salt_key_empty'] = "Personal salt key has not been entered!";
$txt['personal_salt_key_info'] = "This salt key will be used to encrypt and decrypt your passwords.<br />It is not stored in database, you are the only person who knows it.<br />So don't loose it!";
$txt['please_update'] = "Please update the tool!";
$txt['previous_pw'] = "Previous passwords used:";
$txt['print'] = "Печать";
$txt['print_out_menu_title'] = "Распечатать список ваших элементов";
$txt['print_out_pdf_title'] = "TeamPass - Список экспортированных элементов";
$txt['print_out_warning'] = "Все пароли и все конфиденциальные данные будут записаны в этот файл без какого-либо шифрования! Записав файл, содержащий незашифрованные элементы и пароли, вы берете на себя полную ответственность дальнейшей защиты этого списка!";
$txt['pw'] = "Пароль";
$txt['pw_change'] = "Change the account's password";
$txt['pw_changed'] = "Пароль изменен!";
$txt['pw_copied_clipboard'] = "Password copied to clipboard";
$txt['pw_copy_clipboard'] = "Copy password to clipboard";
$txt['pw_encryption_error'] = "Error encryption of the password!";
$txt['pw_generate'] = "Генерировать";
$txt['pw_is_expired_-_update_it'] = "Этот объект устарел! Вы должны сменить его пароль.";
$txt['pw_life_duration'] = "Время устаревания пользовательского пароля в днях (0 - никогда)";
$txt['pw_recovery_asked'] = "You have asked for a password recovery";
$txt['pw_recovery_button'] = "Send me my new password";
$txt['pw_recovery_info'] = "By clicking on the next button, you will receive an email that contains the new password for your account.";
$txt['pw_used'] = "This password has already been used!";
$txt['readme_open'] = "Смотреть файл полностью";
$txt['read_only_account'] = "Read Only";
$txt['refresh_matrix'] = "Обновить матрицу";
$txt['renewal_menu'] = "Устаревающие элементы";
$txt['renewal_needed_pdf_title'] = "Список элементов, которые необходимо продлить";
$txt['renewal_selection_text'] = "Список элементов, которые устаревают:";
$txt['request_access_ot_item'] = "Request an access to author";
$txt['restore'] = "Восстановление";
$txt['restore'] = "Restore";
$txt['restricted_to'] = "Restricted to";
$txt['restricted_to_roles'] = "Allow to restrict items to Users and Roles";
$txt['rights_matrix'] = "Матрица прав пользователей";
$txt['roles'] = "Роли";
$txt['role_cannot_modify_all_seen_items'] = "Set this role not allowed to modify all accessible items (normal setting)";
$txt['role_can_modify_all_seen_items'] = "Set this role allowed to modify all accessible items (not secure setting)";
$txt['root'] = "Root";
$txt['save_button'] = "Save";
$txt['secure'] = "Спецсимволы";
$txt['see_logs'] = "See Logs";
$txt['select'] = "select";
$txt['select_folders'] = "Выберите папки";
$txt['select_language'] = "Выберите язык";
$txt['send'] = "Отправить";
$txt['settings_anyone_can_modify'] = "Добавить для каждого элемета опцию, позволяющую любому пользователю изменять этот элемент";
$txt['settings_anyone_can_modify_tip'] = "<span style='font-size:11px;max-width:300px;'>Когда опция активна, становится доступен флажок в окне редактирования элемента, который позволяет создателю элемента разрешить любому пользователю изменение данного элемента.</span>";
$txt['settings_default_language'] = "Define the Default Language";
$txt['settings_kb'] = "Включить Базу Знаний (beta)";
$txt['settings_kb_tip'] = "<span style=\"font-size:11px;max-width:300px;\">Когда опция активна, появится страница, на которой можно создать свою базу знаний.</span>";
$txt['settings_ldap_domain'] = "Суффикс LDAP учетной записи вашего домена";
$txt['settings_ldap_domain_controler'] = "Массив LDAP контроллеров домена";
$txt['settings_ldap_domain_controler_tip'] = "<span style='font-size:11px;max-width:300px;'>Укажите несколько контроллеров, если вы хотите, чтобы сбалансировать LDAP запросы между несколькими серверами.<br />Необходимо разграничить домены запятой ( , )!<br />Например: домен_1,домен_2,домен_3</span>";
$txt['settings_ldap_domain_dn'] = "LDAP Base DN вашего домена";
$txt['settings_ldap_mode'] = "Включить аутентификацию пользователей через сервер LDAP";
$txt['settings_ldap_mode_tip'] = "Включите, только если у вас есть сервер LDAP и если вы хотите использовать его для аутентификации пользователей TeamPass через него.";
$txt['settings_ldap_ssl'] = "Использовать LDAP через SSL (LDAPS)";
$txt['settings_ldap_tls'] = "Использовать LDAP поверх TLS";
$txt['settings_log_accessed'] = "Enable loggin who accessed the items";
$txt['settings_log_connections'] = "Включить протоколирование подключений пользователей к базе данных";
$txt['settings_maintenance_mode'] = "Перевести TeamPass в режим обслуживания";
$txt['settings_maintenance_mode_tip'] = "В этом режиме могут подключиться только Администраторы.";
$txt['settings_manager_edit'] = "Менеджеры могут редактировать и удалять элементы, которые они могут видеть";
$txt['settings_printing'] = "Разрешить экспорт в PDF-файл";
$txt['settings_printing_tip'] = "Когда опция активна, на домашней странице пользователей появится кнопка, которая позволить экспортировать в PDF-файл элементы, которые он может видеть. Обратите внимание, что пароли будут сохранены в незашифрованном виде!";
$txt['settings_restricted_to'] = "Enable Restricted To functionality on Items";
$txt['settings_richtext'] = "Разрешить форматирование текста в описании элемента";
$txt['settings_richtext_tip'] = "<span style='font-size:11px;max-width:300px;'>Разрешает использование BB-кода в поле описания элемента.</span>";
$txt['settings_send_stats'] = "Отправлять ежемесячную статистику использования программы ее автору для лучшего понимания вашего использования TeamPass";
$txt['settings_send_stats_tip'] = "Эти статистические данные являются полностью анонимными!<br> Не передаются IP-адрес, передается только следующие данные: количество элементов, папок, пользователей, версия TeamPass, включены ли личные папки, включен ли LDAP.<br>Большое спасибо, если Вы включите отправку статистических данных. Благодаря этому вы поможете дальнейшему развитию TeamPass.";
$txt['settings_show_description'] = "Show Description in list of Items";
$txt['show'] = "Показать";
$txt['show_help'] = "Помощь";
$txt['show_last_items'] = "Show last items block on main page";
$txt['size'] = "Длина";
$txt['start_upload'] = "Начать загрузку файлов";
$txt['sub_group_of'] = "Dependent on";
$txt['support_page'] = "For any support, please use the <a href='https://github.com/nilsteampassnet/TeamPass/issues' target='_blank'><u>Forum</u></a>.";
$txt['symbols'] = "Symbols";
$txt['tags'] = "Метки";
$txt['thku'] = "Спасибо за использование TeamPass!";
$txt['timezone_selection'] = "Timezone selection";
$txt['time_format'] = "Формат времени";
$txt['uncheck_all_text'] = "Снять все";
$txt['unlock_user'] = "Пользователь заблокирован. Разблокировать этот аккаунт?";
$txt['update_needed_mode_admin'] = "Рекомендуется обновить вашу инсталляцию TeamPass. Для обновления кликнить <a href='install/upgrade.php'>сюда</a>";
$txt['uploaded_files'] = "Существующие файлы";
$txt['upload_button_text'] = "...";
$txt['upload_files'] = "Загрузить новые файлы";
$txt['url'] = "URL";
$txt['url_copied'] = "URL был скопирован в буфер обмена!";
$txt['used_pw'] = "Used password";
$txt['user'] = "Пользователь";
$txt['users'] = "Пользователи";
$txt['users_online'] = "users online";
$txt['user_action'] = "Action on a user";
$txt['user_alarm_no_function'] = "У этого пользователя нет ролей!";
$txt['user_del'] = "Удалить аккаунт";
$txt['user_lock'] = "Lock user";
$txt['version'] = "Текущая версия";
$txt['views_confirm_items_deletion'] = "Вы действительно хотите удалить выбранные объекты из базы данных?";
$txt['views_confirm_restoration'] = "Пожалуйста подтвердите восстановление этого объекта";
$txt['visibility'] = "Видимость";
$txt['warning_screen_height'] = "WARNING: screen height is not enough for displaying items list!";
$txt['yes'] = "Да";
$txt['your_version'] = "Ваша версия";
?>
