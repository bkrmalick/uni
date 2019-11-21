package one;

public class CallingCard extends Card
{
    private String cardNumber;
    private int pin;


    public CallingCard()
    {
       this("","",-1);
    }

    public CallingCard(String name, String cardNumber, int pin)
    {
        super(name);
        this.cardNumber=cardNumber;
        this.pin=pin;
    }

    @Override
    public String format()
    {
        return (super.format()+", Card Number: "+cardNumber+ ", PIN: "+pin);
    }

    @Override
    public String toString()
    {
        return super.toString() + "[number="+cardNumber+",pin="+pin+"]";
    }

    public String getCardNumber()
    {
        return cardNumber;
    }

    public int getPin()
    {
        return pin;
    }

    @Override
    public boolean equals(Object o)
    {
        if(!super.equals(o))
            return false;

        CallingCard c= (CallingCard) o;

        return (this.getCardNumber().equals(c.getCardNumber()) && this.getPin()==c.getPin());
    }
}
