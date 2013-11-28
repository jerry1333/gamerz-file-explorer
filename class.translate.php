<?php
/*
+----------------------------------------------------------------+
|                                                                |
|    GaMerZ File Explorer Version 1.20                           |
|    Copyright (c) 2004-2008 Lester "GaMerZ" Chan                |
|                                                                |
|    File Written By:                                            |
|    - jerry1333                                                 |
|    - http://www.jerry1333.net                                  |
|                                                                |
|    File Information:                                           |
|    - Translation module                                        |
|    - class.translate.php                                       |
|                                                                |
+----------------------------------------------------------------+
*/

class translate 
{
	private $loc_text;
    private $lang;
    private $lang_dir = "./resources/lang";
    
    
    public function __construct($lng) 
    {
        if(is_file($this->lang_dir. '/' . $lng . '.lng'))
        {
            $this->lang = $lng;
            $this->load_lang();
            var_dump($this->loc_text);
        } 
        else
        {
            print("Error loading lang file!");
            print($this->lang_dir ."|$lng");
        }
    }

    /* 
        file-name: 
            en-us.lng, pl-pl.lng etc.
        struct: 
            "locale_text":"localized_text"
        ignore:
            # text
    */
    private function load_lang()
    {
        $file_handle = fopen($this->lang_dir . '/' . $this->lang . '.lng', "r");
        while (!feof($file_handle)) 
        {
            $line = fgets($file_handle);
            
            // skip comment line
            if (substr($line,0,1) == '#')
                continue;
            // skip line not in "":"" format
            //if(!preg_match('/^".*":".*"$/', $line))
            //    continue;
            
            $lines = explode(':',$line);
            
            $lines[0] = str_replace('"','',$lines[0]);
            $lines[1] = str_replace('"','',$lines[1]);
            
            $this->loc_text[$lines[0]] = $lines[1];
        }
    }

    public function loc($from)
    {
        return $this->loc_text[$from];
    }
}

?>