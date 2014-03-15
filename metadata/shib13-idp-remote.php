<?php
/**
 * SAML 1.1 remote IdP metadata for simpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://rnd.feide.no/content/idp-remote-metadata-reference
 */

$metadata['https://ma.ellak.gr'] = array(
        'name' => array('en'=>' LOCALUSERS ',),
        'description'          => 'T akdkas jkasd aksd jask.',
	 'SingleSignOnService'  => 'https://ma.ellak.gr/simplesaml/saml2/idp/SSOService.php',
        'SingleLogoutService'  => 'https://ma.ellak.gr/simplesaml/saml2/idp/SingleLogoutService.php',
        'certFingerprint'      => ''
);


