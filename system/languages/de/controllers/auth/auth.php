<?php

    define('LANG_AUTH_CONTROLLER',          'Registrierung und Anmeldung');

    define('LANG_AUTHORIZATION',            'Anmeldung');

    define('LANG_AUTH_RESTRICTIONS',            'Beschränkungen und Sperren');
    define('LANG_AUTH_RESTRICTED_EMAILS',       'Zensierte E-Mail-Adresse');
    define('LANG_AUTH_RESTRICTED_EMAILS_HINT',  'Один адрес на строке, можно использовать символ * для подстановки любого значения');
    define('LANG_AUTH_RESTRICTED_EMAIL',        'Du hast keine Erlaubnis die E-Mail-Adresse <b>%s</b> zu verwenden');

    define('LANG_AUTH_RESTRICTED_NAMES',        'Zensierte Spitznamen');
    define('LANG_AUTH_RESTRICTED_NAMES_HINT',   'Один никнейм на строке, можно использовать символ * для подстановки любого значения');
    define('LANG_AUTH_RESTRICTED_NAME',         'Du hast keine Erlaubnis der Spitzname <b>%s</b> zu verwenden');

    define('LANG_AUTH_RESTRICTED_IPS',          'Запрещенные IP-адреса для регистрации');
    define('LANG_AUTH_RESTRICTED_IPS_HINT',     'Один адрес на строке, можно использовать символ * для подстановки любого значения');
    define('LANG_AUTH_RESTRICTED_IP',           'Du kannst dich leider nicht mit der IP-Adresse <b>%s</b> registrieren');

    define('LANG_AUTH_INVITES',                 'Einladungen');
    define('LANG_AUTH_INVITES_AUTO',            'Выдавать приглашения зарегистрированным пользователям');
    define('LANG_AUTH_INVITES_AUTO_HINT',       'Пользователи смогут отправлять приглашения своим знакомым');
    define('LANG_AUTH_INVITES_STRICT',          'Привязывать приглашение к e-mail');
    define('LANG_AUTH_INVITES_STRICT_HINT',     'Если включено, зарегистрироваться по коду приглашения можно будет только с тем e-mail, на который этот код был отправлен');
    define('LANG_AUTH_INVITES_PERIOD',          'Einladungen einmal der Zeitraum ausstellen');
    define('LANG_AUTH_INVITES_QTY',             'Сколько приглашений выдавать');
    define('LANG_AUTH_INVITES_KARMA',           'Выдавать приглашения только пользователям с репутацией выше');
    define('LANG_AUTH_INVITES_RATING',          'Выдавать приглашения только пользователям с рейтингом выше');
    define('LANG_AUTH_INVITES_DATE',            'Выдавать приглашения только пользователям находящимся на сайте не менее');

    define('LANG_REG_INVITED_ONLY',             'Регистрация производится только по приглашениям');
    define('LANG_REG_INVITE_CODE',              'Einladungscode');
    define('LANG_REG_WRONG_INVITE_CODE',        'Einladungscode ist nicht korrekt');
    define('LANG_REG_WRONG_INVITE_CODE_EMAIL',  'Код приглашения предназначен для другого e-mail');

    define('LANG_REG_CFG_IS_ENABLED',           'Registrierung ist aktiviert');
    define('LANG_REG_CFG_DISABLED_NOTICE',      'Grund für das Deaktivieren der Registrierung');
    define('LANG_REG_CFG_IS_INVITES',           'Регистрация только по приглашениям');

    define('LANG_REG_CFG_REG_CAPTCHA',          'Показывать капчу для защиты от спамовых регистраций');
    define('LANG_REG_CFG_AUTH_CAPTCHA',         'Показывать капчу после неудачной авторизации');
    define('LANG_REG_CFG_FIRST_AUTH_REDIRECT',  'Bei der ersten Anmeldung');
    define('LANG_REG_CFG_AUTH_REDIRECT',        'Bei zukünftigen Anmeldungen');
    define('LANG_REG_CFG_AUTH_REDIRECT_NONE',        'Оставаться на странице, с которой авторизовались');
    define('LANG_REG_CFG_AUTH_REDIRECT_INDEX',       'Startseite öffnen');
    define('LANG_REG_CFG_AUTH_REDIRECT_PROFILE',     'Profil öffnen');
    define('LANG_REG_CFG_AUTH_REDIRECT_PROFILEEDIT', 'Profileinstellungen öffnen');

    define('LANG_REG_CFG_VERIFY_EMAIL',         'Eine E-Mail-Bestätigung notwendig, wenn sich ein Benutzer registriert');
    define('LANG_REG_CFG_VERIFY_EMAIL_HINT',    'После регистрации пользователь блокируется до перехода по ссылке из полученного письма');
	define('LANG_REG_CFG_REG_AUTO_AUTH',        'Nach Registrierung einloggen');
    define('LANG_REG_CFG_VERIFY_EXPIRATION',   'Unbestätigte Benutzer-Kontos werden gelöscht in, Stunden ');
    define('LANG_REG_CFG_VERIFY_LOCK_REASON',  'Bestätigung der E-Mail-Adresse erforderlich ist');
    define('LANG_REG_CFG_DEF_GROUP_ID',		   'Neue Benutzer zu Gruppen hinzufügen');

    define('LANG_REG_INCORRECT_EMAIL',       'Ungültige E-Mail-Adresse');
    define('LANG_REG_EMAIL_EXISTS',          'Diese E-Mail-Adresse ist bereits registriert');
    define('LANG_REG_PASS_NOT_EQUAL',        'Passwörter stimmen nicht überein');
    define('LANG_REG_PASS_EMPTY',            'Passwort muss angegeben werden');
    define('LANG_REG_SUCCESS',               'Registrierung erfolgreich');
    define('LANG_REG_SUCCESS_NEED_VERIFY',   'Eine E-Mail wurde an die Adresse <b>%s</b> versandt. Um deine Konto zu aktivieren, klicke bitte auf den Link in der E-Mail');
    define('LANG_REG_SUCCESS_VERIFIED',      'E-Mail-Adresse ist bestätigt. Du kannst dich auf der Seite anmelden');
	define('LANG_REG_SUCCESS_VERIFIED_AND_AUTH', 'E-Mail-Adresse ist bestätigt. Willkommen!');

    define('LANG_VERIFY_EMAIL_ERROR',        'Falscher Bestätigungscode für diese Anmeldung, vielleicht, der Benutzer ist bereits aktiviert oder Aktivierungszeit ist abgelaufen');
    define('LANG_VERIFY_EMAIL_CODE',         'Bestätigungscode der Registrierung');
    define('LANG_PROCESS_VERIFY_EMAIL',      'Bestätigung der Registrierung');
    define('LANG_RESTORE_TOKEN_EXPIRED',     'Eine Abfrage zum Zurücksetzen des Passworts ist abgelaufen');
    define('LANG_RESTORE_TOKEN_IS_SEND',     'Eine Anleitung zum Zurücksetzen des Passworts wurde gesendet, überprüfe den Spam-Ordner');
    define('LANG_RESTORE_BLOCK',             'Konto gesperrt');
    define('LANG_PASS_RESTORE',              'Passwort zurücksetzen');
    define('LANG_EMAIL_NOT_FOUND',           'Diese E-Mail-Adresse nicht gefunden in unserer Datenbank');
    define('LANG_TOKEN_SENDED',              'Anweisungen, wie Sie Ihr Passwort zurücksetzen können, wurden an die eingegebene E-Mail-Adresse verschickt');
    define('LANG_RESTORE_NOTICE',            'Bitte geben Sie bei der Registrierung eingegebene E-Mail-Adresse.<br/>Anweisungen, wie Sie Ihr Passwort zurücksetzen können, wurden an die eingegebene E-Mail-Adresse verschickt.');