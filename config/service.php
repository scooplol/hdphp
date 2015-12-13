<?php

return array(
    //服务提供者
    'providers' => array(
        'hdphp\alipay\AlipayProvider',
        'hdphp\arr\ArrProvider',
        'hdphp\backup\backupProvider',
        'hdphp\cache\CacheProvider',
        'hdphp\cart\CartProvider',
        'hdphp\code\CodeProvider',
        'hdphp\config\ConfigProvider',
        'hdphp\cookie\CookieProvider',
        'hdphp\crypt\CryptProvider',
        'hdphp\curl\CurlProvider',
        'hdphp\data\DataProvider',
        'hdphp\db\DbProvider',
        'hdphp\dir\DirProvider',
        'hdphp\error\ErrorProvider',
        'hdphp\html\HtmlProvider',
        'hdphp\image\ImageProvider',
        'hdphp\lang\LangProvider',
        'hdphp\log\LogProvider',
        'hdphp\mail\MailProvider',
        'hdphp\page\PageProvider',
        'hdphp\qq\QqProvider',
        'hdphp\rbac\RbacProvider',
        'hdphp\request\RequestProvider',
        'hdphp\response\ResponseProvider',
        'hdphp\route\RouteProvider',
        'hdphp\session\SessionProvider',
        'hdphp\string\StringProvider',
        'hdphp\upload\UploadProvider',
        'hdphp\url\UrlProvider',
        'hdphp\validate\ValidateProvider',
        'hdphp\view\ViewProvider',
        'hdphp\weixin\WeixinProvider',
        'hdphp\xml\XmlProvider',
        'hdphp\zip\ZipProvider',
        'hdphp\middleware\MiddlewareProvider',
    ),
    //服务外观
    'facades'   => array(
        'App'        => 'hdphp\kernel\AppFacade',
        'Alipay'     => 'hdphp\alipay\ZipFacade',
        'Arr'        => 'hdphp\arr\Arr\'Facade',
        'Backup'     => 'hdphp\backup\BackupFacade',
        'Cache'      => 'hdphp\cache\CacheFacade',
        'Cart'       => 'hdphp\cart\CartFacade',
        'Code'       => 'hdphp\code\CodeFacade',
        'Config'     => 'hdphp\config\ConfigFacade',
        'Cookie'     => 'hdphp\cookie\CookieFacade',
        'Crypt'      => 'hdphp\crypt\CryptFacade',
        'Curl'       => 'hdphp\curl\CurlFacade',
        'Data'       => 'hdphp\data\DataFacade',
        'Db'         => 'hdphp\db\DbFacade',
        'Dir'        => 'hdphp\dir\DirFacade',
        'Error'      => 'hdphp\error\ErrorFacade',
        'Html'       => 'hdphp\html\HtmlFacade',
        'Image'      => 'hdphp\image\ImageFacade',
        'Lang'       => 'hdphp\lang\LangFacade',
        'Log'        => 'hdphp\log\LogFacade',
        'Mail'       => 'hdphp\mail\MailFacade',
        'Page'       => 'hdphp\page\PageFacade',
        'Qq'         => 'hdphp\qq\QqFacade',
        'Rbac'       => 'hdphp\rbac\RbacFacade',
        'Request'    => 'hdphp\request\RequestFacade',
        'Response'   => 'hdphp\response\ResponseFacade',
        'Route'      => 'hdphp\route\RouteFacade',
        'Session'    => 'hdphp\session\SessionFacade',
        'String'     => 'hdphp\string\StringFacade',
        'Upload'     => 'hdphp\upload\UploadFacade',
        'Url'        => 'hdphp\url\UrlFacade',
        'Validate'   => 'hdphp\validate\ValidateFacade',
        'View'       => 'hdphp\view\ViewFacade',
        'Weixin'     => 'hdphp\weixin\WeixinFacade',
        'Xml'        => 'hdphp\xml\XmlFacade',
        'Zip'        => 'hdphp\zip\ZipFacade',
        'Middleware' => 'hdphp\middleware\MiddlewareFacade',
    ),
);