package q2;

public class MyString implements Appendable<MyString>
{
    @Override
    public MyString append(MyString s)
    {
        return new MyString();
    }
}
