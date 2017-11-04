public class Principal {
    public static void main() {
        int  dato;
        Nodo nuevo, este;
        // Ejercicio 1
        
        System.out.println("Ejercicio 1: ");
        Lista miLista = new Lista();    // instancia una lista vacia                
        for(int i=0;i<10;i++) {          // Agregar 10 nodos 
            dato = 10 + (int)(Math.random()*90);
            nuevo = new Nodo(dato);  //Generar un nodo
            miLista.agregar(nuevo);
        }
        miLista.mostrar();
        // Eliminar cada nodo con info sea menor al siguiente.
        System.out.println("Buscar menores al siguiente y eliminarlos ");
        for(int i=0;i<10;i++) {          // Agregar 10 nodos
            
        }
        //miLista.recorrer();
        System.out.println("Ejercicio 2: ");
        Pila  miPila  = new Pila();     // instancia una pila vacia
        int NP = 0 + (int)(Math.random()*8);
        for(int i=0;i<NP;i++) {          // mete 4 nodos en la pila
            dato = 10 + (int)(Math.random()*90);
            nuevo = new Nodo(dato);
            miPila.meter(nuevo);
            
        }
        miPila.mostrar();
        
        int NC = 0 + (int)(Math.random()*10);
        Cola miCola = new Cola();       // instancia una cola vacia      
        for(int i=0;i<NC;i++) {          // agrega 4 nodos a la cola
            dato = 10 + (int)(Math.random()*90);
            nuevo = new Nodo(dato);
            miCola.agregar(nuevo);
        }
        miCola.mostrar();
        System.out.println("Ejercicio 3: ");
        Cola minCola = new Cola();       // instancia una cola vacia      
        for(int i=0;i<10;i++) {          // agrega 4 nodos a la cola
            dato = 10 + (int)(Math.random()*90);
            nuevo = new Nodo(dato);
            minCola.agregar(nuevo);
        }
    }  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}