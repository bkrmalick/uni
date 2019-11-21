package lab05material;

/**
 * A standard debit account. It has a limited number of free withdrawals.
 */
public class StandardAccount extends Account {
    /** The number of withdrawals that have been performed this month. */
    private int withdrawals;
    
    @Override
    public void withdraw(double amount) {
        final int FREE_WITHDRAWALS = 3;  // alternative: make these constants
        final double WITHDRAWAL_FEE = 1; // private instance "variables" instead
        super.withdraw(amount);
        withdrawals++;
        if (withdrawals > FREE_WITHDRAWALS) {
            super.withdraw(WITHDRAWAL_FEE);
        }
    }
    
    @Override
    public void monthEnd() {
        withdrawals = 0;
    }    
}
