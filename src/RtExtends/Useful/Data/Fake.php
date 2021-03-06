<?php

/**
 * Fake data
 * 
 * Get fake data
 * 
 * @author Remi THOMAS
 */

namespace RtExtends\Useful\Data;

/**
 * Fake class 
 */
class Fake {
    
    /**
     * List of names
     * @var array 
     */
    static $names = array("Thomas","Doe","Anderson","Burrier","Flinchbaugh","Figg","Martin","Barlett","Mcavoy","Willilams","Lemire","Hull","Whitcher","Shroyer","Fazenbaker","Mance","Jensen","Blanco","Circle","Magnin","Silvera","Chenault","Bartol","Woolley","Baranowski","Alles","Rooney","Daub","Connors","Sturdevant","Falkowski","Chisum","Hadley","Rench","Klima","Bradish","Otto","Menard","Renn","Limones","Greenstein","Fujimoto","Arnot","Blanc","Plumley","Couto","Merola","Enz","Pohl","Balls","Musson","Martel","Putman","Verrier","Dupont","Pineau","Winkel","Washington");
    
    /**
     * List of male firstname
     * @var array 
     */
    static $maleFirstName = array("Rémi","John","Greg","Jamel","Steve","Cesar","Antoine","Elijah","Abel","Horace","Manuel","Joachim","Toby","Mark","Steven","Jean","Cameron","Mitch","Terrance","Elmer","Lucas","Bernard","Warner","Dino","Dan","Alfonzo","Quentin","Denis","Morris","Rick","Raphael","Gus","Roland","Francisco","Barney","Albert","Ivan","Emile","Edgar","Travis","Maxwell","Alan","Alain","Spencer","Boris","Basil","Peter","Roger","Tomas","Phil","Gérald","Arthur","Max","Théo","Hichem","Claude","Bertrand","Marcel");
    
    /**
     * List of female firstname
     * @var array
     */
    static $femaleFirstName = array("Carmen","Patricia","Chin","Anne","Audrey","Kasha","Branda","Jonie","Trudy","Sabrina","Elane","Christine","Aurélie","Marie","Arie","Kathey","Léonie","Rolande","Frida","Marisa","Linda","Cornelia","Véronique","Jacqueline","Cristine","Birgit","Roslyn","Josefine","Lesli","Louisa","Melynda","Otelia","Bette","Lissette","Isabelle","Priscilla","Meredith","Aline","Melany","Letty","Carlotta","Laurette","Anneliese","Allyson","Janett","Lydia","Sandie","Stephaine","Michaele","Thi","Nakia","Sarah","Laura");
    
