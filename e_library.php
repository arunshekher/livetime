<?php
class livetime_library
{

	function config()
	{
		$libraries['moment.js'] = [
			'name'              => 'Moment.js',
			'vendor_url'        => 'https://github.com/moment/moment/',
			'download_url'      => 'http://momentjs.com/downloads/moment.js',
			'library_path'      => '{e_PLUGIN}livetime/js/libs/moment/',
			'version_arguments' => [
				'file'    => 'moment.js',
				//! version : 2.18.1
				'pattern' => '/.*(\d+\.\d+\.\d+)/',
				'lines'   => 5,
			],

			'files' => [

				'js' => [
					'moment.js' => [
						'type' => 'footer'
					]
				]
			],

			'variants' => [
				'minified' => [
					'js' => [
						'min/moment.min.js' => [
							'type' => 'footer'
						]

					]
				]
			]

		];

		$libraries['livestamp.js'] = [
			'name'              => 'Livestamp.js',
			'vendor_url'        => 'http://mattbradley.github.io/livestampjs/',
			'download_url'      => 'https://raw.github.com/mattbradley/livestampjs/1.1.2/livestamp.min.js',
			'library_path'      => '{e_PLUGIN}livetime/js/libs/livestamp/',
			'version_arguments' => [
				'file'    => 'livestamp.js',
				// Livestamp.js / v1.1.2 / (c) 2012 Matt Bradley / MIT License
				'pattern' => '/.*(\d+\.\d+\.\d+)/',
				'lines'   => 2,
			],

		    'files' => [

		    	'js' => [
		    		'livestamp.js' => [
					    'type' => 'footer'
				    ]
			    ],


		    ],

		    'variants' => [
		    	'minified' => [
				    'js' => [
			        	'livestamp.min.js' => [
					        'type' => 'footer'
				        ]
			        ]
			    ]
		    ]

		];



		return $libraries;
	}

}
