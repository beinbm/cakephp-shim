<?php
// For controller pagination
Configure::write('Paginator.paramType', 'querystring');

// For CakeDC search plugin
Configure::write('Search', [
		'Prg' => [
			'commonProcess' => ['paramType' => 'querystring', 'filterEmpty' => true],
			'presetForm' => ['paramType' => 'querystring']
		]
]);

// Shims - add them in your own bootstrap/config
//Configure::write('Shim.checkPaths', true);
//Configure::write('Shim.warnAboutNamedParams', true);
//Configure::write('Shim.handleNamedParams', true);
//Configure::write('Shim.warnAboutMissingContain', true);
//Configure::write('Shim.monitorHeaders', true);
//Configure::write('Shim.deprecateField', true);
//Configure::write('Shim.deprecateSaveField', true);
