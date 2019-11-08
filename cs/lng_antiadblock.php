<?php
/**
 *
 * @package phpBB Extension - Anti Adblock
 * @copyright (c) 2019 Picaron
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
		'ANTIADBLOCK_NO_JAVA'						=> 'Pro přístup na naše stránky je potřeba mít aktivovaný JavaScript ve vašem prohlížeči !!!',
		'ANTIADBLOCK_HELP_JAVA'						=> 'Jak zapnout JavaScript ve vašem prohlížeči',
		'ANTIADBLOCK_JAVA_URL'						=> 'https://www.enable-javascript.com/',

		// ACP
		'ACP_ANTIADBLOCK'							=> 'Anti Adblock',
		'ACP_ANTIADBLOCK_EXPLAIN'					=> 'Toto rozšíření varuje uživatele, kteří používají rozšíření pro blokování reklam.<br><br>Je plně konfigurovatelné z této sekce, umožňuje vybrat pozici a typ zobrazovaného varování, času, po který je zobrazováno, prodlevy mezi zobrazeními varování a volbu pro jeho zavření uživatelem.<br>Je možné zvolit, kterým skupinám a na jakých fórech bude varování zobrazováno.<br>Je též možné si vytvořit texty pro různé jazyky podle potřeby.<br>Uživatelům, pro jejichž jazyk nebyla vytvořena modifikace bude zobrazováno varování v angličtině. <br><br>Poznámka: Pamatujte na správnou konfiguraci rolí, oprávnění skupin a fór.',
		'ACP_ANTIADBLOCK_VERSION'					=> 'Verze rozšíření: ',
		'ACP_ANTIADBLOCK_LANGUAGES'					=> 'Data jazyka',
		'ACP_ANTIADBLOCK_SETTINGS'					=> 'Konfigurace',
		'ACP_ANTIADBLOCK_ACTIVE'					=> 'Aktivovat Anti Adblock',
		'ACP_ANTIADBLOCK_PACK_LANGUAGE'				=> 'Jazyk (Balík: %s)',
		'ACP_ANTIADBLOCK_REQUEST_INI'				=> 'Nadpis varování',
		'ACP_ANTIADBLOCK_REQUEST_INI_EXPLAIN'		=> '(*) Povinné pole.',
		'ACP_ANTIADBLOCK_REQUEST_DISABLE'			=> 'Znění varování',
		'ACP_ANTIADBLOCK_REQUEST_DISABLE_EXPLAIN'	=> '(*) Volitelné.',
		'ACP_ANTIADBLOCK_TAKE_HELP'					=> 'Text odkazu',
		'ACP_ANTIADBLOCK_TAKE_HELP_EXPLAIN'			=> '(*) Volitelné.',
		'ACP_ANTIADBLOCK_TAKE_HELP_URL'				=> 'Kompletní URL adresa odkazu',
		'ACP_ANTIADBLOCK_TAKE_HELP_URL_EXPLAIN'		=> '(*) Volitelné.',
		'ACP_ANTIADBLOCK_COOKIE'					=> 'Prodleva mezi jednotlivými varováními',
		'ACP_ANTIADBLOCK_COOKIE_EXPLAIN'			=> 'Tato hodnota nastaví dobu, po kterou bude uživatel moci procházet fórum bez zobrazování varování.<br />Hodnoty nižší, nebo rovné 10 budou brány jako hodnota 0.',
		'ACP_DISPLAY_ANTIADBLOCK_SHOW'				=> 'Zobrazoení varování',
		'ACP_ANTIADBLOCK_SCREEN'					=> 'Na celé obrazovce (uživatel NEMŮŽE procházet fórum)',
		'ACP_ANTIADBLOCK_BANNER'					=> 'Nouzové okno (Uživatel může ČÁSTEČNĚ procházet fórum)',
		'ACP_ANTIADBLOCK_MESSAGE'					=> 'Varování na vrchu (Uživatel MŮŽE procházet fórum)',
		'ACP_ANTIADBLOCK_CAN_CLOSED'				=> 'Zobrazovat tlačítko k zavření varování',
		'ACP_ANTIADBLOCK_CAN_CLOSED_EXPLAIN'		=> 'Pokud je zvoleno NE, uživatel NEMŮŽE zavřít varování.<br />Poznámka: Nepoužívejte společně s volbou “Varování na vrchu”.',
		'ACP_DISPLAY_ANTIADBLOCK_TIME'				=> 'Prodleva před možností zavřít varování',
		'ACP_DISPLAY_ANTIADBLOCK_TIME_EXPLAIN'		=> 'Tato možnost funguje jen v případě, že ve volbě <i>Zobrazovat tlačítko k zavření varování</i><br />je zvoleno ANO.<br />Při zvolení hodnoty VYŠŠÍ, než jedna vteřina se zpráva s varováním<br />sama zavře po uplynutí nastaveného času.<br />Poznámka: Nepoužije se při volbě “Varování na vrchu”.',
		'ACP_UNI_DELAY'								=> 'Vteřin',
		'ACP_DISPLAY_INSTALL_ERROR'					=> 'Anti Adblock nelze nainstalovat. Je vyžadováno PhpBB 3.2.4 nebo vyšší.',
		'ACP_DISPLAY_ANTIADBLOCK_ID_INVALID_TIT'	=> 'Současná velikost (%s znaků) v poli “%s” jazykové mutace (%s) není validní. <br /> Musí být kratší, než 550 znaků a nesmí být prázdné. ',
		'ACP_DISPLAY_ANTIADBLOCK_ID_INVALID_DIS'	=> 'Současná velikost (%s znaků) v poli “%s” jazykové mutace (%s) není validní. <br /> Musí být kratší, než 550 znaků.',
		'ACP_ANTIADBLOCK_PACK_LANGUAGE_NEW'			=> 'Vytvořit nové',
		'ACP_ANTIADBLOCK_NAME_NEW'					=> 'Název (Kód ISO)',
		'ACP_ANTIADBLOCK_NAME_NEW_EXPLAIN'			=> '(*) Povinné pole.',
		'ACP_ANTIADBLOCK_DELETE'					=> 'Smazat',
		'ACP_ANTIADBLOCK_DELETE_EXPLAIN'			=> 'Tuto volbu nelze vrátit.<br>Veškerá data definovaná pro tento jazyk budou ztracena.<br><i>Poznámka: Aplikuje se pouze pro toto rozšíření.<i>',
		'ACP_ANTIADBLOCK_LANGUAGE_EXIST'			=> 'Nová jazyková mutace (%s) již existuje. Není možné vytvořit ji znovu.',
		'LOG_CONFIG_ANTIADBLOCK'					=> '<strong>Nastavení rozšíření Anti Adblock bylo upraveno</strong>',

		// Permissions
		'ACL_CAT_ANTIADBLOCK'						=> 'Anti-Adblock',
		'ACL_U_SHOW_ANTIADBLOCK'					=> 'Zobrazit varování pro DEAKTIVACI Adblocku',
		'ACL_F_SHOW_ANTIADBLOCK'					=> 'Zobrazit varování ve fóru pro DEAKTIVACI Adblocku',
));
