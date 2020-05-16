import java.util.ArrayList;

public class Bidouille
{
    
    private ArrayList<Machin> machins =new ArrayList <Machin> ();
    private Truc truc; 

    public Bidouille(ArrayList<Machin> machins ,Truc truc)
    {
        this.machins=machins;
        this.truc=truc;
    }
    public float toto(String set){
        for(int i=0;i<machins.size();i++){
         if( machins.get(i).nom()==set){
           return machins.get(i).calcul();
          }
        }
          return 0;
    }
    
    public Machin pippo(){
        float min=machins.get(0).calcul();
        int c=0;
        for(int i=1;i<machins.size();i++){
         if( machins.get(i).calcul()<min){
          min= machins.get(i).calcul();
          c=i;
          }
          
        }
        return machins.get(c);
    }
    
    /**
     * An example of a method - replace this comment with your own
     *
     * @param  y  a sample parameter for a method
     * @return    the sum of x and y
     */
   
}
public class Machin{
    private final float poids;
    private final float prix;
    private final String nom;
    
    public Machin(float poids,float prix,String nom){
        this.poids=poids;
        this.prix=prix;
        this.nom=nom;
    }
    public float getPoids(){
        return this.poids;
    }
    public float getPrix(){
        return this.prix;
    }
    public String getNOM(){
        return this.nom;
    }
    public String toString(){
        return " le poids " +this.poids+ " le prix " +this.prix+ " nom "+this.nom;
    }
    public float calcul(){
        return this.prix/this.poids;
    }
    public String nom(){
    return this.nom;
}
}