public class Q15
{
    final int x;
 public void main(String[] args)
 {
      boolean help=false; 
     int i=0;
     
     while(i<args.length && !help)
     {
         if(args[i] =="--help")
            help=true;
         else
            i++; 
         
        }
     
    }
    
}