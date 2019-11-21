public class Main {
    public static void main(String[] args) {
        Animal a = new Animal();
        Animal b = new Bird();
        Bird c = new Bird();
        Bird d = (Bird) b;
        Bird e = c;
        a.f("");
        b.f("");
        b.f("","");
        c.f("");
        c.f("","");
        d.f("");
        e.f("");
    }

    public static void allTweet(Animal [] animals)
    {
        if(animals!=null)
            for(Animal a:animals)
                if(a!=null && a instanceof Bird)
                    ((Bird)a).tweet();
    }
}