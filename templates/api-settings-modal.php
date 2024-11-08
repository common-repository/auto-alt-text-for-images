<?php
// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
	exit( 'Direct access to this file is not allowed.' );
}

$settings = new Forvoyez_Settings();
$api_key  = $settings->get_api_key();
?>
<div class="forvoyez-api-settings-modal hidden fixed inset-0 bg-black bg-opacity-50 overflow-y-auto h-full w-full" style="z-index: 1000;">
    <div class="relative top-1/2 -translate-y-1/2 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">
        <?php
		esc_html_e(
			'ForVoyez API Settings',
			'auto-alt-text-for-images',
		);
?>
        </h2>
        <p class="mb-4 text-gray-600">
        <?php
esc_html_e(
	'Enter your ForVoyez API key below:',
	'auto-alt-text-for-images',
);
?>
        </p>
        <div class="relative">
            <input type="password" class="forvoyez-api-key-input w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="forvoyez_api_key" value="
            <?php
	echo esc_attr(
		$api_key,
	);
?>
            ">
            <button class="forvoyez-toggle-visibility absolute inset-y-0 right-0 pr-3 flex items-center text-gray-700" aria-label="
            <?php
esc_attr_e(
	'Toggle API key visibility',
	'auto-alt-text-for-images',
);
?>
            ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <div class="mt-6 flex justify-end">
            <button class="forvoyez-save-api-key bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">
                <?php
	esc_html_e(
		'Save API Key',
		'auto-alt-text-for-images',
	);
?>
            </button>
            <button class="forvoyez-close-modal bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                <?php
esc_html_e(
	'Close',
	'auto-alt-text-for-images',
);
?>
            </button>
        </div>
    </div>
</div>