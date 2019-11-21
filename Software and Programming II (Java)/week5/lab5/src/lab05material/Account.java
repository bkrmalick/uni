package lab05material;

/**
 * Abstract superclass for a hierarchy of bank accounts.
 * All Accounts provide functionality to deposit money,
 * to withdraw money, to query the balance, and for
 * end-of-month processing.
 */
public abstract class Account {
    // the class is abstract because one of the methods is abstract

    /** The balance of this Account. */
    private double balance; // private, not protected!

    /**
     * Deposits a certain amount on this Account.
     *
     * @param amount the amount to deposit
     */
    public void deposit(double amount) {
        balance += amount;
    }
    
    /**
     * Withdraws a certain amount from this Account.
     *
     * @param amount the amount to withdraw
     */
    public void withdraw(double amount) {
        balance -= amount;
    }

    /**
     * Abstract method to be executed at each end of month.
     * Subclasses should override this method to perform monthly
     * activities (collecting fees, adding interest, ...).
     */
    public abstract void monthEnd();

    /**
     * Returns the balance of this Account.
     *
     * @return the balance of this Account
     */
    public double getBalance() {
        return balance;
    }    
}
