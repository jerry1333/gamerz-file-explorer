<?php

class translate 
{
	private $localised_text;
    private $lang;
    private $lang_dir;
    
    
    function __construct(string $lng,string $dir) 
    {
        if(is_dir($dir))
        {
            if(is_file($dir . $lng . '.lng'))
            {
                $lang = $lng;
                $lang_dir = $dir;
                
                load_lang();
            }
        }
        
    }

    /* 
        file-name: 
            en-us.lng, pl-pl.lng etc.
        struct: 
            "locale_text":"localized_text"
    */
    function load_lang()
    {
        
        
    }
    
    function translate(string $from)
    {
        return $localised_text[$from];
    }
    
    function _(string $from)
    {
        return translate($from);
    }
}
?>