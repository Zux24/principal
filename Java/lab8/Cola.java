public class Cola {   
    Nodo FRENTE;
    Nodo FINAL;
    
    public Cola() { //--------------------------------------- CONSTRUCTOR DE LA CLASE COLA crea cola vacia
        FRENTE = null;
        FINAL  = null;
    }
    
    public void mostrar() { //------------------------------- muestra info den cada nodo de la cola
        System.out.print("COLA =");
        Nodo p = FRENTE;
        while(p!=null) {
            System.out.print(" " + p.info);
            p = p.nexo;
        }
        System.out.println();
    }

    public void agregar(Nodo nuevo) { //-------------------------- agrega un nuevo nodo a la cola
        if(FINAL==null) FRENTE     = nuevo;
        else            FINAL.nexo = nuevo;
        FINAL = nuevo;
    }

    public Nodo extraer() { //-------------------------------- extrae un nodo desde la cola
        Nodo este = FRENTE;
        FRENTE    = FRENTE.nexo;
        if(FRENTE==null) FINAL = null;
        if(este!=null) este.nexo = null;
        return este;
    }
    
    public boolean vacia() { return FRENTE==null; } //------- devuelve verdadero si la cola está vacía    
}
