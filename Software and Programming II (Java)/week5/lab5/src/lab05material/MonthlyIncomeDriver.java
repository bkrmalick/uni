package lab05material;

/**
 * Driver class for the ProvidesMonthlyIncome interface
 * and some implementing classes.
 */
public class MonthlyIncomeDriver {

    public static void printInfo(ProvidesMonthlyIncome provider, double threshold) {
        System.out.println(provider.getMonthlyIncome() + " is above threshold: "
                         + provider.isIncomeAboveThreshold(threshold));
    }

    public static void main(String[] args) {
        final double THRESHOLD = 500;

        SavingsAccount account = new SavingsAccount();
        account.setInterestRate(10);
        account.deposit(200);
        account.monthEnd();
        printInfo(account, THRESHOLD);

        RentalProperty property = new RentalProperty("Malet Street", 1000);
        printInfo(property, THRESHOLD);
    }
}
