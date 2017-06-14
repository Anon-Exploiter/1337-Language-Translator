#!/usr/bin/python

import os, sys
from string import maketrans

if sys.platform == "linux" or sys.platform == "linux2":
    clear = "clear"
else:
	clear="cls"

#Lets Clear The Dirt First :D

os.system(clear) 

banner = r"""
  ____________ _________________   ___________                            
 /_   \_____  \\_____  \______  \  \__    ___/___________    ____   ______
  |   | _(__  <  _(__  <   /    /    |    |  \_  __ \__  \  /    \ /  ___/
  |   |/       \/       \ /    /     |    |   |  | \// __ \|   |  \\___ \ 
  |___/______  /______  //____/      |____|   |__|  (____  /___|  /____  >
             \/       \/                                 \/     \/     \/ ~ By An0n 3xPloiTeR | Team P.C.G
"""

print banner;

str = raw_input("Please Enter Your String To Convert Into 1337 Language: ");

########################################################################################

# Conversion Takes Place In This Block

input = "aAIioOsSeEbBtTlL";

output = "4411005533887711"; 

########################################################################################

manipulation = maketrans(input, output);

print "\n[$] Result: ", str.translate(manipulation), "\n\a";

# Its Done
# See YA :D
# ~ An0n 3xPloiTeR :)	
