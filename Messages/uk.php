<?php
return [
    /**
 * Copyright (C) MIKO LLC - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Nikolay Beketov, 6 2018
 *
 */
    'repModuleGetSsl' => 'Автоматичний SSL - %repesent%',
    'mo_ModuleModuleGetSsl' => 'Автоматичний SSL',
    'BreadcrumbModuleGetSsl' => 'Автоматичний SSL',
    'SubHeaderModuleGetSsl' => 'Автоматичне отримання та оновлення SSL-сертифікатів',
    'module_getssl_DomainNameLabel' => 'Ім'я домену без http та https, тільки назва',
    'module_getssl_autoUpdateLabel' => 'Оновлювати сертифікат автоматично',
    'module_getssl_getUpdateSSLButton' => 'Отримати/оновити SSL-сертифікат',
    'module_getssl_DomainNameEmpty' => 'Введіть значення домену для створення сертифіката',
    'module_getssl_IpAddressCertificateWarning' => 'Сертифікати Let’s Encrypt для IP-адрес дійсні близько 6 днів. Модуль оновлюватиме цей сертифікат частіше.',
    'module_getssl_IncludeIpAddressLabel' => 'Додати публічну IP-адресу до сертифіката',
    'module_getssl_PublicIpAddressLabel' => 'Публічна IP-адреса',
    'module_getssl_PublicIpAddressInvalid' => 'Введіть коректну публічну адресу IPv4 або IPv6',
    'module_getssl_DomainAndIpCertificateWarning' => 'Сертифікат охоплюватиме домен і вказану IP-адресу. Він дійсний близько 6 днів, тому автоматичне оновлення виконуватиметься частіше.',
    'module_getssl_getUpdateLogHeader' => 'Результат запиту сертифіката в Let's Encrypt',
    'module_getssl_ConfigStartsGenerating' => 'Генеруємо конфігураційні файли...',
    'module_getssl_ConfigGenerated' => 'Конфігураційні файли створено...',
    'module_getssl_GetSSLProcessing' => 'Виконується запит даних у Let's Encrypt...',
    'module_getssl_GetSSLProcessingTimeout' => 'Помилка: сервіс Let's Encrypt не відповів протягом 2 хвилин',
    'module_getssl_ViewFullLogLink' => 'Переглянути повний журнал у системній діагностиці',
    'module_getssl_ChallengeTypeLabel' => 'Спосіб перевірки',
    'module_getssl_HttpChallengeInfo' => 'HTTP-01: сервер має бути доступний з інтернету на порту 80. Порт буде тимчасово відкрито на час перевірки.',
    'module_getssl_DnsProviderLabel' => 'DNS-провайдер',
    'module_getssl_DnsProviderEmpty' => 'Виберіть DNS-провайдера для перевірки DNS-01',
    'module_getssl_DnsCredentialsEmpty' => 'Заповніть усі обов'язкові облікові дані DNS-провайдера',
    'module_getssl_DnsChallengeInfo' => 'DNS-01: сертифікат видається через API вашого DNS-провайдера. Порт 80 не потрібен. Підтримуються wildcard-сертифікати (*.domain.com).',
];
