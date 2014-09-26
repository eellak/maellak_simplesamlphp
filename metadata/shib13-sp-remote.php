<?php
/**
 * SAML 1.1 remote SP metadata for simpleSAMLphp.
 *
 * See: https://rnd.feide.no/content/sp-remote-metadata-reference
 */

/*
 * This is just an example:
 */
$metadata['https://ma.ellak.gr/simplesaml/module.php/saml/sp/metadata.php/aristeiasp'] = array(
	'AssertionConsumerService' => 'http://sp.shiblab.feide.no/Shibboleth.sso/SAML/POST',
	'audience'                 => 'urn:mace:feide:shiblab',
	'base64attributes'         => FALSE,
);

