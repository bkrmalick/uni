package one;

public class WalletTester2 {
    public static void main(String[] args) {
        DriverLicence d = new DriverLicence("John Doe", "08-097654", 2003);
        CallingCard c = new CallingCard("Omega Card", "301233985945", 1030);
        Wallet b = new Wallet();
        b.addCard(d);
        b.addCard(c);
        System.out.println(b.formatCards());
        System.out.println("Number of expired cards: " + b.getExpiredCount());
        System.out.println("Expected: 1");
    }
}