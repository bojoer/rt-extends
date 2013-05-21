<?php

/**
 *
 * @author Remi THOMAS 
 */

namespace RtExtends\Useful\Location\Country;

class Us{
    
    /**
     * List of U.S. States
     * @return array 
     */
    public static function states(){
        return array(
            "AL" => "Alabama",
            "AK" => "Alaska",
            "AZ" => "Arizona",
            "AR" => "Arkansas",
            "CA" => "California",
            "CO" => "Colorado",
            "CT" => "Connecticut",
            "DE" => "Delaware",
            "FL" => "Florida",
            "GA" => "Georgia",
            "HI" => "Hawaii",
            "ID" => "Idaho",
            "IL" => "Illinois",
            "IN" => "Indiana",
            "IA" => "Iowa",
            "KS" => "Kansas",
            "KY" => "Kentucky",
            "LA" => "Louisiana",
            "ME" => "Maine",
            "MD" => "Maryland",
            "MA" => "Massachusetts",
            "MI" => "Michigan",
            "MN" => "Minnesota",
            "MS" => "Mississippi",
            "MO" => "Missouri",
            "MT" => "Montana",
            "NE" => "Nebraska",
            "NV" => "Nevada",
            "NH" => "New Hampshire",
            "NJ" => "New Jersey",
            "NM" => "New Mexico",
            "NY" => "New York",
            "NC" => "North Carolina",
            "ND" => "North Dakota",
            "OH" => "Ohio",
            "OK" => "Oklahoma",
            "OR" => "Oregon",
            "PA" => "Pennsylvania",
            "RI" => "Rhode Island",
            "SC" => "South Carolina",
            "SD" => "South Dakota",
            "TN" => "Tennessee",
            "TX" => "Texas",
            "UT" => "Utah",
            "VT" => "Vermont",
            "VA" => "Virginia",
            "WA" => "Washington",
            "WV" => "West Virginia",
            "WI" => "Wisconsin",
            "WY" => "Wyoming",
        );
    }
    
    /**
     * Liste of US states (FIPS code)
     * @return array 
     */
    public static function statesFIPS(){
        return array(
            "01" => "Alabama",
            "02" => "Alaska",
            "04" => "Arizona",
            "05" => "Arkansas",
            "06" => "California",
            "08" => "Colorado",
            "09" => "Connecticut",
            "10" => "Delaware",
            "11" => "District of Columbia",
            "12" => "Florida",
            "13" => "Georgia",
            "15" => "Hawaii",
            "16" => "Idaho",
            "17" => "Illinois",
            "18" => "Indiana",
            "19" => "Iowa",
            "20" => "Kansas",
            "21" => "Kentucky",
            "22" => "Louisiana",
            "23" => "Maine",
            "24" => "Maryland",
            "25" => "Massachusetts",
            "26" => "Michigan",
            "27" => "Minnesota",
            "28" => "Mississippi",
            "29" => "Missouri",
            "30" => "Montana",
            "31" => "Nebraska",
            "32" => "Nevada",
            "33" => "New Hampshire",
            "34" => "New Jersey",
            "35" => "New Mexico",
            "36" => "New York",
            "37" => "North Carolina",
            "38" => "North Dakota",
            "39" => "Ohio",
            "40" => "Oklahoma",
            "41" => "Oregon",
            "42" => "Pennsylvania",
            "44" => "Rhode Island",
            "45" => "South Carolina",
            "46" => "South Dakota",
            "47" => "Tennessee",
            "48" => "Texas",
            "49" => "Utah",
            "50" => "Vermont",
            "51" => "Virginia",
            "53" => "Washington",
            "54" => "West Virginia",
            "55" => "Wisconsin",
            "56" => "Wyoming",
        );
    }
    
    public static function counties(){
        
    }
    
    public static function countiesByState($stateCode){
        
    }
}
