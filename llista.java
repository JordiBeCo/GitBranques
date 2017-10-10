import java.util.*;
public class llista {
    public static void main(String[] args) {
        Random random = new Random();

        List<Integer> mylist =  new ArrayList<>();

        for (int i = 0; i < 1000000; i++) {
            mylist.add(random.nextInt(100000));
        }

        long inici = System.nanoTime();
        System.out.println(mylist.contains(36816));

        System.out.println((System.nanoTime() - inici)/1000000 + " milisegons");
    }

}
