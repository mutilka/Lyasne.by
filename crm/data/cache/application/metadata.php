<?php
return [
  'app' => [
    'acl' => [
      'mandatory' => [
        'scopeLevel' => [
          'Note' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'Portal' => [
            'read' => 'all',
            'edit' => 'no',
            'delete' => 'no',
            'create' => 'no'
          ],
          'Attachment' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'EmailAccount' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'EmailFilter' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'EmailFolder' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'Preferences' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'no',
            'create' => 'no'
          ],
          'Notification' => [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'own',
            'create' => 'no'
          ],
          'ActionHistoryRecord' => [
            'read' => 'no',
            'edit' => 'no',
            'delete' => 'no',
            'create' => 'no'
          ],
          'Role' => false,
          'PortalRole' => false,
          'MassEmail' => 'Campaign',
          'CampaignLogRecord' => 'Campaign',
          'CampaignTrackingUrl' => 'Campaign',
          'EmailQueueItem' => 'Campaign'
        ],
        'fieldLevel' => [],
        'scopeFieldLevel' => [
          'Attachment' => [
            'parent' => false
          ],
          'EmailFolder' => [
            'assignedUser' => [
              'read' => 'yes',
              'edit' => 'no'
            ]
          ],
          'Email' => [
            'inboundEmails' => false,
            'emailAccounts' => false
          ],
          'User' => [
            'dashboardTemplate' => false,
            'password' => false,
            'passwordConfirm' => false,
            'auth2FA' => false,
            'authMethod' => false,
            'apiKey' => false,
            'secretKey' => false,
            'token' => false
          ]
        ]
      ],
      'default' => [
        'scopeLevel' => [
          'User' => [
            'read' => 'all',
            'edit' => 'no'
          ],
          'Import' => false,
          'Webhook' => false
        ],
        'fieldLevel' => [],
        'scopeFieldLevel' => [
          'User' => [
            'gender' => false
          ]
        ]
      ],
      'strictDefault' => [
        'scopeLevel' => [
          'User' => [
            'read' => 'own',
            'edit' => 'no'
          ],
          'Team' => [
            'read' => 'team'
          ],
          'Import' => false,
          'Webhook' => false
        ],
        'fieldLevel' => [],
        'scopeFieldLevel' => [
          'User' => [
            'gender' => false
          ]
        ]
      ],
      'valuePermissionList' => [
        0 => 'assignmentPermission',
        1 => 'userPermission',
        2 => 'portalPermission',
        3 => 'groupEmailAccountPermission',
        4 => 'exportPermission',
        5 => 'massUpdatePermission',
        6 => 'dataPrivacyPermission'
      ],
      'valuePermissionHighestLevels' => [
        'assignmentPermission' => 'all',
        'userPermission' => 'all',
        'portalPermission' => 'yes',
        'groupEmailAccountPermission' => 'all',
        'exportPermission' => 'yes',
        'massUpdatePermission' => 'yes',
        'dataPrivacyPermission' => 'yes'
      ],
      'permissionsDefaults' => [
        'assignmentPermission' => 'all',
        'userPermission' => 'all',
        'portalPermission' => 'no',
        'groupEmailAccountPermission' => 'no',
        'exportPermission' => 'yes',
        'massUpdatePermission' => 'yes',
        'dataPrivacyPermission' => 'no'
      ],
      'permissionsStrictDefaults' => [
        'assignmentPermission' => 'no',
        'userPermission' => 'no',
        'portalPermission' => 'no',
        'groupEmailAccountPermission' => 'no',
        'exportPermission' => 'no',
        'massUpdatePermission' => 'no',
        'dataPrivacyPermission' => 'no'
      ],
      'scopeLevelTypesDefaults' => [
        'boolean' => true,
        'record' => [
          'read' => 'all',
          'stream' => 'all',
          'edit' => 'all',
          'delete' => 'no',
          'create' => 'yes'
        ]
      ],
      'scopeLevelTypesStrictDefaults' => [
        'boolean' => false,
        'record' => false
      ]
    ],
    'aclPortal' => [
      'mandatory' => [
        'scopeLevel' => [
          'User' => [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'no',
            'stream' => 'no',
            'create' => 'no'
          ],
          'Team' => false,
          'Note' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'Notification' => [
            'read' => 'own',
            'edit' => 'no',
            'delete' => 'own',
            'create' => 'no'
          ],
          'Portal' => false,
          'Attachment' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'own',
            'create' => 'yes'
          ],
          'EmailAccount' => false,
          'ExternalAccount' => false,
          'Role' => false,
          'PortalRole' => false,
          'EmailFilter' => false,
          'EmailFolder' => false,
          'EmailTemplate' => false,
          'ActionHistoryRecord' => false,
          'Preferences' => [
            'read' => 'own',
            'edit' => 'own',
            'delete' => 'no',
            'create' => 'no'
          ],
          'MassEmail' => 'Campaign',
          'CampaignLogRecord' => 'Campaign',
          'CampaignTrackingUrl' => 'Campaign',
          'EmailQueueItem' => false
        ],
        'fieldLevel' => [],
        'scopeFieldLevel' => [
          'Preferences' => [
            'smtpServer' => false,
            'smtpPort' => false,
            'smtpSecurity' => false,
            'smtpUsername' => false,
            'smtpPassword' => false,
            'smtpAuth' => false,
            'receiveAssignmentEmailNotifications' => false,
            'receiveMentionEmailNotifications' => false,
            'defaultReminders' => false,
            'autoFollowEntityTypeList' => false,
            'emailReplyForceHtml' => false,
            'emailReplyToAllByDefault' => false,
            'signature' => false,
            'followCreatedEntities' => false,
            'followEntityOnStreamPost' => false,
            'doNotFillAssignedUserIfNotRequired' => false,
            'useCustomTabList' => false,
            'tabList' => false,
            'emailUseExternalClient' => false,
            'assignmentNotificationsIgnoreEntityTypeList' => false,
            'assignmentEmailNotificationsIgnoreEntityTypeList' => false,
            'dashletsOptions' => false,
            'dashboardLayout' => false
          ],
          'Call' => [
            'reminders' => false
          ],
          'Meeting' => [
            'reminders' => false
          ],
          'Attachment' => [
            'parent' => false
          ],
          'Note' => [
            'isInternal' => false,
            'isGlobal' => false
          ],
          'Email' => [
            'inboundEmails' => false,
            'emailAccounts' => false
          ],
          'User' => [
            'dashboardTemplate' => false,
            'password' => false,
            'authMethod' => false,
            'apiKey' => false,
            'secretKey' => false,
            'token' => false,
            'isAdmin' => false,
            'type' => false,
            'contact' => false,
            'accounts' => false,
            'account' => false,
            'portalRoles' => false,
            'portals' => false,
            'roles' => false,
            'defaultTeam' => false,
            'auth2FA' => false,
            'isActive' => false
          ]
        ]
      ],
      'strictDefault' => [
        'scopeLevel' => [],
        'fieldLevel' => [
          'assignedUser' => [
            'read' => 'yes',
            'edit' => 'no'
          ],
          'assignedUsers' => [
            'read' => 'yes',
            'edit' => 'no'
          ],
          'teams' => false
        ],
        'scopeFieldLevel' => [
          'User' => [
            'gender' => false
          ],
          'KnowledgeBaseArticle' => [
            'assignedUser' => false
          ],
          'Call' => [
            'users' => [
              'read' => 'yes',
              'edit' => 'no'
            ],
            'leads' => false
          ],
          'Meeting' => [
            'users' => [
              'read' => 'yes',
              'edit' => 'no'
            ],
            'leads' => false
          ],
          'Case' => [
            'status' => [
              'read' => 'yes',
              'edit' => 'no'
            ]
          ]
        ]
      ],
      'valuePermissionList' => [
        0 => 'exportPermission',
        1 => 'massUpdatePermission'
      ],
      'permissionsStrictDefaults' => [
        'exportPermission' => 'no',
        'massUpdatePermission' => 'no'
      ],
      'scopeLevelTypesStrictDefaults' => [
        'boolean' => false,
        'record' => false
      ]
    ],
    'addressFormats' => [
      1 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter1'
      ],
      2 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter2'
      ],
      3 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter3'
      ],
      4 => [
        'formatterClassName' => 'Espo\\Classes\\AddressFormatters\\Formatter4'
      ]
    ],
    'adminPanel' => [
      'system' => [
        'label' => 'System',
        'itemList' => [
          0 => [
            'url' => '#Admin/settings',
            'label' => 'Settings',
            'iconClass' => 'fas fa-cog',
            'description' => 'settings'
          ],
          1 => [
            'url' => '#Admin/userInterface',
            'label' => 'User Interface',
            'iconClass' => 'fas fa-desktop',
            'description' => 'userInterface'
          ],
          2 => [
            'url' => '#Admin/authentication',
            'label' => 'Authentication',
            'iconClass' => 'fas fa-sign-in-alt',
            'description' => 'authentication'
          ],
          3 => [
            'url' => '#ScheduledJob',
            'label' => 'Scheduled Jobs',
            'iconClass' => 'fas fa-clock',
            'description' => 'scheduledJob'
          ],
          4 => [
            'url' => '#Admin/currency',
            'label' => 'Currency',
            'iconClass' => 'fas fa-euro-sign',
            'description' => 'currency'
          ],
          5 => [
            'url' => '#Admin/notifications',
            'label' => 'Notifications',
            'iconClass' => 'fas fa-bell',
            'description' => 'notifications'
          ],
          6 => [
            'url' => '#Admin/integrations',
            'label' => 'Integrations',
            'iconClass' => 'fas fa-network-wired',
            'description' => 'integrations'
          ],
          7 => [
            'url' => '#Admin/extensions',
            'label' => 'Extensions',
            'iconClass' => 'fas fa-upload',
            'description' => 'extensions'
          ],
          8 => [
            'url' => '#Admin/systemRequirements',
            'label' => 'System Requirements',
            'iconClass' => 'fas fa-server',
            'description' => 'systemRequirements'
          ],
          9 => [
            'url' => '#Admin/upgrade',
            'label' => 'Upgrade',
            'iconClass' => 'fas fa-arrow-alt-circle-up',
            'description' => 'upgrade'
          ],
          10 => [
            'action' => 'clearCache',
            'label' => 'Clear Cache',
            'iconClass' => 'fas fa-broom',
            'description' => 'clearCache'
          ],
          11 => [
            'action' => 'rebuild',
            'label' => 'Rebuild',
            'iconClass' => 'fas fa-database',
            'description' => 'rebuild'
          ]
        ],
        'order' => 0
      ],
      'users' => [
        'label' => 'Users',
        'itemList' => [
          0 => [
            'url' => '#User',
            'label' => 'Users',
            'iconClass' => 'fas fa-user',
            'description' => 'users'
          ],
          1 => [
            'url' => '#Team',
            'label' => 'Teams',
            'iconClass' => 'fas fa-users',
            'description' => 'teams'
          ],
          2 => [
            'url' => '#Role',
            'label' => 'Roles',
            'iconClass' => 'fas fa-key',
            'description' => 'roles'
          ],
          3 => [
            'url' => '#Admin/authLog',
            'label' => 'Auth Log',
            'iconClass' => 'fas fa-sign-in-alt',
            'description' => 'authLog'
          ],
          4 => [
            'url' => '#Admin/authTokens',
            'label' => 'Auth Tokens',
            'iconClass' => 'fas fa-shield-alt',
            'description' => 'authTokens'
          ],
          5 => [
            'url' => '#ActionHistoryRecord',
            'label' => 'Action History',
            'iconClass' => 'fas fa-history',
            'description' => 'actionHistory'
          ],
          6 => [
            'url' => '#ApiUser',
            'label' => 'API Users',
            'iconClass' => 'fas fa-user-cog',
            'description' => 'apiUsers'
          ]
        ],
        'order' => 5
      ],
      'customization' => [
        'label' => 'Customization',
        'itemList' => [
          0 => [
            'url' => '#Admin/entityManager',
            'label' => 'Entity Manager',
            'iconClass' => 'fas fa-tools',
            'description' => 'entityManager'
          ],
          1 => [
            'url' => '#Admin/layouts',
            'label' => 'Layout Manager',
            'iconClass' => 'fas fa-table',
            'description' => 'layoutManager'
          ],
          2 => [
            'url' => '#Admin/labelManager',
            'label' => 'Label Manager',
            'iconClass' => 'fas fa-language',
            'description' => 'labelManager'
          ],
          3 => [
            'url' => '#Admin/templateManager',
            'label' => 'Template Manager',
            'iconClass' => 'fas fa-envelope-open-text',
            'description' => 'templateManager'
          ]
        ],
        'order' => 10
      ],
      'email' => [
        'label' => 'Email',
        'itemList' => [
          0 => [
            'url' => '#Admin/outboundEmails',
            'label' => 'Outbound Emails',
            'iconClass' => 'fas fa-paper-plane',
            'description' => 'outboundEmails'
          ],
          1 => [
            'url' => '#Admin/inboundEmails',
            'label' => 'Inbound Emails',
            'iconClass' => 'fas fa-envelope',
            'description' => 'inboundEmails'
          ],
          2 => [
            'url' => '#InboundEmail',
            'label' => 'Group Email Accounts',
            'iconClass' => 'fas fa-inbox',
            'description' => 'groupEmailAccounts'
          ],
          3 => [
            'url' => '#EmailAccount',
            'label' => 'Personal Email Accounts',
            'iconClass' => 'fas fa-inbox',
            'description' => 'personalEmailAccounts'
          ],
          4 => [
            'url' => '#EmailFilter',
            'label' => 'Email Filters',
            'iconClass' => 'fas fa-filter',
            'description' => 'emailFilters'
          ],
          5 => [
            'url' => '#EmailTemplate',
            'label' => 'Email Templates',
            'iconClass' => 'fas fa-envelope-square',
            'description' => 'emailTemplates'
          ]
        ],
        'order' => 15
      ],
      'portal' => [
        'label' => 'Portal',
        'itemList' => [
          0 => [
            'url' => '#Portal',
            'label' => 'Portals',
            'iconClass' => 'fas fa-parking',
            'description' => 'portals'
          ],
          1 => [
            'url' => '#PortalUser',
            'label' => 'Portal Users',
            'iconClass' => 'fas fa-user',
            'description' => 'portalUsers'
          ],
          2 => [
            'url' => '#PortalRole',
            'label' => 'Portal Roles',
            'iconClass' => 'fas fa-key',
            'description' => 'portalRoles'
          ]
        ],
        'order' => 20
      ],
      'data' => [
        'label' => 'Data',
        'itemList' => [
          0 => [
            'url' => '#Import',
            'label' => 'Import',
            'iconClass' => 'fas fa-file-import',
            'description' => 'import'
          ],
          1 => [
            'url' => '#LeadCapture',
            'label' => 'Lead Capture',
            'iconClass' => 'fas fa-id-card',
            'description' => 'leadCapture'
          ],
          2 => [
            'url' => '#Template',
            'label' => 'PDF Templates',
            'iconClass' => 'fas fa-file-pdf',
            'description' => 'pdfTemplates'
          ],
          3 => [
            'url' => '#Webhook',
            'label' => 'Webhooks',
            'iconClass' => 'fas fa-share-alt icon-rotate-90',
            'description' => 'webhooks'
          ],
          4 => [
            'url' => '#DashboardTemplate',
            'label' => 'Dashboard Templates',
            'iconClass' => 'fas fa-th-large',
            'description' => 'dashboardTemplates'
          ],
          5 => [
            'url' => '#LayoutSet',
            'label' => 'Layout Sets',
            'iconClass' => 'fas fa-table',
            'description' => 'layoutSets'
          ],
          6 => [
            'url' => '#Attachment',
            'label' => 'Attachments',
            'iconClass' => 'fas fa-paperclip',
            'description' => 'attachments'
          ],
          7 => [
            'url' => '#Admin/jobs',
            'label' => 'Jobs',
            'iconClass' => 'fas fa-clock',
            'description' => 'jobs'
          ],
          8 => [
            'url' => '#EmailAddress',
            'label' => 'Email Addresses',
            'iconClass' => 'fas fa-envelope',
            'description' => 'emailAddresses'
          ],
          9 => [
            'url' => '#PhoneNumber',
            'label' => 'Phone Numbers',
            'iconClass' => 'fas fa-phone',
            'description' => 'phoneNumbers'
          ]
        ],
        'order' => 25
      ]
    ],
    'appParams' => [
      'templateEntityTypeList' => [
        'className' => 'Espo\\Classes\\AppParams\\TemplateEntityTypeList'
      ]
    ],
    'auth2FAMethods' => [
      'Totp' => [
        'settings' => [
          'isAvailable' => true
        ],
        'userApplyView' => 'views/user-security/modals/totp'
      ]
    ],
    'cleanup' => [
      'reminders' => [
        'className' => 'Espo\\Classes\\Cleanup\\Reminders',
        'order' => 10
      ],
      'webhookQueue' => [
        'className' => 'Espo\\Classes\\Cleanup\\WebhookQueue',
        'order' => 11
      ]
    ],
    'client' => [
      'scriptList' => [
        0 => 'client/espo.min.js'
      ],
      'developerModeScriptList' => [
        0 => 'client/lib/jquery-2.1.4.min.js',
        1 => 'client/lib/underscore-min.js',
        2 => 'client/lib/es6-promise.min.js',
        3 => 'client/lib/backbone-min.js',
        4 => 'client/lib/handlebars.js',
        5 => 'client/lib/base64.js',
        6 => 'client/lib/jquery-ui.min.js',
        7 => 'client/lib/jquery.ui.touch-punch.min.js',
        8 => 'client/lib/moment.min.js',
        9 => 'client/lib/moment-timezone.min.js',
        10 => 'client/lib/moment-timezone-data.js',
        11 => 'client/lib/jquery.timepicker.min.js',
        12 => 'client/lib/jquery.autocomplete.js',
        13 => 'client/lib/bootstrap.min.js',
        14 => 'client/lib/bootstrap-datepicker.js',
        15 => 'client/lib/bull.js',
        16 => 'client/lib/marked.min.js',
        17 => 'client/lib/autobahn.js',
        18 => 'client/lib/gridstack.all.js',
        19 => 'client/src/loader.js',
        20 => 'client/src/utils.js',
        21 => 'client/src/exceptions.js'
      ],
      'linkList' => [
        0 => [
          'href' => 'client/fonts/open-sans/open-sans-v16-cyrillic_latin_cyrillic-ext_latin-ext-regular.woff2',
          'as' => 'font',
          'type' => 'font/woff2',
          'rel' => 'preload',
          'noTimestamp' => true,
          'crossorigin' => true
        ],
        1 => [
          'href' => 'client/fonts/open-sans/open-sans-v16-cyrillic_latin_cyrillic-ext_latin-ext-600.woff2',
          'as' => 'font',
          'type' => 'font/woff2',
          'rel' => 'preload',
          'noTimestamp' => true,
          'crossorigin' => true
        ]
      ]
    ],
    'clientRoutes' => [
      'AddressMap/view/:entityType/:id/:field' => [
        'params' => [
          'controller' => 'AddressMap',
          'action' => 'view'
        ]
      ]
    ],
    'consoleCommands' => [
      'import' => [
        'className' => 'Espo\\Classes\\ConsoleCommands\\Import'
      ]
    ],
    'containerServices' => [
      'authTokenManager' => [
        'className' => 'Espo\\Core\\Authentication\\AuthToken\\EspoAuthTokenManager'
      ],
      'schema' => [
        'className' => 'Espo\\Core\\Utils\\Database\\Schema\\Schema'
      ],
      'ormMetadataData' => [
        'className' => 'Espo\\Core\\Utils\\Metadata\\OrmMetadataData'
      ],
      'classParser' => [
        'className' => 'Espo\\Core\\Utils\\File\\ClassParser'
      ],
      'classFinder' => [
        'className' => 'Espo\\Core\\Utils\\ClassFinder'
      ],
      'cronManager' => [
        'className' => 'Espo\\Core\\CronManager'
      ],
      'webSocketSubmission' => [
        'className' => 'Espo\\Core\\WebSocket\\Submission'
      ],
      'crypt' => [
        'className' => 'Espo\\Core\\Utils\\Crypt'
      ],
      'passwordHash' => [
        'className' => 'Espo\\Core\\Utils\\PasswordHash'
      ],
      'number' => [
        'loaderClassName' => 'Espo\\Core\\Loaders\\NumberUtil'
      ],
      'selectManagerFactory' => [
        'className' => 'Espo\\Core\\Select\\SelectManagerFactory'
      ],
      'serviceFactory' => [
        'className' => 'Espo\\Core\\ServiceFactory'
      ],
      'recordServiceContainer' => [
        'className' => 'Espo\\Core\\RecordServiceContainer'
      ],
      'templateFileManager' => [
        'className' => 'Espo\\Core\\Utils\\TemplateFileManager'
      ],
      'webhookManager' => [
        'className' => 'Espo\\Core\\Webhook\\Manager'
      ],
      'scheduledJob' => [
        'className' => 'Espo\\Core\\Utils\\ScheduledJob'
      ],
      'hookManager' => [
        'className' => 'Espo\\Core\\HookManager'
      ],
      'notificatorFactory' => [
        'className' => 'Espo\\Core\\NotificatorFactory'
      ],
      'clientManager' => [
        'className' => 'Espo\\Core\\Utils\\ClientManager'
      ],
      'themeManager' => [
        'className' => 'Espo\\Core\\Utils\\ThemeManager'
      ],
      'fieldUtil' => [
        'className' => 'Espo\\Core\\Utils\\FieldUtil'
      ],
      'fieldManager' => [
        'className' => 'Espo\\Core\\Utils\\FieldManager'
      ],
      'fieldManagerUtil' => [
        'className' => 'Espo\\Core\\Utils\\FieldManagerUtil'
      ],
      'emailSender' => [
        'className' => 'Espo\\Core\\Mail\\EmailSender'
      ],
      'mailSender' => [
        'className' => 'Espo\\Core\\Mail\\Sender'
      ],
      'htmlizerFactory' => [
        'className' => 'Espo\\Core\\Htmlizer\\Factory'
      ],
      'fieldValidatorManager' => [
        'className' => 'Espo\\Core\\Utils\\FieldValidatorManager'
      ],
      'hasher' => [
        'className' => 'Espo\\Core\\Utils\\Hasher'
      ],
      'emailFilterManager' => [
        'className' => 'Espo\\Core\\Utils\\EmailFilterManager'
      ],
      'externalAccountClientManager' => [
        'className' => 'Espo\\Core\\ExternalAccount\\ClientManager'
      ],
      'formulaManager' => [
        'className' => 'Espo\\Core\\Formula\\Manager'
      ],
      'user' => [
        'settable' => true
      ]
    ],
    'currency' => [
      'symbolMap' => [
        'AED' => 'د.إ',
        'AFN' => '؋',
        'ALL' => 'L',
        'ANG' => 'ƒ',
        'AOA' => 'Kz',
        'ARS' => '$',
        'AUD' => '$',
        'AWG' => 'ƒ',
        'AZN' => '₼',
        'BAM' => 'KM',
        'BBD' => '$',
        'BDT' => '৳',
        'BGN' => 'лв',
        'BHD' => '.د.ب',
        'BIF' => 'FBu',
        'BMD' => '$',
        'BND' => '$',
        'BOB' => 'Bs.',
        'BRL' => 'R$',
        'BSD' => '$',
        'BTN' => 'Nu.',
        'BWP' => 'P',
        'BYN' => 'Br',
        'BYR' => 'p.',
        'BZD' => 'BZ$',
        'CAD' => '$',
        'CDF' => 'FC',
        'CHF' => 'Fr.',
        'CLP' => '$',
        'CNY' => '¥',
        'COP' => '$',
        'CRC' => '₡',
        'CUC' => '$',
        'CUP' => '₱',
        'CVE' => '$',
        'CZK' => 'Kč',
        'DJF' => 'Fdj',
        'DKK' => 'kr',
        'DOP' => 'RD$',
        'DZD' => 'دج',
        'EEK' => 'kr',
        'EGP' => '£',
        'ERN' => 'Nfk',
        'ETB' => 'Br',
        'EUR' => '€',
        'FJD' => '$',
        'FKP' => '£',
        'GBP' => '£',
        'GEL' => '₾',
        'GGP' => '£',
        'GHC' => '₵',
        'GHS' => 'GH₵',
        'GIP' => '£',
        'GMD' => 'D',
        'GNF' => 'FG',
        'GTQ' => 'Q',
        'GYD' => '$',
        'HKD' => '$',
        'HNL' => 'L',
        'HRK' => 'kn',
        'HTG' => 'G',
        'HUF' => 'Ft',
        'IDR' => 'Rp',
        'ILS' => '₪',
        'IMP' => '£',
        'INR' => '₹',
        'IQD' => 'ع.د',
        'IRR' => '﷼',
        'ISK' => 'kr',
        'JEP' => '£',
        'JMD' => 'J$',
        'JPY' => '¥',
        'KES' => 'KSh',
        'KGS' => 'лв',
        'KHR' => '៛',
        'KMF' => 'CF',
        'KPW' => '₩',
        'KRW' => '₩',
        'KYD' => '$',
        'KZT' => '₸',
        'LAK' => '₭',
        'LBP' => '£',
        'LKR' => '₨',
        'LRD' => '$',
        'LSL' => 'M',
        'LTL' => 'Lt',
        'LVL' => 'Ls',
        'MAD' => 'MAD',
        'MDL' => 'lei',
        'MGA' => 'Ar',
        'MKD' => 'ден',
        'MMK' => 'K',
        'MNT' => '₮',
        'MOP' => 'MOP$',
        'MUR' => '₨',
        'MVR' => 'Rf',
        'MWK' => 'MK',
        'MXN' => '$',
        'MYR' => 'RM',
        'MZN' => 'MT',
        'NAD' => '$',
        'NGN' => '₦',
        'NIO' => 'C$',
        'NOK' => 'kr',
        'NPR' => '₨',
        'NZD' => '$',
        'OMR' => '﷼',
        'PAB' => 'B/.',
        'PEN' => 'S/.',
        'PGK' => 'K',
        'PHP' => '₱',
        'PKR' => '₨',
        'PLN' => 'zł',
        'PYG' => 'Gs',
        'QAR' => '﷼',
        'RMB' => '￥',
        'RON' => 'lei',
        'RSD' => 'Дин.',
        'RUB' => '₽',
        'RWF' => 'R₣',
        'SAR' => '﷼',
        'SBD' => '$',
        'SCR' => '₨',
        'SDG' => 'ج.س.',
        'SEK' => 'kr',
        'SGD' => '$',
        'SHP' => '£',
        'SLL' => 'Le',
        'SOS' => 'S',
        'SRD' => '$',
        'SSP' => '£',
        'STD' => 'Db',
        'SVC' => '$',
        'SYP' => '£',
        'SZL' => 'E',
        'THB' => '฿',
        'TJS' => 'SM',
        'TMT' => 'T',
        'TND' => 'د.ت',
        'TOP' => 'T$',
        'TRL' => '₤',
        'TRY' => '₺',
        'TTD' => 'TT$',
        'TVD' => '$',
        'TWD' => 'NT$',
        'TZS' => 'TSh',
        'UAH' => '₴',
        'UGX' => 'USh',
        'USD' => '$',
        'UYU' => '$U',
        'UZS' => 'лв',
        'VEF' => 'Bs',
        'VND' => '₫',
        'VUV' => 'VT',
        'WST' => 'WS$',
        'XAF' => 'FCFA',
        'XBT' => 'Ƀ',
        'XCD' => '$',
        'XOF' => 'CFA',
        'XPF' => '₣',
        'YER' => '﷼',
        'ZAR' => 'R',
        'ZWD' => 'Z$',
        'BTC' => '฿'
      ],
      'list' => [
        0 => 'AFN',
        1 => 'AED',
        2 => 'ALL',
        3 => 'ANG',
        4 => 'AOA',
        5 => 'ARS',
        6 => 'AUD',
        7 => 'BAM',
        8 => 'BGN',
        9 => 'BHD',
        10 => 'BND',
        11 => 'BOB',
        12 => 'BRL',
        13 => 'BWP',
        14 => 'BYN',
        15 => 'CAD',
        16 => 'CHF',
        17 => 'CLP',
        18 => 'CNY',
        19 => 'COP',
        20 => 'CRC',
        21 => 'CVE',
        22 => 'CZK',
        23 => 'DKK',
        24 => 'DOP',
        25 => 'DZD',
        26 => 'EGP',
        27 => 'EUR',
        28 => 'FJD',
        29 => 'GBP',
        30 => 'GNF',
        31 => 'GTQ',
        32 => 'HKD',
        33 => 'HNL',
        34 => 'HRK',
        35 => 'HUF',
        36 => 'IDR',
        37 => 'ILS',
        38 => 'INR',
        39 => 'IRR',
        40 => 'JMD',
        41 => 'JOD',
        42 => 'JPY',
        43 => 'KES',
        44 => 'KRW',
        45 => 'KWD',
        46 => 'KYD',
        47 => 'KZT',
        48 => 'LBP',
        49 => 'LKR',
        50 => 'MAD',
        51 => 'MDL',
        52 => 'MKD',
        53 => 'MMK',
        54 => 'MUR',
        55 => 'MXN',
        56 => 'MYR',
        57 => 'MZN',
        58 => 'NAD',
        59 => 'NGN',
        60 => 'NIO',
        61 => 'NOK',
        62 => 'NPR',
        63 => 'NZD',
        64 => 'OMR',
        65 => 'PEN',
        66 => 'PGK',
        67 => 'PHP',
        68 => 'PKR',
        69 => 'PLN',
        70 => 'PYG',
        71 => 'QAR',
        72 => 'RON',
        73 => 'RSD',
        74 => 'RUB',
        75 => 'SAR',
        76 => 'SCR',
        77 => 'SEK',
        78 => 'SGD',
        79 => 'SLL',
        80 => 'SVC',
        81 => 'THB',
        82 => 'TND',
        83 => 'TRY',
        84 => 'TTD',
        85 => 'TWD',
        86 => 'TZS',
        87 => 'UAH',
        88 => 'UGX',
        89 => 'USD',
        90 => 'UYU',
        91 => 'UZS',
        92 => 'VND',
        93 => 'XAF',
        94 => 'YER',
        95 => 'ZAR',
        96 => 'ZMW',
        97 => 'ZWL'
      ]
    ],
    'defaultDashboardLayouts' => [
      'Standard' => [
        0 => [
          'name' => 'My Espo',
          'layout' => [
            0 => [
              'id' => 'defaultActivities',
              'name' => 'Activities',
              'x' => 2,
              'y' => 2,
              'width' => 2,
              'height' => 2
            ],
            1 => [
              'id' => 'defaultStream',
              'name' => 'Stream',
              'x' => 0,
              'y' => 0,
              'width' => 2,
              'height' => 4
            ],
            2 => [
              'id' => 'defaultTasks',
              'name' => 'Tasks',
              'x' => 2,
              'y' => 4,
              'width' => 2,
              'height' => 2
            ]
          ]
        ]
      ]
    ],
    'defaultDashboardOptions' => [
      'Standard' => [
        'defaultStream' => [
          'displayRecords' => 10
        ]
      ]
    ],
    'emailNotifications' => [
      'handlerClassNameMap' => [
        'Case' => '\\Espo\\Modules\\Crm\\Business\\EmailNotificationHandlers\\CaseObj'
      ]
    ],
    'entityTemplateList' => [
      0 => 'Base',
      1 => 'BasePlus',
      2 => 'Event',
      3 => 'Person',
      4 => 'Company'
    ],
    'export' => [
      'formatList' => [
        0 => 'xlsx',
        1 => 'csv'
      ],
      'formatDefs' => [
        'csv' => [
          'mimeType' => 'text/csv',
          'fileExtension' => 'csv'
        ],
        'xlsx' => [
          'mimeType' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
          'fileExtension' => 'xlsx'
        ]
      ],
      'exportFormatClassNameMap' => [
        'csv' => 'Espo\\Tools\\Export\\Formats\\Csv',
        'xlsx' => 'Espo\\Tools\\Export\\Formats\\Xlsx'
      ]
    ],
    'fileStorage' => [
      'implementationClassNameMap' => [
        'EspoUploadDir' => '\\Espo\\Core\\FileStorage\\Storages\\EspoUploadDir'
      ]
    ],
    'formula' => [
      'functionList' => [
        0 => [
          'name' => 'ifThenElse',
          'insertText' => 'ifThenElse(CONDITION, CONSEQUENT, ALTERNATIVE)'
        ],
        1 => [
          'name' => 'ifThen',
          'insertText' => 'ifThen(CONDITION, CONSEQUENT)'
        ],
        2 => [
          'name' => 'string\\concatenate',
          'insertText' => 'string\\concatenate(STRING_1, STRING_2)'
        ],
        3 => [
          'name' => 'string\\substring',
          'insertText' => 'string\\substring(STRING, START, LENGTH)'
        ],
        4 => [
          'name' => 'string\\contains',
          'insertText' => 'string\\contains(STRING, NEEDLE)'
        ],
        5 => [
          'name' => 'string\\test',
          'insertText' => 'string\\test(STRING, REGULAR_EXPRESSION)'
        ],
        6 => [
          'name' => 'string\\length',
          'insertText' => 'string\\length(STRING)'
        ],
        7 => [
          'name' => 'string\\trim',
          'insertText' => 'string\\trim(STRING)'
        ],
        8 => [
          'name' => 'string\\lowerCase',
          'insertText' => 'string\\lowerCase(STRING)'
        ],
        9 => [
          'name' => 'string\\upperCase',
          'insertText' => 'string\\upperCase(STRING)'
        ],
        10 => [
          'name' => 'datetime\\today',
          'insertText' => 'datetime\\today()'
        ],
        11 => [
          'name' => 'datetime\\now',
          'insertText' => 'datetime\\now()'
        ],
        12 => [
          'name' => 'datetime\\format',
          'insertText' => 'datetime\\format(VALUE)'
        ],
        13 => [
          'name' => 'datetime\\date',
          'insertText' => 'datetime\\date(VALUE)'
        ],
        14 => [
          'name' => 'datetime\\month',
          'insertText' => 'datetime\\month(VALUE)'
        ],
        15 => [
          'name' => 'datetime\\year',
          'insertText' => 'datetime\\year(VALUE)'
        ],
        16 => [
          'name' => 'datetime\\hour',
          'insertText' => 'datetime\\hour(VALUE)'
        ],
        17 => [
          'name' => 'datetime\\minute',
          'insertText' => 'datetime\\minute(VALUE)'
        ],
        18 => [
          'name' => 'datetime\\dayOfWeek',
          'insertText' => 'datetime\\dayOfWeek(VALUE)'
        ],
        19 => [
          'name' => 'datetime\\addMinutes',
          'insertText' => 'datetime\\addMinutes(VALUE, MINUTES)'
        ],
        20 => [
          'name' => 'datetime\\addHours',
          'insertText' => 'datetime\\addHours(VALUE, HOURS)'
        ],
        21 => [
          'name' => 'datetime\\addDays',
          'insertText' => 'datetime\\addDays(VALUE, DAYS)'
        ],
        22 => [
          'name' => 'datetime\\addWeeks',
          'insertText' => 'datetime\\addWeeks(VALUE, WEEKS)'
        ],
        23 => [
          'name' => 'datetime\\addMonths',
          'insertText' => 'datetime\\addMonths(VALUE, MONTHS)'
        ],
        24 => [
          'name' => 'datetime\\addYears',
          'insertText' => 'datetime\\addYears(VALUE, YEARS)'
        ],
        25 => [
          'name' => 'datetime\\diff',
          'insertText' => 'datetime\\diff(VALUE_1, VALUE_2, INTERVAL_TYPE)'
        ],
        26 => [
          'name' => 'number\\format',
          'insertText' => 'number\\format(VALUE)'
        ],
        27 => [
          'name' => 'number\\abs',
          'insertText' => 'number\\abs(VALUE)'
        ],
        28 => [
          'name' => 'number\\round',
          'insertText' => 'number\\round(VALUE, PRECISION)'
        ],
        29 => [
          'name' => 'number\\floor',
          'insertText' => 'number\\floor(VALUE)'
        ],
        30 => [
          'name' => 'number\\ceil',
          'insertText' => 'number\\ceil(VALUE)'
        ],
        31 => [
          'name' => 'entity\\isNew',
          'insertText' => 'entity\\isNew()'
        ],
        32 => [
          'name' => 'entity\\isAttributeChanged',
          'insertText' => 'entity\\isAttributeChanged(ATTRIBUTE)'
        ],
        33 => [
          'name' => 'entity\\isAttributeNotChanged',
          'insertText' => 'entity\\isAttributeNotChanged(ATTRIBUTE)'
        ],
        34 => [
          'name' => 'entity\\attribute',
          'insertText' => 'entity\\attribute(ATTRIBUTE)'
        ],
        35 => [
          'name' => 'entity\\attributeFetched',
          'insertText' => 'entity\\attributeFetched(ATTRIBUTE)'
        ],
        36 => [
          'name' => 'entity\\setAttribute',
          'insertText' => 'entity\\setAttribute(ATTRIBUTE, VALUE)'
        ],
        37 => [
          'name' => 'entity\\addLinkMultipleId',
          'insertText' => 'entity\\addLinkMultipleId(LINK, ID)'
        ],
        38 => [
          'name' => 'entity\\hasLinkMultipleId',
          'insertText' => 'entity\\hasLinkMultipleId(LINK, ID)'
        ],
        39 => [
          'name' => 'entity\\isRelated',
          'insertText' => 'entity\\isRelated(LINK, ID)'
        ],
        40 => [
          'name' => 'entity\\sumRelated',
          'insertText' => 'entity\\sumRelated(LINK, FIELD, FILTER)'
        ],
        41 => [
          'name' => 'entity\\countRelated',
          'insertText' => 'entity\\countRelated(LINK, FILTER)'
        ],
        42 => [
          'name' => 'record\\exists',
          'insertText' => 'record\\exists(ENTITY_TYPE, KEY, VALUE)'
        ],
        43 => [
          'name' => 'record\\count',
          'insertText' => 'record\\count(ENTITY_TYPE, KEY, VALUE)'
        ],
        44 => [
          'name' => 'env\\userAttribute',
          'insertText' => 'env\\userAttribute(ATTRIBUTE)'
        ],
        45 => [
          'name' => 'util\\generateId',
          'insertText' => 'util\\generateId()'
        ]
      ],
      'functionClassNameMap' => [
        'ext\\account\\findByEmailAddress' => '\\Espo\\Modules\\Crm\\Core\\Formula\\Functions\\ExtGroup\\AccountGroup\\FindByEmailAddressType'
      ]
    ],
    'jsLibs' => [
      'Flotr' => [
        'path' => 'client/lib/flotr2.js',
        'exportsTo' => 'window',
        'exportsAs' => 'Flotr'
      ],
      'espo-funnel-chart' => [
        'path' => 'client/lib/espo-funnel-chart.js',
        'exportsTo' => 'window',
        'exportsAs' => 'EspoFunnel'
      ],
      'Summernote' => [
        'path' => 'client/lib/summernote.min.js',
        'exportsTo' => '$',
        'exportsAs' => 'summernote'
      ],
      'Textcomplete' => [
        'path' => 'client/lib/jquery.textcomplete.js',
        'exportsTo' => '$',
        'exportsAs' => 'textcomplete'
      ],
      'Select2' => [
        'path' => 'client/lib/select2.min.js',
        'exportsTo' => '$',
        'exportsAs' => 'select2'
      ],
      'Selectize' => [
        'path' => 'client/lib/selectize.min.js',
        'exportsTo' => 'window',
        'exportsAs' => 'Selectize'
      ],
      'Cropper' => [
        'path' => 'client/lib/cropper.min.js',
        'exportsTo' => '$',
        'exportsAs' => 'cropper'
      ],
      'gridstack' => [
        'path' => 'client/lib/gridstack.all.js',
        'exportsTo' => 'window',
        'exportsAs' => 'GridStack'
      ],
      'Colorpicker' => [
        'path' => 'client/lib/bootstrap-colorpicker.js',
        'exportsTo' => '$',
        'exportsAs' => 'colorpicker'
      ],
      'exif' => [
        'path' => 'client/lib/exif-js.js',
        'exportsTo' => 'window',
        'exportsAs' => 'EXIF'
      ],
      'JsBarcode' => [
        'path' => 'client/lib/JsBarcode.all.min.js',
        'exportsTo' => 'window',
        'exportsAs' => 'JsBarcode'
      ],
      'full-calendar' => [
        'path' => 'client/modules/crm/lib/fullcalendar.min.js',
        'exportsTo' => '$',
        'exportsAs' => 'fullCalendar'
      ],
      'vis' => [
        'path' => 'client/modules/crm/lib/vis.min.js',
        'exportsAs' => 'vis',
        'noAppCache' => true
      ]
    ],
    'language' => [
      'list' => [
        0 => 'en_GB',
        1 => 'en_US',
        2 => 'bg_BG',
        3 => 'es_MX',
        4 => 'cs_CZ',
        5 => 'da_DK',
        6 => 'de_DE',
        7 => 'es_ES',
        8 => 'hr_HR',
        9 => 'hu_HU',
        10 => 'fa_IR',
        11 => 'fr_FR',
        12 => 'id_ID',
        13 => 'it_IT',
        14 => 'lt_LT',
        15 => 'lv_LV',
        16 => 'nb_NO',
        17 => 'nl_NL',
        18 => 'tr_TR',
        19 => 'sk_SK',
        20 => 'sr_RS',
        21 => 'ro_RO',
        22 => 'ru_RU',
        23 => 'pl_PL',
        24 => 'pt_BR',
        25 => 'uk_UA',
        26 => 'vi_VN',
        27 => 'zh_CN',
        28 => 'zh_TW'
      ],
      'aclDependencies' => [
        'Lead.options.source' => [
          'scope' => 'Opportunity',
          'field' => 'leadSource'
        ]
      ]
    ],
    'metadata' => [
      'frontendHiddenPathList' => [
        0 => [
          0 => 'app',
          1 => 'metadata'
        ],
        1 => [
          0 => 'app',
          1 => 'loaders'
        ],
        2 => [
          0 => 'app',
          1 => 'containerServices'
        ],
        3 => [
          0 => 'app',
          1 => 'portalContainerServices'
        ],
        4 => [
          0 => 'app',
          1 => 'consoleCommands'
        ],
        5 => [
          0 => 'app',
          1 => 'formula',
          2 => 'functionClassNameMap'
        ],
        6 => [
          0 => 'app',
          1 => 'fileStorage',
          2 => 'implementationClassNameMap'
        ],
        7 => [
          0 => 'app',
          1 => 'emailNotifications',
          2 => 'handlerClassNameMap'
        ],
        8 => [
          0 => 'app',
          1 => 'client'
        ],
        9 => [
          0 => 'app',
          1 => 'language',
          2 => 'aclDependencies'
        ],
        10 => [
          0 => 'app',
          1 => 'templateHelpers'
        ],
        11 => [
          0 => 'app',
          1 => 'appParams'
        ],
        12 => [
          0 => 'app',
          1 => 'cleanup'
        ],
        13 => [
          0 => 'app',
          1 => 'pdfEngines',
          2 => '__ANY__',
          3 => 'implementationClassNameMap'
        ],
        14 => [
          0 => 'app',
          1 => 'addressFormats',
          2 => '__ANY__',
          3 => 'formatterClassName'
        ],
        15 => [
          0 => 'app',
          1 => 'auth2FAMethods',
          2 => '__ANY__',
          3 => 'implementationClassName'
        ],
        16 => [
          0 => 'app',
          1 => 'auth2FAMethods',
          2 => '__ANY__',
          3 => 'implementationUserClassName'
        ],
        17 => [
          0 => 'authenticationMethods',
          1 => '__ANY__',
          2 => 'implementationClassName'
        ],
        18 => [
          0 => 'app',
          1 => 'calendar',
          2 => 'additionalAttributeList'
        ]
      ],
      'aclDependencies' => [
        'entityDefs.Lead.fields.source.options' => [
          'scope' => 'Opportunity',
          'field' => 'leadSource'
        ]
      ]
    ],
    'pdfEngines' => [
      'Tcpdf' => [
        'implementationClassNameMap' => [
          'entity' => 'Espo\\Tools\\Pdf\\Tcpdf\\TcpdfEntityPrinter',
          'collection' => 'Espo\\Tools\\Pdf\\Tcpdf\\TcpdfCollectionPrinter'
        ],
        'fontFaceList' => [
          0 => 'aealarabiya',
          1 => 'aefurat',
          2 => 'cid0cs',
          3 => 'cid0ct',
          4 => 'cid0jp',
          5 => 'cid0kr',
          6 => 'courier',
          7 => 'dejavusans',
          8 => 'dejavusanscondensed',
          9 => 'dejavusansextralight',
          10 => 'dejavusansmono',
          11 => 'dejavuserif',
          12 => 'dejavuserifcondensed',
          13 => 'freemono',
          14 => 'freesans',
          15 => 'freeserif',
          16 => 'helvetica',
          17 => 'hysmyeongjostdmedium',
          18 => 'kozgopromedium',
          19 => 'kozminproregular',
          20 => 'msungstdlight',
          21 => 'pdfacourier',
          22 => 'pdfahelvetica',
          23 => 'pdfasymbol',
          24 => 'pdfatimes',
          25 => 'stsongstdlight',
          26 => 'symbol',
          27 => 'times'
        ]
      ]
    ],
    'portalContainerServices' => [
      'layout' => [
        'className' => 'Espo\\Core\\Portal\\Utils\\Layout'
      ],
      'themeManager' => [
        'className' => 'Espo\\Core\\Portal\\Utils\\ThemeManager'
      ]
    ],
    'templateHelpers' => [
      'googleMapsImage' => 'Espo\\Classes\\TemplateHelpers\\GoogleMaps::image'
    ],
    'templates' => [
      'accessInfo' => [
        'scope' => 'User'
      ],
      'accessInfoPortal' => [
        'scope' => 'User'
      ],
      'assignment' => [
        'scopeListConfigParam' => 'assignmentEmailNotificationsEntityList'
      ],
      'mention' => [
        'scope' => 'Note'
      ],
      'noteEmailReceived' => [
        'scope' => 'Note'
      ],
      'notePost' => [
        'scope' => 'Note'
      ],
      'notePostNoParent' => [
        'scope' => 'Note'
      ],
      'noteStatus' => [
        'scope' => 'Note'
      ],
      'passwordChangeLink' => [
        'scope' => 'User'
      ],
      'invitation' => [
        'scopeList' => [
          0 => 'Meeting',
          1 => 'Call'
        ],
        'module' => 'Crm'
      ],
      'reminder' => [
        'scopeList' => [
          0 => 'Meeting',
          1 => 'Call',
          2 => 'Task'
        ],
        'module' => 'Crm'
      ]
    ],
    'webSocket' => [
      'categories' => [
        'newNotification' => [],
        'recordUpdate' => [
          'paramList' => [
            0 => 'scope',
            1 => 'id'
          ],
          'accessCheckCommand' => 'AclCheck --userId=:userId --scope=:scope --id=:id --action=read'
        ],
        'streamUpdate' => [
          'paramList' => [
            0 => 'scope',
            1 => 'id'
          ],
          'accessCheckCommand' => 'AclCheck --userId=:userId --scope=:scope --id=:id --action=stream'
        ],
        'popupNotifications.event' => []
      ]
    ],
    'calendar' => [
      'additionalAttributeList' => [
        0 => 'color'
      ],
      'canceledStatusList' => [
        0 => 'Not Held',
        1 => 'Canceled'
      ],
      'completedStatusList' => [
        0 => 'Held',
        1 => 'Completed'
      ]
    ],
    'popupNotifications' => [
      'event' => [
        'url' => 'Activities/action/popupNotifications',
        'grouped' => true,
        'serviceName' => 'Activities',
        'methodName' => 'getPopupNotifications',
        'interval' => 15,
        'useWebSocket' => true,
        'portalDisabled' => true,
        'view' => 'crm:views/meeting/popup-notification'
      ]
    ]
  ],
  'authenticationMethods' => [
    'ApiKey' => [
      'api' => true
    ],
    'Espo' => [
      'settings' => [
        'isAvailable' => true
      ]
    ],
    'Hmac' => [
      'api' => true
    ],
    'LDAP' => [
      'settings' => [
        'isAvailable' => true,
        'layout' => [
          'label' => 'LDAP',
          'rows' => [
            0 => [
              0 => [
                'name' => 'ldapHost'
              ],
              1 => [
                'name' => 'ldapPort'
              ]
            ],
            1 => [
              0 => [
                'name' => 'ldapAuth'
              ],
              1 => [
                'name' => 'ldapSecurity'
              ]
            ],
            2 => [
              0 => [
                'name' => 'ldapUsername',
                'fullWidth' => true
              ]
            ],
            3 => [
              0 => [
                'name' => 'ldapPassword'
              ],
              1 => [
                'name' => 'testConnection',
                'customLabel' => NULL,
                'view' => 'views/admin/authentication/fields/test-connection'
              ]
            ],
            4 => [
              0 => [
                'name' => 'ldapUserNameAttribute'
              ],
              1 => [
                'name' => 'ldapUserObjectClass'
              ]
            ],
            5 => [
              0 => [
                'name' => 'ldapAccountCanonicalForm'
              ],
              1 => [
                'name' => 'ldapBindRequiresDn'
              ]
            ],
            6 => [
              0 => [
                'name' => 'ldapBaseDn',
                'fullWidth' => true
              ]
            ],
            7 => [
              0 => [
                'name' => 'ldapUserLoginFilter',
                'fullWidth' => true
              ]
            ],
            8 => [
              0 => [
                'name' => 'ldapAccountDomainName'
              ],
              1 => [
                'name' => 'ldapAccountDomainNameShort'
              ]
            ],
            9 => [
              0 => [
                'name' => 'ldapTryUsernameSplit'
              ],
              1 => [
                'name' => 'ldapOptReferrals'
              ]
            ],
            10 => [
              0 => [
                'name' => 'ldapCreateEspoUser'
              ],
              1 => false
            ],
            11 => [
              0 => [
                'name' => 'ldapUserFirstNameAttribute'
              ],
              1 => [
                'name' => 'ldapUserLastNameAttribute'
              ]
            ],
            12 => [
              0 => [
                'name' => 'ldapUserTitleAttribute'
              ],
              1 => false
            ],
            13 => [
              0 => [
                'name' => 'ldapUserEmailAddressAttribute'
              ],
              1 => [
                'name' => 'ldapUserPhoneNumberAttribute'
              ]
            ],
            14 => [
              0 => [
                'name' => 'ldapUserTeams'
              ],
              1 => [
                'name' => 'ldapUserDefaultTeam'
              ]
            ],
            15 => [
              0 => [
                'name' => 'ldapPortalUserLdapAuth'
              ],
              1 => false
            ],
            16 => [
              0 => [
                'name' => 'ldapPortalUserPortals'
              ],
              1 => [
                'name' => 'ldapPortalUserRoles'
              ]
            ]
          ]
        ],
        'fieldList' => [
          0 => 'ldapHost',
          1 => 'ldapPort',
          2 => 'ldapAuth',
          3 => 'ldapSecurity',
          4 => 'ldapUsername',
          5 => 'ldapPassword',
          6 => 'ldapBindRequiresDn',
          7 => 'ldapUserLoginFilter',
          8 => 'ldapBaseDn',
          9 => 'ldapAccountCanonicalForm',
          10 => 'ldapAccountDomainName',
          11 => 'ldapAccountDomainNameShort',
          12 => 'ldapAccountDomainName',
          13 => 'ldapAccountDomainNameShort',
          14 => 'ldapTryUsernameSplit',
          15 => 'ldapOptReferrals',
          16 => 'ldapCreateEspoUser',
          17 => 'ldapPortalUserLdapAuth'
        ],
        'dynamicLogic' => [
          'fields' => [
            'ldapHost' => [
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'equals',
                    'attribute' => 'authenticationMethod',
                    'value' => 'LDAP'
                  ]
                ]
              ]
            ],
            'ldapUserNameAttribute' => [
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'equals',
                    'attribute' => 'authenticationMethod',
                    'value' => 'LDAP'
                  ]
                ]
              ]
            ],
            'ldapUserObjectClass' => [
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'equals',
                    'attribute' => 'authenticationMethod',
                    'value' => 'LDAP'
                  ]
                ]
              ]
            ],
            'ldapUsername' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ]
            ],
            'ldapPassword' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ]
            ],
            'testConnection' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapAuth'
                  ]
                ]
              ]
            ],
            'ldapAccountDomainName' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'in',
                    'attribute' => 'ldapAccountCanonicalForm',
                    'value' => [
                      0 => 'Backslash',
                      1 => 'Principal'
                    ]
                  ]
                ]
              ]
            ],
            'ldapAccountDomainNameShort' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'in',
                    'attribute' => 'ldapAccountCanonicalForm',
                    'value' => [
                      0 => 'Backslash',
                      1 => 'Principal'
                    ]
                  ]
                ]
              ]
            ],
            'ldapUserTitleAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserFirstNameAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserLastNameAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserEmailAddressAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserPhoneNumberAttribute' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ],
              'required' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserTeams' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapUserDefaultTeam' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapCreateEspoUser'
                  ]
                ]
              ]
            ],
            'ldapPortalUserPortals' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapPortalUserLdapAuth'
                  ]
                ]
              ]
            ],
            'ldapPortalUserRoles' => [
              'visible' => [
                'conditionGroup' => [
                  0 => [
                    'type' => 'isTrue',
                    'attribute' => 'ldapPortalUserLdapAuth'
                  ]
                ]
              ]
            ]
          ]
        ]
      ]
    ]
  ],
  'clientDefs' => [
    'ActionHistoryRecord' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'recordViews' => [
        'list' => 'views/action-history-record/record/list'
      ],
      'modalViews' => [
        'detail' => 'views/action-history-record/modals/detail'
      ]
    ],
    'AddressMap' => [
      'controller' => 'controllers/address-map'
    ],
    'ApiUser' => [
      'controller' => 'controllers/api-user',
      'views' => [
        'detail' => 'views/user/detail',
        'list' => 'views/api-user/list'
      ],
      'recordViews' => [
        'list' => 'views/user/record/list',
        'detail' => 'views/user/record/detail',
        'edit' => 'views/user/record/edit',
        'detailSmall' => 'views/user/record/detail-quick',
        'editSmall' => 'views/user/record/edit-quick'
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'avatar',
          1 => 'createdAt',
          2 => 'lastAccess'
        ],
        'detailSmall' => [
          0 => 'avatar',
          1 => 'createdAt'
        ],
        'edit' => [
          0 => 'avatar'
        ],
        'editSmall' => [
          0 => 'avatar'
        ]
      ],
      'filterList' => [],
      'boolFilterList' => []
    ],
    'Attachment' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'recordViews' => [
        'list' => 'views/attachment/record/list',
        'detail' => 'views/attachment/record/detail'
      ],
      'modalViews' => [
        'detail' => 'views/attachment/modals/detail'
      ],
      'filterList' => [
        0 => 'orphan'
      ]
    ],
    'AuthLogRecord' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'views/admin/auth-log-record/record/list',
        'detail' => 'views/admin/auth-log-record/record/detail',
        'detailSmall' => 'views/admin/auth-log-record/record/detail-small'
      ],
      'modalViews' => [
        'detail' => 'views/admin/auth-log-record/modals/detail'
      ],
      'filterList' => [
        0 => 'accepted',
        1 => 'denied'
      ],
      'createDisabled' => true,
      'relationshipPanels' => [
        'actionHistoryRecords' => [
          'createDisabled' => true,
          'selectDisabled' => true,
          'unlinkDisabled' => true,
          'rowActionsView' => 'views/record/row-actions/relationship-view-only'
        ]
      ]
    ],
    'AuthToken' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'views/admin/auth-token/record/list',
        'detail' => 'views/admin/auth-token/record/detail',
        'detailSmall' => 'views/admin/auth-token/record/detail-small'
      ],
      'modalViews' => [
        'detail' => 'views/admin/auth-token/modals/detail'
      ],
      'filterList' => [
        0 => 'active',
        1 => 'inactive'
      ],
      'createDisabled' => true,
      'relationshipPanels' => [
        'actionHistoryRecords' => [
          'createDisabled' => true,
          'selectDisabled' => true,
          'unlinkDisabled' => true,
          'rowActionsView' => 'views/record/row-actions/relationship-view-only'
        ]
      ]
    ],
    'Dashboard' => [
      'controller' => 'controllers/dashboard',
      'iconClass' => 'fas fa-th-large'
    ],
    'DashboardTemplate' => [
      'controller' => 'controllers/record',
      'views' => [
        'detail' => 'views/dashboard-template/detail'
      ],
      'menu' => [
        'detail' => [
          'buttons' => [
            0 => [
              'action' => 'deployToUsers',
              'label' => 'Deploy to Users'
            ],
            1 => [
              'action' => 'deployToTeam',
              'label' => 'Deploy to Team'
            ]
          ]
        ]
      ],
      'searchPanelDisabled' => true
    ],
    'DynamicLogic' => [
      'itemTypes' => [
        'and' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/group-base',
          'operator' => 'and'
        ],
        'or' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/group-base',
          'operator' => 'or'
        ],
        'not' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/group-not',
          'operator' => 'not'
        ],
        'equals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '='
        ],
        'notEquals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&ne;'
        ],
        'greaterThan' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&gt;'
        ],
        'lessThan' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&lt;'
        ],
        'greaterThanOrEquals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&ge;'
        ],
        'lessThanOrEquals' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-base',
          'operatorString' => '&le;'
        ],
        'isEmpty' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '= &empty;'
        ],
        'isNotEmpty' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '&ne; &empty;'
        ],
        'isTrue' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '= 1'
        ],
        'isFalse' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-operator-only-base',
          'operatorString' => '= 0'
        ],
        'in' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-multiple-values-base',
          'operatorString' => '&isin;'
        ],
        'notIn' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-multiple-values-base',
          'operatorString' => '&notin;'
        ],
        'isToday' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-is-today',
          'operatorString' => '='
        ],
        'inFuture' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-in-future',
          'operatorString' => '&isin;'
        ],
        'inPast' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-in-past',
          'operatorString' => '&isin;'
        ],
        'contains' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-link',
          'operatorString' => '&niv;'
        ],
        'notContains' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-link',
          'operatorString' => '&notni;'
        ],
        'has' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-enum',
          'operatorString' => '&niv;'
        ],
        'notHas' => [
          'view' => 'views/admin/dynamic-logic/conditions-string/item-value-enum',
          'operatorString' => '&notni;'
        ]
      ],
      'fieldTypes' => [
        'bool' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isTrue',
            1 => 'isFalse'
          ]
        ],
        'varchar' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'equals',
            1 => 'notEquals',
            2 => 'isEmpty',
            3 => 'isNotEmpty'
          ]
        ],
        'email' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'phone' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'text' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'int' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals',
            4 => 'greaterThan',
            5 => 'lessThan',
            6 => 'greaterThanOrEquals',
            7 => 'lessThanOrEquals'
          ]
        ],
        'float' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals',
            4 => 'greaterThan',
            5 => 'lessThan',
            6 => 'greaterThanOrEquals',
            7 => 'lessThanOrEquals'
          ]
        ],
        'currency' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals',
            4 => 'greaterThan',
            5 => 'lessThan',
            6 => 'greaterThanOrEquals',
            7 => 'lessThanOrEquals'
          ]
        ],
        'date' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'isToday',
            3 => 'inFuture',
            4 => 'inPast',
            5 => 'equals',
            6 => 'notEquals'
          ]
        ],
        'datetime' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'isToday',
            3 => 'inFuture',
            4 => 'inPast'
          ]
        ],
        'datetimeOptional' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/date',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'isToday',
            3 => 'inFuture',
            4 => 'inPast'
          ]
        ],
        'enum' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/enum',
          'typeList' => [
            0 => 'equals',
            1 => 'notEquals',
            2 => 'isEmpty',
            3 => 'isNotEmpty',
            4 => 'in',
            5 => 'notIn'
          ]
        ],
        'link' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals'
          ]
        ],
        'file' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'image' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'linkParent' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link-parent',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'equals',
            3 => 'notEquals'
          ]
        ],
        'linkMultiple' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/link-multiple',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'contains',
            3 => 'notContains'
          ]
        ],
        'foreign' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/base',
          'typeList' => [
            0 => 'equals',
            1 => 'notEquals',
            2 => 'isEmpty',
            3 => 'isNotEmpty'
          ]
        ],
        'id' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty'
          ]
        ],
        'multiEnum' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'has',
            3 => 'notHas'
          ]
        ],
        'array' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'has',
            3 => 'notHas'
          ]
        ],
        'checklist' => [
          'view' => 'views/admin/dynamic-logic/conditions/field-types/multi-enum',
          'typeList' => [
            0 => 'isEmpty',
            1 => 'isNotEmpty',
            2 => 'has',
            3 => 'notHas'
          ]
        ]
      ],
      'conditionTypes' => [
        'isTrue' => [
          'valueType' => 'empty'
        ],
        'isFalse' => [
          'valueType' => 'empty'
        ],
        'isEmpty' => [
          'valueType' => 'empty'
        ],
        'isNotEmpty' => [
          'valueType' => 'empty'
        ],
        'equals' => [
          'valueType' => 'field'
        ],
        'notEquals' => [
          'valueType' => 'field'
        ],
        'greaterThan' => [
          'valueType' => 'field'
        ],
        'lessThan' => [
          'valueType' => 'field'
        ],
        'greaterThanOrEquals' => [
          'valueType' => 'field'
        ],
        'lessThanOrEquals' => [
          'valueType' => 'field'
        ],
        'in' => [
          'valueType' => 'field'
        ],
        'notIn' => [
          'valueType' => 'field'
        ],
        'contains' => [
          'valueType' => 'custom'
        ],
        'notContains' => [
          'valueType' => 'custom'
        ],
        'inPast' => [
          'valueType' => 'empty'
        ],
        'isFuture' => [
          'valueType' => 'empty'
        ],
        'isToday' => [
          'valueType' => 'empty'
        ],
        'has' => [
          'valueType' => 'field'
        ],
        'notHas' => [
          'valueType' => 'field'
        ]
      ]
    ],
    'Email' => [
      'controller' => 'controllers/email',
      'acl' => 'acl/email',
      'model' => 'models/email',
      'views' => [
        'list' => 'views/email/list',
        'detail' => 'views/email/detail'
      ],
      'recordViews' => [
        'list' => 'views/email/record/list',
        'detail' => 'views/email/record/detail',
        'edit' => 'views/email/record/edit',
        'editQuick' => 'views/email/record/edit-quick',
        'detailQuick' => 'views/email/record/detail-quick',
        'compose' => 'views/email/record/compose',
        'listRelated' => 'views/email/record/list-related'
      ],
      'modalViews' => [
        'detail' => 'views/email/modals/detail',
        'compose' => 'views/modals/compose-email'
      ],
      'quickCreateModalType' => 'compose',
      'defaultSidePanelView' => 'views/email/record/panels/default-side',
      'defaultSidePanelFieldList' => [
        0 => 'teams',
        1 => 'status',
        2 => 'replied',
        3 => 'replies'
      ],
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Compose',
              'action' => 'composeEmail',
              'style' => 'danger',
              'acl' => 'create'
            ]
          ],
          'dropdown' => [
            0 => [
              'label' => 'Archive Email',
              'link' => '#Email/create',
              'acl' => 'create'
            ],
            1 => false,
            2 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate'
            ],
            3 => [
              'label' => 'Folders',
              'link' => '#EmailFolder',
              'configCheck' => '!emailFoldersDisabled',
              'accessDataList' => [
                0 => [
                  'inPortalDisabled' => true
                ]
              ]
            ],
            4 => [
              'label' => 'Filters',
              'link' => '#EmailFilter',
              'accessDataList' => [
                0 => [
                  'inPortalDisabled' => true
                ]
              ]
            ]
          ]
        ],
        'detail' => [
          'dropdown' => [
            0 => [
              'label' => 'Reply',
              'action' => 'reply',
              'acl' => 'read'
            ],
            1 => [
              'label' => 'Reply to All',
              'action' => 'replyToAll',
              'acl' => 'read'
            ],
            2 => [
              'label' => 'Forward',
              'action' => 'forward',
              'acl' => 'read'
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'replied' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'repliedId',
                  'data' => [
                    'field' => 'replied'
                  ]
                ]
              ]
            ]
          ],
          'replies' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'repliesIds',
                  'data' => [
                    'field' => 'replies'
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'filterList' => [],
      'defaultFilterData' => [],
      'boolFilterList' => [],
      'iconClass' => 'fas fa-envelope'
    ],
    'EmailAccount' => [
      'controller' => 'controllers/email-account',
      'recordViews' => [
        'list' => 'views/email-account/record/list',
        'detail' => 'views/email-account/record/detail',
        'edit' => 'views/email-account/record/edit'
      ],
      'views' => [
        'list' => 'views/email-account/list'
      ],
      'inlineEditDisabled' => true,
      'searchPanelDisabled' => true,
      'formDependency' => [
        'storeSentEmails' => [
          'map' => [
            'true' => [
              0 => [
                'action' => 'show',
                'fields' => [
                  0 => 'sentFolder'
                ]
              ],
              1 => [
                'action' => 'setRequired',
                'fields' => [
                  0 => 'sentFolder'
                ]
              ]
            ]
          ],
          'default' => [
            0 => [
              'action' => 'hide',
              'fields' => [
                0 => 'sentFolder'
              ]
            ],
            1 => [
              'action' => 'setNotRequired',
              'fields' => [
                0 => 'sentFolder'
              ]
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'smtpUsername' => [
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'isTrue',
                      'attribute' => 'useImap'
                    ],
                    1 => [
                      'type' => 'isTrue',
                      'attribute' => 'smtpAuth'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'fetchSince' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ],
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'fetchData'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ]
          ]
        ]
      ],
      'relationshipPanels' => [
        'filters' => [
          'select' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-edit-and-remove',
          'unlinkDisabled' => true
        ],
        'emails' => [
          'select' => false,
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/remove-only',
          'unlinkDisabled' => true
        ]
      ]
    ],
    'EmailAddress' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'editDisabled' => true,
      'exportDisabled' => true,
      'mergeDisabled' => true,
      'filterList' => [
        0 => 'orphan'
      ]
    ],
    'EmailFilter' => [
      'controller' => 'controllers/record',
      'modalViews' => [
        'edit' => 'views/email-filter/modals/edit'
      ],
      'recordViews' => [
        'detail' => 'views/email-filter/record/detail',
        'edit' => 'views/email-filter/record/edit',
        'editQuick' => 'views/email-filter/record/edit-small',
        'detailQuick' => 'views/email-filter/record/detail-small'
      ],
      'searchPanelDisabled' => false,
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Emails',
              'link' => '#Email',
              'style' => 'default',
              'aclScope' => 'Email'
            ]
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'EmailFolder' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'views/email-folder/list'
      ],
      'recordViews' => [
        'list' => 'views/email-folder/record/list'
      ],
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Emails',
              'link' => '#Email',
              'style' => 'default',
              'aclScope' => 'Email'
            ]
          ]
        ]
      ],
      'searchPanelDisabled' => true
    ],
    'EmailTemplate' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'views/email-template/list'
      ],
      'recordViews' => [
        'edit' => 'views/email-template/record/edit',
        'detail' => 'views/email-template/record/detail',
        'editQuick' => 'views/email-template/record/edit-quick'
      ],
      'modalViews' => [
        'select' => 'views/modals/select-records-with-categories'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'information',
            'label' => 'Info',
            'view' => 'views/email-template/record/panels/information'
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'information',
            'label' => 'Info',
            'view' => 'views/email-template/record/panels/information'
          ]
        ]
      ],
      'menu' => [
        'list' => [
          'dropdown' => [
            0 => [
              'label' => 'Manage Categories',
              'link' => '#EmailTemplateCategory',
              'acl' => 'edit',
              'aclScope' => 'EmailTemplateCategory'
            ]
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'filterList' => [
        0 => 'actual'
      ],
      'placeholderList' => [
        0 => 'today',
        1 => 'now',
        2 => 'currentYear',
        3 => 'optOutUrl',
        4 => 'optOutLink'
      ],
      'iconClass' => 'fas fa-envelope-square'
    ],
    'EmailTemplateCategory' => [
      'controller' => 'controllers/record-tree',
      'collection' => 'collections/tree',
      'menu' => [
        'listTree' => [
          'buttons' => [
            0 => [
              'label' => 'List View',
              'link' => '#EmailTemplateCategory/list',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate',
              'style' => 'default'
            ]
          ]
        ],
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Tree View',
              'link' => '#EmailTemplateCategory',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate',
              'style' => 'default'
            ]
          ]
        ]
      ],
      'relationshipPanels' => [
        'emailTemplates' => [
          'create' => false
        ]
      ]
    ],
    'ExternalAccount' => [
      'controller' => 'controllers/external-account'
    ],
    'Home' => [
      'iconClass' => 'fas fa-th-large'
    ],
    'Import' => [
      'controller' => 'controllers/import',
      'acl' => 'acl/import',
      'recordViews' => [
        'list' => 'views/import/record/list',
        'detail' => 'views/import/record/detail'
      ],
      'views' => [
        'list' => 'views/import/list',
        'detail' => 'views/import/detail'
      ],
      'bottomPanels' => [
        'detail' => [
          0 => [
            'name' => 'imported',
            'label' => 'Imported',
            'view' => 'views/import/record/panels/imported',
            'createDisabled' => true,
            'selectDisabled' => true,
            'unlinkDisabled' => true
          ],
          1 => [
            'name' => 'duplicates',
            'label' => 'Duplicates',
            'view' => 'views/import/record/panels/duplicates',
            'rowActionsView' => 'views/import/record/row-actions/duplicates',
            'createDisabled' => true,
            'selectDisabled' => true,
            'unlinkDisabled' => true
          ],
          2 => [
            'name' => 'updated',
            'label' => 'Updated',
            'view' => 'views/import/record/panels/updated',
            'createDisabled' => true,
            'selectDisabled' => true,
            'unlinkDisabled' => true
          ]
        ]
      ],
      'searchPanelDisabled' => true,
      'iconClass' => 'fas fa-file-import'
    ],
    'InboundEmail' => [
      'recordViews' => [
        'detail' => 'views/inbound-email/record/detail',
        'edit' => 'views/inbound-email/record/edit',
        'list' => 'views/inbound-email/record/list'
      ],
      'inlineEditDisabled' => true,
      'formDependency' => [
        'reply' => [
          'map' => [
            'true' => [
              0 => [
                'action' => 'show',
                'fields' => [
                  0 => 'replyEmailTemplate',
                  1 => 'replyFromAddress',
                  2 => 'replyFromName'
                ]
              ],
              1 => [
                'action' => 'setRequired',
                'fields' => [
                  0 => 'replyEmailTemplate'
                ]
              ]
            ]
          ],
          'default' => [
            0 => [
              'action' => 'hide',
              'fields' => [
                0 => 'replyEmailTemplate',
                1 => 'replyFromAddress',
                2 => 'replyFromName'
              ]
            ],
            1 => [
              'action' => 'setNotRequired',
              'fields' => [
                0 => 'replyEmailTemplate'
              ]
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'smtpUsername' => [
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'isTrue',
                      'attribute' => 'useImap'
                    ],
                    1 => [
                      'type' => 'isTrue',
                      'attribute' => 'smtpAuth'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'fetchSince' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ],
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'fetchData'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'useImap'
                ]
              ]
            ]
          ]
        ]
      ],
      'searchPanelDisabled' => true,
      'relationshipPanels' => [
        'filters' => [
          'select' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-edit-and-remove',
          'unlinkDisabled' => true
        ],
        'emails' => [
          'select' => false,
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/remove-only',
          'unlinkDisabled' => true
        ]
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [],
        'detailSmall' => [],
        'edit' => [],
        'editSmall' => []
      ]
    ],
    'Job' => [
      'modalViews' => [
        'detail' => 'views/admin/job/modals/detail'
      ],
      'recordViews' => [
        'list' => 'views/admin/job/record/list',
        'detailQuick' => 'views/admin/job/record/detail-small'
      ]
    ],
    'LastViewed' => [
      'controller' => 'controllers/last-viewed',
      'views' => [
        'list' => 'views/last-viewed/list'
      ],
      'recordViews' => [
        'list' => 'views/last-viewed/record/list'
      ]
    ],
    'LayoutSet' => [
      'controller' => 'controllers/layout-set',
      'searchPanelDisabled' => true,
      'duplicateDisabled' => true,
      'relationshipPanels' => [
        'teams' => [
          'createDisabled' => true,
          'viewDisabled' => true,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ]
      ]
    ],
    'LeadCapture' => [
      'controller' => 'controllers/record',
      'searchPanelDisabled' => true,
      'recordViews' => [
        'detail' => 'views/lead-capture/record/detail'
      ],
      'dynamicLogic' => [
        'fields' => [
          'targetList' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'subscribeToTargetList'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'subscribeToTargetList'
                ]
              ]
            ]
          ],
          'subscribeContactToTargetList' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'subscribeToTargetList'
                ]
              ]
            ]
          ],
          'optInConfirmationLifetime' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'optInConfirmationSuccessMessage' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'createLeadBeforeOptInConfirmation' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'smtpAccount' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'skipOptInConfirmationIfSubscribed' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'isTrue',
                      'attribute' => 'optInConfirmation'
                    ],
                    1 => [
                      'type' => 'isNotEmpty',
                      'attribute' => 'targetListId',
                      'data' => [
                        'field' => 'targetList'
                      ]
                    ]
                  ]
                ]
              ]
            ]
          ],
          'optInConfirmationEmailTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'optInConfirmation'
                ]
              ]
            ]
          ],
          'apiKey' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'request',
            'label' => 'Request',
            'isForm' => true,
            'view' => 'views/lead-capture/record/panels/request'
          ]
        ]
      ],
      'relationshipPanels' => [
        'logRecords' => [
          'rowActionsView' => 'views/record/row-actions/view-and-remove',
          'layout' => 'listForLeadCapture',
          'select' => false,
          'create' => false
        ]
      ]
    ],
    'LeadCaptureLogRecord' => [
      'modalViews' => [
        'detail' => 'views/lead-capture-log-record/modals/detail'
      ]
    ],
    'Note' => [
      'collection' => 'collections/note',
      'recordViews' => [
        'edit' => 'views/note/record/edit',
        'editQuick' => 'views/note/record/edit',
        'listRelated' => 'views/stream/record/list'
      ],
      'modalViews' => [
        'edit' => 'views/note/modals/edit'
      ],
      'itemViews' => [
        'Post' => 'views/stream/notes/post'
      ]
    ],
    'Notification' => [
      'controller' => 'controllers/notification',
      'acl' => 'acl/notification',
      'aclPortal' => 'acl-portal/notification',
      'collection' => 'collections/note',
      'itemViews' => [
        'System' => 'views/notification/items/system'
      ]
    ],
    'PasswordChangeRequest' => [
      'controller' => 'controllers/password-change-request'
    ],
    'PhoneNumber' => [
      'controller' => 'controllers/record',
      'createDisabled' => true,
      'editDisabled' => true,
      'exportDisabled' => true,
      'mergeDisabled' => true,
      'filterList' => [
        0 => 'orphan'
      ]
    ],
    'Portal' => [
      'controller' => 'controllers/record',
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only',
          'layout' => 'listSmall',
          'selectPrimaryFilterName' => 'activePortal'
        ]
      ],
      'searchPanelDisabled' => true
    ],
    'PortalRole' => [
      'recordViews' => [
        'detail' => 'views/portal-role/record/detail',
        'edit' => 'views/portal-role/record/edit',
        'editQuick' => 'views/portal-role/record/edit',
        'list' => 'views/portal-role/record/list'
      ],
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ]
      ],
      'views' => [
        'list' => 'views/portal-role/list'
      ]
    ],
    'PortalUser' => [
      'controller' => 'controllers/portal-user',
      'views' => [
        'detail' => 'views/user/detail',
        'list' => 'views/portal-user/list'
      ],
      'recordViews' => [
        'list' => 'views/user/record/list',
        'detail' => 'views/user/record/detail',
        'edit' => 'views/user/record/edit',
        'detailSmall' => 'views/user/record/detail-quick',
        'editSmall' => 'views/user/record/edit-quick'
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'avatar',
          1 => 'createdAt',
          2 => 'lastAccess'
        ],
        'detailSmall' => [
          0 => 'avatar',
          1 => 'createdAt'
        ],
        'edit' => [
          0 => 'avatar'
        ],
        'editSmall' => [
          0 => 'avatar'
        ]
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ]
        ]
      ],
      'filterList' => [
        0 => 'activePortal'
      ],
      'boolFilterList' => [],
      'selectDefaultFilters' => [
        'filter' => 'activePortal'
      ],
      'iconClass' => 'far fa-user-circle'
    ],
    'Preferences' => [
      'recordViews' => [
        'edit' => 'views/preferences/record/edit'
      ],
      'views' => [
        'edit' => 'views/preferences/edit'
      ],
      'acl' => 'acl/preferences',
      'aclPortal' => 'acl-portal/preferences',
      'dynamicLogic' => [
        'fields' => [
          'assignmentEmailNotificationsIgnoreEntityTypeList' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'receiveAssignmentEmailNotifications'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Role' => [
      'recordViews' => [
        'detail' => 'views/role/record/detail',
        'edit' => 'views/role/record/edit',
        'editQuick' => 'views/role/record/edit',
        'list' => 'views/role/record/list'
      ],
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ],
        'teams' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only'
        ]
      ],
      'views' => [
        'list' => 'views/role/list'
      ]
    ],
    'ScheduledJob' => [
      'controller' => 'controllers/record',
      'relationshipPanels' => [
        'log' => [
          'readOnly' => true,
          'view' => 'views/scheduled-job/record/panels/log',
          'createDisabled' => true,
          'selectDisabled' => true,
          'viewDisabled' => true,
          'unlinkDisabled' => true
        ]
      ],
      'recordViews' => [
        'list' => 'views/scheduled-job/record/list',
        'detail' => 'views/scheduled-job/record/detail'
      ],
      'views' => [
        'list' => 'views/scheduled-job/list'
      ],
      'jobWithTargetList' => [
        0 => 'CheckEmailAccounts',
        1 => 'CheckInboundEmails'
      ],
      'dynamicLogic' => [
        'fields' => [
          'job' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'ScheduledJobLogRecord' => [
      'controller' => 'controllers/record'
    ],
    'Stream' => [
      'controller' => 'controllers/stream',
      'iconClass' => 'fas fa-rss'
    ],
    'Team' => [
      'acl' => 'acl/team',
      'defaultSidePanel' => [
        'edit' => false,
        'editSmall' => false
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'createdAt'
        ]
      ],
      'relationshipPanels' => [
        'users' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-unlink-only',
          'layout' => 'listForTeam',
          'selectPrimaryFilterName' => 'active'
        ]
      ],
      'recordViews' => [
        'detail' => 'views/team/record/detail',
        'edit' => 'views/team/record/edit',
        'list' => 'views/team/record/list'
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-users'
    ],
    'Template' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'detail' => 'views/template/record/detail',
        'edit' => 'views/template/record/edit'
      ],
      'dynamicLogic' => [
        'fields' => [
          'entityType' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ],
          'footer' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'printFooter'
                ]
              ]
            ]
          ],
          'footerPosition' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'printFooter'
                ]
              ]
            ]
          ],
          'header' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'entityType'
                ]
              ]
            ]
          ],
          'headerPosition' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isTrue',
                  'attribute' => 'printHeader'
                ]
              ]
            ]
          ],
          'body' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'entityType'
                ]
              ]
            ]
          ],
          'pageWidth' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ]
          ],
          'pageHeight' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'pageFormat',
                  'value' => 'Custom'
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-file-pdf'
    ],
    'User' => [
      'controller' => 'controllers/user',
      'model' => 'models/user',
      'acl' => 'acl/user',
      'views' => [
        'detail' => 'views/user/detail',
        'list' => 'views/user/list'
      ],
      'recordViews' => [
        'detail' => 'views/user/record/detail',
        'detailSmall' => 'views/user/record/detail-quick',
        'edit' => 'views/user/record/edit',
        'editSmall' => 'views/user/record/edit-quick',
        'list' => 'views/user/record/list'
      ],
      'modalViews' => [
        'detail' => 'views/user/modals/detail',
        'massUpdate' => 'views/user/modals/mass-update'
      ],
      'defaultSidePanel' => [
        'detail' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ],
        'detailSmall' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ],
        'edit' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ],
        'editSmall' => [
          'name' => 'default',
          'label' => false,
          'view' => 'views/user/record/panels/default-side',
          'isForm' => true
        ]
      ],
      'defaultSidePanelFieldLists' => [
        'detail' => [
          0 => 'avatar',
          1 => 'createdAt',
          2 => 'lastAccess',
          3 => 'auth2FA'
        ],
        'detailSmall' => [
          0 => 'avatar',
          1 => 'lastAccess'
        ],
        'edit' => [
          0 => 'avatar'
        ],
        'editSmall' => [
          0 => 'avatar'
        ]
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/user/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/user/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'relationshipPanels' => [
        'targetLists' => [
          'create' => false,
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'layoutDefaultSidePanelDisabled' => true,
      'filterList' => [
        0 => 'active'
      ],
      'boolFilterList' => [
        0 => 'onlyMyTeam'
      ],
      'selectDefaultFilters' => [
        'filter' => 'active'
      ],
      'iconClass' => 'fas fa-user-circle'
    ],
    'Webhook' => [
      'controller' => 'controllers/record',
      'dynamicLogic' => [
        'fields' => [
          'event' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ],
          'secretKey' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Account' => [
      'controller' => 'controllers/record',
      'aclPortal' => 'crm:acl-portal/account',
      'views' => [
        'detail' => 'crm:views/account/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'relationshipPanels' => [
        'contacts' => [
          'filterList' => [
            0 => 'all',
            1 => 'accountActive'
          ],
          'layout' => 'listForAccount',
          'orderBy' => 'name'
        ],
        'opportunities' => [
          'layout' => 'listForAccount'
        ],
        'campaignLogRecords' => [
          'rowActionsView' => 'views/record/row-actions/empty',
          'select' => false,
          'create' => false
        ],
        'targetLists' => [
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'recentlyCreated'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'additionalLayouts' => [
        'detailConvert' => [
          'type' => 'detail'
        ]
      ],
      'color' => '#edc755',
      'iconClass' => 'fas fa-building'
    ],
    'Calendar' => [
      'colors' => [
        'Meeting' => '#558BBD',
        'Call' => '#CF605D',
        'Task' => '#76BA4E'
      ],
      'scopeList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
      ],
      'allDayScopeList' => [
        0 => 'Task'
      ],
      'modeList' => [
        0 => 'month',
        1 => 'agendaWeek',
        2 => 'timeline',
        3 => 'agendaDay'
      ],
      'additionalColorList' => [
        0 => '#AB78AD',
        1 => '#CC9B45'
      ],
      'iconClass' => 'far fa-calendar-alt'
    ],
    'Call' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/call',
      'views' => [
        'detail' => 'crm:views/call/detail'
      ],
      'recordViews' => [
        'list' => 'crm:views/call/record/list',
        'detail' => 'crm:views/call/record/detail'
      ],
      'modalViews' => [
        'detail' => 'crm:views/meeting/modals/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'editSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ]
      ],
      'bottomPanels' => [
        'detail' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'disabled' => true,
            'order' => 3
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'disabled' => true,
            'order' => 1
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'planned'
        ],
        1 => [
          'name' => 'held',
          'style' => 'success'
        ],
        2 => [
          'name' => 'todays'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'activityDefs' => [
        'link' => 'calls',
        'activitiesCreate' => true,
        'historyCreate' => true
      ],
      'dynamicLogic' => [
        'fields' => [
          'reminders' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Held'
                    ],
                    1 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Not Held'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-phone'
    ],
    'Campaign' => [
      'controller' => 'controllers/record',
      'menu' => [
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Target Lists',
              'link' => '#TargetList',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'TargetList'
            ]
          ],
          'dropdown' => [
            0 => [
              'label' => 'Mass Emails',
              'link' => '#MassEmail',
              'acl' => 'read',
              'aclScope' => 'MassEmail'
            ],
            1 => [
              'label' => 'Email Templates',
              'link' => '#EmailTemplate',
              'acl' => 'read',
              'aclScope' => 'EmailTemplate'
            ],
            2 => [
              'label' => 'Tracking URLs',
              'labelTranslation' => 'Campaign.links.trackingUrls',
              'link' => '#CampaignTrackingUrl',
              'acl' => 'read',
              'aclScope' => 'CampaignTrackingUrl'
            ]
          ]
        ]
      ],
      'recordViews' => [
        'detail' => 'crm:views/campaign/record/detail'
      ],
      'views' => [
        'detail' => 'crm:views/campaign/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'statistics',
            'label' => 'Statistics',
            'view' => 'crm:views/campaign/record/panels/campaign-stats',
            'hidden' => false,
            'isForm' => true
          ]
        ]
      ],
      'relationshipPanels' => [
        'campaignLogRecords' => [
          'view' => 'crm:views/campaign/record/panels/campaign-log-records',
          'layout' => 'listForCampaign',
          'rowActionsView' => 'views/record/row-actions/remove-only',
          'select' => false,
          'create' => false
        ]
      ],
      'filterList' => [
        0 => 'active'
      ],
      'dynamicLogic' => [
        'fields' => [
          'targetLists' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'or',
                  'value' => [
                    0 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Email'
                    ],
                    1 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Newsletter'
                    ],
                    2 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Mail'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'excludingTargetLists' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'or',
                  'value' => [
                    0 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Email'
                    ],
                    1 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Newsletter'
                    ],
                    2 => [
                      'type' => 'equals',
                      'attribute' => 'type',
                      'value' => 'Mail'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'contactsTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'leadsTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'accountsTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'usersTemplate' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ],
          'mailMergeOnlyWithAddress' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ]
        ],
        'panels' => [
          'mailMerge' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'type',
                  'value' => 'Mail'
                ]
              ]
            ]
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-chart-line'
    ],
    'CampaignLogRecord' => [
      'acl' => 'crm:acl/campaign-tracking-url'
    ],
    'CampaignTrackingUrl' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/campaign-tracking-url',
      'recordViews' => [
        'edit' => 'crm:views/campaign-tracking-url/record/edit',
        'editQuick' => 'crm:views/campaign-tracking-url/record/edit-small'
      ],
      'defaultSidePanel' => [
        'edit' => false,
        'editSmall' => false
      ],
      'dynamicLogic' => [
        'fields' => [
          'url' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Redirect'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Redirect'
                ]
              ]
            ]
          ],
          'message' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Show Message'
                ]
              ]
            ],
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'action',
                  'value' => 'Show Message'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Case' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'detail' => 'crm:views/case/record/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/case/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/case/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'open'
        ],
        1 => [
          'name' => 'closed',
          'style' => 'success'
        ]
      ],
      'relationshipPanels' => [
        'articles' => [
          'create' => false,
          'recordListView' => 'crm:views/knowledge-base-article/record/list-for-case',
          'rowActionsView' => 'crm:views/knowledge-base-article/record/row-actions/for-case'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'selectDefaultFilters' => [
        'filter' => 'open'
      ],
      'allowInternalNotes' => true,
      'dynamicLogic' => [
        'fields' => [
          'number' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ],
      'additionalLayouts' => [
        'detailPortal' => [
          'type' => 'detail'
        ],
        'detailSmallPortal' => [
          'type' => 'detail'
        ],
        'listPortal' => [
          'type' => 'list'
        ]
      ],
      'iconClass' => 'fas fa-briefcase'
    ],
    'Contact' => [
      'controller' => 'controllers/record',
      'aclPortal' => 'crm:acl-portal/contact',
      'views' => [
        'detail' => 'crm:views/contact/detail'
      ],
      'recordViews' => [
        'detail' => 'crm:views/contact/record/detail',
        'detailQuick' => 'crm:views/contact/record/detail-small'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'relationshipPanels' => [
        'campaignLogRecords' => [
          'rowActionsView' => 'views/record/row-actions/empty',
          'select' => false,
          'create' => false
        ],
        'opportunities' => [
          'layout' => 'listForContact'
        ],
        'targetLists' => [
          'create' => false,
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'additionalLayouts' => [
        'detailConvert' => [
          'type' => 'detail'
        ],
        'listForAccount' => [
          'type' => 'listSmall'
        ]
      ],
      'filterList' => [
        0 => 'portalUsers'
      ],
      'dynamicLogic' => [
        'fields' => [
          'title' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'accountId'
                ]
              ]
            ]
          ],
          'portalUser' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'portalUserId',
                  'data' => [
                    'field' => 'portalUser'
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'color' => '#a4c5e0',
      'iconClass' => 'fas fa-id-badge'
    ],
    'Document' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'crm:views/document/list'
      ],
      'modalViews' => [
        'select' => 'crm:views/document/modals/select-records'
      ],
      'filterList' => [
        0 => 'active',
        1 => 'draft'
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'selectDefaultFilters' => [
        'filter' => 'active'
      ],
      'menu' => [
        'list' => [
          'dropdown' => [
            0 => [
              'label' => 'Manage Folders',
              'link' => '#DocumentFolder',
              'acl' => 'edit',
              'aclScope' => 'DocumentFolder'
            ]
          ]
        ]
      ],
      'iconClass' => 'far fa-file-alt'
    ],
    'DocumentFolder' => [
      'controller' => 'controllers/record-tree',
      'collection' => 'collections/tree',
      'menu' => [
        'listTree' => [
          'buttons' => [
            0 => [
              'label' => 'List View',
              'link' => '#DocumentFolder/list',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Documents',
              'link' => '#Document',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'Document'
            ]
          ]
        ],
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Tree View',
              'link' => '#DocumentFolder',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Documents',
              'link' => '#Document',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'Document'
            ]
          ]
        ]
      ]
    ],
    'EmailQueueItem' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'crm:views/email-queue-item/list'
      ],
      'recordViews' => [
        'list' => 'crm:views/email-queue-item/record/list'
      ]
    ],
    'KnowledgeBaseArticle' => [
      'controller' => 'controllers/record',
      'views' => [
        'list' => 'crm:views/knowledge-base-article/list'
      ],
      'recordViews' => [
        'editQuick' => 'crm:views/knowledge-base-article/record/edit-quick',
        'detailQuick' => 'crm:views/knowledge-base-article/record/detail-quick',
        'detail' => 'crm:views/knowledge-base-article/record/detail',
        'edit' => 'crm:views/knowledge-base-article/record/edit',
        'list' => 'crm:views/knowledge-base-article/record/list'
      ],
      'modalViews' => [
        'select' => 'crm:views/knowledge-base-article/modals/select-records'
      ],
      'filterList' => [
        0 => [
          'name' => 'published',
          'inPortalDisabled' => true
        ]
      ],
      'boolFilterList' => [
        0 => [
          'name' => 'onlyMy',
          'inPortalDisabled' => true
        ]
      ],
      'relationshipPanels' => [
        'cases' => [
          'create' => false,
          'rowActionsView' => 'views/record/row-actions/relationship-view-and-unlink'
        ]
      ],
      'menu' => [
        'list' => [
          'dropdown' => [
            0 => [
              'label' => 'Manage Categories',
              'link' => '#KnowledgeBaseCategory',
              'acl' => 'edit',
              'aclScope' => 'KnowledgeBaseCategory'
            ]
          ]
        ]
      ],
      'additionalLayouts' => [
        'detailPortal' => [
          'type' => 'detail'
        ],
        'detailSmallPortal' => [
          'type' => 'detail'
        ],
        'listPortal' => [
          'type' => 'list'
        ]
      ],
      'iconClass' => 'fas fa-book'
    ],
    'KnowledgeBaseCategory' => [
      'controller' => 'controllers/record-tree',
      'collection' => 'collections/tree',
      'menu' => [
        'listTree' => [
          'buttons' => [
            0 => [
              'label' => 'List View',
              'link' => '#KnowledgeBaseCategory/list',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Articles',
              'link' => '#KnowledgeBaseArticle',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'KnowledgeBaseArticle'
            ]
          ]
        ],
        'list' => [
          'buttons' => [
            0 => [
              'label' => 'Tree View',
              'link' => '#KnowledgeBaseCategory',
              'acl' => 'read',
              'style' => 'default'
            ],
            1 => [
              'label' => 'Articles',
              'link' => '#KnowledgeBaseArticle',
              'acl' => 'read',
              'style' => 'default',
              'aclScope' => 'KnowledgeBaseArticle'
            ]
          ]
        ]
      ]
    ],
    'Lead' => [
      'controller' => 'crm:controllers/lead',
      'views' => [
        'detail' => 'crm:views/lead/detail'
      ],
      'recordViews' => [
        'detail' => 'crm:views/lead/record/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ],
          1 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          3 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ],
          1 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          3 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'editSmall' => [
          0 => [
            'name' => 'convertedTo',
            'label' => 'Converted To',
            'view' => 'crm:views/lead/record/panels/converted-to',
            'notRefreshable' => true,
            'hidden' => true,
            'style' => 'success',
            'isForm' => true
          ]
        ]
      ],
      'relationshipPanels' => [
        'campaignLogRecords' => [
          'rowActionsView' => 'views/record/row-actions/empty',
          'select' => false,
          'create' => false
        ],
        'targetLists' => [
          'create' => false,
          'rowActionsView' => 'crm:views/record/row-actions/relationship-target',
          'layout' => 'listForTarget',
          'view' => 'crm:views/record/panels/target-lists'
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'actual'
        ],
        1 => [
          'name' => 'converted',
          'style' => 'success'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'dynamicLogic' => [
        'fields' => [
          'name' => [
            'required' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isEmpty',
                  'attribute' => 'accountName'
                ],
                1 => [
                  'type' => 'isEmpty',
                  'attribute' => 'emailAddress'
                ],
                2 => [
                  'type' => 'isEmpty',
                  'attribute' => 'phoneNumber'
                ]
              ]
            ]
          ],
          'convertedAt' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'equals',
                      'attribute' => 'status',
                      'value' => 'Converted'
                    ],
                    1 => [
                      'type' => 'isNotEmpty',
                      'attribute' => 'convertedAt'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ],
        'panels' => [
          'convertedTo' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'status',
                  'value' => 'Converted'
                ]
              ]
            ]
          ]
        ]
      ],
      'color' => '#d6a2c9',
      'iconClass' => 'fas fa-address-card'
    ],
    'MassEmail' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/mass-email',
      'recordViews' => [
        'detail' => 'crm:views/mass-email/record/detail',
        'edit' => 'crm:views/mass-email/record/edit',
        'editQuick' => 'crm:views/mass-email/record/edit-small'
      ],
      'views' => [
        'detail' => 'crm:views/mass-email/detail'
      ],
      'defaultSidePanel' => [
        'edit' => false,
        'editSmall' => false
      ],
      'menu' => [
        'list' => [
          'dropdown' => [
            0 => [
              'labelTranslation' => 'Global.scopeNamesPlural.EmailQueueItem',
              'link' => '#EmailQueueItem',
              'accessDataList' => [
                0 => [
                  'isAdminOnly' => true
                ]
              ]
            ]
          ]
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'status' => [
            'readOnly' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'or',
                      'value' => [
                        0 => [
                          'type' => 'equals',
                          'attribute' => 'status',
                          'value' => 'Complete'
                        ],
                        1 => [
                          'type' => 'equals',
                          'attribute' => 'status',
                          'value' => 'In Process'
                        ],
                        2 => [
                          'type' => 'equals',
                          'attribute' => 'status',
                          'value' => 'Failed'
                        ]
                      ]
                    ],
                    1 => [
                      'type' => 'isNotEmpty',
                      'attribute' => 'id'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ],
        'options' => [
          'status' => [
            0 => [
              'optionList' => [
                0 => 'Draft',
                1 => 'Pending'
              ],
              'conditionGroup' => [
                0 => [
                  'type' => 'in',
                  'attribute' => 'status',
                  'value' => [
                    0 => 'Draft',
                    1 => 'Pending'
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'actual'
        ],
        1 => [
          'name' => 'complete',
          'style' => 'success'
        ]
      ]
    ],
    'Meeting' => [
      'controller' => 'controllers/record',
      'acl' => 'crm:acl/meeting',
      'views' => [
        'detail' => 'crm:views/meeting/detail'
      ],
      'recordViews' => [
        'list' => 'crm:views/meeting/record/list',
        'detail' => 'crm:views/meeting/record/detail'
      ],
      'modalViews' => [
        'detail' => 'crm:views/meeting/modals/detail'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'options' => [
              'fieldList' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ]
            ],
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ],
        'editSmall' => [
          0 => [
            'name' => 'attendees',
            'label' => 'Attendees',
            'view' => 'crm:views/meeting/record/panels/attendees',
            'sticked' => true,
            'isForm' => true,
            'notRefreshable' => true
          ]
        ]
      ],
      'bottomPanels' => [
        'detail' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'order' => 3
          ]
        ],
        'edit' => [
          0 => [
            'name' => 'scheduler',
            'label' => 'Scheduler',
            'view' => 'crm:views/meeting/record/panels/scheduler',
            'order' => 1
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'planned'
        ],
        1 => [
          'name' => 'held',
          'style' => 'success'
        ],
        2 => [
          'name' => 'todays'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'activityDefs' => [
        'link' => 'meetings',
        'activitiesCreate' => true,
        'historyCreate' => true
      ],
      'dynamicLogic' => [
        'fields' => [
          'reminders' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Held'
                    ],
                    1 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Not Held'
                    ]
                  ]
                ]
              ]
            ]
          ],
          'duration' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isFalse',
                  'attribute' => 'isAllDay'
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-calendar-check'
    ],
    'Opportunity' => [
      'controller' => 'controllers/record',
      'views' => [
        'detail' => 'crm:views/opportunity/detail'
      ],
      'recordViews' => [
        'edit' => 'crm:views/opportunity/record/edit',
        'editSmall' => 'crm:views/opportunity/record/edit-small',
        'list' => 'crm:views/opportunity/record/list',
        'kanban' => 'crm:views/opportunity/record/kanban'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/opportunity/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ],
        'detailSmall' => [
          0 => [
            'name' => 'activities',
            'label' => 'Activities',
            'view' => 'crm:views/record/panels/activities',
            'aclScope' => 'Activities'
          ],
          1 => [
            'name' => 'history',
            'label' => 'History',
            'view' => 'crm:views/record/panels/history',
            'aclScope' => 'Activities'
          ],
          2 => [
            'name' => 'tasks',
            'label' => 'Tasks',
            'view' => 'crm:views/record/panels/tasks',
            'aclScope' => 'Task'
          ]
        ]
      ],
      'filterList' => [
        0 => [
          'name' => 'open'
        ],
        1 => [
          'name' => 'won',
          'style' => 'success'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'additionalLayouts' => [
        'detailConvert' => [
          'type' => 'detail'
        ],
        'listForAccount' => [
          'type' => 'listSmall'
        ],
        'listForContact' => [
          'type' => 'listSmall'
        ]
      ],
      'kanbanViewMode' => true,
      'dynamicLogic' => [
        'fields' => [
          'lastStage' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'stage',
                  'value' => 'Closed Lost'
                ]
              ]
            ]
          ],
          'stage' => [
            'visible' => NULL
          ]
        ]
      ],
      'color' => '#9fc77e',
      'iconClass' => 'fas fa-dollar-sign'
    ],
    'Target' => [
      'controller' => 'controllers/record',
      'views' => [
        'detail' => 'Crm:Target.Detail'
      ],
      'menu' => [
        'detail' => [
          'buttons' => [
            0 => [
              'label' => 'Convert to Lead',
              'action' => 'convertToLead',
              'acl' => 'edit'
            ]
          ]
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ]
    ],
    'TargetList' => [
      'controller' => 'controllers/record',
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'sidePanels' => [
        'detail' => [
          0 => [
            'name' => 'optedOut',
            'label' => 'Opted Out',
            'view' => 'crm:views/target-list/record/panels/opted-out'
          ]
        ]
      ],
      'recordViews' => [
        'detail' => 'crm:views/target-list/record/detail'
      ],
      'relationshipPanels' => [
        'contacts' => [
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'contacts'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ],
        'leads' => [
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'leads'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ],
        'accounts' => [
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'accounts'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ],
        'users' => [
          'create' => false,
          'actionList' => [
            0 => [
              'label' => 'Unlink All',
              'action' => 'unlinkAllRelated',
              'acl' => 'edit',
              'data' => [
                'link' => 'users'
              ]
            ]
          ],
          'rowActionsView' => 'crm:views/target-list/record/row-actions/default',
          'view' => 'crm:views/target-list/record/panels/relationship',
          'massSelect' => true
        ]
      ],
      'dynamicLogic' => [
        'fields' => [
          'entryCount' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ],
          'optedOutCount' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'isNotEmpty',
                  'attribute' => 'id'
                ]
              ]
            ]
          ]
        ]
      ],
      'iconClass' => 'fas fa-crosshairs'
    ],
    'Task' => [
      'controller' => 'controllers/record',
      'recordViews' => [
        'list' => 'crm:views/task/record/list',
        'detail' => 'crm:views/task/record/detail'
      ],
      'views' => [
        'list' => 'crm:views/task/list',
        'detail' => 'crm:views/task/detail'
      ],
      'modalViews' => [
        'detail' => 'crm:views/task/modals/detail'
      ],
      'dynamicLogic' => [
        'fields' => [
          'dateCompleted' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'equals',
                  'attribute' => 'status',
                  'value' => 'Completed'
                ]
              ]
            ]
          ],
          'reminders' => [
            'visible' => [
              'conditionGroup' => [
                0 => [
                  'type' => 'and',
                  'value' => [
                    0 => [
                      'type' => 'or',
                      'value' => [
                        0 => [
                          'type' => 'isNotEmpty',
                          'attribute' => 'dateEnd'
                        ],
                        1 => [
                          'type' => 'isNotEmpty',
                          'attribute' => 'dateEndDate'
                        ]
                      ]
                    ],
                    1 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Completed'
                    ],
                    2 => [
                      'type' => 'notEquals',
                      'attribute' => 'status',
                      'value' => 'Canceled'
                    ]
                  ]
                ]
              ]
            ]
          ]
        ]
      ],
      'filterList' => [
        0 => 'actual',
        1 => [
          'name' => 'completed',
          'style' => 'success'
        ],
        2 => [
          'name' => 'todays'
        ],
        3 => [
          'name' => 'overdue',
          'style' => 'danger'
        ],
        4 => [
          'name' => 'deferred'
        ]
      ],
      'boolFilterList' => [
        0 => 'onlyMy'
      ],
      'iconClass' => 'fas fa-tasks',
      'kanbanViewMode' => true
    ]
  ],
  'dashlets' => [
    'Emails' => [
      'view' => 'views/dashlets/emails',
      'aclScope' => 'Email',
      'entityType' => 'Email',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true,
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateSent',
          'order' => 'desc',
          'displayRecords' => 5,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'subject',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateSent',
                  'view' => 'views/fields/datetime-short'
                ],
                1 => [
                  'name' => 'personStringData',
                  'view' => 'views/email/fields/person-string-data-for-expanded'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'inbox'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Iframe' => [
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'url' => [
            'type' => 'url',
            'required' => true
          ]
        ],
        'defaults' => [
          'autorefreshInterval' => 0
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'url'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ]
            ]
          ]
        ]
      ]
    ],
    'Records' => [
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true,
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30,
              8 => 50
            ]
          ],
          'entityType' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/entity-type',
            'translation' => 'Global.scopeNames'
          ],
          'primaryFilter' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/primary-filter'
          ],
          'boolFilterList' => [
            'type' => 'multiEnum',
            'view' => 'views/dashlets/fields/records/bool-filter-list'
          ],
          'sortBy' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/sort-by'
          ],
          'sortDirection' => [
            'type' => 'enum',
            'view' => 'views/dashlets/fields/records/sort-direction',
            'options' => [
              0 => 'asc',
              1 => 'desc'
            ],
            'translation' => 'EntityManager.options.sortDirection'
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'displayRecords' => 10,
          'autorefreshInterval' => 0.5,
          'expandedLayout' => [
            'rows' => []
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'entityType'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'primaryFilter'
                ],
                1 => [
                  'name' => 'sortBy'
                ]
              ],
              3 => [
                0 => [
                  'name' => 'boolFilterList'
                ],
                1 => [
                  'name' => 'sortDirection'
                ]
              ],
              4 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              5 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Stream' => [
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true,
            'trim' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20
            ]
          ],
          'skipOwn' => [
            'type' => 'bool',
            'tooltip' => true
          ]
        ],
        'defaults' => [
          'displayRecords' => 10,
          'autorefreshInterval' => 0.5,
          'skipOwn' => true
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'skipOwn'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Activities' => [
      'view' => 'crm:views/dashlets/activities',
      'options' => [
        'view' => 'crm:views/dashlets/options/activities',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'enabledScopeList' => [
            'type' => 'multiEnum',
            'translation' => 'Global.scopeNamesPlural',
            'required' => true
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30,
              8 => 50
            ]
          ],
          'futureDays' => [
            'type' => 'int',
            'min' => 0,
            'required' => true
          ]
        ],
        'defaults' => [
          'displayRecords' => 10,
          'autorefreshInterval' => 0.5,
          'futureDays' => 3,
          'enabledScopeList' => [
            0 => 'Meeting',
            1 => 'Call',
            2 => 'Task'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'enabledScopeList'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'futureDays'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Calendar' => [
      'view' => 'crm:views/dashlets/calendar',
      'aclScope' => 'Calendar',
      'options' => [
        'view' => 'crm:views/dashlets/options/calendar',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'enabledScopeList' => [
            'type' => 'multiEnum',
            'translation' => 'Global.scopeNamesPlural',
            'required' => true
          ],
          'mode' => [
            'type' => 'enum',
            'options' => [
              0 => 'basicWeek',
              1 => 'agendaWeek',
              2 => 'timeline',
              3 => 'month',
              4 => 'basicDay',
              5 => 'agendaDay'
            ]
          ],
          'users' => [
            'type' => 'linkMultiple',
            'entity' => 'User',
            'view' => 'views/fields/assigned-users',
            'sortable' => true
          ],
          'teams' => [
            'type' => 'linkMultiple',
            'entity' => 'Team',
            'view' => 'crm:views/calendar/fields/teams'
          ]
        ],
        'defaults' => [
          'autorefreshInterval' => 0.5,
          'mode' => 'basicWeek',
          'enabledScopeList' => [
            0 => 'Meeting',
            1 => 'Call',
            2 => 'Task'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'mode'
                ],
                1 => [
                  'name' => 'enabledScopeList'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'users'
                ],
                1 => false
              ],
              3 => [
                0 => [
                  'name' => 'teams'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Calls' => [
      'view' => 'crm:views/dashlets/calls',
      'aclScope' => 'Call',
      'entityType' => 'Call',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateStart',
          'order' => 'asc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateStart'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'planned',
            'advanced' => [
              1 => [
                'type' => 'or',
                'value' => [
                  1 => [
                    'type' => 'today',
                    'field' => 'dateStart',
                    'dateTime' => true
                  ],
                  2 => [
                    'type' => 'future',
                    'field' => 'dateEnd',
                    'dateTime' => true
                  ]
                ]
              ]
            ]
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Cases' => [
      'view' => 'views/dashlets/abstract/record-list',
      'aclScope' => 'Case',
      'entityType' => 'Case',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'number',
          'order' => 'desc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'number'
                ],
                1 => [
                  'name' => 'name',
                  'link' => true
                ],
                2 => [
                  'name' => 'type'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'status'
                ],
                1 => [
                  'name' => 'priority'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'open'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Leads' => [
      'view' => 'views/dashlets/abstract/record-list',
      'aclScope' => 'Lead',
      'entityType' => 'Lead',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'createdAt',
          'order' => 'desc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ],
                1 => [
                  'name' => 'addressCity'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'status'
                ],
                1 => [
                  'name' => 'source'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'actual'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Meetings' => [
      'view' => 'crm:views/dashlets/meetings',
      'aclScope' => 'Meeting',
      'entityType' => 'Meeting',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateStart',
          'order' => 'asc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateStart'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'planned',
            'advanced' => [
              1 => [
                'type' => 'or',
                'value' => [
                  1 => [
                    'type' => 'today',
                    'field' => 'dateStart',
                    'dateTime' => true
                  ],
                  2 => [
                    'type' => 'future',
                    'field' => 'dateEnd',
                    'dateTime' => true
                  ]
                ]
              ]
            ]
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'Opportunities' => [
      'view' => 'views/dashlets/abstract/record-list',
      'aclScope' => 'Opportunity',
      'entityType' => 'Opportunity',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'closeDate',
          'order' => 'asc',
          'displayRecords' => 5,
          'populateAssignedUser' => true,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'stage'
                ],
                1 => [
                  'name' => 'amount'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'open'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout'
                ],
                1 => false
              ]
            ]
          ]
        ]
      ]
    ],
    'OpportunitiesByLeadSource' => [
      'view' => 'crm:views/dashlets/opportunities-by-lead-source',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/chart',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentMonth',
              3 => 'currentFiscalYear',
              4 => 'currentFiscalQuarter',
              5 => 'ever',
              6 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear'
        ]
      ]
    ],
    'OpportunitiesByStage' => [
      'view' => 'crm:views/dashlets/opportunities-by-stage',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/chart',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentMonth',
              3 => 'currentFiscalYear',
              4 => 'currentFiscalQuarter',
              5 => 'ever',
              6 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear'
        ]
      ]
    ],
    'SalesByMonth' => [
      'view' => 'crm:views/dashlets/sales-by-month',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/chart',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentFiscalYear',
              3 => 'currentFiscalQuarter',
              4 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => false
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear'
        ]
      ]
    ],
    'SalesPipeline' => [
      'view' => 'crm:views/dashlets/sales-pipeline',
      'aclScope' => 'Opportunity',
      'options' => [
        'view' => 'crm:views/dashlets/options/sales-pipeline',
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'dateFrom' => [
            'type' => 'date',
            'required' => true
          ],
          'dateTo' => [
            'type' => 'date',
            'required' => true
          ],
          'dateFilter' => [
            'type' => 'enum',
            'options' => [
              0 => 'currentYear',
              1 => 'currentQuarter',
              2 => 'currentMonth',
              3 => 'currentFiscalYear',
              4 => 'currentFiscalQuarter',
              5 => 'ever',
              6 => 'between'
            ],
            'default' => 'currentYear',
            'translation' => 'Global.options.dateSearchRanges'
          ],
          'useLastStage' => [
            'type' => 'bool'
          ],
          'team' => [
            'type' => 'link',
            'entity' => 'Team',
            'view' => 'crm:views/dashlets/options/sales-pipeline/fields/team'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title',
                  'span' => 2
                ]
              ],
              1 => [
                0 => [
                  'name' => 'dateFilter'
                ],
                1 => [
                  'name' => 'useLastStage'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'dateFrom'
                ],
                1 => [
                  'name' => 'dateTo'
                ]
              ],
              3 => [
                0 => [
                  'name' => 'team'
                ],
                1 => false
              ]
            ]
          ]
        ],
        'defaults' => [
          'dateFilter' => 'currentYear',
          'teamId' => NULL,
          'teamName' => NULL
        ]
      ]
    ],
    'Tasks' => [
      'view' => 'crm:views/dashlets/tasks',
      'aclScope' => 'Task',
      'entityType' => 'Task',
      'options' => [
        'fields' => [
          'title' => [
            'type' => 'varchar',
            'required' => true
          ],
          'autorefreshInterval' => [
            'type' => 'enumFloat',
            'options' => [
              0 => 0,
              1 => 0.5,
              2 => 1,
              3 => 2,
              4 => 5,
              5 => 10
            ]
          ],
          'displayRecords' => [
            'type' => 'enumInt',
            'options' => [
              0 => 3,
              1 => 4,
              2 => 5,
              3 => 7,
              4 => 10,
              5 => 15,
              6 => 20,
              7 => 30
            ]
          ],
          'expandedLayout' => [
            'type' => 'base',
            'view' => 'views/dashlets/fields/records/expanded-layout'
          ]
        ],
        'defaults' => [
          'orderBy' => 'dateEnd',
          'order' => 'asc',
          'displayRecords' => 5,
          'expandedLayout' => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'name',
                  'link' => true
                ]
              ],
              1 => [
                0 => [
                  'name' => 'status'
                ],
                1 => [
                  'name' => 'dateEnd'
                ]
              ]
            ]
          ],
          'searchData' => [
            'bool' => [
              'onlyMy' => true
            ],
            'primary' => 'actualStartingNotInFuture'
          ]
        ],
        'layout' => [
          0 => [
            'rows' => [
              0 => [
                0 => [
                  'name' => 'title'
                ]
              ],
              1 => [
                0 => [
                  'name' => 'displayRecords'
                ],
                1 => [
                  'name' => 'autorefreshInterval'
                ]
              ],
              2 => [
                0 => [
                  'name' => 'expandedLayout',
                  'fullWidth' => true
                ]
              ]
            ]
          ]
        ]
      ]
    ]
  ],
  'entityAcl' => [
    'AuthLogRecord' => [
      'fields' => [
        'username' => [
          'readOnly' => true
        ],
        'portal' => [
          'readOnly' => true
        ],
        'user' => [
          'readOnly' => true
        ],
        'ipAddress' => [
          'readOnly' => true
        ],
        'authToken' => [
          'readOnly' => true
        ],
        'isDenied' => [
          'readOnly' => true
        ],
        'denialReason' => [
          'readOnly' => true
        ],
        'microtime' => [
          'readOnly' => true
        ],
        'requestUrl' => [
          'readOnly' => true
        ],
        'requestMethod' => [
          'readOnly' => true
        ]
      ]
    ],
    'AuthToken' => [
      'fields' => [
        'hash' => [
          'internal' => true,
          'readOnly' => true
        ],
        'token' => [
          'internal' => true,
          'readOnly' => true
        ],
        'secret' => [
          'internal' => true,
          'readOnly' => true
        ],
        'portal' => [
          'readOnly' => true
        ],
        'user' => [
          'readOnly' => true
        ],
        'ipAddress' => [
          'readOnly' => true
        ],
        'lastAccess' => [
          'readOnly' => true
        ],
        'createdAt' => [
          'readOnly' => true
        ],
        'modifiedAt' => [
          'readOnly' => true
        ]
      ]
    ],
    'Email' => [
      'fields' => [
        'users' => [
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'onlyAdmin' => true
        ]
      ]
    ],
    'EmailAccount' => [
      'fields' => [
        'password' => [
          'internal' => true
        ],
        'smtpPassword' => [
          'internal' => true
        ],
        'imapHandler' => [
          'internal' => true
        ],
        'smtpHandler' => [
          'internal' => true
        ],
        'fetchData' => [
          'readOnly' => true
        ]
      ]
    ],
    'InboundEmail' => [
      'fields' => [
        'password' => [
          'internal' => true
        ],
        'smtpPassword' => [
          'internal' => true
        ],
        'imapHandler' => [
          'internal' => true
        ],
        'smtpHandler' => [
          'internal' => true
        ],
        'fetchData' => [
          'readOnly' => true
        ]
      ]
    ],
    'Integration' => [
      'languageAclDisabled' => true
    ],
    'User' => [
      'fields' => [
        'userName' => [
          'nonAdminReadOnly' => true
        ],
        'apiKey' => [
          'onlyAdmin' => true,
          'readOnly' => true,
          'nonAdminReadOnly' => true
        ],
        'password' => [
          'internal' => true,
          'nonAdminReadOnly' => true
        ],
        'passwordConfirm' => [
          'internal' => true,
          'nonAdminReadOnly' => true
        ],
        'authLogRecordId' => [
          'internal' => true
        ],
        'authMethod' => [
          'onlyAdmin' => true
        ],
        'secretKey' => [
          'readOnly' => true,
          'onlyAdmin' => true
        ],
        'isActive' => [
          'nonAdminReadOnly' => true
        ],
        'emailAddress' => [
          'nonAdminReadOnly' => true
        ],
        'teams' => [
          'nonAdminReadOnly' => true
        ],
        'roles' => [
          'nonAdminReadOnly' => true
        ],
        'portals' => [
          'nonAdminReadOnly' => true
        ],
        'portalRoles' => [
          'nonAdminReadOnly' => true
        ],
        'contact' => [
          'nonAdminReadOnly' => true
        ],
        'accounts' => [
          'nonAdminReadOnly' => true
        ],
        'type' => [
          'nonAdminReadOnly' => true
        ],
        'auth2FA' => [
          'onlyAdmin' => true
        ],
        'userData' => [
          'internal' => true
        ]
      ],
      'links' => [
        'teams' => [
          'nonAdminReadOnly' => true
        ],
        'roles' => [
          'onlyAdmin' => true
        ],
        'preferences' => [
          'onlyAdmin' => true
        ],
        'userData' => [
          'internal' => true
        ]
      ]
    ]
  ],
  'entityDefs' => [
    'ActionHistoryRecord' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'index' => true
        ],
        'targetType' => [
          'view' => 'views/action-history-record/fields/target-type',
          'translation' => 'Global.scopeNames'
        ],
        'target' => [
          'type' => 'linkParent',
          'view' => 'views/action-history-record/fields/target'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'action' => [
          'type' => 'enum',
          'options' => [
            0 => 'read',
            1 => 'update',
            2 => 'create',
            3 => 'delete'
          ]
        ],
        'createdAt' => [
          'type' => 'datetime',
          'hasSeconds' => true
        ],
        'user' => [
          'type' => 'link'
        ],
        'userType' => [
          'type' => 'foreign',
          'link' => 'user',
          'field' => 'type',
          'view' => 'views/fields/foreign-enum',
          'notStorable' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'maxLength' => '39'
        ],
        'authToken' => [
          'type' => 'link'
        ],
        'authLogRecord' => [
          'type' => 'link'
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'target' => [
          'type' => 'belongsToParent'
        ],
        'authToken' => [
          'type' => 'belongsTo',
          'entity' => 'AuthToken',
          'foreignName' => 'id',
          'foreign' => 'actionHistoryRecords'
        ],
        'authLogRecord' => [
          'type' => 'belongsTo',
          'entity' => 'AuthLogRecord',
          'foreignName' => 'id',
          'foreign' => 'actionHistoryRecords'
        ]
      ],
      'collection' => [
        'sortBy' => 'number',
        'asc' => false,
        'textFilterFields' => [
          0 => 'ipAddress',
          1 => 'userName'
        ],
        'orderBy' => 'number',
        'order' => 'desc'
      ]
    ],
    'ArrayValue' => [
      'fields' => [
        'value' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100
        ],
        'entity' => [
          'type' => 'linkParent'
        ],
        'attribute' => [
          'type' => 'varchar',
          'maxLength' => 100
        ]
      ],
      'indexes' => [
        'entityTypeValue' => [
          'columns' => [
            0 => 'entityType',
            1 => 'value'
          ]
        ],
        'entityValue' => [
          'columns' => [
            0 => 'entityType',
            1 => 'entityId',
            2 => 'value'
          ]
        ]
      ]
    ],
    'Attachment' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true,
          'view' => 'views/attachment/fields/name'
        ],
        'type' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'size' => [
          'type' => 'int',
          'min' => 0
        ],
        'parent' => [
          'type' => 'linkParent',
          'view' => 'views/attachment/fields/parent'
        ],
        'related' => [
          'type' => 'linkParent',
          'noLoad' => true,
          'view' => 'views/attachment/fields/parent'
        ],
        'sourceId' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'readOnly' => true,
          'disabled' => true,
          'index' => true
        ],
        'field' => [
          'type' => 'varchar',
          'disabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'contents' => [
          'type' => 'text',
          'notStorable' => true
        ],
        'role' => [
          'type' => 'enum',
          'maxLength' => 36,
          'options' => [
            0 => 'Attachment',
            1 => 'Inline Attachment',
            2 => 'Import File',
            3 => 'Export File',
            4 => 'Mail Merge',
            5 => 'Mass Pdf'
          ]
        ],
        'storage' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'default' => NULL
        ],
        'storageFilePath' => [
          'type' => 'varchar',
          'maxLength' => 260,
          'default' => NULL
        ],
        'global' => [
          'type' => 'bool',
          'default' => false
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'attachments'
        ],
        'related' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'sortBy' => 'createdAt',
        'asc' => false,
        'orderBy' => 'createdAt',
        'order' => 'desc'
      ],
      'indexes' => [
        'parent' => [
          'columns' => [
            0 => 'parentType',
            1 => 'parentId'
          ]
        ]
      ],
      'sourceList' => [
        0 => 'Document'
      ]
    ],
    'AuthLogRecord' => [
      'fields' => [
        'username' => [
          'type' => 'varchar',
          'readOnly' => true,
          'maxLength' => 100
        ],
        'portal' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'user' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'authToken' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'maxLength' => '45',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'isDenied' => [
          'type' => 'bool',
          'readOnly' => true
        ],
        'denialReason' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'CREDENTIALS',
            2 => 'INACTIVE_USER',
            3 => 'IS_PORTAL_USER',
            4 => 'IS_NOT_PORTAL_USER',
            5 => 'USER_IS_NOT_IN_PORTAL'
          ],
          'readOnly' => true
        ],
        'requestTime' => [
          'type' => 'float',
          'readOnly' => true
        ],
        'requestUrl' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'requestMethod' => [
          'type' => 'varchar',
          'readOnly' => true,
          'maxLength' => '15'
        ],
        'authTokenIsActive' => [
          'type' => 'foreign',
          'link' => 'authToken',
          'field' => 'isActive',
          'readOnly' => true,
          'view' => 'views/fields/foreign-bool'
        ],
        'authenticationMethod' => [
          'type' => 'enum',
          'options' => [
            0 => 'Espo',
            1 => 'LDAP',
            2 => 'ApiKey',
            3 => 'Hmac'
          ]
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User',
          'noJoin' => true
        ],
        'portal' => [
          'type' => 'belongsTo',
          'entity' => 'Portal'
        ],
        'authToken' => [
          'type' => 'belongsTo',
          'entity' => 'AuthToken',
          'foreign' => 'authLog',
          'foreignName' => 'id'
        ],
        'actionHistoryRecords' => [
          'type' => 'hasMany',
          'entity' => 'ActionHistoryRecord',
          'foreign' => 'authLogRecord'
        ]
      ],
      'collection' => [
        'sortBy' => 'requestTime',
        'asc' => false,
        'textFilterFields' => [
          0 => 'ipAddress',
          1 => 'username'
        ],
        'orderBy' => 'requestTime',
        'order' => 'desc'
      ],
      'indexes' => [
        'ipAddress' => [
          'columns' => [
            0 => 'ipAddress'
          ]
        ],
        'ipAddressRequestTime' => [
          'columns' => [
            0 => 'ipAddress',
            1 => 'requestTime'
          ]
        ],
        'requestTime' => [
          'columns' => [
            0 => 'requestTime'
          ]
        ]
      ]
    ],
    'AuthToken' => [
      'fields' => [
        'token' => [
          'type' => 'varchar',
          'maxLength' => '36',
          'index' => true,
          'readOnly' => true
        ],
        'hash' => [
          'type' => 'varchar',
          'maxLength' => 150,
          'index' => true,
          'readOnly' => true
        ],
        'secret' => [
          'type' => 'varchar',
          'maxLength' => '36',
          'readOnly' => true
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => '36',
          'readOnly' => true
        ],
        'user' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'portal' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'maxLength' => '45',
          'readOnly' => true
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'lastAccess' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'portal' => [
          'type' => 'belongsTo',
          'entity' => 'Portal'
        ],
        'actionHistoryRecords' => [
          'type' => 'hasMany',
          'entity' => 'ActionHistoryRecord',
          'foreign' => 'authToken'
        ]
      ],
      'collection' => [
        'orderBy' => 'lastAccess',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'ipAddress',
          1 => 'userName'
        ],
        'sortBy' => 'lastAccess',
        'asc' => false
      ],
      'indexes' => [
        'token' => [
          'columns' => [
            0 => 'token',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Autofollow' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'dbType' => 'int',
          'autoincrement' => true
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'index' => true
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => true
        ]
      ]
    ],
    'Currency' => [
      'fields' => [
        'rate' => [
          'type' => 'float'
        ]
      ]
    ],
    'DashboardTemplate' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true,
          'required' => true
        ],
        'layout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout',
          'inlineEditDisabled' => true,
          'required' => true
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject',
          'disabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Email' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'subject' => [
          'type' => 'varchar',
          'required' => true,
          'notStorable' => true,
          'view' => 'views/email/fields/subject',
          'disabled' => true,
          'trim' => true
        ],
        'fromName' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true
        ],
        'fromAddress' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true
        ],
        'fromString' => [
          'type' => 'varchar'
        ],
        'replyToString' => [
          'type' => 'varchar'
        ],
        'replyToName' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true
        ],
        'replyToAddress' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'textFilterDisabled' => true,
          'layoutFiltersDisabled' => true
        ],
        'addressNameMap' => [
          'type' => 'jsonObject',
          'disabled' => true,
          'readOnly' => true
        ],
        'from' => [
          'type' => 'varchar',
          'notStorable' => true,
          'required' => true,
          'view' => 'views/email/fields/from-address-varchar',
          'textFilterDisabled' => true
        ],
        'to' => [
          'type' => 'varchar',
          'notStorable' => true,
          'required' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'textFilterDisabled' => true
        ],
        'cc' => [
          'type' => 'varchar',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'textFilterDisabled' => true
        ],
        'bcc' => [
          'type' => 'varchar',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'textFilterDisabled' => true
        ],
        'replyTo' => [
          'type' => 'varchar',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address-varchar',
          'textFilterDisabled' => true
        ],
        'personStringData' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'view' => 'views/email/fields/person-string-data'
        ],
        'isRead' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => true,
          'readOnly' => true
        ],
        'isNotRead' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true
        ],
        'isReplied' => [
          'type' => 'bool',
          'readOnly' => true
        ],
        'isNotReplied' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true
        ],
        'isImportant' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false
        ],
        'inTrash' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false
        ],
        'folderId' => [
          'type' => 'varchar',
          'notStorable' => true,
          'default' => false,
          'textFilterDisabled' => true
        ],
        'isUsers' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false
        ],
        'folder' => [
          'type' => 'link',
          'notStorable' => true,
          'readOnly' => true
        ],
        'nameHash' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'typeHash' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'idHash' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'messageId' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'readOnly' => true,
          'index' => true,
          'textFilterDisabled' => true
        ],
        'messageIdInternal' => [
          'type' => 'varchar',
          'maxLength' => 300,
          'readOnly' => true,
          'textFilterDisabled' => true
        ],
        'emailAddress' => [
          'type' => 'base',
          'notStorable' => true,
          'view' => 'views/email/fields/email-address'
        ],
        'fromEmailAddress' => [
          'type' => 'link',
          'view' => 'views/email/fields/from-email-address',
          'textFilterDisabled' => true
        ],
        'toEmailAddresses' => [
          'type' => 'linkMultiple'
        ],
        'ccEmailAddresses' => [
          'type' => 'linkMultiple'
        ],
        'replyToEmailAddresses' => [
          'type' => 'linkMultiple'
        ],
        'bodyPlain' => [
          'type' => 'text',
          'seeMoreDisabled' => true,
          'clientReadOnly' => true
        ],
        'body' => [
          'type' => 'wysiwyg',
          'view' => 'views/email/fields/body',
          'attachmentField' => 'attachments',
          'useIframe' => true
        ],
        'isHtml' => [
          'type' => 'bool',
          'default' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Draft',
            1 => 'Sending',
            2 => 'Sent',
            3 => 'Archived',
            4 => 'Failed'
          ],
          'default' => 'Archived',
          'clientReadOnly' => true,
          'style' => [
            'Draft' => 'warning',
            'Failed' => 'danger',
            'Sending' => 'warning'
          ]
        ],
        'attachments' => [
          'type' => 'attachmentMultiple',
          'sourceList' => [
            0 => 'Document'
          ]
        ],
        'hasAttachment' => [
          'type' => 'bool',
          'readOnly' => true
        ],
        'parent' => [
          'type' => 'linkParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Lead',
            2 => 'Contact',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'dateSent' => [
          'type' => 'datetime'
        ],
        'deliveryDate' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'sentBy' => [
          'type' => 'link',
          'readOnly' => true,
          'noLoad' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'replied' => [
          'type' => 'link',
          'noJoin' => true,
          'readOnly' => true,
          'view' => 'views/email/fields/replied'
        ],
        'replies' => [
          'type' => 'linkMultiple',
          'readOnly' => true,
          'orderBy' => 'dateSent',
          'view' => 'views/email/fields/replies'
        ],
        'isSystem' => [
          'type' => 'bool',
          'default' => false,
          'readOnly' => true
        ],
        'isJustSent' => [
          'type' => 'bool',
          'default' => false,
          'disabled' => true,
          'notStorable' => true
        ],
        'isBeingImported' => [
          'type' => 'bool',
          'disabled' => true,
          'notStorable' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'users' => [
          'type' => 'linkMultiple',
          'noLoad' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true,
          'columns' => [
            'inTrash' => 'inTrash',
            'folderId' => 'folderId'
          ]
        ],
        'assignedUsers' => [
          'type' => 'linkMultiple',
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true
        ],
        'inboundEmails' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true
        ],
        'emailAccounts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'noLoad' => true
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam'
        ],
        'assignedUsers' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'relationName' => 'entityUser'
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'emails',
          'additionalColumns' => [
            'isRead' => [
              'type' => 'bool',
              'default' => false
            ],
            'isImportant' => [
              'type' => 'bool',
              'default' => false
            ],
            'inTrash' => [
              'type' => 'bool',
              'default' => false
            ],
            'folderId' => [
              'type' => 'varchar',
              'default' => NULL,
              'maxLength' => 24
            ]
          ]
        ],
        'sentBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'attachments' => [
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'foreign' => 'parent',
          'relationName' => 'attachments'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'entityList' => [],
          'foreign' => 'emails'
        ],
        'replied' => [
          'type' => 'belongsTo',
          'entity' => 'Email',
          'foreign' => 'replies'
        ],
        'replies' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'replied'
        ],
        'fromEmailAddress' => [
          'type' => 'belongsTo',
          'entity' => 'EmailAddress'
        ],
        'toEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'to'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ]
        ],
        'ccEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'cc'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ]
        ],
        'bccEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'bcc'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ]
        ],
        'replyToEmailAddresses' => [
          'type' => 'hasMany',
          'entity' => 'EmailAddress',
          'relationName' => 'emailEmailAddress',
          'conditions' => [
            'addressType' => 'rto'
          ],
          'additionalColumns' => [
            'addressType' => [
              'type' => 'varchar',
              'len' => '4'
            ]
          ]
        ],
        'inboundEmails' => [
          'type' => 'hasMany',
          'entity' => 'InboundEmail',
          'foreign' => 'emails'
        ],
        'emailAccounts' => [
          'type' => 'hasMany',
          'entity' => 'EmailAccount',
          'foreign' => 'emails'
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ]
      ],
      'collection' => [
        'orderBy' => 'dateSent',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'bodyPlain',
          2 => 'body'
        ],
        'countDisabled' => true,
        'fullTextSearch' => true,
        'sortBy' => 'dateSent',
        'asc' => false
      ],
      'indexes' => [
        'createdById' => [
          'columns' => [
            0 => 'createdById'
          ]
        ],
        'dateSent' => [
          'columns' => [
            0 => 'dateSent',
            1 => 'deleted'
          ]
        ],
        'dateSentStatus' => [
          'columns' => [
            0 => 'dateSent',
            1 => 'status',
            2 => 'deleted'
          ]
        ]
      ]
    ],
    'EmailAccount' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'emailAddress' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'trim' => true,
          'tooltip' => true,
          'view' => 'views/email-account/fields/email-address'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Inactive'
          ],
          'default' => 'Active'
        ],
        'host' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'port' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 993
        ],
        'security' => [
          'type' => 'enum',
          'default' => 'SSL',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'username' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'password' => [
          'type' => 'password'
        ],
        'monitoredFolders' => [
          'type' => 'varchar',
          'default' => 'INBOX',
          'view' => 'views/email-account/fields/folders',
          'tooltip' => true
        ],
        'sentFolder' => [
          'type' => 'varchar',
          'view' => 'views/email-account/fields/folder'
        ],
        'storeSentEmails' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'keepFetchedEmailsUnread' => [
          'type' => 'bool'
        ],
        'fetchSince' => [
          'type' => 'date'
        ],
        'fetchData' => [
          'type' => 'jsonObject',
          'readOnly' => true
        ],
        'emailFolder' => [
          'type' => 'link',
          'view' => 'views/email-account/fields/email-folder'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'useImap' => [
          'type' => 'bool',
          'default' => true
        ],
        'useSmtp' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpHost' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 587
        ],
        'smtpAuth' => [
          'type' => 'bool',
          'default' => true
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'default' => 'TLS',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'smtpAuthMechanism' => [
          'type' => 'enum',
          'options' => [
            0 => 'login',
            1 => 'crammd5',
            2 => 'plain'
          ],
          'default' => 'login'
        ],
        'imapHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'smtpHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'filters' => [
          'type' => 'hasChildren',
          'foreign' => 'parent',
          'entity' => 'EmailFilter'
        ],
        'emails' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'emailAccounts'
        ],
        'emailFolder' => [
          'type' => 'belongsTo',
          'entity' => 'EmailFolder'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'EmailAddress' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true
        ],
        'lower' => [
          'type' => 'varchar',
          'required' => true,
          'index' => true
        ],
        'invalid' => [
          'type' => 'bool'
        ],
        'optOut' => [
          'type' => 'bool'
        ],
        'primary' => [
          'type' => 'bool',
          'notStorable' => true
        ]
      ],
      'links' => [],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'EmailFilter' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'tooltip' => true,
          'trim' => true
        ],
        'from' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'tooltip' => true,
          'trim' => true
        ],
        'to' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'tooltip' => true,
          'trim' => true
        ],
        'subject' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'tooltip' => true
        ],
        'bodyContains' => [
          'type' => 'array',
          'tooltip' => true
        ],
        'isGlobal' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'parent' => [
          'type' => 'linkParent',
          'view' => 'views/email-filter/fields/parent'
        ],
        'action' => [
          'type' => 'enum',
          'default' => 'Skip',
          'options' => [
            0 => 'Skip',
            1 => 'Move to Folder'
          ],
          'view' => 'views/email-filter/fields/action'
        ],
        'emailFolder' => [
          'type' => 'link',
          'view' => 'views/email-filter/fields/email-folder'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'User',
            1 => 'EmailAccount',
            2 => 'InboundEmail'
          ]
        ],
        'emailFolder' => [
          'type' => 'belongsTo',
          'entity' => 'EmailFolder'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'EmailFolder' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 64,
          'trim' => true
        ],
        'order' => [
          'type' => 'int'
        ],
        'assignedUser' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'skipNotifications' => [
          'type' => 'bool'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'order',
        'order' => 'asc',
        'sortBy' => 'order',
        'asc' => true
      ]
    ],
    'EmailTemplate' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'subject' => [
          'type' => 'varchar'
        ],
        'body' => [
          'type' => 'wysiwyg',
          'view' => 'views/email-template/fields/body',
          'useIframe' => true
        ],
        'isHtml' => [
          'type' => 'bool',
          'default' => true
        ],
        'oneOff' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'attachments' => [
          'type' => 'attachmentMultiple'
        ],
        'category' => [
          'type' => 'link',
          'view' => 'views/fields/link-category-tree'
        ],
        'assignedUser' => [
          'type' => 'link'
        ],
        'teams' => [
          'type' => 'linkMultiple'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ]
      ],
      'links' => [
        'attachments' => [
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'foreign' => 'parent'
        ],
        'category' => [
          'type' => 'belongsTo',
          'foreign' => 'emailTemplates',
          'entity' => 'EmailTemplateCategory'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'bodyPlain',
          2 => 'body',
          3 => 'subject'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'EmailTemplateCategory' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'order' => [
          'type' => 'int',
          'minValue' => 1,
          'required' => true,
          'textFilterDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'teams' => [
          'type' => 'linkMultiple'
        ],
        'parent' => [
          'type' => 'link'
        ],
        'childList' => [
          'type' => 'jsonArray',
          'notStorable' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsTo',
          'foreign' => 'children',
          'entity' => 'EmailTemplateCategory'
        ],
        'children' => [
          'type' => 'hasMany',
          'foreign' => 'parent',
          'entity' => 'EmailTemplateCategory'
        ],
        'emailTemplates' => [
          'type' => 'hasMany',
          'foreign' => 'category',
          'entity' => 'EmailTemplate'
        ]
      ],
      'collection' => [
        'orderBy' => 'parent',
        'order' => 'asc',
        'sortBy' => 'parent',
        'asc' => true
      ],
      'additionalTables' => [
        'EmailTemplateCategoryPath' => [
          'fields' => [
            'id' => [
              'type' => 'id',
              'dbType' => 'int',
              'len' => '11',
              'autoincrement' => true
            ],
            'ascendorId' => [
              'type' => 'varchar',
              'len' => '100',
              'index' => true
            ],
            'descendorId' => [
              'type' => 'varchar',
              'len' => '24',
              'index' => true
            ]
          ]
        ]
      ]
    ],
    'Extension' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true
        ],
        'version' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 50
        ],
        'fileList' => [
          'type' => 'jsonArray'
        ],
        'description' => [
          'type' => 'text'
        ],
        'isInstalled' => [
          'type' => 'bool',
          'default' => false
        ],
        'checkVersionUrl' => [
          'type' => 'url'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'ExternalAccount' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'maxLength' => 64
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'enabled' => [
          'type' => 'bool'
        ],
        'isLocked' => [
          'type' => 'bool'
        ]
      ]
    ],
    'Import' => [
      'fields' => [
        'entityType' => [
          'type' => 'enum',
          'translation' => 'Global.scopeNames',
          'required' => true,
          'readOnly' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Standby',
            1 => 'Pending',
            2 => 'In Process',
            3 => 'Complete',
            4 => 'Failed'
          ],
          'readOnly' => true,
          'style' => [
            'Complete' => 'success',
            'Failed' => 'danger'
          ]
        ],
        'file' => [
          'type' => 'file',
          'required' => true,
          'readOnly' => true
        ],
        'importedCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true
        ],
        'duplicateCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true
        ],
        'updatedCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true
        ],
        'lastIndex' => [
          'type' => 'int',
          'readOnly' => true
        ],
        'params' => [
          'type' => 'jsonObject',
          'readOnly' => true
        ],
        'attributeList' => [
          'type' => 'jsonArray',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'ImportEntity' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'dbType' => 'int',
          'autoincrement' => true
        ],
        'entityId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => 'entity'
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'index' => 'entity'
        ],
        'importId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => true
        ],
        'isImported' => [
          'type' => 'bool'
        ],
        'isUpdated' => [
          'type' => 'bool'
        ],
        'isDuplicate' => [
          'type' => 'bool'
        ]
      ],
      'indexes' => [
        'entityImport' => [
          'columns' => [
            0 => 'importId',
            1 => 'entityType'
          ]
        ]
      ]
    ],
    'InboundEmail' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'emailAddress' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'view' => 'views/inbound-email/fields/email-address',
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Inactive'
          ],
          'default' => 'Active'
        ],
        'host' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'port' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 993
        ],
        'security' => [
          'type' => 'enum',
          'default' => 'SSL',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'username' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'password' => [
          'type' => 'password'
        ],
        'monitoredFolders' => [
          'type' => 'varchar',
          'default' => 'INBOX',
          'view' => 'views/inbound-email/fields/folders',
          'tooltip' => true
        ],
        'fetchSince' => [
          'type' => 'date'
        ],
        'fetchData' => [
          'type' => 'jsonObject',
          'readOnly' => true
        ],
        'assignToUser' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'team' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'addAllTeamUsers' => [
          'type' => 'bool',
          'tooltip' => true,
          'default' => true
        ],
        'sentFolder' => [
          'type' => 'varchar',
          'view' => 'views/inbound-email/fields/folder'
        ],
        'storeSentEmails' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'keepFetchedEmailsUnread' => [
          'type' => 'bool'
        ],
        'useImap' => [
          'type' => 'bool',
          'default' => true
        ],
        'useSmtp' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpIsShared' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpIsForMassEmail' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'smtpHost' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 587
        ],
        'smtpAuth' => [
          'type' => 'bool',
          'default' => true
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'default' => 'TLS',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'smtpAuthMechanism' => [
          'type' => 'enum',
          'options' => [
            0 => 'login',
            1 => 'crammd5',
            2 => 'plain'
          ],
          'default' => 'login'
        ],
        'createCase' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'caseDistribution' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Direct-Assignment',
            2 => 'Round-Robin',
            3 => 'Least-Busy'
          ],
          'default' => 'Direct-Assignment',
          'tooltip' => true
        ],
        'targetUserPosition' => [
          'type' => 'enum',
          'view' => 'views/inbound-email/fields/target-user-position',
          'tooltip' => true
        ],
        'reply' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'replyEmailTemplate' => [
          'type' => 'link'
        ],
        'replyFromAddress' => [
          'type' => 'varchar'
        ],
        'replyToAddress' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'replyFromName' => [
          'type' => 'varchar'
        ],
        'fromName' => [
          'type' => 'varchar'
        ],
        'imapHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'smtpHandler' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'inboundEmails'
        ],
        'assignToUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'team' => [
          'type' => 'belongsTo',
          'entity' => 'Team'
        ],
        'replyEmailTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'EmailTemplate'
        ],
        'filters' => [
          'type' => 'hasChildren',
          'foreign' => 'parent',
          'entity' => 'EmailFilter'
        ],
        'emails' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'inboundEmails'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Integration' => [
      'fields' => [
        'data' => [
          'type' => 'jsonObject'
        ],
        'enabled' => [
          'type' => 'bool'
        ]
      ]
    ],
    'Job' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'views/admin/job/fields/name'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Ready',
            2 => 'Running',
            3 => 'Success',
            4 => 'Failed'
          ],
          'default' => 'Pending',
          'style' => [
            'Success' => 'success',
            'Failed' => 'danger',
            'Running' => 'warning',
            'Ready' => 'warning'
          ]
        ],
        'executeTime' => [
          'type' => 'datetime',
          'required' => true,
          'hasSeconds' => true
        ],
        'number' => [
          'type' => 'int',
          'index' => true,
          'readOnly' => true,
          'view' => 'views/fields/autoincrement',
          'dbType' => 'bigint',
          'unique' => true,
          'autoincrement' => true
        ],
        'serviceName' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100
        ],
        'methodName' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'job' => [
          'type' => 'varchar',
          'view' => 'views/scheduled-job/fields/job'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'scheduledJob' => [
          'type' => 'link'
        ],
        'scheduledJobJob' => [
          'type' => 'foreign',
          'link' => 'scheduledJob',
          'field' => 'job'
        ],
        'queue' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'default' => NULL
        ],
        'startedAt' => [
          'type' => 'datetime',
          'hasSeconds' => true
        ],
        'executedAt' => [
          'type' => 'datetime',
          'hasSeconds' => true
        ],
        'pid' => [
          'type' => 'int'
        ],
        'attempts' => [
          'type' => 'int'
        ],
        'targetId' => [
          'type' => 'varchar',
          'maxLength' => 48
        ],
        'targetType' => [
          'type' => 'varchar',
          'maxLength' => 64
        ],
        'failedAttempts' => [
          'type' => 'int'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ]
      ],
      'links' => [
        'scheduledJob' => [
          'type' => 'belongsTo',
          'entity' => 'ScheduledJob'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'id',
          1 => 'name',
          2 => 'methodName',
          3 => 'serviceName',
          4 => 'scheduledJob'
        ],
        'sortBy' => 'number',
        'asc' => false
      ],
      'indexes' => [
        'executeTime' => [
          'columns' => [
            0 => 'status',
            1 => 'executeTime'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'KanbanOrder' => [
      'fields' => [
        'order' => [
          'type' => 'int',
          'dbType' => 'smallint'
        ],
        'entity' => [
          'type' => 'linkParent'
        ],
        'group' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 24
        ]
      ],
      'links' => [
        'entity' => [
          'type' => 'belongsToParent'
        ]
      ],
      'indexes' => [
        'entityUserId' => [
          'columns' => [
            0 => 'entityType',
            1 => 'entityId',
            2 => 'userId'
          ]
        ],
        'entityType' => [
          'columns' => [
            0 => 'entityType'
          ]
        ],
        'entityTypeUserId' => [
          'columns' => [
            0 => 'entityType',
            1 => 'userId'
          ]
        ]
      ]
    ],
    'LayoutRecord' => [
      'fields' => [
        'name' => [
          'type' => 'varchar'
        ],
        'layoutSet' => [
          'type' => 'link'
        ],
        'data' => [
          'type' => 'jsonObject'
        ]
      ],
      'links' => [
        'layoutSet' => [
          'type' => 'belengsTo',
          'entity' => 'LayoutSet',
          'foreign' => 'layoutRecords'
        ]
      ],
      'indexes' => [
        'nameLayoutSetId' => [
          'columns' => [
            0 => 'name',
            1 => 'layoutSetId'
          ]
        ]
      ]
    ],
    'LayoutSet' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 100,
          'trim' => true
        ],
        'layoutList' => [
          'type' => 'multiEnum',
          'displayAsList' => true,
          'view' => 'views/layout-set/fields/layout-list'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'layoutRecords' => [
          'type' => 'hasMany',
          'entity' => 'LayoutRecord',
          'foreign' => 'layoutSet'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'layoutSet'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'layoutSet'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'LeadCapture' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'subscribeToTargetList' => [
          'type' => 'bool',
          'default' => true
        ],
        'subscribeContactToTargetList' => [
          'type' => 'bool',
          'default' => true
        ],
        'targetList' => [
          'type' => 'link'
        ],
        'fieldList' => [
          'type' => 'multiEnum',
          'default' => [
            0 => 'firstName',
            1 => 'lastName',
            2 => 'emailAddress'
          ],
          'view' => 'views/lead-capture/fields/field-list',
          'required' => true,
          'ignoreFieldList' => [
            0 => 'targetList',
            1 => 'targetLists',
            2 => 'acceptanceStatusMeetings',
            3 => 'acceptanceStatusCalls',
            4 => 'campaign',
            5 => 'source',
            6 => 'teams',
            7 => 'createdOpportunity',
            8 => 'createdAccount',
            9 => 'createdContact'
          ]
        ],
        'duplicateCheck' => [
          'type' => 'bool',
          'default' => true
        ],
        'optInConfirmation' => [
          'type' => 'bool'
        ],
        'optInConfirmationEmailTemplate' => [
          'type' => 'link'
        ],
        'optInConfirmationLifetime' => [
          'type' => 'int',
          'default' => 48,
          'min' => 1
        ],
        'optInConfirmationSuccessMessage' => [
          'type' => 'text',
          'tooltip' => true
        ],
        'createLeadBeforeOptInConfirmation' => [
          'type' => 'bool'
        ],
        'skipOptInConfirmationIfSubscribed' => [
          'type' => 'bool'
        ],
        'leadSource' => [
          'type' => 'enum',
          'view' => 'crm:views/opportunity/fields/lead-source',
          'customizationOptionsDisabled' => true,
          'default' => 'Web Site'
        ],
        'apiKey' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'readOnly' => true,
          'view' => 'views/lead-capture/fields/api-key'
        ],
        'targetTeam' => [
          'type' => 'link'
        ],
        'exampleRequestUrl' => [
          'type' => 'varchar',
          'notStorable' => true,
          'readOnly' => true
        ],
        'exampleRequestMethod' => [
          'type' => 'varchar',
          'notStorable' => true,
          'readOnly' => true
        ],
        'exampleRequestPayload' => [
          'type' => 'text',
          'notStorable' => true,
          'readOnly' => true,
          'seeMoreDisabled' => true
        ],
        'inboundEmail' => [
          'type' => 'link'
        ],
        'smtpAccount' => [
          'type' => 'base',
          'notStorable' => true,
          'view' => 'views/lead-capture/fields/smtp-account'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'targetList' => [
          'type' => 'belongsTo',
          'entity' => 'TargetList'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign'
        ],
        'targetTeam' => [
          'type' => 'belongsTo',
          'entity' => 'Team'
        ],
        'inboundEmail' => [
          'type' => 'belongsTo',
          'entity' => 'InboundEmail'
        ],
        'optInConfirmationEmailTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'EmailTemplate'
        ],
        'logRecords' => [
          'type' => 'hasMany',
          'entity' => 'LeadCaptureLogRecord',
          'foreign' => 'leadCapture'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'LeadCaptureLogRecord' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'index' => true,
          'readOnly' => true
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'isCreated' => [
          'type' => 'bool'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'leadCapture' => [
          'type' => 'link'
        ],
        'target' => [
          'type' => 'linkParent'
        ]
      ],
      'links' => [
        'leadCapture' => [
          'type' => 'belongsTo',
          'entity' => 'LeadCapture',
          'foreign' => 'logRecords'
        ],
        'target' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Contact',
            1 => 'Lead'
          ]
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ]
    ],
    'NextNumber' => [
      'fields' => [
        'entityType' => [
          'type' => 'varchar',
          'index' => true,
          'maxLength' => 100
        ],
        'fieldName' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'value' => [
          'type' => 'int',
          'default' => 1
        ]
      ],
      'indexes' => [
        'entityTypeFieldName' => [
          'columns' => [
            0 => 'entityType',
            1 => 'fieldName'
          ]
        ]
      ]
    ],
    'Note' => [
      'fields' => [
        'post' => [
          'type' => 'text',
          'rows' => 100000,
          'view' => 'views/note/fields/post'
        ],
        'data' => [
          'type' => 'jsonObject',
          'readOnly' => true
        ],
        'type' => [
          'type' => 'varchar',
          'readOnly' => true,
          'view' => 'views/fields/enum',
          'options' => [
            0 => 'Post'
          ]
        ],
        'targetType' => [
          'type' => 'varchar'
        ],
        'parent' => [
          'type' => 'linkParent',
          'readOnly' => true
        ],
        'related' => [
          'type' => 'linkParent',
          'readOnly' => true
        ],
        'attachments' => [
          'type' => 'attachmentMultiple',
          'view' => 'views/stream/fields/attachment-multiple'
        ],
        'number' => [
          'type' => 'autoincrement',
          'index' => true,
          'dbType' => 'bigint',
          'readOnly' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'noLoad' => true
        ],
        'portals' => [
          'type' => 'linkMultiple',
          'noLoad' => true
        ],
        'users' => [
          'type' => 'linkMultiple',
          'noLoad' => true
        ],
        'isGlobal' => [
          'type' => 'bool'
        ],
        'createdByGender' => [
          'type' => 'foreign',
          'link' => 'createdBy',
          'field' => 'gender'
        ],
        'notifiedUserIdList' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'disabled' => true
        ],
        'isInternal' => [
          'type' => 'bool'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'attachments' => [
          'type' => 'hasChildren',
          'entity' => 'Attachment',
          'relationName' => 'attachments',
          'foreign' => 'parent'
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'notes'
        ],
        'superParent' => [
          'type' => 'belongsToParent'
        ],
        'related' => [
          'type' => 'belongsToParent'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'notes'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'notes'
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'notes'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'post'
        ],
        'sortBy' => 'number',
        'asc' => false
      ],
      'statusStyles' => [
        'Lead' => [
          'Assigned' => 'primary',
          'In Process' => 'primary'
        ],
        'Case' => [
          'Assigned' => 'primary'
        ],
        'Opportunity' => [
          'Proposal' => 'primary',
          'Negotiation' => 'primary'
        ],
        'Task' => [
          'Started' => 'primary',
          'Canceled' => 'danger'
        ]
      ],
      'indexes' => [
        'createdAt' => [
          'type' => 'index',
          'columns' => [
            0 => 'createdAt'
          ]
        ],
        'parent' => [
          'type' => 'index',
          'columns' => [
            0 => 'parentId',
            1 => 'parentType'
          ]
        ],
        'parentAndSuperParent' => [
          'type' => 'index',
          'columns' => [
            0 => 'parentId',
            1 => 'parentType',
            2 => 'superParentId',
            3 => 'superParentType'
          ]
        ],
        'createdByNumber' => [
          'columns' => [
            0 => 'createdById',
            1 => 'number'
          ]
        ]
      ]
    ],
    'Notification' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'dbType' => 'bigint',
          'index' => true
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'noteData' => [
          'type' => 'jsonObject',
          'notStorable' => true
        ],
        'type' => [
          'type' => 'varchar'
        ],
        'read' => [
          'type' => 'bool'
        ],
        'emailIsProcessed' => [
          'type' => 'bool'
        ],
        'user' => [
          'type' => 'link'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'message' => [
          'type' => 'text'
        ],
        'related' => [
          'type' => 'linkParent',
          'readOnly' => true
        ],
        'relatedParent' => [
          'type' => 'linkParent',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'related' => [
          'type' => 'belongsToParent'
        ],
        'relatedParent' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'type' => 'index',
          'columns' => [
            0 => 'createdAt'
          ]
        ],
        'user' => [
          'type' => 'index',
          'columns' => [
            0 => 'userId',
            1 => 'createdAt'
          ]
        ]
      ]
    ],
    'PasswordChangeRequest' => [
      'fields' => [
        'requestId' => [
          'type' => 'varchar',
          'maxLength' => 64,
          'index' => true
        ],
        'user' => [
          'type' => 'link',
          'readOnly' => true,
          'index' => true
        ],
        'url' => [
          'type' => 'url'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ]
    ],
    'PhoneNumber' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 36,
          'index' => true
        ],
        'type' => [
          'type' => 'enum'
        ],
        'numeric' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'index' => true
        ],
        'invalid' => [
          'type' => 'bool'
        ],
        'optOut' => [
          'type' => 'bool'
        ],
        'primary' => [
          'type' => 'bool',
          'notStorable' => true
        ]
      ],
      'links' => [],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Portal' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true
        ],
        'logo' => [
          'type' => 'image'
        ],
        'url' => [
          'type' => 'url',
          'notStorable' => true,
          'readOnly' => true
        ],
        'customId' => [
          'type' => 'varchar',
          'maxLength' => 36,
          'view' => 'views/portal/fields/custom-id',
          'trim' => true,
          'index' => true
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'isDefault' => [
          'type' => 'bool',
          'default' => false,
          'notStorable' => true
        ],
        'portalRoles' => [
          'type' => 'linkMultiple'
        ],
        'tabList' => [
          'type' => 'array',
          'view' => 'views/portal/fields/tab-list'
        ],
        'quickCreateList' => [
          'type' => 'array',
          'translation' => 'Global.scopeNames',
          'view' => 'views/portal/fields/quick-create-list'
        ],
        'companyLogo' => [
          'type' => 'image'
        ],
        'theme' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/theme',
          'translation' => 'Global.themes',
          'default' => ''
        ],
        'language' => [
          'type' => 'enum',
          'view' => 'views/preferences/fields/language',
          'default' => ''
        ],
        'timeZone' => [
          'type' => 'enum',
          'detault' => '',
          'view' => 'views/preferences/fields/time-zone'
        ],
        'dateFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'MM/DD/YYYY',
            1 => 'YYYY-MM-DD',
            2 => 'DD.MM.YYYY',
            3 => 'DD/MM/YYYY'
          ],
          'default' => '',
          'view' => 'views/preferences/fields/date-format'
        ],
        'timeFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'HH:mm',
            1 => 'hh:mma',
            2 => 'hh:mmA',
            3 => 'hh:mm A',
            4 => 'hh:mm a'
          ],
          'default' => '',
          'view' => 'views/preferences/fields/time-format'
        ],
        'weekStart' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 1
          ],
          'default' => -1,
          'view' => 'views/preferences/fields/week-start'
        ],
        'defaultCurrency' => [
          'type' => 'enum',
          'default' => '',
          'view' => 'views/preferences/fields/default-currency'
        ],
        'dashboardLayout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout'
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject',
          'disabled' => true
        ],
        'customUrl' => [
          'type' => 'url'
        ],
        'layoutSet' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'portals'
        ],
        'portalRoles' => [
          'type' => 'hasMany',
          'entity' => 'PortalRole',
          'foreign' => 'portals'
        ],
        'notes' => [
          'type' => 'hasMany',
          'entity' => 'Note',
          'foreign' => 'portals'
        ],
        'layoutSet' => [
          'type' => 'belongsTo',
          'entity' => 'LayoutSet',
          'foreign' => 'portals'
        ],
        'articles' => [
          'type' => 'hasMany',
          'entity' => 'KnowledgeBaseArticle',
          'foreign' => 'portals'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'PortalRole' => [
      'fields' => [
        'name' => [
          'maxLength' => 150,
          'required' => true,
          'type' => 'varchar',
          'trim' => true
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'fieldData' => [
          'type' => 'jsonObject'
        ],
        'exportPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'massUpdatePermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'portalRoles'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'portalRoles'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Preferences' => [
      'fields' => [
        'timeZone' => [
          'type' => 'enum',
          'default' => '',
          'view' => 'views/preferences/fields/time-zone'
        ],
        'dateFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'MM/DD/YYYY',
            1 => 'YYYY-MM-DD',
            2 => 'DD.MM.YYYY',
            3 => 'DD/MM/YYYY'
          ],
          'default' => '',
          'view' => 'views/preferences/fields/date-format'
        ],
        'timeFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'HH:mm',
            1 => 'hh:mma',
            2 => 'hh:mmA',
            3 => 'hh:mm A',
            4 => 'hh:mm a'
          ],
          'default' => '',
          'view' => 'views/preferences/fields/time-format'
        ],
        'weekStart' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 1
          ],
          'default' => -1,
          'view' => 'views/preferences/fields/week-start'
        ],
        'defaultCurrency' => [
          'type' => 'enum',
          'default' => '',
          'view' => 'views/preferences/fields/default-currency'
        ],
        'thousandSeparator' => [
          'type' => 'varchar',
          'default' => ',',
          'maxLength' => 1,
          'view' => 'views/settings/fields/thousand-separator'
        ],
        'decimalMark' => [
          'type' => 'varchar',
          'default' => '.',
          'required' => true,
          'maxLength' => 1
        ],
        'dashboardLayout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout'
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject'
        ],
        'importParams' => [
          'type' => 'jsonObject'
        ],
        'sharedCalendarUserList' => [
          'type' => 'jsonArray'
        ],
        'calendarViewDataList' => [
          'type' => 'jsonArray'
        ],
        'presetFilters' => [
          'type' => 'jsonObject'
        ],
        'smtpEmailAddress' => [
          'type' => 'varchar',
          'readOnly' => true,
          'notStorable' => true,
          'view' => 'views/preferences/fields/smtp-email-address',
          'trim' => true
        ],
        'smtpServer' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 25
        ],
        'smtpAuth' => [
          'type' => 'bool',
          'default' => false
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'language' => [
          'type' => 'enum',
          'default' => '',
          'view' => 'views/preferences/fields/language'
        ],
        'exportDelimiter' => [
          'type' => 'varchar',
          'default' => ',',
          'required' => true,
          'maxLength' => 1,
          'options' => [
            0 => ',',
            1 => ';',
            2 => '\\t',
            3 => '|'
          ]
        ],
        'receiveAssignmentEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'receiveMentionEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'receiveStreamEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'assignmentNotificationsIgnoreEntityTypeList' => [
          'type' => 'checklist',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/preferences/fields/assignment-notifications-ignore-entity-type-list',
          'default' => []
        ],
        'assignmentEmailNotificationsIgnoreEntityTypeList' => [
          'type' => 'checklist',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/preferences/fields/assignment-email-notifications-ignore-entity-type-list'
        ],
        'autoFollowEntityTypeList' => [
          'type' => 'multiEnum',
          'view' => 'views/preferences/fields/auto-follow-entity-type-list',
          'translation' => 'Global.scopeNamesPlural',
          'notStorable' => true,
          'tooltip' => true
        ],
        'signature' => [
          'type' => 'wysiwyg',
          'view' => 'views/preferences/fields/signature',
          'default' => ''
        ],
        'defaultReminders' => [
          'type' => 'jsonArray',
          'view' => 'crm:views/meeting/fields/reminders',
          'default' => []
        ],
        'theme' => [
          'type' => 'enum',
          'default' => '',
          'view' => 'views/preferences/fields/theme',
          'translation' => 'Global.themes'
        ],
        'useCustomTabList' => [
          'type' => 'bool',
          'default' => false
        ],
        'tabList' => [
          'type' => 'array',
          'view' => 'views/preferences/fields/tab-list'
        ],
        'emailReplyToAllByDefault' => [
          'type' => 'bool',
          'default' => true
        ],
        'emailReplyForceHtml' => [
          'type' => 'bool',
          'default' => false
        ],
        'isPortalUser' => [
          'type' => 'bool',
          'notStorable' => true
        ],
        'doNotFillAssignedUserIfNotRequired' => [
          'type' => 'bool',
          'tooltip' => true,
          'default' => false
        ],
        'followEntityOnStreamPost' => [
          'type' => 'bool',
          'default' => true
        ],
        'followCreatedEntities' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'followCreatedEntityTypeList' => [
          'type' => 'multiEnum',
          'view' => 'views/preferences/fields/auto-follow-entity-type-list',
          'translation' => 'Global.scopeNamesPlural',
          'default' => [],
          'tooltip' => true
        ],
        'emailUseExternalClient' => [
          'type' => 'bool',
          'default' => false
        ],
        'scopeColorsDisabled' => [
          'type' => 'bool',
          'default' => false
        ],
        'tabColorsDisabled' => [
          'type' => 'bool',
          'default' => false
        ]
      ],
      'noDeletedAttribute' => true
    ],
    'Role' => [
      'fields' => [
        'name' => [
          'maxLength' => 150,
          'required' => true,
          'type' => 'varchar',
          'trim' => true
        ],
        'assignmentPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'all',
            2 => 'team',
            3 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'userPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'all',
            2 => 'team',
            3 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'portalPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'groupEmailAccountPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'all',
            2 => 'team',
            3 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'exportPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'massUpdatePermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'dataPrivacyPermission' => [
          'type' => 'enum',
          'options' => [
            0 => 'not-set',
            1 => 'yes',
            2 => 'no'
          ],
          'default' => 'not-set',
          'tooltip' => true,
          'translation' => 'Role.options.levelList'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'fieldData' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'roles'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'roles'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'ScheduledJob' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'job' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'views/scheduled-job/fields/job'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Inactive'
          ],
          'default' => 'Active'
        ],
        'scheduling' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'views/scheduled-job/fields/scheduling',
          'tooltip' => true,
          'trim' => true
        ],
        'lastRun' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'isInternal' => [
          'type' => 'bool',
          'readOnly' => true,
          'disabled' => true,
          'default' => false
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'log' => [
          'type' => 'hasMany',
          'entity' => 'ScheduledJobLogRecord',
          'foreign' => 'scheduledJob'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ],
      'jobSchedulingMap' => [
        'CheckInboundEmails' => '*/2 * * * *',
        'CheckEmailAccounts' => '*/1 * * * *',
        'SendEmailReminders' => '*/2 * * * *',
        'Cleanup' => '1 1 * * 0',
        'AuthTokenControl' => '*/6 * * * *',
        'SendEmailNotifications' => '*/2 * * * *',
        'ProcessWebhookQueue' => '*/5 * * * *',
        'ProcessMassEmail' => '15 * * * *',
        'ControlKnowledgeBaseArticleStatus' => '10 1 * * *'
      ],
      'jobs' => [
        'Dummy' => [
          'isSystem' => true,
          'scheduling' => '1 */12 * * *'
        ],
        'CheckNewVersion' => [
          'name' => 'Check for New Version',
          'isSystem' => true,
          'scheduling' => '15 5 * * *'
        ],
        'CheckNewExtensionVersion' => [
          'name' => 'Check for New Versions of Installed Extensions',
          'isSystem' => true,
          'scheduling' => '25 5 * * *'
        ],
        'ProcessJobQueueQ0' => [
          'name' => 'Process Job Queue q0',
          'isSystem' => true,
          'scheduling' => '* * * * *'
        ],
        'ProcessJobQueueQ1' => [
          'name' => 'Process Job Queue q1',
          'isSystem' => true,
          'scheduling' => '*/1 * * * *'
        ],
        'ProcessJobQueueE0' => [
          'name' => 'Process Job Queue e0',
          'isSystem' => true,
          'scheduling' => '* * * * *'
        ],
        'SubmitPopupReminders' => [
          'name' => 'Submit Popup Reminders',
          'isSystem' => true,
          'scheduling' => '* * * * *'
        ]
      ]
    ],
    'ScheduledJobLogRecord' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'readOnly' => true
        ],
        'status' => [
          'type' => 'enum',
          'readOnly' => true,
          'options' => [
            0 => 'Success',
            1 => 'Failed'
          ],
          'style' => [
            'Success' => 'success',
            'Failed' => 'danger'
          ]
        ],
        'executionTime' => [
          'type' => 'datetime',
          'readOnly' => true,
          'hasSeconds' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'scheduledJob' => [
          'type' => 'link'
        ],
        'target' => [
          'type' => 'linkParent'
        ]
      ],
      'links' => [
        'scheduledJob' => [
          'type' => 'belongsTo',
          'entity' => 'ScheduledJob'
        ]
      ],
      'collection' => [
        'orderBy' => 'executionTime',
        'order' => 'desc',
        'sortBy' => 'executionTime',
        'asc' => false
      ],
      'indexes' => [
        'scheduledJobIdExecutionTime' => [
          'type' => 'index',
          'columns' => [
            0 => 'scheduledJobId',
            1 => 'executionTime'
          ]
        ]
      ]
    ],
    'Settings' => [
      'fields' => [
        'useCache' => [
          'type' => 'bool',
          'default' => true,
          'tooltip' => true
        ],
        'recordsPerPage' => [
          'type' => 'int',
          'min' => 1,
          'max' => 200,
          'default' => 20,
          'required' => true,
          'tooltip' => true
        ],
        'recordsPerPageSmall' => [
          'type' => 'int',
          'min' => 1,
          'max' => 100,
          'default' => 10,
          'required' => true,
          'tooltip' => true
        ],
        'timeZone' => [
          'type' => 'enum',
          'default' => 'UTC',
          'options' => [
            0 => 'UTC',
            1 => 'Africa/Abidjan',
            2 => 'Africa/Accra',
            3 => 'Africa/Addis_Ababa',
            4 => 'Africa/Algiers',
            5 => 'Africa/Asmara',
            6 => 'Africa/Bamako',
            7 => 'Africa/Bangui',
            8 => 'Africa/Banjul',
            9 => 'Africa/Bissau',
            10 => 'Africa/Blantyre',
            11 => 'Africa/Brazzaville',
            12 => 'Africa/Bujumbura',
            13 => 'Africa/Cairo',
            14 => 'Africa/Casablanca',
            15 => 'Africa/Ceuta',
            16 => 'Africa/Conakry',
            17 => 'Africa/Dakar',
            18 => 'Africa/Dar_es_Salaam',
            19 => 'Africa/Djibouti',
            20 => 'Africa/Douala',
            21 => 'Africa/El_Aaiun',
            22 => 'Africa/Freetown',
            23 => 'Africa/Gaborone',
            24 => 'Africa/Harare',
            25 => 'Africa/Johannesburg',
            26 => 'Africa/Juba',
            27 => 'Africa/Kampala',
            28 => 'Africa/Khartoum',
            29 => 'Africa/Kigali',
            30 => 'Africa/Kinshasa',
            31 => 'Africa/Lagos',
            32 => 'Africa/Libreville',
            33 => 'Africa/Lome',
            34 => 'Africa/Luanda',
            35 => 'Africa/Lubumbashi',
            36 => 'Africa/Lusaka',
            37 => 'Africa/Malabo',
            38 => 'Africa/Maputo',
            39 => 'Africa/Maseru',
            40 => 'Africa/Mbabane',
            41 => 'Africa/Mogadishu',
            42 => 'Africa/Monrovia',
            43 => 'Africa/Nairobi',
            44 => 'Africa/Ndjamena',
            45 => 'Africa/Niamey',
            46 => 'Africa/Nouakchott',
            47 => 'Africa/Ouagadougou',
            48 => 'Africa/Porto-Novo',
            49 => 'Africa/Sao_Tome',
            50 => 'Africa/Tripoli',
            51 => 'Africa/Tunis',
            52 => 'Africa/Windhoek',
            53 => 'America/Adak',
            54 => 'America/Anchorage',
            55 => 'America/Anguilla',
            56 => 'America/Antigua',
            57 => 'America/Araguaina',
            58 => 'America/Argentina/Buenos_Aires',
            59 => 'America/Argentina/Catamarca',
            60 => 'America/Argentina/Cordoba',
            61 => 'America/Argentina/Jujuy',
            62 => 'America/Argentina/La_Rioja',
            63 => 'America/Argentina/Mendoza',
            64 => 'America/Argentina/Rio_Gallegos',
            65 => 'America/Argentina/Salta',
            66 => 'America/Argentina/San_Juan',
            67 => 'America/Argentina/San_Luis',
            68 => 'America/Argentina/Tucuman',
            69 => 'America/Argentina/Ushuaia',
            70 => 'America/Aruba',
            71 => 'America/Asuncion',
            72 => 'America/Atikokan',
            73 => 'America/Bahia',
            74 => 'America/Bahia_Banderas',
            75 => 'America/Barbados',
            76 => 'America/Belem',
            77 => 'America/Belize',
            78 => 'America/Blanc-Sablon',
            79 => 'America/Boa_Vista',
            80 => 'America/Bogota',
            81 => 'America/Boise',
            82 => 'America/Cambridge_Bay',
            83 => 'America/Campo_Grande',
            84 => 'America/Cancun',
            85 => 'America/Caracas',
            86 => 'America/Cayenne',
            87 => 'America/Cayman',
            88 => 'America/Chicago',
            89 => 'America/Chihuahua',
            90 => 'America/Costa_Rica',
            91 => 'America/Creston',
            92 => 'America/Cuiaba',
            93 => 'America/Curacao',
            94 => 'America/Danmarkshavn',
            95 => 'America/Dawson',
            96 => 'America/Dawson_Creek',
            97 => 'America/Denver',
            98 => 'America/Detroit',
            99 => 'America/Dominica',
            100 => 'America/Edmonton',
            101 => 'America/Eirunepe',
            102 => 'America/El_Salvador',
            103 => 'America/Fortaleza',
            104 => 'America/Glace_Bay',
            105 => 'America/Godthab',
            106 => 'America/Goose_Bay',
            107 => 'America/Grand_Turk',
            108 => 'America/Grenada',
            109 => 'America/Guadeloupe',
            110 => 'America/Guatemala',
            111 => 'America/Guayaquil',
            112 => 'America/Guyana',
            113 => 'America/Halifax',
            114 => 'America/Havana',
            115 => 'America/Hermosillo',
            116 => 'America/Indiana/Indianapolis',
            117 => 'America/Indiana/Knox',
            118 => 'America/Indiana/Marengo',
            119 => 'America/Indiana/Petersburg',
            120 => 'America/Indiana/Tell_City',
            121 => 'America/Indiana/Vevay',
            122 => 'America/Indiana/Vincennes',
            123 => 'America/Indiana/Winamac',
            124 => 'America/Inuvik',
            125 => 'America/Iqaluit',
            126 => 'America/Jamaica',
            127 => 'America/Juneau',
            128 => 'America/Kentucky/Louisville',
            129 => 'America/Kentucky/Monticello',
            130 => 'America/Kralendijk',
            131 => 'America/La_Paz',
            132 => 'America/Lima',
            133 => 'America/Los_Angeles',
            134 => 'America/Lower_Princes',
            135 => 'America/Maceio',
            136 => 'America/Managua',
            137 => 'America/Manaus',
            138 => 'America/Marigot',
            139 => 'America/Martinique',
            140 => 'America/Matamoros',
            141 => 'America/Mazatlan',
            142 => 'America/Menominee',
            143 => 'America/Merida',
            144 => 'America/Metlakatla',
            145 => 'America/Mexico_City',
            146 => 'America/Miquelon',
            147 => 'America/Moncton',
            148 => 'America/Monterrey',
            149 => 'America/Montevideo',
            150 => 'America/Montserrat',
            151 => 'America/Nassau',
            152 => 'America/New_York',
            153 => 'America/Nipigon',
            154 => 'America/Nome',
            155 => 'America/Noronha',
            156 => 'America/North_Dakota/Beulah',
            157 => 'America/North_Dakota/Center',
            158 => 'America/North_Dakota/New_Salem',
            159 => 'America/Ojinaga',
            160 => 'America/Panama',
            161 => 'America/Pangnirtung',
            162 => 'America/Paramaribo',
            163 => 'America/Phoenix',
            164 => 'America/Port-au-Prince',
            165 => 'America/Port_of_Spain',
            166 => 'America/Porto_Velho',
            167 => 'America/Puerto_Rico',
            168 => 'America/Rainy_River',
            169 => 'America/Rankin_Inlet',
            170 => 'America/Recife',
            171 => 'America/Regina',
            172 => 'America/Resolute',
            173 => 'America/Rio_Branco',
            174 => 'America/Santa_Isabel',
            175 => 'America/Santarem',
            176 => 'America/Santiago',
            177 => 'America/Santo_Domingo',
            178 => 'America/Sao_Paulo',
            179 => 'America/Scoresbysund',
            180 => 'America/Sitka',
            181 => 'America/St_Barthelemy',
            182 => 'America/St_Johns',
            183 => 'America/St_Kitts',
            184 => 'America/St_Lucia',
            185 => 'America/St_Thomas',
            186 => 'America/St_Vincent',
            187 => 'America/Swift_Current',
            188 => 'America/Tegucigalpa',
            189 => 'America/Thule',
            190 => 'America/Thunder_Bay',
            191 => 'America/Tijuana',
            192 => 'America/Toronto',
            193 => 'America/Tortola',
            194 => 'America/Vancouver',
            195 => 'America/Whitehorse',
            196 => 'America/Winnipeg',
            197 => 'America/Yakutat',
            198 => 'America/Yellowknife',
            199 => 'Antarctica/Casey',
            200 => 'Antarctica/Davis',
            201 => 'Antarctica/DumontDUrville',
            202 => 'Antarctica/Macquarie',
            203 => 'Antarctica/Mawson',
            204 => 'Antarctica/McMurdo',
            205 => 'Antarctica/Palmer',
            206 => 'Antarctica/Rothera',
            207 => 'Antarctica/Syowa',
            208 => 'Antarctica/Vostok',
            209 => 'Arctic/Longyearbyen',
            210 => 'Asia/Aden',
            211 => 'Asia/Almaty',
            212 => 'Asia/Amman',
            213 => 'Asia/Anadyr',
            214 => 'Asia/Aqtau',
            215 => 'Asia/Aqtobe',
            216 => 'Asia/Ashgabat',
            217 => 'Asia/Baghdad',
            218 => 'Asia/Bahrain',
            219 => 'Asia/Baku',
            220 => 'Asia/Bangkok',
            221 => 'Asia/Beirut',
            222 => 'Asia/Bishkek',
            223 => 'Asia/Brunei',
            224 => 'Asia/Choibalsan',
            225 => 'Asia/Chongqing',
            226 => 'Asia/Colombo',
            227 => 'Asia/Damascus',
            228 => 'Asia/Dhaka',
            229 => 'Asia/Dili',
            230 => 'Asia/Dubai',
            231 => 'Asia/Dushanbe',
            232 => 'Asia/Gaza',
            233 => 'Asia/Harbin',
            234 => 'Asia/Hebron',
            235 => 'Asia/Ho_Chi_Minh',
            236 => 'Asia/Hong_Kong',
            237 => 'Asia/Hovd',
            238 => 'Asia/Irkutsk',
            239 => 'Asia/Jakarta',
            240 => 'Asia/Jayapura',
            241 => 'Asia/Jerusalem',
            242 => 'Asia/Kabul',
            243 => 'Asia/Kamchatka',
            244 => 'Asia/Karachi',
            245 => 'Asia/Kashgar',
            246 => 'Asia/Kathmandu',
            247 => 'Asia/Khandyga',
            248 => 'Asia/Kolkata',
            249 => 'Asia/Krasnoyarsk',
            250 => 'Asia/Kuala_Lumpur',
            251 => 'Asia/Kuching',
            252 => 'Asia/Kuwait',
            253 => 'Asia/Macau',
            254 => 'Asia/Magadan',
            255 => 'Asia/Makassar',
            256 => 'Asia/Manila',
            257 => 'Asia/Muscat',
            258 => 'Asia/Nicosia',
            259 => 'Asia/Novokuznetsk',
            260 => 'Asia/Novosibirsk',
            261 => 'Asia/Omsk',
            262 => 'Asia/Oral',
            263 => 'Asia/Phnom_Penh',
            264 => 'Asia/Pontianak',
            265 => 'Asia/Pyongyang',
            266 => 'Asia/Qatar',
            267 => 'Asia/Qyzylorda',
            268 => 'Asia/Rangoon',
            269 => 'Asia/Riyadh',
            270 => 'Asia/Sakhalin',
            271 => 'Asia/Samarkand',
            272 => 'Asia/Seoul',
            273 => 'Asia/Shanghai',
            274 => 'Asia/Singapore',
            275 => 'Asia/Taipei',
            276 => 'Asia/Tashkent',
            277 => 'Asia/Tbilisi',
            278 => 'Asia/Tehran',
            279 => 'Asia/Thimphu',
            280 => 'Asia/Tokyo',
            281 => 'Asia/Ulaanbaatar',
            282 => 'Asia/Urumqi',
            283 => 'Asia/Ust-Nera',
            284 => 'Asia/Vientiane',
            285 => 'Asia/Vladivostok',
            286 => 'Asia/Yakutsk',
            287 => 'Asia/Yekaterinburg',
            288 => 'Asia/Yerevan',
            289 => 'Atlantic/Azores',
            290 => 'Atlantic/Bermuda',
            291 => 'Atlantic/Canary',
            292 => 'Atlantic/Cape_Verde',
            293 => 'Atlantic/Faroe',
            294 => 'Atlantic/Madeira',
            295 => 'Atlantic/Reykjavik',
            296 => 'Atlantic/South_Georgia',
            297 => 'Atlantic/St_Helena',
            298 => 'Atlantic/Stanley',
            299 => 'Australia/Adelaide',
            300 => 'Australia/Brisbane',
            301 => 'Australia/Broken_Hill',
            302 => 'Australia/Currie',
            303 => 'Australia/Darwin',
            304 => 'Australia/Eucla',
            305 => 'Australia/Hobart',
            306 => 'Australia/Lindeman',
            307 => 'Australia/Lord_Howe',
            308 => 'Australia/Melbourne',
            309 => 'Australia/Perth',
            310 => 'Australia/Sydney',
            311 => 'Europe/Amsterdam',
            312 => 'Europe/Andorra',
            313 => 'Europe/Athens',
            314 => 'Europe/Belgrade',
            315 => 'Europe/Berlin',
            316 => 'Europe/Bratislava',
            317 => 'Europe/Brussels',
            318 => 'Europe/Bucharest',
            319 => 'Europe/Budapest',
            320 => 'Europe/Busingen',
            321 => 'Europe/Chisinau',
            322 => 'Europe/Copenhagen',
            323 => 'Europe/Dublin',
            324 => 'Europe/Gibraltar',
            325 => 'Europe/Guernsey',
            326 => 'Europe/Helsinki',
            327 => 'Europe/Isle_of_Man',
            328 => 'Europe/Istanbul',
            329 => 'Europe/Jersey',
            330 => 'Europe/Kaliningrad',
            331 => 'Europe/Kiev',
            332 => 'Europe/Lisbon',
            333 => 'Europe/Ljubljana',
            334 => 'Europe/London',
            335 => 'Europe/Luxembourg',
            336 => 'Europe/Madrid',
            337 => 'Europe/Malta',
            338 => 'Europe/Mariehamn',
            339 => 'Europe/Minsk',
            340 => 'Europe/Monaco',
            341 => 'Europe/Moscow',
            342 => 'Europe/Oslo',
            343 => 'Europe/Paris',
            344 => 'Europe/Podgorica',
            345 => 'Europe/Prague',
            346 => 'Europe/Riga',
            347 => 'Europe/Rome',
            348 => 'Europe/Samara',
            349 => 'Europe/San_Marino',
            350 => 'Europe/Sarajevo',
            351 => 'Europe/Simferopol',
            352 => 'Europe/Skopje',
            353 => 'Europe/Sofia',
            354 => 'Europe/Stockholm',
            355 => 'Europe/Tallinn',
            356 => 'Europe/Tirane',
            357 => 'Europe/Uzhgorod',
            358 => 'Europe/Vaduz',
            359 => 'Europe/Vatican',
            360 => 'Europe/Vienna',
            361 => 'Europe/Vilnius',
            362 => 'Europe/Volgograd',
            363 => 'Europe/Warsaw',
            364 => 'Europe/Zagreb',
            365 => 'Europe/Zaporozhye',
            366 => 'Europe/Zurich',
            367 => 'Indian/Antananarivo',
            368 => 'Indian/Chagos',
            369 => 'Indian/Christmas',
            370 => 'Indian/Cocos',
            371 => 'Indian/Comoro',
            372 => 'Indian/Kerguelen',
            373 => 'Indian/Mahe',
            374 => 'Indian/Maldives',
            375 => 'Indian/Mauritius',
            376 => 'Indian/Mayotte',
            377 => 'Indian/Reunion',
            378 => 'Pacific/Apia',
            379 => 'Pacific/Auckland',
            380 => 'Pacific/Chatham',
            381 => 'Pacific/Chuuk',
            382 => 'Pacific/Easter',
            383 => 'Pacific/Efate',
            384 => 'Pacific/Enderbury',
            385 => 'Pacific/Fakaofo',
            386 => 'Pacific/Fiji',
            387 => 'Pacific/Funafuti',
            388 => 'Pacific/Galapagos',
            389 => 'Pacific/Gambier',
            390 => 'Pacific/Guadalcanal',
            391 => 'Pacific/Guam',
            392 => 'Pacific/Honolulu',
            393 => 'Pacific/Johnston',
            394 => 'Pacific/Kiritimati',
            395 => 'Pacific/Kosrae',
            396 => 'Pacific/Kwajalein',
            397 => 'Pacific/Majuro',
            398 => 'Pacific/Marquesas',
            399 => 'Pacific/Midway',
            400 => 'Pacific/Nauru',
            401 => 'Pacific/Niue',
            402 => 'Pacific/Norfolk',
            403 => 'Pacific/Noumea',
            404 => 'Pacific/Pago_Pago',
            405 => 'Pacific/Palau',
            406 => 'Pacific/Pitcairn',
            407 => 'Pacific/Pohnpei',
            408 => 'Pacific/Port_Moresby',
            409 => 'Pacific/Rarotonga',
            410 => 'Pacific/Saipan',
            411 => 'Pacific/Tahiti',
            412 => 'Pacific/Tarawa',
            413 => 'Pacific/Tongatapu',
            414 => 'Pacific/Wake',
            415 => 'Pacific/Wallis'
          ]
        ],
        'dateFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'DD.MM.YYYY',
            1 => 'MM/DD/YYYY',
            2 => 'DD/MM/YYYY',
            3 => 'YYYY-MM-DD'
          ],
          'default' => 'DD.MM.YYYY'
        ],
        'timeFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'HH:mm',
            1 => 'hh:mma',
            2 => 'hh:mmA',
            3 => 'hh:mm A',
            4 => 'hh:mm a'
          ],
          'default' => 'HH:mm'
        ],
        'weekStart' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 1
          ],
          'default' => 0
        ],
        'fiscalYearShift' => [
          'type' => 'enumInt',
          'default' => 0,
          'view' => 'views/settings/fields/fiscal-year-shift'
        ],
        'thousandSeparator' => [
          'type' => 'varchar',
          'default' => ',',
          'maxLength' => 1,
          'view' => 'views/settings/fields/thousand-separator'
        ],
        'decimalMark' => [
          'type' => 'varchar',
          'default' => '.',
          'required' => true,
          'maxLength' => 1
        ],
        'currencyList' => [
          'type' => 'multiEnum',
          'default' => [
            0 => 'USD',
            1 => 'EUR'
          ],
          'required' => true,
          'view' => 'views/settings/fields/currency-list',
          'tooltip' => true
        ],
        'defaultCurrency' => [
          'type' => 'enum',
          'default' => 'USD',
          'required' => true,
          'view' => 'views/settings/fields/default-currency'
        ],
        'baseCurrency' => [
          'type' => 'enum',
          'default' => 'USD',
          'required' => true,
          'view' => 'views/settings/fields/default-currency'
        ],
        'currencyRates' => [
          'type' => 'base',
          'view' => 'views/settings/fields/currency-rates'
        ],
        'outboundEmailIsShared' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'outboundEmailFromName' => [
          'type' => 'varchar',
          'default' => 'EspoCRM',
          'trim' => true
        ],
        'outboundEmailFromAddress' => [
          'type' => 'varchar',
          'default' => 'crm@example.com',
          'trim' => true,
          'tooltip' => true
        ],
        'emailAddressLookupEntityTypeList' => [
          'type' => 'multiEnum',
          'tooltip' => true,
          'view' => 'views/settings/fields/email-address-lookup-entity-type-list'
        ],
        'smtpServer' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'smtpPort' => [
          'type' => 'int',
          'min' => 0,
          'max' => 65535,
          'default' => 587
        ],
        'smtpAuth' => [
          'type' => 'bool'
        ],
        'smtpSecurity' => [
          'type' => 'enum',
          'default' => 'TLS',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'smtpUsername' => [
          'type' => 'varchar'
        ],
        'smtpPassword' => [
          'type' => 'password'
        ],
        'tabList' => [
          'type' => 'array',
          'view' => 'views/settings/fields/tab-list'
        ],
        'quickCreateList' => [
          'type' => 'array',
          'translation' => 'Global.scopeNames',
          'view' => 'views/settings/fields/quick-create-list'
        ],
        'language' => [
          'type' => 'enum',
          'options' => [
            0 => 'en_US'
          ],
          'default' => 'en_US',
          'view' => 'views/settings/fields/language',
          'isSorted' => true
        ],
        'globalSearchEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNames',
          'view' => 'views/settings/fields/global-search-entity-list',
          'tooltip' => true
        ],
        'exportDelimiter' => [
          'type' => 'varchar',
          'default' => ',',
          'required' => true,
          'maxLength' => 1
        ],
        'companyLogo' => [
          'type' => 'image'
        ],
        'authenticationMethod' => [
          'type' => 'enum',
          'default' => 'Espo',
          'view' => 'views/settings/fields/authentication-method'
        ],
        'auth2FA' => [
          'type' => 'bool'
        ],
        'auth2FAMethodList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/auth-two-fa-method-list'
        ],
        'auth2FAForced' => [
          'type' => 'bool'
        ],
        'passwordRecoveryDisabled' => [
          'type' => 'bool'
        ],
        'passwordRecoveryForAdminDisabled' => [
          'type' => 'bool'
        ],
        'passwordRecoveryForInternalUsersDisabled' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'passwordRecoveryNoExposure' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'passwordGenerateLength' => [
          'type' => 'int',
          'min' => 6,
          'max' => 150,
          'required' => true
        ],
        'passwordStrengthLength' => [
          'type' => 'int',
          'max' => 150,
          'min' => 1
        ],
        'passwordStrengthLetterCount' => [
          'type' => 'int',
          'max' => 150,
          'min' => 0
        ],
        'passwordStrengthNumberCount' => [
          'type' => 'int',
          'max' => 150,
          'min' => 0
        ],
        'passwordStrengthBothCases' => [
          'type' => 'bool'
        ],
        'ldapHost' => [
          'type' => 'varchar'
        ],
        'ldapPort' => [
          'type' => 'varchar',
          'default' => 389
        ],
        'ldapSecurity' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'SSL',
            2 => 'TLS'
          ]
        ],
        'ldapAuth' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapUsername' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapPassword' => [
          'type' => 'password',
          'tooltip' => true
        ],
        'ldapBindRequiresDn' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapUserLoginFilter' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapBaseDn' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapAccountCanonicalForm' => [
          'type' => 'enum',
          'options' => [
            0 => 'Dn',
            1 => 'Username',
            2 => 'Backslash',
            3 => 'Principal'
          ],
          'tooltip' => true
        ],
        'ldapAccountDomainName' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapAccountDomainNameShort' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapAccountFilterFormat' => [
          'type' => 'varchar'
        ],
        'ldapTryUsernameSplit' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapOptReferrals' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'ldapPortalUserLdapAuth' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'ldapCreateEspoUser' => [
          'type' => 'bool',
          'default' => true,
          'tooltip' => true
        ],
        'ldapUserNameAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserObjectClass' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserFirstNameAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserLastNameAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserTitleAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserEmailAddressAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserPhoneNumberAttribute' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'ldapUserDefaultTeam' => [
          'type' => 'link',
          'tooltip' => true,
          'entity' => 'Team'
        ],
        'ldapUserTeams' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'entity' => 'Team'
        ],
        'ldapPortalUserPortals' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'entity' => 'Portal'
        ],
        'ldapPortalUserRoles' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'entity' => 'PortalRole'
        ],
        'exportDisabled' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'emailNotificationsDelay' => [
          'type' => 'int',
          'min' => 0,
          'max' => 18000,
          'tooltip' => true
        ],
        'assignmentEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'assignmentEmailNotificationsEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/settings/fields/assignment-email-notifications-entity-list'
        ],
        'assignmentNotificationsEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/settings/fields/assignment-notifications-entity-list'
        ],
        'postEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'updateEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'mentionEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'streamEmailNotifications' => [
          'type' => 'bool',
          'default' => false
        ],
        'portalStreamEmailNotifications' => [
          'type' => 'bool',
          'default' => true
        ],
        'streamEmailNotificationsEntityList' => [
          'type' => 'multiEnum',
          'translation' => 'Global.scopeNamesPlural',
          'view' => 'views/settings/fields/stream-email-notifications-entity-list',
          'tooltip' => true
        ],
        'streamEmailNotificationsTypeList' => [
          'type' => 'multiEnum',
          'options' => [
            0 => 'Post',
            1 => 'Status',
            2 => 'EmailReceived'
          ]
        ],
        'newNotificationCountInTitle' => [
          'type' => 'bool'
        ],
        'b2cMode' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'avatarsDisabled' => [
          'type' => 'bool',
          'default' => false
        ],
        'followCreatedEntities' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'adminPanelIframeUrl' => [
          'type' => 'varchar'
        ],
        'displayListViewRecordCount' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'userThemesDisabled' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'theme' => [
          'type' => 'enum',
          'view' => 'views/settings/fields/theme',
          'translation' => 'Global.themes'
        ],
        'emailMessageMaxSize' => [
          'type' => 'float',
          'min' => 0,
          'tooltip' => true
        ],
        'inboundEmailMaxPortionSize' => [
          'type' => 'int',
          'min' => 1,
          'max' => 500
        ],
        'personalEmailMaxPortionSize' => [
          'type' => 'int',
          'min' => 1,
          'max' => 500
        ],
        'maxEmailAccountCount' => [
          'type' => 'int'
        ],
        'massEmailMaxPerHourCount' => [
          'type' => 'int',
          'min' => 1
        ],
        'massEmailVerp' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'authTokenLifetime' => [
          'type' => 'float',
          'min' => 0,
          'default' => 0,
          'tooltip' => true
        ],
        'authTokenMaxIdleTime' => [
          'type' => 'float',
          'min' => 0,
          'default' => 0,
          'tooltip' => true
        ],
        'authTokenPreventConcurrent' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'dashboardLayout' => [
          'type' => 'jsonArray',
          'view' => 'views/settings/fields/dashboard-layout'
        ],
        'dashletsOptions' => [
          'type' => 'jsonObject',
          'disabled' => true
        ],
        'siteUrl' => [
          'type' => 'varchar',
          'tooltip' => true
        ],
        'applicationName' => [
          'type' => 'varchar'
        ],
        'readableDateFormatDisabled' => [
          'type' => 'bool'
        ],
        'addressFormat' => [
          'type' => 'enumInt',
          'options' => [
            0 => 1,
            1 => 2,
            2 => 3,
            3 => 4
          ]
        ],
        'addressPreview' => [
          'type' => 'address',
          'notStorable' => true,
          'readOnly' => true,
          'view' => 'views/settings/fields/address-preview'
        ],
        'personNameFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'firstLast',
            1 => 'lastFirst',
            2 => 'firstMiddleLast',
            3 => 'lastFirstMiddle'
          ]
        ],
        'currencyFormat' => [
          'type' => 'enumInt',
          'options' => [
            0 => 1,
            1 => 2,
            2 => 3
          ]
        ],
        'currencyDecimalPlaces' => [
          'type' => 'int',
          'tooltip' => true,
          'min' => 0,
          'max' => 20
        ],
        'notificationSoundsDisabled' => [
          'type' => 'bool'
        ],
        'calendarEntityList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/calendar-entity-list',
          'tooltip' => true
        ],
        'activitiesEntityList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/activities-entity-list',
          'tooltip' => true
        ],
        'historyEntityList' => [
          'type' => 'multiEnum',
          'view' => 'views/settings/fields/history-entity-list',
          'tooltip' => true
        ],
        'busyRangesEntityList' => [
          'type' => 'multiEnum',
          'tooltip' => true,
          'view' => 'views/settings/fields/busy-ranges-entity-list'
        ],
        'googleMapsApiKey' => [
          'type' => 'varchar',
          'onlyUser' => true
        ],
        'massEmailDisableMandatoryOptOutLink' => [
          'type' => 'bool'
        ],
        'massEmailOpenTracking' => [
          'type' => 'bool'
        ],
        'aclStrictMode' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'aclAllowDeleteCreated' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'lastViewedCount' => [
          'type' => 'int',
          'min' => 1,
          'max' => 200,
          'default' => 20,
          'required' => true
        ],
        'adminNotifications' => [
          'type' => 'bool'
        ],
        'adminNotificationsNewVersion' => [
          'type' => 'bool'
        ],
        'adminNotificationsNewExtensionVersion' => [
          'type' => 'bool'
        ],
        'textFilterUseContainsForVarchar' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'scopeColorsDisabled' => [
          'type' => 'bool'
        ],
        'tabColorsDisabled' => [
          'type' => 'bool'
        ],
        'tabIconsDisabled' => [
          'type' => 'bool'
        ],
        'emailAddressIsOptedOutByDefault' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'outboundEmailBccAddress' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'cleanupDeletedRecords' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'addressCountryList' => [
          'type' => 'multiEnum',
          'tooltip' => true
        ],
        'addressCityList' => [
          'type' => 'multiEnum',
          'tooltip' => true
        ],
        'addressStateList' => [
          'type' => 'multiEnum',
          'tooltip' => true
        ],
        'jobRunInParallel' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'jobMaxPortion' => [
          'type' => 'int',
          'tooltip' => true
        ],
        'jobPoolConcurrencyNumber' => [
          'type' => 'int',
          'tooltip' => true,
          'min' => 1
        ],
        'daemonInterval' => [
          'type' => 'int',
          'tooltip' => true
        ],
        'daemonMaxProcessNumber' => [
          'type' => 'int',
          'tooltip' => true,
          'min' => 1
        ],
        'daemonProcessTimeout' => [
          'type' => 'int',
          'tooltip' => true
        ],
        'cronDisabled' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'maintenanceMode' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'useWebSocket' => [
          'type' => 'bool',
          'tooltip' => true
        ],
        'addressPreviewStreet' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressPreviewCity' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true
        ],
        'addressPreviewState' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'addressPreviewCountry' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'addressPreviewPostalCode' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'addressPreviewMap' => [
          'notStorable' => true,
          'readOnly' => true,
          'type' => 'map',
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ]
    ],
    'Subscription' => [
      'fields' => [
        'id' => [
          'type' => 'id',
          'dbType' => 'int',
          'autoincrement' => true
        ],
        'entityId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => 'entity'
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'index' => 'entity'
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 24,
          'index' => true
        ]
      ],
      'indexes' => [
        'userEntity' => [
          'columns' => [
            0 => 'userId',
            1 => 'entityId',
            2 => 'entityType'
          ]
        ]
      ]
    ],
    'Team' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true
        ],
        'roles' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'positionList' => [
          'type' => 'array',
          'tooltip' => true
        ],
        'userRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true
        ],
        'layoutSet' => [
          'type' => 'link',
          'tooltip' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ]
      ],
      'links' => [
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'teams',
          'columnAttributeMap' => [
            'role' => 'userRole'
          ]
        ],
        'roles' => [
          'type' => 'hasMany',
          'entity' => 'Role',
          'foreign' => 'teams'
        ],
        'notes' => [
          'type' => 'hasMany',
          'entity' => 'Note',
          'foreign' => 'teams'
        ],
        'inboundEmails' => [
          'type' => 'hasMany',
          'entity' => 'InboundEmail',
          'foreign' => 'teams'
        ],
        'layoutSet' => [
          'type' => 'belongsTo',
          'entity' => 'LayoutSet',
          'foreign' => 'teams'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Template' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'body' => [
          'type' => 'wysiwyg',
          'view' => 'views/template/fields/body'
        ],
        'header' => [
          'type' => 'wysiwyg',
          'view' => 'views/template/fields/body'
        ],
        'footer' => [
          'type' => 'wysiwyg',
          'view' => 'views/template/fields/body',
          'tooltip' => true
        ],
        'entityType' => [
          'type' => 'enum',
          'required' => true,
          'translation' => 'Global.scopeNames',
          'view' => 'views/template/fields/entity-type'
        ],
        'leftMargin' => [
          'type' => 'float',
          'default' => 10
        ],
        'rightMargin' => [
          'type' => 'float',
          'default' => 10
        ],
        'topMargin' => [
          'type' => 'float',
          'default' => 10
        ],
        'bottomMargin' => [
          'type' => 'float',
          'default' => 25
        ],
        'printFooter' => [
          'type' => 'bool'
        ],
        'printHeader' => [
          'type' => 'bool'
        ],
        'footerPosition' => [
          'type' => 'float',
          'default' => 15
        ],
        'headerPosition' => [
          'type' => 'float',
          'default' => 10
        ],
        'teams' => [
          'type' => 'linkMultiple'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'variables' => [
          'type' => 'base',
          'notStorable' => true,
          'tooltip' => true
        ],
        'pageOrientation' => [
          'type' => 'enum',
          'options' => [
            0 => 'Portrait',
            1 => 'Landscape'
          ],
          'default' => 'Portrait'
        ],
        'pageFormat' => [
          'type' => 'enum',
          'options' => [
            0 => 'A3',
            1 => 'A4',
            2 => 'A5',
            3 => 'A6',
            4 => 'A7',
            5 => 'Custom'
          ],
          'default' => 'A4'
        ],
        'pageWidth' => [
          'type' => 'float',
          'min' => 1
        ],
        'pageHeight' => [
          'type' => 'float',
          'min' => 1
        ],
        'fontFace' => [
          'type' => 'enum',
          'view' => 'views/template/fields/font-face',
          'default' => ''
        ]
      ],
      'links' => [
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'UniqueId' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'index' => true
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'terminateAt' => [
          'type' => 'datetime'
        ],
        'target' => [
          'type' => 'linkParent'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'target' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'User' => [
      'fields' => [
        'userName' => [
          'type' => 'varchar',
          'maxLength' => 50,
          'required' => true,
          'view' => 'views/user/fields/user-name',
          'tooltip' => true
        ],
        'name' => [
          'type' => 'personName',
          'view' => 'views/user/fields/name',
          'dependeeAttributeList' => [
            0 => 'userName'
          ]
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'regular',
            1 => 'admin',
            2 => 'portal',
            3 => 'system',
            4 => 'super-admin',
            5 => 'api'
          ],
          'default' => 'regular',
          'maxLength' => 24,
          'index' => true,
          'inlineEditDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'password' => [
          'type' => 'password',
          'maxLength' => 150,
          'internal' => true,
          'disabled' => true
        ],
        'passwordConfirm' => [
          'type' => 'password',
          'maxLength' => 150,
          'internal' => true,
          'disabled' => true,
          'notStorable' => true
        ],
        'authMethod' => [
          'type' => 'enum',
          'options' => [
            0 => 'ApiKey',
            1 => 'Hmac'
          ],
          'maxLength' => 24,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true
        ],
        'apiKey' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'readOnly' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true
        ],
        'secretKey' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'readOnly' => true,
          'notStorable' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Ms.',
            3 => 'Mrs.',
            4 => 'Dr.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'default' => ''
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'required' => true,
          'default' => ''
        ],
        'isActive' => [
          'type' => 'bool',
          'layoutDetailDisabled' => true,
          'tooltip' => true,
          'default' => true
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'trim' => true
        ],
        'position' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'notStorable' => true,
          'where' => [
            'LIKE' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT LIKE' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role!*' => '{value}'
              ],
              'distinct' => true
            ],
            '=' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'TeamUser',
                  'select' => [
                    0 => 'userId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'leftJoins' => [
                0 => [
                  0 => 'teams',
                  1 => 'teamsPosition'
                ]
              ],
              'whereClause' => [
                'teamsPositionMiddle.role!=' => NULL
              ],
              'distinct' => true
            ]
          ],
          'directUpdateDisabled' => true,
          'trim' => true,
          'readOnly' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'textFilterDisabled' => true
        ],
        'emailAddress' => [
          'type' => 'email',
          'required' => false,
          'layoutMassUpdateDisabled' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile'
        ],
        'token' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true
        ],
        'authTokenId' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true
        ],
        'authLogRecordId' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true
        ],
        'ipAddress' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true
        ],
        'defaultTeam' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'tooltip' => true
        ],
        'acceptanceStatus' => [
          'type' => 'varchar',
          'notStorable' => true,
          'exportDisabled' => true,
          'disabled' => true
        ],
        'acceptanceStatusMeetings' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'meetings',
          'column' => 'status'
        ],
        'acceptanceStatusCalls' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'calls',
          'column' => 'status'
        ],
        'teamRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'tooltip' => true,
          'columns' => [
            'role' => 'userRole'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'layoutDetailDisabled' => true,
          'view' => 'views/user/fields/teams',
          'default' => 'javascript: return {teamsIds: []}'
        ],
        'roles' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'tooltip' => true
        ],
        'portals' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'tooltip' => true
        ],
        'portalRoles' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'tooltip' => true
        ],
        'contact' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'view' => 'views/user/fields/contact'
        ],
        'accounts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true
        ],
        'account' => [
          'type' => 'link',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'foreignAccessDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'readOnly' => true
        ],
        'portal' => [
          'type' => 'link',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'avatar' => [
          'type' => 'image',
          'view' => 'views/user/fields/avatar',
          'layoutDetailDisabled' => true,
          'previewSize' => 'small'
        ],
        'sendAccessInfo' => [
          'type' => 'bool',
          'notStorable' => true,
          'disabled' => true
        ],
        'gender' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Male',
            2 => 'Female',
            3 => 'Neutral'
          ],
          'default' => ''
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'dashboardTemplate' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true
        ],
        'auth2FA' => [
          'type' => 'foreign',
          'link' => 'userData',
          'field' => 'auth2FA',
          'readOnly' => true,
          'view' => 'views/fields/foreign-bool'
        ],
        'userData' => [
          'type' => 'linkOne',
          'disabled' => true
        ],
        'lastAccess' => [
          'type' => 'datetime',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'directAccessDisabled' => true
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100
        ],
        'emailAddressIsOptedOut' => [
          'layoutMassUpdateDisabled' => true,
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'links' => [
        'defaultTeam' => [
          'type' => 'belongsTo',
          'entity' => 'Team'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'foreign' => 'users',
          'additionalColumns' => [
            'role' => [
              'type' => 'varchar',
              'len' => 100
            ]
          ],
          'layoutRelationshipsDisabled' => true,
          'columnAttributeMap' => [
            'role' => 'teamRole'
          ]
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'roles' => [
          'type' => 'hasMany',
          'entity' => 'Role',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'portalRoles' => [
          'type' => 'hasMany',
          'entity' => 'PortalRole',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'dashboardTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'DashboardTemplate'
        ],
        'preferences' => [
          'type' => 'hasOne',
          'entity' => 'Preferences',
          'noJoin' => true
        ],
        'userData' => [
          'type' => 'hasOne',
          'entity' => 'UserData',
          'foreign' => 'user',
          'foreignName' => 'id'
        ],
        'meetings' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'users',
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'calls' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'users',
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'emails' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'users'
        ],
        'notes' => [
          'type' => 'hasMany',
          'entity' => 'Note',
          'foreign' => 'users',
          'layoutRelationshipsDisabled' => true
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'portalUser'
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'portalUsers',
          'relationName' => 'AccountPortalUser'
        ],
        'tasks' => [
          'type' => 'hasMany',
          'entity' => 'Task',
          'foreign' => 'assignedUser'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'users',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ]
      ],
      'collection' => [
        'orderBy' => 'userName',
        'order' => 'asc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'userName'
        ],
        'sortBy' => 'userName',
        'asc' => true
      ]
    ],
    'UserData' => [
      'fields' => [
        'imapHandlers' => [
          'type' => 'jsonObject'
        ],
        'smtpHandlers' => [
          'type' => 'jsonObject'
        ],
        'auth2FA' => [
          'type' => 'bool'
        ],
        'auth2FAMethod' => [
          'type' => 'enum'
        ],
        'auth2FATotpSecret' => [
          'type' => 'varchar',
          'maxLength' => 32
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ]
    ],
    'Webhook' => [
      'fields' => [
        'event' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true,
          'view' => 'views/webhook/fields/event'
        ],
        'url' => [
          'type' => 'varchar',
          'maxLength' => 512,
          'required' => true
        ],
        'isActive' => [
          'type' => 'bool',
          'default' => true
        ],
        'user' => [
          'type' => 'link',
          'view' => 'views/webhook/fields/user'
        ],
        'entityType' => [
          'type' => 'varchar',
          'readOnly' => true,
          'view' => 'views/fields/entity-type'
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'create',
            1 => 'update',
            2 => 'fieldUpdate',
            3 => 'delete'
          ],
          'readOnly' => true
        ],
        'field' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'secretKey' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'readOnly' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutListDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'user' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'event'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'event' => [
          'columns' => [
            0 => 'event'
          ]
        ],
        'entityTypeType' => [
          'columns' => [
            0 => 'entityType',
            1 => 'type'
          ]
        ],
        'entityTypeField' => [
          'columns' => [
            0 => 'entityType',
            1 => 'field'
          ]
        ]
      ]
    ],
    'WebhookEventQueueItem' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'dbType' => 'bigint'
        ],
        'event' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true
        ],
        'target' => [
          'type' => 'linkParent'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'isProcessed' => [
          'type' => 'bool'
        ]
      ],
      'links' => [],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ]
    ],
    'WebhookQueueItem' => [
      'fields' => [
        'number' => [
          'type' => 'autoincrement',
          'dbType' => 'bigint'
        ],
        'event' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'required' => true
        ],
        'webhook' => [
          'type' => 'link'
        ],
        'target' => [
          'type' => 'linkParent'
        ],
        'data' => [
          'type' => 'jsonObject'
        ],
        'createdAt' => [
          'type' => 'datetime'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Success',
            2 => 'Failed'
          ],
          'default' => 'Pending',
          'maxLength' => 15
        ],
        'processedAt' => [
          'type' => 'datetime'
        ],
        'attempts' => [
          'type' => 'int',
          'default' => 0
        ],
        'processAt' => [
          'type' => 'datetime'
        ]
      ],
      'links' => [
        'webhook' => [
          'type' => 'belongsTo',
          'entity' => 'Webhook',
          'foreignName' => 'id'
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'sortBy' => 'number',
        'asc' => false
      ]
    ],
    'Account' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'maxLength' => 249,
          'required' => true,
          'trim' => true
        ],
        'website' => [
          'type' => 'url',
          'strip' => true
        ],
        'emailAddress' => [
          'type' => 'email',
          'isPersonalData' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Office',
            1 => 'Mobile',
            2 => 'Fax',
            3 => 'Other'
          ],
          'defaultType' => 'Office'
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Customer',
            2 => 'Investor',
            3 => 'Partner',
            4 => 'Reseller'
          ],
          'default' => ''
        ],
        'industry' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Advertising',
            2 => 'Aerospace',
            3 => 'Agriculture',
            4 => 'Apparel & Accessories',
            5 => 'Architecture',
            6 => 'Automotive',
            7 => 'Banking',
            8 => 'Biotechnology',
            9 => 'Building Materials & Equipment',
            10 => 'Chemical',
            11 => 'Construction',
            12 => 'Consulting',
            13 => 'Computer',
            14 => 'Culture',
            15 => 'Creative',
            16 => 'Defense',
            17 => 'Education',
            18 => 'Electronics',
            19 => 'Electric Power',
            20 => 'Energy',
            21 => 'Entertainment & Leisure',
            22 => 'Finance',
            23 => 'Food & Beverage',
            24 => 'Grocery',
            25 => 'Healthcare',
            26 => 'Hospitality',
            27 => 'Insurance',
            28 => 'Legal',
            29 => 'Manufacturing',
            30 => 'Mass Media',
            31 => 'Marketing',
            32 => 'Mining',
            33 => 'Music',
            34 => 'Publishing',
            35 => 'Petroleum',
            36 => 'Real Estate',
            37 => 'Retail',
            38 => 'Service',
            39 => 'Sports',
            40 => 'Software',
            41 => 'Support',
            42 => 'Shipping',
            43 => 'Travel',
            44 => 'Technology',
            45 => 'Telecommunications',
            46 => 'Television',
            47 => 'Transportation',
            48 => 'Testing, Inspection & Certification',
            49 => 'Venture Capital',
            50 => 'Wholesale',
            51 => 'Water'
          ],
          'default' => '',
          'isSorted' => true
        ],
        'sicCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'contactRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'disabled' => true,
          'maxLength' => 100
        ],
        'contactIsInactive' => [
          'type' => 'bool',
          'notStorable' => true,
          'default' => false,
          'disabled' => true
        ],
        'billingAddress' => [
          'type' => 'address',
          'trim' => true
        ],
        'billingAddressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'billingAddressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true
        ],
        'billingAddressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'billingAddressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'billingAddressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'shippingAddress' => [
          'type' => 'address',
          'view' => 'crm:views/account/fields/shipping-address'
        ],
        'shippingAddressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar',
          'trim' => true
        ],
        'shippingAddressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true
        ],
        'shippingAddressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'shippingAddressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'shippingAddressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'campaign' => [
          'type' => 'link',
          'layoutListDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'noLoad' => true
        ],
        'targetList' => [
          'type' => 'link',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'entity' => 'TargetList',
          'directAccessDisabled' => true
        ],
        'originalLead' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'view' => 'views/fields/link-one'
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'billingAddressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ],
        'shippingAddressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'accounts',
          'columnAttributeMap' => [
            'role' => 'contactRole',
            'isInactive' => 'contactIsInactive'
          ]
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'account'
        ],
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'account'
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'accounts',
          'audited' => true
        ],
        'meetingsPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'emailsPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Email',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'callsPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'tasksPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Task',
          'foreign' => 'account',
          'layoutRelationshipsDisabled' => true
        ],
        'meetings' => [
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'calls' => [
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'accounts'
        ],
        'campaignLogRecords' => [
          'type' => 'hasChildren',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'parent'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'accounts',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ],
        'portalUsers' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'accounts'
        ],
        'originalLead' => [
          'type' => 'hasOne',
          'entity' => 'Lead',
          'foreign' => 'createdAccount'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'emailAddress'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'name',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Call' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Planned',
            1 => 'Held',
            2 => 'Not Held'
          ],
          'default' => 'Planned',
          'style' => [
            'Held' => 'success'
          ],
          'audited' => true
        ],
        'dateStart' => [
          'type' => 'datetime',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getNow(15);',
          'audited' => true
        ],
        'dateEnd' => [
          'type' => 'datetime',
          'required' => true,
          'view' => 'crm:views/call/fields/date-end',
          'after' => 'dateStart'
        ],
        'duration' => [
          'type' => 'duration',
          'start' => 'dateStart',
          'end' => 'dateEnd',
          'options' => [
            0 => 300,
            1 => 600,
            2 => 900,
            3 => 1800,
            4 => 2700,
            5 => 3600,
            6 => 7200
          ],
          'default' => 300,
          'notStorable' => true,
          'select' => [
            'select' => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)'
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)',
                1 => '{direction}'
              ]
            ]
          ]
        ],
        'reminders' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'view' => 'crm:views/meeting/fields/reminders',
          'layoutListDisabled' => true
        ],
        'direction' => [
          'type' => 'enum',
          'options' => [
            0 => 'Outbound',
            1 => 'Inbound'
          ],
          'default' => 'Outbound'
        ],
        'description' => [
          'type' => 'text'
        ],
        'parent' => [
          'type' => 'linkParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Lead',
            2 => 'Contact',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'acceptanceStatus' => [
          'type' => 'enum',
          'notStorable' => true,
          'options' => [
            0 => 'None',
            1 => 'Accepted',
            2 => 'Tentative',
            3 => 'Declined'
          ],
          'style' => [
            'Accepted' => 'success',
            'Declined' => 'danger',
            'Tentative' => 'warning'
          ],
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'where' => [
            '=' => [
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'CallContact',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'CallLead',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'CallUser',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'leads',
                2 => 'contacts'
              ],
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'CallContact',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'CallLead',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'CallUser',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'whereClause' => [
                'contactsMiddle.status' => NULL,
                'leadsMiddle.status' => NULL,
                'usersMiddle.status' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'CallContact',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'CallLead',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'CallUser',
                    'select' => [
                      0 => 'callId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/meeting/fields/acceptance-status'
        ],
        'users' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/meeting/fields/users',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/call/fields/contacts',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'leads' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/call/fields/leads',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'phoneNumbersMap' => [
          'type' => 'jsonObject',
          'notStorable' => true,
          'disabled' => true
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ]
      ],
      'links' => [
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'calls',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'calls',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'calls',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'calls'
        ]
      ],
      'collection' => [
        'orderBy' => 'dateStart',
        'order' => 'desc',
        'sortBy' => 'dateStart',
        'asc' => false
      ],
      'indexes' => [
        'dateStartStatus' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'status'
          ]
        ],
        'dateStart' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'deleted'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'Campaign' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Planning',
            1 => 'Active',
            2 => 'Inactive',
            3 => 'Complete'
          ],
          'default' => 'Planning'
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'Email',
            1 => 'Newsletter',
            2 => 'Web',
            3 => 'Television',
            4 => 'Radio',
            5 => 'Mail'
          ],
          'default' => 'Email'
        ],
        'startDate' => [
          'type' => 'date'
        ],
        'endDate' => [
          'type' => 'date'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'excludingTargetLists' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'sentCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'openedCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'clickedCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'optedInCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'optedOutCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'bouncedCount' => [
          'view' => 'crm:views/campaign/fields/int-with-percentage',
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'hardBouncedCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'softBouncedCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'leadCreatedCount' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'openedPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'clickedPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'optedOutPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'bouncedPercentage' => [
          'type' => 'int',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'revenue' => [
          'type' => 'currency',
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'budget' => [
          'type' => 'currency'
        ],
        'contactsTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'Contact'
        ],
        'leadsTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'Lead'
        ],
        'accountsTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'Account'
        ],
        'usersTemplate' => [
          'type' => 'link',
          'view' => 'crm:views/campaign/fields/template',
          'targetEntityType' => 'User'
        ],
        'mailMergeOnlyWithAddress' => [
          'type' => 'bool',
          'default' => true
        ],
        'revenueCurrency' => [
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true,
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ],
        'revenueConverted' => [
          'notStorable' => true,
          'directAccessDisabled' => true,
          'readOnly' => true,
          'disabled' => true,
          'type' => 'currencyConverted',
          'importDisabled' => true
        ],
        'budgetCurrency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ],
        'budgetConverted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'campaigns'
        ],
        'excludingTargetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'campaignsExcluding',
          'relationName' => 'campaignTargetListExcluding'
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'campaign'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'campaign'
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'campaign'
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'campaign'
        ],
        'campaignLogRecords' => [
          'type' => 'hasMany',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'campaign'
        ],
        'trackingUrls' => [
          'type' => 'hasMany',
          'entity' => 'CampaignTrackingUrl',
          'foreign' => 'campaign'
        ],
        'massEmails' => [
          'type' => 'hasMany',
          'entity' => 'MassEmail',
          'foreign' => 'campaign',
          'layoutRelationshipsDisabled' => true
        ],
        'contactsTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ],
        'leadsTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ],
        'accountsTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ],
        'usersTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'Template',
          'noJoin' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'CampaignLogRecord' => [
      'fields' => [
        'action' => [
          'type' => 'enum',
          'required' => true,
          'maxLength' => 50,
          'options' => [
            0 => 'Sent',
            1 => 'Opened',
            2 => 'Opted Out',
            3 => 'Bounced',
            4 => 'Clicked',
            5 => 'Opted In',
            6 => 'Lead Created'
          ]
        ],
        'actionDate' => [
          'type' => 'datetime',
          'required' => true
        ],
        'data' => [
          'type' => 'jsonObject',
          'view' => 'crm:views/campaign-log-record/fields/data'
        ],
        'stringData' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'stringAdditionalData' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'application' => [
          'type' => 'varchar',
          'required' => true,
          'maxLength' => 36,
          'default' => 'Espo'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'parent' => [
          'type' => 'linkParent'
        ],
        'object' => [
          'type' => 'linkParent'
        ],
        'queueItem' => [
          'type' => 'link'
        ],
        'isTest' => [
          'type' => 'bool',
          'default' => false
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'campaignLogRecords'
        ],
        'queueItem' => [
          'type' => 'belongsTo',
          'entity' => 'EmailQueueItem',
          'noJoin' => true
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Contact',
            2 => 'Lead',
            3 => 'Opportunity',
            4 => 'User'
          ]
        ],
        'object' => [
          'type' => 'belongsToParent',
          'entityList' => [
            0 => 'Email',
            1 => 'CampaignTrackingUrl'
          ]
        ]
      ],
      'collection' => [
        'textFilterFields' => [
          0 => 'queueItem.id',
          1 => 'queueItem.emailAddress'
        ],
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'actionDate' => [
          'columns' => [
            0 => 'actionDate',
            1 => 'deleted'
          ]
        ],
        'action' => [
          'columns' => [
            0 => 'action',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'CampaignTrackingUrl' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'url' => [
          'type' => 'url',
          'tooltip' => true
        ],
        'urlToUse' => [
          'type' => 'varchar',
          'notStorable' => true,
          'readOnly' => true
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'action' => [
          'type' => 'enum',
          'options' => [
            0 => 'Redirect',
            1 => 'Show Message'
          ],
          'default' => 'Redirect'
        ],
        'message' => [
          'type' => 'text',
          'tooltip' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'trackingUrls'
        ]
      ],
      'collection' => [
        'orderBy' => 'name',
        'order' => 'asc',
        'sortBy' => 'name',
        'asc' => true
      ]
    ],
    'Case' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'number' => [
          'type' => 'autoincrement',
          'index' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'New',
            1 => 'Assigned',
            2 => 'Pending',
            3 => 'Closed',
            4 => 'Rejected',
            5 => 'Duplicate'
          ],
          'default' => 'New',
          'style' => [
            'Closed' => 'success',
            'Duplicate' => 'danger',
            'Rejected' => 'danger'
          ],
          'audited' => true,
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'notActualOptions',
              'view' => 'views/admin/field-manager/fields/not-actual-options'
            ]
          ],
          'notActualOptions' => [
            0 => 'Closed',
            1 => 'Rejected',
            2 => 'Duplicate'
          ]
        ],
        'priority' => [
          'type' => 'enum',
          'options' => [
            0 => 'Low',
            1 => 'Normal',
            2 => 'High',
            3 => 'Urgent'
          ],
          'default' => 'Normal',
          'displayAsLabel' => true,
          'style' => [
            'High' => 'warning',
            'Urgent' => 'danger'
          ],
          'audited' => true
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Question',
            2 => 'Incident',
            3 => 'Problem'
          ],
          'default' => '',
          'audited' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'account' => [
          'type' => 'link'
        ],
        'lead' => [
          'type' => 'link'
        ],
        'contact' => [
          'type' => 'link',
          'view' => 'crm:views/case/fields/contact'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/case/fields/contacts',
          'orderBy' => 'name'
        ],
        'inboundEmail' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'attachments' => [
          'type' => 'attachmentMultiple'
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'inboundEmail' => [
          'type' => 'belongsTo',
          'entity' => 'InboundEmail'
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'cases'
        ],
        'lead' => [
          'type' => 'belongsTo',
          'entity' => 'Lead',
          'foreign' => 'cases'
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'casesPrimary'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'cases',
          'layoutRelationshipsDisabled' => true
        ],
        'meetings' => [
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'calls' => [
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'articles' => [
          'type' => 'hasMany',
          'entity' => 'KnowledgeBaseArticle',
          'foreign' => 'cases',
          'audited' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'number',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'number'
        ],
        'sortBy' => 'number',
        'asc' => false
      ],
      'indexes' => [
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'Contact' => [
      'fields' => [
        'name' => [
          'type' => 'personName',
          'isPersonalData' => true
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Ms.',
            3 => 'Mrs.',
            4 => 'Dr.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'default' => ''
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'required' => true,
          'default' => ''
        ],
        'accountAnyId' => [
          'notStorable' => true,
          'customizationDisabled' => true,
          'disabled' => true,
          'type' => 'varchar',
          'where' => [
            '=' => [
              'whereClause' => [
                'id=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            'IN' => [
              'whereClause' => [
                'id=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            'NOT IN' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'AccountContact',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'accountId' => '{value}'
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'whereClause' => [
                'accountId' => NULL
              ]
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'accountId!=' => NULL
              ]
            ]
          ]
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100,
          'view' => 'crm:views/contact/fields/title',
          'directUpdateDisabled' => true,
          'notStorable' => true,
          'select' => [
            'select' => 'accountContactPrimary.role',
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'accountContactPrimary.role',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'where' => [
            'LIKE' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT LIKE' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role!*' => '{value}'
              ],
              'distinct' => true
            ],
            '=' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            '<>' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role!=' => '{value}'
              ],
              'distinct' => true
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role=' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'leftJoins' => [
                0 => 'accounts'
              ],
              'whereClause' => [
                'accountsMiddle.role!=' => NULL
              ],
              'distinct' => true
            ]
          ],
          'trim' => true,
          'customizationOptionsDisabled' => true,
          'textFilterDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'emailAddress' => [
          'type' => 'email',
          'isPersonalData' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile',
          'isPersonalData' => true
        ],
        'doNotCall' => [
          'type' => 'bool'
        ],
        'address' => [
          'type' => 'address',
          'isPersonalData' => true
        ],
        'addressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true
        ],
        'addressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'addressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'addressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'account' => [
          'type' => 'link',
          'view' => 'crm:views/contact/fields/account'
        ],
        'accounts' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/contact/fields/accounts',
          'columns' => [
            'role' => 'contactRole',
            'isInactive' => 'contactIsInactive'
          ],
          'orderBy' => 'name'
        ],
        'accountRole' => [
          'type' => 'varchar',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'listForAccount'
          ],
          'exportDisabled' => true,
          'importDisabled' => true,
          'view' => 'crm:views/contact/fields/account-role',
          'customizationOptionsDisabled' => true,
          'textFilterDisabled' => true
        ],
        'accountIsInactive' => [
          'type' => 'bool',
          'notStorable' => true,
          'mergeDisabled' => true,
          'select' => [
            'select' => 'accountContactPrimary.isInactive',
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'accountContactPrimary.isInactive',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'AccountContact',
                1 => 'accountContactPrimary',
                2 => [
                  'contact.id:' => 'accountContactPrimary.contactId',
                  'contact.accountId:' => 'accountContactPrimary.accountId',
                  'accountContactPrimary.deleted' => false
                ]
              ]
            ]
          ],
          'where' => [
            '= TRUE' => [
              'leftJoins' => [
                0 => [
                  0 => 'AccountContact',
                  1 => 'accountContactFilterIsInactive',
                  2 => [
                    'accountContactFilterIsInactive.contactId:' => 'id',
                    'accountContactFilterIsInactive.accountId:' => 'accountId',
                    'accountContactFilterIsInactive.deleted' => false
                  ]
                ]
              ],
              'whereClause' => [
                'accountContactFilterIsInactive.isInactive' => true
              ]
            ],
            '= FALSE' => [
              'leftJoins' => [
                0 => [
                  0 => 'AccountContact',
                  1 => 'accountContactFilterIsInactive',
                  2 => [
                    'accountContactFilterIsInactive.contactId:' => 'id',
                    'accountContactFilterIsInactive.accountId:' => 'accountId',
                    'accountContactFilterIsInactive.deleted' => false
                  ]
                ]
              ],
              'whereClause' => [
                'OR' => [
                  0 => [
                    'accountContactFilterIsInactive.isInactive!=' => true
                  ],
                  1 => [
                    'accountContactFilterIsInactive.isInactive=' => NULL
                  ]
                ]
              ]
            ]
          ],
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'accountType' => [
          'type' => 'foreign',
          'link' => 'account',
          'field' => 'type',
          'readOnly' => true,
          'view' => 'views/fields/foreign-enum'
        ],
        'opportunityRole' => [
          'type' => 'enum',
          'notStorable' => true,
          'options' => [
            0 => '',
            1 => 'Decision Maker',
            2 => 'Evaluator',
            3 => 'Influencer'
          ],
          'layoutMassUpdateDisabled' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'where' => [
            '=' => [
              'whereClause' => [
                'opportunitiesMiddle.role' => '{value}'
              ],
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => false,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => false,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'LIKE' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT LIKE' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role!*' => '{value}'
              ],
              'distinct' => true
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'opportunities'
              ],
              'whereClause' => [
                'opportunitiesMiddle.role' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'contactId'
                  ],
                  'whereClause' => [
                    'deleted' => false,
                    'role' => NULL
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/contact/fields/opportunity-role'
        ],
        'acceptanceStatus' => [
          'type' => 'varchar',
          'notStorable' => true,
          'exportDisabled' => true,
          'disabled' => true
        ],
        'acceptanceStatusMeetings' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'meetings',
          'column' => 'status'
        ],
        'acceptanceStatusCalls' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'calls',
          'column' => 'status'
        ],
        'campaign' => [
          'type' => 'link',
          'layoutListDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true
        ],
        'targetList' => [
          'type' => 'link',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'exportDisabled' => true,
          'entity' => 'TargetList',
          'directAccessDisabled' => true
        ],
        'portalUser' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'notStorable' => true,
          'view' => 'views/fields/link-one'
        ],
        'hasPortalUser' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'foreignAccessDisabled' => true,
          'select' => [
            'select' => 'IS_NOT_NULL:(portalUser.id)',
            'leftJoins' => [
              0 => [
                0 => 'portalUser',
                1 => 'portalUser'
              ]
            ]
          ],
          'where' => [
            '= TRUE' => [
              'whereClause' => [
                'portalUser.id!=' => NULL
              ],
              'leftJoins' => [
                0 => [
                  0 => 'portalUser',
                  1 => 'portalUser'
                ]
              ]
            ],
            '= FALSE' => [
              'whereClause' => [
                'portalUser.id=' => NULL
              ],
              'leftJoins' => [
                0 => [
                  0 => 'portalUser',
                  1 => 'portalUser'
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'portalUser.id',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'portalUser',
                1 => 'portalUser'
              ]
            ],
            'additionalSelect' => [
              0 => 'portalUser.id'
            ]
          ]
        ],
        'originalLead' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'view' => 'views/fields/link-one'
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'addressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'contacts',
          'additionalColumns' => [
            'role' => [
              'type' => 'varchar',
              'len' => 100
            ],
            'isInactive' => [
              'type' => 'bool',
              'default' => false
            ]
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'layoutRelationshipsDisabled' => true,
          'columnAttributeMap' => [
            'role' => 'accountRole',
            'isInactive' => 'accountIsInactive'
          ]
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'contacts',
          'columnAttributeMap' => [
            'role' => 'opportunityRole'
          ]
        ],
        'opportunitiesPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'contact',
          'layoutRelationshipsDisabled' => true
        ],
        'casesPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'contact',
          'layoutRelationshipsDisabled' => true
        ],
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'contacts'
        ],
        'meetings' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'contacts',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'calls' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'contacts',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'contacts'
        ],
        'campaignLogRecords' => [
          'type' => 'hasChildren',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'parent'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'contacts',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ],
        'portalUser' => [
          'type' => 'hasOne',
          'entity' => 'User',
          'foreign' => 'contact'
        ],
        'originalLead' => [
          'type' => 'hasOne',
          'entity' => 'Lead',
          'foreign' => 'createdContact'
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'contacts',
          'audited' => true
        ],
        'tasksPrimary' => [
          'type' => 'hasMany',
          'entity' => 'Task',
          'foreign' => 'contact',
          'layoutRelationshipsDisabled' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'emailAddress'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'firstName' => [
          'columns' => [
            0 => 'firstName',
            1 => 'deleted'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'firstName',
            1 => 'lastName'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Document' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'view' => 'crm:views/document/fields/name',
          'trim' => true
        ],
        'file' => [
          'type' => 'file',
          'required' => true,
          'view' => 'crm:views/document/fields/file'
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Active',
            1 => 'Draft',
            2 => 'Expired',
            3 => 'Canceled'
          ],
          'style' => [
            'Canceled' => 'danger',
            'Expired' => 'danger'
          ]
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Contract',
            2 => 'NDA',
            3 => 'EULA',
            4 => 'License Agreement'
          ]
        ],
        'publishDate' => [
          'type' => 'date',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getToday();'
        ],
        'expirationDate' => [
          'type' => 'date',
          'after' => 'publishDate'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'accounts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true
        ],
        'folder' => [
          'type' => 'link',
          'view' => 'views/fields/link-category-tree'
        ]
      ],
      'links' => [
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'documents'
        ],
        'opportunities' => [
          'type' => 'hasMany',
          'entity' => 'Opportunity',
          'foreign' => 'documents'
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'documents'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'documents'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'folder' => [
          'type' => 'belongsTo',
          'foreign' => 'documents',
          'entity' => 'DocumentFolder'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'DocumentFolder' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'parent' => [
          'type' => 'link'
        ],
        'childList' => [
          'type' => 'jsonArray',
          'notStorable' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsTo',
          'foreign' => 'children',
          'entity' => 'DocumentFolder'
        ],
        'children' => [
          'type' => 'hasMany',
          'foreign' => 'parent',
          'entity' => 'DocumentFolder'
        ],
        'documents' => [
          'type' => 'hasMany',
          'foreign' => 'folder',
          'entity' => 'Document'
        ]
      ],
      'collection' => [
        'orderBy' => 'parent',
        'order' => 'asc',
        'sortBy' => 'parent',
        'asc' => true
      ],
      'additionalTables' => [
        'DocumentFolderPath' => [
          'fields' => [
            'id' => [
              'type' => 'id',
              'dbType' => 'int',
              'len' => '11',
              'autoincrement' => true
            ],
            'ascendorId' => [
              'type' => 'varchar',
              'len' => '100',
              'index' => true
            ],
            'descendorId' => [
              'type' => 'varchar',
              'len' => '24',
              'index' => true
            ]
          ]
        ]
      ]
    ],
    'EmailQueueItem' => [
      'fields' => [
        'massEmail' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Pending',
            1 => 'Sent',
            2 => 'Failed',
            3 => 'Sending'
          ],
          'readOnly' => true
        ],
        'attemptCount' => [
          'type' => 'int',
          'readOnly' => true,
          'default' => 0
        ],
        'target' => [
          'type' => 'linkParent',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'sentAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'emailAddress' => [
          'type' => 'varchar',
          'readOnly' => true
        ],
        'isTest' => [
          'type' => 'bool'
        ]
      ],
      'links' => [
        'massEmail' => [
          'type' => 'belongsTo',
          'entity' => 'MassEmail',
          'foreign' => 'queueItems'
        ],
        'target' => [
          'type' => 'belongsToParent'
        ]
      ],
      'collection' => [
        'textFilterFields' => [
          0 => 'id',
          1 => 'emailAddress'
        ],
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'KnowledgeBaseArticle' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Draft',
            1 => 'In Review',
            2 => 'Published',
            3 => 'Archived'
          ],
          'view' => 'crm:views/knowledge-base-article/fields/status',
          'default' => 'Draft'
        ],
        'language' => [
          'type' => 'enum',
          'view' => 'crm:views/knowledge-base-article/fields/language',
          'default' => '',
          'customizationOptionsDisabled' => true
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'Article'
          ]
        ],
        'portals' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'publishDate' => [
          'type' => 'date'
        ],
        'expirationDate' => [
          'type' => 'date',
          'after' => 'publishDate'
        ],
        'order' => [
          'type' => 'int',
          'disableFormatting' => true,
          'textFilterDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'categories' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/link-multiple-category-tree'
        ],
        'attachments' => [
          'type' => 'attachmentMultiple'
        ],
        'body' => [
          'type' => 'wysiwyg'
        ]
      ],
      'links' => [
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'articles'
        ],
        'portals' => [
          'type' => 'hasMany',
          'entity' => 'Portal',
          'foreign' => 'articles'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'categories' => [
          'type' => 'hasMany',
          'foreign' => 'articles',
          'entity' => 'KnowledgeBaseCategory'
        ]
      ],
      'collection' => [
        'orderBy' => 'order',
        'order' => 'asc',
        'sortBy' => 'order',
        'asc' => true
      ]
    ],
    'KnowledgeBaseCategory' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'order' => [
          'type' => 'int',
          'required' => true,
          'disableFormatting' => true,
          'textFilterDisabled' => true
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'parent' => [
          'type' => 'link'
        ],
        'childList' => [
          'type' => 'jsonArray',
          'notStorable' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsTo',
          'foreign' => 'children',
          'entity' => 'KnowledgeBaseCategory'
        ],
        'children' => [
          'type' => 'hasMany',
          'foreign' => 'parent',
          'entity' => 'KnowledgeBaseCategory'
        ],
        'articles' => [
          'type' => 'hasMany',
          'foreign' => 'categories',
          'entity' => 'KnowledgeBaseArticle'
        ]
      ],
      'collection' => [
        'orderBy' => 'parent',
        'orderByColumn' => 'parentId',
        'order' => 'asc',
        'sortBy' => 'parent',
        'asc' => true
      ],
      'additionalTables' => [
        'KnowledgeBaseCategoryPath' => [
          'fields' => [
            'id' => [
              'type' => 'id',
              'dbType' => 'int',
              'len' => '11',
              'autoincrement' => true
            ],
            'ascendorId' => [
              'type' => 'varchar',
              'len' => '100',
              'index' => true
            ],
            'descendorId' => [
              'type' => 'varchar',
              'len' => '24',
              'index' => true
            ]
          ]
        ]
      ]
    ],
    'Lead' => [
      'fields' => [
        'name' => [
          'type' => 'personName',
          'isPersonalData' => true,
          'dependeeAttributeList' => [
            0 => 'emailAddress',
            1 => 'phoneNumber',
            2 => 'accountName'
          ]
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Ms.',
            3 => 'Mrs.',
            4 => 'Dr.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'default' => ''
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'default' => ''
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'New',
            1 => 'Assigned',
            2 => 'In Process',
            3 => 'Converted',
            4 => 'Recycled',
            5 => 'Dead'
          ],
          'default' => 'New',
          'style' => [
            'Converted' => 'success',
            'Recycled' => 'danger',
            'Dead' => 'danger'
          ],
          'audited' => true,
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'notActualOptions',
              'view' => 'views/admin/field-manager/fields/not-actual-options'
            ]
          ],
          'notActualOptions' => [
            0 => 'Converted',
            1 => 'Recycled',
            2 => 'Dead'
          ]
        ],
        'source' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Call',
            2 => 'Email',
            3 => 'Existing Customer',
            4 => 'Partner',
            5 => 'Public Relations',
            6 => 'Web Site',
            7 => 'Campaign',
            8 => 'Other'
          ],
          'default' => ''
        ],
        'industry' => [
          'type' => 'enum',
          'view' => 'crm:views/lead/fields/industry',
          'customizationOptionsDisabled' => true,
          'default' => '',
          'isSorted' => true
        ],
        'opportunityAmount' => [
          'type' => 'currency',
          'min' => 0,
          'audited' => true
        ],
        'opportunityAmountConverted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ],
        'website' => [
          'type' => 'url',
          'strip' => true
        ],
        'address' => [
          'type' => 'address',
          'isPersonalData' => true
        ],
        'addressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true
        ],
        'addressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'addressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'addressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'emailAddress' => [
          'type' => 'email',
          'isPersonalData' => true
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile',
          'isPersonalData' => true
        ],
        'doNotCall' => [
          'type' => 'bool'
        ],
        'description' => [
          'type' => 'text'
        ],
        'convertedAt' => [
          'type' => 'datetime',
          'layoutMassUpdateDisabled' => true,
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'accountName' => [
          'type' => 'varchar'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'acceptanceStatus' => [
          'type' => 'varchar',
          'notStorable' => true,
          'exportDisabled' => true,
          'disabled' => true
        ],
        'acceptanceStatusMeetings' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'meetings',
          'column' => 'status'
        ],
        'acceptanceStatusCalls' => [
          'type' => 'enum',
          'notStorable' => true,
          'directUpdateDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'filters'
          ],
          'importDisabled' => true,
          'exportDisabled' => true,
          'view' => 'crm:views/lead/fields/acceptance-status',
          'link' => 'calls',
          'column' => 'status'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'campaign' => [
          'type' => 'link',
          'layoutListDisabled' => true
        ],
        'createdAccount' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'createdContact' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'view' => 'crm:views/lead/fields/created-contact'
        ],
        'createdOpportunity' => [
          'type' => 'link',
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'view' => 'crm:views/lead/fields/created-opportunity'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'noLoad' => true
        ],
        'targetList' => [
          'type' => 'link',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutFiltersDisabled' => true,
          'entity' => 'TargetList',
          'directAccessDisabled' => true
        ],
        'targetListIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'disabled' => true
        ],
        'opportunityAmountCurrency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6,
          'default' => 'BYN'
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100
        ],
        'addressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'meetings' => [
          'type' => 'hasMany',
          'entity' => 'Meeting',
          'foreign' => 'leads',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'calls' => [
          'type' => 'hasMany',
          'entity' => 'Call',
          'foreign' => 'leads',
          'layoutRelationshipsDisabled' => true,
          'audited' => true,
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'cases' => [
          'type' => 'hasMany',
          'entity' => 'Case',
          'foreign' => 'lead',
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'createdAccount' => [
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'originalLead'
        ],
        'createdContact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'originalLead'
        ],
        'createdOpportunity' => [
          'type' => 'belongsTo',
          'entity' => 'Opportunity',
          'foreign' => 'originalLead'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'leads'
        ],
        'campaignLogRecords' => [
          'type' => 'hasChildren',
          'entity' => 'CampaignLogRecord',
          'foreign' => 'parent'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'leads',
          'columnAttributeMap' => [
            'optedOut' => 'targetListIsOptedOut'
          ]
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'leads',
          'audited' => true
        ]
      ],
      'convertEntityList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Opportunity'
      ],
      'convertFields' => [
        'Contact' => [],
        'Account' => [
          'name' => 'accountName',
          'billingAddressStreet' => 'addressStreet',
          'billingAddressCity' => 'addressCity',
          'billingAddressState' => 'addressState',
          'billingAddressPostalCode' => 'addressPostalCode',
          'billingAddressCountry' => 'addressCountry'
        ],
        'Opportunity' => [
          'amount' => 'opportunityAmount',
          'leadSource' => 'source'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name',
          1 => 'accountName',
          2 => 'emailAddress'
        ],
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'firstName' => [
          'columns' => [
            0 => 'firstName',
            1 => 'deleted'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'firstName',
            1 => 'lastName'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtStatus' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'status'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'MassEmail' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Draft',
            1 => 'Pending',
            2 => 'Complete',
            3 => 'In Process',
            4 => 'Failed'
          ],
          'default' => 'Pending'
        ],
        'storeSentEmails' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'optOutEntirely' => [
          'type' => 'bool',
          'default' => false,
          'tooltip' => true
        ],
        'fromAddress' => [
          'type' => 'varchar',
          'trim' => true,
          'view' => 'crm:views/mass-email/fields/from-address'
        ],
        'fromName' => [
          'type' => 'varchar'
        ],
        'replyToAddress' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'replyToName' => [
          'type' => 'varchar'
        ],
        'startAt' => [
          'type' => 'datetime',
          'required' => true
        ],
        'emailTemplate' => [
          'type' => 'link',
          'required' => true,
          'view' => 'crm:views/mass-email/fields/email-template'
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'targetLists' => [
          'type' => 'linkMultiple',
          'required' => true,
          'tooltip' => true
        ],
        'excludingTargetLists' => [
          'type' => 'linkMultiple',
          'tooltip' => true
        ],
        'inboundEmail' => [
          'type' => 'link'
        ],
        'smtpAccount' => [
          'type' => 'base',
          'notStorable' => true,
          'view' => 'crm:views/mass-email/fields/smtp-account'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'emailTemplate' => [
          'type' => 'belongsTo',
          'entity' => 'EmailTemplate'
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'massEmails'
        ],
        'targetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'massEmails'
        ],
        'excludingTargetLists' => [
          'type' => 'hasMany',
          'entity' => 'TargetList',
          'foreign' => 'massEmailsExcluding',
          'relationName' => 'massEmailTargetListExcluding'
        ],
        'inboundEmail' => [
          'type' => 'belongsTo',
          'entity' => 'InboundEmail'
        ],
        'queueItems' => [
          'type' => 'hasMany',
          'entity' => 'EmailQueueItem',
          'foreign' => 'massEmail'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ]
    ],
    'Meeting' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Planned',
            1 => 'Held',
            2 => 'Not Held'
          ],
          'default' => 'Planned',
          'style' => [
            'Held' => 'success'
          ],
          'audited' => true
        ],
        'dateStart' => [
          'type' => 'datetimeOptional',
          'view' => 'crm:views/meeting/fields/date-start',
          'required' => true,
          'default' => 'javascript: return this.dateTime.getNow(15);',
          'audited' => true
        ],
        'dateEnd' => [
          'type' => 'datetimeOptional',
          'view' => 'crm:views/meeting/fields/date-end',
          'required' => true,
          'after' => 'dateStart'
        ],
        'isAllDay' => [
          'type' => 'bool',
          'readOnly' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'duration' => [
          'type' => 'duration',
          'start' => 'dateStart',
          'end' => 'dateEnd',
          'options' => [
            0 => 900,
            1 => 1800,
            2 => 3600,
            3 => 7200,
            4 => 10800,
            5 => 86400
          ],
          'default' => 3600,
          'notStorable' => true,
          'select' => [
            'select' => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)'
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'TIMESTAMPDIFF_SECOND:(dateStart, dateEnd)',
                1 => '{direction}'
              ]
            ]
          ]
        ],
        'reminders' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'view' => 'crm:views/meeting/fields/reminders',
          'layoutListDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'parent' => [
          'type' => 'linkParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Lead',
            2 => 'Contact',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'acceptanceStatus' => [
          'type' => 'enum',
          'notStorable' => true,
          'options' => [
            0 => 'None',
            1 => 'Accepted',
            2 => 'Tentative',
            3 => 'Declined'
          ],
          'style' => [
            'Accepted' => 'success',
            'Declined' => 'danger',
            'Tentative' => 'warning'
          ],
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'importDisabled' => true,
          'exportDisabled' => true,
          'where' => [
            '=' => [
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'ContactMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'LeadMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'MeetingUser',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'leads',
                2 => 'contacts'
              ],
              'whereClause' => [
                'OR' => [
                  'contactsMiddle.status' => '{value}',
                  'leadsMiddle.status' => '{value}',
                  'usersMiddle.status' => '{value}'
                ]
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'ContactMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'LeadMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'MeetingUser',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => '{value}'
                    ]
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'users',
                1 => 'contacts',
                2 => 'leads'
              ],
              'whereClause' => [
                'contactsMiddle.status' => NULL,
                'leadsMiddle.status' => NULL,
                'usersMiddle.status' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                0 => [
                  'id!=s' => [
                    'from' => 'ContactMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                1 => [
                  'id!=s' => [
                    'from' => 'LeadMeeting',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ],
                2 => [
                  'id!=s' => [
                    'from' => 'MeetingUser',
                    'select' => [
                      0 => 'meetingId'
                    ],
                    'whereClause' => [
                      'deleted' => 0,
                      'status' => NULL
                    ]
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/meeting/fields/acceptance-status'
        ],
        'users' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/meeting/fields/users',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'view' => 'crm:views/meeting/fields/contacts',
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'leads' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/meeting/fields/attendees',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'columns' => [
            'status' => 'acceptanceStatus'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'dateStartDate' => [
          'type' => 'date',
          'disabled' => true
        ],
        'dateEndDate' => [
          'type' => 'date',
          'disabled' => true
        ]
      ],
      'links' => [
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'meetings',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'meetings',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'meetings',
          'additionalColumns' => [
            'status' => [
              'type' => 'varchar',
              'len' => '36',
              'default' => 'None'
            ]
          ],
          'columnAttributeMap' => [
            'status' => 'acceptanceStatus'
          ]
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'meetings'
        ]
      ],
      'collection' => [
        'orderBy' => 'dateStart',
        'order' => 'desc',
        'sortBy' => 'dateStart',
        'asc' => false
      ],
      'indexes' => [
        'dateStartStatus' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'status'
          ]
        ],
        'dateStart' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'deleted'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ],
    'Opportunity' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'amount' => [
          'type' => 'currency',
          'required' => true,
          'min' => 0,
          'audited' => true
        ],
        'amountConverted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ],
        'amountWeightedConverted' => [
          'type' => 'float',
          'readOnly' => true,
          'notStorable' => true,
          'select' => [
            'select' => 'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)',
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => [
                  'amountCurrencyRate.id:' => 'amountCurrency'
                ]
              ]
            ]
          ],
          'where' => [
            '=' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '<' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)<' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '>' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)>' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '<=' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)<=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '>=' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)>=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            '<>' => [
              'whereClause' => [
                'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)!=' => '{value}'
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            'IS NULL' => [
              'whereClause' => [
                'IS_NULL:(amount)' => true
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'IS_NOT_NULL:(amount)' => true
              ],
              'leftJoins' => [
                0 => [
                  0 => 'Currency',
                  1 => 'amountCurrencyRate',
                  2 => [
                    'amountCurrencyRate.id:' => 'amountCurrency'
                  ]
                ]
              ]
            ]
          ],
          'order' => [
            'order' => [
              0 => [
                0 => 'DIV:(MUL:(amount, probability, amountCurrencyRate.rate), 100)',
                1 => '{direction}'
              ]
            ],
            'leftJoins' => [
              0 => [
                0 => 'Currency',
                1 => 'amountCurrencyRate',
                2 => [
                  'amountCurrencyRate.id:' => 'amountCurrency'
                ]
              ]
            ]
          ],
          'view' => 'views/fields/currency-converted'
        ],
        'account' => [
          'type' => 'link'
        ],
        'contacts' => [
          'type' => 'linkMultiple',
          'view' => 'crm:views/opportunity/fields/contacts',
          'columns' => [
            'role' => 'opportunityRole'
          ],
          'additionalAttributeList' => [
            0 => 'columns'
          ],
          'orderBy' => 'name'
        ],
        'contact' => [
          'type' => 'link'
        ],
        'stage' => [
          'type' => 'enum',
          'options' => [
            0 => 'Model',
            1 => 'Negotiation',
            2 => 'Prepayment',
            3 => 'Резка',
            4 => 'Production',
            5 => 'Отмывка и фото',
            6 => ' Delivery',
            7 => 'Payment',
            8 => 'Expenses',
            9 => 'Closed Won',
            10 => 'Closed Lost'
          ],
          'view' => 'crm:views/opportunity/fields/stage',
          'default' => 'Prospecting',
          'audited' => true,
          'probabilityMap' => [
            'Prospecting' => 10,
            'Qualification' => 20,
            'Proposal' => 50,
            'Negotiation' => 100,
            'Closed Won' => 100,
            'Closed Lost' => 0,
            'Model' => 100,
            'Prepayment' => 100,
            'Резка' => 100,
            'Production' => 100,
            'Отмывка и фото' => 100,
            ' Delivery' => 100,
            'Payment' => 100,
            'Expenses' => 100
          ],
          'style' => [
            'Closed Won' => 'success',
            'Closed Lost' => 'danger',
            'Model' => 'danger',
            'Negotiation' => 'info',
            'Prepayment' => 'warning',
            'Резка' => NULL,
            'Production' => 'primary',
            'Отмывка и фото' => NULL,
            ' Delivery' => 'warning',
            'Payment' => 'danger',
            'Expenses' => 'danger'
          ],
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'probabilityMap',
              'view' => 'crm:views/opportunity/admin/field-manager/fields/probability-map'
            ]
          ],
          'required' => true,
          'displayAsLabel' => true
        ],
        'lastStage' => [
          'type' => 'enum',
          'view' => 'crm:views/opportunity/fields/last-stage',
          'customizationOptionsDisabled' => true,
          'customizationDefaultDisabled' => true
        ],
        'probability' => [
          'type' => 'int',
          'required' => true,
          'min' => 0,
          'max' => 100
        ],
        'leadSource' => [
          'type' => 'enum',
          'view' => 'crm:views/opportunity/fields/lead-source',
          'customizationOptionsDisabled' => true,
          'translation' => 'Lead.options.source',
          'default' => ''
        ],
        'closeDate' => [
          'type' => 'date',
          'required' => true,
          'audited' => true,
          'default' => 'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');',
          'after' => NULL,
          'before' => NULL,
          'useNumericFormat' => false
        ],
        'description' => [
          'type' => 'text'
        ],
        'campaign' => [
          'type' => 'link'
        ],
        'originalLead' => [
          'type' => 'linkOne',
          'readOnly' => true,
          'view' => 'views/fields/link-one'
        ],
        'contactRole' => [
          'type' => 'enum',
          'notStorable' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutAvailabilityList' => [
            0 => 'listForContact'
          ],
          'customizationDefaultDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'where' => [
            '=' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            '<>' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'opportunityId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'IN' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role' => '{value}'
              ],
              'distinct' => true
            ],
            'NOT IN' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'opportunityId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => '{value}'
                  ]
                ]
              ]
            ],
            'LIKE' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role*' => '{value}'
              ],
              'distinct' => true
            ],
            'IS NULL' => [
              'leftJoins' => [
                0 => 'contacts'
              ],
              'whereClause' => [
                'contactsMiddle.role' => NULL
              ],
              'distinct' => true
            ],
            'IS NOT NULL' => [
              'whereClause' => [
                'id!=s' => [
                  'from' => 'ContactOpportunity',
                  'select' => [
                    0 => 'opportunityId'
                  ],
                  'whereClause' => [
                    'deleted' => 0,
                    'role' => NULL
                  ]
                ]
              ]
            ]
          ],
          'view' => 'crm:views/opportunity/fields/contact-role',
          'customizationOptionsDisabled' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => false,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'amountCurrency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6,
          'default' => 'BYN'
        ],
        'adress' => [
          'type' => 'address',
          'viewMap' => false,
          'isCustom' => true
        ],
        'adressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true,
          'required' => false
        ],
        'images' => [
          'type' => 'image',
          'previewSize' => 'small',
          'isCustom' => true,
          'listPreviewSize' => '',
          'maxFileSize' => 1
        ],
        'qRCode' => [
          'type' => 'barcode',
          'len' => 255,
          'codeType' => 'QRcode',
          'isCustom' => true
        ],
        'images2' => [
          'type' => 'image',
          'previewSize' => 'small',
          'listPreviewSize' => '',
          'isCustom' => true,
          'maxFileSize' => 1
        ],
        'images3' => [
          'type' => 'image',
          'previewSize' => 'small',
          'listPreviewSize' => '',
          'maxFileSize' => 1,
          'isCustom' => true
        ],
        'adressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'adressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'adressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'adressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'adressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account',
          'foreign' => 'opportunities'
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'opportunities',
          'additionalColumns' => [
            'role' => [
              'type' => 'varchar',
              'len' => 50
            ]
          ],
          'columnAttributeMap' => [
            'role' => 'contactRole'
          ]
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact',
          'foreign' => 'opportunitiesPrimary'
        ],
        'meetings' => [
          'type' => 'hasChildren',
          'entity' => 'Meeting',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'calls' => [
          'type' => 'hasChildren',
          'entity' => 'Call',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'tasks' => [
          'type' => 'hasChildren',
          'entity' => 'Task',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true,
          'audited' => true
        ],
        'emails' => [
          'type' => 'hasChildren',
          'entity' => 'Email',
          'foreign' => 'parent',
          'layoutRelationshipsDisabled' => true
        ],
        'documents' => [
          'type' => 'hasMany',
          'entity' => 'Document',
          'foreign' => 'opportunities',
          'audited' => true
        ],
        'campaign' => [
          'type' => 'belongsTo',
          'entity' => 'Campaign',
          'foreign' => 'opportunities'
        ],
        'originalLead' => [
          'type' => 'hasOne',
          'entity' => 'Lead',
          'foreign' => 'createdOpportunity'
        ],
        'images' => [
          'type' => 'belongsTo',
          'entity' => 'Attachment',
          'skipOrmDefs' => true,
          'disabled' => true
        ],
        'images2' => [
          'type' => 'belongsTo',
          'entity' => 'Attachment',
          'skipOrmDefs' => true,
          'disabled' => true
        ],
        'images3' => [
          'type' => 'belongsTo',
          'entity' => 'Attachment',
          'skipOrmDefs' => true,
          'disabled' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'textFilterFields' => [
          0 => 'name'
        ],
        'fullTextSearch' => false,
        'countDisabled' => false,
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'stage' => [
          'columns' => [
            0 => 'stage',
            1 => 'deleted'
          ]
        ],
        'lastStage' => [
          'columns' => [
            0 => 'lastStage'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ],
        'createdAtStage' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'stage'
          ]
        ],
        'createdAtId' => [
          'unique' => true,
          'columns' => [
            0 => 'createdAt',
            1 => 'id'
          ]
        ],
        'assignedUserStage' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'stage'
          ]
        ]
      ]
    ],
    'Reminder' => [
      'fields' => [
        'remindAt' => [
          'type' => 'datetime',
          'index' => true
        ],
        'startAt' => [
          'type' => 'datetime',
          'index' => true
        ],
        'type' => [
          'type' => 'enum',
          'options' => [
            0 => 'Popup',
            1 => 'Email'
          ],
          'maxLength' => 36,
          'index' => true,
          'default' => 'Popup'
        ],
        'seconds' => [
          'type' => 'enumInt',
          'options' => [
            0 => 0,
            1 => 60,
            2 => 120,
            3 => 300,
            4 => 600,
            5 => 900,
            6 => 1800,
            7 => 3600,
            8 => 7200,
            9 => 10800,
            10 => 18000,
            11 => 86400,
            12 => 172800,
            13 => 259200,
            14 => 432000,
            15 => 604800
          ],
          'default' => 0
        ],
        'entityType' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'entityId' => [
          'type' => 'varchar',
          'maxLength' => 50
        ],
        'userId' => [
          'type' => 'varchar',
          'maxLength' => 50
        ],
        'isSubmitted' => [
          'type' => 'bool'
        ]
      ],
      'collection' => [
        'orderBy' => 'remindAt',
        'order' => 'desc',
        'sortBy' => 'remindAt',
        'asc' => false
      ]
    ],
    'Target' => [
      'fields' => [
        'name' => [
          'type' => 'personName'
        ],
        'salutationName' => [
          'type' => 'enum',
          'options' => [
            0 => '',
            1 => 'Mr.',
            2 => 'Mrs.',
            3 => 'Ms.',
            4 => 'Dr.',
            5 => 'Drs.'
          ]
        ],
        'firstName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'default' => ''
        ],
        'lastName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100,
          'required' => true,
          'default' => ''
        ],
        'title' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'accountName' => [
          'type' => 'varchar',
          'maxLength' => 100
        ],
        'website' => [
          'type' => 'url'
        ],
        'address' => [
          'type' => 'address'
        ],
        'addressStreet' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'addressCity' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true
        ],
        'addressState' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'addressCountry' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'addressPostalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'emailAddress' => [
          'type' => 'email'
        ],
        'phoneNumber' => [
          'type' => 'phone',
          'typeList' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'defaultType' => 'Mobile'
        ],
        'doNotCall' => [
          'type' => 'bool'
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'middleName' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100
        ],
        'addressMap' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ],
        'emailAddressIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ],
        'phoneNumberIsOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'firstName' => [
          'columns' => [
            0 => 'firstName',
            1 => 'deleted'
          ]
        ],
        'name' => [
          'columns' => [
            0 => 'firstName',
            1 => 'lastName'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'TargetList' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'entryCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true,
          'layoutFiltersDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'optedOutCount' => [
          'type' => 'int',
          'readOnly' => true,
          'notStorable' => true,
          'layoutListDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutMassUpdateDisabled' => true
        ],
        'description' => [
          'type' => 'text'
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'campaigns' => [
          'type' => 'link'
        ],
        'includingActionList' => [
          'type' => 'multiEnum',
          'view' => 'crm:views/target-list/fields/including-action-list',
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutLinkDisabled' => true,
          'notStorable' => true,
          'disabled' => true
        ],
        'excludingActionList' => [
          'type' => 'multiEnum',
          'view' => 'crm:views/target-list/fields/including-action-list',
          'layoutDetailDisabled' => true,
          'layoutFiltersDisabled' => true,
          'layoutLinkDisabled' => true,
          'notStorable' => true,
          'disabled' => true
        ],
        'targetStatus' => [
          'type' => 'enum',
          'options' => [
            0 => 'Listed',
            1 => 'Opted Out'
          ],
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'exportDisabled' => true,
          'importDisabled' => true,
          'view' => 'crm:views/target-list/fields/target-status'
        ],
        'isOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'layoutDetailDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'campaigns' => [
          'type' => 'hasMany',
          'entity' => 'Campaign',
          'foreign' => 'targetLists'
        ],
        'massEmails' => [
          'type' => 'hasMany',
          'entity' => 'MassEmail',
          'foreign' => 'targetLists'
        ],
        'campaignsExcluding' => [
          'type' => 'hasMany',
          'entity' => 'Campaign',
          'foreign' => 'excludingTargetLists'
        ],
        'massEmailsExcluding' => [
          'type' => 'hasMany',
          'entity' => 'MassEmail',
          'foreign' => 'excludingTargetLists'
        ],
        'accounts' => [
          'type' => 'hasMany',
          'entity' => 'Account',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ],
        'contacts' => [
          'type' => 'hasMany',
          'entity' => 'Contact',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ],
        'leads' => [
          'type' => 'hasMany',
          'entity' => 'Lead',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ],
        'users' => [
          'type' => 'hasMany',
          'entity' => 'User',
          'foreign' => 'targetLists',
          'additionalColumns' => [
            'optedOut' => [
              'type' => 'bool'
            ]
          ],
          'columnAttributeMap' => [
            'optedOut' => 'isOptedOut'
          ]
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'createdAt' => [
          'columns' => [
            0 => 'createdAt',
            1 => 'deleted'
          ]
        ]
      ]
    ],
    'Task' => [
      'fields' => [
        'name' => [
          'type' => 'varchar',
          'required' => true,
          'trim' => true
        ],
        'status' => [
          'type' => 'enum',
          'options' => [
            0 => 'Not Started',
            1 => 'Started',
            2 => 'Completed',
            3 => 'Canceled',
            4 => 'Deferred'
          ],
          'style' => [
            'Completed' => 'success'
          ],
          'default' => 'Not Started',
          'audited' => true,
          'fieldManagerAdditionalParamList' => [
            0 => [
              'name' => 'notActualOptions',
              'view' => 'views/admin/field-manager/fields/not-actual-options'
            ]
          ],
          'notActualOptions' => [
            0 => 'Completed',
            1 => 'Canceled',
            2 => 'Deferred'
          ]
        ],
        'priority' => [
          'type' => 'enum',
          'options' => [
            0 => 'Low',
            1 => 'Normal',
            2 => 'High',
            3 => 'Urgent'
          ],
          'default' => 'Normal',
          'displayAsLabel' => true,
          'style' => [
            'High' => 'warning',
            'Urgent' => 'danger'
          ],
          'audited' => true
        ],
        'dateStart' => [
          'type' => 'datetimeOptional',
          'before' => 'dateEnd'
        ],
        'dateEnd' => [
          'type' => 'datetimeOptional',
          'after' => 'dateStart',
          'view' => 'crm:views/task/fields/date-end',
          'audited' => true
        ],
        'dateStartDate' => [
          'type' => 'date',
          'disabled' => true
        ],
        'dateEndDate' => [
          'type' => 'date',
          'disabled' => true
        ],
        'dateCompleted' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'isOverdue' => [
          'type' => 'bool',
          'readOnly' => true,
          'notStorable' => true,
          'view' => 'crm:views/task/fields/is-overdue',
          'disabled' => true
        ],
        'reminders' => [
          'type' => 'jsonArray',
          'notStorable' => true,
          'view' => 'crm:views/meeting/fields/reminders'
        ],
        'description' => [
          'type' => 'text'
        ],
        'parent' => [
          'type' => 'linkParent',
          'entityList' => [
            0 => 'Account',
            1 => 'Contact',
            2 => 'Lead',
            3 => 'Opportunity',
            4 => 'Case'
          ]
        ],
        'account' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'contact' => [
          'type' => 'link',
          'readOnly' => true
        ],
        'createdAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'modifiedAt' => [
          'type' => 'datetime',
          'readOnly' => true
        ],
        'createdBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'modifiedBy' => [
          'type' => 'link',
          'readOnly' => true,
          'view' => 'views/fields/user'
        ],
        'assignedUser' => [
          'type' => 'link',
          'required' => true,
          'view' => 'views/fields/assigned-user'
        ],
        'teams' => [
          'type' => 'linkMultiple',
          'view' => 'views/fields/teams'
        ],
        'attachments' => [
          'type' => 'attachmentMultiple',
          'sourceList' => [
            0 => 'Document'
          ]
        ]
      ],
      'links' => [
        'createdBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'modifiedBy' => [
          'type' => 'belongsTo',
          'entity' => 'User'
        ],
        'assignedUser' => [
          'type' => 'belongsTo',
          'entity' => 'User',
          'foreign' => 'tasks'
        ],
        'teams' => [
          'type' => 'hasMany',
          'entity' => 'Team',
          'relationName' => 'entityTeam',
          'layoutRelationshipsDisabled' => true
        ],
        'parent' => [
          'type' => 'belongsToParent',
          'foreign' => 'tasks'
        ],
        'account' => [
          'type' => 'belongsTo',
          'entity' => 'Account'
        ],
        'contact' => [
          'type' => 'belongsTo',
          'entity' => 'Contact'
        ]
      ],
      'collection' => [
        'orderBy' => 'createdAt',
        'order' => 'desc',
        'sortBy' => 'createdAt',
        'asc' => false
      ],
      'indexes' => [
        'dateStartStatus' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'status'
          ]
        ],
        'dateEndStatus' => [
          'columns' => [
            0 => 'dateEnd',
            1 => 'status'
          ]
        ],
        'dateStart' => [
          'columns' => [
            0 => 'dateStart',
            1 => 'deleted'
          ]
        ],
        'status' => [
          'columns' => [
            0 => 'status',
            1 => 'deleted'
          ]
        ],
        'assignedUser' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'deleted'
          ]
        ],
        'assignedUserStatus' => [
          'columns' => [
            0 => 'assignedUserId',
            1 => 'status'
          ]
        ]
      ]
    ]
  ],
  'fields' => [
    'address' => [
      'actualFields' => [
        0 => 'street',
        1 => 'city',
        2 => 'state',
        3 => 'country',
        4 => 'postalCode'
      ],
      'fields' => [
        'street' => [
          'type' => 'text',
          'maxLength' => 255,
          'dbType' => 'varchar'
        ],
        'city' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-city',
          'customizationOptionsDisabled' => true
        ],
        'state' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-state',
          'customizationOptionsDisabled' => true
        ],
        'country' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 255,
          'view' => 'views/fields/address-country',
          'customizationOptionsDisabled' => true
        ],
        'postalCode' => [
          'type' => 'varchar',
          'maxLength' => 40,
          'trim' => true
        ],
        'map' => [
          'type' => 'map',
          'notStorable' => true,
          'readOnly' => true,
          'layoutListDisabled' => true,
          'provider' => 'Google',
          'height' => 300,
          'exportDisabled' => true,
          'importDisabled' => true
        ]
      ],
      'params' => [
        0 => [
          'name' => 'viewMap',
          'type' => 'bool'
        ]
      ],
      'notMergeable' => true,
      'notCreatable' => false,
      'filter' => true,
      'skipOrmDefs' => true,
      'personalData' => true
    ],
    'array' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options'
        ],
        2 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        3 => [
          'name' => 'allowCustomOptions',
          'type' => 'bool',
          'hidden' => true
        ],
        4 => [
          'name' => 'noEmptyString',
          'type' => 'bool',
          'default' => false
        ],
        5 => [
          'name' => 'displayAsList',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'maxCount',
          'type' => 'int',
          'min' => 1
        ],
        7 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'array',
        1 => 'required',
        2 => 'maxCount'
      ],
      'mandatoryValidationList' => [
        0 => 'array'
      ],
      'filter' => true,
      'notCreatable' => false,
      'notSortable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true
    ],
    'arrayInt' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'arrayInt'
        ],
        2 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        3 => [
          'name' => 'noEmptyString',
          'type' => 'bool',
          'default' => false
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'array'
      ],
      'mandatoryValidationList' => [
        0 => 'array'
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray'
      ]
    ],
    'attachmentMultiple' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'sourceList',
          'type' => 'multiEnum',
          'view' => 'views/admin/field-manager/fields/source-list'
        ],
        2 => [
          'name' => 'maxFileSize',
          'type' => 'float',
          'tooltip' => true,
          'min' => 0
        ],
        3 => [
          'name' => 'previewSize',
          'type' => 'enum',
          'default' => 'medium',
          'options' => [
            0 => '',
            1 => 'x-small',
            2 => 'small',
            3 => 'medium',
            4 => 'large'
          ]
        ],
        4 => [
          'name' => 'accept',
          'type' => 'multiEnum',
          'noEmptyString' => true,
          'allowCustomOptions' => true,
          'options' => [
            0 => 'image/*',
            1 => 'audio/*',
            2 => 'video/*',
            3 => '.pdf'
          ],
          'tooltip' => 'fileAccept'
        ]
      ],
      'actualFields' => [
        0 => 'ids'
      ],
      'notActualFields' => [
        0 => 'names',
        1 => 'types'
      ],
      'linkDefs' => [
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreign' => 'parent',
        'layoutRelationshipsDisabled' => true,
        'relationName' => 'attachments',
        'disabled' => true
      ],
      'notSortable' => true,
      'filter' => true,
      'personalData' => true
    ],
    'autoincrement' => [
      'params' => [],
      'notCreatable' => false,
      'filter' => true,
      'fieldDefs' => [
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true
      ],
      'hookClassName' => 'Espo\\Tools\\FieldManager\\Hooks\\AutoincrementType',
      'textFilter' => true,
      'readOnly' => true
    ],
    'barcode' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'codeType',
          'type' => 'enum',
          'options' => [
            0 => 'CODE128',
            1 => 'CODE128A',
            2 => 'CODE128B',
            3 => 'CODE128C',
            4 => 'EAN13',
            5 => 'EAN8',
            6 => 'EAN5',
            7 => 'EAN2',
            8 => 'UPC',
            9 => 'UPCE',
            10 => 'ITF14',
            11 => 'pharmacode',
            12 => 'QRcode'
          ],
          'translation' => 'FieldManager.options.barcodeType'
        ],
        2 => [
          'name' => 'lastChar',
          'type' => 'varchar',
          'maxLength' => 1,
          'default' => '',
          'tooltip' => 'barcodeLastChar'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'fieldDefs' => [
        'type' => 'varchar',
        'len' => 255
      ],
      'validatorClassName' => 'Espo\\Classes\\FieldValidators\\VarcharType'
    ],
    'base' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool'
        ]
      ],
      'filter' => false,
      'notCreatable' => true,
      'fieldDefs' => [
        'notStorable' => true
      ]
    ],
    'bool' => [
      'params' => [
        0 => [
          'name' => 'default',
          'type' => 'bool'
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => true
      ]
    ],
    'checklist' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options',
          'noEmptyString' => true,
          'required' => true
        ],
        2 => [
          'name' => 'isSorted',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        4 => [
          'name' => 'maxCount',
          'type' => 'int',
          'min' => 1
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'array',
        1 => 'required',
        2 => 'maxCount'
      ],
      'mandatoryValidationList' => [
        0 => 'array'
      ],
      'filter' => true,
      'notCreatable' => false,
      'notSortable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true
    ],
    'colorpicker' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'colorpicker'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => false,
      'fieldDefs' => [
        'type' => 'varchar',
        'maxLength' => 7
      ],
      'notCreatable' => true
    ],
    'currency' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'float'
        ],
        2 => [
          'name' => 'min',
          'type' => 'float'
        ],
        3 => [
          'name' => 'max',
          'type' => 'float'
        ],
        4 => [
          'name' => 'onlyDefaultCurrency',
          'type' => 'bool',
          'default' => false
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'currency',
        1 => ''
      ],
      'fields' => [
        'currency' => [
          'type' => 'enum',
          'view' => 'views/fields/currency-list',
          'layoutDetailDisabled' => true,
          'layoutListDisabled' => true,
          'layoutMassUpdateDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'customizationRequiredDisabled' => true,
          'customizationOptionsDisabled' => true,
          'customizationIsSortedDisabled' => true,
          'customizationDisplayAsLabelDisabled' => true,
          'customizationAuditedDisabled' => true,
          'customizationReadOnlyDisabled' => true,
          'customizationDefaultView' => 'views/admin/field-manager/fields/currency-default',
          'maxLength' => 6
        ],
        'converted' => [
          'type' => 'currencyConverted',
          'readOnly' => true,
          'importDisabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'min',
        2 => 'max'
      ],
      'filter' => true,
      'personalData' => true
    ],
    'currencyConverted' => [
      'params' => [],
      'filter' => true,
      'notCreatable' => true,
      'skipOrmDefs' => true
    ],
    'date' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/date/default',
          'options' => [
            0 => '',
            1 => 'javascript: return this.dateTime.getToday();',
            2 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');',
            3 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');',
            4 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');',
            5 => 'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');',
            6 => 'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');',
            7 => 'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');',
            8 => 'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');',
            9 => 'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');',
            10 => 'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');',
            11 => 'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');',
            12 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');',
            13 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');',
            14 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');',
            15 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');',
            16 => 'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');',
            17 => 'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');',
            18 => 'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');',
            19 => 'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');',
            20 => 'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');',
            21 => 'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');',
            22 => 'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');',
            23 => 'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');',
            24 => 'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');',
            25 => 'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');',
            26 => 'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');'
          ],
          'translation' => 'FieldManager.options.dateDefault'
        ],
        2 => [
          'name' => 'after',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        3 => [
          'name' => 'before',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        4 => [
          'type' => 'bool',
          'name' => 'useNumericFormat'
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => false
      ],
      'personalData' => true
    ],
    'datetime' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/date/default',
          'options' => [
            0 => '',
            1 => 'javascript: return this.dateTime.getNow(1);',
            2 => 'javascript: return this.dateTime.getNow(5);',
            3 => 'javascript: return this.dateTime.getNow(15);',
            4 => 'javascript: return this.dateTime.getNow(30);',
            5 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);',
            6 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);',
            7 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);',
            8 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);',
            9 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);',
            10 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);',
            11 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);',
            12 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);',
            13 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);',
            14 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);',
            15 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);',
            16 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);',
            17 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);',
            18 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);',
            19 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);',
            20 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);',
            21 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);',
            22 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);',
            23 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);'
          ],
          'translation' => 'FieldManager.options.dateTimeDefault'
        ],
        2 => [
          'name' => 'after',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        3 => [
          'name' => 'before',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        4 => [
          'type' => 'bool',
          'name' => 'useNumericFormat'
        ],
        5 => [
          'type' => 'bool',
          'name' => 'hasSeconds',
          'hidden' => true
        ],
        6 => [
          'type' => 'enumInt',
          'name' => 'minuteStep',
          'options' => [
            0 => 30,
            1 => 15,
            2 => 10,
            3 => 5,
            4 => 1
          ]
        ],
        7 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => false
      ],
      'personalData' => true
    ],
    'datetimeOptional' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/date/default',
          'options' => [
            0 => '',
            1 => 'javascript: return this.dateTime.getNow(1);',
            2 => 'javascript: return this.dateTime.getNow(5);',
            3 => 'javascript: return this.dateTime.getNow(15);',
            4 => 'javascript: return this.dateTime.getNow(30);',
            5 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);',
            6 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);',
            7 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);',
            8 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);',
            9 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);',
            10 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);',
            11 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);',
            12 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);',
            13 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);',
            14 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);',
            15 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);',
            16 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);',
            17 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);',
            18 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);',
            19 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);',
            20 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);',
            21 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);',
            22 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);',
            23 => 'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);'
          ],
          'translation' => 'FieldManager.options.dateTimeDefault'
        ],
        2 => [
          'name' => 'after',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        3 => [
          'name' => 'before',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/date/after-before'
        ],
        4 => [
          'type' => 'bool',
          'name' => 'useNumericFormat'
        ],
        5 => [
          'type' => 'enumInt',
          'name' => 'minuteStep',
          'options' => [
            0 => 30,
            1 => 15,
            2 => 10,
            3 => 5,
            4 => 1
          ]
        ],
        6 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        7 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => '',
        1 => 'date'
      ],
      'fields' => [
        'date' => [
          'type' => 'date',
          'disabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'datetime',
        'notNull' => false
      ],
      'view' => 'views/fields/datetime-optional',
      'personalData' => true
    ],
    'duration' => [
      'params' => [
        0 => [
          'name' => 'default',
          'type' => 'int'
        ],
        1 => [
          'name' => 'options',
          'type' => 'arrayInt'
        ]
      ],
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'int'
      ]
    ],
    'email' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'isOptedOut',
        1 => ''
      ],
      'notActualFields' => [
        0 => 'data'
      ],
      'fields' => [
        'isOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'emailAddress'
      ],
      'mandatoryValidationList' => [
        0 => 'emailAddress'
      ],
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => [
        'notStorable' => true
      ],
      'textFilter' => true,
      'personalData' => true
    ],
    'enum' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options-with-style'
        ],
        2 => [
          'name' => 'default',
          'type' => 'enum',
          'view' => 'views/admin/field-manager/fields/options/default'
        ],
        3 => [
          'name' => 'isSorted',
          'type' => 'bool'
        ],
        4 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        5 => [
          'name' => 'style',
          'type' => 'jsonObject',
          'hidden' => true
        ],
        6 => [
          'name' => 'displayAsLabel',
          'type' => 'bool'
        ],
        7 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'varchar'
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true
    ],
    'enumFloat' => [
      'params' => [
        0 => [
          'name' => 'options',
          'type' => 'array'
        ],
        1 => [
          'name' => 'default',
          'type' => 'float'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'float'
      ]
    ],
    'enumInt' => [
      'params' => [
        0 => [
          'name' => 'options',
          'type' => 'array'
        ],
        1 => [
          'name' => 'default',
          'type' => 'int'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'type' => 'int'
      ]
    ],
    'file' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'sourceList',
          'type' => 'multiEnum',
          'view' => 'views/admin/field-manager/fields/source-list'
        ],
        2 => [
          'name' => 'maxFileSize',
          'type' => 'float',
          'tooltip' => true,
          'min' => 0
        ],
        3 => [
          'name' => 'accept',
          'type' => 'multiEnum',
          'noEmptyString' => true,
          'allowCustomOptions' => true,
          'options' => [
            0 => 'image/*',
            1 => 'audio/*',
            2 => 'video/*',
            3 => '.pdf'
          ],
          'tooltip' => 'fileAccept'
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'linkDefs' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'skipOrmDefs' => true,
        'disabled' => true
      ],
      'personalData' => true
    ],
    'float' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'float'
        ],
        2 => [
          'name' => 'min',
          'type' => 'float'
        ],
        3 => [
          'name' => 'max',
          'type' => 'float'
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'min',
        2 => 'max'
      ],
      'filter' => true,
      'fieldDefs' => [
        'notNull' => false
      ]
    ],
    'foreign' => [
      'params' => [
        0 => [
          'name' => 'link',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/foreign/link',
          'required' => true
        ],
        1 => [
          'name' => 'field',
          'type' => 'varchar',
          'view' => 'views/admin/field-manager/fields/foreign/field',
          'required' => true
        ],
        2 => [
          'name' => 'view',
          'type' => 'varchar',
          'hidden' => true
        ]
      ],
      'fieldTypeList' => [
        0 => 'varchar',
        1 => 'enum',
        2 => 'enumInt',
        3 => 'enumFloat',
        4 => 'int',
        5 => 'float',
        6 => 'url',
        7 => 'date',
        8 => 'datetime',
        9 => 'text',
        10 => 'number',
        11 => 'bool',
        12 => 'email',
        13 => 'phone',
        14 => 'array',
        15 => 'multiEnum',
        16 => 'checklist',
        17 => 'currencyConverted'
      ],
      'fieldTypeViewMap' => [
        'varchar' => 'views/fields/foreign-varchar',
        'enum' => 'views/fields/foreign-enum',
        'enumInt' => 'views/fields/foreign-int',
        'enumFloat' => 'views/fields/foreign-float',
        'int' => 'views/fields/foreign-int',
        'float' => 'views/fields/foreign-float',
        'url' => 'views/fields/foreign-url',
        'date' => 'views/fields/foreign-date',
        'datetime' => 'views/fields/foreign-datetime',
        'text' => 'views/fields/foreign-text',
        'number' => 'views/fields/foreign-varchar',
        'bool' => 'views/fields/foreign-bool',
        'email' => 'views/fields/foreign-email',
        'phone' => 'views/fields/foreign-phone',
        'array' => 'views/fields/foreign-array',
        'checklist' => 'views/fields/foreign-checklist',
        'multiEnum' => 'views/fields/foreign-multi-enum',
        'currencyConverted' => 'views/fields/foreign-currency-converted'
      ],
      'filter' => true,
      'notCreatable' => false,
      'fieldDefs' => [
        'readOnly' => true
      ]
    ],
    'image' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'previewSize',
          'type' => 'enum',
          'default' => 'small',
          'options' => [
            0 => 'x-small',
            1 => 'small',
            2 => 'medium',
            3 => 'large'
          ]
        ],
        2 => [
          'name' => 'listPreviewSize',
          'type' => 'enum',
          'default' => '',
          'options' => [
            0 => '',
            1 => 'small',
            2 => 'medium'
          ],
          'translation' => 'Admin.options.previewSize'
        ],
        3 => [
          'name' => 'maxFileSize',
          'type' => 'float',
          'tooltip' => true,
          'min' => 0
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'linkDefs' => [
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'skipOrmDefs' => true,
        'disabled' => true
      ],
      'personalData' => true
    ],
    'int' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'int'
        ],
        2 => [
          'name' => 'min',
          'type' => 'int'
        ],
        3 => [
          'name' => 'max',
          'type' => 'int'
        ],
        4 => [
          'name' => 'disableFormatting',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'min',
        2 => 'max'
      ],
      'filter' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'personalData' => true
    ],
    'jsonArray' => [
      'notCreatable' => true,
      'notMergeable' => true,
      'notSortable' => true,
      'filter' => false,
      'validationList' => [
        0 => 'array'
      ],
      'mandatoryValidationList' => [
        0 => 'array'
      ]
    ],
    'jsonObject' => [
      'notCreatable' => true,
      'notMergeable' => true,
      'filter' => false
    ],
    'link' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'default',
          'type' => 'link',
          'view' => 'views/admin/field-manager/fields/link/default'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'notCreatable' => true
    ],
    'linkMultiple' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'sortable',
          'type' => 'bool',
          'default' => false,
          'hidden' => true
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'default',
          'type' => 'linkMultiple',
          'view' => 'views/admin/field-manager/fields/link-multiple/default'
        ]
      ],
      'actualFields' => [
        0 => 'ids'
      ],
      'notActualFields' => [
        0 => 'names'
      ],
      'validationList' => [
        0 => 'required'
      ],
      'notCreatable' => true,
      'notSortable' => true,
      'filter' => true
    ],
    'linkOne' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        2 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'filter' => true,
      'notCreatable' => true
    ],
    'linkParent' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'entityList',
          'type' => 'multiEnum',
          'view' => 'views/admin/field-manager/fields/entity-list'
        ],
        2 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'id',
        1 => 'type'
      ],
      'notActualFields' => [
        0 => 'name'
      ],
      'validationList' => [
        0 => 'required'
      ],
      'filter' => true,
      'notCreatable' => true,
      'fieldDefs' => [
        'notStorable' => true
      ]
    ],
    'map' => [
      'params' => [
        0 => [
          'name' => 'provider',
          'type' => 'enum',
          'options' => [
            0 => 'Google'
          ],
          'default' => 'Google'
        ],
        1 => [
          'name' => 'height',
          'type' => 'int',
          'default' => 300
        ]
      ],
      'filter' => false,
      'notCreatable' => true,
      'notSortable' => true,
      'fieldDefs' => [
        'notStorable' => true
      ]
    ],
    'multiEnum' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'options',
          'type' => 'array',
          'view' => 'views/admin/field-manager/fields/options-with-style'
        ],
        2 => [
          'name' => 'isSorted',
          'type' => 'bool'
        ],
        3 => [
          'name' => 'translation',
          'type' => 'varchar',
          'hidden' => true
        ],
        4 => [
          'name' => 'allowCustomOptions',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'maxCount',
          'type' => 'int',
          'min' => 1
        ],
        6 => [
          'name' => 'style',
          'type' => 'jsonObject',
          'hidden' => true
        ],
        7 => [
          'name' => 'displayAsLabel',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'displayAsList',
          'type' => 'bool'
        ],
        9 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        10 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'array',
        1 => 'required',
        2 => 'maxCount'
      ],
      'mandatoryValidationList' => [
        0 => 'array'
      ],
      'filter' => true,
      'notCreatable' => false,
      'notSortable' => true,
      'fieldDefs' => [
        'type' => 'jsonArray',
        'storeArrayValues' => true
      ],
      'translatedOptions' => true,
      'dynamicLogicOptions' => true,
      'personalData' => true
    ],
    'number' => [
      'params' => [
        0 => [
          'name' => 'prefix',
          'type' => 'varchar',
          'maxLength' => 16
        ],
        1 => [
          'name' => 'nextNumber',
          'type' => 'int',
          'min' => 0,
          'max' => 2147483647,
          'required' => true,
          'default' => 1
        ],
        2 => [
          'name' => 'padLength',
          'type' => 'int',
          'default' => 5,
          'required' => true,
          'min' => 1,
          'max' => 20
        ]
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'varchar',
        'len' => 36,
        'notNull' => false,
        'unique' => false
      ],
      'hookClassName' => 'Espo\\Tools\\FieldManager\\Hooks\\NumberType',
      'textFilter' => true,
      'readOnly' => true
    ],
    'password' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ]
      ],
      'notSortable' => true,
      'notCreatable' => true,
      'filter' => false
    ],
    'personName' => [
      'actualFields' => [
        0 => 'salutation',
        1 => 'first',
        2 => 'last',
        3 => 'middle'
      ],
      'notActualFields' => [
        0 => ''
      ],
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ]
      ],
      'fields' => [
        'salutation' => [
          'type' => 'enum'
        ],
        'first' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'last' => [
          'type' => 'varchar',
          'trim' => true
        ],
        'middle' => [
          'type' => 'varchar',
          'trim' => true,
          'maxLength' => 100
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => true,
      'skipOrmDefs' => true,
      'personalData' => true,
      'textFilter' => true,
      'fullTextSearch' => true,
      'validationList' => [
        0 => 'required'
      ],
      'fullTextSearchColumnList' => [
        0 => 'first',
        1 => 'last'
      ]
    ],
    'phone' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'typeList',
          'type' => 'array',
          'default' => [
            0 => 'Mobile',
            1 => 'Office',
            2 => 'Home',
            3 => 'Fax',
            4 => 'Other'
          ],
          'view' => 'views/admin/field-manager/fields/options'
        ],
        2 => [
          'name' => 'defaultType',
          'type' => 'varchar',
          'default' => 'Mobile'
        ],
        3 => [
          'name' => 'audited',
          'type' => 'bool'
        ]
      ],
      'actualFields' => [
        0 => 'isOptedOut',
        1 => ''
      ],
      'notActualFields' => [
        0 => 'data'
      ],
      'fields' => [
        'isOptedOut' => [
          'type' => 'bool',
          'notStorable' => true,
          'layoutDetailDisabled' => true,
          'layoutDefaultSidePanelDisabled' => true,
          'mergeDisabled' => true,
          'customizationDefaultDisabled' => true,
          'customizationReadOnlyDisabled' => true
        ]
      ],
      'validationList' => [
        0 => 'required'
      ],
      'notCreatable' => true,
      'filter' => true,
      'fieldDefs' => [
        'notStorable' => true
      ],
      'translatedOptions' => true,
      'textFilter' => true,
      'personalData' => true
    ],
    'rangeCurrency' => [
      'actualFields' => [
        0 => 'from',
        1 => 'to'
      ],
      'fields' => [
        'from' => [
          'type' => 'currency'
        ],
        'to' => [
          'type' => 'currency'
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => false,
      'skipOrmDefs' => true
    ],
    'rangeFloat' => [
      'actualFields' => [
        0 => 'from',
        1 => 'to'
      ],
      'fields' => [
        'from' => [
          'type' => 'float'
        ],
        'to' => [
          'type' => 'float'
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => false,
      'skipOrmDefs' => true
    ],
    'rangeInt' => [
      'actualFields' => [
        0 => 'from',
        1 => 'to'
      ],
      'fields' => [
        'from' => [
          'type' => 'int'
        ],
        'to' => [
          'type' => 'int'
        ]
      ],
      'naming' => 'prefix',
      'notMergeable' => true,
      'notCreatable' => true,
      'filter' => false,
      'skipOrmDefs' => true
    ],
    'text' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'text'
        ],
        2 => [
          'name' => 'maxLength',
          'type' => 'int'
        ],
        3 => [
          'name' => 'seeMoreDisabled',
          'type' => 'bool',
          'tooltip' => true
        ],
        4 => [
          'name' => 'rows',
          'type' => 'int',
          'min' => 1
        ],
        5 => [
          'name' => 'rowsMin',
          'type' => 'int',
          'default' => 2,
          'min' => 1,
          'hidden' => true
        ],
        6 => [
          'name' => 'cutHeight',
          'type' => 'int',
          'default' => 200,
          'min' => 1
        ],
        7 => [
          'name' => 'displayRawText',
          'type' => 'bool'
        ],
        8 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'personalData' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'fullTextSearch' => true
    ],
    'url' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'varchar'
        ],
        2 => [
          'name' => 'maxLength',
          'type' => 'int'
        ],
        3 => [
          'name' => 'strip',
          'type' => 'bool'
        ],
        4 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'varchar'
      ],
      'personalData' => true
    ],
    'varchar' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'varchar',
          'trim' => true
        ],
        2 => [
          'name' => 'maxLength',
          'type' => 'int',
          'default' => 150,
          'min' => 1,
          'max' => 65535
        ],
        3 => [
          'name' => 'trim',
          'type' => 'bool',
          'default' => true
        ],
        4 => [
          'name' => 'options',
          'type' => 'multiEnum'
        ],
        5 => [
          'name' => 'audited',
          'type' => 'bool'
        ],
        6 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ]
      ],
      'validationList' => [
        0 => 'required',
        1 => 'maxLength'
      ],
      'filter' => true,
      'personalData' => true,
      'textFilter' => true,
      'textFilterForeign' => true,
      'dynamicLogicOptions' => true,
      'fullTextSearch' => true
    ],
    'wysiwyg' => [
      'params' => [
        0 => [
          'name' => 'required',
          'type' => 'bool',
          'default' => false
        ],
        1 => [
          'name' => 'default',
          'type' => 'text'
        ],
        2 => [
          'name' => 'height',
          'type' => 'int'
        ],
        3 => [
          'name' => 'minHeight',
          'type' => 'int'
        ],
        4 => [
          'name' => 'readOnly',
          'type' => 'bool'
        ],
        5 => [
          'name' => 'attachmentField',
          'type' => 'varchar',
          'hidden' => true
        ],
        6 => [
          'name' => 'useIframe',
          'type' => 'bool'
        ]
      ],
      'filter' => true,
      'fieldDefs' => [
        'type' => 'text'
      ],
      'personalData' => true,
      'textFilter' => true,
      'fullTextSearch' => true
    ]
  ],
  'integrations' => [
    'GoogleMaps' => [
      'fields' => [
        'apiKey' => [
          'type' => 'varchar',
          'maxLength' => 255,
          'required' => true
        ]
      ],
      'allowUserAccounts' => false,
      'view' => 'views/admin/integrations/google-maps',
      'authMethod' => 'GoogleMaps'
    ]
  ],
  'scopes' => [
    'ActionHistoryRecord' => [
      'entity' => true
    ],
    'ArrayValue' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Attachment' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'AuthLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'AuthToken' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Autofollow' => [
      'entity' => true
    ],
    'Currency' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => true,
      'aclActionList' => [
        0 => 'read',
        1 => 'edit'
      ],
      'aclLevelList' => [
        0 => 'yes',
        1 => 'no'
      ],
      'aclHighestLevel' => 'yes',
      'customizable' => false
    ],
    'Dashboard' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'DashboardTemplate' => [
      'entity' => true
    ],
    'Email' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'notifications' => true,
      'object' => true,
      'customizable' => true,
      'activity' => true,
      'activityStatusList' => [
        0 => 'Draft'
      ],
      'historyStatusList' => [
        0 => 'Archived',
        1 => 'Sent'
      ]
    ],
    'EmailAccount' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false
    ],
    'EmailAccountScope' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => 'boolean'
    ],
    'EmailAddress' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'EmailFilter' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'notifications' => false,
      'object' => false,
      'customizable' => false
    ],
    'EmailFolder' => [
      'entity' => true
    ],
    'EmailTemplate' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
      'customizable' => false
    ],
    'EmailTemplateCategory' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'recordAllTeamNo',
      'customizable' => true,
      'importable' => false,
      'type' => 'CategoryTree',
      'notifications' => false
    ],
    'Extension' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'ExternalAccount' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'boolean',
      'aclPortal' => false,
      'customizable' => false
    ],
    'Import' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => 'boolean',
      'customizable' => false
    ],
    'InboundEmail' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false
    ],
    'Integration' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Job' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'LastViewed' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'LayoutRecord' => [
      'entity' => true
    ],
    'LayoutSet' => [
      'entity' => true
    ],
    'LeadCapture' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'LeadCaptureLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Note' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Notification' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'PasswordChangeRequest' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'PhoneNumber' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Portal' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'PortalRole' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'PortalUser' => [
      'tab' => true,
      'tabAclPermission' => 'portalPermission'
    ],
    'Preferences' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Role' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'ScheduledJob' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'ScheduledJobLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'Stream' => [
      'entity' => false,
      'layouts' => false,
      'tab' => true,
      'acl' => false,
      'customizable' => false
    ],
    'Subscription' => [
      'entity' => true
    ],
    'Team' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
      'aclActionList' => [
        0 => 'read'
      ],
      'aclLevelList' => [
        0 => 'all',
        1 => 'team',
        2 => 'no'
      ],
      'customizable' => false
    ],
    'Template' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'no'
      ],
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'customizable' => true,
      'importable' => true,
      'disabled' => false
    ],
    'UniqueId' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'customizable' => false
    ],
    'User' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclActionList' => [
        0 => 'read',
        1 => 'edit'
      ],
      'aclActionLevelListMap' => [
        'edit' => [
          0 => 'own',
          1 => 'no'
        ]
      ],
      'customizable' => true,
      'object' => true
    ],
    'UserData' => [
      'entity' => true
    ],
    'Webhook' => [
      'entity' => true,
      'acl' => 'boolean'
    ],
    'WebhookEventQueueItem' => [
      'entity' => true
    ],
    'WebhookQueueItem' => [
      'entity' => true
    ],
    'Account' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'hasPersonalData' => true
    ],
    'Activities' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => 'boolean',
      'aclPortal' => 'boolean',
      'module' => 'Crm',
      'customizable' => false
    ],
    'Calendar' => [
      'entity' => false,
      'tab' => true,
      'acl' => 'boolean',
      'module' => 'Crm'
    ],
    'Call' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'calendar' => true,
      'activity' => true,
      'object' => true,
      'activityStatusList' => [
        0 => 'Planned'
      ],
      'historyStatusList' => [
        0 => 'Held',
        1 => 'Not Held'
      ],
      'statusField' => 'status'
    ],
    'Campaign' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => true,
      'stream' => false,
      'importable' => false,
      'object' => true,
      'statusField' => 'status'
    ],
    'CampaignLogRecord' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'stream' => false,
      'importable' => false
    ],
    'CampaignTrackingUrl' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'stream' => false,
      'importable' => false
    ],
    'Case' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'statusField' => 'status'
    ],
    'Contact' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'hasPersonalData' => true
    ],
    'Document' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => false,
      'notifications' => true,
      'object' => true
    ],
    'DocumentFolder' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => 'recordAllNo',
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => false,
      'type' => 'CategoryTree',
      'stream' => false,
      'notifications' => false
    ],
    'EmailQueueItem' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'notifications' => false,
      'object' => false,
      'customizable' => false,
      'module' => 'Crm'
    ],
    'KnowledgeBaseArticle' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => 'recordAllNo',
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => false,
      'object' => true
    ],
    'KnowledgeBaseCategory' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => 'recordAllTeamNo',
      'aclPortal' => 'recordAllNo',
      'aclPortalActionList' => [
        0 => 'read'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => false,
      'type' => 'CategoryTree',
      'stream' => false,
      'notifications' => false
    ],
    'Lead' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'statusField' => 'status',
      'hasPersonalData' => true
    ],
    'MassEmail' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'notifications' => false,
      'object' => false,
      'customizable' => false,
      'module' => 'Crm'
    ],
    'Meeting' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'calendar' => true,
      'activity' => true,
      'object' => true,
      'activityStatusList' => [
        0 => 'Planned'
      ],
      'historyStatusList' => [
        0 => 'Held',
        1 => 'Not Held'
      ],
      'statusField' => 'status'
    ],
    'Opportunity' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => 'recordAllAccountContactOwnNo',
      'module' => 'Crm',
      'customizable' => true,
      'stream' => true,
      'importable' => true,
      'notifications' => true,
      'object' => true,
      'statusField' => 'stage',
      'kanbanStatusIgnoreList' => [
        0 => 'Closed Lost'
      ],
      'disabled' => false
    ],
    'Reminder' => [
      'entity' => true,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'importable' => false
    ],
    'Target' => [
      'entity' => false,
      'layouts' => false,
      'tab' => false,
      'acl' => false,
      'module' => 'Crm',
      'customizable' => false,
      'importable' => false,
      'notifications' => false,
      'object' => true
    ],
    'TargetList' => [
      'entity' => true,
      'layouts' => false,
      'tab' => true,
      'acl' => true,
      'module' => 'Crm',
      'customizable' => false,
      'stream' => false,
      'importable' => false,
      'notifications' => true,
      'object' => true
    ],
    'Task' => [
      'entity' => true,
      'layouts' => true,
      'tab' => true,
      'acl' => true,
      'aclPortal' => true,
      'aclPortalLevelList' => [
        0 => 'all',
        1 => 'account',
        2 => 'contact',
        3 => 'own',
        4 => 'no'
      ],
      'activityStatusList' => [
        0 => 'Not Started',
        1 => 'Started'
      ],
      'historyStatusList' => [
        0 => 'Completed'
      ],
      'module' => 'Crm',
      'customizable' => true,
      'importable' => true,
      'notifications' => true,
      'calendar' => true,
      'object' => true,
      'statusField' => 'status',
      'stream' => true,
      'kanbanStatusIgnoreList' => [
        0 => 'Canceled',
        1 => 'Deferred'
      ]
    ]
  ],
  'themes' => [
    'Espo' => [
      'stylesheet' => 'client/css/espo/espo.css',
      'stylesheetIframe' => 'client/css/espo/espo-iframe.css',
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'navbarHeight' => 43,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartSuccessColor' => '#87C956',
      'chartTickColor' => '#e8eced',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ],
    'EspoRtl' => [
      'stylesheet' => 'client/css/espo/espo-rtl.css',
      'stylesheetIframe' => 'client/css/espo/espo-rtl-iframe.css',
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'navbarHeight' => 43,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#87C956',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ],
    'EspoVertical' => [
      'stylesheet' => 'client/css/espo/espo-vertical.css',
      'stylesheetIframe' => 'client/css/espo/espo-vertical-iframe.css',
      'navbarIsVertical' => true,
      'recordTopButtonsStickTop' => 61,
      'recordTopButtonsBlockHeight' => 21,
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'navbarHeight' => 30,
      'logo' => 'client/img/logo-37.png',
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#87C956',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ],
    'Hazyblue' => [
      'stylesheet' => 'client/css/espo/hazyblue.css',
      'stylesheetIframe' => 'client/css/espo/hazyblue-iframe.css',
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'navbarHeight' => 43,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#85b75f',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#DE6666',
        3 => '#8A7CC2',
        4 => '#c1834d',
        5 => '#4E6CAD',
        6 => '#ED8F42',
        7 => '#d69cc7',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#DE6666',
        3 => '#8A7CC2',
        4 => '#c1834d'
      ]
    ],
    'HazyblueVertical' => [
      'stylesheet' => 'client/css/espo/hazyblue-vertical.css',
      'stylesheetIframe' => 'client/css/espo/hazyblue-vertical-iframe.css',
      'navbarIsVertical' => true,
      'recordTopButtonsStickTop' => 61,
      'recordTopButtonsBlockHeight' => 21,
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'navbarHeight' => 30,
      'logo' => 'client/img/logo-37.png',
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#85b75f',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#DE6666',
        3 => '#8A7CC2',
        4 => '#c1834d',
        5 => '#4E6CAD',
        6 => '#ED8F42',
        7 => '#d69cc7',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#DE6666',
        3 => '#8A7CC2',
        4 => '#c1834d'
      ]
    ],
    'Sakura' => [
      'stylesheet' => 'client/css/espo/sakura.css',
      'stylesheetIframe' => 'client/css/espo/sakura-iframe.css',
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'navbarHeight' => 43,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#83CD77',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ],
    'SakuraVertical' => [
      'stylesheet' => 'client/css/espo/sakura-vertical.css',
      'stylesheetIframe' => 'client/css/espo/sakura-vertical-iframe.css',
      'navbarIsVertical' => true,
      'recordTopButtonsStickTop' => 61,
      'recordTopButtonsBlockHeight' => 21,
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'navbarHeight' => 30,
      'logo' => 'client/img/logo-37.png',
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#83CD77',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ],
    'Violet' => [
      'stylesheet' => 'client/css/espo/violet.css',
      'stylesheetIframe' => 'client/css/espo/violet-iframe.css',
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'navbarHeight' => 43,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'textColor' => '#333',
      'fontSize' => 14,
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#7BC169',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ],
    'VioletVertical' => [
      'stylesheet' => 'client/css/espo/violet-vertical.css',
      'stylesheetIframe' => 'client/css/espo/violet-vertical-iframe.css',
      'navbarIsVertical' => true,
      'recordTopButtonsStickTop' => 61,
      'recordTopButtonsBlockHeight' => 21,
      'dashboardCellHeight' => 155,
      'dashboardCellMargin' => 19,
      'modalFooterAtTheTop' => true,
      'modalFullHeight' => true,
      'fontSize' => 14,
      'navbarHeight' => 30,
      'logo' => 'client/img/logo-37.png',
      'textColor' => '#333',
      'chartGridColor' => '#ddd',
      'chartTickColor' => '#e8eced',
      'chartSuccessColor' => '#7BC169',
      'chartColorList' => [
        0 => '#6FA8D6',
        1 => '#4E6CAD',
        2 => '#EDC555',
        3 => '#ED8F42',
        4 => '#DE6666',
        5 => '#7CC4A4',
        6 => '#8A7CC2',
        7 => '#D4729B',
        8 => '#bfbfbf'
      ],
      'chartColorAlternativeList' => [
        0 => '#6FA8D6',
        1 => '#EDC555',
        2 => '#ED8F42',
        3 => '#7CC4A4',
        4 => '#D4729B'
      ]
    ]
  ]
];