    /**
     * List of loremIpsum paragraph
     * @return array 
     */
    public static function getArrayParagraphLoremIpsum(){
        return array(
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum mauris ac elit euismod vitae rutrum orci cursus. Phasellus facilisis condimentum mollis. Ut vitae nibh nec lorem laoreet iaculis. Morbi sed odio nec tellus commodo molestie sed sit amet odio. Phasellus quis nulla tellus, ut molestie est. Integer lacus dolor, dapibus et suscipit sed, pharetra eget arcu. Aliquam erat volutpat.",
            "Nulla nisl mauris, dapibus a eleifend eu, laoreet ac sapien. Mauris dignissim congue condimentum. Phasellus iaculis ante a risus imperdiet malesuada. Sed vulputate mattis mauris eu bibendum. Fusce hendrerit congue dolor, quis sollicitudin leo tincidunt ut. Maecenas sodales porttitor enim et cursus. Vivamus ullamcorper lobortis consectetur. Integer sed libero ut mi hendrerit accumsan. Ut ac odio sem, vitae pulvinar sapien. Aenean congue odio vitae erat laoreet at iaculis tellus semper.",
            "Vestibulum dui augue, pulvinar in commodo eget, porta a libero. Sed eget nibh nulla. Vestibulum sapien odio, tempor quis pellentesque quis, ultricies pulvinar sem. Integer ac justo sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed sit amet erat in nulla pharetra iaculis sed non velit. Sed ullamcorper cursus enim eget pretium. Quisque in erat non lectus cursus lacinia quis sit amet sem. Nulla ut posuere mi. Sed euismod nisl non tortor pulvinar adipiscing. Mauris lobortis placerat lacus quis euismod. Proin vehicula blandit congue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc dapibus venenatis consequat.",
            "Integer vehicula consectetur hendrerit. Nam sed arcu quis est pharetra pretium. Maecenas adipiscing gravida eros, at commodo tortor mattis sit amet. Donec ultrices commodo urna eget hendrerit. Nullam quam urna, interdum ac semper lacinia, pellentesque non turpis. Quisque ac tortor ac dui suscipit gravida eu in nulla. Praesent lectus mi, faucibus ut ultrices sit amet, volutpat et ante. Nam nec nunc massa, ac pharetra tortor. Curabitur eget volutpat felis. Integer malesuada enim in odio blandit nec varius tortor dignissim. In egestas lobortis suscipit. Sed blandit sagittis lectus, eu ullamcorper arcu tincidunt sit amet.",
            "Nunc a felis vitae quam aliquet rhoncus eu condimentum orci. Nam in nisi nisl. Praesent fermentum, nibh at vehicula sodales, felis nibh mattis lorem, non venenatis orci sapien a quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus egestas nisi non urna sollicitudin non porttitor ligula pretium. Nullam at erat eu lacus lobortis varius at sit amet metus. Donec id nisl elementum mauris bibendum dapibus eget vitae lectus. In eget nunc non nisi gravida tincidunt. Nunc tristique bibendum eros in tempor.",
            "Phasellus lobortis mauris in leo mollis quis rhoncus eros ultricies. Proin ornare sem sed risus luctus condimentum a sed velit. Donec quam erat, feugiat in pretium ut, interdum sollicitudin dui. Nulla facilisi. Maecenas lobortis neque quis tellus iaculis sed condimentum justo pulvinar. Nunc eleifend venenatis accumsan. Aenean ultricies felis augue. Integer suscipit luctus sodales. Mauris eu magna orci, sit amet pellentesque massa. Curabitur luctus ligula nec est congue non mattis diam aliquam. Donec imperdiet metus sit amet tortor fringilla interdum. Praesent non purus ac metus tristique ornare vitae a enim. Sed consequat augue quis felis bibendum convallis. Quisque fringilla augue eu magna vulputate dictum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
            "Nam bibendum, odio non hendrerit eleifend, elit sapien sodales orci, sit amet adipiscing ante diam eu leo. Fusce dui lectus, malesuada sed consectetur non, lobortis nec tellus. Curabitur adipiscing sem quis augue porttitor at consequat erat congue. Aenean at sem tortor. Sed sodales velit sit amet lacus pulvinar id cursus diam porta. Duis feugiat mattis dictum. Duis fringilla augue a nibh condimentum lacinia consequat metus semper. Ut ut nisl dolor. Ut velit justo, fermentum quis rutrum id, sollicitudin non quam. Integer at mauris nunc. Praesent iaculis nibh eu turpis ultricies tincidunt. Etiam at tortor enim. Nullam semper posuere interdum. Nullam vel eros turpis, posuere accumsan dui.",
            "Aliquam varius quam nec lorem bibendum pharetra. Aenean placerat aliquet fermentum. Praesent molestie justo a lorem consectetur lobortis. Vestibulum vitae nisl ut massa rutrum sollicitudin nec sed ligula. In sed cursus erat. Aenean eu urna erat. Praesent in enim lectus, et tristique arcu. Donec eget massa tortor. Duis sit amet leo eros, id malesuada risus.",
            "Duis condimentum dui vel libero commodo sollicitudin. Integer libero tortor, commodo in vestibulum in, tristique eu justo. Mauris ligula dolor, dapibus vel luctus in, congue quis nulla. Fusce et nunc sapien, ac imperdiet velit. Etiam lorem sem, aliquet a commodo vel, mattis in erat. Cras fringilla metus bibendum nunc rhoncus vitae convallis metus commodo. Aliquam dignissim sem id lorem iaculis lacinia. Donec congue, eros eget tristique aliquam, libero ipsum placerat nisi, ut gravida nibh enim quis tellus. Proin eu ligula odio, vitae tristique mauris. Nunc feugiat odio id quam tristique vehicula. Sed leo sapien, dictum nec malesuada id, euismod et lacus. Nullam libero est, sodales auctor scelerisque eget, tincidunt sed nisl. Aliquam erat volutpat. Nam sed arcu ac nisl vestibulum ultrices. Mauris sit amet elit id orci pulvinar varius. Duis magna mauris, scelerisque vel aliquet vel, luctus vel neque.",
            "Phasellus dictum neque eget mauris iaculis sit amet egestas nibh commodo. Nulla facilisi. Maecenas a egestas urna. Nulla facilisi. Proin bibendum volutpat massa, eu eleifend arcu fermentum ac. Nulla tincidunt ullamcorper tellus, aliquet volutpat massa sollicitudin in. Phasellus scelerisque, lectus quis luctus suscipit, tortor urna adipiscing risus, ut commodo sapien eros non nulla. Etiam at erat ipsum, eu fermentum mi. Praesent semper interdum mauris non tincidunt. Vivamus pulvinar ultricies pulvinar. Nunc porttitor sollicitudin augue, a hendrerit lectus ultricies ac. Nam non nibh arcu. Pellentesque vel velit tellus, at dignissim tellus. Duis et dui lectus, non rhoncus massa. Donec rutrum, velit eget cursus semper, magna odio vehicula turpis, nec commodo odio erat et dolor.",
        );
    }

    /**
     * Get attributes from a list
     * @param array $attributes
     * @return string 
     */
    public static function createAttributesString(array $attributes){
        $strings = array();
        foreach ($attributes as $key => $value){
            $strings[] = sprintf('%s="%s"', $key, $value);
        }
        return " ".implode(' ', $strings);
    }

