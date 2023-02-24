<?php
return [
    'strict' => true,
    'debug' => false,
    'sp' => [
        'entityId' => env('SAML_SP_ENTITY_ID'),
        'assertionConsumerService' => [
            'url' => env('SAML_SP_ACS_URL'),
            'binding' => \OneLogin\Saml2\Binding::HTTP_POST,
        ],
        'singleLogoutService' => [
            'url' => env('SAML_SP_SLS_URL'),
            'binding' => \OneLogin\Saml2\Binding::HTTP_REDIRECT,
        ],
        'NameIDFormat' => \OneLogin\Saml2\Constants::NAMEID_UNSPECIFIED,
        'x509cert' => env('SAML_SP_X509_CERT'),
        'privateKey' => env('SAML_SP_PRIVATE_KEY'),
        'security' => [
            'authnRequestsSigned' => true,
            'logoutRequestSigned' => true,
            'logoutResponseSigned' => true,
            'signMetadata' => true,
            'wantMessagesSigned' => true,
            'wantAssertionsSigned' => true,
        ],
    ],
    'idp' => [
        'entityId' => env('SAML_IDP_ENTITY_ID'),
        'singleSignOnService' => [
            'url' => env('SAML_IDP_SSO_URL'),
            'binding' => \OneLogin\Saml2\Binding::HTTP_REDIRECT,
        ],
        'singleLogoutService' => [
            'url' => env('SAML_IDP_SLS_URL'),
            'binding' => \OneLogin\Saml2\Binding::HTTP_REDIRECT,
        ],
        'x509cert' => env('SAML_IDP_X509_CERT'),
    ],
];


?>