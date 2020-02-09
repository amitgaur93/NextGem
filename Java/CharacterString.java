import java.lang.*;

public class CharacterString{
    
    //Method to create ABC character string
    public static void createCharString(String line){
        //Creating string builder objects, as we have to update strings
        StringBuilder baseString = new StringBuilder();
        StringBuilder kLevelString = new StringBuilder();

	    //Base string is K level string
        baseString.append("ABC");

	    // Spliting input values of k, s and t
        String[] inputArray = line.split(" ");
        int s = Integer.parseInt(inputArray[1]);
        int t = Integer.parseInt(inputArray[2]);
	
	    //Iterating to get Kth level string
        for(int k = 1; k < Integer.parseInt(inputArray[0]); k++){
	     //Create k-1 level string by appending in kLevelString
            kLevelString.append("A");
            kLevelString.append(baseString);
            kLevelString.append("B");
            kLevelString.append(baseString);
            kLevelString.append("C");

	        //Updating base string to newly created Kth string
            baseString.replace(0, baseString.length(), kLevelString.toString());

	        //Setting k level string back to blank value
            kLevelString.setLength(0);
        }
        
        // Call printCharacters function to print characters from s to t
        printCharacters(baseString, s, t);
    }
    
    //Method to print characters from s to t from the Kth string
    public static void printCharacters(StringBuilder baseString, int s, int t){
        for(int i = s -1; i < t; i++){
            System.out.print(baseString.charAt(i));
        }
    }
}