    /**
     * Get some Lorem Ipsum paragraph
     * 
     * @param integer $paragraph
     * @param string $tag
     * @param array $attrs
     * @param bool $random
     * @return string 
     */
    public static function getParagraphLoremIpsum($paragraph = 1, $tag = "p", $attrs = array(), $random = true){
        $lorem = "";
        $arrayLorem = self::getArrayParagraphLoremIpsum();
        $tag = trim($tag);
        
        if($random){
            shuffle($arrayLorem);
        }
        
        for($i=0;$i<$paragraph;$i++){
            if($tag!=""){
                $lorem .= sprintf("<".$tag . "%s>", self::createAttributesString($attrs));
            }
            $lorem .= $arrayLorem[$i];
            if($tag!=""){
                $lorem .= "</".$tag.">";
            }
        }
        
        return $lorem;
    }
    
    /**
     * Get some Lorem Ipsum words
     * 
     * @param integer $words
     * @param string $tag
     * @param array $attrs
     * @param string $endingCharacter
     * @param bool|integer $random
     * @return string 
     */
    public static function getWordLoremIpsum($words = 5, $tag = "", $attrs = array(), $endingCharacter = ".", $random = true){
        // init
        $lorem = "";
        $arrayLorem = self::getArrayParagraphLoremIpsum();
        
        // random string
        if($random === true){
            $stringLorem = $arrayLorem[rand(0, count($arrayLorem))];
        }else if($random === false){
            $stringLorem = $arrayLorem[0];
        }else{
            $stringLorem = $arrayLorem[$random];
        }
        
        $arrayWords = explode(" ", $stringLorem);
        
        for($i=0 ; $i<$words ; $i++){
            $lorem .= $arrayWords[$i]. " ";
        }
        
        // end
        $lorem = rtrim($lorem);
        $lorem = substr($lorem, 0, strlen($lorem)-1).$endingCharacter;
        
        // tag
        if($tag!=""){
            $lorem = sprintf("<".$tag . "%s>", self::createAttributesString($attrs)).$lorem."</".$tag.">";
        }
        
        return $lorem;
    }
    
    /**
     * Get fake email
     * @todo create this function
     */
    public static function fakeEmail(){
        
    }
    
    /**
     * Get a fake name
     * 
     * @param bool|integer $random
     * @param array $names
     * @return string 
     */
    public static function fakeName($random = true, $names = array()){
        if(!is_array($names) || count($names)==0){
            $names = self::$names;
        }
        
        if($random === true){
            return $names[rand(0, count($names))];
        }else{
            return $names[$random];
        }
    }
    
    /**
     * Get a fake firstname
     * 
     * @param bool|integer $random
     * @param integer $sexe
     * @param array $firstnames
     * @return string 
     */
    public static function fakeFirstName($random = true, $sexe = 2, $firstnames = array()){
        if(!is_array($firstnames) || count($firstnames)==0){
            if($sexe === 2){
                // female and male
                $firstnames = array_merge(self::$femaleFirstName, self::$maleFirstName);
            }else if($sexe === 1){
                // only male
                $firstnames = self::$maleFirstName;
            }else if($sexe === 0){
                // only female
                $firstnames = self::$femaleFirstName;
            }
        }
        
        if($random === true){
            return $firstnames[rand(0, count($firstnames))];
        }else{
            return $firstnames[$random];
        }
    }
    
    /**
     * Get a fake full name
     * @param bool|integer $random
     * @param bool|integer $randomFirstName
     * @param integer $sexe
     * @param array $names
     * @param array $firstnames 
     * @return string
     */
    public static function fakeCompleteName($random = true, $randomFirstName = true, $sexe = 2, $names = array(), $firstnames = array()){
        if(!is_array($firstnames) || count($firstnames)==0){
            if($sexe === 2){
                // female and male
                $firstnames = array_merge(self::$femaleFirstName, self::$maleFirstName);
            }else if($sexe === 1){
                // only male
                $firstnames = self::$maleFirstName;
            }else if($sexe === 0){
                // only female
                $firstnames = self::$femaleFirstName;
            }
        }
        
        if(!is_array($names) || count($names)==0){
            $names = self::$names;
        }
        
        if($random === true){
            $name = $names[rand(0, count($names))];
        }else{
            $name = $names[$random];
        }
        
        if($randomFirstName === true){
            $firstname = $firstnames[rand(0, count($firstnames))];
        }else{
            $firstname = $firstnames[$randomFirstName];
        }
        
        return $firstname . " " . $name;
    }
    
    /**
     * Get a list of complete names
     * 
     * @param integer $number
     * @param integer $sexe
     * @return array 
     */
    public static function fakeCompleteNameList($number = 10, $sexe = 2){
        $list = array();
        for($i=0 ; $i<$number ; $i++){
            $list[] = self::fakeCompleteName(true, true, $sexe);
        }
        return $list;
    }

    /**
     * Get fake address
     * @todo create this function
     */
    public static function fakeAddress(){
        
    }
    
    /**
     * Get fake array
     * @todo create this function
     */
    public static function fakeArray(){
        
    }
    
    /**
     * Get fake StdClass using a model
     * @todo create this function
     * @param StdClass $model 
     */
    public static function fakeStdClass($model){
        
    }
}
