unicode = u"ae"
raw = r"/n"

#Escribir codigo en varias lineas--------
triple = """primera line
esto se vera en la segunda linea"""

#C O N D I C I O N A L E S---------------

#CONDICIONAL IF----------- (SI)
Fiona = "tres cachorritos"
if Fiona == "tres cachorritos":
    print ("Felicidades!")
    print ("Ya eres mama")
    
#CONDICIONAL IF- ELSE---------------
Fiona = "tres cachorritos"
if Fiona == "tres cachorritos":
    print ("Felicidades!")
    print ("Ya eres mama") 
else: #else (Si no) Este se puede remplazar con if 
    if Fiona != "tres cachorritos":
        print ("Vaya que lastima")
    
 #CONDICIONAL If- elif- elif- else------------ (Si no, numero es mayor a 0)

numero = 0
if numero < 0:
     print ("Negativo")
elif numero > 0:
     print ("Positivo")
else: 
     print ("Cero")
     
#B U C L E S -----------------

#Bucle While-----------(mientras)
edad = 0
while edad < 18:
    edad = edad + 1
    print ("Felicidades, tienes " + str(edad))

#Bucles infinito

while True:
    entrada = input ("> ")
    if entrada == "adios":
        break
    else:
        print ("entrada")    

#BUCLE FOR - IN---------- (For recorre secuencias)
secuencia = ["uno", "dos", "tres"]
for elemento in secuencia:
    print ("elemento")
        