<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=humhub',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'America/Belem',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'America/Belem',
      'timeZone' => 'America/Belem',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_MailTransport',
      ),
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1468648275,
    'settings' => 
    array (
      'core' => 
      array (
        'oembedProviders' => '{"vimeo.com":"http:\\/\\/vimeo.com\\/api\\/oembed.json?scheme=https&url=%url%&format=json&maxwidth=450","youtube.com":"http:\\/\\/www.youtube.com\\/oembed?scheme=https&url=%url%&format=json&maxwidth=450","youtu.be":"http:\\/\\/www.youtube.com\\/oembed?scheme=https&url=%url%&format=json&maxwidth=450","soundcloud.com":"https:\\/\\/soundcloud.com\\/oembed?url=%url%&format=json&maxwidth=450","slideshare.net":"https:\\/\\/www.slideshare.net\\/api\\/oembed\\/2?url=%url%&format=json&maxwidth=450"}',
        'colorDefault' => '#ededed',
        'colorPrimary' => '#708fa0',
        'colorInfo' => '#6fdbe8',
        'colorSuccess' => '#97d271',
        'colorWarning' => '#fdd198',
        'colorDanger' => '#ff8989',
        'name' => 'TBDK CLAN GAMES',
        'baseUrl' => 'http://127.0.0.1/tbdk',
        'paginationSize' => '10',
        'displayNameFormat' => '{profile.firstname} {profile.lastname}',
        'theme' => 'Humhub-TBDK',
        'defaultLanguage' => 'pt_br',
        'useCase' => 'other',
        'secret' => 'a6ef9782-f4f8-43d8-bdb6-45ee834a7a5f',
        'timeZone' => 'America/Belem',
        'noUsers' => 'mostactiveusers',
      ),
      'space' => 
      array (
        'defaultVisibility' => '1',
        'defaultJoinPolicy' => '1',
        'spaceOrder' => '0',
      ),
      'authentication' => 
      array (
        'authInternal' => '1',
        'authLdap' => '0',
      ),
      'authentication_ldap' => 
      array (
        'refreshUsers' => '1',
      ),
      'authentication_internal' => 
      array (
        'needApproval' => '0',
        'anonymousRegistration' => '1',
        'internalUsersCanInvite' => '0',
        'defaultUserProfileVisibility' => '1',
        'defaultUserGroup' => '1',
        'allowGuestAccess' => '0',
      ),
      'mailing' => 
      array (
        'transportType' => 'php',
        'systemEmailAddress' => 'social@example.com',
        'systemEmailName' => 'TBDK',
        'receive_email_activities' => '2',
        'receive_email_notifications' => '0',
      ),
      'file' => 
      array (
        'maxFileSize' => '1048576',
        'maxPreviewImageWidth' => '200',
        'maxPreviewImageHeight' => '200',
        'hideImageFileInfo' => '0',
      ),
      'cache' => 
      array (
        'type' => 'CFileCache',
        'expireTime' => '3600',
      ),
      'admin' => 
      array (
        'installationId' => '92223791d3416cfe8904c473023eb857',
      ),
      'tour' => 
      array (
        'enable' => '0',
      ),
      'share' => 
      array (
        'enable' => '0',
      ),
      'notification' => 
      array (
        'enable_html5_desktop_notifications' => '0',
      ),
      'installer' => 
      array (
        'sampleData' => '1',
      ),
      'dashboard' => 
      array (
        'showProfilePostForm' => '1',
      ),
      'birthday' => 
      array (
        'shownDays' => '2',
      ),
      'dropbox' => 
      array (
        'warningOnPosting' => '1',
      ),
      'mostactiveusers' => 
      array (
        'noUsers' => '8',
      ),
    ),
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'TBDK CLAN GAMES',
  'language' => 'pt_br',
  'timeZone' => 'America/Belem',
); ?>