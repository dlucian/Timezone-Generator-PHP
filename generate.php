#!/usr/bin/php
<?php

/**
 * PHP Select Timezone Generator
 *
 * @copy 2013 Lucian Daniliuc <dlucian@gmail.com>
 */

class GenerateTimezoneSelect {

    public function get_html() {
        $timezones = $this->get_timezones();
        $output = "<select name=\"timezone\" id=\"timezone\">\r\n";
        foreach( $timezones as $id => $offset ) {
            $id_parts = explode( '/', $id );
            if( !empty( $id_parts[1] ) ) {
                $city = $id_parts[1];
                //$output .= "    <option value=\"$id\">$offset $city</option>\r\n";
                if( empty( $timezone_groups[ $offset ] ) ) $timezone_groups[ $offset ] = array();
                $timezone_groups[ $offset ][ $city ] = "    <option value=\"$id\">$offset $city</option>\r\n";
            }
        }
        foreach( $timezone_groups as $offset => $group ) {
            ksort( $group );
            $output .= "  <optgroup label=\"$offset\">\r\n";
            $output .= implode( $group );
            $output .= "  </optgroup>\r\n";
        }
        $output .= "</select>\r\n";
        return $output;
    }

    /**
     * Get an array of all available timezones in the format Identifier => UTC Offset.
     * Example:  [Europe/Paris] => UTC +01:00
     *
     * @return mixed
     */
    public function get_timezones() {
        $timezones = $this->get_timezone_identifiers();

        foreach( $timezones as $tz => $city ) {
            $standard_offset = $this->getStandardOffsetUTC( $tz );
            if( $this->is_positive ($standard_offset ) ) {
                $timezone_list_positive[ $tz ] = $standard_offset;
                echo "+";
            } else {
                $timezone_list_negative[ $tz ] = $standard_offset;
                echo "-";
            }
        }

        asort( $timezone_list_positive );
        arsort( $timezone_list_negative );
        $timezone_list = $timezone_list_negative + $timezone_list_positive;

        return $timezone_list;
    }

    /* ================== PRIVATE METHODS ============================================================================ */

    /**
     * Get all the timezone identifiers (such as "Europe/Bucharest")
     *
     * @return array
     */
    private function get_timezone_identifiers() {
        $timezone_identifiers = DateTimeZone::listIdentifiers();
        foreach( $timezone_identifiers as $value ) {
            if ( preg_match( '/^(America|Antartica|Arctic|Asia|Atlantic|Australia|Europe|Indian|Pacific)\//', $value ) ) {
                $ex=explode('/',$value);//obtain continent,city
                $city = isset($ex[2])? $ex[1].' - '.$ex[2]:$ex[1];//in case a timezone has more than one
                $timezones[$value] = $city;
            }
        }
        return $timezones;
    }

    /**
     * Gets something like 'UTC +04:00' and returns true if it is a positive offset.
     *
     * @param $timezone
     * @return bool
     */
    private function is_positive( $timezone ) {
        return strpos( $timezone, "UTC +" ) !== false;
    }

    /**
     * Gets something like 'UTC +04:00' and returns true if it is a negative offset.
     *
     * @param $timezone
     * @return bool
     */
    private function is_negative( $timezone ) {
        return ! $this->is_positive( $timezone );
    }

    /**
     * Retrieves the Standard UTC offset (without observing DST).
     *
     * @param $timezone
     * @return bool|string
     */
    private function getStandardOffsetUTC($timezone) {
        $timezone = new DateTimeZone($timezone);
        $transitions = array_slice($timezone->getTransitions(), -3, null, true);

        foreach (array_reverse($transitions, true) as $transition) {
            if ($transition['isdst'] == 1) {
                continue;
            }
            return sprintf('UTC %+03d:%02u', $transition['offset'] / 3600, abs($transition['offset']) % 3600 / 60);
        }

        return false;
    }

} // END class

/**
 * Let's run the show...
 */

echo "Generating timezone HTML snippet\r\n";
$gen = new GenerateTimezoneSelect();
file_put_contents('timezone_select.html', $gen->get_html() );
echo "\r\n<select> HTML saved in ./timezone_select.html\r\n";