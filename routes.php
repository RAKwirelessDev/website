<?php

const _ROUTES_ = [
    '/' => 'index.php',

    '/company/about/' => 'company-about.php',
    '/company/business/' => 'company-business.php',

    '/integrations/apple-homekit/' => 'integrations-apple-homekit.php',
    '/integrations/amazon-web-services/' => 'integrations-amazon-aws.php',
    '/integrations/amazon-alexa/' => 'integrations-amazon-alexa.php',

    '/resources/faq/' => 'resources-faq.php',
    '/contact-us/' => 'contact-us.php',
    '/legal/terms-of-service/' => 'legal-terms-of-service.php',
    '/legal/privacy-policy/' => 'legal-privacy-policy.php',

    '{PAGE_NOT_FOUND}' => 'error-404.php'
];