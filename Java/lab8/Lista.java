public class Lista {
    Nodo inicio;
    Nodo ultimo;
    
    public Lista() {
        this.inicio = null;
        this.ultimo = null;
    }
    
    
    
    public void mostrar() { //------------------------------- muestra info den cada nodo de la lista
        System.out.print("LISTA =");
        Nodo p = inicio;
        while(p!=null) {
            System.out.print(" " + p.info);
            p = p.nexo;
        }
        System.out.println();
    }
    
    public void borrar(int pos) {
        Nodo aux = inicio;
        Nodo anterior = null;
        Nodo ac = null;
        int contador = 0;
        
        while(aux!=null){
            if(pos == contador){
                if (anterior == null){
                    inicio = inicio.nexo;
                }
                else {
                    ac = aux.nexo;
                    anterior.setSiguiente(ac);
                }
            }
            else{
                anterior=aux;
                aux=aux.nexo;
                contador++;
            }
        }
        
    }
    
    public void agregar(Nodo nuevo) { //-------------------------- agrega un nuevo nodo a la lista
        if(ultimo==null) inicio  = nuevo;
        else         ultimo.nexo = nuevo;
        ultimo = nuevo;
    }

    public Nodo extraer() { //-------------------------------- extrae un nodo desde la lista
        Nodo este = inicio;
        inicio    = inicio.nexo;
        if(inicio==null) ultimo   = null;
        if(este!=null)   este.nexo = null;
        return este;
    }
    
    public boolean vacia() { return inicio==null; } //------- devuelve verdadero si la lista está vacía    
}