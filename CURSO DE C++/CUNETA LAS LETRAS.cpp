#include <stdio.h>
#include <string.h>
main ()
{
	char buffer[256];
	
	printf( "Enter your name and press <Enter>:\n");
	gets( buffer );
	
	printf( "\nYour name has %d characters and spaces!", 
	                  strlen ( buffer ));
	                  
	return 0;
}
