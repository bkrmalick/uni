public class Luhn {

    public static void main(String[] args) {
        int num = 2315778;
        System.out.println("CC number: " + num + " is " + checkDigits(num));
        num = 1234567;
        System.out.println("CC number: " + num + " is " + checkDigits(num));
        num = 7654321;
        System.out.println("CC number: " + num + " is " + checkDigits(num));
        num = 1111111;
        System.out.println("CC number: " + num + " is " + checkDigits(num));
    }

    /*public static void main(String[] args) {
        boolean even = false;
        System.out.println(decode(1, even));
        System.out.println(decode(2, even));
        System.out.println(decode(3, even));
        System.out.println(decode(4, even));
        System.out.println(decode(5, even));
        System.out.println(decode(6, even));
        System.out.println(decode(7, even));
        System.out.println(decode(8, even));
        System.out.println(decode(9, even));
        even = ! even;
        System.out.println(decode(1, even)); //2
        System.out.println(decode(2, even));//4
        System.out.println(decode(3, even));//6
        System.out.println(decode(4, even));//8
        System.out.println(decode(5, even));//1
        System.out.println(decode(6, even));//3
       // Page 11
        System.out.println(decode(7, even));//5
        System.out.println(decode(8, even));//7
        System.out.println(decode(9, even));//9
    }*/
    public static int decode(int digit, boolean position)
    {
        int r=digit;

        if(position) //even
        {
            r=((2*r)<10)?2*r:(2*r)%10+((2*r)-((2*r)%10))/10;
        }

        return r;
    }

    public static String checkDigits (int num)
    {
        String s;

        int sum=0;
        //int n=1;
        int digit;
        boolean position=false;

        while(num>0)
        {
            digit=num%10;
            sum+=decode(digit,position);

            num/=10;
            position=!position;
        }

        return (sum%10)==0?"This number may be valid ":"This number is invalid";
    }
}
