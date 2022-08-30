<?php

/**
 * PrestaShop GoPay gateway lists of supported
 * options default
 * Lists of supported options for languages,
 * payment methods, banks, shipping methods,
 * countries and currencies
 *
 * @package   PrestaShop GoPay gateway
 * @author    GoPay
 * @link      https://www.gopay.com/
 * @copyright 2022 GoPay
 * @since     1.0.0
 */

class PrestashopGopayOptions
{
	/**
	 * Contructor
	 *
	 */
	public function __construct()
	{
	}

	/**
	 * Return supported currencies that
	 * can be used in the gateway
	 *
	 * @return array
	 */
	public function supported_currencies(): array
	{
		$module = Module::getInstanceByName( 'prestashopgopay' );

		return array(
			'CZK' => $module->l( 'Czech koruna', get_class( $this ) ),
			'EUR' => $module->l( 'Euro', get_class( $this ) ),
			'PLN' => $module->l( 'Polish złoty', get_class( $this ) ),
			'USD' => $module->l( 'United States dollar', get_class( $this ) ),
			'GBP' => $module->l( 'Pound sterling', get_class( $this ) ),
			'HUF' => $module->l( 'Hungarian forint', get_class( $this ) ),
			'RON' => $module->l( 'Romanian lei', get_class( $this ) ),
			'BGN' => $module->l( 'Bulgarian lev', get_class( $this ) ),
			'HRK' => $module->l( 'Croatian kuna', get_class( $this ) ),
		);
	}

	/**
	 * Return supported languages that
	 * can be used in the gateway
	 *
	 * @return array
	 */
	public function supported_languages(): array
	{

		$module = Module::getInstanceByName( 'prestashopgopay' );

		return array(
			'CS' => array( 'key' => 'CS',
				'name' => $module->l( 'Czech', get_class( $this ) ) ),
			'SK' => array( 'key' => 'SK',
				'name' => $module->l( 'Slovak', get_class( $this ) ) ),
			'EN' => array( 'key' => 'EN',
				'name' => $module->l( 'English', get_class( $this ) ) ),
			'DE' => array( 'key' => 'DE',
				'name' => $module->l( 'German', get_class( $this ) ) ),
			'RU' => array( 'key' => 'RU',
				'name' => $module->l( 'Russian', get_class( $this ) ) ),
			'PL' => array( 'key' => 'PL',
				'name' => $module->l( 'Polish', get_class( $this ) ) ),
			'HU' => array( 'key' => 'HU',
				'name' => $module->l( 'Hungarian', get_class( $this ) ) ),
			'RO' => array( 'key' => 'RO',
				'name' => $module->l( 'Romanian', get_class( $this ) ) ),
			'BG' => array( 'key' => 'BG',
				'name' => $module->l( 'Bulgarian', get_class( $this ) ) ),
			'HR' => array( 'key' => 'HR',
				'name' => $module->l( 'Croatian', get_class( $this ) ) ),
			'IT' => array( 'key' => 'IT',
				'name' => $module->l( 'Italian', get_class( $this ) ) ),
			'FR' => array( 'key' => 'FR',
				'name' => $module->l( 'French', get_class( $this ) ) ),
			'ES' => array( 'key' => 'ES',
				'name' => $module->l( 'Spanish', get_class( $this ) ) ),
			'UK' => array( 'key' => 'UK',
				'name' => $module->l( 'Ukrainian', get_class( $this ) ) ),
		);
	}

