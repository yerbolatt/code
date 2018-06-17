public class puzirek{
  public static void (main String [] args)
  {
     int [] mas = {1, 5, 6, 45, 5, 25, 47, 24};
     boolean change = true;
     while(change){
       change = false;
      
      for(int i=0; i<mas.length-1; i++){
       if([mas[i]>mas[i-1]]){
       
       int temp = mas[i];
       mas[i] = mas[i-1];
       mas[i-1] = temp;
       // eger  durys bolsa 
       change = true;
       }
      }
     }
     for(int i=0; i<mas.length; i++){
          System.out.println(mas[i]);
     }
  }
}









