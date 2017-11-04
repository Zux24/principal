public class Funciones {                   // Clase en  que debes  completar métodos
                                           //
    // función RECURSIVA que obtiene mayor // AQUI UN EJEMPLO QUE TE SERVIRA DE GUIA
    // valor que existe dentro arreglo  M  //
    public int mayor(int M[],int N){       // recibe arreglo y cantidad de elementos
                                           //
        if(N==1) return M[0];              // CASO BASE: si hay 1 solo  elemento ese
                                           // es el mayor de todos (pues no hay mas)
                                           //
        else {                             // RECURSION: si hay mas de 1 elemento...
                                           //
            int m = mayor(M,N-1);          // primero obtiene el mayor  de los demás
                                           //
            if(M[N-1] > m) return M[N-1];  // si actual es mayor que ese entonces es
                                           // el mayor de todos,devuelve ese  M[N-1]
                                           //
            else           return m;       // en caso contrario devuelve el mayor de
        }                                  // de todos los demás valores en  arreglo 
    }                                      //
//----------------------------------------------------------------------------------
//    
//  Todos los métodos siguientes deben ser recursivos (no puedes usar la instrucción
//  for dentro de ellos pues ninguno de ellos puede ser escritos un método iterativo

    public int menor(int M[], int N) {     // DEVUELVE MENOR  VALOR QUE EXISTE EN  M
        if(N==1) return M[0];
        else {
            int m = menor(M, N-1);
            if (M[N-1]< m) {
                return M[N-1];
            }
            else return m;
        }
            }
    
    public int pares(int M[], int N) {     // DEVUELVE CANTIDAD PARES QUE  HAY EN  M
        //NO FUNCIONA :C
        int cpar = 0;                  
        if (N==1){
            if(M[0]%2==0) return 1;
            else return 0;
        }
        else{
            if(M[N-1]%2==0){
                return 1;
            }
            cpar = cpar ;
        }
        
        return cpar; //esta instrucción debe cambiar, está así solo para poder compilar
    }
 
    public int suman(int M[], int N) {     // DEVUELVE SUMA ELEMENTOS DEL ARREGLO  M
        //NO SE SI FUNCIONA LOL
        int suma = M[0];
        if (N==1) return suma;
        else{
            suma = suma + suman(M, N-1);
        }
        return suma; 
    }
    
    public void alveres(int M[], int N) {  // MUESTRA ARREGLO DEL FINAL AL PRINCIPIO
        
    }
   
    public int por(int A, int B) {         // CALCULA EL PRODUCTO ENTRE VALORES A, B  
        int prod = A;
        if (B==1) return A;
        else{
            prod = prod + por(A,B-1);
        }
        return prod; 
    }
    
    public boolean esPar(int A) {          // DETERMINA SI LA VARIABE A ES VALOR PAR
        //NO LO TERMINE U.U
        if (A<2){
            if (A==0) return true;
            else return false;
        }
        else {
            boolean b;
            b = esPar(A-2);
            return false;
        }
         //esta instrucción debe cambiar, está así solo para poder compilar
    }                                      // pero no puedes usar operadores %, /, *

}