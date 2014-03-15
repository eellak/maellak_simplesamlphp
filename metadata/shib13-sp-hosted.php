<?php
/**
 * SAML 1.1 SP configuration for simpleSAMLphp.
 *
 * See: https://rnd.feide.no/content/sp-hosted-metadata-reference
 */

/*
 * Example of hosted Shibboleth 1.3 SP.
 */
//$metadata['__DYNAMIC:1__'] = array(
//	'host' => '__DEFAULT__',
//);

$metadata['https://ma.ellak.gr/simplesaml/module.php/saml/sp/metadata.php/aristeiasp'] = array(
'AssertionConsumerService' => 'http://ma.ellak.gr/simplesaml/module.php/saml2/sp/saml2-acs.php/example-userpass',
'SingleLogoutService'      => 'http://ma.ellak.gr/simplesaml/module.php/saml2/sp/saml2-logout.php/example-userpass',
);

