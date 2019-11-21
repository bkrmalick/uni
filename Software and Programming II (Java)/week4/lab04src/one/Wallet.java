package one;

public class Wallet
{
    private Card card1, card2;

    public Wallet()
    {
        this(null, null);
    }

    public Wallet(Card card1, Card card2)
    {
        this.card1=card1;
        this.card2=card2;
    }

    public void addCard(Card c)
    {
        if(card1==null)
            card1=c;
        else if( card2 == null)
            card2=c;
    }

    public String formatCards()
    {
        String s="[";
        if(card1!=null)
            s+=card1.format();

        if(card2!=null)
            s+="|"+card2.format();

        s+="]";
        return s;
    }

    public int getExpiredCount()
    {
        if(card1!=null && card2!=null && card1.isExpired() && card2.isExpired())
            return 2;
        else if ((card1!=null && card1.isExpired()) || ( card2!=null && card2.isExpired()))
            return 1;
        return 0;
    }


}
