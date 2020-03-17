<?php
/**
 * Fonts functions
 *
 * @package Vast
 */

/**
 * List of All Google fonts
 *
 * @since 1.0.0
 */
function vdi_google_fonts_list() {
	$fonts = array(
		array(
			'abeezee' => array(
				'family' => 'ABeeZee',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'abel' => array(
				'family' => 'Abel',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'abhaya-libre' => array(
				'family' => 'Abhaya Libre',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'sinhala',
					'latin',
				),
			),
		),
		array(
			'abril-fatface' => array(
				'family' => 'Abril Fatface',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'aclonica' => array(
				'family' => 'Aclonica',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'acme' => array(
				'family' => 'Acme',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'actor' => array(
				'family' => 'Actor',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'adamina' => array(
				'family' => 'Adamina',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'advent-pro' => array(
				'family' => 'Advent Pro',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'greek',
				),
			),
		),
		array(
			'aguafina-script' => array(
				'family' => 'Aguafina Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'akronim' => array(
				'family' => 'Akronim',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'aladin' => array(
				'family' => 'Aladin',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'aldrich' => array(
				'family' => 'Aldrich',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'alef' => array(
				'family' => 'Alef',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'alegreya' => array(
				'family' => 'Alegreya',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'alegreya-sc' => array(
				'family' => 'Alegreya SC',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'alegreya-sans' => array(
				'family' => 'Alegreya Sans',
				'variants' => array(
					'100',
					'100i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'alegreya-sans-sc' => array(
				'family' => 'Alegreya Sans SC',
				'variants' => array(
					'100',
					'100i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'alex-brush' => array(
				'family' => 'Alex Brush',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'alfa-slab-one' => array(
				'family' => 'Alfa Slab One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'alice' => array(
				'family' => 'Alice',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'alike' => array(
				'family' => 'Alike',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'alike-angular' => array(
				'family' => 'Alike Angular',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'allan' => array(
				'family' => 'Allan',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'allerta' => array(
				'family' => 'Allerta',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'allerta-stencil' => array(
				'family' => 'Allerta Stencil',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'allura' => array(
				'family' => 'Allura',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'almendra' => array(
				'family' => 'Almendra',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'almendra-display' => array(
				'family' => 'Almendra Display',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'almendra-sc' => array(
				'family' => 'Almendra SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'amarante' => array(
				'family' => 'Amarante',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'amaranth' => array(
				'family' => 'Amaranth',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'amatic-sc' => array(
				'family' => 'Amatic SC',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'hebrew',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'amethysta' => array(
				'family' => 'Amethysta',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'amiko' => array(
				'family' => 'Amiko',
				'variants' => array(
					'400',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'amiri' => array(
				'family' => 'Amiri',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'latin',
				),
			),
		),
		array(
			'amita' => array(
				'family' => 'Amita',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'anaheim' => array(
				'family' => 'Anaheim',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'andada' => array(
				'family' => 'Andada',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'andika' => array(
				'family' => 'Andika',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'angkor' => array(
				'family' => 'Angkor',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'annie-use-your-telescope' => array(
				'family' => 'Annie Use Your Telescope',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'anonymous-pro' => array(
				'family' => 'Anonymous Pro',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'antic' => array(
				'family' => 'Antic',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'antic-didone' => array(
				'family' => 'Antic Didone',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'antic-slab' => array(
				'family' => 'Antic Slab',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'anton' => array(
				'family' => 'Anton',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'arapey' => array(
				'family' => 'Arapey',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'arbutus' => array(
				'family' => 'Arbutus',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'arbutus-slab' => array(
				'family' => 'Arbutus Slab',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'architects-daughter' => array(
				'family' => 'Architects Daughter',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'archivo' => array(
				'family' => 'Archivo',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'archivo-black' => array(
				'family' => 'Archivo Black',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'archivo-narrow' => array(
				'family' => 'Archivo Narrow',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'aref-ruqaa' => array(
				'family' => 'Aref Ruqaa',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'arabic',
					'latin',
				),
			),
		),
		array(
			'arima-madurai' => array(
				'family' => 'Arima Madurai',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'arimo' => array(
				'family' => 'Arimo',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'hebrew',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'arizonia' => array(
				'family' => 'Arizonia',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'armata' => array(
				'family' => 'Armata',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'arsenal' => array(
				'family' => 'Arsenal',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'artifika' => array(
				'family' => 'Artifika',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'arvo' => array(
				'family' => 'Arvo',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'arya' => array(
				'family' => 'Arya',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'asap' => array(
				'family' => 'Asap',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'asap-condensed' => array(
				'family' => 'Asap Condensed',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'asar' => array(
				'family' => 'Asar',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'asset' => array(
				'family' => 'Asset',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'assistant' => array(
				'family' => 'Assistant',
				'variants' => array(
					'200',
					'300',
					'400',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'astloch' => array(
				'family' => 'Astloch',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'asul' => array(
				'family' => 'Asul',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'athiti' => array(
				'family' => 'Athiti',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'atma' => array(
				'family' => 'Atma',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'bengali',
					'latin',
				),
			),
		),
		array(
			'atomic-age' => array(
				'family' => 'Atomic Age',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'aubrey' => array(
				'family' => 'Aubrey',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'audiowide' => array(
				'family' => 'Audiowide',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'autour-one' => array(
				'family' => 'Autour One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'average' => array(
				'family' => 'Average',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'average-sans' => array(
				'family' => 'Average Sans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'averia-gruesa-libre' => array(
				'family' => 'Averia Gruesa Libre',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'averia-libre' => array(
				'family' => 'Averia Libre',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'averia-sans-libre' => array(
				'family' => 'Averia Sans Libre',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'averia-serif-libre' => array(
				'family' => 'Averia Serif Libre',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bad-script' => array(
				'family' => 'Bad Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'bahiana' => array(
				'family' => 'Bahiana',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'baloo' => array(
				'family' => 'Baloo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'baloo-bhai' => array(
				'family' => 'Baloo Bhai',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'baloo-bhaijaan' => array(
				'family' => 'Baloo Bhaijaan',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'baloo-bhaina' => array(
				'family' => 'Baloo Bhaina',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'oriya',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'baloo-chettan' => array(
				'family' => 'Baloo Chettan',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'malayalam',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'baloo-da' => array(
				'family' => 'Baloo Da',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'bengali',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'baloo-paaji' => array(
				'family' => 'Baloo Paaji',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'gurmukhi',
				),
			),
		),
		array(
			'baloo-tamma' => array(
				'family' => 'Baloo Tamma',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'kannada',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'baloo-tammudu' => array(
				'family' => 'Baloo Tammudu',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'telugu',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'baloo-thambi' => array(
				'family' => 'Baloo Thambi',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'balthazar' => array(
				'family' => 'Balthazar',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bangers' => array(
				'family' => 'Bangers',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'barlow' => array(
				'family' => 'Barlow',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'barlow-condensed' => array(
				'family' => 'Barlow Condensed',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'barlow-semi-condensed' => array(
				'family' => 'Barlow Semi Condensed',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'barrio' => array(
				'family' => 'Barrio',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'basic' => array(
				'family' => 'Basic',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'battambang' => array(
				'family' => 'Battambang',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'baumans' => array(
				'family' => 'Baumans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bayon' => array(
				'family' => 'Bayon',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'belgrano' => array(
				'family' => 'Belgrano',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bellefair' => array(
				'family' => 'Bellefair',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'belleza' => array(
				'family' => 'Belleza',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'benchnine' => array(
				'family' => 'BenchNine',
				'variants' => array(
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bentham' => array(
				'family' => 'Bentham',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'berkshire-swash' => array(
				'family' => 'Berkshire Swash',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bevan' => array(
				'family' => 'Bevan',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'bigelow-rules' => array(
				'family' => 'Bigelow Rules',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bigshot-one' => array(
				'family' => 'Bigshot One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bilbo' => array(
				'family' => 'Bilbo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bilbo-swash-caps' => array(
				'family' => 'Bilbo Swash Caps',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'biorhyme' => array(
				'family' => 'BioRhyme',
				'variants' => array(
					'200',
					'300',
					'400',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'biorhyme-expanded' => array(
				'family' => 'BioRhyme Expanded',
				'variants' => array(
					'200',
					'300',
					'400',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'biryani' => array(
				'family' => 'Biryani',
				'variants' => array(
					'200',
					'300',
					'400',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'bitter' => array(
				'family' => 'Bitter',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'black-ops-one' => array(
				'family' => 'Black Ops One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bokor' => array(
				'family' => 'Bokor',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'bonbon' => array(
				'family' => 'Bonbon',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'boogaloo' => array(
				'family' => 'Boogaloo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bowlby-one' => array(
				'family' => 'Bowlby One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bowlby-one-sc' => array(
				'family' => 'Bowlby One SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'brawler' => array(
				'family' => 'Brawler',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'bree-serif' => array(
				'family' => 'Bree Serif',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bubblegum-sans' => array(
				'family' => 'Bubblegum Sans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bubbler-one' => array(
				'family' => 'Bubbler One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'buda' => array(
				'family' => 'Buda',
				'variants' => array(
					'300',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'buenard' => array(
				'family' => 'Buenard',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'bungee' => array(
				'family' => 'Bungee',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'bungee-hairline' => array(
				'family' => 'Bungee Hairline',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'bungee-inline' => array(
				'family' => 'Bungee Inline',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'bungee-outline' => array(
				'family' => 'Bungee Outline',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'bungee-shade' => array(
				'family' => 'Bungee Shade',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'butcherman' => array(
				'family' => 'Butcherman',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'butterfly-kids' => array(
				'family' => 'Butterfly Kids',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cabin' => array(
				'family' => 'Cabin',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'cabin-condensed' => array(
				'family' => 'Cabin Condensed',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'cabin-sketch' => array(
				'family' => 'Cabin Sketch',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'caesar-dressing' => array(
				'family' => 'Caesar Dressing',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cagliostro' => array(
				'family' => 'Cagliostro',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cairo' => array(
				'family' => 'Cairo',
				'variants' => array(
					'200',
					'300',
					'400',
					'600',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'latin',
				),
			),
		),
		array(
			'calligraffitti' => array(
				'family' => 'Calligraffitti',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cambay' => array(
				'family' => 'Cambay',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'cambo' => array(
				'family' => 'Cambo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'candal' => array(
				'family' => 'Candal',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cantarell' => array(
				'family' => 'Cantarell',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cantata-one' => array(
				'family' => 'Cantata One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cantora-one' => array(
				'family' => 'Cantora One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'capriola' => array(
				'family' => 'Capriola',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cardo' => array(
				'family' => 'Cardo',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'greek-ext',
					'latin',
					'greek',
				),
			),
		),
		array(
			'carme' => array(
				'family' => 'Carme',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'carrois-gothic' => array(
				'family' => 'Carrois Gothic',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'carrois-gothic-sc' => array(
				'family' => 'Carrois Gothic SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'carter-one' => array(
				'family' => 'Carter One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'catamaran' => array(
				'family' => 'Catamaran',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'caudex' => array(
				'family' => 'Caudex',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'greek-ext',
					'latin',
					'greek',
				),
			),
		),
		array(
			'caveat' => array(
				'family' => 'Caveat',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'caveat-brush' => array(
				'family' => 'Caveat Brush',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cedarville-cursive' => array(
				'family' => 'Cedarville Cursive',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'ceviche-one' => array(
				'family' => 'Ceviche One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'changa' => array(
				'family' => 'Changa',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'latin',
				),
			),
		),
		array(
			'changa-one' => array(
				'family' => 'Changa One',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'chango' => array(
				'family' => 'Chango',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'chathura' => array(
				'family' => 'Chathura',
				'variants' => array(
					'100',
					'300',
					'400',
					'700',
					'800',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'chau-philomene-one' => array(
				'family' => 'Chau Philomene One',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'chela-one' => array(
				'family' => 'Chela One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'chelsea-market' => array(
				'family' => 'Chelsea Market',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'chenla' => array(
				'family' => 'Chenla',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'cherry-cream-soda' => array(
				'family' => 'Cherry Cream Soda',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cherry-swash' => array(
				'family' => 'Cherry Swash',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'chewy' => array(
				'family' => 'Chewy',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'chicle' => array(
				'family' => 'Chicle',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'chivo' => array(
				'family' => 'Chivo',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'chonburi' => array(
				'family' => 'Chonburi',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'cinzel' => array(
				'family' => 'Cinzel',
				'variants' => array(
					'400',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cinzel-decorative' => array(
				'family' => 'Cinzel Decorative',
				'variants' => array(
					'400',
					'700',
					'900',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'clicker-script' => array(
				'family' => 'Clicker Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'coda' => array(
				'family' => 'Coda',
				'variants' => array(
					'400',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'coda-caption' => array(
				'family' => 'Coda Caption',
				'variants' => array(
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'codystar' => array(
				'family' => 'Codystar',
				'variants' => array(
					'300',
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'coiny' => array(
				'family' => 'Coiny',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'combo' => array(
				'family' => 'Combo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'comfortaa' => array(
				'family' => 'Comfortaa',
				'variants' => array(
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'coming-soon' => array(
				'family' => 'Coming Soon',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'concert-one' => array(
				'family' => 'Concert One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'condiment' => array(
				'family' => 'Condiment',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'content' => array(
				'family' => 'Content',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'contrail-one' => array(
				'family' => 'Contrail One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'convergence' => array(
				'family' => 'Convergence',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cookie' => array(
				'family' => 'Cookie',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'copse' => array(
				'family' => 'Copse',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'corben' => array(
				'family' => 'Corben',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cormorant' => array(
				'family' => 'Cormorant',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'cormorant-garamond' => array(
				'family' => 'Cormorant Garamond',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'cormorant-infant' => array(
				'family' => 'Cormorant Infant',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'cormorant-sc' => array(
				'family' => 'Cormorant SC',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'cormorant-unicase' => array(
				'family' => 'Cormorant Unicase',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'cormorant-upright' => array(
				'family' => 'Cormorant Upright',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'courgette' => array(
				'family' => 'Courgette',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cousine' => array(
				'family' => 'Cousine',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'hebrew',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'coustard' => array(
				'family' => 'Coustard',
				'variants' => array(
					'400',
					'900',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'covered-by-your-grace' => array(
				'family' => 'Covered By Your Grace',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'crafty-girls' => array(
				'family' => 'Crafty Girls',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'creepster' => array(
				'family' => 'Creepster',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'crete-round' => array(
				'family' => 'Crete Round',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'crimson-text' => array(
				'family' => 'Crimson Text',
				'variants' => array(
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'croissant-one' => array(
				'family' => 'Croissant One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'crushed' => array(
				'family' => 'Crushed',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'cuprum' => array(
				'family' => 'Cuprum',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'cutive' => array(
				'family' => 'Cutive',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'cutive-mono' => array(
				'family' => 'Cutive Mono',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'damion' => array(
				'family' => 'Damion',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'dancing-script' => array(
				'family' => 'Dancing Script',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'dangrek' => array(
				'family' => 'Dangrek',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'david-libre' => array(
				'family' => 'David Libre',
				'variants' => array(
					'400',
					'500',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'dawning-of-a-new-day' => array(
				'family' => 'Dawning of a New Day',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'days-one' => array(
				'family' => 'Days One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'dekko' => array(
				'family' => 'Dekko',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'delius' => array(
				'family' => 'Delius',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'delius-swash-caps' => array(
				'family' => 'Delius Swash Caps',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'delius-unicase' => array(
				'family' => 'Delius Unicase',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'della-respira' => array(
				'family' => 'Della Respira',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'denk-one' => array(
				'family' => 'Denk One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'devonshire' => array(
				'family' => 'Devonshire',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'dhurjati' => array(
				'family' => 'Dhurjati',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'didact-gothic' => array(
				'family' => 'Didact Gothic',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'diplomata' => array(
				'family' => 'Diplomata',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'diplomata-sc' => array(
				'family' => 'Diplomata SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'domine' => array(
				'family' => 'Domine',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'donegal-one' => array(
				'family' => 'Donegal One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'doppio-one' => array(
				'family' => 'Doppio One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'dorsa' => array(
				'family' => 'Dorsa',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'dosis' => array(
				'family' => 'Dosis',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'dr-sugiyama' => array(
				'family' => 'Dr Sugiyama',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'duru-sans' => array(
				'family' => 'Duru Sans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'dynalight' => array(
				'family' => 'Dynalight',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'eb-garamond' => array(
				'family' => 'EB Garamond',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'eagle-lake' => array(
				'family' => 'Eagle Lake',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'eater' => array(
				'family' => 'Eater',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'economica' => array(
				'family' => 'Economica',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'eczar' => array(
				'family' => 'Eczar',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'el-messiri' => array(
				'family' => 'El Messiri',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'arabic',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'electrolize' => array(
				'family' => 'Electrolize',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'elsie' => array(
				'family' => 'Elsie',
				'variants' => array(
					'400',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'elsie-swash-caps' => array(
				'family' => 'Elsie Swash Caps',
				'variants' => array(
					'400',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'emblema-one' => array(
				'family' => 'Emblema One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'emilys-candy' => array(
				'family' => 'Emilys Candy',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'encode-sans' => array(
				'family' => 'Encode Sans',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'encode-sans-condensed' => array(
				'family' => 'Encode Sans Condensed',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'encode-sans-expanded' => array(
				'family' => 'Encode Sans Expanded',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'encode-sans-semi-condensed' => array(
				'family' => 'Encode Sans Semi Condensed',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'encode-sans-semi-expanded' => array(
				'family' => 'Encode Sans Semi Expanded',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'engagement' => array(
				'family' => 'Engagement',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'englebert' => array(
				'family' => 'Englebert',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'enriqueta' => array(
				'family' => 'Enriqueta',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'erica-one' => array(
				'family' => 'Erica One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'esteban' => array(
				'family' => 'Esteban',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'euphoria-script' => array(
				'family' => 'Euphoria Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ewert' => array(
				'family' => 'Ewert',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'exo' => array(
				'family' => 'Exo',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'exo-2' => array(
				'family' => 'Exo 2',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'expletus-sans' => array(
				'family' => 'Expletus Sans',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'fanwood-text' => array(
				'family' => 'Fanwood Text',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'farsan' => array(
				'family' => 'Farsan',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'fascinate' => array(
				'family' => 'Fascinate',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'fascinate-inline' => array(
				'family' => 'Fascinate Inline',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'faster-one' => array(
				'family' => 'Faster One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'fasthand' => array(
				'family' => 'Fasthand',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'fauna-one' => array(
				'family' => 'Fauna One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'faustina' => array(
				'family' => 'Faustina',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'federant' => array(
				'family' => 'Federant',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'federo' => array(
				'family' => 'Federo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'felipa' => array(
				'family' => 'Felipa',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'fenix' => array(
				'family' => 'Fenix',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'finger-paint' => array(
				'family' => 'Finger Paint',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'fira-mono' => array(
				'family' => 'Fira Mono',
				'variants' => array(
					'400',
					'500',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'fira-sans' => array(
				'family' => 'Fira Sans',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'fira-sans-condensed' => array(
				'family' => 'Fira Sans Condensed',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'fira-sans-extra-condensed' => array(
				'family' => 'Fira Sans Extra Condensed',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'fjalla-one' => array(
				'family' => 'Fjalla One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'fjord-one' => array(
				'family' => 'Fjord One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'flamenco' => array(
				'family' => 'Flamenco',
				'variants' => array(
					'300',
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'flavors' => array(
				'family' => 'Flavors',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'fondamento' => array(
				'family' => 'Fondamento',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'fontdiner-swanky' => array(
				'family' => 'Fontdiner Swanky',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'forum' => array(
				'family' => 'Forum',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'francois-one' => array(
				'family' => 'Francois One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'frank-ruhl-libre' => array(
				'family' => 'Frank Ruhl Libre',
				'variants' => array(
					'300',
					'400',
					'500',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'freckle-face' => array(
				'family' => 'Freckle Face',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'fredericka-the-great' => array(
				'family' => 'Fredericka the Great',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'fredoka-one' => array(
				'family' => 'Fredoka One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'freehand' => array(
				'family' => 'Freehand',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'fresca' => array(
				'family' => 'Fresca',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'frijole' => array(
				'family' => 'Frijole',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'fruktur' => array(
				'family' => 'Fruktur',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'fugaz-one' => array(
				'family' => 'Fugaz One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'gfs-didot' => array(
				'family' => 'GFS Didot',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'greek',
				),
			),
		),
		array(
			'gfs-neohellenic' => array(
				'family' => 'GFS Neohellenic',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'greek',
				),
			),
		),
		array(
			'gabriela' => array(
				'family' => 'Gabriela',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'gafata' => array(
				'family' => 'Gafata',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'galada' => array(
				'family' => 'Galada',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'bengali',
					'latin',
				),
			),
		),
		array(
			'galdeano' => array(
				'family' => 'Galdeano',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'galindo' => array(
				'family' => 'Galindo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'gentium-basic' => array(
				'family' => 'Gentium Basic',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'gentium-book-basic' => array(
				'family' => 'Gentium Book Basic',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'geo' => array(
				'family' => 'Geo',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'geostar' => array(
				'family' => 'Geostar',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'geostar-fill' => array(
				'family' => 'Geostar Fill',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'germania-one' => array(
				'family' => 'Germania One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'gidugu' => array(
				'family' => 'Gidugu',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'gilda-display' => array(
				'family' => 'Gilda Display',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'give-you-glory' => array(
				'family' => 'Give You Glory',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'glass-antiqua' => array(
				'family' => 'Glass Antiqua',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'glegoo' => array(
				'family' => 'Glegoo',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'gloria-hallelujah' => array(
				'family' => 'Gloria Hallelujah',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'goblin-one' => array(
				'family' => 'Goblin One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'gochi-hand' => array(
				'family' => 'Gochi Hand',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'gorditas' => array(
				'family' => 'Gorditas',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'goudy-bookletter-1911' => array(
				'family' => 'Goudy Bookletter 1911',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'graduate' => array(
				'family' => 'Graduate',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'grand-hotel' => array(
				'family' => 'Grand Hotel',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'gravitas-one' => array(
				'family' => 'Gravitas One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'great-vibes' => array(
				'family' => 'Great Vibes',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'griffy' => array(
				'family' => 'Griffy',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'gruppo' => array(
				'family' => 'Gruppo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'gudea' => array(
				'family' => 'Gudea',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'gurajada' => array(
				'family' => 'Gurajada',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'habibi' => array(
				'family' => 'Habibi',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'halant' => array(
				'family' => 'Halant',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'hammersmith-one' => array(
				'family' => 'Hammersmith One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'hanalei' => array(
				'family' => 'Hanalei',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'hanalei-fill' => array(
				'family' => 'Hanalei Fill',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'handlee' => array(
				'family' => 'Handlee',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'hanuman' => array(
				'family' => 'Hanuman',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'happy-monkey' => array(
				'family' => 'Happy Monkey',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'harmattan' => array(
				'family' => 'Harmattan',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'arabic',
					'latin',
				),
			),
		),
		array(
			'headland-one' => array(
				'family' => 'Headland One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'heebo' => array(
				'family' => 'Heebo',
				'variants' => array(
					'100',
					'300',
					'400',
					'500',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'henny-penny' => array(
				'family' => 'Henny Penny',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'herr-von-muellerhoff' => array(
				'family' => 'Herr Von Muellerhoff',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'hind' => array(
				'family' => 'Hind',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'hind-guntur' => array(
				'family' => 'Hind Guntur',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'telugu',
					'latin',
				),
			),
		),
		array(
			'hind-madurai' => array(
				'family' => 'Hind Madurai',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'hind-siliguri' => array(
				'family' => 'Hind Siliguri',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'bengali',
					'latin',
				),
			),
		),
		array(
			'hind-vadodara' => array(
				'family' => 'Hind Vadodara',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'holtwood-one-sc' => array(
				'family' => 'Holtwood One SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'homemade-apple' => array(
				'family' => 'Homemade Apple',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'homenaje' => array(
				'family' => 'Homenaje',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-dw-pica' => array(
				'family' => 'IM Fell DW Pica',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-dw-pica-sc' => array(
				'family' => 'IM Fell DW Pica SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-double-pica' => array(
				'family' => 'IM Fell Double Pica',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-double-pica-sc' => array(
				'family' => 'IM Fell Double Pica SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-english' => array(
				'family' => 'IM Fell English',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-english-sc' => array(
				'family' => 'IM Fell English SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-french-canon' => array(
				'family' => 'IM Fell French Canon',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-french-canon-sc' => array(
				'family' => 'IM Fell French Canon SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-great-primer' => array(
				'family' => 'IM Fell Great Primer',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'im-fell-great-primer-sc' => array(
				'family' => 'IM Fell Great Primer SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'iceberg' => array(
				'family' => 'Iceberg',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'iceland' => array(
				'family' => 'Iceland',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'imprima' => array(
				'family' => 'Imprima',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'inconsolata' => array(
				'family' => 'Inconsolata',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'inder' => array(
				'family' => 'Inder',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'indie-flower' => array(
				'family' => 'Indie Flower',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'inika' => array(
				'family' => 'Inika',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'inknut-antiqua' => array(
				'family' => 'Inknut Antiqua',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'irish-grover' => array(
				'family' => 'Irish Grover',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'istok-web' => array(
				'family' => 'Istok Web',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'italiana' => array(
				'family' => 'Italiana',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'italianno' => array(
				'family' => 'Italianno',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'itim' => array(
				'family' => 'Itim',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'jacques-francois' => array(
				'family' => 'Jacques Francois',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'jacques-francois-shadow' => array(
				'family' => 'Jacques Francois Shadow',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'jaldi' => array(
				'family' => 'Jaldi',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'jim-nightshade' => array(
				'family' => 'Jim Nightshade',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'jockey-one' => array(
				'family' => 'Jockey One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'jolly-lodger' => array(
				'family' => 'Jolly Lodger',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'jomhuria' => array(
				'family' => 'Jomhuria',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'latin',
				),
			),
		),
		array(
			'josefin-sans' => array(
				'family' => 'Josefin Sans',
				'variants' => array(
					'100',
					'100i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'josefin-slab' => array(
				'family' => 'Josefin Slab',
				'variants' => array(
					'100',
					'100i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'joti-one' => array(
				'family' => 'Joti One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'judson' => array(
				'family' => 'Judson',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'julee' => array(
				'family' => 'Julee',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'julius-sans-one' => array(
				'family' => 'Julius Sans One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'junge' => array(
				'family' => 'Junge',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'jura' => array(
				'family' => 'Jura',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'just-another-hand' => array(
				'family' => 'Just Another Hand',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'just-me-again-down-here' => array(
				'family' => 'Just Me Again Down Here',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'kadwa' => array(
				'family' => 'Kadwa',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'kalam' => array(
				'family' => 'Kalam',
				'variants' => array(
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'kameron' => array(
				'family' => 'Kameron',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'kanit' => array(
				'family' => 'Kanit',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'kantumruy' => array(
				'family' => 'Kantumruy',
				'variants' => array(
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'karla' => array(
				'family' => 'Karla',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'karma' => array(
				'family' => 'Karma',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'katibeh' => array(
				'family' => 'Katibeh',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'latin',
				),
			),
		),
		array(
			'kaushan-script' => array(
				'family' => 'Kaushan Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'kavivanar' => array(
				'family' => 'Kavivanar',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'kavoon' => array(
				'family' => 'Kavoon',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'kdam-thmor' => array(
				'family' => 'Kdam Thmor',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'keania-one' => array(
				'family' => 'Keania One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'kelly-slab' => array(
				'family' => 'Kelly Slab',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'kenia' => array(
				'family' => 'Kenia',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'khand' => array(
				'family' => 'Khand',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'khmer' => array(
				'family' => 'khmer',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'khula' => array(
				'family' => 'Khula',
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'kite-one' => array(
				'family' => 'Kite One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'knewave' => array(
				'family' => 'Knewave',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'kotta-one' => array(
				'family' => 'Kotta One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'koulen' => array(
				'family' => 'Koulen',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'kranky' => array(
				'family' => 'Kranky',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'kreon' => array(
				'family' => 'Kreon',
				'variants' => array(
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'kristi' => array(
				'family' => 'Kristi',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'krona-one' => array(
				'family' => 'Krona One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'kumar-one' => array(
				'family' => 'Kumar One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'kumar-one-outline' => array(
				'family' => 'Kumar One Outline',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'kurale' => array(
				'family' => 'Kurale',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
					'devanagari',
				),
			),
		),
		array(
			'la-belle-aurore' => array(
				'family' => 'La Belle Aurore',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'laila' => array(
				'family' => 'Laila',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'lakki-reddy' => array(
				'family' => 'Lakki Reddy',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'lalezar' => array(
				'family' => 'Lalezar',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'lancelot' => array(
				'family' => 'Lancelot',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'lateef' => array(
				'family' => 'Lateef',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'arabic',
					'latin',
				),
			),
		),
		array(
			'lato' => array(
				'family' => 'Lato',
				'variants' => array(
					'100',
					'100i',
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'league-script' => array(
				'family' => 'League Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'leckerli-one' => array(
				'family' => 'Leckerli One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'ledger' => array(
				'family' => 'Ledger',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'lekton' => array(
				'family' => 'Lekton',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'lemon' => array(
				'family' => 'Lemon',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'lemonada' => array(
				'family' => 'Lemonada',
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'libre-barcode-128' => array(
				'family' => 'Libre Barcode 128',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'libre-barcode-128-text' => array(
				'family' => 'Libre Barcode 128 Text',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'libre-barcode-39' => array(
				'family' => 'Libre Barcode 39',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'libre-barcode-39-extended' => array(
				'family' => 'Libre Barcode 39 Extended',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'libre-barcode-39-extended-text' => array(
				'family' => 'Libre Barcode 39 Extended Text',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'libre-barcode-39-text' => array(
				'family' => 'Libre Barcode 39 Text',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'libre-baskerville' => array(
				'family' => 'Libre Baskerville',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'libre-franklin' => array(
				'family' => 'Libre Franklin',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'life-savers' => array(
				'family' => 'Life Savers',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'lilita-one' => array(
				'family' => 'Lilita One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'lily-script-one' => array(
				'family' => 'Lily Script One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'limelight' => array(
				'family' => 'Limelight',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'linden-hill' => array(
				'family' => 'Linden Hill',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'lobster' => array(
				'family' => 'Lobster',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'lobster-two' => array(
				'family' => 'Lobster Two',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'londrina-outline' => array(
				'family' => 'Londrina Outline',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'londrina-shadow' => array(
				'family' => 'Londrina Shadow',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'londrina-sketch' => array(
				'family' => 'Londrina Sketch',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'londrina-solid' => array(
				'family' => 'Londrina Solid',
				'variants' => array(
					'100',
					'300',
					'400',
					'900',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'lora' => array(
				'family' => 'Lora',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'love-ya-like-a-sister' => array(
				'family' => 'Love Ya Like A Sister',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'loved-by-the-king' => array(
				'family' => 'Loved by the King',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'lovers-quarrel' => array(
				'family' => 'Lovers Quarrel',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'luckiest-guy' => array(
				'family' => 'Luckiest Guy',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'lusitana' => array(
				'family' => 'Lusitana',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'lustria' => array(
				'family' => 'Lustria',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'macondo' => array(
				'family' => 'Macondo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'macondo-swash-caps' => array(
				'family' => 'Macondo Swash Caps',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'mada' => array(
				'family' => 'Mada',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'900',
				),
				'subsets' => array(
					'arabic',
					'latin',
				),
			),
		),
		array(
			'magra' => array(
				'family' => 'Magra',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'maiden-orange' => array(
				'family' => 'Maiden Orange',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'maitree' => array(
				'family' => 'Maitree',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'mako' => array(
				'family' => 'Mako',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'mallanna' => array(
				'family' => 'Mallanna',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'mandali' => array(
				'family' => 'Mandali',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'manuale' => array(
				'family' => 'Manuale',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'marcellus' => array(
				'family' => 'Marcellus',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'marcellus-sc' => array(
				'family' => 'Marcellus SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'marck-script' => array(
				'family' => 'Marck Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'margarine' => array(
				'family' => 'Margarine',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'marko-one' => array(
				'family' => 'Marko One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'marmelad' => array(
				'family' => 'Marmelad',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'martel' => array(
				'family' => 'Martel',
				'variants' => array(
					'200',
					'300',
					'400',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'martel-sans' => array(
				'family' => 'Martel Sans',
				'variants' => array(
					'200',
					'300',
					'400',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'marvel' => array(
				'family' => 'Marvel',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'mate' => array(
				'family' => 'Mate',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'mate-sc' => array(
				'family' => 'Mate SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'maven-pro' => array(
				'family' => 'Maven Pro',
				'variants' => array(
					'400',
					'500',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'mclaren' => array(
				'family' => 'McLaren',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'meddon' => array(
				'family' => 'Meddon',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'medievalsharp' => array(
				'family' => 'MedievalSharp',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'medula-one' => array(
				'family' => 'Medula One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'meera-inimai' => array(
				'family' => 'Meera Inimai',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
					'tamil',
				),
			),
		),
		array(
			'megrim' => array(
				'family' => 'Megrim',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'meie-script' => array(
				'family' => 'Meie Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'merienda' => array(
				'family' => 'Merienda',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'merienda-one' => array(
				'family' => 'Merienda One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'merriweather' => array(
				'family' => 'Merriweather',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'merriweather-sans' => array(
				'family' => 'Merriweather Sans',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
					'800',
					'800i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'metal' => array(
				'family' => 'Metal',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'metal-mania' => array(
				'family' => 'Metal Mania',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'metamorphous' => array(
				'family' => 'Metamorphous',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'metrophobic' => array(
				'family' => 'Metrophobic',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'michroma' => array(
				'family' => 'Michroma',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'milonga' => array(
				'family' => 'Milonga',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'miltonian' => array(
				'family' => 'Miltonian',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'miltonian-tattoo' => array(
				'family' => 'Miltonian Tattoo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'miniver' => array(
				'family' => 'Miniver',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'miriam-libre' => array(
				'family' => 'Miriam Libre',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'mirza' => array(
				'family' => 'Mirza',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'latin',
				),
			),
		),
		array(
			'miss-fajardose' => array(
				'family' => 'Miss Fajardose',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mitr' => array(
				'family' => 'Mitr',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'modak' => array(
				'family' => 'Modak',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'modern-antiqua' => array(
				'family' => 'Modern Antiqua',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mogra' => array(
				'family' => 'Mogra',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'molengo' => array(
				'family' => 'Molengo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'molle' => array(
				'family' => 'Molle',
				'variants' => array(
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'monda' => array(
				'family' => 'Monda',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'monofett' => array(
				'family' => 'Monofett',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'monoton' => array(
				'family' => 'Monoton',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'monsieur-la-doulaise' => array(
				'family' => 'Monsieur La Doulaise',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'montaga' => array(
				'family' => 'Montaga',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'montez' => array(
				'family' => 'Montez',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'montserrat' => array(
				'family' => 'Montserrat',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'montserrat-alternates' => array(
				'family' => 'Montserrat Alternates',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'montserrat-subrayada' => array(
				'family' => 'Montserrat Subrayada',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'moul' => array(
				'family' => 'Moul',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'moulpali' => array(
				'family' => 'Moulpali',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'mountains-of-christmas' => array(
				'family' => 'Mountains of Christmas',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'mouse-memoirs' => array(
				'family' => 'Mouse Memoirs',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mr-bedfort' => array(
				'family' => 'Mr Bedfort',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mr-dafoe' => array(
				'family' => 'Mr Dafoe',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mr-de-haviland' => array(
				'family' => 'Mr De Haviland',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mrs-saint-delafield' => array(
				'family' => 'Mrs Saint Delafield',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mrs-sheppards' => array(
				'family' => 'Mrs Sheppards',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'mukta' => array(
				'family' => 'Mukta',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'mukta-mahee' => array(
				'family' => 'Mukta Mahee',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'gurmukhi',
				),
			),
		),
		array(
			'mukta-malar' => array(
				'family' => 'Mukta Malar',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'mukta-vaani' => array(
				'family' => 'Mukta Vaani',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'muli' => array(
				'family' => 'Muli',
				'variants' => array(
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'mystery-quest' => array(
				'family' => 'Mystery Quest',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ntr' => array(
				'family' => 'NTR',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'neucha' => array(
				'family' => 'Neucha',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'neuton' => array(
				'family' => 'Neuton',
				'variants' => array(
					'200',
					'300',
					'400',
					'400i',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'new-rocker' => array(
				'family' => 'New Rocker',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'news-cycle' => array(
				'family' => 'News Cycle',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'niconne' => array(
				'family' => 'Niconne',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'nixie-one' => array(
				'family' => 'Nixie One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nobile' => array(
				'family' => 'Nobile',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'nokora' => array(
				'family' => 'Nokora',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'norican' => array(
				'family' => 'Norican',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'nosifer' => array(
				'family' => 'Nosifer',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'nothing-you-could-do' => array(
				'family' => 'Nothing You Could Do',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'noticia-text' => array(
				'family' => 'Noticia Text',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'noto-sans' => array(
				'family' => 'Noto Sans',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'devanagari',
					'greek',
				),
			),
		),
		array(
			'noto-serif' => array(
				'family' => 'Noto Serif',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'nova-cut' => array(
				'family' => 'Nova Cut',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nova-flat' => array(
				'family' => 'Nova Flat',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nova-mono' => array(
				'family' => 'Nova Mono',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
					'greek',
				),
			),
		),
		array(
			'nova-oval' => array(
				'family' => 'Nova Oval',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nova-round' => array(
				'family' => 'Nova Round',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nova-script' => array(
				'family' => 'Nova Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nova-slim' => array(
				'family' => 'Nova Slim',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nova-square' => array(
				'family' => 'Nova Square',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'numans' => array(
				'family' => 'Numans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'nunito' => array(
				'family' => 'Nunito',
				'variants' => array(
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'nunito-sans' => array(
				'family' => 'Nunito Sans',
				'variants' => array(
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'odor-mean-chey' => array(
				'family' => 'Odor Mean Chey',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'offside' => array(
				'family' => 'Offside',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'old-standard-tt' => array(
				'family' => 'Old Standard TT',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'oldenburg' => array(
				'family' => 'Oldenburg',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'oleo-script' => array(
				'family' => 'Oleo Script',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'oleo-script-swash-caps' => array(
				'family' => 'Oleo Script Swash Caps',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'open-sans' => array(
				'family' => 'Open Sans',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'open-sans-condensed' => array(
				'family' => 'Open Sans Condensed',
				'variants' => array(
					'300',
					'300i',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'oranienbaum' => array(
				'family' => 'Oranienbaum',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'orbitron' => array(
				'family' => 'Orbitron',
				'variants' => array(
					'400',
					'500',
					'700',
					'900',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'oregano' => array(
				'family' => 'Oregano',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'orienta' => array(
				'family' => 'Orienta',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'original-surfer' => array(
				'family' => 'Original Surfer',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'oswald' => array(
				'family' => 'Oswald',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'over-the-rainbow' => array(
				'family' => 'Over the Rainbow',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'overlock' => array(
				'family' => 'Overlock',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'overlock-sc' => array(
				'family' => 'Overlock SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'overpass' => array(
				'family' => 'Overpass',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'overpass-mono' => array(
				'family' => 'Overpass Mono',
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ovo' => array(
				'family' => 'Ovo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'oxygen' => array(
				'family' => 'Oxygen',
				'variants' => array(
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'oxygen-mono' => array(
				'family' => 'Oxygen Mono',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'pt-mono' => array(
				'family' => 'PT Mono',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'pt-sans' => array(
				'family' => 'PT Sans',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'pt-sans-caption' => array(
				'family' => 'PT Sans Caption',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'pt-sans-narrow' => array(
				'family' => 'PT Sans Narrow',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'pt-serif' => array(
				'family' => 'PT Serif',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'pt-serif-caption' => array(
				'family' => 'PT Serif Caption',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'pacifico' => array(
				'family' => 'Pacifico',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'padauk' => array(
				'family' => 'Padauk',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'myanmar',
					'latin',
				),
			),
		),
		array(
			'palanquin' => array(
				'family' => 'Palanquin',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'palanquin-dark' => array(
				'family' => 'Palanquin Dark',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'pangolin' => array(
				'family' => 'Pangolin',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'paprika' => array(
				'family' => 'Paprika',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'parisienne' => array(
				'family' => 'Parisienne',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'passero-one' => array(
				'family' => 'Passero One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'passion-one' => array(
				'family' => 'Passion One',
				'variants' => array(
					'400',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'pathway-gothic-one' => array(
				'family' => 'Pathway Gothic One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'patrick-hand' => array(
				'family' => 'Patrick Hand',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'patrick-hand-sc' => array(
				'family' => 'Patrick Hand SC',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'pattaya' => array(
				'family' => 'Pattaya',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'patua-one' => array(
				'family' => 'Patua One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'pavanam' => array(
				'family' => 'Pavanam',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'tamil',
				),
			),
		),
		array(
			'paytone-one' => array(
				'family' => 'Paytone One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'peddana' => array(
				'family' => 'Peddana',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'peralta' => array(
				'family' => 'Peralta',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'permanent-marker' => array(
				'family' => 'Permanent Marker',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'petit-formal-script' => array(
				'family' => 'Petit Formal Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'petrona' => array(
				'family' => 'Petrona',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'philosopher' => array(
				'family' => 'Philosopher',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'piedra' => array(
				'family' => 'Piedra',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'pinyon-script' => array(
				'family' => 'Pinyon Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'pirata-one' => array(
				'family' => 'Pirata One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'plaster' => array(
				'family' => 'Plaster',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'play' => array(
				'family' => 'Play',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'playball' => array(
				'family' => 'Playball',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'playfair-display' => array(
				'family' => 'Playfair Display',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'playfair-display-sc' => array(
				'family' => 'Playfair Display SC',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'podkova' => array(
				'family' => 'Podkova',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'poiret-one' => array(
				'family' => 'Poiret One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'poller-one' => array(
				'family' => 'Poller One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'poly' => array(
				'family' => 'Poly',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'pompiere' => array(
				'family' => 'Pompiere',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'pontano-sans' => array(
				'family' => 'Pontano Sans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'poppins' => array(
				'family' => 'Poppins',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'port-lligat-sans' => array(
				'family' => 'Port Lligat Sans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'port-lligat-slab' => array(
				'family' => 'Port Lligat Slab',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'pragati-narrow' => array(
				'family' => 'Pragati Narrow',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'prata' => array(
				'family' => 'Prata',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'preahvihear' => array(
				'family' => 'Preahvihear',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'press-start-2p' => array(
				'family' => 'Press Start 2P',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'pridi' => array(
				'family' => 'Pridi',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'princess-sofia' => array(
				'family' => 'Princess Sofia',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'prociono' => array(
				'family' => 'Prociono',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'prompt' => array(
				'family' => 'Prompt',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'prosto-one' => array(
				'family' => 'Prosto One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'proza-libre' => array(
				'family' => 'Proza Libre',
				'variants' => array(
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'puritan' => array(
				'family' => 'Puritan',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'purple-purse' => array(
				'family' => 'Purple Purse',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'quando' => array(
				'family' => 'Quando',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'quantico' => array(
				'family' => 'Quantico',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'quattrocento' => array(
				'family' => 'Quattrocento',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'quattrocento-sans' => array(
				'family' => 'Quattrocento Sans',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'questrial' => array(
				'family' => 'Questrial',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'quicksand' => array(
				'family' => 'Quicksand',
				'variants' => array(
					'300',
					'400',
					'500',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'quintessential' => array(
				'family' => 'Quintessential',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'qwigley' => array(
				'family' => 'Qwigley',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'racing-sans-one' => array(
				'family' => 'Racing Sans One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'radley' => array(
				'family' => 'Radley',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rajdhani' => array(
				'family' => 'Rajdhani',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'rakkas' => array(
				'family' => 'Rakkas',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'arabic',
					'latin',
				),
			),
		),
		array(
			'raleway' => array(
				'family' => 'Raleway',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'raleway-dots' => array(
				'family' => 'Raleway Dots',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ramabhadra' => array(
				'family' => 'Ramabhadra',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'ramaraja' => array(
				'family' => 'Ramaraja',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'rambla' => array(
				'family' => 'Rambla',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rammetto-one' => array(
				'family' => 'Rammetto One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ranchers' => array(
				'family' => 'Ranchers',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rancho' => array(
				'family' => 'Rancho',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'ranga' => array(
				'family' => 'Ranga',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'rasa' => array(
				'family' => 'Rasa',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'rationale' => array(
				'family' => 'Rationale',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'ravi-prakash' => array(
				'family' => 'Ravi Prakash',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'redressed' => array(
				'family' => 'Redressed',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'reem-kufi' => array(
				'family' => 'Reem Kufi',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'arabic',
					'latin',
				),
			),
		),
		array(
			'reenie-beanie' => array(
				'family' => 'Reenie Beanie',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'revalia' => array(
				'family' => 'Revalia',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rhodium-libre' => array(
				'family' => 'Rhodium Libre',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'ribeye' => array(
				'family' => 'Ribeye',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ribeye-marrow' => array(
				'family' => 'Ribeye Marrow',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'righteous' => array(
				'family' => 'Righteous',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'risque' => array(
				'family' => 'Risque',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'roboto' => array(
				'family' => 'Roboto',
				'variants' => array(
					'100',
					'100i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'roboto-condensed' => array(
				'family' => 'Roboto Condensed',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'roboto-mono' => array(
				'family' => 'Roboto Mono',
				'variants' => array(
					'100',
					'100i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'roboto-slab' => array(
				'family' => 'Roboto Slab',
				'variants' => array(
					'100',
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'rochester' => array(
				'family' => 'Rochester',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'rock-salt' => array(
				'family' => 'Rock Salt',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'rokkitt' => array(
				'family' => 'Rokkitt',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'romanesco' => array(
				'family' => 'Romanesco',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ropa-sans' => array(
				'family' => 'Ropa Sans',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rosario' => array(
				'family' => 'Rosario',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'rosarivo' => array(
				'family' => 'Rosarivo',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rouge-script' => array(
				'family' => 'Rouge Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'rozha-one' => array(
				'family' => 'Rozha One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'rubik' => array(
				'family' => 'Rubik',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'hebrew',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'rubik-mono-one' => array(
				'family' => 'Rubik Mono One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'ruda' => array(
				'family' => 'Ruda',
				'variants' => array(
					'400',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rufina' => array(
				'family' => 'Rufina',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ruge-boogie' => array(
				'family' => 'Ruge Boogie',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ruluko' => array(
				'family' => 'Ruluko',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rum-raisin' => array(
				'family' => 'Rum Raisin',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'ruslan-display' => array(
				'family' => 'Ruslan Display',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'russo-one' => array(
				'family' => 'Russo One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'ruthie' => array(
				'family' => 'Ruthie',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'rye' => array(
				'family' => 'Rye',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sacramento' => array(
				'family' => 'Sacramento',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sahitya' => array(
				'family' => 'Sahitya',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'sail' => array(
				'family' => 'Sail',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'saira' => array(
				'family' => 'Saira',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'saira-condensed' => array(
				'family' => 'Saira Condensed',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'saira-extra-condensed' => array(
				'family' => 'Saira Extra Condensed',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'saira-semi-condensed' => array(
				'family' => 'Saira Semi Condensed',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'salsa' => array(
				'family' => 'Salsa',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'sanchez' => array(
				'family' => 'Sanchez',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sancreek' => array(
				'family' => 'Sancreek',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sansita' => array(
				'family' => 'Sansita',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sarala' => array(
				'family' => 'Sarala',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'sarina' => array(
				'family' => 'Sarina',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sarpanch' => array(
				'family' => 'Sarpanch',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'satisfy' => array(
				'family' => 'Satisfy',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'scada' => array(
				'family' => 'Scada',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'scheherazade' => array(
				'family' => 'Scheherazade',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'arabic',
					'latin',
				),
			),
		),
		array(
			'schoolbell' => array(
				'family' => 'Schoolbell',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'scope-one' => array(
				'family' => 'Scope One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'seaweed-script' => array(
				'family' => 'Seaweed Script',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'secular-one' => array(
				'family' => 'Secular One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'sedgwick-ave' => array(
				'family' => 'Sedgwick Ave',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'sedgwick-ave-display' => array(
				'family' => 'Sedgwick Ave Display',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'sevillana' => array(
				'family' => 'Sevillana',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'seymour-one' => array(
				'family' => 'Seymour One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'shadows-into-light' => array(
				'family' => 'Shadows Into Light',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'shadows-into-light-two' => array(
				'family' => 'Shadows Into Light Two',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'shanti' => array(
				'family' => 'Shanti',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'share' => array(
				'family' => 'Share',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'share-tech' => array(
				'family' => 'Share Tech',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'share-tech-mono' => array(
				'family' => 'Share Tech Mono',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'shojumaru' => array(
				'family' => 'Shojumaru',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'short-stack' => array(
				'family' => 'Short Stack',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'shrikhand' => array(
				'family' => 'Shrikhand',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'gujarati',
					'latin',
				),
			),
		),
		array(
			'siemreap' => array(
				'family' => 'Siemreap',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'sigmar-one' => array(
				'family' => 'Sigmar One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'signika' => array(
				'family' => 'Signika',
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'signika-negative' => array(
				'family' => 'Signika Negative',
				'variants' => array(
					'300',
					'400',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'simonetta' => array(
				'family' => 'Simonetta',
				'variants' => array(
					'400',
					'400i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sintony' => array(
				'family' => 'Sintony',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sirin-stencil' => array(
				'family' => 'Sirin Stencil',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'six-caps' => array(
				'family' => 'Six Caps',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'skranji' => array(
				'family' => 'Skranji',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'slabo-13px' => array(
				'family' => 'Slabo 13px',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'slabo-27px' => array(
				'family' => 'Slabo 27px',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'slackey' => array(
				'family' => 'Slackey',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'smokum' => array(
				'family' => 'Smokum',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'smythe' => array(
				'family' => 'Smythe',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'sniglet' => array(
				'family' => 'Sniglet',
				'variants' => array(
					'400',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'snippet' => array(
				'family' => 'Snippet',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'snowburst-one' => array(
				'family' => 'Snowburst One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sofadi-one' => array(
				'family' => 'Sofadi One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'sofia' => array(
				'family' => 'Sofia',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'sonsie-one' => array(
				'family' => 'Sonsie One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'sorts-mill-goudy' => array(
				'family' => 'Sorts Mill Goudy',
				'variants' => array(
					'400',
					'400i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'source-code-pro' => array(
				'family' => 'Source Code Pro',
				'variants' => array(
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'source-sans-pro' => array(
				'family' => 'Source Sans Pro',
				'variants' => array(
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'source-serif-pro' => array(
				'family' => 'Source Serif Pro',
				'variants' => array(
					'400',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'space-mono' => array(
				'family' => 'Space Mono',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'special-elite' => array(
				'family' => 'Special Elite',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'spectral' => array(
				'family' => 'Spectral',
				'variants' => array(
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'spectral-sc' => array(
				'family' => 'Spectral SC',
				'variants' => array(
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'spicy-rice' => array(
				'family' => 'Spicy Rice',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'spinnaker' => array(
				'family' => 'Spinnaker',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'spirax' => array(
				'family' => 'Spirax',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'squada-one' => array(
				'family' => 'Squada One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'sree-krushnadevaraya' => array(
				'family' => 'Sree Krushnadevaraya',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'sriracha' => array(
				'family' => 'Sriracha',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'stalemate' => array(
				'family' => 'Stalemate',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'stalinist-one' => array(
				'family' => 'Stalinist One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'stardos-stencil' => array(
				'family' => 'Stardos Stencil',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'stint-ultra-condensed' => array(
				'family' => 'Stint Ultra Condensed',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'stint-ultra-expanded' => array(
				'family' => 'Stint Ultra Expanded',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'stoke' => array(
				'family' => 'Stoke',
				'variants' => array(
					'300',
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'strait' => array(
				'family' => 'Strait',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'sue-ellen-francisco' => array(
				'family' => 'Sue Ellen Francisco',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'suez-one' => array(
				'family' => 'Suez One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'sumana' => array(
				'family' => 'Sumana',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'sunshiney' => array(
				'family' => 'Sunshiney',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'supermercado-one' => array(
				'family' => 'Supermercado One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'sura' => array(
				'family' => 'Sura',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'suranna' => array(
				'family' => 'Suranna',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'suravaram' => array(
				'family' => 'Suravaram',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'suwannaphum' => array(
				'family' => 'Suwannaphum',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'swanky-and-moo-moo' => array(
				'family' => 'Swanky and Moo Moo',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'syncopate' => array(
				'family' => 'Syncopate',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'tangerine' => array(
				'family' => 'Tangerine',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'taprom' => array(
				'family' => 'Taprom',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'khmer',
				),
			),
		),
		array(
			'tauri' => array(
				'family' => 'Tauri',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'taviraj' => array(
				'family' => 'Taviraj',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'teko' => array(
				'family' => 'Teko',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'telex' => array(
				'family' => 'Telex',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'tenali-ramakrishna' => array(
				'family' => 'Tenali Ramakrishna',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'tenor-sans' => array(
				'family' => 'Tenor Sans',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'text-me-one' => array(
				'family' => 'Text Me One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'the-girl-next-door' => array(
				'family' => 'The Girl Next Door',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'tienne' => array(
				'family' => 'Tienne',
				'variants' => array(
					'400',
					'700',
					'900',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'tillana' => array(
				'family' => 'Tillana',
				'variants' => array(
					'400',
					'500',
					'600',
					'700',
					'800',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'timmana' => array(
				'family' => 'Timmana',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'telugu',
					'latin',
				),
			),
		),
		array(
			'tinos' => array(
				'family' => 'Tinos',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'hebrew',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'titan-one' => array(
				'family' => 'Titan One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'titillium-web' => array(
				'family' => 'Titillium Web',
				'variants' => array(
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'trade-winds' => array(
				'family' => 'Trade Winds',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'trirong' => array(
				'family' => 'Trirong',
				'variants' => array(
					'100',
					'100i',
					'200',
					'200i',
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
					'800',
					'800i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'thai',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'trocchi' => array(
				'family' => 'Trocchi',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'trochut' => array(
				'family' => 'Trochut',
				'variants' => array(
					'400',
					'400i',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'trykker' => array(
				'family' => 'Trykker',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'tulpen-one' => array(
				'family' => 'Tulpen One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'ubuntu' => array(
				'family' => 'Ubuntu',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'ubuntu-condensed' => array(
				'family' => 'Ubuntu Condensed',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'ubuntu-mono' => array(
				'family' => 'Ubuntu Mono',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'greek-ext',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'ultra' => array(
				'family' => 'Ultra',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'uncial-antiqua' => array(
				'family' => 'Uncial Antiqua',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'underdog' => array(
				'family' => 'Underdog',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'unica-one' => array(
				'family' => 'Unica One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'unifrakturcook' => array(
				'family' => 'UnifrakturCook',
				'variants' => array(
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'unifrakturmaguntia' => array(
				'family' => 'UnifrakturMaguntia',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'unkempt' => array(
				'family' => 'Unkempt',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'unlock' => array(
				'family' => 'Unlock',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'unna' => array(
				'family' => 'Unna',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'vt323' => array(
				'family' => 'VT323',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
				),
			),
		),
		array(
			'vampiro-one' => array(
				'family' => 'Vampiro One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'varela' => array(
				'family' => 'Varela',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'varela-round' => array(
				'family' => 'Varela Round',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'hebrew',
					'latin',
				),
			),
		),
		array(
			'vast-shadow' => array(
				'family' => 'Vast Shadow',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'vesper-libre' => array(
				'family' => 'Vesper Libre',
				'variants' => array(
					'400',
					'500',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'vibur' => array(
				'family' => 'Vibur',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'vidaloka' => array(
				'family' => 'Vidaloka',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'viga' => array(
				'family' => 'Viga',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'voces' => array(
				'family' => 'Voces',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'volkhov' => array(
				'family' => 'Volkhov',
				'variants' => array(
					'400',
					'400i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'vollkorn' => array(
				'family' => 'Vollkorn',
				'variants' => array(
					'400',
					'400i',
					'600',
					'600i',
					'700',
					'700i',
					'900',
					'900i',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
					'greek',
				),
			),
		),
		array(
			'vollkorn-sc' => array(
				'family' => 'Vollkorn SC',
				'variants' => array(
					'400',
					'600',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'voltaire' => array(
				'family' => 'Voltaire',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'waiting-for-the-sunrise' => array(
				'family' => 'Waiting for the Sunrise',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'wallpoet' => array(
				'family' => 'Wallpoet',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'walter-turncoat' => array(
				'family' => 'Walter Turncoat',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'warnes' => array(
				'family' => 'Warnes',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'wellfleet' => array(
				'family' => 'Wellfleet',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'wendy-one' => array(
				'family' => 'Wendy One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'wire-one' => array(
				'family' => 'Wire One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'work-sans' => array(
				'family' => 'Work Sans',
				'variants' => array(
					'100',
					'200',
					'300',
					'400',
					'500',
					'600',
					'700',
					'800',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'yanone-kaffeesatz' => array(
				'family' => 'Yanone Kaffeesatz',
				'variants' => array(
					'200',
					'300',
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'yantramanav' => array(
				'family' => 'Yantramanav',
				'variants' => array(
					'100',
					'300',
					'400',
					'500',
					'700',
					'900',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'yatra-one' => array(
				'family' => 'Yatra One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
					'devanagari',
				),
			),
		),
		array(
			'yellowtail' => array(
				'family' => 'Yellowtail',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'yeseva-one' => array(
				'family' => 'Yeseva One',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin-ext',
					'cyrillic-ext',
					'vietnamese',
					'latin',
					'cyrillic',
				),
			),
		),
		array(
			'yesteryear' => array(
				'family' => 'Yesteryear',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'yrsa' => array(
				'family' => 'Yrsa',
				'variants' => array(
					'300',
					'400',
					'500',
					'600',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'zeyada' => array(
				'family' => 'Zeyada',
				'variants' => array(
					'400',
				),
				'subsets' => array(
					'latin',
				),
			),
		),
		array(
			'zilla-slab' => array(
				'family' => 'Zilla Slab',
				'variants' => array(
					'300',
					'300i',
					'400',
					'400i',
					'500',
					'500i',
					'600',
					'600i',
					'700',
					'700i',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
		array(
			'zilla-slab-highlight' => array(
				'family' => 'Zilla Slab Highlight',
				'variants' => array(
					'400',
					'700',
				),
				'subsets' => array(
					'latin-ext',
					'latin',
				),
			),
		),
	);

	return $fonts;
}
