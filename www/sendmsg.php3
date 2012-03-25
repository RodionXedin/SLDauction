<?php
######################################################################## 
# Copyright © 2001 Wanja Hemmerich                                     # 
# First version published May 2001 - This version August 2001          # 
######################################################################## 
# COPYRIGHT NOTICE                                                     # 
# Copyright 2001 Wanja Hemmerich.  All rights reserved.                # 
#                                                                      # 
# This program may be used and modified, as long as this copyright     # 
# notice stays intact.                                                 # 
#                                                                      # 
# Wanja Hemmerich is not responsible for damage, which is possibly     # 
# caused by his program.                                               # 
#                                                                      # 
# This program code may not be sold, nor auctioneered, nor be used in  # 
# any other commercial way in order to make money.                     # 
#                                                                      # 
# This Programm may not be distributed to download neither by          # 
# Internet, nor by another medium.                                     # 
######################################################################## 
#     By using this programm, you agree with these conditions.         # 
#                                                                      # 
######################################################################## 
#     The text above must be kept intact under all circumstances.      # 
######################################################################## 


function sendmsg($to, $subject, $text, $from, $file, $type) {
	$content = fread(fopen($file,"r"),filesize($file));
	$content = chunk_split(base64_encode($content));
	$uid = strtoupper(md5(uniqid(time())));
	$name = basename($file);

	$header = "From: $from\nReply-To: $from\n";
	$header .= "MIME-Version: 1.0\n";
	$header .= "Content-Type: multipart/mixed; boundary=$uid\n";

	$header .= "--$uid\n";
	$header .= "Content-Type: text/plain\n";
	$header .= "Content-Transfer-Encoding: 8bit\n\n";
	$header .= "$text\n";

	$header .= "--$uid\n";
	$header .= "Content-Type: $type; name=\"$name\"\n";

	$header .= "Content-Transfer-Encoding: base64\n";
	$header .= "Content-Disposition: attachment; filename=\"$name\"\n\n";
	$header .= "$content\n";

	$header .= "--$uid--";

	mail($to, $subject, "", $header);

	return true;
}


?>