	/**
	 * Return countries as keys and the language spoken
	 * in the country as values.
	 * If country has more than one spoken language than
	 * the one with the highest number of speakers is returned.
	 *
	 * @return array
	 */
	public static function country_to_language(): array
	{
		// Extracted from geonames.org (http://download.geonames.org/export/dump/countryInfo.txt)
		return array(
			'AD' => 'CA', 'AE' => 'AR', 'AF' => 'FA', 'AG' => 'EN', 'AI' => 'EN', 'AL' => 'SQ', 'AM' => 'HY',
			'AO' => 'PT', 'AR' => 'ES', 'AS' => 'EN', 'AT' => 'DE', 'AU' => 'EN', 'AW' => 'NL', 'AX' => 'SV',
			'AZ' => 'AZ', 'BA' => 'BS', 'BB' => 'EN', 'BD' => 'BN', 'BE' => 'NL', 'BF' => 'FR', 'BG' => 'BG',
			'BH' => 'AR', 'BI' => 'FR', 'BJ' => 'FR', 'BL' => 'FR', 'BM' => 'EN', 'BN' => 'MS', 'BO' => 'ES',
			'BQ' => 'NL', 'BR' => 'PT', 'BS' => 'EN', 'BT' => 'DZ', 'BW' => 'EN', 'BY' => 'BE', 'BZ' => 'EN',
			'CA' => 'EN', 'CC' => 'MS', 'CD' => 'FR', 'CF' => 'FR', 'CG' => 'FR', 'CH' => 'DE', 'CI' => 'FR',
			'CK' => 'EN', 'CL' => 'ES', 'CM' => 'EN', 'CN' => 'ZH', 'CO' => 'ES', 'CR' => 'ES', 'CU' => 'ES',
			'CV' => 'PT', 'CW' => 'NL', 'CX' => 'EN', 'CY' => 'EL', 'CZ' => 'CS', 'DE' => 'DE', 'DJ' => 'FR',
			'DK' => 'DA', 'DM' => 'EN', 'DO' => 'ES', 'DZ' => 'AR', 'EC' => 'ES', 'EE' => 'ET', 'EG' => 'AR',
			'EH' => 'AR', 'ER' => 'AA', 'ES' => 'ES', 'ET' => 'AM', 'FI' => 'FI', 'FJ' => 'EN', 'FK' => 'EN',
			'FM' => 'EN', 'FO' => 'FO', 'FR' => 'FR', 'GA' => 'FR', 'GB' => 'EN', 'GD' => 'EN', 'GE' => 'KA',
			'GF' => 'FR', 'GG' => 'EN', 'GH' => 'EN', 'GI' => 'EN', 'GL' => 'KL', 'GM' => 'EN', 'GN' => 'FR',
			'GP' => 'FR', 'GQ' => 'ES', 'GR' => 'EL', 'GS' => 'EN', 'GT' => 'ES', 'GU' => 'EN', 'GW' => 'PT',
			'GY' => 'EN', 'HK' => 'ZH', 'HN' => 'ES', 'HR' => 'HR', 'HT' => 'HT', 'HU' => 'HU', 'ID' => 'ID',
			'IE' => 'EN', 'IL' => 'HE', 'IM' => 'EN', 'IN' => 'EN', 'IO' => 'EN', 'IQ' => 'AR', 'IR' => 'FA',
			'IS' => 'IS', 'IT' => 'IT', 'JE' => 'EN', 'JM' => 'EN', 'JO' => 'AR', 'JP' => 'JA', 'KE' => 'EN',
			'KG' => 'KY', 'KH' => 'KM', 'KI' => 'EN', 'KM' => 'AR', 'KN' => 'EN', 'KP' => 'KO', 'KR' => 'KO',
			'XK' => 'SQ', 'KW' => 'AR', 'KY' => 'EN', 'KZ' => 'KK', 'LA' => 'LO', 'LB' => 'AR', 'LC' => 'EN',
			'LI' => 'DE', 'LK' => 'SI', 'LR' => 'EN', 'LS' => 'EN', 'LT' => 'LT', 'LU' => 'LB', 'LV' => 'LV',
			'LY' => 'AR', 'MA' => 'AR', 'MC' => 'FR', 'MD' => 'RO', 'ME' => 'SR', 'MF' => 'FR', 'MG' => 'FR',
			'MH' => 'MH', 'MK' => 'MK', 'ML' => 'FR', 'MM' => 'MY', 'MN' => 'MN', 'MO' => 'ZH', 'MP' => 'FIL',
			'MQ' => 'FR', 'MR' => 'AR', 'MS' => 'EN', 'MT' => 'MT', 'MU' => 'EN', 'MV' => 'DV', 'MW' => 'NY',
			'MX' => 'ES', 'MY' => 'MS', 'MZ' => 'PT', 'NA' => 'EN', 'NC' => 'FR', 'NE' => 'FR', 'NF' => 'EN',
			'NG' => 'EN', 'NI' => 'ES', 'NL' => 'NL', 'NO' => 'NO', 'NP' => 'NE', 'NR' => 'NA', 'NU' => 'NIU',
			'NZ' => 'EN', 'OM' => 'AR', 'PA' => 'ES', 'PE' => 'ES', 'PF' => 'FR', 'PG' => 'EN', 'PH' => 'TL',
			'PK' => 'UR', 'PL' => 'PL', 'PM' => 'FR', 'PN' => 'EN', 'PR' => 'EN', 'PS' => 'AR', 'PT' => 'PT',
			'PW' => 'PAU', 'PY' => 'ES', 'QA' => 'AR', 'RE' => 'FR', 'RO' => 'RO', 'RS' => 'SR', 'RU' => 'RU',
			'RW' => 'RW', 'SA' => 'AR', 'SB' => 'EN', 'SC' => 'EN', 'SD' => 'AR', 'SS' => 'EN', 'SE' => 'SV',
			'SG' => 'CMN', 'SH' => 'EN', 'SI' => 'SL', 'SJ' => 'NO', 'SK' => 'SK', 'SL' => 'EN', 'SM' => 'IT',
			'SN' => 'FR', 'SO' => 'SO', 'SR' => 'NL', 'ST' => 'PT', 'SV' => 'ES', 'SX' => 'NL', 'SY' => 'AR',
			'SZ' => 'EN', 'TC' => 'EN', 'TD' => 'FR', 'TF' => 'FR', 'TG' => 'FR', 'TH' => 'TH', 'TJ' => 'TG',
			'TK' => 'TKL', 'TL' => 'TET', 'TM' => 'TK', 'TN' => 'AR', 'TO' => 'TO', 'TR' => 'TR', 'TT' => 'EN',
			'TV' => 'TVL', 'TW' => 'ZH', 'TZ' => 'SW', 'UA' => 'UK', 'UG' => 'EN', 'UM' => 'EN', 'US' => 'EN',
			'UY' => 'ES', 'UZ' => 'UZ', 'VA' => 'LA', 'VC' => 'EN', 'VE' => 'ES', 'VG' => 'EN', 'VI' => 'EN',
			'VN' => 'VI', 'VU' => 'BI', 'WF' => 'WLS', 'WS' => 'SM', 'YE' => 'AR', 'YT' => 'FR', 'ZA' => 'ZU',
			'ZM' => 'EN', 'ZW' => 'EN', 'CS' => 'CU', 'AN' => 'NL',
		);
	}

