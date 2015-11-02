<?php

/**
 * Zip/postal code Validation Class
 * The class can check validity of postal/zip code
 *
 * @author Matija Boban <code@matijaboban.com>
 * @version 0.1
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


class PostalCodeValidation {

    /**
     * ZIP/postal code validation
     * The function checks whether the zip/postal code is valid
     *
     * @access public
     * @version  0.1
     * @param    $postal_code   string  Postal/ZIP code
     * @param    $country_code  string  two-letter ISO country code (ISO 3166-1 alpha-2)
     * @return   bolean         true if postal/ZIP code is valid
     */
    public function return_postcode_validation_status($postal_code=false,$country_code=false) {

        if(!$postal_code || !$country_code) :

            return false;

        else :

            // get the country REGEX pattern
            $pattern = static::return_postcode_validation_regex($country_code);

            // check if pattern was returned correctly and if yes, validate
            if(!$pattern) :

                return false;

            else :

                if (preg_match($pattern, $postal_code)) :

                    return true;

                else :
                
                    return false;
                
                endif;

            endif;

        endif;

    }


    /**
     * ZIP/postal code validation regex patern
     * The function returns a Postal/ZIP code REGEX pattern
     *
     * @access private
     * @version 0.1
     * @param $country_code  string  two-letter ISO country code (ISO 3166-1 alpha-2)
     * @return string        REGEX pattern
     */
    private function return_postcode_validation_regex($country_code=false)
    {

        if(!$country_code) :

            return false;

        else :

            switch (strtoupper($country_code)) {
                case "GB"; return "/^GIR[ ]?0AA|((AB|AL|B|BA|BB|BD|BH|BL|BN|BR|BS|BT|CA|CB|CF|CH|CM|CO|CR|CT|CV|CW|DA|DD|DE|DG|DH|DL|DN|DT|DY|E|EC|EH|EN|EX|FK|FY|G|GL|GY|GU|HA|HD|HG|HP|HR|HS|HU|HX|IG|IM|IP|IV|JE|KA|KT|KW|KY|L|LA|LD|LE|LL|LN|LS|LU|M|ME|MK|ML|N|NE|NG|NN|NP|NR|NW|OL|OX|PA|PE|PH|PL|PO|PR|RG|RH|RM|S|SA|SE|SG|SK|SL|SM|SN|SO|SP|SR|SS|ST|SW|SY|TA|TD|TF|TN|TQ|TR|TS|TW|UB|W|WA|WC|WD|WF|WN|WR|WS|WV|YO|ZE)(\d[\dA-Z]?[ ]?\d[ABD-HJLN-UW-Z]{2}))|BFPO[ ]?\d{1,4}/"; break;
                case "JE"; return "/^JE\d[\dA-Z]?[ ]?\d[ABD-HJLN-UW-Z]{2}/"; break;
                case "GG"; return "/^GY\d[\dA-Z]?[ ]?\d[ABD-HJLN-UW-Z]{2}/"; break;
                case "IM"; return "/^IM\d[\dA-Z]?[ ]?\d[ABD-HJLN-UW-Z]{2}/"; break;
                case "US"; return "/^\d{5}([ \-]\d{4})?/"; break;
                case "CA"; return "/^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][ ]?\d[ABCEGHJ-NPRSTV-Z]\d/"; break;
                case "DE"; return "/^\d{5}/"; break;
                case "JP"; return "/^\d{3}-\d{4}/"; break;
                case "FR"; return "/^\d{2}[ ]?\d{3}/"; break;
                case "AU"; return "/^\d{4}/"; break;
                case "IT"; return "/^\d{5}/"; break;
                case "CH"; return "/^\d{4}/"; break;
                case "AT"; return "/^\d{4}/"; break;
                case "ES"; return "/^\d{5}/"; break;
                case "NL"; return "/^\d{4}[ ]?[A-Z]{2}/"; break;
                case "BE"; return "/^\d{4}/"; break;
                case "DK"; return "/^\d{4}/"; break;
                case "SE"; return "/^\d{3}[ ]?\d{2}/"; break;
                case "NO"; return "/^\d{4}/"; break;
                case "BR"; return "/^\d{5}[\-]?\d{3}/"; break;
                case "PT"; return "/^\d{4}([\-]\d{3})?/"; break;
                case "FI"; return "/^\d{5}/"; break;
                case "AX"; return "/^22\d{3}/"; break;
                case "KR"; return "/^\d{3}[\-]\d{3}/"; break;
                case "CN"; return "/^\d{6}/"; break;
                case "TW"; return "/^\d{3}(\d{2})?/"; break;
                case "SG"; return "/^\d{6}/"; break;
                case "DZ"; return "/^\d{5}/"; break;
                case "AD"; return "/^AD\d{3}/"; break;
                case "AR"; return "/^([A-HJ-NP-Z])?\d{4}([A-Z]{3})?/"; break;
                case "AM"; return "/^(37)?\d{4}/"; break;
                case "AZ"; return "/^\d{4}/"; break;
                case "BH"; return "/^((1[0-2]|[2-9])\d{2})?/"; break;
                case "BD"; return "/^\d{4}/"; break;
                case "BB"; return "/^(BB\d{5})?/"; break;
                case "BY"; return "/^\d{6}/"; break;
                case "BM"; return "/^[A-Z]{2}[ ]?[A-Z0-9]{2}/"; break;
                case "BA"; return "/^\d{5}/"; break;
                case "IO"; return "/^BBND 1ZZ/"; break;
                case "BN"; return "/^[A-Z]{2}[ ]?\d{4}/"; break;
                case "BG"; return "/^\d{4}/"; break;
                case "KH"; return "/^\d{5}/"; break;
                case "CV"; return "/^\d{4}/"; break;
                case "CL"; return "/^\d{7}/"; break;
                case "CR"; return "/^\d{4,5}|\d{3}-\d{4}/"; break;
                case "HR"; return "/^\d{5}/"; break;
                case "CY"; return "/^\d{4}/"; break;
                case "CZ"; return "/^\d{3}[ ]?\d{2}/"; break;
                case "DO"; return "/^\d{5}/"; break;
                case "EC"; return "/^([A-Z]\d{4}[A-Z]|(?:[A-Z]{2})?\d{6})?/"; break;
                case "EG"; return "/^\d{5}/"; break;
                case "EE"; return "/^\d{5}/"; break;
                case "FO"; return "/^\d{3}/"; break;
                case "GE"; return "/^\d{4}/"; break;
                case "GR"; return "/^\d{3}[ ]?\d{2}/"; break;
                case "GL"; return "/^39\d{2}/"; break;
                case "GT"; return "/^\d{5}/"; break;
                case "HT"; return "/^\d{4}/"; break;
                case "HN"; return "/^(?:\d{5})?/"; break;
                case "HU"; return "/^\d{4}/"; break;
                case "IS"; return "/^\d{3}/"; break;
                case "IN"; return "/^\d{6}/"; break;
                case "ID"; return "/^\d{5}/"; break;
                case "IL"; return "/^\d{5}/"; break;
                case "JO"; return "/^\d{5}/"; break;
                case "KZ"; return "/^\d{6}/"; break;
                case "KE"; return "/^\d{5}/"; break;
                case "KW"; return "/^\d{5}/"; break;
                case "LA"; return "/^\d{5}/"; break;
                case "LV"; return "/^\d{4}/"; break;
                case "LB"; return "/^(\d{4}([ ]?\d{4})?)?/"; break;
                case "LI"; return "/^(948[5-9])|(949[0-7])/"; break;
                case "LT"; return "/^\d{5}/"; break;
                case "LU"; return "/^\d{4}/"; break;
                case "MK"; return "/^\d{4}/"; break;
                case "MY"; return "/^\d{5}/"; break;
                case "MV"; return "/^\d{5}/"; break;
                case "MT"; return "/^[A-Z]{3}[ ]?\d{2,4}/"; break;
                case "MU"; return "/^(\d{3}[A-Z]{2}\d{3})?/"; break;
                case "MX"; return "/^\d{5}/"; break;
                case "MD"; return "/^\d{4}/"; break;
                case "MC"; return "/^980\d{2}/"; break;
                case "MA"; return "/^\d{5}/"; break;
                case "NP"; return "/^\d{5}/"; break;
                case "NZ"; return "/^\d{4}/"; break;
                case "NI"; return "/^((\d{4}-)?\d{3}-\d{3}(-\d{1})?)?/"; break;
                case "NG"; return "/^(\d{6})?/"; break;
                case "OM"; return "/^(PC )?\d{3}/"; break;
                case "PK"; return "/^\d{5}/"; break;
                case "PY"; return "/^\d{4}/"; break;
                case "PH"; return "/^\d{4}/"; break;
                case "PL"; return "/^\d{2}-\d{3}/"; break;
                case "PR"; return "/^00[679]\d{2}([ \-]\d{4})?/"; break;
                case "RO"; return "/^\d{6}/"; break;
                case "RU"; return "/^\d{6}/"; break;
                case "SM"; return "/^4789\d/"; break;
                case "SA"; return "/^\d{5}/"; break;
                case "SN"; return "/^\d{5}/"; break;
                case "SK"; return "/^\d{3}[ ]?\d{2}/"; break;
                case "SI"; return "/^\d{4}/"; break;
                case "ZA"; return "/^\d{4}/"; break;
                case "LK"; return "/^\d{5}/"; break;
                case "TJ"; return "/^\d{6}/"; break;
                case "TH"; return "/^\d{5}/"; break;
                case "TN"; return "/^\d{4}/"; break;
                case "TR"; return "/^\d{5}/"; break;
                case "TM"; return "/^\d{6}/"; break;
                case "UA"; return "/^\d{5}/"; break;
                case "UY"; return "/^\d{5}/"; break;
                case "UZ"; return "/^\d{6}/"; break;
                case "VA"; return "/^00120/"; break;
                case "VE"; return "/^\d{4}/"; break;
                case "ZM"; return "/^\d{5}/"; break;
                case "AS"; return "/^96799/"; break;
                case "CC"; return "/^6799/"; break;
                case "CK"; return "/^\d{4}/"; break;
                case "RS"; return "/^\d{6}/"; break;
                case "ME"; return "/^8\d{4}/"; break;
                case "CS"; return "/^\d{5}/"; break;
                case "YU"; return "/^\d{5}/"; break;
                case "CX"; return "/^6798/"; break;
                case "ET"; return "/^\d{4}/"; break;
                case "FK"; return "/^FIQQ 1ZZ/"; break;
                case "NF"; return "/^2899/"; break;
                case "FM"; return "/^(9694[1-4])([ \-]\d{4})?/"; break;
                case "GF"; return "/^9[78]3\d{2}/"; break;
                case "GN"; return "/^\d{3}/"; break;
                case "GP"; return "/^9[78][01]\d{2}/"; break;
                case "GS"; return "/^SIQQ 1ZZ/"; break;
                case "GU"; return "/^969[123]\d([ \-]\d{4})?/"; break;
                case "GW"; return "/^\d{4}/"; break;
                case "HM"; return "/^\d{4}/"; break;
                case "IQ"; return "/^\d{5}/"; break;
                case "KG"; return "/^\d{6}/"; break;
                case "LR"; return "/^\d{4}/"; break;
                case "LS"; return "/^\d{3}/"; break;
                case "MG"; return "/^\d{3}/"; break;
                case "MH"; return "/^969[67]\d([ \-]\d{4})?/"; break;
                case "MN"; return "/^\d{6}/"; break;
                case "MP"; return "/^9695[012]([ \-]\d{4})?/"; break;
                case "MQ"; return "/^9[78]2\d{2}/"; break;
                case "NC"; return "/^988\d{2}/"; break;
                case "NE"; return "/^\d{4}/"; break;
                case "VI"; return "/^008(([0-4]\d)|(5[01]))([ \-]\d{4})?/"; break;
                case "PF"; return "/^987\d{2}/"; break;
                case "PG"; return "/^\d{3}/"; break;
                case "PM"; return "/^9[78]5\d{2}/"; break;
                case "PN"; return "/^PCRN 1ZZ/"; break;
                case "PW"; return "/^96940/"; break;
                case "RE"; return "/^9[78]4\d{2}/"; break;
                case "SH"; return "/^(ASCN|STHL) 1ZZ/"; break;
                case "SJ"; return "/^\d{4}/"; break;
                case "SO"; return "/^\d{5}/"; break;
                case "SZ"; return "/^[HLMS]\d{3}/"; break;
                case "TC"; return "/^TKCA 1ZZ/"; break;
                case "WF"; return "/^986\d{2}/"; break;
                case "XK"; return "/^\d{5}/"; break;
                case "YT"; return "/^976\d{2}/"; break;
                default:
                return false;
            }

        endif;

    }


}