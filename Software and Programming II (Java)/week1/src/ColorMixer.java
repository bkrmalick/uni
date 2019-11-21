import java.util.Scanner;
public class ColorMixer {
    public static void main(String[] args) {
        String mixture = "";
        boolean red = false;
        boolean green = false;
        boolean blue = false;
        Scanner in = new Scanner(System.in);
        System.out.print("Include red in mixture? (Y/N) ");
        String input = in.next();
        if (input.toUpperCase().equals("Y"))
            red = true;
        System.out.print("Include green in mixture? (Y/N) ");
        input = in.next();
        if (input.toUpperCase().equals("Y"))
            green = true;
        System.out.print("Include blue in mixture? (Y/N) ");
        input = in.next();
        if (input.toUpperCase().equals("Y"))
            blue = true;
        if (!red && !blue && !green)
            mixture = "BLACK";
        else if (!red && !blue)
            mixture = "GREEN";
        else if (red)
            if (green || blue)
                if (green && blue)
                    mixture = "BLACK";
                else if (green)
                    mixture = "YELLOW";
                else
                    mixture = "PURPLE";
            else
                mixture = "BLACK";
        else if (!green)
            mixture = "BLUE";
        else
            mixture = "WHITE";
        System.out.println("Your mixture is " + mixture);
    }
}


/*
(a) Y N Y //Purple
(b) Y Y N //Yellow
(c) N N N //Black
*/