	/**
	 * Return supported countries where
	 * the gateway can be available
	 *
	 * @return array
	 */
	public function supported_countries(): array
	{
		global $cookie;
		$module = Module::getInstanceByName( 'prestashopgopay' );

		$countries = array();
		foreach ( Country::getCountries( (int)$cookie->id_lang, true ) as $key => $country_info ) {
			$countries[] = array( 'key' => $country_info['iso_code'], 'name' =>
				$module->l( $country_info['name'], get_class( $this ) ) );
		}

		return $countries;
	}

	/**
	 * Return supported shipping methods that
	 * the gateway can use
	 *
	 * @return array
	 */
	public function supported_shipping_methods(): array
	{
		global $cookie;
		$module = Module::getInstanceByName( 'prestashopgopay' );

		$carriers = array();
		foreach ( Carrier::getCarriers( (int)$cookie->id_lang, true ) as $key => $carrier_info ) {
			$carriers[] = array( 'key' => $carrier_info['id_carrier'], 'name' =>
				$module->l( $carrier_info['name'], get_class( $this ) ) );
		}

		return $carriers;
	}

	/**
	 * Return supported payment methods that
	 * the gateway can use
	 *
	 * @return array
	 */
	public function supported_payment_methods(): array
	{
		$module = Module::getInstanceByName( 'prestashopgopay' );

		// Supported payment methods according to https://doc.gopay.com/#payment-instrument
		$payment_methods = array(
			'PAYMENT_CARD' => array( 'key' => 'PAYMENT_CARD', 'name' =>
				$module->l( 'Payment card', get_class( $this ) ) ),
			'BANK_ACCOUNT' => array( 'key' => 'BANK_ACCOUNT', 'name' =>
				$module->l( 'Bank account', get_class( $this ) ) ),
			'GPAY'         => array( 'key' => 'GPAY', 'name' =>
				$module->l( 'Google Pay', get_class( $this ) ) ),
			'APPLE_PAY'    => array( 'key' => 'APPLE_PAY', 'name' =>
				$module->l( 'Apple Pay', get_class( $this ) ) ),
			'GOPAY'        => array( 'key' => 'GOPAY', 'name' =>
				$module->l( 'GoPay wallet', get_class( $this ) ) ),
			'PAYPAL'       => array( 'key' => 'PAYPAL', 'name' =>
				$module->l( 'PayPal wallet', get_class( $this ) ) ),
			'MPAYMENT'     => array( 'key' => 'MPAYMENT', 'name' =>
				$module->l( 'mPlatba (mobile payment)', get_class( $this ) ) ),
			'PRSMS'        => array( 'key' => 'PRSMS', 'name' =>
				$module->l( 'Premium SMS', get_class( $this ) ) ),
			'PAYSAFECARD'  => array( 'key' => 'PAYSAFECARD', 'name' =>
				$module->l( 'PaySafeCard coupon', get_class( $this ) ) ),
			'BITCOIN'      => array( 'key' => 'BITCOIN', 'name' =>
				$module->l( 'Bitcoin wallet', get_class( $this ) ) ),
			'CLICK_TO_PAY' => array( 'key' => 'CLICK_TO_PAY', 'name' =>
				$module->l( 'Click to Pay', get_class( $this ) ) ),
		);

		$option_payment_methods = Configuration::get( 'OPTION_GOPAY_PAYMENT_METHODS' );
		if ( !empty( $option_payment_methods ) ) {
			$gopay_payment_methods = array();
			foreach ( json_decode( $option_payment_methods, $flags = JSON_INVALID_UTF8_SUBSTITUTE ) as  $method_code
			=> $method_label_image ) {
				$gopay_payment_methods[ $method_code ] = $payment_methods[ $method_code ];
			}

			return $gopay_payment_methods;
		}

		return $payment_methods;
	}

