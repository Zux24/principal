
public class Pila {
    Nodo TOPE;

    public Pila() {    //------------------------------------ CONSTRUCTOR DE LA CLASE Pila crea pila vacia
        TOPE = null;
    }

    public void mostrar() { //------------------------------- muestra info en cada nodo de la pila
        System.out.print("PILA = ");
        Nodo p = TOPE;
        while(p!=null) {
            System.out.print(" " + p.info);
            p = p.nexo;
        }
        System.out.println();
    }

    public void meter(Nodo nuevo) { //---------------------------- mete un nuevo nodo en la pila
        nuevo.nexo = TOPE;
        TOPE       = nuevo;
    }

    public Nodo sacar() { //---------------------------------- saca un nodo desde la pila
        Nodo este = TOPE;
        TOPE = TOPE.nexo;
        if(este!=null) este.nexo=null;
        return este;
    }
    
    public boolean vacia() { return TOPE==null; } //--------- devuelve verdadero si la pila está vacía    
}
