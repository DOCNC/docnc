<?
    session_start();
    $pageTitle	= "";
	$section	= "";
	$subSection	= "";
	
	if (eregi('dartmouth.org', $_SERVER['SERVER_NAME'])) {
    	$docRoot = $_SERVER['DOCUMENT_ROOT'].'/clubs/docnc';
        $webRoot = "/clubs/docnc/";
	}
	else {
	   $docRoot = $_SERVER['DOCUMENT_ROOT'];
	   $webRoot = "/";
	}
	
	$payPalCode = '<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="docncreservations@gmail.com" />
        <input type="hidden" name="item_name" value="Dartmouth Outing Club of Northern California" />
        <input type="hidden" name="currency_code" value="USD" />
        <div style="text-align: center; margin: 30px 0">
            <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it\'s fast, free and secure!" />
        </div>
    </form>';
	
	
    function mailLink($email,$text='') {
        $string = '<a href="'.htmlChar('mailto:'.$email).'">';
        if($text != '') {
            $string .= $text;
        }
        else {
            $string .= htmlChar($email);
        }
        $string .= '</a>';
        return $string;
    }
    
    // pass this a string (used by the maillink function) that you want to encrypt to ascii
    function htmlChar($string) {
        // This string will hold the ascii code as the string is constructed
        unset ($output);
        // Loop through all the letters in the string
        for ($i = 0; $i < strlen($string); $i++)
        // Convert the current letter we are looking at to its Ascii code then
        // append it to the end of the output string
        $output .= "&#".ord(substr($string, $i, 1)).";";
        // return the ascii string
        return $output;
    }
    
  date_default_timezone_set('America/Los_Angeles');  

?>
