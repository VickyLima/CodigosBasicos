def mi_funcion():
 print ("una funcion")
 
class MiClase:
 def __init__(self):
     print ("una clase")
print ("un modulo")

print ("se muestra siempre")
if __name__ == "__main__":
 print ("Se muestra si no es importacion")
 
 nombre = raw_input("Como te llamas? ")
print ("Encantado, " + nombre)

import sys
if(len(sys.argv) > 1):
 print ("Abriendo") + sys.argv[1]
else:
 print ("Debes indicar el nombre del archivo")