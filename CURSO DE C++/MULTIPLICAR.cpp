/* Este programa calcula el producto de dos numeros. */
#include <stdio.h>
int a,b,c;
int product(int x, int y);
main()
{
	/* Pide el primer numero */
	printf ("Enter a number between 1 and 100: ");
	scanf ("%d", &a);
	
	/* Pide el segundo numero */
	printf ("Enter a number between 1 and 100: ");
	scanf ("%d", &b);
	
	/* Calcula y despliega el producto */
	c = product(a, b);
	printf ("\n%d times %d = %d", a, b, c);
}

/* Funcion que regresa el producto de sus dos argumentos */
int product (int x, int y)
{
	return (x * y);
}
