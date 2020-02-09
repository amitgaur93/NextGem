import java.util.*;

public class Main {
    public static void main(String[] args) {
        // All integre input to be in 'k s t' format
        // example: 2 3 6
        Scanner sc = new Scanner(System.in);
        String line = sc.nextLine();
        
        // Create object of class Character String and calling createCharString function
        CharacterString charString = new CharacterString();
        charString.createCharString(line);
    }
}