	/**
	 * Return supported banks for bank payment that
	 * the gateway can use
	 *
	 * @return array
	 */
	public function supported_banks(): array
	{
		$module = Module::getInstanceByName( 'prestashopgopay' );

		// Supported banks according to https://doc.gopay.com/#swift
		$banks = array(
			'GIBACZPX' => array(
				'key'   => 'GIBACZPX',
				'name' => $module->l( 'Česká Spořitelna', get_class( $this ) ) . ' CZ',
			),
			'KOMBCZPP' => array(
				'key'   => 'KOMBCZPP',
				'name' => $module->l( 'Komerční Banka', get_class( $this ) ) . ' CZ',
			),
			'RZBCCZPP' => array(
				'key'   => 'RZBCCZPP',
				'name' => $module->l( 'Raiffeisenbank', get_class( $this ) ) . ' CZ',
			),
			'FIOBCZPP' => array(
				'key'   => 'FIOBCZPP',
				'name' => $module->l( 'FIO Banka', get_class( $this ) ) . ' CZ',
			),
			'BACXCZPP' => array(
				'key'   => 'BACXCZPP',
				'name' => $module->l( 'UniCredit Bank', get_class( $this ) ) . ' CZ',
			),
			'BREXCZPP' => array(
				'key'   => 'BREXCZPP',
				'name' => $module->l( 'mBank', get_class( $this ) ) . ' CZ',
			),
			'CEKOCZPP' => array(
				'key'   => 'CEKOCZPP',
				'name' => $module->l( 'ČSOB', get_class( $this ) ) . ' CZ',
			),
			'CEKOCZPP-ERA' => array(
				'key'   => 'CEKOCZPP-ERA',
				'name' => $module->l( 'Poštovní Spořitelna', get_class( $this ) ) . ' CZ',
			),
			'AGBACZPP' => array(
				'key'   => 'AGBACZPP',
				'name' => $module->l( 'Moneta Money Bank', get_class( $this ) ) . ' CZ',
			),
			'AIRACZPP' => array(
				'key'   => 'AIRACZPP',
				'name' => $module->l( 'AirBank', get_class( $this ) ) . ' CZ',
			),
			'EQBKCZPP' => array(
				'key'   => 'EQBKCZPP',
				'name' => $module->l( 'EQUA Bank', get_class( $this ) ) . ' CZ',
			),
			'INGBCZPP' => array(
				'key'   => 'INGBCZPP',
				'name' => $module->l( 'ING Bank', get_class( $this ) ) . ' CZ',
			),
			'EXPNCZPP' => array(
				'key'   => 'EXPNCZPP',
				'name' => $module->l( 'Expobank', get_class( $this ) ) . ' CZ',
			),
			'OBKLCZ2X' => array(
				'key'   => 'OBKLCZ2X',
				'name' => $module->l( 'OberBank AG', get_class( $this ) ) . ' CZ',
			),
			'SUBACZPP' => array(
				'key'   => 'SUBACZPP',
				'name' => $module->l( 'Všeobecná Úvěrová Banka - pobočka Praha', get_class( $this ) ) . ' CZ',
			),
			'TATRSKBX' => array(
				'key'   => 'TATRSKBX',
				'name' => $module->l( 'Tatra Banka', get_class( $this ) ) . ' SK',
			),
			'SUBASKBX' => array(
				'key'   => 'SUBASKBX',
				'name' => $module->l( 'Všeobecná Úverová Banka', get_class( $this ) ) . ' SK',
			),
			'UNCRSKBX' => array(
				'key'   => 'UNCRSKBX',
				'name' => $module->l( 'UniCredit Bank', get_class( $this ) ) . ' SK',
			),
			'GIBASKBX' => array(
				'key'   => 'GIBASKBX',
				'name' => $module->l( 'Slovenská Sporiteľňa', get_class( $this ) ) . ' SK',
			),
			'POBNSKBA' => array(
				'key'   => 'POBNSKBA',
				'name' => $module->l( 'Poštová Banka', get_class( $this ) ) . ' SK',
			),
			'OTPVSKBX' => array(
				'key'   => 'OTPVSKBX',
				'name' => $module->l( 'OTP Banka', get_class( $this ) ) . ' SK',
			),
			'KOMASK2X' => array(
				'key'   => 'KOMASK2X',
				'name' => $module->l( 'Prima Banka', get_class( $this ) ) . ' SK',
			),
			'CITISKBA' => array(
				'key'   => 'CITISKBA',
				'name' => $module->l( 'Citibank Europe', get_class( $this ) ) . ' SK',
			),
			'FIOZSKBA' => array(
				'key'   => 'FIOZSKBA',
				'name' => $module->l( 'FIO Banka', get_class( $this ) ) . ' SK',
			),
			'INGBSKBX' => array(
				'key'   => 'INGBSKBX',
				'name' => $module->l( 'ING Wholesale Banking', get_class( $this ) ) . ' SK',
			),
			'BREXSKBX' => array(
				'key'   => 'BREXSKBX',
				'name' => $module->l( 'mBank', get_class( $this ) ) . ' SK',
			),
			'JTBPSKBA' => array(
				'key'   => 'JTBPSKBA',
				'name' => $module->l( 'J&T Banka', get_class( $this ) ) . ' SK',
			),
			'OBKLSKBA' => array(
				'key'   => 'OBKLSKBA',
				'name' => $module->l( 'OberBank AG', get_class( $this ) ) . ' SK',
			),
			'BSLOSK22' => array(
				'key'   => 'BSLOSK22',
				'name' => $module->l( 'Privatbanka', get_class( $this ) ) . ' SK',
			),
			'BFKKSKBB' => array(
				'key'   => 'BFKKSKBB',
				'name' => $module->l( 'BKS Bank AG', get_class( $this ) ) . ' SK',
			),
			'GBGCPLPK' => array(
				'key'   => 'GBGCPLPK',
				'name' => $module->l( 'Getin Bank', get_class( $this ) ) . ' PL',
			),
			'NESBPLPW' => array(
				'key'   => 'NESBPLPW',
				'name' => $module->l( 'Nest Bank', get_class( $this ) ) . ' PL',
			),
			'VOWAPLP9' => array(
				'key'   => 'VOWAPLP9',
				'name' => $module->l( 'Volkswagen Bank', get_class( $this ) ) . ' PL',
			),
			'CITIPLPX' => array(
				'key'   => 'CITIPLPX',
				'name' => $module->l( 'Citi handlowy', get_class( $this ) ) . ' PL',
			),
			'WBKPPLPP' => array(
				'key'   => 'WBKPPLPP',
				'name' => $module->l( 'Santander', get_class( $this ) ) . ' PL',
			),
			'BIGBPLPW' => array(
				'key'   => 'BIGBPLPW',
				'name' => $module->l( 'Millenium Bank', get_class( $this ) ) . ' PL',
			),
			'EBOSPLPW' => array(
				'key'   => 'EBOSPLPW',
				'name' => $module->l( 'Bank Ochrony Srodowiska', get_class( $this ) ) . ' PL',
			),
			'PKOPPLPW' => array(
				'key'   => 'PKOPPLPW',
				'name' => $module->l( 'Pekao Bank', get_class( $this ) ) . ' PL',
			),
			'PPABPLPK' => array(
				'key'   => 'PPABPLPK',
				'name' => $module->l( 'BNP Paribas', get_class( $this ) ) . ' PL',
			),
			'BPKOPLPW' => array(
				'key'   => 'BPKOPLPW',
				'name' => $module->l( 'OWSZECHNA KASA OSZCZEDNOSCI BANK POLSK', get_class( $this ) ) . ' PL',
			),
			'AGRIPLPR' => array(
				'key'   => 'AGRIPLPR',
				'name' => $module->l( 'Credit Agricole Banka Polska', get_class( $this ) ) . ' PL',
			),
			'GBGCPLPK-NOB' => array(
				'key'   => 'GBGCPLPK-NOB',
				'name' => $module->l( 'Noble Bank', get_class( $this ) ) . ' PL',
			),
			'POLUPLPR' => array(
				'key'   => 'POLUPLPR',
				'name' => $module->l( 'BPS/Bank Nowy BFG', get_class( $this ) ) . ' PL',
			),
			'BREXPLPW' => array(
				'key'   => 'BREXPLPW',
				'name' => $module->l( 'mBank', get_class( $this ) ) . ' PL',
			),
			'INGBPLPW' => array(
				'key'   => 'INGBPLPW',
				'name' => $module->l( 'ING Bank', get_class( $this ) ) . ' PL',
			),
			'ALBPPLPW' => array(
				'key'   => 'ALBPPLPW',
				'name' => $module->l( 'Alior', get_class( $this ) ) . ' PL',
			),
			'IEEAPLPA' => array(
				'key'   => 'IEEAPLPA',
				'name' => $module->l( 'IdeaBank', get_class( $this ) ) . ' PL',
			),
			'POCZPLP4' => array(
				'key'   => 'POCZPLP4',
				'name' => $module->l( 'Pocztowy24', get_class( $this ) ) . ' PL',
			),
			'IVSEPLPP' => array(
				'key'   => 'IVSEPLPP',
				'name' => $module->l( 'Plus Bank', get_class( $this ) ) . ' PL',
			),
			'TOBAPLPW' => array(
				'key'   => 'TOBAPLPW',
				'name' => $module->l( 'Toyota Bank', get_class( $this ) ) . ' PL',
			),
			'OTHERS' => array(
				'key'   => 'OTHERS',
				'name' => $module->l( 'Another bank', get_class( $this ) ),
			),
		);

		$option_banks = Configuration::get( 'OPTION_GOPAY_BANKS' );
		if ( !empty( $option_banks ) ) {
			$banks = array();
			foreach ( json_decode( $option_banks, $flags = JSON_INVALID_UTF8_SUBSTITUTE ) as
			          $swift => $bank_label_image ) {
				$banks[ $swift ] = array( 'key' => $swift, 'name' =>
					$module->l( htmlspecialchars_decode
						( $bank_label_image['label'] ), get_class( $this ) ) .
					( $swift != 'OTHERS' ? ' ' . substr( $swift, 4, 2 ) : '' ) );
			}
		}

		return $banks;
	}

