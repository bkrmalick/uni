package one;

import java.sql.Driver;

public class WalletTester
{

    public static void main(String [] args)
    {
        Wallet w1=new Wallet();

        Card c1= new Card("general card");
        Card c2= new Card("general card");
        Card c3= new Card("general1 card");

        IDCard idc1=new IDCard("idcard", "123");
        IDCard idc2=new IDCard("idcard", "123");
        IDCard idc3=new IDCard("idcard", "1233");

        DriverLicence dl1=new DriverLicence("DLA", "8989", 1998);
        DriverLicence dl2=new DriverLicence("DLA", "8989", 2012);
        DriverLicence dl3=new DriverLicence("DLA", "8989", 2021);

        CallingCard cc1=new CallingCard("CC bkr","3938", 423);
        CallingCard cc2=new CallingCard("CC bkr","3938", 238);
        CallingCard cc3=new CallingCard("CC bkr","3938", 238);
        System.out.println(w1.getExpiredCount());
      //  System.out.println(w1.formatCards());
        w1.addCard(dl1);
       // System.out.println(w1.formatCards());

        System.out.println(w1.getExpiredCount());
        //w1.addCard(dl1);
        w1.addCard(dl2);
        //System.out.println(w1.formatCards());
        System.out.println(w1.getExpiredCount());



        System.out.println(c1);
        System.out.println(idc1);
        System.out.println(cc1);
        System.out.println(dl1);


        System.out.println("\n\n"+c1.equals(idc2));
        System.out.println(c1.equals(c2));
        System.out.println(c1.equals(c3));


        System.out.println("\n\n"+idc1.equals(c1));
        System.out.println(idc1.equals(idc2));
        System.out.println(idc1.equals(idc3));


        System.out.println("\nDL:\n"+dl1.equals(cc3));
        System.out.println(dl1.equals(dl2));
        System.out.println(dl1.equals(dl3));

    }
}
