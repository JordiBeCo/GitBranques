import java.util.*;
public class llista {
    public static void main(String[] args) {
        Random random = new Random();

        List<Integer> mylist =  new ArrayList<>();

        for (int i = 0; i < 500000; i++) {
            mylist.add(random.nextInt(100000));
        }

       	System.out.println(mylist.contains(36816));
	
	
    }

}
