package lab05material;

public interface ProvidesMonthlyIncome {
    double getMonthlyIncome();

    public default boolean isIncomeAboveThreshold(double threshold)
    {
        return getMonthlyIncome()>threshold;
    }
}
