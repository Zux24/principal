public class Nodo {
    int  info;
    Nodo nexo;
    
    public Nodo() {}
    
    public Nodo(int dato) {
        this.info = dato;
        this.nexo = null;
        
    }
    
    public void setSiguiente(Nodo nexo) {
        this.nexo = nexo;
    }
}