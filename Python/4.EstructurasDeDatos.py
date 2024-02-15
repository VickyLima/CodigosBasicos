#LISTAS -----------------------------

myList = ["Pan", "leche", "azucar", 2, 4.6, True, ["Javi", "Isma", "Nefta"], 26]
print (myList)
print(len(myList)) #Devuelve el numero de elementos en la lista, 8
print(myList.index("azucar")) #Devuelve el numero de la posicion de un elemento en la lista, 2
myList.append("leche") #Se ocupa para agregar un elemto a la lista
print(myList)
print(myList.count("leche")) #Indica cuantas veces se repite el elemto en la lista
myList.extend([4, 5]) #podemos añadir elementos de una lista como nuevos elementos dentro de la nueva lista.
myList.insert(2, "Burro") #Inserta datos. El prinmer lugar indica la posicion y luego el dato
print(myList)

#DIRECTORIOS----------------------
d1 = {
  "Nombre": "Sara",
  "Edad": 27,
  "Documento": 1003882
}
print(d1)
#{'Nombre': 'Sara', 'Edad': 27, 'Documento': 1003882}

# Imprime los key del diccionario
for x in d1:
    print(x)
#Nombre
#Edad
#Documento
#Direccion

# Impre los value del diccionario
for x in d1:
    print(d1[x])
#Laura
#27
#1003882
#Calle 123

# Imprime los key y value del diccionario
for x, y in d1.items():
    print(x, y)
#Nombre Laura
#Edad 27
#Documento 1003882
#Direccion Calle 123

#TUPLAS ---------------------
tupla = (1, 2, 3)
print(tupla) #(1, 2, 3)
 
 # Tambien se puede declarar sin () y solo con , 
tupla = 1, 2, 3
print(type(tupla)) #<class 'tuple'>
print(tupla)       #(1, 2, 3)
 
 #Tuplas anidadas -----------------
tupla = 1, 2, ('a', 'b'), 3
print(tupla)       #(1, 2, ('a', 'b'), 3)
print(tupla[2][0]) #a

l = [1, 1, 1, 3, 5]
print(l.count(1)) #cuenta el número de veces que el objeto pasado como parámetro se ha encontrado en la lista.

l = [7, 7, 7, 3, 5]
print(l.index(5)) # busca el objeto que se le pasa como parámetro y devuelve el índice en el que se ha encontrado.

