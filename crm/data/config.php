<?php
return [
  'cacheTimestamp' => 1716190885,
  'database' => [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => '',
    'charset' => 'utf8mb4',
    'dbname' => 'gorshoch_espo177',
    'user' => 'gorshoch_espo177',
    'password' => '3SR]478Pp.'
  ],
  'useCache' => true,
  'recordsPerPage' => 200,
  'recordsPerPageSmall' => 100,
  'applicationName' => 'EspoCRM',
  'version' => '6.1.10',
  'timeZone' => 'Europe/Minsk',
  'dateFormat' => 'YYYY-MM-DD',
  'timeFormat' => 'HH:mm',
  'weekStart' => 1,
  'thousandSeparator' => ',',
  'decimalMark' => '.',
  'exportDelimiter' => ';',
  'currencyList' => [
    0 => 'BYN'
  ],
  'defaultCurrency' => 'BYN',
  'baseCurrency' => 'BYN',
  'currencyRates' => [
    'USD' => 2
  ],
  'outboundEmailIsShared' => true,
  'outboundEmailFromName' => 'Вероника',
  'outboundEmailFromAddress' => 'gorshochek2020@gmail.com',
  'smtpServer' => 'smtp.gmail.com',
  'smtpPort' => 465,
  'smtpAuth' => true,
  'smtpSecurity' => 'SSL',
  'smtpUsername' => 'gorshochek2020',
  'smtpPassword' => 'kzff ftlq qtms rtwl',
  'language' => 'ru_RU',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30
  ],
  'authenticationMethod' => 'Espo',
  'globalSearchEntityList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity'
  ],
  'tabList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Case',
    5 => 'Email',
    6 => 'Calendar',
    7 => 'Meeting',
    8 => 'Call',
    9 => 'Task',
    10 => 'Document',
    11 => 'Campaign',
    12 => 'KnowledgeBaseArticle',
    13 => 'Stream',
    14 => 'User',
    15 => 'Team',
    16 => 'Import',
    17 => 'PortalUser',
    18 => 'TargetList',
    19 => 'Template',
    20 => 'EmailTemplate'
  ],
  'quickCreateList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Meeting',
    5 => 'Call',
    6 => 'Task',
    7 => 'Case',
    8 => 'Email',
    9 => 'Document',
    10 => 'Campaign',
    11 => 'User',
    12 => 'TargetList',
    13 => 'KnowledgeBaseArticle'
  ],
  'exportDisabled' => false,
  'adminNotifications' => true,
  'adminNotificationsNewVersion' => true,
  'adminNotificationsCronIsNotConfigured' => true,
  'adminNotificationsNewExtensionVersion' => true,
  'assignmentEmailNotifications' => true,
  'assignmentEmailNotificationsEntityList' => [
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case'
  ],
  'assignmentNotificationsEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task',
    3 => 'Email'
  ],
  'portalStreamEmailNotifications' => true,
  'streamEmailNotificationsEntityList' => [
    0 => 'Case',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Lead',
    4 => 'Contact',
    5 => 'Account'
  ],
  'streamEmailNotificationsTypeList' => [
    0 => 'Post',
    1 => 'Status',
    2 => 'EmailReceived'
  ],
  'emailNotificationsDelay' => 30,
  'emailMessageMaxSize' => 10,
  'notificationsCheckInterval' => 10,
  'maxEmailAccountCount' => 2,
  'followCreatedEntities' => true,
  'b2cMode' => false,
  'restrictedMode' => false,
  'theme' => 'HazyblueVertical',
  'massEmailMaxPerHourCount' => 100,
  'massEmailVerp' => false,
  'personalEmailMaxPortionSize' => 50,
  'inboundEmailMaxPortionSize' => 50,
  'authTokenLifetime' => 0,
  'authTokenMaxIdleTime' => 120,
  'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
  'addressFormat' => 4,
  'displayListViewRecordCount' => true,
  'dashboardLayout' => [
    0 => (object) [
      'name' => 'My Espo',
      'layout' => [
        0 => (object) [
          'id' => 'default-activities',
          'name' => 'Activities',
          'x' => 2,
          'y' => 2,
          'width' => 2,
          'height' => 4
        ],
        1 => (object) [
          'id' => 'default-stream',
          'name' => 'Stream',
          'x' => 0,
          'y' => 0,
          'width' => 2,
          'height' => 4
        ]
      ]
    ]
  ],
  'calendarEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task'
  ],
  'activitiesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'historyEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Email'
  ],
  'cleanupJobPeriod' => '1 month',
  'cleanupActionHistoryPeriod' => '15 days',
  'cleanupAuthTokenPeriod' => '1 month',
  'currencyFormat' => 1,
  'currencyDecimalPlaces' => 2,
  'aclStrictMode' => true,
  'aclAllowDeleteCreated' => false,
  'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
  'inlineAttachmentUploadMaxSize' => 20,
  'textFilterUseContainsForVarchar' => false,
  'tabColorsDisabled' => false,
  'massPrintPdfMaxCount' => 50,
  'emailKeepParentTeamsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailWithContentEntityTypeList' => [
    0 => 'Case'
  ],
  'recordListMaxSizeLimit' => 200,
  'noteDeleteThresholdPeriod' => '1 month',
  'noteEditThresholdPeriod' => '7 days',
  'emailForceUseExternalClient' => false,
  'useWebSocket' => false,
  'auth2FAMethodList' => [
    0 => 'Totp'
  ],
  'personNameFormat' => 'firstLast',
  'newNotificationCountInTitle' => true,
  'isInstalled' => true,
  'siteUrl' => 'https://lyasne.by/crm',
  'passwordSalt' => '6b417d0cb5cfab5f',
  'cryptKey' => '25931aa42c5c73cf4afddf973a9351ca',
  'hashSecretKey' => '5755d2eb040a5d07b3c93f380639982b',
  'defaultPermissions' => [
    'user' => 2655,
    'group' => 2655
  ],
  'fullTextSearchMinLength' => 4,
  'actualDatabaseType' => 'mysql',
  'actualDatabaseVersion' => '5.7.42',
  'outboundEmailBccAddress' => NULL,
  'massEmailDisableMandatoryOptOutLink' => false,
  'massEmailOpenTracking' => false,
  'latestVersion' => '7.4.6',
  'maintenanceMode' => false,
  'cronDisabled' => false,
  'emailAddressIsOptedOutByDefault' => false,
  'cleanupDeletedRecords' => false,
  'addressCountryList' => [],
  'addressCityList' => [],
  'addressStateList' => [],
  'fiscalYearShift' => 0,
  'streamEmailNotifications' => true,
  'mentionEmailNotifications' => true,
  'avatarsDisabled' => false,
  'scopeColorsDisabled' => false,
  'tabIconsDisabled' => false,
  'userThemesDisabled' => false,
  'dashletsOptions' => (object) [
    'default-stream' => (object) [
      'title' => 'Лента',
      'autorefreshInterval' => 1,
      'displayRecords' => 20,
      'skipOwn' => true
    ]
  ],
  'busyRangesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'emailAddressLookupEntityTypeList' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'microtime' => 1716190885.706502,
  'companyLogoId' => '647b507e90b57ea16',
  'companyLogoName' => 'kandinsky-download-1685803119070.png',
  'pdfEngine' => 'Tcpdf'
];
