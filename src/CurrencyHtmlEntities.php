<?php

namespace mykemeynell\Support;

use ArrayAccess;
use ArrayIterator;
use IteratorAggregate;
use Traversable;

/**
 * Class CurrencyHtmlEntities.
 *
 * @package mykemeynell\Support
 */
class CurrencyHtmlEntities implements ArrayAccess, IteratorAggregate
{
    /**
     * Currencies array.
     *
     * @var array
     */
    protected $currencies = [
        "ALL" => "&#76;&#101;&#107;",
        "AFN" => "&#1547;",
        "ARS" => "&#36;",
        "AWG" => "&#402;",
        "AUD" => "&#36;",
        "AZN" => "&#1084;&#1072;&#1085;",
        "BSD" => "&#36;",
        "BBD" => "&#36;",
        "BYN" => "&#66;&#114;",
        "BZD" => "&#66;&#90;&#36;",
        "BMD" => "&#36;",
        "BOB" => "&#36;&#98;",
        "BAM" => "&#75;&#77;",
        "BWP" => "&#80;",
        "BGN" => "&#1083;&#1074;",
        "BRL" => "&#82;&#36;",
        "BND" => "&#36;",
        "KHR" => "&#6107;",
        "CAD" => "&#36;",
        "KYD" => "&#36;",
        "CLP" => "&#36;",
        "CNY" => "&#165;",
        "COP" => "&#36;",
        "CRC" => "&#8353;",
        "HRK" => "&#107;&#110;",
        "CUP" => "&#8369;",
        "CZK" => "&#75;&#269;",
        "DKK" => "&#107;&#114;",
        "DOP" => "&#82;&#68;&#36;",
        "XCD" => "&#36;",
        "EGP" => "&#163;",
        "SVC" => "&#36;",
        "EUR" => "&#8364;",
        "FKP" => "&#163;",
        "FJD" => "&#36;",
        "GHS" => "&#162;",
        "GIP" => "&#163;",
        "GTQ" => "&#81;",
        "GGP" => "&#163;",
        "GYD" => "&#36;",
        "HNL" => "&#76;",
        "HKD" => "&#36;",
        "HUF" => "&#70;&#116;",
        "ISK" => "&#107;&#114;",
        "INR" => "&#8377;",
        "IDR" => "&#82;&#112;",
        "IRR" => "&#65020;",
        "IMP" => "&#163;",
        "ILS" => "&#8362;",
        "JMD" => "&#74;&#36;",
        "JPY" => "&#165;",
        "JEP" => "&#163;",
        "KZT" => "&#1083;&#1074;",
        "KPW" => "&#8361;",
        "KRW" => "&#8361;",
        "KGS" => "&#1083;&#1074;",
        "LAK" => "&#8365;",
        "LBP" => "&#163;",
        "LRD" => "&#36;",
        "MKD" => "&#1076;&#1077;&#1085;",
        "MYR" => "&#82;&#77;",
        "MUR" => "&#8360;",
        "MXN" => "&#36;",
        "MNT" => "&#8366;",
        "MZN" => "&#77;&#84;",
        "NAD" => "&#36;",
        "NPR" => "&#8360;",
        "ANG" => "&#402;",
        "NZD" => "&#36;",
        "NIO" => "&#67;&#36;",
        "NGN" => "&#8358; ‚Ç¶",
        "NOK" => "&#107;&#114;",
        "OMR" => "&#65020;",
        "PKR" => "&#8360;",
        "PAB" => "&#66;&#47;&#46;",
        "PYG" => "&#71;&#115;",
        "PEN" => "&#83;&#47;&#46;",
        "PHP" => "&#8369;",
        "PLN" => "&#122;&#322;",
        "QAR" => "&#65020;",
        "RON" => "&#108;&#101;&#105;",
        "RUB" => "&#1088;&#1091;&#1073;",
        "SHP" => "&#163;",
        "SAR" => "&#65020;",
        "RSD" => "&#1044;&#1080;&#1085;&#46;",
        "SCR" => "&#8360;",
        "SGD" => "&#36;",
        "SBD" => "&#36;",
        "SOS" => "&#83;",
        "ZAR" => "&#82;",
        "LKR" => "&#8360;",
        "SEK" => "&#107;&#114;",
        "CHF" => "&#67;&#72;&#70;",
        "SRD" => "&#36;",
        "SYP" => "&#163;",
        "TWD" => "&#78;&#84;&#36;",
        "THB" => "&#3647;",
        "TTD" => "&#84;&#84;&#36;",
        "TRY" => "&#;",
        "TVD" => "&#36;",
        "UAH" => "&#8372;",
        "GBP" => "&#163;",
        "USD" => "&#36;",
        "UYU" => "&#36;&#85;",
        "UZS" => "&#1083;&#1074;",
        "VEF" => "&#66;&#115;",
        "VND" => "&#8363;",
        "YER" => "&#65020;",
        "ZWD" => "&#90;&#36;",
    ];

    /**
     * Return the array of currencies and HTML entities.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->currencies;
    }

    /**
     * Get the corresponding currency code of an entity representation.
     *
     * @param string $entity
     *
     * @return string|null
     */
    public function alpha3(string $entity): ?string
    {
        return array_search($entity, $this->currencies);
    }

    /**
     * Get the corresponding HTML entity of an alpha-3 representation.
     *
     * @param string $alpha3
     *
     * @return string|null
     */
    public function entity(string $alpha3): ?string
    {
        return $this->currencies[$alpha3];
    }

    /**
     * Whether a offset exists
     *
     * @link  https://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     *                      An offset to check for.
     *                      </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->currencies);
    }

    /**
     * Offset to retrieve
     *
     * @link  https://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     *                      The offset to retrieve.
     *                      </p>
     *
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return $this->entity($offset);
    }

    /**
     * Offset to set
     *
     * @link  https://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     *                      The offset to assign the value to.
     *                      </p>
     * @param mixed $value  <p>
     *                      The value to set.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        $this->currencies[$offset] = $value;
    }

    /**
     * Offset to unset
     *
     * @link  https://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     *                      The offset to unset.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        unset($this->currencies[$offset]);
    }

    /**
     * Retrieve an external iterator
     *
     * @link  https://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new ArrayIterator($this->currencies);
    }
}

