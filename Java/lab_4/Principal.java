import java.util.Scanner;                                   // importa recursos utiles que se usaran
                                                            //
public class Principal {                                    // clase principal que usará los métodos
                                                            // de la clase Funciones que completarás
    public static void main() {                             //
        Scanner   tc = new Scanner(System.in);              // crea objeto para entradas por teclado
        Funciones fn = new Funciones();                     // crea instancia  de la clase Funciones
        int       N;                                        // número elementos que tendrá arreglo M
                                                            //
        do {                                                // ciclo para garantizar un N de 10 a 20
            System.out.print("N de 10 y 20: ");             // 
            N = tc.nextInt();                               // lee el valor digitado para el valor N
        } while(N<10 || N > 20);                            // repite todo si valor esta fuera rango
                                                            //
        int M[] = new int[N];                               // entonces crea arreglo con N elementos
                                                            //
        System.out.print("M[]=");                           // ahora llena arreglo al azar y muestra
        for(int i=0;i<N;i++) {                              //
            M[i]=10 + (int)(Math.random()*90);              //
            System.out.print(" " +M[i]);                    //
        }                                                   //
        System.out.println();                               //
                                                            //
//      A partir de aquí se hacen llamados a métodos de     //
//      fn, que es una instancia de la clase  Funciones     //        
                                                            //                                                
        System.out.println("Mayor = " + fn.mayor(M,N));     // UN EJEMPLO  PARA QUE TE SIRVA DE GUIA
                                                            //
//      Lo que sigue funcionará solo si escribes en la      //
//      clase Funciones los métodos  que aquí aparecen      //
                                                            //
        System.out.println("Menor = " +fn.menor(M,N));      // Muestra el menor  valor que hay  en M
        System.out.println("Pares = " +fn.pares(M,N));      // Muestra numero pares hay en arreglo M
        System.out.println("Suman = " +fn.suman(M,N));      // Muestra suma elementos  del arreglo M
        fn.alveres(M,N);                                    // Muestra arreglo de  final a principio
        
        
        System.out.print("entero menor que 20: ");          // Ahora se piden valores A,B y se llama
        int A = tc.nextInt();                               // a una función RECRUSIVA  que devuelve
        System.out.print("otro entero menor que 20: ");     // el producto de A por B calculado solo
        int B = tc.nextInt();                               // usando sumas, no el operador *
        System.out.println(A+" * "+B+" = "+fn.por(A,B));    //
        
        if(fn.esPar(A)) System.out.println(A+" es par");    // Ahora se usa una función RECURSIVA a
        else            System.out.println(A+" NO es par"); // fin de determinar si  A es valor par
                                                        
    }
}