	/**
	 * Return iso 2 as keys and iso 3 equivalence as values
	 *
	 * @return array
	 */
	public static function iso2_to_iso3(): array
	{
		// Extracted from geonames.org (http://download.geonames.org/export/dump/countryInfo.txt)
		return array(
			'AD' => 'AND', 'AE' => 'ARE', 'AF' => 'AFG', 'AG' => 'ATG', 'AI' => 'AIA',
			'AL' => 'ALB', 'AM' => 'ARM', 'AO' => 'AGO', 'AQ' => 'ATA', 'AR' => 'ARG',
			'AS' => 'ASM', 'AT' => 'AUT', 'AU' => 'AUS', 'AW' => 'ABW', 'AX' => 'ALA',
			'AZ' => 'AZE', 'BA' => 'BIH', 'BB' => 'BRB', 'BD' => 'BGD', 'BE' => 'BEL',
			'BF' => 'BFA', 'BG' => 'BGR', 'BH' => 'BHR', 'BI' => 'BDI', 'BJ' => 'BEN',
			'BL' => 'BLM', 'BM' => 'BMU', 'BN' => 'BRN', 'BO' => 'BOL', 'BQ' => 'BES',
			'BR' => 'BRA', 'BS' => 'BHS', 'BT' => 'BTN', 'BV' => 'BVT', 'BW' => 'BWA',
			'BY' => 'BLR', 'BZ' => 'BLZ', 'CA' => 'CAN', 'CC' => 'CCK', 'CD' => 'COD',
			'CF' => 'CAF', 'CG' => 'COG', 'CH' => 'CHE', 'CI' => 'CIV', 'CK' => 'COK',
			'CL' => 'CHL', 'CM' => 'CMR', 'CN' => 'CHN', 'CO' => 'COL', 'CR' => 'CRI',
			'CU' => 'CUB', 'CV' => 'CPV', 'CW' => 'CUW', 'CX' => 'CXR', 'CY' => 'CYP',
			'CZ' => 'CZE', 'DE' => 'DEU', 'DJ' => 'DJI', 'DK' => 'DNK', 'DM' => 'DMA',
			'DO' => 'DOM', 'DZ' => 'DZA', 'EC' => 'ECU', 'EE' => 'EST', 'EG' => 'EGY',
			'EH' => 'ESH', 'ER' => 'ERI', 'ES' => 'ESP', 'ET' => 'ETH', 'FI' => 'FIN',
			'FJ' => 'FJI', 'FK' => 'FLK', 'FM' => 'FSM', 'FO' => 'FRO', 'FR' => 'FRA',
			'GA' => 'GAB', 'GB' => 'GBR', 'GD' => 'GRD', 'GE' => 'GEO', 'GF' => 'GUF',
			'GG' => 'GGY', 'GH' => 'GHA', 'GI' => 'GIB', 'GL' => 'GRL', 'GM' => 'GMB',
			'GN' => 'GIN', 'GP' => 'GLP', 'GQ' => 'GNQ', 'GR' => 'GRC', 'GS' => 'SGS',
			'GT' => 'GTM', 'GU' => 'GUM', 'GW' => 'GNB', 'GY' => 'GUY', 'HK' => 'HKG',
			'HM' => 'HMD', 'HN' => 'HND', 'HR' => 'HRV', 'HT' => 'HTI', 'HU' => 'HUN',
			'ID' => 'IDN', 'IE' => 'IRL', 'IL' => 'ISR', 'IM' => 'IMN', 'IN' => 'IND',
			'IO' => 'IOT', 'IQ' => 'IRQ', 'IR' => 'IRN', 'IS' => 'ISL', 'IT' => 'ITA',
			'JE' => 'JEY', 'JM' => 'JAM', 'JO' => 'JOR', 'JP' => 'JPN', 'KE' => 'KEN',
			'KG' => 'KGZ', 'KH' => 'KHM', 'KI' => 'KIR', 'KM' => 'COM', 'KN' => 'KNA',
			'KP' => 'PRK', 'KR' => 'KOR', 'KW' => 'KWT', 'KY' => 'CYM', 'KZ' => 'KAZ',
			'LA' => 'LAO', 'LB' => 'LBN', 'LC' => 'LCA', 'LI' => 'LIE', 'LK' => 'LKA',
			'LR' => 'LBR', 'LS' => 'LSO', 'LT' => 'LTU', 'LU' => 'LUX', 'LV' => 'LVA',
			'LY' => 'LBY', 'MA' => 'MAR', 'MC' => 'MCO', 'MD' => 'MDA', 'ME' => 'MNE',
			'MF' => 'MAF', 'MG' => 'MDG', 'MH' => 'MHL', 'MK' => 'MKD', 'ML' => 'MLI',
			'MM' => 'MMR', 'MN' => 'MNG', 'MO' => 'MAC', 'MP' => 'MNP', 'MQ' => 'MTQ',
			'MR' => 'MRT', 'MS' => 'MSR', 'MT' => 'MLT', 'MU' => 'MUS', 'MV' => 'MDV',
			'MW' => 'MWI', 'MX' => 'MEX', 'MY' => 'MYS', 'MZ' => 'MOZ', 'NA' => 'NAM',
			'NC' => 'NCL', 'NE' => 'NER', 'NF' => 'NFK', 'NG' => 'NGA', 'NI' => 'NIC',
			'NL' => 'NLD', 'NO' => 'NOR', 'NP' => 'NPL', 'NR' => 'NRU', 'NU' => 'NIU',
			'NZ' => 'NZL', 'OM' => 'OMN', 'PA' => 'PAN', 'PE' => 'PER', 'PF' => 'PYF',
			'PG' => 'PNG', 'PH' => 'PHL', 'PK' => 'PAK', 'PL' => 'POL', 'PM' => 'SPM',
			'PN' => 'PCN', 'PR' => 'PRI', 'PS' => 'PSE', 'PT' => 'PRT', 'PW' => 'PLW',
			'PY' => 'PRY', 'QA' => 'QAT', 'RE' => 'REU', 'RO' => 'ROU', 'RS' => 'SRB',
			'RU' => 'RUS', 'RW' => 'RWA', 'SA' => 'SAU', 'SB' => 'SLB', 'SC' => 'SYC',
			'SD' => 'SDN', 'SE' => 'SWE', 'SG' => 'SGP', 'SH' => 'SHN', 'SI' => 'SVN',
			'SJ' => 'SJM', 'SK' => 'SVK', 'SL' => 'SLE', 'SM' => 'SMR', 'SN' => 'SEN',
			'SO' => 'SOM', 'SR' => 'SUR', 'SS' => 'SSD', 'ST' => 'STP', 'SV' => 'SLV',
			'SX' => 'SXM', 'SY' => 'SYR', 'SZ' => 'SWZ', 'TC' => 'TCA', 'TD' => 'TCD',
			'TF' => 'ATF', 'TG' => 'TGO', 'TH' => 'THA', 'TJ' => 'TJK', 'TK' => 'TKL',
			'TL' => 'TLS', 'TM' => 'TKM', 'TN' => 'TUN', 'TO' => 'TON', 'TR' => 'TUR',
			'TT' => 'TTO', 'TV' => 'TUV', 'TW' => 'TWN', 'TZ' => 'TZA', 'UA' => 'UKR',
			'UG' => 'UGA', 'UM' => 'UMI', 'US' => 'USA', 'UY' => 'URY', 'UZ' => 'UZB',
			'VA' => 'VAT', 'VC' => 'VCT', 'VE' => 'VEN', 'VG' => 'VGB', 'VI' => 'VIR',
			'VN' => 'VNM', 'VU' => 'VUT', 'WF' => 'WLF', 'WS' => 'WSM', 'XK' => 'XKX',
			'YE' => 'YEM', 'YT' => 'MYT', 'ZA' => 'ZAF', 'ZM' => 'ZMB', 'ZW' => 'ZWE',
		);
	}
}
